
<?php 

require_once 'conexao.php';
//require_once 'inter2.php';
//require_once 'inter.php';
require_once 'inner.php';

?>

<?php

    $data_atual = date('d/m'); 
    $dia = date('d');
    $mes = date('m');
    $dia = (int)$dia;
    $mes = (int)$mes;

    $data_menos1 = date('d/m', strtotime('-1 days')); $data_menos2 = date('d/m', strtotime('-2 days')); $data_menos3 = date('d/m', strtotime('-3 days')); $data_menos4 = date('d/m', strtotime('-4 days')); $data_menos5 = date('d/m', strtotime('-5 days')); $data_menos6 = date('d/m', strtotime('-6 days')); $data_menos7 = date('d/m', strtotime('-7 days')); $data_menos8 = date('d/m', strtotime('-8 days')); $data_menos9 = date('d/m', strtotime('-9 days')); $data_menos10 = date('d/m', strtotime('-11 days')); $data_menos11 = date('d/m', strtotime('-12 days')); $data_menos12 = date('d/m', strtotime('-13 days')); $data_menos13 = date('d/m', strtotime('-14 days')); $data_menos14 = date('d/m', strtotime('-15 days')); $data_menos15 = date('d/m', strtotime('-16 days')); $data_menos16 = date('d/m', strtotime('-17 days')); $data_menos17 = date('d/m', strtotime('-18 days')); $data_menos18 = date('d/m', strtotime('-19 days')); $data_menos19 = date('d/m', strtotime('-20 days')); $data_menos20 = date('d/m', strtotime('-20 days')); $data_menos21 = date('d/m', strtotime('-21 days')); $data_menos22 = date('d/m', strtotime('-22 days')); $data_menos23 = date('d/m', strtotime('-23 days')); $data_menos24 = date('d/m', strtotime('-24 days')); $data_menos25 = date('d/m', strtotime('-25 days')); $data_menos26 = date('d/m', strtotime('-26 days')); $data_menos27 = date('d/m', strtotime('-27 days'));
    $data_menoS28 = date('d/m', strtotime('-28 days')); $data_menos29 = date('d/m', strtotime('-29 days'));

  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="200; url=index3.php">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <title>Front - Painel</title>
</head>

<body>
    <main class="backy">
  <br><br><br><br><br><br><br>
  
        <div class="inline transform">

            <div class="flex">

                <div class="blue-card">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                      </svg> VENDA NO DIA</strong></label>
                    <br> <br>
                    <label class="white font-30 center"><?php 
include 'vendadia.php';
    //echo number_format(str_replace(',','.', $c),2,',','.');    
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; 
    
       if ($c == null or ""){
     echo "";
   }else{
    echo number_format(str_replace(',','.', $c),2,',','.');    
  }
     ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
</h1>   
</label>
</div>
                <div class="blue-card blue-margin">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                      </svg> VENDA NO MÊS</strong></label>
                    <br><br>
                    <label class="white font-30 center"> <?php 
include 'vendames.php';
    //echo number_format(str_replace(',','.', $a),2,',','.'); 
    if ($a == null or ""){
      echo "0";
    }else{
     echo number_format(str_replace(',','.', $a),2,',','.');    
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>

<?php //echo 'R$'.number_format(str_replace(',','.', $a),2,',','.'); ?>

                </div>

                <div class="blue-card blue-margin">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                      </svg> VENDA NO ANO</strong></label>
                    <br><br>
                    <label class="white font-30 center"><?php 
include 'vendaano.php';
    //echo number_format(str_replace(',','.', $e),2,',','.');
    if ($e == null or ""){
      echo "";
    }else{
     echo number_format(str_replace(',','.', $e),2,',','.');    
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $e),2,',','.'); ?>
                </div>

                <div class="blue-card">
                    <label class="white font-10"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                      </svg> MÉDIA VENDA DIÁRIA</strong></label>
                    <br><br>
                    <label class="white font-30 center"><?php 
