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
	
	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
		<p class="lead">Este módulo da pesquisa será habilitado, no DMC do entrevistador, apenas na quinta entrevista e somente quando houver, no domicílio, alguma criança de 5 a 13 anos de idade.</p>

		
	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">			
			
			<p>No questionário sobre trabalho das pessoas de 14 anos ou mais de idade, conforme vimos nos conhecimentos básicos da pesquisa, inicialmente busca-se identificar se ele deve ser considerado como ocupado ou não na semana de referência. A partir daí é que são exibidas as perguntas que visam qualificar o trabalho. No questionário sobre os moradores de 5 a 13 anos de idade não é diferente. Identificada a existência de trabalho, serão coletadas as seguintes informações:</p>
			<ul class="bulleted-list">

				<li>a ocupação no trabalho principal;</li>
				<li>a posição na ocupação;</li>
				<li>as tarefas realizadas;</li>
				<li>a atividade econômica no negócio ou na empresa;</li>
				<li>o local de exercício do trabalho;</li>
				<li>o rendimento do trabalho e as horas dedicadas ao(s) trabalho(s);</li>
			</ul>	

			<p>Iniciamos, portanto, com o conceito de pessoa ocupada:</p> 
		</div>
		
		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<h2 class="feature__title">Pessoa ocupada</h2>
				<p>Pessoa ocupada é a criança de 5 a 13 anos de idade que, durante <strong>pelo menos uma hora completa</strong> na semana de referência, exerceu:</p>
				<ul class="bulleted-list">
				<li>Atividade remunerada em dinheiro, produtos, mercadorias ou benefícios (moradia, alimentação, roupas etc.) na produção de bens ou serviços; ou</li>
				<li>Atividade sem remuneração, na produção de bens e serviços, em ajuda à atividade econômica remunerada de membro do domicílio ou de parente que residia em outro domicílio.</li>
			</div>
		</section>
		<!-- Destaque [fim] -->
		
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			
			<p>Portanto, além do trabalho formal e de fácil identificação, também atendem ao conceito de pessoas ocupadas, <strong>desde que tenham trabalhado 1 hora ou mais na semana de referência</strong>:</p>
			<ul class="bulleted-list">
				<li>Trabalhadores ocasionais e aqueles que fizeram "bicos” na semana de referência;</li>
				<li>Trabalhadores na informalidade;</li>
				<li>Artistas de ruas (malabaristas, músicos, estátuas vivas etc.);</li>
				<li>Prestadores de serviço de guarda de veículos (flanelinhas);</li>
				<li>Prestadores de serviços de limpeza de carro ou de para-brisas em semáforos ou outras localidades.</li>
				<li>Pessoas que desenvolvem atividades de comércio ambulante de mercadorias em geral ou comércio ambulante de alimentação.</li>
			</ul>	

			<p>Também é considerada ocupada a pessoa que tinha um trabalho remunerado, mas não exerceu essa atividade durante a semana de referência por motivo de:</p>
			<ul class="bulleted-list">
				<li>férias, folga ou jornada de trabalho variável;</li>
				<li>licença maternidade ou paternidade;</li>
				<li>licença remunerada por motivo de saúde ou acidente da própria pessoa;</li>
				<li>outro tipo de licença remunerada como estudo, casamento, licença prêmio etc.;</li>
				<li>qualquer outro motivo, desde que o tempo transcorrido do afastamento seja inferior a 4 meses.</li>
			</ul>	

		</div>

		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<h2 class="feature__title">Não é considerada pessoa ocupada</h2>
				<p>Aquela que na semana de referência exerceu apenas:</p>
				<ul class="bulleted-list">
				<li>atividade na produção de bens e serviços destinados somente ao próprio consumo/uso das pessoas moradoras do domicílio, sem remuneração;</li>
				<li>trabalho voluntário;</li>
				<li>atividade de cuidado de pessoas do domicílio ou de parentes que residiam em outro domicílio, sem remuneração;</li>
				<li>afazeres domésticos sem remuneração no domicílio ou em casa de parente.</li>
			</div>
		</section>
		<!-- Destaque [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<p>As quatro perguntas iniciais do questionário são cruciais e se dedicam, especificamente, a levantar a condição de ocupação da criança, ou seja, se ela possui algum trabalho, ou ainda, se realizou algum “bico” de ao menos uma hora na semana de referência.</p>

			<p>Portanto, durante a entrevista é importante realizar indagações adicionais, conhecidas como <strong>perguntas de cobertura</strong>, a fim de levantar informações sobre a existência de trabalho na semana de referência. Por exemplo: Caso o informante, em todos os quesitos, tenha informado que a criança não trabalhou, pergunte se, porventura, ela não exerceu algum tipo de atividade considerada trabalho segundo o conceito da pesquisa, como por exemplo: atividades de artistas populares (malabaristas, estátuas vivas, músicos de rua, e outros); produção de alimentação para terceiros (salgadinhos, quentinhas e outros); serviços de limpeza e de guarda de veículos na rua; comercialização de mercadorias em vias públicas; cuidado de crianças, idosos ou animais em troca de pagamento etc.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Realizar perguntas de cobertura ajuda o entrevistador a detectar se a criança moradora efetivamente trabalhou ou não na semana de referência, de acordo com os conceitos da <span class="small-caps">PNAD</span> Contínua.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>Por outro lado, o entrevistador deve se assegurar de que a atividade que a criança exerceu na semana de referência é realmente considerada trabalho de acordo com os conceitos da pesquisa. Neste caso valem as mesmas diretrizes já apresentadas quando estudamos o trabalho de adultos. Por exemplo, caso a criança seja um pedinte, ou realize apenas afazeres domésticos e/ou trabalho voluntário, ela não é considerada ocupada de acordo com os conceitos da <span class="small-caps">PNAD</span> Contínua.</p>

		</div>	



		<!--QUESITO 01-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 1</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito1.jpg" alt="tela com a pergunta 01">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Deverá ser selecionado <strong>Sim</strong> ou <strong>Não</strong>, conforme o caso.</p>
			<p>Deverá ser marcado <strong>Sim</strong> para a criança trabalhadora por conta própria ou empregadora que, durante ao menos uma hora na semana de referência, esteve à disposição, ofertando seus serviços ou aguardando por trabalho, <strong>sem conseguir freguês ou cliente</strong>, se o empreendimento (negócio/empresa):</p>

			<ul class="bulleted-list">

				<li>possuir um estabelecimento para funcionar; </li>  
				<li>não possuir um estabelecimento para funcionar o período de espera por clientes ou fregueses for inferior a 30 dias.</li>
			</ul>	

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 02-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 2</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito2.jpg" alt="tela com a pergunta 02">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito é destinado somente às crianças de 5 a 13 anos para as quais a respostas foi <strong>Não</strong> no quesito anterior. Observe que a pesquisa vai, aos poucos, investigando, tanto o trabalho tradicionalmente remunerado em dinheiro, quanto o remunerado em produtos, mercadorias, moradia, alimentação, aprendizado etc.</p>

			<p>Deverá ser selecionado <strong>Sim</strong> ou <strong>Não</strong>, conforme o caso.</p>	

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 03-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 3</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito3.jpg" alt="tela com a pergunta 03">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito é destinado somente aos moradores que responderam <strong>Não</strong> nos dois quesitos anteriores e busca captar a atividade ocasional. Deverá ser selecionado:</p>

			<ul class="bulleted-list">

				<li><strong>Sim</strong> para a criança de 5 a 13 anos de idade que exerceu trabalho ocasional remunerado, por pelo menos uma hora completa na semana de referência. Aplica-se àquelas que exerceram alguma atividade ocasional, tal como trabalho eventual, “bico” ou aquela definida por qualquer outro termo que caracterize um trabalho exercido sem continuidade, apenas como maneira de obter alguma remuneração imediata. </li>  
				<li><strong>Não</strong> para a criança de 5 a 13 anos de idade que não exerceu trabalho ocasional ou, então, o exerceu por menos de uma hora na semana de referência.</li>
			</ul>	

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 04-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 4</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito4.jpg" alt="tela com a pergunta 04">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito visa identificar se a criança de 5 a 13 anos de idade prestou ajuda ao trabalho remunerado de morador ou parente. Deverá ser selecionado <strong>Sim</strong> ou <strong>Não</strong>, conforme o caso. Veja os exemplos:</p>

			<ul class="bulleted-list">

				<li>César tem um bar. Sua filha, Catarina de 12 anos, ajuda no atendimento aos clientes, sem ser remunerada, todos os dias após o horário da escola. Nesta situação, deverá ser selecionado <strong>Sim</strong>, para Catarina.</li>  
				<li>Antônio foi contratado por empreitada para capinar uma área de plantação. Para o serviço andar mais rápido, ele levou seus dois filhos, Isaque e Daniel, para ajudar. Logo, Isaque e Daniel são considerados trabalhadores não remunerados em ajuda a Antônio, que recebeu a remuneração da empreitada.</li>
			</ul>
		</div>

				<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<p>Existem situações em que, apesar da criança ter algum trabalho, na semana de referência ela não trabalhou por algum motivo. Porém, dependendo do motivo e da duração do afastamento, esta criança ainda deve ser considerada ocupada, como, por exemplo, folga, licença médica. Os quesitos 5 e 6 visam identificar estes casos.</p>
			</div>
		</section>
		<!-- Destaque [fim] -->	

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 05-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 5</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito5.jpg" alt="tela com a pergunta 05">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito destina-se às crianças de 5 a 13 anos de idade para as quais foi declarado que não trabalharam na semana de referência. Deverá ser selecionado:</p>

			<ul class="bulleted-list">

				<li><strong>Sim</strong> para a criança de 5 a 13 anos de idade que tinha trabalho, na semana de referência, mas não o exerceu por estar temporariamente afastada. Os principais motivos para estas ocorrências são: doença; estudo; férias; folga; conflitos urbanos; impedimento por mau tempo ou paralisação nos serviços de transporte; ou então, se a pessoa não pôde exercer o seu trabalho devido a fatores ocasionais relacionados com o trabalho (quebra de máquina, defeito de instrumento de trabalho etc.).</li>  
				<li><strong>Não</strong> para a criança de 5 a 13 anos de idade que não tinha trabalho remunerado do qual estava temporariamente afastada.</li>
			</ul>	

			<p>As seguintes situações deverão ser atentamente observadas para configurar ou não o afastamento do trabalho:</p>

			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Demissão</dt>
				<dd>Se, na semana de referência, a criança já tinha sido demitida ou pedido para sair do emprego, ela não pode mais ser considerada como afastada do trabalho. O desligamento já havia se efetivado. O morador não está ocupado e, portanto, não está afastado.</dt>
	
				<dt>Conta própria ou empregador possui estabelecimento (sem clientes)</dt>
				<dd>A criança trabalhadora por conta própria ou empregadora que possui um estabelecimento e, durante ao menos uma hora na semana de referência, esteve à disposição, ofertando seus serviços ou aguardando por trabalho, sem conseguir freguês ou cliente, será considerada ocupada e sem afastamento na semana de referência, independentemente do tempo que está sem freguês.</dd>

				<dt>Conta própria ou empregador não possui estabelecimento (até 30 dias sem clientes)</dt>
				<dd>A criança trabalhadora por conta própria ou empregadora que não possui um estabelecimento e que esteve à disposição, ofertando seus serviços ou aguardando por trabalho, sem conseguir freguês por um período de até 30 dias, também será considerada ocupada e sem afastamento na semana de referência.</dd>

				<dt>Conta própria ou empregador não possui estabelecimento (mais de 30 dias sem clientes)</dt>
				<dd>A criança trabalhadora por conta própria ou empregadora sem estabelecimento e com espera por clientes há mais de 30 dias, deve ser considerada como não ocupada. Nestes casos, considera-se que houve uma interrupção no trabalho e, portanto, não se configura o afastamento.</dd>
			</dl>
			<!-- Lista de definicao [fim] -->

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 06-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 6</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito6.jpg" alt="tela com a pergunta 06">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito busca identificar o tempo de afastamento do trabalho remunerado que a criança de 5 a 13 anos tinha na semana de referência e, de acordo com esse período, será definido se ela estava ocupada ou não na citada semana.</p>
	

			<p>Deverá ser preenchido em conformidade com as seguintes orientações:</p>

			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Menos de 1 mês</dt>
				<dd>Para a criança de 5 a 13 anos de idade cujo tempo de afastamento é de no máximo 29 dias.</dt>
	
				<dt>De 1 mês a menos de 1 ano</dt>
				<dd>Para a criança de 5 a 13 anos de idade cujo tempo de afastamento é de 1 mês a menos de 1 ano, devendo ser preenchido o campo correspondente com o número de meses completos previstos (no mínimo 1 e no máximo 11 meses).</dd>

				<dt>1 ano ou mais</dt>
				<dd>Para o morador cujo tempo de afastamento é de 1 ano ou mais.</dd>

			</dl>
			<!-- Lista de definicao [fim] -->


			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>A contagem do tempo de afastamento vai do último dia em que a criança de 5 a 13 anos de idade exerceu esse trabalho remunerado por pelo menos uma hora completa até o último dia da semana de referência (este último é trazido na pergunta, no <span class="small-caps">DMC</span>). O registro deve ser efetuado em anos e meses completos, sem frações de meses: 2 meses e meio são 2 meses; 11 meses e vinte dias são 11 meses.</q>
			</aside>
		<!-- Realce [fim] -->

		</div>	
		<!--Fim quesito-->

	<!--Fim conteúdo-->			

</div>

</main>

<?php
	include "foot.php";
?>

</body></html>

	