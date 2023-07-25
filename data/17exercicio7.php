<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Como o trabalho infantil é pesquisado";
	// Titulo da pagina	
	$pageTitle = "Exercício 7";
	// Inclusao do cabeçalho do curso	
	include "head.php";
?>

<script>
	var exerciseCompletion = 0;
	var feedback01 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "4",
    hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Tratando-se de atividade de produção de alimentos, deve ser considerada apenas aquela voltada para alimentos de grande durabilidade. As atividades de preparo de alimentos de pouca durabilidade, para o consumo imediato ou a serem congelados, para consumo em período relativamente curto, devem ser consideradas como parte dos afazeres domésticos. Portanto, cozinhar arroz ou feijão, no escopo da PNAD Contínua não deve ser considerado como produção para o próprio consumo e sim afazer doméstico.",

    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta. Tratando-se de atividade de produção de alimentos, deve ser considerada apenas aquela voltada para alimentos de grande durabilidade. As atividades de preparo de alimentos de pouca durabilidade, para o consumo imediato ou a serem congelados, para consumo em período relativamente curto, devem ser consideradas como parte dos afazeres domésticos. Portanto, cozinhar arroz ou feijão, no escopo da PNAD Contínua, não deve ser considerado como produção para o próprio consumo e sim afazer doméstico."
    
  };
  var feedback02 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "5",
    hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Tratando-se de atividade de produção de alimentos, deve ser considerada apenas aquela voltada para alimentos de grande durabilidade. As atividades de preparo de alimentos de pouca durabilidade, para o consumo imediato ou a serem congelados, para consumo em período relativamente curto, devem ser consideradas como parte dos afazeres domésticos. Portanto, cozinhar arroz ou feijão, no escopo da PNAD Contínua não deve ser considerado como produção para o próprio consumo e sim afazer doméstico.",

    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta. Tratando-se de atividade de produção de alimentos, deve ser considerada apenas aquela voltada para alimentos de grande durabilidade. As atividades de preparo de alimentos de pouca durabilidade, para o consumo imediato ou a serem congelados, para consumo em período relativamente curto, devem ser consideradas como parte dos afazeres domésticos. Portanto, cozinhar arroz ou feijão, no escopo da PNAD Contínua, não deve ser considerado como produção para o próprio consumo e sim afazer doméstico."
	};

</script>

<main class="page-content okgo">
	
	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
				<p>Pode ser considerado como produção de bens de uso doméstico para o próprio consumo, <strong>exceto</strong>:</p>

	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<form id="exercise01">			

				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					Abater de animais para produção de charque ou de carne de sol.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					Produzir vinho.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					Produzir um xarope.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice01_opt04" name="multiplechoice01" type="radio" value="4">
					Cozinhar arroz e feijão
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt05" title="Selecione para escolher a opção 5.">					
					<input id="multiplechoice01_opt05" name="multiplechoice01" type="radio" value="5">
					Confeccionar um artigo decorativo
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