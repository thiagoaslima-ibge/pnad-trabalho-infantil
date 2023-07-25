<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Como o trabalho infantil é pesquisado";
	// Titulo da pagina	
	$pageTitle = "Exercício 4";
	// Inclusao do cabeçalho do curso	
	include "head.php";
?>

<script>
	var exerciseCompletion = 0;
	var feedback01 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "3",
    hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Não poderá ocorrer informação de rendimento habitual igual a 0 (zero). Para a criança que ingressou no trabalho no mês em que se inseria a semana de referência, deverá ser registrado o valor do rendimento bruto mensal que normalmente ganharia, trabalhando o mês completo.",
    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta.Todas as alternativas apresentam informações corretas, com exceção da que afirma a possibilidade de informação de rendimento habitual igual a 0 (zero), contrariando o Manual da Pesquisa e o que foi apresentado no treinamento: Para a criança que ingressou no trabalho no mês em que se inseria a semana de referência, deverá ser registrado o valor do rendimento bruto mensal que normalmente ganharia, trabalhando o mês completo."
    
  };
  var feedback02 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "5",
    hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Não poderá ocorrer informação de rendimento habitual igual a 0 (zero). Para a criança que ingressou no trabalho no mês em que se inseria a semana de referência, deverá ser registrado o valor do rendimento bruto mensal que normalmente ganharia, trabalhando o mês completo.",
 
    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta.Todas as alternativas apresentam informações corretas, com exceção da que afirma a possibilidade de informação de rendimento habitual igual a 0 (zero), contrariando o Manual da Pesquisa e o que foi apresentado no treinamento: Para a criança que ingressou no trabalho no mês em que se inseria a semana de referência, deverá ser registrado o valor do rendimento bruto mensal que normalmente ganharia, trabalhando o mês completo."
	};

</script>

<main class="page-content okgo">
	
	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
				<p>Considerando as explicações conceituais sobre o <strong>quesito 12</strong> do tema relativo ao trabalho das crianças de 5 a 13 anos de idade: “Qual era o rendimento bruto mensal que recebia normalmente no(s) trabalho(s) que tinha na semana de referência”, marque a alternativa <strong>incorreta</strong>:</p>

	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<form id="exercise01">			

				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					O quesito aceita a marcação múltipla de respostas, isto é, o rendimento pode ser declarado em dinheiro (item 1) e cumulativamente em produtos ou mercadorias (item 2), onde o valor deve ser estimado em dinheiro (valor de mercado).
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					Para a criança que ingressou no trabalho no mês em que se inseria a semana de referência, deverá ser registrado o valor do rendimento bruto mensal que normalmente ganharia, trabalhando o mês completo.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					Poderá ocorrer informação de rendimento habitual igual a 0 (zero) para o morador que foi recentemente contratado e não completou um mês no cargo ou função.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice01_opt04" name="multiplechoice01" type="radio" value="4">
					No caso de remuneração em produtos ou mercadorias recebidas sazonalmente, deverá ser registrado o valor médio mensal (valor de mercado) que a criança normalmente ganhava.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt05" title="Selecione para escolher a opção 5.">					
					<input id="multiplechoice01_opt05" name="multiplechoice01" type="radio" value="5">
					Quando a remuneração for constituída por uma parte fixa e outra variável, cada parcela deve ter o seu tratamento específico, antes de ser somada para compor o total do rendimento bruto mensal que a criança normalmente ganhava.
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