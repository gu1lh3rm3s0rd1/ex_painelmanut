<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="60; url=painel_index.php">
  <link rel="stylesheet" href="index.css">
  <title>Analise de Vendas</title>
 <!-- BIBLIOTECAS NECESSARIAS PARA USAR OS RECURSOS DO JAVASCRIPT -->
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          [' ', 'VENDAS', 'FATURAMENTO'],

            //SELECIONA DADOS
            <?php

include 'conexaofaturamentodiario.php' ;
include 'conexaosomaanual.php' ;
include 'conexaovendadiaria.php' ;
include 'conexao.php';
              
                $consulta = oci_parse($conexao, "
                SELECT X2.MES AS MES, LPAD(TO_CHAR(X2.TOTAL, '999G999G999D99'), 8) AS TOTAL_FAT, LPAD(TO_CHAR(NVL(Y2.TOTAL, 0), '999G999G999D99'), 8) AS TOTAL_VEND
                FROM
                (
                SELECT X.ANO, X.MES, SUM(X.TOTAL) AS TOTAL, X.NUM_MES
                FROM
                (
                SELECT EXTRACT(YEAR FROM TO_DATE(F2_EMISSAO,'YYYYMMDD'))AS ANO, 
                       TO_CHAR(TO_DATE(F2_EMISSAO,'YYYYMMDD'),'MM') AS NUM_MES, 
                       TO_CHAR(TO_DATE(F2_EMISSAO,'YYYYMMDD'),'MON') AS MES,
                       F2_VALFAT AS TOTAL
                FROM SF2010
                WHERE SF2010.D_E_L_E_T_ = ' ' AND F2_EMISSAO IS NOT NULL
                ) X 
                WHERE X.ANO = EXTRACT(YEAR FROM SYSDATE)
                GROUP BY X.ANO, X.MES, X.NUM_MES
                ORDER BY X.NUM_MES
                ) X2 
                INNER JOIN
                (
                SELECT Y.ANO, Y.MES, SUM(Y.TOTAL) AS TOTAL, Y.NUM_MES
                FROM
                (
                SELECT EXTRACT(YEAR FROM TO_DATE(C5_EMISSAO,'YYYYMMDD')) AS ANO, 
                       TO_CHAR(TO_DATE(C5_EMISSAO,'YYYYMMDD'),'MM') AS NUM_MES, 
                       TO_CHAR(TO_DATE(C5_EMISSAO,'YYYYMMDD'),'MON') AS MES,
                       C6_VALOR AS TOTAL 
                FROM SC6010 
                INNER JOIN SC5010 ON C6_FILIAL = C5_FILIAL AND C6_NUM = C5_NUM AND SC5010.D_E_L_E_T_ = ' ' AND SC6010.D_E_L_E_T_ = ' '
                INNER JOIN SF4010 ON F4_CODIGO = C6_TES AND SF4010.D_E_L_E_T_ = ' '
                WHERE C5_FILIAL = '01' AND F4_DUPLIC = 'S' AND C5_TIPO = 'N' AND C6_BLQ <> 'R' AND EXTRACT(YEAR FROM TO_DATE(C5_EMISSAO,'YYYYMMDD')) = EXTRACT(YEAR FROM SYSDATE) AND C5_EMISSAO IS NOT NULL
                ) Y
                WHERE Y.ANO = EXTRACT(YEAR FROM SYSDATE)
                GROUP BY Y.ANO, Y.MES, Y.NUM_MES             
                ORDER BY Y.NUM_MES
                ) Y2 
                ON X2.NUM_MES = Y2.NUM_MES
                ORDER BY X2.NUM_MES");

                oci_execute($consulta);         

                //PREPARA ARRAYS PARA SELECIONAR AS COLUNAS DESEJADAS 
                $mes = '';
                $total_v3nd4 = '';
                $total_f4t = '';

                //SELECIONAMOS OS DADOS QUE QUEREMOS
                while ($dados = oci_fetch_array($consulta)){
                $meses = $mes . '' . $dados['MES'] . '';
                $vend = $total_v3nd4 . '' . $dados['TOTAL_VEND'] . '';
                $fat = $total_f4t . '' . $dados['TOTAL_FAT'] . '';

            ?>

            ['<?php echo $meses ?>', <?php echo $vend ?>, <?php echo $fat ?>],

            <?php } ?>

            ]);

            //FORMATANDO OS VALORES DAS COLUNAS DO GRAFICO 
     var formatter = new google.visualization.NumberFormat({
              //decimalSymbol: '.',
              //groupingSymbol: '.',
              suffix: ' M',
              prefix: 'R$'
        });
            // Estou aplicando para as colunas 1 e 2
            formatter.format(data, 1);
            formatter.format(data, 2);       

            //CHAMA OS ANNOTATES/ROTULO DOS DADOS EO INSERE ACIMA DE CADA COLUNA DO GRAFICO
     var view = new google.visualization.DataView(data);
     view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation"
                        },
                       2, 
                       { calc: "stringify",
                         sourceColumn: 2,
                         type: "string",
                         role: "annotation"
                        }
                    ]);

         var options = {
                colors: ['#313B6C', '#B22222'],
                legend: {
                   position: 'top',
                   alignment: 'left',
                   textStyle: {
                    fontSize: 9.5,
                        colors: ['#B22222', '#B22222'],
                   }
                },
                annotations: {
                    textStyle: {
                        color: ['#B22222', '#B22222'],
                        fontSize: 9.5,
                       // auraColor: 'red'
                    }
                },
                //vAxis: {
                    //title: 'Price in Millions',
				//	textStyle : {
				//		fontSize : 14
				//	},
                series: {
                    2: {
                        targetAxisIndex:0
                    }
                },
                vAxis: {
                    ticks: [0, 5, 10, 15, 20, 25]
                }
                //vAxis: {
                  //      ticks: [{v:0, f:'R$1 M'}, {v:4, f:'R$4 M'}, {v:8, f:'R$8 M'}, {v:12, f:'R$12 M'}, {v:16, f:'R$16 M'}, {v:20, f:'R$20 M'}],
                    //    textStyle: {
                      //  color: 'black'
                   // }
                   // }
            };

            var chart = new google.visualization.LineChart(document.getElementById('myDiv'));
      chart.draw(view, options);
    }

    </script>
    <!-- ENQUADRAMOS O GRAFICO INTEIRO DENTRO DO MAIN PARA PODER CONSTRUIR UM AUTO-REDIMENSIONAMENTO/RESPONSIVIDADE -->
    <main>
  
    <div id="myDiv"></div>
      </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>