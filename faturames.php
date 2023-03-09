<html>
<head>
</head>
<style>
     /* body
    {
      
    appearance: auto;
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    color: -internal-light-dark(blue);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    background-color: -internal-light-dark(rgb(239, 239, 239), rgb(59, 59, 59));
    box-sizing: border-box;
    margin: 10em;
    font: 800 13.3333px Arial;
    padding: 30px 30px;
    border-width: 5px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
    border-radius: 5px; 
    background: linear-gradient(to right, rgba(0, 126, 174, .85), rgba(26, 193, 187, .85));
    color: white;
    font-family: Montserrat;
    font-size: 30px;

   

    
   
    }
 */
    
    </style>
     
 <?php 
 
 //header('Refresh:60'); 

include 'conexaooracle.php';

//String g_sql_fatura_mes()
$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA)
AS VALOR FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC
AND SD2.D_E_L_E_T_ = ' '  INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' '  
 WHERE F2_DUPL <> ' '  AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 6) = TO_CHAR(CURRENT_DATE, 'YYYYMM')
 AND SF2.D_E_L_E_T_ = ' ' and F4_DUPLIC = 'S'");


oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'FATURAMENTO NO MES'. "<br>";
    //echo "<br>";

   
    $b = $dados['VALOR'];
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; 
    

    if ($b == null or ""){
      echo "0";
    }
      ?>

<?php //echo 'R$'.number_format(str_replace(',','.', $b),2,',','.'); ?>
<?php } ?>

 
  <body>

</body>
</html>