include 'mvendadia.php';
    $mvd = str_replace(",",".", $mvd);//formatacao ex: 12345,67 para 12345.67
    //echo number_format(str_replace(',','.', $mvd),2,',','.');
    if ($mvd == null or ""){
      echo "";
    }else{
     echo number_format(str_replace(',','.', $mvd),2,',','.');    
   }
// echo'R$'.number_format(str_replace(',','.', $mv),2,',','.');
?></label>
                </div>

            </div>

            <div class="divider-cards"></div>
            
            <div class="flex">

                <div class="red-card">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
                        <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
                      </svg> FATURAMENTO NO DIA</strong></label>
                    <br><br>
                    <label class="white font-30 center"><?php 

   include 'faturadia.php';
   //echo number_format(str_replace(',','.', $d),2,',','.');
   if ($d == null or ""){
    echo "";
  }else{
   echo number_format(str_replace(',','.', $d),2,',','.');    
 }
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $d),2,',','.'); ?>
</label>
                </div>

                <div class="red-card red-margin">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
                        <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
                      </svg> FATURAMENTO NO MÊS</strong></label>
                      <br><br>
                    <label class="white font-30 center"><?php 
include 'faturames.php';
    //echo number_format(str_replace(',','.', $b),2,',','.');
    if ($b == null or ""){
      echo "";
    }else{
     echo number_format(str_replace(',','.', $b),2,',','.'); 
    }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $b),2,',','.'); ?>
</label>
                </div>

                <div class="red-card red-margin">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
                        <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
                      </svg> FATURAMENTO NO ANO</strong></label>
                      <br><br>
                    <label class="white font-30 center"><?php 
include 'faturaano.php';
     //echo number_format(str_replace(',','.', $f),2,',','.');
     if ($f == null or ""){
      echo "";
    }else{
     echo number_format(str_replace(',','.', $f),2,',','.'); 
    }
     //$b = $dados['F4_FINALID'];
     //$c = $dados ['F4_CODIGO']; ?>
 <?php //echo 'R$'.number_format(str_replace(',','.', $f),2,',','.'); ?>
</label>
                </div>

                <div class="red-card">
                    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
                        <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
                      </svg> MÉDIA DE FATURAMENTO DIÁRIO</strong></label>
                      <br>
                    <label class="white font-30 center"> <?php 
include 'mfaturadia.php';
    $mf = str_replace(",",".", $mf);//formatacao ex: 12345,67 para 12345.67
    //echo number_format(str_replace(',','.', $mfd),2,',','.');
    if ($mf == null or ""){
      echo "";
    }else{
     echo number_format(str_replace(',','.', $mf),2,',','.'); 
    }
 //echo'R$'.number_format(str_replace(',','.', $mfd),2,',','.');
?>
</label>
</div>
</div>

            <div class="flex">
<div class="yellow-card">
    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </svg> CARTEIRA PEDIDOS BLQ FINANCEIRO</strong></label>
      <br><br>
    <label class="white font-30 center"> <?php 
include 'cartpedidobloqestoquefinan.php';

if ($pedbloqestfinan == null or ""){
  echo "";
}else{
 echo number_format(str_replace(',','.', $pedbloqestfinan),2,',','.'); 
}
    //echo number_format(str_replace(',','.', $pedbloqestfinan),2,',','.');
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $pedbloqestfinan),2,',','.'); ?>
</label>
</div>

<div class="yellow-card yellow-margin">
    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </svg> CARTEIRA PEDIDOS LIBERADOS</strong></label>
    <br><br>
    <label class="white font-30 center"> <?php 
include 'cartpedidoliberado.php';

if ($pedlib == null or ""){
  echo "";
}else{
 echo number_format(str_replace(',','.', $pedlib),2,',','.'); 
}
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $pedlib),2,',','.'); ?>
</label>
</div>

