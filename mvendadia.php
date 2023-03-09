<html>
<head>

<style>
    
    </style>
     
 <?php 
 
 header('Refresh:60'); 

include 'conexaooracle.php';

//media de venda ao dia
$sql = oci_parse ($conexao,"WITH SQLX AS( SELECT 
SUBSTR(SC5010.C5_EMISSAO,1,8) AS DIA,      
SUM(SC6010.C6_VALOR) AS TOTAL 
FROM P11PROD.SC6010  SC6010, 
P11PROD.SF4010  SF4010, P11PROD.SC5010  SC5010 
WHERE SC6010.D_E_L_E_T_ <> '*' 
  AND SF4010.D_E_L_E_T_ <> '*' 
  AND SC5010.D_E_L_E_T_ <> '*' 
  AND SC6010.C6_TES = SF4010.F4_CODIGO 
  AND SF4010.F4_DUPLIC = 'S' 
  AND SC5010.C5_NUM = SC6010.C6_NUM
  AND SC5010.C5_TIPO = 'N' AND C6_BLQ <> 'R'
  AND (SUBSTR(SC5010.C5_EMISSAO,1 , 6) = TO_CHAR(CURRENT_DATE, 'YYYYMM')) 
GROUP BY SUBSTR(SC5010.C5_EMISSAO,1 , 8) 
ORDER BY DIA) Select CAST(AVG(TOTAL) AS DECIMAL(14,2)) AS TOTAL from SQLX");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";
 
    //$d = $dados  ['DIA'];
    $mvd = $dados ['TOTAL'];
    

    if ($mvd == null or ""){
      echo "0";
    }
    $mvd = str_replace(",",".", $mvd);//formatacao ex: 12345,67 para 12345.67
}
// echo'R$'.number_format(str_replace(',','.', $mv),2,',','.');
?>

  </head>
  <body>
   
    
 </body>
</html>