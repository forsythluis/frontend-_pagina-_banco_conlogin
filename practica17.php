<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
        <link rel="stylesheet" href="efectos8.css" type="text/css">
        <script type="text/javascript">
        	function redireccionar() {
				window.location="ejemplohtml5.html";
			}

        	function valida(){
        		var user='calavera';
        		var cleves='12345';
				var usuario=document.getElementById('usuario');
				var pass=document.getElementById('clave');

				if ((usuario.value == user)&&(pass.value == cleves)){
					window.alert("Correcto");
					setTimeout ("redireccionar()", 5000);
				}else{
				    window.alert("Clave y Usuario incorrectos");	

				}
			}
			
        </script>
      // <!--  <?php
            //function valida(){
               // var $user='calavera';
               // var $cleves='12345';
               // var $usuario= $_post[usuario];
               // var $pass=$_post[password];
               // if ($usuario=$user & $pass=$cleves)
                //    echo"windows.alert('Correcto')";
               //     echo"setTimeout('redireccionar(),5000')";
           // }else{
                   // echo"windows.alert(Clave y Usuario incorrecto)";
           // }

       // ?> -->
       
    </head>
    <body>
    	 <div class="header">
	    	<h1>Banco Generacional</h1>
	   </div>
	   <ul>
		  <li><a href="#home" onclick="javascript:window.close()">Home</a></li>
		  <li><a href="#news">News</a></li>
		  
		</ul>
		
         <form id ="forma"  method="post">
         	<p>
         		<label for="usuario">Ingrese Usuario</label>
         		<input type="text" name="usuario" id="usuario">
         	</p>
        	<p>
        		<label for="clave">Ingrese Clave</label>
        		<input type="password" name="clave" id="clave">
        	</p>
        	
        	<br></br>
        	<p class="subm-rest">
        		<input type="button"  value="Enviar" name="enviar" id="enviar" onclick="valida()">
        	    <input type="reset" name="limpiar" value="Limpiar Campos">
        	</p>
        	
         </form>
		
        <div class="footer">
		  <p>Footer</p>
		  <p>Caracas,Urbanizaci&oacuten La Castellana.</p>
	   	  <p>Tel&eacutefono: 52632352</p>
	   	  <p>Contacto:<a href="BancoGeneracional@gmail.com">BancoGeneracional@gmail.com</a></p>
		</div>
    </body>
</html>