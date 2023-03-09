<?php 
include 'conexaooracle.php';
?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR0 FROM P11PROD.SC6010  SC6010, 
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

    $vdm = $dados['VALOR0'];

     if ($vdm == null or ""){
      $vdm = 0;
   }else{
   
      $vdm = $dados['VALOR0'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>



<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR1 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -1, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm1 = $dados['VALOR1'];

     if ($vdm1 == null or ""){
      $vdm1 = 0;
   }else{
   
      $vdm1 = $dados['VALOR1'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR2 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -2, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm2 = $dados['VALOR2'];

     if ($vdm2 == null or ""){
      $vdm2 = 0;
   }else{
   
      $vdm2 = $dados['VALOR2'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR3 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -3, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm3 = $dados['VALOR3'];

     if ($vdm3 == null or ""){
      $vdm3 = 0;
   }else{
   
      $vdm3 = $dados['VALOR3'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR4 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -4, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm4 = $dados['VALOR4'];

     if ($vdm4 == null or ""){
      $vdm4 = 0;
   }else{
   
      $vdm4 = $dados['VALOR4'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>

<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR5 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -5, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm5 = $dados['VALOR5'];

     if ($vdm5 == null or ""){
      $vdm5 = 0;
   }else{
   
      $vdm5 = $dados['VALOR5'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR6 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -6, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm6 = $dados['VALOR6'];

     if ($vdm6 == null or ""){
      $vdm6 = 0;
   }else{
   
      $vdm6 = $dados['VALOR6'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR7 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -7, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm7 = $dados['VALOR7'];

     if ($vdm7 == null or ""){
      $vdm7 = 0;
   }else{
   
      $vdm7 = $dados['VALOR7'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>



<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR8 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -8, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm8 = $dados['VALOR8'];

     if ($vdm8 == null or ""){
      $vdm8 = 0;
   }else{
   
      $vdm8 = $dados['VALOR8'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>



<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR9 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -9, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm9 = $dados['VALOR9'];

     if ($vdm9 == null or ""){
      $vdm9 = 0;
   }else{
   
      $vdm9 = $dados['VALOR9'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>


<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR10 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -10, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm10 = $dados['VALOR10'];

     if ($vdm10 == null or ""){
      $vdm10 = 0;
   }else{
   
      $vdm10 = $dados['VALOR10'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>


<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR11 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -11, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm11 = $dados['VALOR11'];

     if ($vdm11 == null or ""){
      $vdm11 = 0;
   }else{
   
      $vdm11 = $dados['VALOR11'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>



<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR12 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -12, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm12 = $dados['VALOR12'];

     if ($vdm12 == null or ""){
      $vdm12 = 0;
   }else{
   
      $vdm12 = $dados['VALOR12'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>


<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR13 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -13, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm13 = $dados['VALOR13'];

     if ($vdm13 == null or ""){
      $vdm13 = 0;
   }else{
   
      $vdm13 = $dados['VALOR13'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>


<?php 

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR)  AS VALOR14 FROM P11PROD.SC6010  SC6010, 
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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE -14, 'YYYYMMDD'))");

oci_execute($sql);


while ($dados = oci_fetch_array($sql)){

    //echo 'VENDA NO MES'. "<br>";
    //echo "<br>";

    $vdm14 = $dados['VALOR14'];

     if ($vdm14 == null or ""){
      $vdm14 = 0;
   }else{
   
      $vdm14 = $dados['VALOR14'];
   }
    //$b = $dados['F4_FINALID'];
    //$c = $dados ['F4_CODIGO']; ?>



<?php //echo 'R$'.number_format(str_replace(',','.', $c),2,',','.'); ?>
<?php } ?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm = $dados['VALORF'];
    
    if ($fm == null or ""){
      $fm = 0;
    }else{
    $fm = $dados['VALORF'];
 }}?>


<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF1  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -1, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm1 = $dados['VALORF1'];
    
    if ($fm1 == null or ""){
      $fm1 = 0;
    }else{
    $fm1 = $dados['VALORF1'];
 }}?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF2  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -2, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm2 = $dados['VALORF2'];
    
    if ($fm2 == null or ""){
      $fm2 = 0;
    }else{
    $fm2 = $dados['VALORF2'];
 }}?>


<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF3  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -3, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm3 = $dados['VALORF3'];
    
    if ($fm3 == null or ""){
      $fm3 = 0;
    }else{
    $fm3 = $dados['VALORF3'];
 }}?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF4  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -4, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm4 = $dados['VALORF4'];
    
    if ($fm4 == null or ""){
      $fm4 = 0;
    }else{
    $fm4 = $dados['VALORF4'];
 }}?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF5  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -5, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm5 = $dados['VALORF5'];
    
    if ($fm5 == null or ""){
      $fm5 = 0;
    }else{
    $fm5 = $dados['VALORF5'];
 }}?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF6  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -6, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm6 = $dados['VALORF6'];
    
    if ($fm6 == null or ""){
      $fm6 = 0;
    }else{
    $fm6 = $dados['VALORF6'];
 }}?>


<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF7  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -7, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm7 = $dados['VALORF7'];
    
    if ($fm7 == null or ""){
      $fm7 = 0;
    }else{
    $fm7 = $dados['VALORF7'];
 }}?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF8  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -8, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm8 = $dados['VALORF8'];
    
    if ($fm8 == null or ""){
      $fm8 = 0;
    }else{
    $fm8 = $dados['VALORF8'];
 }}?>
 
<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF9  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -9, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm9 = $dados['VALORF9'];
    
    if ($fm9 == null or ""){
      $fm9 = 0;
    }else{
    $fm9 = $dados['VALORF9'];
 }}?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF10  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -10, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm10 = $dados['VALORF10'];
    
    if ($fm10 == null or ""){
      $fm10 = 0;
    }else{
    $fm10 = $dados['VALORF10'];
 }}?>


<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF11  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -11, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm11 = $dados['VALORF11'];
    
    if ($fm11 == null or ""){
      $fm11 = 0;
    }else{
    $fm11 = $dados['VALORF11'];
 }}?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF12  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -12, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm12 = $dados['VALORF12'];
    
    if ($fm12 == null or ""){
      $fm12 = 0;
    }else{
    $fm12 = $dados['VALORF12'];
 }}?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF13  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -13, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm13 = $dados['VALORF13'];
    
    if ($fm13 == null or ""){
      $fm13 = 0;
    }else{
    $fm13 = $dados['VALORF13'];
 }}?>

<?php 

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALORF14  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE -14, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $fm14 = $dados['VALORF14'];
    
    if ($fm14 == null or ""){
      $fm14 = 0;
    }else{
    $fm14 = $dados['VALORF14'];
 }}?>


<?php 

$vdm = number_format(str_replace(',','.', $vdm),2,'.');
$vdm1 = number_format(str_replace(',','.', $vdm1),2,'.');
$vdm2 = number_format(str_replace(',','.', $vdm2),2,'.');
$vdm3 = number_format(str_replace(',','.', $vdm3),2,'.');
$vdm4 = number_format(str_replace(',','.', $vdm4),2,'.');
$vdm5 = number_format(str_replace(',','.', $vdm5),2,'.');
$vdm6 = number_format(str_replace(',','.', $vdm6),2,'.');
$vdm7 = number_format(str_replace(',','.', $vdm7),2,'.');
$vdm8 = number_format(str_replace(',','.', $vdm8),2,'.');
$vdm9 = number_format(str_replace(',','.', $vdm9),2,'.');
$vdm10 = number_format(str_replace(',','.', $vdm10),2,'.');
$vdm11 = number_format(str_replace(',','.', $vdm11),2,'.');
$vdm12 = number_format(str_replace(',','.', $vdm12),2,'.');
$vdm13 = number_format(str_replace(',','.', $vdm13),2,'.');
$vdm14 = number_format(str_replace(',','.', $vdm14),2,'.');

$fm = number_format(str_replace(',','.', $fm),2,'.');
$fm1 = number_format(str_replace(',','.', $fm1),2,'.');
$fm2 = number_format(str_replace(',','.', $fm2),2,'.');
$fm3 = number_format(str_replace(',','.', $fm3),2,'.');
$fm4 = number_format(str_replace(',','.', $fm4),2,'.');
$fm5 = number_format(str_replace(',','.', $fm5),2,'.');
$fm6 = number_format(str_replace(',','.', $fm6),2,'.');
$fm7 = number_format(str_replace(',','.', $fm7),2,'.');
$fm8 = number_format(str_replace(',','.', $fm8),2,'.');
$fm9 = number_format(str_replace(',','.', $fm9),2,'.');
$fm10 = number_format(str_replace(',','.', $fm10),2,'.');
$fm11 = number_format(str_replace(',','.', $fm11),2,'.');
$fm12 = number_format(str_replace(',','.', $fm12),2,'.');
$fm13 = number_format(str_replace(',','.', $fm13),2,'.');
$fm14 = number_format(str_replace(',','.', $fm14),2,'.');
?>

