<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Como o trabalho infantil é pesquisado";
	// Titulo da pagina	
	$pageTitle = "Exercício 5";
	// Inclusao do cabeçalho do curso	
	include "head.php";
?>

<script>
	var exerciseCompletion = 0;
	var feedback01 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "2",
    hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. As horas trabalhadas não incluem o tempo gasto nas viagens da residência para o trabalho e nem as pausas para refeições.",
    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta. Todas as alternativas apresentam situações nas quais as horas podem ser computadas como efetivamente trabalhadas, com exceção da opção relativa às horas gastas nas viagens da residência para o trabalho, contrariando o Manual da Pesquisa e o que foi apresentado no treinamento."
    
  };
  var feedback02 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "5",
    hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. As horas trabalhadas não incluem o tempo gasto nas viagens da residência para o trabalho e nem as pausas para refeições.",
 
    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta.Todas as alternativas apresentam situações nas quais as horas podem ser computadas como efetivamente trabalhadas, com exceção da opção relativa às horas gastas nas viagens da residência para o trabalho, contrariando o Manual da Pesquisa e o que foi apresentado no treinamento."
	};

</script>

<main class="page-content okgo">
	
	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
				<p>Qual das opções abaixo apresenta as horas que <strong>não</strong> podem ser computadas no cálculo de horas efetivamente trabalhadas na semana de referência, no módulo sobre trabalho de crianças de 5 a 13 anos de idade da <span class="small-caps">PNAD</span> Contínua?</p>

	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<form id="exercise01">			

				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					As horas trabalhadas fora do local de trabalho em tarefas relacionadas com a sua ocupação;
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					As horas que a criança gasta nas viagens da residência para o trabalho; 
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					As horas em que a criança permanece no local de trabalho, à disposição para realizar suas tarefas, podendo não conseguir clientes ou fregueses;
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice01_opt04" name="multiplechoice01" type="radio" value="4">
					As horas em que a criança permanece no local de trabalho, esperando sem poder realizar suas tarefas, devido à avaria de máquinas, acidentes, falta de material ou designação de tarefas;
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt05" title="Selecione para escolher a opção 5.">					
					<input id="multiplechoice01_opt05" name="multiplechoice01" type="radio" value="5">
					As horas gastas em pequenos períodos de repouso no local de trabalho, incluindo as pausas para tomar água, café ou chá etc.
				</label>
				<div class="row">
					<div class="col-xs-24 exercise__action-group">							
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="multipleChoice()" disabled="disabled">Confirmar</button>							
						<div class="exercise__feedback"></div>
					</div>
				</div>
			</form>

		</div>
	</div>

	</main>

	<article class="modal" id="modal_retry">
	<header class="modal__header" style="padding-bottom:0;">			
		<h2 class="modal__heading-1">Atenção</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<p>Você não selecionou a opção correta. Tente novamente!</p>	
	</article>


<?php
	include "foot.php";
?>

<!-- Inclua o script a seguir para utilizar os exercicios -->
<script src="src/js/exercises.js"></script>


</body></html>		