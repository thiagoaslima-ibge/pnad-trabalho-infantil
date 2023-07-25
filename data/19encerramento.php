<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Encerramento";
	// Titulo da pagina	
	$pageTitle = "Final da unidade";
	// Inclusao do cabeçalho do curso	
	include "head.php";
?>

<main class="page-content okgo">
	
	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
		<p class="lead">Chegamos ao final do módulo complementar sobre trabalho das crianças de 5 a 13 anos de idade </p>

		
	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">			
			
			<p>Para concluir esta unidade, compartilhamos o artigo de opinião de Vinicius Pinheiro, diretor regional da <span class="small-caps">OIT</span> para América Latina e Caribe, publicado no jornal valor econômico em 11 de junho de 2021:</p>

			<!-- Citacao em bloco [inicio] -->
			<blockquote class="quote" cite="http://www.google.com.br/">
				<p>A exploração do trabalho infantil está à vista de todos nós, nas ruas das cidades, no comércio e serviços, principalmente os informais, nas áreas rurais, em especial na agricultura.</p>

				<p>Há pouco mais de um ano, a crise deflagrada pela pandemia da <span class="small-caps">COVID-19</span> atingiu o mundo do trabalho e causou efeitos devastadores sobre o emprego e a renda das famílias globalmente. O golpe impactou com mais força as pessoas que já se encontravam em situação de vulnerabilidade socioeconômica. O aumento da pobreza aliada ao fechamento de escolas potencialmente agravou a situação do trabalho infantil.</p>

				<p>[...]</p>

				<p>A pobreza faz com que os filhos de famílias em situação de vulnerabilidade socioeconômica tenham reduzidas suas oportunidades de desenvolvimento na infância e adolescência. Ao atingirem a vida adulta, tornam-se, majoritariamente, trabalhadores com baixa escolaridade e qualificação, sujeitos a menores salários e vulneráveis a empregos em condições degradantes, perpetuando um círculo vicioso de pobreza. Um ciclo que afeta o desenvolvimento sustentável de qualquer nação.</p>

				<p>[...]</p>

				<p>Erradicar o trabalho infantil no século XXI não é uma batalha solitária, mas uma meta compartilhada. É um somatório de atuações decisivas e articuladas entre governos, organizações de trabalhadores e empregadores e a sociedade civil para que possamos avançar - e não retroceder - na prevenção e eliminação do trabalho infantil. A <span class="small-caps">OIT</span> defende a adoção de ações, baseadas no diálogo social e que reúnam todos os atores públicos e privados envolvidos na resposta à persistência do trabalho infantil, que devem incluir medidas nas áreas de proteção social, educação, promoção do trabalho decente para os pais e mães e melhoria na capacidade de fiscalização do trabalho.</p>

				<p>[...]</p>

				<p>O mundo do trabalho é uma arena onde se decide o futuro de milhões de crianças e adolescentes. A hora de agir contra o trabalho infantil é agora. Fizemos uma promessa às crianças de erradicar o trabalho infantil até 2025. Não há mais tempo a perder.</p>

				<small class="img-container__img-src">Fonte: <a href="https://www.ilo.org/brasilia/noticias/WCMS_801315/lang--pt/index.htm";>Organização Internacional do Trabalho</a></small>

			</blockquote>
			<!-- Citacao em bloco [fim] -->


			
			<br>
			<button class="btn modal_call" id="faq001">Referências</button>

		</div>	
			
		

</div>

</main>

<!-- Janela modal [inicio] -->
<article class="modal" id="modal_faq001">
	<header class="modal__header">			
		<h2 class="modal__heading-1">Referências</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-24">
			<p>INSTITUTO BRASILEIRO DE GEOGRAFIA E ESTATÍSTICA – IBGE. Coordenação de Trabalho e rendimento. Pesquisa nacional por amostra de domicílios contínua: Manual Básico da Entrevista. IBGE, 2022.</p>

			<p>INSTITUTO BRASILEIRO DE GEOGRAFIA E ESTATÍSTICA – IBGE. Coordenação de Trabalho e rendimento. Pesquisa nacional por amostra de domicílios contínua: Trabalho de pessoas de 5 a 13 anos de idade. IBGE, 2022.</p>

			<p>“Meninos malabares – Retratos do trabalho infantil no Brasil”, de Bruna Ribeiro e Tiago Queiroz Luciano (Panda Books)</p>
		</div>
	</div>
</article>
<!-- Janela modal [fim] -->

<?php
	include "foot.php";
?>

</body></html>

	