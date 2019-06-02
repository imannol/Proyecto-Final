
				  <button class="btn btn-info btn-sm">
				<a class="nav-link text-white" href="#"><font size="4">Bienvenido <strong><?php echo $_SESSION['user'];?></strong></a></button> 

	       <button class="btn btn-info btn-sm"><a class="nav-link text-white" href="desconectar.php"><font size="4">Cerrar sesión</a></button>
	    </ul>
	  </div>
</nav>

<body>
<div class="header">
    <h1>Tutorial mantener fijo el menú al hacer scroll mejorado</h1>
    <h2>Unai Calleja, Diseñador Web Freelance</h2>
</div>

<div class="menu">esto sería el menú con sus enlaces</div>

<div class="wrapper">wrapper, aquí va el contenido. HAZ SCROLL, VERÁS QUE NO HACE SALTO</div>
</body>

<style type="text/css">
	body, html{ margin:0; padding:0;}
.header{ border-top:1px solid white;background:white; color:#333; height:150px; width:100%; font-family: 'Lobster', cursive; text-align:center}
.menu{ height:80px; width:100%; background:#333; color:white; text-align:center}
.wrapper{ height:2000px; width:100%; padding-top:20px}

.fixed{position:fixed; top:0}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
posicionarMenu();

$(window).scroll(function() {    
    posicionarMenu();
});

function posicionarMenu() {
    var altura_del_header = $('.header').outerHeight(true);
    var altura_del_menu = $('.menu').outerHeight(true);

    if ($(window).scrollTop() >= altura_del_header){
        $('.menu').addClass('fixed');
        $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
    } else {
        $('.menu').removeClass('fixed');
        $('.wrapper').css('margin-top', '0');
    }
}

</script>