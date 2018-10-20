<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Galeria Dinâmica</title>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="dist/css/lightbox.min.css">
	<script src="dist/js/lightbox-plus-jquery.min.js"></script>

	

</head>
<body>
<div id="wrap">
	<div id="wrapContent">
		<div id="header">
			<div id='titulo'>Galeria de Fotos Dinâmica</div>
			<div id='menu'>
				<?php
				foreach(glob("ALBUNS\*") as $albuns){
					$album = strtoupper(substr($albuns,7));
					print "<div id='op'><a href='?a={$album}'>{$album}</a> </div>";
				}				
				?>
			</div>
		</div>
		<div id="wrapFotos">			
			<?php
			$exibeAlbum = $_GET['a'];
			foreach(glob("ALBUNS\\$exibeAlbum\*") as $f){
				#print '<img src='{$f}'></br>';
				print "<div id='foto'>
						<a class='' href='{$f}' data-lightbox='galeria' data-title=''>
							<img class='miniatura' src='{$f}' alt=''/>
						</a>
						</div>";
			}
			?>
			
			
		</div>
	</div>
</div>
</body>
</html>