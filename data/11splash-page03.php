<?php
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade"; //TITULO DA UNIDADE
	$topicTitle = "O trabalho infantil é ilegal"; //TITULO DO TOPICO
	$pageTitle = "O impacto no futuro das crianças e adolescentes"; //TITULO DA PAGINA	
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
		background-image: url(./dist/img/splash03--sm.jpg);
	}
	/* MEDIA QUERIES */
	@media (min-width: 50em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/splash03--sm.jpg);
		}
	}
	@media (min-width: 64em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/splash03--md.jpg);
		}
	}
	@media (min-width: 92em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/splash03--lg.jpg);
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

					<p>“O trabalho infantil é frequentemente associado a crianças e adolescentes que se encontram fora da escola. Isso restringe severamente suas perspectivas para um trabalho decente na juventude e na idade adulta, bem como seu potencial de vida em geral.”</p>

					<small class="img-container__img-src">Fonte: <a href="https://www.ilo.org/brasilia/temas/trabalho-infantil/WCMS_565212/lang--pt/index.htm">Organização Internacional do Trabalho (OIT)</small>
					</a>

				
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
 