<div class="yellow-card yellow-margin">
    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </svg> CARTEIRA PEDIDOS BQL ESTOQUE</strong></label>
    <br><br>
    <label class="white font-30 center"> <?php 
include 'cartpedidobloqestoque.php';
if ($pedbloqest == null or ""){
  echo "";
}else{
 echo number_format(str_replace(',','.', $pedbloqest),2,',','.'); 
}  
//echo number_format(str_replace(',','.', $pedbloqest),2,',','.');
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $pedbloqest),2,',','.'); ?>
</label>
</div>

<div class="yellow-card yellow-margin">
    <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </svg> CARTEIRA PEDIDOS MANUTENÇÃO</strong></label>
    <br><br>
    <label class="white font-30 center"> <?php 
include 'cartpedmanut.php';

if ($pedmanut == null or ""){
  echo "";
}else{
 echo number_format(str_replace(',','.', $pedmanut),2,',','.'); 
}
    //echo number_format(str_replace(',','.', $pedmanut),2,',','.');
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $pedmanut),2,',','.'); ?>

</label>
</div>

<div class="yellow-card">
  <label class="white font-10 center"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </svg> CARTEIRA PEDIDOS TOTAL</strong></label>
  <br><br>
  <label class="white font-30 center"> <?php 
include 'cartpedidototal.php';
if ($pedtl == null or ""){
  echo "";
}else{
 echo number_format(str_replace(',','.', $pedtl),2,',','.'); 
}
//    echo number_format(str_replace(',','.', $pedtl),2,',','.');
    ?>
<?php //echo 'R$'.number_format(str_replace(',','.', $pedtl),2,',','.'); ?>
</label>
</div>
</div>
</div>
</div>
<div class="flex adjust">

<!-- BIBLIOTECAS NECESSARIAS PARA USAR OS RECURSOS DO JAVASCRIPT -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
   google.charts.load("current", {packages:['corechart']});
   google.charts.setOnLoadCallback(drawChart);
   function drawChart() {
     var data = google.visualization.arrayToDataTable([
         [' ', 'VENDAS MENSAIS', 'FATURAMENTO MENSAL'],

           //SELECIONA DADOS
<?php
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

               $vend = number_format(str_replace(',','.', $vend),2,'.');
               $fat = number_format(str_replace(',','.', $fat),2,'.');
?>

           ['<?php echo $meses ?>', <?php echo $vend ?>, <?php echo $fat ?>],

<?php } ?>
]);

          //FORMATANDO OS VALORES DAS COLUNAS DO GRAFICO 
   var formatter = new google.visualization.NumberFormat({
          //prefix: 'R$',
           //decimalSymbol: '.',
           //groupingSymbol: '.',
           suffix: ' M',
       //fractionDigits: 2
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
                   //ticks: [0, 5, 10, 15, 20, 25],
                   ticks: [{v:0, f:'0 M'}, {v:5, f:'5 M'}, {v:10, f:'10 M'}, {v:15, f:'15 M'}, {v:20, f:'20 M'}, {v:25, f:'25 M'}]
               }
               //vAxis: {
                 //      ticks: [{v:0, f:'R$1 M'}, {v:4, f:'R$4 M'}, {v:8, f:'R$8 M'}, {v:12, f:'R$12 M'}, {v:16, f:'R$16 M'}, {v:20, f:'R$20 M'}],
                   //    textStyle: {
                     //  color: 'black'
                  // }
                  // }
           };

           var chart = new google.visualization.ColumnChart(document.getElementById("myDiv"));
     chart.draw(view, options);
   }

   </script>
   <!-- ENQUADRAMOS O GRAFICO INTEIRO DENTRO DO MAIN PARA PODER CONSTRUIR UM AUTO-REDIMENSIONAMENTO/RESPONSIVIDADE -->
   <div id="myDiv"></div>

<div id="myDiv2"></div>

