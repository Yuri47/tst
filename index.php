<?php
require "classes/Url.php";
?>

<?php
include ('p/header.php');
?>

  <body>


<?php
require_once('functions/variaveis.php');
require_once('var.php');
?>

  <?php
        $modulo = Url::getURL( 0 );

        if( $modulo == null )
            $modulo = "home";

        if( file_exists( "p/" . $modulo . ".php" ) )
            require "p/" . $modulo . ".php";

        elseif ( file_exists( "p/products/" . $modulo . ".php" ) )
            require "p/products/" . $modulo . ".php";

        elseif ( file_exists( "p/products/details/" . $modulo . ".php" ) )
            require "p/products/details/" . $modulo . ".php";

       // elseif ( file_exists( "core/" . $modulo . ".php" ) )
      //      require "core/" . $modulo . ".php";

        elseif ( file_exists( "admin.php" ) ) {
            require_once('var.php');
            
            echo '<script language= "JavaScript">
location.href="/'.$siteName.'/core/admin.php"
</script>';

        }



        else

            require "p/404.php";
        ?>


<?php



/*

@$p = $_GET['p'];


if (empty ($p)){
	$pagina = 'home';	
}	else {
		$pagina = $p;
}
if(!file_exists('p/'.$pagina.'.php')) {
	$pagina = '404 Error';	
	
}


if(file_exists('p/'.$pagina.'.php')) {
		  include("p/$pagina.php");
	  }	else	{
		  //echo '<img src="imagens/404.jpg" />';
		  include ('p/404.php');
	  }



//include ('p/home.php');








*/


include ('p/footer.php');
?>


</body></html>