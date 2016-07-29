<?php
$cookie = $_COOKIE["block"]; //recupero il cookie
if($cookie=="set"){
	$style="display:none";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Barra per cookie Law By Filomeni" />
	<meta name="autor" content="Filomeni Maurizio www.sitiweb.cloud" />
	<style>
.cookieLaw{position:fixed;top:90%;left:0px;width:100%;height:100px;background-color:#000;z-index:10}
	.text > p{font-family:arial;font-size:14px;color:#fff;padding:10px}
	.text{position:absolute;width:80%;height:100%}
	button{position:absolute;right:10%;top:5px;width:120px;height:50px;background-color:#FFA143;-webkit-border-radius: 8px;-moz-border-radius: 8px;border-radius: 8px;z-index:20}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
<script type="text/javascript">
$( document ).ready( function() {
  function chiudiSlide() { $( '.cookieLaw' ).fadeOut( 3000 ); };

  $( window ).scroll( function() {  chiudiSlide(); //correzione
  document.cookie='block=set;expires'; // aggiungo il cookie all'evento scroll
  });
  $( '#slide' ).click( function(){  chiudiSlide();  });
});//FINE DOM
</script>
</head>

<body>
<div class="cookieLaw" style="<?php echo $style ?>"><!--recupero la variabile per nascondere il div-->
<div class="text"><p>Il mio sito, per offrirti i servizi, utilizza cookie. Se vuoi saperne di piu',leggi qui. Chiudendo questo banner, scorrendo questa pagina o cliccando qualunque elemento acconsenti all'uso dei cookie. Per utilizzare i servizi è necessario che acconsenti all'utilizzo.</p></div><button id="slide" type="button" onclick="document.cookie='block=set;expires'" >Accetto!</button>
</div>
</body>
</html>
