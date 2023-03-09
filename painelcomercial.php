<!DOCTYPE html>
<html>
<!--<meta name="viewport" content="width=device-width, initial-scale=1"><!-->
<title>P A I N E L   C O M E R C I A L - CHIAPERINI</title>


<head>


<script>
   
</script>


<?php
if(!isset($_COOKIE['atualizada'])){
setcookie ("atualizada", "atualizou");
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2\">";

}



?>

</head>

<link rel="stylesheet"  href="css/estilo.css">
   
    <?php
    
    error_reporting(0);//desabilitei warnings
    
     include 'mvendadia.php';
     include 'mfaturadia.php';
     include 'vendadia.php';
     include 'vendames.php';
     include 'vendaano.php';
     include 'faturadia.php';
     include 'faturames.php';
     include 'faturaano.php';

     include 'cartpedidototal.php';
     include 'cartpedidoliberado.php';
     include 'cartpedidobloqestoque.php';
     include 'cartpedidobloqestoquefinan.php';
     include 'cartpedmanut.php';

     session_start();
		if(!isset($_SESSION['email']))
			header("Location: formlogout.php");
	?>
	

<body>
<div class="corcabecalho">
</div>
<div class ="containercabecalho">
   <div class ="h1">
    <!--<pre><h3><font face="COMIC">P A I N E L   C O M E R C I A L  2 0 2 2</font></h3><img src="imagens/logochiape.png" alt=""></pre><!-->
    <pre><h2><img style="vertical-align:middle" src="imagens/logochiap.png" width="240px"><font face="COMIC">&nbsp &nbsp &nbspP A I N E L   C O M E R C I A L  2 0 2 2</font></h2></pre>
     </div>
     </div>
     
    <!-- Link para deslogar <a href="formlogout.php"/>Logout!</a><!-->
    
    
   <div class ="centrogr">
     <div class ="l">
   <?php
     include 'graflinevxf_final.php';
     ?>
     </div>
     <div class="espaço">
     </div>
     <div class="b">
     <?php
     include 'grafcolumnvxf_final.php';
     ?>
     </div>
        </div>

   
 
  <!-- começa o bloco float></!-->

  <div class ="centralizarcards">
    <div class="float1">
    <div class="containervendadia">
      <div class="cardvendadia">
        <img style="width:20%">
        <div class ="cordotexto">
        <h1>VENDA NO DIA</h1>
        
        <?php if ($c <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="price"><?php echo 'R$ '.number_format(str_replace(',','.', $c),2,',','.'); ?></p>
     
      <?php 
    } 
    ?>
        
        </div>
      </div>
      </div>
      
      
   
    <div class="containervendames">
      <div class="cardvendames">
        <img style="width:20%">
        <div class ="cordotexto">
        <h1>VENDA NO MES</h1>
      
        <?php if ($a <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="price"><?php echo 'R$ '.number_format(str_replace(',','.', $a),2,',','.'); ?></p>
     
      <?php 
    } 
    ?>
      </div>
      </div>
      </div>
      

      <div class="containervendaano">
      <div class="cardvendaano">
        <img style="width:20%">
        <div class ="cordotexto">
        <h1>VENDA NO ANO</h1>
        
        <?php if ($e <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="price"><?php echo 'R$ '.number_format(str_replace(',','.', $e),2,',','.'); ?></p>
     
      <?php 
    } 
    ?>
      </div>
      </div>
      </div>
      <div class="containermediadiariavenda">
      <div class="cardmediadiariavenda">
        <img style="width:20%">
        <div class ="cordotexto">
        <h1>MÉDIA DE VENDA DIÁRIA</h1>
        
        <?php if ($mv <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="price"><?php echo 'R$ '.number_format(str_replace(',','.', $mv),2,',','.'); ?></p>
      <?php 
    } 
    ?>
        
        </div>
      </div>
      </div>

     
   <!-- fecha o bloco float></!--> 
