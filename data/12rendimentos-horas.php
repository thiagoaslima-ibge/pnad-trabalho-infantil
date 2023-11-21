<?php
// Titulo da unidade
$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
// Titulo do topico
$topicTitle = "Como o trabalho infantil é pesquisado";
// Titulo da pagina	
$pageTitle = "Rendimentos e horas trabalhadas";
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
		<p class="lead">A disponibilidade de estatísticas oficiais sobre a quantidade de horas semanais trabalhadas por crianças é fundamental para o monitoramento e combate ao trabalho infantil. Essas informações são essenciais para o planejamento e implementação de políticas públicas e programas de proteção da infância.</p>


	</header>

	<div class="row">


		<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<p>Além disso, a análise desses dados pode ajudar a identificar padrões e tendências regionais e setoriais do trabalho infantil, possibilitando ações mais efetivas e direcionadas para prevenção e erradicação dessa prática prejudicial ao desenvolvimento físico, psicológico e social das crianças.</p>

			<p>Os quesitos 12 e 13, portanto, têm como objetivo captar informações sobre o rendimento obtido pela criança durante a semana de referência, seja por meio de um único trabalho ou do conjunto de todos os trabalhos exercidos, bem como o número de horas trabalhadas semanalmente.</p>

			<h2>Rendimento Bruto</h2>
			<p>Os rendimentos, de acordo com a <span class="small-caps">PNAD</span> Contínua, podem ser classificados da seguinte forma:</p>

			<ul class="bulleted-list">
				<li><p><strong>Rendimento do assalariado</strong></p></li>
				<ul class="bulleted-list bulleted-list--sublist">
					<li>Bruto em dinheiro</li>
					<li>Bruto em produtos ou mercadorias</li>
				</ul>

			</ul>

			<ul class="bulleted-list">
				<li><p><strong>Rendimento do empregador e do trabalhador por conta própria</strong></p></li>
				<ul class="bulleted-list bulleted-list--sublist">
					<li>Retirada bruta em dinheiro</li>
					<li>Retirada bruta em produtos ou mercadorias</li>
				</ul>
			</ul>

			<p>Veja, a seguir, as explicações e orientações para entender estes conceitos e o quesito relativo ao rendimento:</p>

			<h3> Rendimento do assalariado bruto em dinheiro</h3>

			<p>Corresponde ao pagamento da criança de 5 a 13 anos de idade empregada, sem qualquer desconto para moradia, alimentação ou roupas específicas para o exercício do trabalho da pessoa. <strong>Trata-se da remuneração em termos brutos.</strong></p>

			<p>Não se deve estimar, em dinheiro, a parcela do pagamento recebida em benefícios (moradia, alimentação, roupas, vales alimentação, refeição ou transporte etc.). Entretanto, se a criança possuir esses benefícios e eles forem pagos em dinheiro, juntamente com as outras parcelas da remuneração, estes devem ser integralmente considerados.</p>

			<h3>Rendimento do assalariado bruto em produtos ou mercadorias</h3>

			<p>Corresponde ao rendimento do trabalho obtido em produtos ou mercadorias, provenientes das atividades agrícolas, pecuárias, de caça, silvicultura, exploração florestal, pesca e aquicultura. Tal rendimento é contabilizado em termos monetários.</p>

			<h3>Rendimento do empregador e do trabalhador por conta própria: retirada bruta em dinheiro</h3>

			<p>Trata-se da retirada da criança que exerce trabalho como empregadora ou trabalhadora por conta própria, quanto ela se apropria dos rendimentos obtidos por meio do negócio que desenvolve. Em todo caso, é necessário averiguar o resultado da diferença entre as receitas e despesas (pagamento de empregados, matéria prima, energia elétrica, telefone, equipamentos e outros investimentos etc.) do empreendimento que essa criança tem. Por exemplo, a criança que vende balas no sinal ganha normalmente R$ 30,00 reais por dia e gasta R$10,00, diariamente, no saco de balas, sua retirada habitual será de R$ 440,00 considerando 22 dias úteis no mês.</p>

			<h3>Rendimento do empregador e do trabalhador por conta própria: retirada bruta em produtos ou mercadorias</h3>

			<p>Corresponde à retirada em produtos ou mercadorias, da seção de atividade que compreende a agricultura, pecuária, caça, silvicultura, exploração florestal, pesca e aquicultura. Tal retirada é contabilizada pelo seu valor em dinheiro, deduzidas as despesas necessárias para a sua produção e não inclui a parcela destinada ao próprio consumo da unidade domiciliar.</p>


			<p>A partir dos conceitos, podemos, então, analisar o quesito sobre rendimento.</p>

		</div>

		<!--QUESITO 12-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 12</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
					<img class="image" src="dist/img/01telas/trab_infantil--quesito12.jpg" alt="tela com a pergunta 012">
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito busca, portanto, investigar o valor do rendimento bruto ou da retirada bruta mensal referente a um mês completo de pagamento que a criança normalmente recebia, no seu trabalho único ou do conjunto de todos os trabalhos na semana de referência, seja este valor contabilizado em dinheiro ou em produtos e mercadorias.</p>
			<p>A partir da escolha das alternativas, o <span class="small-caps">DMC</span> irá apresentar uma faixa de valores. Ao selecionar um deles, será solicitado o valor declarado pelo informante, recebido em dinheiro ou o valor estimado dos produtos ou mercadorias.</p>

			<p>Deverá ser registrado o valor do rendimento mensal, em reais, desprezando os centavos.</p>


			<p>O quesito deverá ser marcado de acordo com as seguintes orientações:</p>

			<dl class="definition-list">
				<dt>Valor em dinheiro (R$)</dt>
				<dd>Para a criança de 5 a 13 anos que tinha remuneração bruta ou retirada, em dinheiro. Pode ser um rendimento fixo ou variável.</dd>

				<ul class="bulleted-list">
					<li>Para quem tem rendimento fixo deverá ser lançado o valor da remuneração bruta ou da retirada normalmente recebida ou que ganharia se houvesse trabalhado o mês completo.</li>
					<li>Para quem tem rendimento variável deverá ser lançado o valor médio da remuneração bruta ou o valor médio da retirada.</li>
				</ul>


				<dt>Valor estimado dos produtos ou mercadorias (R$)</dt>
				<dd>Para a criança de 5 a 13 anos que tinha rendimento em produtos ou mercadorias do ramo que compreende a agricultura, silvicultura, pecuária, extração vegetal, pesca e piscicultura. Neste caso, não deve ser computado o valor da produção para o próprio consumo nem a parcela do pagamento efetuada em benefícios (moradia, alimentação, roupas etc.).</dd>

				<dt>Somente em benefícios</dt>
				<dd>Para a criança de 5 a 13 anos que recebia pagamento somente em benefícios, que não eram pagos em dinheiro, tais como moradia, roupas, alimentação, educação ou creche. Esta opção deverá ser marcada apenas quando for a única forma de remuneração mensal pelo trabalho.</dd>

				<dt>Marcação de múltiplas respostas</dt>
				<dd>O quesito aceita a marcação múltipla de respostas, isto é, o rendimento pode ser declarado em dinheiro (primeira opção) e cumulativamente em produtos ou mercadorias (segunda opção), onde o valor deve ser estimado em dinheiro (valor de mercado). Portanto, para a criança que recebia uma parte do rendimento em dinheiro e a outra em produtos ou mercadorias do ramo que compreende a agricultura, silvicultura, pecuária, extração vegetal, pesca e aquicultura, as opções correspondentes a estes dois códigos devem ser assinaladas e as respectivas remunerações registradas.</dd>

				<dt>Nem um mês de trabalho</dt>
				<dd>Para a criança que ingressou no trabalho no mês em que se inseria a semana de referência, deverá ser registrado o valor do rendimento bruto mensal que normalmente ganharia, trabalhando o mês completo.</dd>

				<dt>Remuneração com partes fixa e variável</dt>
				<dd>Quando a remuneração habitual for constituída por uma parte fixa e outra variável, cada parcela deve ter o seu tratamento específico, antes de ser somada para compor o total do rendimento bruto mensal que a criança normalmente ganhava.</dd>

				<dt>Produtos sazonais</dt>
				<dd>No caso de remuneração em produtos ou mercadorias recebidas sazonalmente, deverá ser registrado o valor médio mensal (valor de mercado) que a criança normalmente ganhava.</dd>

				<dt>Rendimento habitual x remuneração contratual</dt>
				<dd>O rendimento habitual não deve ser confundido com a remuneração contratual, uma vez que o rendimento habitual pode abranger outras rubricas recebidas continuamente, a serem consideradas no cálculo como, por exemplo, salário família, anuênio, gratificação etc. e que não fazem parte da remuneração contratual.</dd>

				<dt>Rendimento igual a 0 (zero)</dt>
				<dd>Não poderá ocorrer informação de rendimento habitual igual a 0 (zero).</dd>
			</dl>

		</div>
		<!--Fim quesito-->

		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<h2 class="feature__title">”Não sei ou não quero informar meu rendimento!”</h2>
				<p>Caso o informante não saiba ou se recuse a responder o valor do rendimento habitual, há dois procedimentos possíveis:</p>
				<ul class="bulleted-list">
					<li>Procedimento 1: o informante não sabe o valor, mas sabe a faixa de rendimento. Nesta situação, o entrevistador deverá marcar a faixa de rendimento informada e avançar para o próximo quesito sem registrar o valor.</li>
					<li>Procedimento 2: o informante não sabe, ou não quer informar, nem o valor e nem a faixa de rendimento. O entrevistador deverá clicar em avançar para o próximo quesito sem o preenchimento.</li>
			</div>
		</section>
		<!-- Destaque [fim] -->

		<!--QUESITO 13-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Horas trabalhadas</h2>

			<p>O quesito referente às horas trabalhadas tem como finalidade mensurar a jornada de trabalho de pessoas ocupadas com idade entre 5 e 13 anos, ou seja, o tempo dedicado ao(s) trabalho(s) em termos de horas semanais efetivamente trabalhadas.</p>

			<h2>Quesito 13</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
					<img class="image" src="dist/img/01telas/trab_infantil--quesito13.jpg" alt="tela com a pergunta 13">
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito refere-se a todos os trabalhos, caso a criança tenha mais de um, não apenas ao principal. Deverá ser preenchido com a quantidade de horas efetivamente trabalhadas. As horas trabalhadas podem ser definidas como aquelas em que a criança de 5 a 13 anos de idade:</p>

			<ul class="bulleted-list">
				<li>Trabalha no próprio local de trabalho;</li>
				<li>Trabalha, fora do local de trabalho, em tarefas relacionadas com a sua ocupação;</li>
				<li>Permanece no local de trabalho, à disposição para realizar suas tarefas, podendo não conseguir clientes ou fregueses;</li>
				<li>Permanece no local de trabalho, esperando sem poder realizar suas tarefas, devido à avaria de máquinas, acidentes, falta de material ou designação de tarefas;</li>
				<li>Dedica à preparação, conservação, limpeza e consertos dos instrumentos de trabalho;</li>
				<li>Faz a preparação necessária para iniciar as suas tarefas ou elabora controles, cronogramas, relatórios e formulários referentes ao trabalho, inclusive os decorrentes de obrigações legais;</li>
				<li>Gasta em pequenos períodos de repouso no local de trabalho, incluindo as pausas para tomar água, café ou chá etc.</li>
			</ul>

		</div>

		<!--Fim quesito-->

		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

				<p>As horas trabalhadas não incluem:</p>
				<ul class="bulleted-list">
					<li>as pausas para as refeições;</li>
					<li>o tempo gasto nas viagens da residência para o trabalho;</li>
					<li>as horas em que a criança esteve afastada do trabalho por estar doente, por ter faltado ou ter chegado atrasada.</li>
			</div>
		</section>
		<!-- Destaque [fim] -->


		<!--Fim conteúdo-->

	</div>

</main>

<?php
include "foot.php";
?>

</body>

</html>