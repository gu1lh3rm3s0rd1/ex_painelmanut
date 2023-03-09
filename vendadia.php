<html>
<head>
</head>

<style>
</style>
     
 <?php 
 
 //header('Refresh:60'); 

include 'conexaooracle.php';

//String g_sql_venda_mes()
$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR FROM P11PROD.SC6010  SC6010, 
P11PROD.SF4010  SF4010, P11PROD.SC5010  SC5010
WHERE 
   SC6010.D_E_L_E_T_ <> '*'
AND SF4010.D_E_L_E_T_ <> '*'
 AND SC5010.D_E_L_E_T_ <> '*'

 AND SC6010.D_E_L_E_T_ = ' '
  AND SF4010.D_E_L_E_T_ = ' ' 
 AND SC5010.D_E_L_E_T_ = ' '    

   AND SC6010.C6_TES = SF4010.F4_CODIGO 
   AND SF4010.F4_DUPLIC = 'S'
   AND SC5010.C5_NUM = SC6010.C6_NUM
   AND SC5010.C5_TIPO = 'N' AND C6_BLQ <> 'R' 
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

   
    $c = $dados['VALOR'];
   // echo $c = $dados['VALOR'];
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; 
    
    
if ($c == null or ""){
   echo "0";
}
    ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>

  <body>

  
 </body>

</html>