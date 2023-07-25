<?php
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade"; //TITULO DA UNIDADE
	$topicTitle = "O trabalho infantil é ilegal"; //TITULO DO TOPICO
	$pageTitle = "O trabalho infantil é ilegal"; //TITULO DA PAGINA	
	include "head.php";
?>

<style>
	.splash-page--example-01 {
		background-color: var(--color-medium);
		background-repeat: no-repeat;
		background-position: center center;
		background-attachment: fixed;
		-ms-background-size: cover;
		background-size: cover;
	}

	.splash-page--example-01 {
		background-image: url(./dist/img/splash04--sm.jpg);
	}
	/* MEDIA QUERIES */
	@media (min-width: 50em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/splash04--sm.jpg);
		}
	}
	@media (min-width: 64em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/splash04--md.jpg);
		}
	}
	@media (min-width: 92em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/splash04--lg.jpg);
		}
	}
</style>

<main class="page-content okgo">
	<div class="splash-page__content">				
		<div class="row">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">				
				<?php				
					echo "<h1 style='margin-top:0;'>$pageTitle</h1>"
        ?>				

					

				
			</div>
		</div>
	</div>
</main>

<?php
	include "foot.php";
?>

<script>
	//Aplicar estilo de spash page
	splashPage("splash-page--example-01");
</script>

</body></html>
 
