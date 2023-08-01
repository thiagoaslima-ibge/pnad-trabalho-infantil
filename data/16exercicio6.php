<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Como o trabalho infantil é pesquisado";
	// Titulo da pagina	
	$pageTitle = "Exercício 6";
	// Inclusao do cabeçalho do curso	
	include "head.php";
?>

<script>
	var exerciseCompletion = 0;
	var feedback01 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "3",
    hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Para ser considerado produção para o próprio consumo, o produto ou serviço deve ser somente para consumo de membro(s) do domicílio ou de parente(s) que residiam em outro domicílio. Além disso, as atividades realizadas mediante venda ou troca de produtos ou serviços não deverão ser consideradas.",

    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta. Para ser considerado produção para o próprio consumo, o produto ou serviço deve ser somente para consumo de membro(s) do domicílio ou de parente(s) que residiam em outro domicílio. Além disso, as atividades realizadas mediante venda ou troca de produtos ou serviços não deverão ser consideradas."
    
  };
  var feedback02 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "5",
   hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Para ser considerado produção para o próprio consumo, o produto ou serviço deve ser somente para consumo de membro(s) do domicílio ou de parente(s) que residiam em outro domicílio. Além disso, as atividades realizadas mediante venda ou troca de produtos ou serviços não deverão ser consideradas.",

    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta. Para ser considerado produção para o próprio consumo, o produto ou serviço deve ser somente para consumo de membro(s) do domicílio ou de parente(s) que residiam em outro domicílio. Além disso, as atividades realizadas mediante venda ou troca de produtos ou serviços não deverão ser consideradas."
	};

</script>

<main class="page-content okgo">
	
	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
				<p>Dentre as situações abaixo apresentadas, qual <strong>não</strong> pode ser considerada produção para o próprio consumo, de acordo com os conceitos da <span class="small-caps">PNAD</span> Contínua?</p>

	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<form id="exercise01">			

				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					Joana, de 12 anos, possui uma pequena horta no fundo de sua casa, onde cultiva hortaliças para o consumo exclusivo da família.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					Alexandre, de 11 anos, além de estudar, trabalhou 15 horas, na semana de referência, cuidando da criação de galinhas e da plantação de legumes que se destinavam, apenas, à alimentação dos moradores de sua unidade domiciliar. 
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					Enzo, de 10 anos, dedicou-se à pesca para o consumo dos moradores de sua unidade domiciliar. Parte do produto das suas pescarias, que excede o consumo no próprio domicílio, é vendida na feira do bairro.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice01_opt04" name="multiplechoice01" type="radio" value="4">
					Na semana de referência, Breno empregou 30 horas ajudando o pai a construir, sem contrapartida financeira, uma canoa a ser utilizada pelo irmão que não mora no mesmo domicílio.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt05" title="Selecione para escolher a opção 5.">					
					<input id="multiplechoice01_opt05" name="multiplechoice01" type="radio" value="5">
					Sara, empregou 20 horas, na semana de referência, ajudando a mãe a construir um novo cômodo em sua residência.
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