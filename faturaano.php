<html>
<head>
</head>
<style>
      
    </style>
     
 <?php 
 
// header('Refresh:60'); 

include 'conexaooracle.php';

//String g_sql_fatura_ano()
$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA)
AS VALOR FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' '
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' ' 
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 4) = TO_CHAR(CURRENT_DATE, 'YYYY')
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'FATURAMENTO NO MES'. "<br>";
    //echo "<br>";

   
    $f = $dados['VALOR'];
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; 
    
    
if ($f == null or ""){
  echo "0";
}
    ?>
    


<?php //echo 'R$'.number_format(str_replace(',','.', $f),2,',','.'); ?>
<?php } ?>

 
  <body>

</body>
</html>