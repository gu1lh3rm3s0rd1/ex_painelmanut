<?php 

require_once 'conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <title>Front - Painel</title>
</head>

<body>

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load("current", {packages:['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            [' ', 'VENDAS', 'FATURAMENTO'],

              //SELECIONA DADOS
              <?php
              include 'conexao.php';
                
              $sql = oci_parse ($conexao,"SELECT X2.DIA AS DIA, TO_CHAR(SUM(X2.TOTAL), '999G999G999D99') AS TOTAL_FAT, TO_CHAR(NVL(SUM(Y2.TOTAL), 0), '999G999G999D99') AS TOTAL_VEND
              FROM
              (
              SELECT X.DIA, X.NUM_MES, SUM(X.TOTAL) AS TOTAL
              FROM
              (
              SELECT EXTRACT(YEAR FROM TO_DATE(F2_EMISSAO,'YYYYMMDD'))AS ANO, 
                    TO_CHAR(TO_DATE(F2_EMISSAO,'YYYYMMDD'),'MM') AS NUM_MES, 
                    TO_CHAR(TO_DATE(F2_EMISSAO,'YYYYMMDD'),'DD') AS DIA,
                    F2_VALFAT AS TOTAL
              FROM SF2010
              WHERE SF2010.D_E_L_E_T_ = ' ' AND EXTRACT(YEAR FROM TO_DATE(F2_EMISSAO,'YYYYMMDD')) = EXTRACT(YEAR FROM SYSDATE) AND EXTRACT(MONTH FROM TO_DATE(F2_EMISSAO,'YYYYMMDD')) = EXTRACT(MONTH FROM SYSDATE)
              ) X
              GROUP BY X.DIA, X.NUM_MES
              ORDER BY X.NUM_MES
              ) X2
              INNER JOIN
              (
              SELECT Y.DIA, Y.NUM_MES, SUM(Y.TOTAL) AS TOTAL
              FROM  
              (
              SELECT EXTRACT(YEAR FROM TO_DATE(C5_EMISSAO,'YYYYMMDD')) AS ANO, 
                    TO_CHAR(TO_DATE(C5_EMISSAO,'YYYYMMDD'),'MM') AS NUM_MES, 
                    TO_CHAR(TO_DATE(C5_EMISSAO,'YYYYMMDD'),'DD') AS DIA,
                    C6_VALOR AS TOTAL 
              FROM SC6010 
              INNER JOIN SC5010 ON C6_FILIAL = C5_FILIAL AND C6_NUM = C5_NUM AND SC5010.D_E_L_E_T = ' ' AND SC6010.D_E_L_E_T = ' '
              INNER JOIN SF4010 ON F4_CODIGO = C6_TES AND SF4010.D_E_L_E_T_ = ' '
              WHERE C5_FILIAL = '01' AND F4_DUPLIC = 'S' AND C5_TIPO = 'N' AND C6_BLQ <> 'R' AND EXTRACT(YEAR FROM TO_DATE(C5_EMISSAO,'YYYYMMDD')) = EXTRACT(YEAR FROM SYSDATE) AND EXTRACT(MONTH FROM TO_DATE(C5_EMISSAO,'YYYYMMDD')) = EXTRACT(MONTH FROM SYSDATE)
              ) Y
              GROUP BY Y.DIA, Y.NUM_MES
              ORDER BY Y.NUM_MES
              ) Y2 
              ON X2.DIA = Y2.DIA
              GROUP BY X2.DIA
              ORDER BY X2.DIA");
      
              oci_execute($sql);
      
              $diia = $dados['DIA'];
              $faat = $dados['TOTAL_FAT'];
              $veend = $dados['TOTAL_VEND'];
      
              while ($dados = oci_fetch_array($sql)){
      
              $diia = $dados['DIA'];
              $faat = $dados['TOTAL_FAT'];
              $veend = $dados['TOTAL_VEND'];

              ?>

              ['<?php echo $diia ?>', <?php echo $veend ?>, <?php echo $faat ?>],

              <?php } ?>

              ]);

            //FORMATANDO OS VALORES DAS COLUNAS DO GRAFICO 
    var formatter = new google.visualization.NumberFormat({
            suffix: ' M',
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
                    
          textStyle: {
                    fontSize: 12,
                    },

                colors: ['#313B6C', '#B22222'],
                legend: {
                    position: 'top',
                    alignment: 'center',
                    textStyle: {
                    fontSize: 12,
                        colors: ['#B22222', '#B22222'],
                    }
                },
                annotations: {
                    textStyle: {
                      position: 'top',
                    alignment: 'center',
                        color: ['#B22222', '#B22222'],
                        fontSize: 9,
                    }
                },
                series: {
                    2: {
                        targetAxisIndex:0
                    }
                },
                vAxis: {
                    ticks: [{v:0, f:'0 M'}, {v:5, f:'5 M'}, {v:10, f:'10 M'}, {v:15, f:'15 M'}, {v:20, f:'20 M'}, {v:25, f:'25 M'}]
                }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById("myDiv2"));
      chart.draw(view, options);
    }
  </script>
    <div id="myDiv2"></div>
    
    <?php echo $diia; echo $veend; echo $faat; ?>

</body>
</html>