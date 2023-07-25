<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Introdução ao tema trabalho";
	// Titulo da pagina	
	$pageTitle = "Exercício 2";
	// Inclusao do cabeçalho do curso	
	include "head.php";
?>

<script>
	var exerciseCompletion = 0;
	var feedback01 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "3",
    hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Não é considerada pessoa ocupada aquela que na semana de referência exerceu apenas: atividade na produção de bens e serviços destinados somente ao próprio consumo/uso das pessoas moradoras do domicílio, sem remuneração; trabalho voluntário; atividade de cuidado de pessoas do domicílio ou de parentes que residiam em outro domicílio, sem remuneração; afazeres domésticos sem remuneração no domicílio ou em casa de parente.",
    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta.  Não é considerada pessoa ocupada aquela que na semana de referência exerceu apenas: atividade na produção de bens e serviços destinados somente ao próprio consumo/uso das pessoas moradoras do domicílio, sem remuneração; trabalho voluntário; atividade de cuidado de pessoas do domicílio ou de parentes que residiam em outro domicílio, sem remuneração; afazeres domésticos sem remuneração no domicílio ou em casa de parente."
    
  };
  var feedback02 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "5",
    hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Não é considerada pessoa ocupada aquela que na semana de referência exerceu apenas: atividade na produção de bens e serviços destinados somente ao próprio consumo/uso das pessoas moradoras do domicílio, sem remuneração; trabalho voluntário; atividade de cuidado de pessoas do domicílio ou de parentes que residiam em outro domicílio, sem remuneração; afazeres domésticos sem remuneração no domicílio ou em casa de parente.",
 
    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta.  Não é considerada pessoa ocupada aquela que na semana de referência exerceu apenas: atividade na produção de bens e serviços destinados somente ao próprio consumo/uso das pessoas moradoras do domicílio, sem remuneração; trabalho voluntário; atividade de cuidado de pessoas do domicílio ou de parentes que residiam em outro domicílio, sem remuneração; afazeres domésticos sem remuneração no domicílio ou em casa de parente."
	};

</script>

<main class="page-content okgo">
	
	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
				<p>É considerada <strong>pessoa ocupada</strong> aquela criança de 5 a 13 anos que, na semana de referência, apenas exerceu, por uma hora ou mais:</p>

	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<form id="exercise01">			

				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					trabalho voluntário de contação de histórias para crianças hospitalizadas
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					atividade de cuidado do avô que mora no mesmo domicílio 
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					atividade de comércio ambulante, vendendo balas
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice01_opt04" name="multiplechoice01" type="radio" value="4">
					afazeres domésticos na casa do irmão, sem remuneração
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt05" title="Selecione para escolher a opção 5.">					
					<input id="multiplechoice01_opt05" name="multiplechoice01" type="radio" value="5">
					atividade de ajudante de pedreiro em sua própria residência
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