<script>
   var graf1 = {
     x:[
           '<?php echo $data_menos14; ?>',
           '<?php echo $data_menos13; ?>',
           '<?php echo $data_menos12; ?>',
           '<?php echo $data_menos11; ?>',
           '<?php echo $data_menos10; ?>',
           '<?php echo $data_menos9; ?>',
           '<?php echo $data_menos8; ?>',
           '<?php echo $data_menos7; ?>',
           '<?php echo $data_menos6; ?>',
           '<?php echo $data_menos5; ?>',
           '<?php echo $data_menos4; ?>',
           '<?php echo $data_menos3; ?>',
           '<?php echo $data_menos2; ?>',
           '<?php echo $data_menos1; ?>',
           '<?php echo $data_atual; ?>'],
           y:[
              '<?php echo $vdm14; ?>', 
              '<?php echo $vdm13; ?>', 
              '<?php echo $vdm12; ?>', 
              '<?php echo $vdm11; ?>', 
              '<?php echo $vdm10; ?>',  
              '<?php echo $vdm9; ?>', 
              '<?php echo $vdm8; ?>', 
              '<?php echo $vdm7; ?>', 
              '<?php echo $vdm6; ?>', 
              '<?php echo $vdm5; ?>', 
              '<?php echo $vdm4; ?>', 
              '<?php echo $vdm3; ?>', 
              '<?php echo $vdm2; ?>', 
              '<?php echo $vdm1; ?>', 
              '<?php echo $vdm; ?>'],
           mode: 'lines', 
           type: 'scatter',
           marker: {"color": "#313B6C"},
            name: 'Venda'   
       };

       var graf2 = {
         x:[
           '<?php echo $data_menos14; ?>',
           '<?php echo $data_menos13; ?>',
           '<?php echo $data_menos12; ?>',
           '<?php echo $data_menos11; ?>',
           '<?php echo $data_menos10; ?>',
           '<?php echo $data_menos9; ?>',
           '<?php echo $data_menos8; ?>',
           '<?php echo $data_menos7; ?>',
           '<?php echo $data_menos6; ?>',
           '<?php echo $data_menos5; ?>',
           '<?php echo $data_menos4; ?>',
           '<?php echo $data_menos3; ?>',
           '<?php echo $data_menos2; ?>',
           '<?php echo $data_menos1; ?>',
           '<?php echo $data_atual; ?>'],
           y:[ 
             '<?php echo $fm14; ?>', 
             '<?php echo $fm13; ?>', 
             '<?php echo $fm12; ?>', 
             '<?php echo $fm11; ?>', 
             '<?php echo $fm10; ?>',  
             '<?php echo $fm9; ?>', 
             '<?php echo $fm8; ?>', 
             '<?php echo $fm7; ?>', 
             '<?php echo $fm6; ?>', 
              '<?php echo $fm5; ?>', 
              '<?php echo $fm4; ?>', 
              '<?php echo $fm3; ?>', 
              '<?php echo $fm2; ?>', 
              '<?php echo $fm1; ?>', 
             '<?php echo $fm; ?>'],
           mode: 'lines',
           type: 'scatter',
           marker: {"color": "C94141"},
           name: 'Fat.',
       };

     var data = [graf1, graf2];

   //ALTERAR CORES E PROPRIEDADES
var layout = {
 paper_bgcolor: '#fff',
 plot_bgcolor: '#fff',
 
   title: 'TOTAL EM 15 DIAS',
   showlegend: true
};

     var config = {responsive: true}
     Plotly.newPlot('myDiv2', data, layout, {displayModeBar: false, scrollZoom: true});

   </script>
   <!-- ENQUADRAMOS O GRAFICO INTEIRO DENTRO DO MAIN PARA PODER CONSTRUIR UM AUTO-REDIMENSIONAMENTO/RESPONSIVIDADE -->
       </div>
    </main>
</body>
</html>