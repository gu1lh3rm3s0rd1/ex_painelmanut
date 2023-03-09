<html>
<head>
</head>
<style>
      
    </style>
     
 <?php 
 
 //header('Refresh:60'); 

include 'conexaooracle.php';

//pedido total
$sql = oci_parse ($conexao,"SELECT SUM(C6_VALOR) AS VL_TOT
FROM SC6010 SC6 
INNER JOIN SC5010 ON C6_NUM = C5_NUM AND C5_ZZREJ <> 'S' AND C5_ZZCAN <> 'S' 
INNER JOIN SB1010 ON C6_PRODUTO = B1_COD AND B1_FILIAL = '01' 
INNER JOIN SA1010 ON C6_CLI = A1_COD AND C6_LOJA = A1_LOJA AND C6_BLQ <> 'R'
INNER JOIN SF4010 ON C6_TES = F4_CODIGO AND SF4010.D_E_L_E_T_ = ' ' 
WHERE C6_FILIAL = '01' AND SUBSTR(C5_EMISSAO, 1, 4) BETWEEN  '2021' AND TO_CHAR(CURRENT_DATE, 'YYYY') AND C6_NOTA = ' ' AND SC6.D_E_L_E_T_ <> '*' 
AND SB1010.D_E_L_E_T_ <> '*' AND SC5010.D_E_L_E_T_ <> '*' AND SA1010.D_E_L_E_T_ <> '*' AND F4_DUPLIC = 'S'");


oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo "<br>";

   
    $pedtl = $dados['VL_TOT'];

    
if ($pedtl == null or ""){
  echo "0";
}
    ?>
    


<?php //echo 'R$'.number_format(str_replace(',','.', $pedtl),2,',','.'); ?>
<?php } ?>

 
  <body>

</body>
</html>