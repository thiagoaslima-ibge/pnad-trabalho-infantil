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
		background-image: url(./dist/img/splash01--sm.jpg);
	}
	/* MEDIA QUERIES */
	@media (min-width: 50em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/splash01--sm.jpg);
		}
	}
	@media (min-width: 64em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/splash01--md.jpg);
		}
	}
	@media (min-width: 92em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/splash01--lg.jpg);
		}
	}
</style>

<main class="page-content okgo">
	<div class="splash-page__content" style="text-shadow: 2px 2px 3px rgba(0,0,0,0.7);"
>				
		<div class="row">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">				
				<?php				
					echo "<h1 style='margin-top:0;'>$pageTitle</h1>"
        ?>				

					<p>“O trabalho infantil é ilegal e priva crianças e adolescentes de uma infância normal, impedindo-os(as) não só de frequentar a escola e estudar normalmente, mas também de desenvolver de maneira saudável todas as suas capacidades e habilidades. Antes de tudo, o trabalho infantil é uma grave violação dos direitos humanos e dos direitos e princípios fundamentais no trabalho, representando uma das principais antíteses do trabalho decente.”</p>

					<small class="img-container__img-src">Fonte: <a href="https://www.ilo.org/brasilia/temas/trabalho-infantil/WCMS_565212/lang--pt/index.htm">Organização Internacional do Trabalho (OIT)</small>
					</a>
					<small class="img-container__img-src">Imagem:“Meninos malabares – Retratos do trabalho infantil no Brasil”, de Bruna Ribeiro e Tiago Queiroz Luciano (Panda Books)</small>

				
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
 
