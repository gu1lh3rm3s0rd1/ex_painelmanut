
<?php 

require_once 'conexao.php';
require_once 'inter2.php';
//require_once 'inter.php';
//require_once 'inner.php';

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
    <meta http-equiv="refresh" content="200;">
    <link rel="stylesheet" href="style.css">
    <title>Front - Painel</title>
</head>

<body>
    <main class="backy">
  <br><br><br><br><br><br><br>
  

<div id="myDiv2"></div>


           <?php echo $data_menos14; ?>
           <?php echo $data_menos13; ?>
           <?php echo $data_menos12; ?>
           <?php echo $data_menos11; ?>
           <?php echo $data_menos10; ?>
           <?php echo $data_menos9; ?>
           <?php echo $data_menos8; ?>
           <?php echo $data_menos7; ?>
           <?php echo $data_menos6; ?>
           <?php echo $data_menos5; ?>
           <?php echo $data_menos4; ?>
           <?php echo $data_menos3; ?>
           <?php echo $data_menos2; ?>
           <?php echo $data_menos1; ?>
           <?php echo $data_atual; ?>
              <?php echo $vdm14; ?>
              <?php echo $vdm13; ?>
              <?php echo $vdm12; ?> 
              <?php echo $vdm11; ?> 
              <?php echo $vdm10; ?>  
              <?php echo $vdm9; ?>
              <?php echo $vdm8; ?> 
              <?php echo $vdm7; ?> 
              <?php echo $vdm6; ?> 
              <?php echo $vdm5; ?> 
              <?php echo $vdm4; ?> 
              <?php echo $vdm3; ?>
              <?php echo $vdm2; ?> 
              <?php echo $vdm1; ?> 
              <?php echo $vdm; ?>       
           <?php echo $data_menos14; ?>
           <?php echo $data_menos13; ?>
           <?php echo $data_menos12; ?>
           <?php echo $data_menos11; ?>
           <?php echo $data_menos10; ?>
           <?php echo $data_menos9; ?>
           <?php echo $data_menos8; ?>           
           <?php echo $data_menos7; ?>
           <?php echo $data_menos6; ?>
           <?php echo $data_menos5; ?>
           <?php echo $data_menos4; ?>
           <?php echo $data_menos3; ?>           
           <?php echo $data_menos2; ?>           
           <?php echo $data_menos1; ?>
           <?php echo $data_atual; ?>
         
            <?php echo $fm14; ?> 
             <?php echo $fm13; ?> 
             <?php echo $fm12; ?> 
             <?php echo $fm11; ?> 
             <?php echo $fm10; ?>  
             <?php echo $fm9; ?>
             <?php echo $fm8; ?>
             <?php echo $fm7; ?> 
             <?php echo $fm6; ?> 
              <?php echo $fm5; ?> 
              <?php echo $fm4; ?> 
              <?php echo $fm3; ?> 
              <?php echo $fm2; ?> 
            <?php echo $fm1; ?>
             <?php echo $fm; ?>
         
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Vendas', 'Faturamento'],
           
          ['<?php echo $data_menos12; ?>', 222.50, 840],
          ['<?php echo $data_menos11; ?>', 565, 925],
          ['<?php echo $data_atual; ?>', 787, 102]
        ]);

        var options = {
          title: 'Company Performance',
          
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <div id="curve_chart" style="width: 900px; height: 500px"></div>  

    </main>
</body>
</html>