</div>

  <!-- começa o bloco float2></!-->
      
   <div class="float2">
       <div class="containerfaturamentodia">
        <div class="cardfaturamentodia">
        <img style="width:20%">
        <div class ="cordotexto">
        <h1>FATURAMENTO NO DIA</h1>

        
      
        <?php if ($d <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{ 
        ?>

      <p class="price"><?php echo 'R$ '.number_format(str_replace(',','.', $d),2,',','.'); ?></p>
     
      <?php 
    }//fecha else 
    ?>
      
      </div>
      </div>
      </div>
   


       <div class="containerfaturamentomes">
        <div class="cardfaturamentomes">
        <img style="width:20%">
        <div class ="cordotexto">
        <h1>FATURAMENTO NO MES</h1>
        
        <?php if ($b <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="price"><?php echo 'R$ '.number_format(str_replace(',','.', $b),2,',','.'); ?></p>
     
      <?php 
    } 
    ?>

      </div>
      </div>
      </div>
      

      <div class="containerfaturamentoano">
        <div class="cardfaturamentoano">
        <img style="width:20%">
        <div class ="cordotexto">
        <h1>FATURAMENTO NO ANO</h1>
        <?php if ($f <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="price"><?php echo 'R$ '.number_format(str_replace(',','.', $f),2,',','.'); ?></p>
     
      <?php 
    } 
    ?>

      </div>
      </div>
      </div>
      <div class="containermediadiariafatura">
      <div class="cardmediadiariafatura">
        <img style="width:20%">
        <div class ="cordotexto">
        <h1>MÉDIA DE FATURAMENTO DIÁRIO</h1>
        
        <?php if ($mf <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="price"><?php echo 'R$ '.number_format(str_replace(',','.', $mf),2,',','.'); ?></p>
     
      <?php 
    } 
    ?>
        
        </div>
      </div>
      </div>
      
     
<!-- fecha o bloco float2></!-->

</div>

<!-- CARTEIRAS PEDIDOS, VLTOT,VLLIB,VLEST,VLESTF,VPMANUT></!-->
      
<!-- começa o bloco float3></!-->

<div class = "float3">

<div class ="containertudo">
<div class="cardtudo">   


<div class="containerpedestf">
        <div class="cardpedestf">
        <img style="width:0%">
        <div class ="cordotexto">
        <div class="c1">
        <h1>CARTEIRA PEDIDOS BLQ FINANCEIRO</h1>
        </div>
        <?php if ($pedbloqestfinan <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="corvalor1"><?php echo 'R$ '.number_format(str_replace(',','.', $pedbloqestfinan),2,',','.'); ?></p>
       <div class="containerlinha1">
       <div class="cardlinha">
      </div>
       </div>
     
     <?php 
    } 
    ?>
      </div>
      </div>
      </div>
      
    
     
      <div class="containerpedlib">
        <div class="cardpedlib">
        <img style="width:0%">
        <div class ="cordotexto">
        <div class="c2">
        <h1>CARTEIRA PEDIDOS LIBERADOS</h1>
        </div>
        <?php if ($pedlib <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="corvalor2"><?php echo 'R$ '.number_format(str_replace(',','.', $pedlib),2,',','.'); ?></p>
     
      <?php 
    } 
    ?>

      </div>
      </div>
      </div>
      

      <div class="containerpedest">
        <div class="cardpedest">
        <img style="width:0%">
        <div class ="cordotexto">
        <div class="c3">
        <h1>CARTEIRA PEDIDOS BLQ ESTOQUE</h1>
        </div>
        <?php if ($pedbloqest <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="corvalor3"><?php echo 'R$ '.number_format(str_replace(',','.', $pedbloqest),2,',','.'); ?></p>
     
      <?php 
    } 
    ?>

      </div>
      </div>
      </div>
      <div class="containerpedmanut">
        <div class="cardpedmanut">
        <img style="width:0%">
        <div class ="cordotexto">
          <div class="c5">
        <h1>CARTEIRA PEDIDOS MANUTENÇÃO</h1>
          </div>
        <?php if ($pedmanut <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="corvalor5"><?php echo 'R$ '.number_format(str_replace(',','.', $pedmanut),2,',','.'); ?></p>
     
      <?php 
    } 
    ?>
    </div>
    </div>
    </div>
 

      <div class="containerpedtotal">
        <div class="cardpedtotal">
        <img style="width:0%">
        <div class ="cordotexto">
          <div class="c4">
        <h1>CARTEIRA PEDIDOS TOTAL</h1>
          </div>
        <?php if ($pedtl <= 0 or ""){
        echo "<p><font face=\"ARIAL\"font size=\"7\" color=\"black\">R$ 0,00</font></p>";
      }else{
        ?>

      <p class="corvalor4"><?php echo 'R$ '.number_format(str_replace(',','.', $pedtl),2,',','.'); ?></p>
     
      <?php 
    } 
    ?>
    </div>
    </div>
    </div>

    
    
  </div> <!-- fecha cardtudo><!-->
  </div> <!-- fecha containertudo><!-->
    
<!-- fecha o bloco float3></!-->
</div>
</div> <!--fecha centralizarcards><!-->


	</script>


  <div class="footer">
  <h1></h1>
  </div>
 

</body>


    
</html>
