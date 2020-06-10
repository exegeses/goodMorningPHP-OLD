<?php

	$locacion = [   "chinatown",
					"floating-market", 
					"hat-laem",
					"wat-arun",
					"khao-san-road",
					"ko-khai-beach",
					"kwai-river",
					"limestone",
					"longtail-boat",
					"maya-bay",
					"pra-nang",
					"rai-leh-beach",
					"rawai",
					"sirocco",
					"tuk-tuk",
					"wat-saket"
					 ];
	$cantidad = count($locacion);
	$i = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tailandia</title>
	<style type="text/css">
		body{font-family: helvetica; color: #52BAE0}
        #contenedor{
            width: 800px;
            margin: auto;
        }
		#contenedor article{
			width:100px; 
			padding:5px; 
			margin:2px; 
			display: inline-block;
			border: 1px solid #ccc;
		}
		h1{padding-left:30px;font-size: 35px}
		h2{font-size: 11px; color: #555;}
	</style>
</head>
<body>

	<h1>Tailandia</h1>
    <section id="contenedor">

<?php
        while( $i < $cantidad ) {
?>
            <article>
                <img src="tailandia/<?= $locacion[$i]; ?>.jpg">
                <br>
                <h2><?= $locacion[$i] ?></h2>
            </article>
<?php
            $i++;
        }
?>

    </section>

</body>
</html>

