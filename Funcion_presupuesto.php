<?php


    $sueldos=$_POST['sueldos'];
    $ingresos2= $_POST['ingresos2'];
    $pago_alquiler= $_POST['pago_alquiler'];
    $hipoteca= $_POST['Hipoteca'];
    $servicios= $_POST['servicios'];
    $mantenimiento= $_POST['mantenimiento'];
    $Alimentacion= $_POST['Alimentacion'];
    $Indumentaria= $_POST['Indumentaria'];
    $seguros= $_POST['seguros'];
    $salud= $_POST['salud'];
    $transporte= $_POST['transporte'];
    $educacion= $_POST['educacion'];
    $espectaculos= $_POST['espectaculos'];
    $Entretenimiento= $_POST['Entretenimiento'];
    $Hoteles= $_POST['Hoteles'];  
    
    $ingresos_total= ($sueldos+$ingresos2);
    $gastos_total= ($pago_alquiler+$hipoteca+$servicios+$mantenimiento+$Alimentacion+$Indumentaria+$seguros+$salud+$transporte+$educacion+$espectaculos+$Entretenimiento+$Hoteles);
    $presupuesto= ($ingresos_total-$gastos_total);

    if ($ingresos_total < $presupuesto ) {
    echo" $mensaje=Sus ingresos no son suficientes para alcanzar el total de su presupuesto, 
    revisa tus gastos para llevar un presupuesto balanceado.";
  }


?>


<!DOCTYPE html>

<html style="font-size: 16px;" lang="es">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="./css/main.css">
	<title>Sistema Presupuesto Familiar</title>
   
  </head>

  <body >
    
 
    <div class="container">
		<div class="form__top">
			<h2>Total de Presupuesto<span>Familiar</span></h2>
		</div>		
		<form class="form__reg" action="">
		<label for="name-2d58" class="lbs">Total de Ingresos:</label>
    <input type="text" placeholder="" id="total_sueldos" name="total_sueldos" class="input" value="<?php echo $ingresos_total?>" readonly >
    <label for="name-2d58" class="lbs">Total de Gastos:</label>
    <input type="text" placeholder="" id="total_gastos" name="total_gastos" class="input" value="<?php echo $gastos_total?>" readonly>
    <label for="name-2d58" class="lbs">Su Presupuesto Familiar es de:</label>
    <input type="text" placeholder="" id="total_presupuesto" class="input" name="total_presupuesto" value="<?php echo $presupuesto?>" readonly>
    <label for="name-2d58" class="lbs">Nota:</label>
    <input type="text" placeholder="" id="nota" class="nota" name="nota" value="<?php echo $mensaje?>" readonly>
                
  </div>
    
            
		</form>
	</div>
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4b8d"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"></p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
       
    </section>
  
  
    <?php


            ?>
</body>
</html>
