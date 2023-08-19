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
			<h2>Presupuesto <span>Familiar </span></h2>
		</div>
    
    <div class="form__top">
			<h2>Ingresos<span> </span></h2>
		</div>   
            <h2>Nota:Ingresa 0 en las casillas que no utilizarás.</h2>
            <form action="Funcion_presupuesto.php" class="form__reg" method="post">
                     
                    
                        <label for="name-2d58" class="lbs">Sueldos</label>
                        <input type="text" placeholder="Ingrese el total de sueldos" id="name-2d58" name="sueldos" class="input">
                      
                       
                       
                        <label for="email-2d58" class="lbs">Otros Ingresos</label>
                        <input type="text" placeholder="Ingrese otros ingresos" id="email-2d58" name="ingresos2" class="input">
                        
                   
                        <label for="text-cbee" class="lbs">Pago de Alguiler</label>
                        <input type="text" placeholder="Ingrese la cuota de alquiler de vivienda" id="text-cbee" name="pago_alquiler" class="input">
                    
                    
                        <label for="text-2a89" class="lbs">Hipoteca</label>
                        <input type="text" placeholder="Ingrese la cuota de hipoteca (si posee)" id="text-2a89" name="Hipoteca" class="input">
                      
                      
                        <label for="text-00ed" class="lbs">Servicios</label>
                        <input type="text" placeholder="Ingrese el presupuesto destinado a servicios regulares" id="text-00ed" name="servicios" class="input">
                     
                      
                        <label for="text-8732" class="lbs">Mantenimiento</label>
                        <input type="text" placeholder="Ingrese el presupuesto destinado a mantenimiento del hogar" id="text-8732" name="mantenimiento" class="input">
                     
                      
                        <label for="text-ad31" class="lbs">Alimentación</label>
                        <input type="text" placeholder="Ingrese el presupuesto destinado a la alimentación" id="text-ad31" name="Alimentacion" class="input">
                     
                      
                        <label for="text-ac2f" class="lbs">Seguros</label>
                        <input type="text" placeholder="Ingrese el presupuesto destinado a seguros de: autos,vivienda,de vida,etc" id="text-ac2f" name="seguros" class="input">
                      
                        <label for="text-5650" class="lbs">Indumentaria</label>
                        <input type="text" placeholder="Ingrese el presupuesto destinado al vestuario,zapatos,etc " id="text-5650" name="Indumentaria" class="input">
                     
                      
                        <label for="text-8723" class="lbs">Transporte: </label>
                        <input type="text" placeholder="Gasolina,Autos,Tren,etc " id="text-8723" name="transporte" class="input">
                     
                        <label for="text-39ae" class="lbs">Salud</label>
                        <input type="text" placeholder="Ingrese el presupuesto destinado a salud" id="text-39ae" name="salud" class="input">
                      
                        <label for="text-b0d9" class="lbs">Educación</label>
                        <input type="text" placeholder="Ingrese el presupuesto destinado a educación" id="text-b0d9" name="educacion" class="input">
                     
                        <label for="text-10cf" class="lbs">Imprevistos y otros bienes y servicios</label>
                        <input type="text" placeholder="Ingrese otros gastos" id="text-10cf" name="espectaculos" class="input">
                     
                        <label for="text-4c4a" class="lbs">Hoteles</label>
                        <input type="text" placeholder="Ingrese los gastos de Cafés,restaurantes" id="text-4c4a" name="Hoteles" class="input">
                  
                        <label for="text-71d4" class="lbs">Entretenimiento</label>
                        <input type="text" placeholder="Ingrese los gastos de entretenimiento" id="text-71d4" name="Entretenimiento" class="input">
                  
                        <input type="submit" value="CALCULAR" class="btn__submit">
                        

                      </div>
                      
                    </form>
          

                  </div>
                </div>
              </div>
    </section>
    
		</form>
	</div>
  
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4b8d"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"></p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
       
    </section>
  
  
 
            
</body>
</html>