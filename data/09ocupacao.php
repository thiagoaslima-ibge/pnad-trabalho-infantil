<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Como o trabalho infantil é pesquisado";
	// Titulo da pagina	
	$pageTitle = "Ocupação e atividade principal";
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
		<p class="lead">Os quesitos 7 a 13 levantam as características do trabalho principal das crianças de 5 a 13 anos de idade que estavam ocupadas na semana de referência e as características do negócio/empresa ao qual este trabalho se encontra vinculado.</p>

		
	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">			
			
			<p>Confirmando-se que a criança de 5 a 13 anos de idade trabalhou na semana de referência, as perguntas seguintes serão sobre a ocupação (cargo ou função que tinha no trabalho), mas para respondê-las, primeiro será necessário definir qual é o <strong>trabalho principal</strong>, nos casos em que a criança trabalhou em mais de um negócio ou empreendimento na semana de referência.</p>

			<p>O trabalho principal será definido <strong>segundo a ordem de critérios</strong> especificada a seguir:</p> 

			<figure class="img-container">
				<picture>
					<?php inlineSvg("dist/img/9grafico01.svg"); ?>
					<!-- <img class="image" src="dist/img/9grafico01.svg" alt="grafico atividade principal"/> -->
				</picture>
			</figure>
			
			<p>Assim, o entrevistador deverá fornecer estes esclarecimentos ao informante, a fim de que ele defina qual o trabalho principal da criança de 5 a 13 anos e, a partir de então, responda aos quesitos seguintes.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Lembre-se da ordem: Horas; Rendimento; Tempo – HRT</q>
			</aside>
			<!-- Realce [fim] -->

			<h2>Ocupação</h2>
			<p>A ocupação trata-se do cargo ou função que a criança de 5 a 13 anos de idade exercia no empreendimento em que trabalhava na semana de referência. No caso do trabalhador por conta própria e dos pequenos empregadores, pode ser declarada como profissão ou ofício. Reflete o nível de responsabilidade e/ou conhecimento técnico (formal ou informal). </p>

		</div>	



		<!--QUESITO 07-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 7</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito7.jpg" alt="tela com a pergunta 07">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Para auxílio do preenchimento deste quesito, mitigação de erros e possibilidade de um melhor mapeamento das ocupações informadas, foi desenvolvido o <strong>Assistente de preenchimento de Ocupação Infantil</strong>, que pode ser compreendido como um conjunto de telas ativadas no <span class="small-caps">DMC</span> todas as vezes em que o quesito sobre ocupação for acionado. Os seus principais objetivos são:</p>

			<ul class="bulleted-list">

				<li>Evitar declarações vagas; </li>  
				<li>Acelerar o preenchimento das respostas mais frequentes;</li>
				<li>Indicar a necessidade de perguntas de cobertura;</li>
				<li>Destacar a diversidade de ocupações e atividades.</li>
			</ul>

			<p>Veja, a seguir, a tela com todos os grupamentos do Assistente de Ocupação Infantil:</p>	

				<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--assistente_ocupacao.jpg" alt="tela assistente de ocupação">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Se você já cursou os conhecimentos básicos da pesquisa, na unidade de ensino <strong>Trabalho: pessoas ocupadas</strong>, pôde ter acesso a um <a href="https://youtu.be/zkqNPuAK6yI";>vídeo</a> que explica o funcionamento do assistente de preenchimento. Para o módulo <strong>Trabalho de pessoas de 5 a 13 anos de idade</strong> a lógica de preenchimento é a mesma, no entanto, o número de grupamentos é bem menor. Para ficar mais fácil, veja a tabela a seguir, com alguns exemplos de profissões declaradas por moradores. Convidamos você a ler esta tabela e, assim que tiver o seu <span class="small-caps">DMC</span> em mãos, efetuar testes com estes exemplos, a fim de conhecer melhor o assistente de preenchimento de ocupação infantil.</p>

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


			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Para ser considerado trabalhador doméstico a criança de 5 a 13 anos de idade tem que exercer a sua ocupação em domicílio(s). Não é considerado trabalhador doméstico quem faz a faxina, arrumação, jardinagem etc. em escritórios e firmas.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>Portanto o faxineiro no bar deve ter ocupação registrada no grupamento <strong>W. Auxiliares de limpeza e de produção</strong> e não do grupamento <strong>A. Trabalhadores domésticos.</strong></p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Se a ocupação não se enquadrar em nenhuma das opções existentes, selecione a opção <strong>Z. Nenhuma das opções acima</strong> e especifique.</q>
			</aside>
			<!-- Realce [fim] -->

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 08-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 8</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito8.jpg" alt="tela com a pergunta 08">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Neste quesito o entrevistador, com base nas informações recebidas, irá descrever, de forma resumida, as principais responsabilidades ou tarefas realizadas no trabalho principal que a criança de 5 a 13 anos de idade tinha na semana de referência. Tal quesito tem por objetivo qualificar, de maneira mais detalhada, a ocupação. Em algumas situações irá contribuir para uma reflexão conjunta do entrevistador e do informante, ressaltando, inclusive, a necessidade de alterações no quesito 7.</p>	

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 09-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 9</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito9.jpg" alt="tela com a pergunta 9">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Esta pergunta identifica a relação de trabalho existente entre a criança de 5 a 13 anos de idade e o negócio/empresa em que trabalhava. Trata-se da <strong>“Posição na ocupação”</strong>.</p>

			<p>Deverá ser preenchido de acordo com as seguintes orientações:</p>

			<dl class="definition-list">
				<dt>Trabalhador doméstico</dt>
				<dd>Criança de 5 a 13 anos de idade que trabalhava prestando serviço doméstico remunerado, em dinheiro ou benefícios, em uma ou mais unidades domiciliares. Por exemplo: Empregado(a) doméstico(a) mensalista, empregado(a) doméstico(a) diarista, babá, cozinheiro(a), cuidador de idosos, motorista, jardineiro e faxineiro(a).</dd>

				<dt>Empregado do setor privado</dt>
				<dd>Criança de 5 a 13 anos de idade que trabalhava para um empregador (pessoa física ou jurídica) do setor privado, geralmente obrigando-se ao cumprimento de uma jornada de trabalho e recebendo em contrapartida uma remuneração em dinheiro, mercadorias, produtos ou benefícios (moradia, comida, roupas etc.).</dd>

				<dt>Empregador</dt>
				<dd>Criança de 5 a 13 anos de idade que trabalhava explorando o seu próprio negócio/empresa, tendo pelo menos um empregado e contando, ou não, com a ajuda de trabalhador não remunerado.</dd>

				<dt>Conta própria</dt>
				<dd>Criança de 5 a 13 anos de que trabalhava explorando o seu próprio negócio/empresa, sozinho ou com sócio, sem ter empregado e contando, ou não, com a ajuda de trabalhador não remunerado.</dd>

				<dt>Trabalhador não remunerado em ajuda a membro do domicílio ou parente</dt>
				<dd>Quando for selecionada esta opção, o informante deverá declarar se a criança trabalhava sem remuneração em ajuda a um parente ou membro do domicílio que era conta própria ou empregador, empregado ou trabalhador doméstico. Esta opção, portanto, se desdobra em três outros itens, devendo um deles ser selecionado de acordo com as seguintes orientações:</dd>
					<ul class="bulleted-list">
						<li>Conta própria ou empregador: criança de 5 a 13 anos de idade que trabalhava sem receber pagamento, em ajuda a morador do domicílio ou a parente (conta própria ou empregador), ainda que não habite no mesmo domicílio.</li> 

						<li>Empregado: criança de 5 a 13 anos de idade que trabalhava sem receber pagamento, em ajuda a morador do domicílio ou a parente, ainda que não habite no mesmo domicílio, que era empregado (este é que estabelecia o contrato ou acordo de trabalho com o empregador e recebia a remuneração pelo trabalho do grupo familiar).</li>

						<li>Trabalhador doméstico: criança de 5 a 13 anos de idade que trabalhava sem receber pagamento, em ajuda a morador do domicílio ou a parente, ainda que não habite no mesmo domicílio, que era trabalhador doméstico.</li>
					</ul>	

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 10-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Atividade principal</h2> 

			<p>A ocupação é uma característica relacionada à pessoa, enquanto a atividade é uma característica relacionada ao <strong>empreendimento com o qual a pessoa tinha vínculo de trabalho</strong>. Portanto, a atividade principal do empreendimento pode ser relacionada ou não à ocupação da criança de 5 a 13 anos de idade.</p>

			<h2>Quesito 10</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito10.jpg" alt="tela com a pergunta 10">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito busca identificar a principal atividade do empreendimento no qual a criança de 5 a 13 anos de idade tinha trabalho na semana de referência, ou seja, a <strong>principal finalidade ou ramo de negócio/ empresa</strong> a que ela estava vinculada, ou a <strong>natureza da atividade exercida</strong>, no caso da criança que trabalhava por conta própria.

			<p>Dependendo do que foi selecionado no quesito 9, a redação da pergunta sobre atividade principal muda, contextualizando-a para o informante:</p>

			<!-- Acordeao [inicio] -->
			<dl class="accordion" role="presentation">
				<dt>
					<button class="accordion__trigger" id="accordion__trigger-1" type="button" aria-controls="accordion__panel-1" aria-expanded="false">
						Se empregado do setor privado
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
						</svg>
					</button>
				</dt>
				<dd class="accordion__panel" id="accordion__panel-1" aria-labelledby="accordion__trigger-1">Qual era a principal atividade desse negócio/empresa do qual a pessoa recebia pagamento como empregado?</dd>
				<dt>
					<button class="accordion__trigger" id="accordion__trigger-2" type="button" aria-controls="accordion__panel-2" aria-expanded="false">
						Se conta própria ou empregador
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
						</svg>
					</button>
				</dt>
				<dd class="accordion__panel" id="accordion__panel-2" aria-labelledby="accordion__trigger-2">Qual era a principal atividade desse negócio/empresa que a pessoa tinha?</dd>
				<dt>
					<button class="accordion__trigger" id="accordion__trigger-3" type="button" aria-controls="accordion__panel-3" aria-expanded="false">
						Se trabalhador não remunerado
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
							<path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
						</svg>
					</button>
				</dt>
				<dd class="accordion__panel" id="accordion__panel-3" aria-labelledby="accordion__trigger-3">Qual era a principal atividade desse negócio/empresa da pessoa do domicílio ou familiar morador em outro domicílio a quem a pessoa ajudava sem receber pagamento?</dd>
				
			</dl>
			<!-- Acordeao [fim] -->

			<p>Para auxílio do preenchimento deste quesito, mitigação de erros e possibilidade de um melhor mapeamento das atividades informadas, foi desenvolvido o <strong>Assistente de preenchimento de Atividade Infantil</strong>, que pode ser compreendido como um conjunto de telas ativadas no <span class="small-caps">DMC</span> todas as vezes em que o quesito sobre atividade for acionado.</p> 

			<p>Veja, a seguir, a tela com todos os grupamentos do Assistente de Atividade Infantil, disponíveis para seleção no <span class="small-caps">DMC:</span></p>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--assistente_atividade.jpg" alt="tela assistente atividade">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Se você já cursou os conhecimentos básicos da pesquisa, na unidade de ensino <strong>Trabalho: pessoas ocupadas</strong>, também pôde ter acesso a um vídeo que explica o funcionamento do assistente de preenchimento de atividade. Para o módulo <strong>Trabalho de pessoas de 5 a 13 anos de idade</strong> a lógica de preenchimento é a mesma, no entanto, o número de grupamentos é menor. Então, veja a tabela a seguir, com alguns exemplos de atividades declaradas por moradores.</p>

			<p>Convidamos você a ler esta tabela e, assim que tiver o seu <span class="small-caps">DMC</span> em mãos, efetuar testes com estes exemplos, a fim de conhecer melhor o assistente de preenchimento de atividade infantil.</p>

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


			<p>Para o registro da atividade, deverão ser adotados os seguintes procedimentos:</p>

			<ul class="bulleted-list">

				<li>Evite registrar o <strong>nome da empresa</strong>, pois várias empresas possuem nomes parecidos.</li>  
				<li>Para o morador que trabalhava em empreendimento com mais de uma atividade, o registro deve ser da atividade principal do empreendimento, quando se tratar do morador que o explorava ou o trabalho estava ligado às diferentes atividades do empreendimento. Nos demais casos registra-se a atividade na qual exercia a sua ocupação.</li>
				<br>
				<p>Exemplo: Para a pessoa que explorava um empreendimento que compreendia o cultivo da cana-de-açúcar e a usina de açúcar, sendo esta última a atividade principal, o registro deve referir-se a usina de açúcar. Entretanto, o registro deve ser cultivo da cana-de-açúcar se a pessoa for empregada e exercer a sua ocupação nesta atividade de cultivo.</p>
				</li>
				<li>Para a criança que trabalhava na produção caseira e comercialização da sua produção deverá ser registrado “produção caseira de ….”. Exemplo: produção caseira de conservas, produção caseira de bolos. <strong>A pessoa só comercializa porque produz. A atividade comercial está vinculada à compra e à revenda de mercadoria.</strong></li>
				<li>Para o pescador conta própria deve ser feito o registro na atividade “pesca” mesmo se ele comercializa o peixe. O registro de “comércio de peixe” somente deverá ser feito no caso de o morador apenas ter trabalhado vendendo o peixe.</li>
				<li>Para a criança que trabalhava em empreendimento que funcionava ou realizava serviços dentro de outro empreendimento, registre a atividade do empreendimento ao qual estava vinculada.</li>
				<br>
				<p>Exemplo: Para a criança que trabalhava em uma cafeteria que funcionava dentro de uma livraria, mas eram empreendimentos separados, o registro da atividade deve ser cafeteria.</p>
				
			</ul>

			<button class="btn modal_call" id="faq001">Codificação de ocupações e atividades</button>

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 11-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 11</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito11.jpg" alt="tela com a pergunta 11">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito busca identificar e qualificar o local de exercício do trabalho ao qual a criança ocupada estava vinculada, na semana de referência. Deverá ser preenchido de acordo com as seguintes orientações:</p>


			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Em loja, escritório, galpão etc.</dt>
				<dd>Para a criança de 5 a 13 anos de idade que, normalmente, exercia seu trabalho em negócio ou empresa localizado em loja, fábrica, escritório, consultório, igreja, escola, galpão etc. São considerados ainda nesta alternativa, o negócio/empresa localizado em banca de jornal ou quiosque fechado e fixado no terreno. Vejamos alguns exemplos: (1) criança que era operadora de fotocopiadora em uma papelaria; (2) criança que trabalhava em uma quitanda, situada no mesmo prédio em que morava, mas em compartimento distinto da sua residência, e sendo ambas (unidade domiciliar e quitanda) dotadas de acesso independente.</dt>
	
				<dt>Em fazenda, sítio, granja, chácara etc.</dt>
				<dd>Se o negócio/empresa em que a criança de 5 a 13 anos de idade era ocupada, (ainda que exercendo função externa) em atividade da agricultura, silvicultura, pecuária, extração vegetal ou piscicultura, possuía estabelecimento em fazenda, sítio, granja, chácara, viveiro, haras, criadouro, horto, ranário etc. Por exemplo, criança que trabalhava em vários sítios ou chácaras, fazendo poda e colhendo frutos.</dd>

				<dt>Em local designado pelo empregador, cliente ou freguês</dt>
				<dd>Para a criança de 5 a 13 anos de idade que trabalhava em local designado pelo empregador, cliente ou freguês, ou em local (exclusive via ou área pública) onde encontrava seus clientes ou fregueses. Por exemplo: criança que era ajudante de pedreiro, que trabalhava por conta própria em diversos locais, tais como apartamentos, casas, lojas, terrenos, prestando serviço para seus clientes.</dd>

				<dt>Domicílio de empregador, patrão, sócio ou freguês</dt>
				<dd>Para a criança de 5 a 13 anos de idade que normalmente exercia seu trabalho unicamente em unidade domiciliar de residência do empregador, patrão ou sócio. Por exemplo, criança que trabalhava na sala da casa da sua empregadora onde ambas confeccionavam roupas para venda.</dd>

				<dt>No domicílio de residência, em local exclusivo para o desempenho da atividade</dt>
				<dd>Para a criança de 5 a 13 anos de idade que trabalhava na unidade domiciliar em que residia, por não dispor de estabelecimento para o negócio/empresa, reservando pelo menos um cômodo de sua residência para ser o local exclusivo de trabalho. Por exemplo: criança que era ajudante de cabeleireira, que ajudava a sua mãe, que atendia clientes em seu próprio domicílio, em um cômodo preparado exclusivamente para este fim.</dd>

				<dt>No domicílio de residência, sem local exclusivo para o desempenho da atividade</dt>
				<dd>Para a criança de 5 a 13 anos de idade que trabalhava na unidade domiciliar em que residia, por não dispor de estabelecimento para o negócio/empresa, mas sem ter nenhum cômodo de sua residência reservado para ser o local de trabalho.</dd>


				<dt>Em via ou em área pública (inclusive de porta em porta)</dt>
				<dd>Para a criança de 5 a 13 anos de idade que trabalhava em via ou área pública (ruas, praças, praias, terras devolutas etc.). Vejamos alguns exemplos:</dd>
					<ul class="bulleted-list">
						<li>criança, que trabalhava sem remuneração em ajuda ao seu pai, que era conta própria e exercia o seu trabalho em uma barraca na praia;</li>
						<li>criança que trabalhava em uma barraca que colocava na calçada de uma via pública;</li>
						<li>criança que trabalhava por conta própria lavando a roupa de seus fregueses no açude ou no rio.</li>
					</ul>	

				<dt>Em outro local</dt>
				<dd>Para a criança de 5 a 13 anos de idade que trabalhava em negócio/empresa que não se enquadrava nas condições anteriores. Neste caso, deverá ser especificada a situação no campo destinado a este fim. Por exemplo, criança que era filho de pescador, que trabalhava com seu pai em um barco de pesca a motor.</dd>

			</dl>
			<!-- Lista de definicao [fim] -->

		</div>	
		<!--Fim quesito-->



	<!--Fim conteúdo-->			

</div>

</main>
<!-- Janela modal [inicio] -->
<article class="modal" id="modal_faq001">
	<header class="modal__header">			
		<h2 class="modal__heading-1">Codificação de ocupações e atividades</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-24">
			<p>As informações referentes à ocupação e atividade são inicialmente registradas utilizando o assistente de preenchimento ou de forma livre, conforme as descrições fornecidas. Posteriormente, com o intuito de serem apuradas, essas descrições são codificadas de acordo com as classificações adotadas.</p>

			<p>Tais classificações são utilizadas como ferramentas para organizar e agregar as informações obtidas, sendo empregados bancos de descritores para facilitar acodificação e vincular ocupações e atividades a códigos específicos. Quanto mais precisa a descrição, mais simples torna-se a codificação.</p>

			<p>As descrições registradas pelas equipes de coleta constituem a principal fonte para aprimorar e atualizar os bancos de descritores, possibilitando a inclusão de termos regionais e novas denominações.</p>

			<p>Ademais, é importante analisar novas ocupações e atividades que possam surgir no mercado de trabalho, de modo a incorporá-las às descrições das classificações existentes.</p>

		</div>
	</div>
</article>		

<?php
	include "foot.php";
?>

</body></html>

	