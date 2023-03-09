<html>
<head>

<style>
    
    </style>
     
 <?php 
 
 //header('Refresh:60'); 

include 'conexaooracle.php';

//media de venda ao dia
$sql = oci_parse ($conexao,"WITH SQLX AS(SELECT SUBSTR(SF2.F2_EMISSAO, 1, 8) AS DIA, 
SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA)
AS TOTAL FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC
AND SD2.D_E_L_E_T_ = ' '  INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES 
AND SF4.D_E_L_E_T_ = ' '
WHERE F2_DUPL <> ' '  AND F2_TIPO <> 'D' 
AND SUBSTR(SF2.F2_EMISSAO, 1, 6) = TO_CHAR(CURRENT_DATE, 'YYYYMM') AND F4_DUPLIC = 'S' AND SF2.D_E_L_E_T_ = ' '
GROUP BY SUBSTR(SF2.F2_EMISSAO, 1, 8)ORDER BY DIA) Select CAST(AVG(total) AS DECIMAL(14,2))AS TOTAL from SQLX");


oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";
 
    //$d = $dados  ['DIA'];
    $mfd = $dados ['TOTAL'];
    

    if ($mfd == null or ""){
        echo "0";
    }
    $mf = str_replace(",",".", $mfd);//formatacao ex: 12345,67 para 12345.67
}
 //echo'R$'.number_format(str_replace(',','.', $mfd),2,',','.');
?>

  </head>
  <body>
   
    
 </body>
</html>