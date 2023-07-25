<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Como o trabalho infantil é pesquisado";
	// Titulo da pagina	
	$pageTitle = "Exercício 1";
	// Inclusao do cabeçalho do curso	
	include "head.php";
?>

<script>
	var feedback01 = {
    type: "true-or-false",
    correctAnswer: [0,1,1],
		missFeedback: [
			"<strong>A sentença é verdadeira</strong>. Atendem ao conceito de pessoas ocupadas, desde que tenham trabalhado 1 hora ou mais na semana de referência: trabalhadores ocasionais, trabalhadores na informalidade, artistas de rua, pessoas que desenvolvem atividades de comércio ambulantes de mercadorias.",
			"<strong>A sentença é falsa</strong>.Atendem ao conceito de pessoas ocupadas, desde que tenham trabalhado 1 hora ou mais na semana de referência: trabalhadores ocasionais, trabalhadores na informalidade, artistas de rua, pessoas que desenvolvem atividades de comércio ambulantes de mercadorias. ",
			"<strong>A sentença é falsa</strong>. Não é considerada pessoa ocupada aquela que na semana de referência exerceu apenas trabalho voluntário."
		]
	};

</script>

<main class="page-content okgo">
	
	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
				<p>Sobre o conceito de pessoas ocupadas, no módulo de trabalho das crianças de 5 a 13 anos, na PNAD Contínua, classifique cada afirmativa como <strong>verdadeira</strong> ou <strong>falsa</strong>.</p>

	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">			
						<!-- VERDADEIRO OU FALSO -->
			<form class="true-or-false" id="exercise01">
				
			
				<p class="row true-or-false__item" id="exercise01-01">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise01-01__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise01-01__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>Dandara de 11 anos fez bico de 1 hora como babá, na semana de referência, logo, deve ser considerada como pessoa ocupada.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise01-01__comment"></span>
					</span>
				</p>
				<p class="row true-or-false__item" id="exercise01-02">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise01-02__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise01-02__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>Vendedores ambulantes que trabalharam pelo menos meia hora na semana de referência são considerados pessoas ocupadas.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise01-02__comment"></span>
					</span>
				</p>
				<p class="row true-or-false__item" id="exercise01-03">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise01-03__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise01-03__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>Joana, de 13 anos, exerceu apenas trabalho voluntário na semana de referência e por isso é considerada ocupada.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise01-03__comment"></span>
					</span>
				</p>
				<div class="row">
					<div class="col-xs-12 exercise__action-group">							
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="trueOrFalse()" disabled="disabled">Confirmar</button>
					</div>
				</div>
			</form>

		</div>
	</div>

	</main>

<?php
	include "foot.php";
?>

<!-- Inclua o script a seguir para utilizar os exercicios -->
<script src="src/js/exercises.js"></script>

</body></html>		