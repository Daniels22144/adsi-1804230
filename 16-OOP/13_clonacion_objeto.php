<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Clonación de Objetos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h1 class="h3 text-center">Clonación de Objetos</h1>
				<hr>
				<ul class="list-group">
				<?php 
					class Sheep {
						private $name;
						private $weight;

						public function __construct($nm, $wg) {
							$this->name   = $nm;
							$this->weight = $wg;
						}

						public function getInfoSheep() {
							return "<li class='list-group-item'>".$this->name." - ".$this->weight." kg </li>";
						}
					}

					$sh = new Sheep("Margarete", 80);
					$sc = clone($sh);
					echo $sc->getInfoSheep();
				?>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>	