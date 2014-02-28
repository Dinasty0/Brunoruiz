<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8" />

    <title>Clases basicas css</title>
    <link rel="stylesheet" type="text/css" href="css/cssbase.css">
    <link rel="stylesheet" type="text/css" href="estilos.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--[if lte IE 6]>
		<link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

  </head>

  <body>

  	<header>
      <h2>Como utilizar base.css</h2>
    </header>

    <div id="contenido">
    	<section>

    		<article>
          <h3>Color texto</h3>
          <span>Para añadir color a un texto, simplemente habra que añadir la clase correspondiente descrita abajo.</span>
          <ul id="cltx">
            <li class="ro">ro</li>
            <li class="rosc">rosc</li>
            <li class="vecl">vecl</li>
            <li class="veosc">veosc</li>
            <li class="azcl">azcl</li>
            <li class="azosc">azosc</li>
            <li class="ne">ne</li>
            <li class="bl">bl</li>
            <li class="sil">sil</li>
            <li class="mag">mag</li>
            <li class="magosc">magosc</li>
            <div class="borrar"></div>
          </ul>
        </article>

        <article>
          <h3>Color fondo</h3>
          <span>Para añadir color de fondo a una capa, simplemente habra que añadir la clase correspondiente descrita abajo.</span>
          <ul id="clbg">
            <li class="ro-bg">ro-bg</li>
            <li class="rosc-bg">rosc-bg</li>
            <li class="vecl-bg">vecl-bg</li>
            <li class="veosc-bg">veosc-bg</li>
            <li class="azcl-bg">azcl-bg</li>
            <li class="azosc-bg">azosc-bg</li>
            <li class="ne-bg bl">ne-bg</li>
            <li class="bl-bg">bl-bg</li>
            <li class="sil-bg">sil-bg</li>
            <li class="mag-bg">mag-bg</li>
            <li class="magosc-bg">magosc-bg</li>
            <div class="borrar"></div>
          </ul>
        </article>

        <article>
          <h3>Color borde</h3>
          <span>Para añadir color al borde a una capa, simplemente habra que añadir la clase correspondiente descrita abajo.</span>
          <ul id="clbr">
            <li class="ne-br1">ne-br1</li>
            <li class="dw-ne-br1">dw-ne-br1</li>
            <li class="up-ne-br1">up-ne-br1</li>
            <li class="izq-ne-br1">izq-ne-br1</li>
            <li class="dech-ne-br1">dech-ne-br1</li>
            <li class="ne-br2">ne-br2</li>
            <li class="dw-ne-br2">dw-ne-br2</li>
            <li class="up-ne-br2">up-ne-br2</li>
            <li class="izq-ne-br2">izq-ne-br2</li>
            <li class="dech-ne-br2">dech-ne-br2</li>

            <li class="vecl-br1">vecl-br1</li>
            <li class="dw-vecl-br1">dw-vecl-br1</li>
            <li class="up-vecl-br1">up-vecl-br1</li>
            <li class="izq-vecl-br1">izq-vecl-br1</li>
            <li class="dech-vecl-br1">dech-vecl-br1</li>
            <li class="vecl-br2">vecl-br2</li>
            <li class="dw-vecl-br2">dw-vecl-br2</li>
            <li class="up-vecl-br2">up-vecl-br2</li>
            <li class="izq-vecl-br2">izq-vecl-br2</li>
            <li class="dech-vecl-br2">dech-vecl-br2</li>
            <li class="veosc-br1">veosc-br1</li>
            <li class="dw-veosc-br1">dw-veosc-br1</li>
            <li class="up-veosc-br1">up-veosc-br1</li>
            <li class="izq-veosc-br1">izq-veosc-br1</li>
            <li class="dech-veosc-br1">dech-veosc-br1</li>
            <li class="veosc-br2">veosc-br2</li>
            <li class="dw-veosc-br2">dw-veosc-br2</li>
            <li class="up-veosc-br2">up-veosc-br2</li>
            <li class="izq-veosc-br2">izq-veosc-br2</li>
            <li class="dech-veosc-br2">dech-veosc-br2</li>

            <li class="ro-br1">ro-br1</li>
            <li class="dw-ro-br1">dw-ro-br1</li>
            <li class="up-ro-br1">up-ro-br1</li>
            <li class="izq-ro-br1">izq-ro-br1</li>
            <li class="dech-ro-br1">dech-ro-br1</li>            
            <li class="ro-br2">ro-br2</li>
            <li class="rosc-br1">rosc-br1</li>
            <li class="rosc-br2">rosc-br2</li>

            <li class="bl-br1">bl-br1</li>
            <li class="dw-bl-br1">dw-bl-br1</li>
            <li class="up-bl-br1">up-bl-br1</li>
            <li class="izq-bl-br1">izq-bl-br1</li>
            <li class="dech-bl-br1">dech-bl-br1</li>
            <li class="bl-br2">bl-br2</li>
            <li class="dw-bl-br2">dw-bl-br2</li>
            <li class="up-bl-br2">up-bl-br2</li>
            <li class="izq-bl-br2">izq-bl-br2</li>
            <li class="dech-bl-br2">dech-bl-br2</li>

            <li class="mag-br1">mag-br1</li>
            <li class="dw-mag-br1">dw-mag-br1</li>
            <li class="up-mag-br1">up-mag-br1</li>
            <li class="izq-mag-br1">izq-mag-br1</li>
            <li class="dech-mag-br1">dech-mag-br1</li>
            <li class="mag-br2">mag-br2</li>
            <li class="magosc-br1">magosc-br1</li>
            <li class="magosc-br2">mag-br2</li>
            <li class="dw-mag-br2">dw-mag-br2</li>
            <li class="up-mag-br2">up-mag-br2</li>
            <li class="izq-mag-br2">izq-mag-br2</li>
            <li class="dech-mag-br2">dech-mag-br2</li>

            <li class="azcl-br1">azcl-br1</li>
            <li class="azosc-br1">azosc-br1</li>
            
            <li class="sil-br1">sil-br1</li>
            <li class="sil-br2">sil-br2</li>
            <div class="borrar"></div>
          </ul>
        </article>

        <article>
          <h3>Padding</h3>
          <span>Para añadir un padding a una caja, simplemente habra que añadir la clase correspondiente descrita abajo.</span>
          <ul id="pd">
            <li class="pd2 bl-bg">pd2</li>
            <li class="pd5 bl-bg">pd5</li>
            <li class="pd10 bl-bg">pd10</li>
            <div class="borrar"></div>
          </ul>
        </article>

        <article>
          <h3>Orientación izquierda o derecha</h3>
          <span>Para orientar una caja, simplemente habra que añadir la clase correspondiente descrita abajo.</span>
          <br/>
          <div class="izq">izq</div>
          <div class="dech">dech</div>
          <div class="borrar">borrar</div>
        </article>

        <article>
          <h3 class="borrar">Cabezeras</h3>
          <span>Cabezeras disponibles...</span>
          <ul id="h">
            <li><h1>H1</h1></li>
            <li><h2>H2</h2></li>
            <li><h4>H3</h4></li>
            <li><h4>H4</h4></li>
            <div class="borrar"></div>
          </ul>
        </article>

        <article>
          <h3 class="borrar">Tamaños input</h3>
          <span>Tamaños definidos actualmente:
            <br>
            Normal - Pequeño(50px) - Mediano(100px) - largo(200px)
          </span>
          <ul id="ipt-tam">
            <li><input type="text" class="" value="Normal" /></li>
            <li><input type="text" class="peq" value="peq" /></li>
            <li><input type="text" class="med" value="med" /></li>
            <li><input type="text" class="lg" value="lg" /></li>
            <div class="borrar"></div>
          </ul>
        </article>

        <article>
          <h3 class="borrar">Input button</h3>
          <span>Estos estilos son para los botones y el :hover.</span>
          <ul id="ipbt">
            <li><input type="button" class="btazul bl azosc-br1" value="btazul bl azosc-br1" /></li>
            <div class="borrar"></div>
          </ul>
        </article>        

        <article>
          <h3 class="borrar">Input submit y reset</h3>
          <span>Estos estilos se componen del submit y el :hover.</span>
          <ul id="iptst">
            <li><input type="submit" class="btsi" value="btsi" /></li>
            <li><input type="reset" class="btno" value="btno" /></li>
            <div class="borrar"></div>
          </ul>
        </article>

        <article>
          <h3>Barra de notificación</h3>
          <span>Para aplicar los estilos de notificaciones copiar nombre de clase</span>
          <div class="aler-ro">aler-ro</div>
          <div class="aler-rosc">aler-rosc</div>
          <div class="aler-rocl">aler-rocl</div>
          <div class="noti-veosc">noti-veosc</div>
          <div class="noti-vecl">noti-vecl</div>
    		</article>

    	</section>
    </div>

  	<footer></footer>

  </body>
  
</html> 
