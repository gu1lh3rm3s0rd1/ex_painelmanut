<?php include 'conexao.php'; ?>

<?php

//vendadia

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
   AND (SUBSTR(SC5010.C5_EMISSAO,1 , 8) = TO_CHAR(CURRENT_DATE, 'YYYYMMDD')))

   UNION ALL

     (SELECT SUM(SC6010.C6_VALOR)  AS VALOR2 FROM P11PROD.SC6010  SC6010,  
P11PROD.SF4010  SF4010, P11PROD.SC5010  SC5010  
 WHERE SC6010.D_E_L_E_T_ <> '*'  
 AND SF4010.D_E_L_E_T_ <> '*' 
 AND SC5010.D_E_L_E_T_ <> '*'    
 AND SC6010.C6_TES = SF4010.F4_CODIGO 
 AND SF4010.F4_DUPLIC = 'S' 
 AND SC5010.C5_NUM = SC6010.C6_NUM 
 AND SC5010.C5_TIPO = 'N' AND C6_BLQ <> 'R' 
 AND (SUBSTR(SC5010.C5_EMISSAO,1 , 6) = TO_CHAR(CURRENT_DATE, 'YYYYMM'))
 ");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $c = $dados['VALOR'];
    $a = $dados['VALOR2'];

if ($c == null or ""){
   echo "0";
}
   
  
if ($a == null or ""){
  echo "0";
}}

//vendaano

$sql = oci_parse ($conexao,"SELECT SUM(SC6010.C6_VALOR) AS VALORMES   FROM P11PROD.SC6010  SC6010, 
P11PROD.SF4010  SF4010, P11PROD.SC5010  SC5010
WHERE SC6010.D_E_L_E_T_ <> '*' 
AND SF4010.D_E_L_E_T_ <> '*' 
AND SC5010.D_E_L_E_T_ <> '*' 
AND SC6010.C6_TES = SF4010.F4_CODIGO 
AND SF4010.F4_DUPLIC = 'S' 
AND SC5010.C5_NUM = SC6010.C6_NUM 
AND SC5010.C5_TIPO = 'N' AND C6_BLQ <> 'R' 
AND (SUBSTR(SC5010.C5_EMISSAO,1 , 4) = TO_CHAR(CURRENT_DATE, 'YYYY'))");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $e = $dados['VALORMES'];
  
if ($e == null or ""){
    echo "0";
}}

//faturadia

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA) 
AS VALOR  FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' ' 
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' '   
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 8) = TO_CHAR(CURRENT_DATE, 'YYYYMMDD') 
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){
   
    $d = $dados['VALOR'];
   
if ($d == null or ""){
  echo "0";
}}

//faturames

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA)
AS VALOR FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC
AND SD2.D_E_L_E_T_ = ' '  INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' '  
 WHERE F2_DUPL <> ' '  AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 6) = TO_CHAR(CURRENT_DATE, 'YYYYMM')
 AND SF2.D_E_L_E_T_ = ' ' and F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $b = $dados['VALOR'];
    
    if ($b == null or ""){
      echo "0";
    }}

//faturaano

$sql = oci_parse ($conexao,"SELECT SUM(D2_TOTAL)+SUM(D2_VALIPI)+SUM(D2_ICMSRET)+SUM(D2_SEGURO)+SUM(D2_VALFRE)+SUM(D2_DESPESA)
AS VALOR FROM P11PROD.SF2010 SF2   INNER JOIN P11PROD.SD2010 SD2 ON    D2_DOC = F2_DOC AND SD2.D_E_L_E_T_ = ' '
INNER JOIN P11PROD.SF4010 SF4 ON    F4_CODIGO = D2_TES AND SF4.D_E_L_E_T_ = ' ' WHERE F2_DUPL <> ' ' 
AND F2_TIPO <> 'D' AND SUBSTR(SF2.F2_EMISSAO, 1, 4) = TO_CHAR(CURRENT_DATE, 'YYYY')
AND SF2.D_E_L_E_T_ = ' '  AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $f = $dados['VALOR'];  
    
if ($f == null or ""){
  echo "0";
}}

//médiafaturamento

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

    $mfd = $dados ['TOTAL'];
    
    if ($mfd == null or ""){
        echo "0";
    }
    $mf = str_replace(",",".", $mfd);//formatacao ex: 12345,67 para 12345.67
}

//médiavendas

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

    $mvd = $dados ['TOTAL'];
    
    if ($mvd == null or ""){
      echo "0";
    }
    $mvd = str_replace(",",".", $mvd);//formatacao ex: 12345,67 para 12345.67
}

//cartpedest

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

    $pedbloqest = $dados['VL_BLOE'];
     
if ($pedbloqest == null or ""){
  echo "0";
}}

//cartpedestfinanceiro

$sql = oci_parse ($conexao,"SELECT SUM( CASE WHEN(C9_BLCRED <> '10' AND C9_NFISCAL = '  ' and C9_BLCRED <> '09' and C9_BLCRED <> '   ' ) THEN 
C9_PRCVEN * C9_QTDLIB   ELSE 0 END ) AS VL_BLOF 
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

    $pedbloqestfinan = $dados['VL_BLOF'];
      
if ($pedbloqestfinan == null or ""){
  echo "0";
}}

//cartpedliberados

$sql = oci_parse ($conexao,"SELECT SUM(CASE WHEN(C9_OK = '  ' AND C9_NFISCAL = '  ' AND C9_BLEST = '  ' AND C9_BLCRED = '  ') THEN 
C9_PRCVEN * C9_QTDLIB ELSE 0        END) AS VL_LIB
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
   
    $pedlib = $dados['VL_LIB'];
  
if ($pedlib == null or ""){
  echo "0";
}}

//cartpedmanutenção

$sql = oci_parse ($conexao,"SELECT SUM(C6_VALOR) AS TOTAL
FROM SC6010 SC6 
INNER JOIN SC5010 ON C6_NUM = C5_NUM AND C5_LIBEROK = ' ' AND C5_NOTA = ' ' AND C5_BLQ = ' ' AND C5_ZZREJ <> 'S' AND C5_ZZCAN <> 'S' 
INNER JOIN SB1010 ON C6_PRODUTO = B1_COD AND B1_FILIAL = '01' 
INNER JOIN SA1010 ON C6_CLI = A1_COD AND C6_LOJA = A1_LOJA 
INNER JOIN SF4010 ON C6_TES = F4_CODIGO AND SF4010.D_E_L_E_T_ = ' ' 
WHERE C6_FILIAL = '01' AND SUBSTR(C5_EMISSAO, 1, 4) BETWEEN  '2021' AND TO_CHAR(CURRENT_DATE, 'YYYY') AND C6_NOTA = ' ' AND SC6.D_E_L_E_T_ <> '*' 
AND SB1010.D_E_L_E_T_ <> '*' AND SC5010.D_E_L_E_T_ <> '*' AND SA1010.D_E_L_E_T_ <> '*' AND F4_DUPLIC = 'S'");

oci_execute($sql);

while ($dados = oci_fetch_array($sql)){

    $pedmanut = $dados['TOTAL'];   
    
if ($pedmanut == null or ""){
  echo "0";
}}
  
//cartpedtotal

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

    $pedtl = $dados['VL_TOT'];
    
if ($pedtl == null or ""){
  echo "0";
}}

?>