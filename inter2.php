<?php
              include 'conexao.php';
                
              $sql = oci_parse ($conexao,"SELECT X2.DIA AS DIA, TO_CHAR(SUM(X2.TOTAL), '999G999G999D99') AS TOTAL_FAT, TO_CHAR(NVL(SUM(Y2.TOTAL), 0), '999G999G999D99') AS TOTAL_VEND
              FROM
              (
              SELECT X.DIA, X.NUM_MES, SUM(X.TOTAL) AS TOTAL
              FROM
              (
              SELECT EXTRACT(YEAR FROM TO_DATE(F2_EMISSAO,'YYYYMMDD'))AS ANO, 
                    TO_CHAR(TO_DATE(F2_EMISSAO,'YYYYMMDD'),'MM') AS NUM_MES, 
                    TO_CHAR(TO_DATE(F2_EMISSAO,'YYYYMMDD'),'DD') AS DIA,
                    F2_VALFAT AS TOTAL
              FROM SF2010
              WHERE SF2010.D_E_L_E_T_ = ' ' AND EXTRACT(YEAR FROM TO_DATE(F2_EMISSAO,'YYYYMMDD')) = EXTRACT(YEAR FROM SYSDATE) AND EXTRACT(MONTH FROM TO_DATE(F2_EMISSAO,'YYYYMMDD')) = EXTRACT(MONTH FROM SYSDATE)
              ) X
              GROUP BY X.DIA, X.NUM_MES
              ORDER BY X.NUM_MES
              ) X2
              INNER JOIN
              (
              SELECT Y.DIA, Y.NUM_MES, SUM(Y.TOTAL) AS TOTAL
              FROM  
              (
              SELECT EXTRACT(YEAR FROM TO_DATE(C5_EMISSAO,'YYYYMMDD')) AS ANO, 
                    TO_CHAR(TO_DATE(C5_EMISSAO,'YYYYMMDD'),'MM') AS NUM_MES, 
                    TO_CHAR(TO_DATE(C5_EMISSAO,'YYYYMMDD'),'DD') AS DIA,
                    C6_VALOR AS TOTAL 
              FROM SC6010 
              INNER JOIN SC5010 ON C6_FILIAL = C5_FILIAL AND C6_NUM = C5_NUM AND SC5010.D_E_L_E_T = ' ' AND SC6010.D_E_L_E_T = ' '
              INNER JOIN SF4010 ON F4_CODIGO = C6_TES AND SF4010.D_E_L_E_T_ = ' '
              WHERE C5_FILIAL = '01' AND F4_DUPLIC = 'S' AND C5_TIPO = 'N' AND C6_BLQ <> 'R' AND EXTRACT(YEAR FROM TO_DATE(C5_EMISSAO,'YYYYMMDD')) = EXTRACT(YEAR FROM SYSDATE) AND EXTRACT(MONTH FROM TO_DATE(C5_EMISSAO,'YYYYMMDD')) = EXTRACT(MONTH FROM SYSDATE)
              ) Y
              GROUP BY Y.DIA, Y.NUM_MES
              ORDER BY Y.NUM_MES
              ) Y2 
              ON X2.DIA = Y2.DIA
              GROUP BY X2.DIA
              ORDER BY X2.DIA");
      
              oci_execute($sql);
      
              $diia = $dados['DIA'];
              $faat = $dados['TOTAL_FAT'];
              $veend = $dados['TOTAL_VEND'];

              while ($dados = oci_fetch_array($sql)){
      
              $diia = $dados['DIA'];
              $faat = $dados['TOTAL_FAT'];
              $veend = $dados['TOTAL_VEND'];

              ?>

              <?php } ?>

<?php

$FAT = $FAT;
$VEND = number_format(str_replace(',','.', $VEND),2,'.');
$TOTAL = number_format(str_replace(',','.', $TOTAL),2,'.');

echo $diia;
echo $faat;
echo $veend;

?>
