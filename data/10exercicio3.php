<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Como o trabalho infantil é pesquisado";
	// Titulo da pagina	
	$pageTitle = "Exercício 3";
	// Inclusao do cabeçalho do curso	
	include "head.php";
?>

<script>
var feedback04 = {
    type: "relate-cols",
    correctAnswer: [2,3,1]
	};

</script>

<main class="page-content okgo">
	
	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
				<p>Com base nos principais conceitos que norteiam os quesitos sobre trabalho de crianças de 5 a 13 anos de idade, na <span class="small-caps">PNAD</span> Contínua, numere a segunda coluna de acordo com a primeira.</p>

	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
					<!-- RELACIONAR COLUNAS -->
			<form class="relate-cols" id="exercise04">
				<div class="row">
					<ol class="col-xs-24 col-sm-10 numeric-list">
						<li>Ocupação</li>
						<li>Atividade</li>
						<li>Posição na ocupação</li>
					</ol>

					<ul class="col-xs-24 col-sm-14 gutter-sm-left relate-cols__form">
						<li class="relate-cols__item">							
							<input class="relate-cols__input" type="text" maxlength="1">
							<span class="relate-cols__label">É uma característica relacionada ao empreendimento com o qual a criança de 5 a 13 anos tinha vínculo de trabalho.</span>
							<div class="exercise__feedback relate-cols__exercise-feedback"></div>
						</li>
						<li class="relate-cols__item">							
							<input class="relate-cols__input" type="text" maxlength="1">
							<span class="relate-cols__label">Relação de trabalho existente entre a criança de 5 a 13 anos de idade e o negócio/empresa em que trabalhava.</span>
							<div class="exercise__feedback relate-cols__exercise-feedback"></div>
						</li>
						<li class="relate-cols__item">							
							<input class="relate-cols__input" type="text" maxlength="1">
							<span class="relate-cols__label">Trata-se do cargo ou função que a criança de 5 a 13 anos de idade exercia o empreendimento em que trabalhava na semana de referência.</span>
							<div class="exercise__feedback relate-cols__exercise-feedback"></div>
						</li>
						
					</ul>                        
				</div>				
				<div class="row">
					<div class="col-xs-12 exercise__action-group">							
						<button type="button" class="btn btn--main exercise__btn-check-answer" onclick="relateCols()" disabled="disabled">Confirmar</button>
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
<script>
	$('#exercise04 .relate-cols__input').keyup(function () {// Relacionar colunas: limite de caracteres
		this.value = this.value.replace(/[^1-5\.]/g,'');
	});
	// Tooltip
	$('.tooltip001').tooltipster({ maxWidth: 300 });
	$('.tooltip002').tooltipster({ maxWidth: 300 });
	$('.tooltip003').tooltipster({ maxWidth: 300 });
	$('.tooltip004').tooltipster({ maxWidth: 300 });
	$('.tooltip005').tooltipster({ maxWidth: 300 });
	$('.tooltip006').tooltipster({ maxWidth: 300 });
	$('.tooltip007').tooltipster({ maxWidth: 300 });
	$('.tooltip008').tooltipster({ maxWidth: 300 });
	$('.tooltip009').tooltipster({ maxWidth: 300 });
	$('.tooltip010').tooltipster({ maxWidth: 300 });
</script>


</body></html>		