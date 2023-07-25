<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Como o trabalho infantil é pesquisado";
	// Titulo da pagina	
	$pageTitle = "Trabalhou ou não trabalhou na semana de referência?";
	// Inclusao do cabeçalho do curso	
	include "head.php";


	
?>

<main class="page-content okgo">
	<style> 
	 table, td {border: 1px solid gray}

	</style>
	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>

			
	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">


			<!-- Tabela 2[inicio] -->
			<div class="table-container">
				<table class="table">
				
					<thead>
						<tr>
							<th scope="col">Declaração do morador</th>
							<th scope="col" colspan="3">Preenchimento de atividade infantil</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row"  rowspan=5>“Trabalho em uma fazenda de criação de vários animais”</td>
							<td scope="row"><strong>Pergunta de cobertura</strong></td>
							<td scope="row">“Qual é a principal criação?”</td>
						</tr>
		
						<tr>	
							<td scope="row"><strong>Resposta</strong></td>	
							<td scope="row">“Criação de porcos”</td>
						</tr>
						
						<tr>
							<td scope="row"><strong>Grupamento</strong></td>
							<td scope="row">A. Agropecuária, pesca</td>
						</tr>

						<tr>
							<td scope="row"><strong>Subitem</strong></td>
							<td scope="row">Criação de...</td>	
						</tr>

						<tr>
							<td scope="row"><strong>Detalhamento</strong></td>	
							<td scope="row">Suínos</td>	
						</tr>


						<tr>
							<td scope="row" rowspan=5>“Trabalho na produção de farinha de mandioca”</td>
							<td scope="row"><strong>Pergunta de cobertura</strong></td>
							<td scope="row">“Fabricação caseira ou na indústria?”</td>
						</tr>
		
						<tr>	
							<td scope="row"><strong>Resposta</strong></td>	
							<td scope="row">“Fabricação caseira”</td>
						</tr>
						
						<tr>
							<td scope="row"><strong>Grupamento</strong></td>
							<td scope="row">B. Fabricação, produção caseira, confecção, artesanato</td>
						</tr>

						<tr>
							<td scope="row"><strong>Subitem</strong></td>
							<td scope="row">Produção caseira de...</td>	
						</tr>

						<tr>
							<td scope="row"><strong>Detalhamento</strong></td>	
							<td scope="row">Farinha de mandioca</td>	
						</tr>

						<tr>
							<td scope="row" rowspan=5>“Trabalho na mercearia da esquina”</td>
							<td scope="row"><strong>Pergunta de cobertura</strong></td>
							<td scope="row">n/a</td>
						</tr>
		
						<tr>	
							<td scope="row"><strong>Resposta</strong></td>	
							<td scope="row">n/a</td>
						</tr>
						
						<tr>
							<td scope="row"><strong>Grupamento</strong></td>
							<td scope="row">D. Comércio e alimentação</td>
						</tr>

						<tr>
							<td scope="row"><strong>Subitem</strong></td>
							<td scope="row">Em lojas</td>	
						</tr>

						<tr>
							<td scope="row"><strong>Detalhamento</strong></td>	
							<td scope="row">Mercearia</td>	
						</tr>


						<tr>
							<td scope="row" rowspan=5>“Trabalho como faxineiro em uma academia”</td>
							<td scope="row"><strong>Pergunta de cobertura</strong></td>
							<td scope="row">n/a</td>
						</tr>
		
						<tr>	
							<td scope="row"><strong>Resposta</strong></td>	
							<td scope="row">n/a</td>
						</tr>
						
						<tr>
							<td scope="row"><strong>Grupamento</strong></td>
							<td scope="row">Z. Nenhuma das opções acima. Especifique</td>
						</tr>

						<tr>
							<td scope="row"><strong>Subitem</strong></td>
							<td scope="row">Academia de Ginástica</td>	
						</tr>

						<tr>
							<td scope="row"><strong>Detalhamento</strong></td>	
							<td scope="row">n/a</td>	
						</tr>	
						
					</tbody>
				</table>
			</div>
			<!-- Tabela [fim] -->


			<!-- Tabela [inicio] 01-->
			<div class="table-container">
				<table class="table">
				
					<thead>
						<tr>
							<th scope="col">Declaração do morador</th>
							<th scope="col" colspan="3">Preenchimento de atividade infantil</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td scope="row" rowspan=5>“Eu trabalho como diarista”</td>
							<td scope="row"><strong>Pergunta de cobertura</strong></td>
							<td scope="row">n/a</td>
						</tr>
		
						<tr>	
							<td scope="row"><strong>Resposta</strong></td>	
							<td scope="row">n/a</td>
						</tr>
						
						<tr>
							<td scope="row"><strong>Grupamento</strong></td>
							<td scope="row">A. Trabalhadores domésticos</td>
						</tr>

						<tr>
							<td scope="row"><strong>Subitem</strong></td>
							<td scope="row">Diarista</td>	
						</tr>

						<tr>
							<td scope="row"><strong>Detalhamento</strong></td>	
							<td scope="row">n/a</td>	
						</tr>	


						<tr>
							<td scope="row" rowspan=5>“Ela trabalha me ajudando a cuidar dos filhos da minha patroa”</td>
							<td scope="row"><strong>Pergunta de cobertura</strong></td>
							<td scope="row">Ela recebe alguma remuneração?</td>
						</tr>
		
						<tr>	
							<td scope="row"><strong>Resposta</strong></td>	
							<td scope="row">Não</td>
						</tr>
						
						<tr>
							<td scope="row"><strong>Grupamento</strong></td>
							<td scope="row">M. Ajudantes não remunerados dos trabalhadores domésticos</td>
						</tr>

						<tr>
							<td scope="row"><strong>Subitem</strong></td>
							<td scope="row">Babá de criança</td>	
						</tr>

						<tr>
							<td scope="row"><strong>Detalhamento</strong></td>	
							<td scope="row">n/a</td>	
						</tr>	


						<tr>
							<td scope="row" rowspan=5>“Eu trabalho como artesão”</td>
							<td scope="row"><strong>Pergunta de cobertura</strong></td>
							<td scope="row">Artesão de que? Com qual material trabalha?</td>
						</tr>
		
						<tr>	
							<td scope="row"><strong>Resposta</strong></td>	
							<td scope="row">Palha</td>
						</tr>
						
						<tr>
							<td scope="row"><strong>Grupamento</strong></td>
							<td scope="row">H. Artesãos</td>
						</tr>

						<tr>
							<td scope="row"><strong>Subitem</strong></td>
							<td scope="row">Artesão</td>	
						</tr>

						<tr>
							<td scope="row"><strong>Detalhamento</strong></td>	
							<td scope="row">De palha</td>	
						</tr>	


						<tr>
							<td scope="row" rowspan=5>“Eu trabalho cortando cana, junto com meu pai”</td>
							<td scope="row"><strong>Pergunta de cobertura</strong></td>
							<td scope="row">Recebe alguma remuneração?</td>
						</tr>
		
						<tr>	
							<td scope="row"><strong>Resposta</strong></td>	
							<td scope="row">Sim</td>
						</tr>
						
						<tr>
							<td scope="row"><strong>Grupamento</strong></td>
							<td scope="row">R. Trabalhadores da agropecuária, pesca extração vegetal</td>
						</tr>

						<tr>
							<td scope="row"><strong>Subitem</strong></td>
							<td scope="row">Cortador de cana</td>	
						</tr>

						<tr>
							<td scope="row"><strong>Detalhamento</strong></td>	
							<td scope="row">n/a</td>	
						</tr>


						<tr>
							<td scope="row" rowspan=5>“Eu trabalho vendendo frutas na feira”</td>
							<td scope="row"><strong>Pergunta de cobertura</strong></td>
							<td scope="row">n/a</td>
						</tr>
		
						<tr>	
							<td scope="row"><strong>Resposta</strong></td>	
							<td scope="row">n/a</td>
						</tr>
						
						<tr>
							<td scope="row"><strong>Grupamento</strong></td>
							<td scope="row">T. Trabalhadores do comércio e da alimentação</td>
						</tr>

						<tr>
							<td scope="row"><strong>Subitem</strong></td>
							<td scope="row">Feirante</td>	
						</tr>

						<tr>
							<td scope="row"><strong>Detalhamento</strong></td>	
							<td scope="row">n/a</td>	
						</tr>


						<tr>
							<td scope="row" rowspan=5>“Eu trabalho descarregando caminhão no Mercado Municipal”</td>
							<td scope="row"><strong>Pergunta de cobertura</strong></td>
							<td scope="row">n/a</td>
						</tr>
		
						<tr>	
							<td scope="row"><strong>Resposta</strong></td>	
							<td scope="row">n/a</td>
						</tr>
						
						<tr>
							<td scope="row"><strong>Grupamento</strong></td>
							<td scope="row">W. Auxiliares de limpeza e de produção</td>
						</tr>

						<tr>
							<td scope="row"><strong>Subitem</strong></td>
							<td scope="row">Ajudante, auxiliar de carga e descarga</td>	
						</tr>

						<tr>
							<td scope="row"><strong>Detalhamento</strong></td>	
							<td scope="row">n/a</td>	
						</tr>


						<tr>
							<td scope="row" rowspan=5>“Eu trabalho como açougueiro”</td>
							<td scope="row"><strong>Pergunta de cobertura</strong></td>
							<td scope="row">n/a</td>
						</tr>
		
						<tr>	
							<td scope="row"><strong>Resposta</strong></td>	
							<td scope="row">n/a</td>
						</tr>
						
						<tr>
							<td scope="row"><strong>Grupamento</strong></td>
							<td scope="row">Z. Nenhuma das opções acima. Especifique</td>
						</tr>

						<tr>
							<td scope="row"><strong>Subitem</strong></td>
							<td scope="row">Açougueiro</td>	
						</tr>

						<tr>
							<td scope="row"><strong>Detalhamento</strong></td>	
							<td scope="row">n/a</td>	
						</tr>

					</tbody>
				</table>
			</div>
			<!-- Tabela [fim] -->			
			
		
			

			

			<p>Este quesito busca identificar o tempo de afastamento do trabalho remunerado que a criança de 5 a 13 anos tinha na semana de referência e, de acordo com esse período, será definido se ela estava ocupada ou não na citada semana.</p>
	


		</div>	
		<!--Fim quesito-->

	<!--Fim conteúdo-->			

</div>

</main>

<?php
	include "foot.php";
?>

</body></html>

	