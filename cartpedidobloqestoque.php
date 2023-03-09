<html>
<head>
</head>
<style>
      
    </style>
     
 <?php 
 
 //header('Refresh:60');

include 'conexaooracle.php';

//cart pedido bloqueio estoque
$sql = oci_parse ($conexao,"SELECT SUM(CASE WHEN (C9_BLEST <> '  ' AND C9_NFISCAL = '  ') THEN 
C9_PRCVEN * C9_QTDLIB ELSE 0   END ) AS VL_BLOE  
FROM  P11PROD.SC9010 SC9010, P11PROD.SC5010 SC5010, P11PROD.SC6010 SC6010, P11PROD.SF4010 SF4010
WHERE SC9010.D_E_L_E_T_ <> '*'
AND SC5010.D_E_L_E_T_ <> '*' 
AND SC6010.D_E_L_E_T_ <> '*'
AND SF4010.D_E_L_E_T_ <> '*'
AND C5_NUM = C9_PEDIDO 
AND C6_ITEM = C9_ITEM 
AND C5_FILIAL = C9_FILIAL  
AND C5_ZZREJ <> 'S' 
AND C9_NFISCAL = '  ' 
AND C6_NOTA = '   ' 
AND C5_NUM = C6_NUM 
AND C5_FILIAL = C6_FILIAL 
AND C6_TES = F4_CODIGO  
AND F4_DUPLIC = 'S'");


oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo "<br>";

   
    $pedbloqest = $dados['VL_BLOE'];
   
    
if ($pedbloqest == null or ""){
  echo "0";
}
    ?>
    


<?php //echo 'R$'.number_format(str_replace(',','.', $pedbloqest),2,',','.'); ?>
<?php } ?>

 
  <body>

</body>
</html>