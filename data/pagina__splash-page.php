<?php
	$moduleTitle = "Agilidade decisória"; //TITULO DA UNIDADE
	$topicTitle = "Prática cotidiana"; //TITULO DO TOPICO
	$pageTitle = "Splash page"; //TITULO DA PAGINA	
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
		background-image: url(./dist/img/example-img001--sm.jpg);
	}
	/* MEDIA QUERIES */
	@media (min-width: 50em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/example-img001--sm.jpg);
		}
	}
	@media (min-width: 64em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/example-img001--md.jpg);
		}
	}
	@media (min-width: 92em) {
		.splash-page--example-01 {
			background-image: url(./dist/img/example-img001--lg.jpg);
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
				<p>A certificação de metodologias que nos auxiliam a lidar com o consenso sobre a necessidade de qualificação aponta para a melhoria do remanejamento dos quadros funcionais. É importante questionar o quanto a estrutura atual da organização maximiza as possibilidades por conta do orçamento setorial.</p>
				<ul class="bulleted-list">
					<li>O cuidado em identificar pontos críticos na consolidação das estruturas auxilia a preparação e a composição dos paradigmas corporativos. </li>
					<li>A nível organizacional, o aumento do diálogo entre os diferentes setores produtivos possibilita uma melhor visão global do remanejamento dos quadros funcionais.</li>
					<li>A certificação de metodologias que nos auxiliam a lidar com a execução dos pontos do programa estimula a padronização das condições financeiras e administrativas exigidas.</li>
					<li>É importante questionar o quanto a crescente influência da mídia faz parte de um processo de gerenciamento das posturas dos órgãos dirigentes com relação às suas atribuições.</li>
				</ul>
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
 
