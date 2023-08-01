<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Como o trabalho infantil é pesquisado";
	// Titulo da pagina	
	$pageTitle = "Outras atividades das crianças de 5 a 13 anos de idade";
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
		<p class="lead">Para investigar o trabalho infantil de forma ampla, é necessário incluir a pesquisa do chamado trabalho invisível, conhecido na <span class="small-caps">PNAD</span> Contínua como “Outras formas de trabalho”.</p>

		
	</header>

	<div class="row">


	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">			
			
			<p>O conjunto de quesitos apresentados a seguir tem como objetivo captar outras atividades realizadas pelos moradores com idade entre 5 e 13 anos, tais como <strong>produção para consumo próprio, construção para uso próprio, cuidado de pessoas e afazeres domésticos.</strong> Tais quesitos devem ser respondidos mesmo por aqueles que declararam ter algum tipo de trabalho nas perguntas anteriores.</p>
			
			<h2>Produção para o próprio consumo e construção para o próprio uso</h2>
			<p>A produção para o próprio consumo é uma valiosa informação para o Sistema de Contas Nacionais e para as análises relativas a trabalho, gênero e uso do tempo. A produção de bens para o próprio consumo inclui:</p>

			<dl class="definition-list">
				<dt>Atividades agropecuárias</dt>
				<dd>Produção, coleta e/ou armazenamento de produtos agrícolas, de pesca, de caça e de criação de animais;</dd>

				<dt>Coleta e transformação de produtos minerais ou florestais</dt>
				<dd>Coleta e/ou transformação de produtos minerais e florestais, incluindo lenha e outros combustíveis, assim como coleta de água a partir de fontes naturais;</dd>

				<dt>Produção de bens de uso doméstico</dt>
				<dd>Fabricação de móveis, têxteis, artigos do vestuário, calçados, cerâmicas ou outros bens duráveis, incluindo barcos e canoas utilizados por moradores do domicílio ou por parentes que residiam em outro domicílio;</dd>

				<dt>Reparo e construção</dt>
				<dd>Construção, ampliação ou realização de grandes reparos na própria moradia ou em outras edificações no terreno, na fazenda etc.</dd>
			</dl>

			<h3>Atividades de cultivo, pesca ou criação de animais</h3>
			<p>A primeira seção do questionário sobre produção para o próprio consumo é composta de três quesitos que visam identificar e qualificar as atividades em cultivo, pesca ou criação de animais destinadas somente à alimentação das pessoas moradoras do domicílio ou de parente. Vejamos, a seguir:</p>
			
		</div>

		<!--QUESITO 14-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 14</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito14.jpg" alt="tela com a pergunta 14">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Deverá ser selecionada a opção <strong>“Sim”</strong> para a criança de 5 a 13 anos de idade que trabalhou, na totalidade ou em parte da semana de referência em alguma tarefa do ramo que compreende as seguintes atividades:</p>

			<ul class="bulleted-list">

				<li>agricultura (inclusive a horticultura, fruticultura, produção de sementes e mudas);</li>  
				<li>criação e produção de animais, tais como aves, bovinos, porcos, carneiros, cabritos etc., incluindo a criação de abelhas para produção de mel;</li>
				<li>pesca e aquicultura de organismos aquáticos tais como peixes, camarões, ostras e de mexilhões, plantas aquáticas, jacarés, tartarugas e rãs;</li>
				<li>caça de animais silvestres (pacas, capivaras, tatus etc.).</li>
			</ul>

			<p>Para fins de preenchimento deste quesito, a produção deve ser somente para consumo de <strong>membro(s) do domicílio ou de parente(s)</strong> que residiam em outro domicílio. Além disso, o entrevistador deve se certificar de que a produção <strong>não era para venda ou troca</strong>.</p>	

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 15-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 15</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito15.jpg" alt="tela com a pergunta 15">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito será habilitado apenas se, na pergunta anterior, a criança de 5 a 13 anos de idade responder <strong>Sim</strong>. Ou seja, a partir do momento em que ela declara ter exercido atividades em cultivo, pesca, caça ou criação de animais destinados somente à alimentação das pessoas moradoras do domicílio ou de parente, será perguntada a quantidade de horas que dedicou <strong>de fato, na semana de referência</strong>, a estas atividades.</p>

			<p><strong>Entram no cálculo</strong>: horas dedicadas à limpeza, à reparação, à preparação ou à manutenção de ferramentas ou instrumentos necessários à realização desse trabalho.</p>
			<p><strong>Não entra no cálculo</strong>: o tempo de deslocamento para o início dessas atividades.</p>	

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 16-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 16</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito16.jpg" alt="tela com a pergunta 16">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>A partir do momento em que a criança de 5 a 13 anos de idade declara ter exercido atividades em cultivo, pesca, caça ou criação de animais destinados somente à alimentação das pessoas moradoras do domicílio ou de parente, será perguntada qual foi a principal, ou seja, aquela na qual dedicou o maior número de horas.</p>

			<p>Ao clicar no campo, o entrevistador deverá escrever a atividade relativa ao cultivo, criação, caça ou pesca, acompanhada do nome do produto cultivado ou do animal criado. Veja os exemplos de descrição, a seguir, passíveis de serem especificadas:</p>

			<ul class="bulleted-list">

				<li>criação de galinhas;</li>
				<li>horticultura;</li>
				<li>pesca;</li>
				<li>cultivo de feijão;</li>
				<li>criação de suínos;</li>
				<li>cultivo de mandioca.</li>
			</ul>	

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 17-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h3>Coleta e transformação de produtos minerais ou florestais</h3>

			<p>A segunda seção do questionário sobre produção para o próprio consumo é composta de três quesitos que visam identificar e qualificar as atividades na produção de carvão, corte ou coleta de lenha, coleta de água, extração de sementes, de ervas, de areia, argila ou outro material destinado somente ao próprio uso das pessoas moradoras do domicílio ou de parente, na semana de referência. Vejamos, a seguir:</p>

			<h2>Quesito 17</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito17.jpg" alt="tela com a pergunta 17">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Deverá ser selecionada a opção <strong>“Sim”</strong> para a criança de 5 a 13 anos de idade que trabalhou, na totalidade ou em parte da semana de referência, em alguma atividade de coleta e/ou de transformação de produtos minerais e/ou florestais, tais como:</p>

			<ul class="bulleted-list">

				<li>produção de carvão;</li>
				<li>corte, coleta ou transporte de lenha ou de palha de fora da propriedade para dentro da propriedade;</li>
				<li>coleta ou transporte de água de fora da propriedade para dentro da propriedade;</li>
				<li>extração de sementes, de seiva, de frutos, de folhas, de flores, de ervas, de fibras ou de outra extração vegetal;</li>
				<li>extração de areia, de pedra, de sal, de argila ou de outro mineral.</li>
			</ul>	

			<p>Destacamos que nas atividades de coleta ou extração de água da natureza (rio, lago ou açude) <strong>não está incluída a coleta de água de poço, bica ou de caminhão pipa/caminhão-tanque</strong>, pois enquadram-se em afazeres domésticos.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>O entrevistador deve se certificar, junto ao morador, de que a produção, a extração ou a coleta <strong>não eram para venda ou troca</strong>.</q>
			</aside>
			<!-- Realce [fim] -->

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 18-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 18</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito18.jpg" alt="tela com a pergunta 18">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito será habilitado apenas se, na pergunta anterior, a criança de 5 a 13 anos de idade responder <strong>Sim</strong>. Ou seja, a partir do momento em que ela declara ter exercido atividades de coleta e/ou de transformação de produtos minerais e florestais, destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes que residiam em outro domicílio, será perguntada a quantidade de horas que dedicou <strong>de fato, na semana de referência</strong>, a estas atividades.</p>

			<p><strong>Entram no cálculo</strong>: horas dedicadas à limpeza, à reparação, à preparação ou à manutenção de ferramentas ou instrumentos necessários à realização desse trabalho.</p>

			<p><strong>Não entra no cálculo</strong>: o tempo de deslocamento para o início dessas atividades.</p>
				
		</div>	
		<!--Fim quesito-->

		<!--QUESITO 19-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 19</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito19.jpg" alt="tela com a pergunta 19">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>A partir do momento em que a criança de 5 a 13 anos de idade declara ter exercido atividades de coleta e/ou de transformação de produtos minerais e/ou florestais destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes que residiam em outro domicílio, será perguntada qual foi a principal, ou seja, aquela na qual dedicou o maior número de horas.</p>
	

			<p>No campo de texto livre, de acordo com a declaração do morador, o entrevistador irá escrever a atividade relativa à coleta ou transformação. Veja os exemplos de descrição, a seguir, passíveis de serem especificadas:</p>

			<ul class="bulleted-list">
				<li>extração de babaçu;</li>
				<li>extração de sal;</li>
				<li>produção de carvão vegetal;</li>
				<li>coleta de lenha;</li>
				<li>extração de madeira;</li>
				<li>extração de areia;</li>
				<li>coleta de água.</li>
			</ul>
			
		</div>	
		<!--Fim quesito-->

		<!--QUESITO 20-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h3>Produção de bens de uso doméstico</h3>

			<p>A terceira seção do questionário sobre produção para o próprio consumo é composta de três quesitos que visam identificar e qualificar as atividades na fabricação de roupas, tricô, bordado, cerâmicas, rede de pesca, alimentos ou bebidas alcoólicas, produtos medicinais ou outros produtos destinados somente ao próprio uso das pessoas do domicílio ou de parente, na semana de referência. Vejamos, a seguir:</p>

			<h2>Quesito 20</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito20.jpg" alt="tela com a pergunta 20">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Deverá ser selecionada a opção <strong>“Sim”</strong> para a criança de 5 a 13 anos de idade que trabalhou, na totalidade ou em parte da semana de referência, em alguma atividade na fabricação de bens de uso doméstico, tais como:</p>

			<ul class="bulleted-list">
				<li>alimentos ou bebidas alcoólicas;</li>
				<li>roupas, calçados, bolsas, bijuterias ou outros artigos pessoais;</li>
				<li>tricô, crochê, bordado ou outros artigos decorativos;</li>
				<li>panelas, potes;</li>
				<li>tarrafas, redes de pesca, redes de dormir, esteiras de palha;</li>
				<li>telhas, tijolos, móveis de madeira ou alvenaria;</li>
				<li>produtos medicinais ou sabonetes.</li>
				
			</ul>	

			<p>Para fins de preenchimento deste quesito, a produção deve ser destinada somente para uso de membro(s) da unidade domiciliar ou de parente(s) que residiam em outro domicílio.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>A produção de bens de uso doméstico não pode ter sido para venda ou troca.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>O entrevistador deverá observar as seguintes especificidades na marcação deste quesito:</p>

			<h4>Alimentos de grande durabilidade X pouca durabilidade</h4>
			<p>Tratando-se de atividade de produção de alimentos, deve ser considerada apenas aquela voltada para alimentos de <strong>grande durabilidade</strong> como a produção, o processamento e a conservação de carnes (abate de animais para produção de charque, de carne de sol, de peixe salgado, de linguiça defumada etc.) ou a produção de marmeladas, de goiabadas, de conservas, de queijos, de geleias, de farinha, de manteiga, de gordura animal, de massas caseiras, de torrefação e moagem de café etc. Para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Sim”.</p>

			<p>Em contrapartida, as atividades de preparo de alimentos de <strong>pouca durabilidade</strong>, para o consumo imediato ou a serem congelados, para consumo em período relativamente curto, devem ser consideradas como <strong>parte dos afazeres domésticos</strong>, cujos quesitos ainda serão apresentados. Como exemplo temos o ato de fazer feijão, arroz, legumes, carnes e tortas. Portanto, para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Não”.</p>

			<h4>Produção de bebidas</h4>
			<p>A atividade voltada para a produção de vinhos, de aguardentes e de outros tipos de bebidas desta natureza, quando produzidos para o consumo próprio das pessoas do domicílio ou de parentes que residiam em outro domicílio, deve ser considerada neste quesito, com base no critério da durabilidade dos produtos. Para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Sim”.</p>

			<h4>Produção de artigos medicinais</h4>
			<p>A produção de artigos medicinais que inclui: xarope, garrafada, tinturas de plantas medicinais (mistura de partes de plantas frescas ou secas em álcool de pureza absoluta, visando à conservação das plantas medicinais), unguento, pomadas etc., quando produzidos para o consumo próprio das pessoas do domicílio ou de parentes que residiam em outro domicílio, deve ser considerada nesta categoria do quesito. Para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Sim”.</p>

			<h4>Reparo não é confecção</h4>
			<p>As atividades de reparo de peças do vestuário, de calçados, de móveis e de outros objetos do domicílio, devem ser consideradas como parte dos afazeres domésticos, cujos quesitos ainda serão apresentados. Para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Não”.</p>

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 21-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 21</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito21.jpg" alt="tela com a pergunta 21">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito será habilitado apenas se, na pergunta anterior, a criança de 5 a 13 anos de idade responder <strong>Sim</strong>. Ou seja, a partir do momento em que ela declara ter exercido atividades de fabricação de bens de uso doméstico (móveis, têxteis, vestuário, calçado, cerâmica ou outros bens duráveis, incluindo barcos e canoas), destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes que residiam em outro domicílio, será perguntada a quantidade de horas que dedicou <strong>de fato, na semana de referência</strong>, a estas atividades.</p>

			<p><strong>Entram no cálculo</strong>: horas dedicadas à limpeza, à reparação, à preparação ou à manutenção de ferramentas ou instrumentos necessários à realização desse trabalho.</p>

			<p><strong>Não entra no cálculo</strong>: o tempo de deslocamento para o início dessas atividades.</p>
		
		</div>
		<!--Fim quesito-->
		

		<!--QUESITO 22-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 22</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito22.jpg" alt="tela com a pergunta 22">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>A partir do momento em que a criança de 5 a 13 anos de idade declara ter exercido atividades de fabricação de bens de uso doméstico destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes que residiam em outro domicílio, será perguntada qual foi a principal, ou seja, aquela na qual dedicou o maior número de horas.</p>

			<p>Ao clicar no campo, o entrevistador irá escrever a atividade principal. Veja os exemplos de descrição, a seguir, passíveis de serem especificadas:</p>

			<ul class="bulleted-list">
				<li>confecção de roupas;</li>
				<li>fabricação de tapetes;</li>
				<li>fabricação de panela de barro;</li>
				<li>fabricação de móveis;</li>
				<li>produção de queijo;</li>
				<li>produção de geleias;</li>
				<li>produção de conservas.</li>

			</ul>	

		</div>	
		<!--Fim quesito-->
			

		<!--QUESITO 23-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h3>Reparo e construção</h3>
			<p>A quarta seção do questionário sobre produção para o próprio consumo é composta de três quesitos que visam identificar e qualificar as atividades de construção de casa, cômodo, muro, telhado, forno ou churrasqueira, cerca, estrada, abrigo para animais ou outras obras destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes na semana de referência. Vejamos, a seguir:</p>

			<h2>Quesito 23</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito23.jpg" alt="tela com a pergunta 23">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Deverá ser selecionada a opção <strong>“Sim”</strong> para a criança de 5 a 13 anos de idade que trabalhou, na totalidade ou em parte da semana de referência, em alguma tarefa do ramo que compreende as atividades de construção, ampliação ou realização de grandes reparos na própria moradia ou em outras edificações no terreno, na fazenda etc., tais como:</p>

			<ul class="bulleted-list">
				<li>construção de casa ou de cômodo, de muro, de telhado ou de laje;</li>
				<li>construção de chaminé, de lareira, de forno ou de fogão, de churrasqueira ou de piscina;</li>
				<li>construção de cerca, de ponte ou de estrada para uso particular;</li>
				<li>construção de abrigo para animais domésticos ou para animais destinados à alimentação do domicílio;</li>
				<li>construção de poço, cacimba, cisterna.</li>

			</ul>	

			<p>Para fins de preenchimento deste quesito, a construção deve ser destinada somente para uso de membro(s) da unidade domiciliar ou de parente(s) que residiam em outro domicílio. Além disso, <strong>a construção não pode ter sido para venda ou troca de serviços</strong>.</p>

		</div>
		<!--Fim quesito-->	


		<!--QUESITO 24-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 24</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito24.jpg" alt="tela com a pergunta 24">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito será habilitado apenas se, na pergunta anterior, a criança de 5 a 13 anos de idade responder <strong>Sim</strong>. Ou seja, a partir do momento em que ela declara ter exercido atividades de construção, destinadas somente ao próprio uso das pessoas moradoras do domicílio ou de parentes que residiam em outro domicílio, será perguntada a quantidade de horas que dedicou <strong>de fato, na semana de referência</strong>, a estas atividades.</p>

			<p><strong>Entram no cálculo</strong>: horas dedicadas à limpeza, à reparação, à preparação ou à manutenção de ferramentas ou instrumentos necessários à realização desse trabalho.</p>

			<p><strong>Não entra no cálculo</strong>: o tempo de deslocamento para o início dessas atividades.</p>	
			
		</div>
		<!--Fim quesito-->

		<!--QUESITO 25-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 25</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito25.jpg" alt="tela com a pergunta 25">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>A partir do momento em que a criança de 5 a 13 anos de idade declara ter exercido atividades de construção, será perguntada qual foi a principal, ou seja, aquela na qual dedicou o maior número de horas.</p>

			<p>Ao clicar no campo, o entrevistador irá escrever a atividade principal. Veja os exemplos de descrição, a seguir, passíveis de serem especificadas:</p>

			<ul class="bulleted-list">
				<li>construção de cerca;</li>
				<li>construção de muros;</li>
				<li>reforma de casa;</li>
				<li>construção de abrigo para animais;</li>
				<li>ampliação de casa;</li>
				<li>construção de calçada;</li>
				<li>construção de galpão;</li>
				<li>construção de churrasqueira;</li>
				<li>colocação de piso;</li>
				<li>construção de piscina.</li>
			</ul>	

			<p>Para fins de preenchimento deste quesito, a construção deve ser destinada somente para uso de membro(s) da unidade domiciliar ou de parente(s) que residiam em outro domicílio. Além disso, <strong>a construção não pode ter sido para venda ou troca de serviços</strong>.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>As atividades de decoração, os pequenos reparos, incluindo reparos em instalações elétricas e a manutenção da pintura destinadas unicamente à conservação do domicílio devem ser consideradas como parte dos <strong>afazeres domésticos</strong>, cujos quesitos ainda serão apresentados.</q>
			</aside>
			<!-- Realce [fim] -->
		
		</div>
		<!--Fim quesito-->		
	

		<!--QUESITO 26-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Cuidados de pessoas </h2>
			<p>Os quesitos 26 a 27 têm como objetivo captar as crianças de 5 a 13 anos de idade que cuidam de outros membros do domicílio ou de familiares residentes em outros domicílios. Devem ser consideradas como "cuidados" atividades como dar banho, alimentar, vestir, administrar remédios, entre outras.</p>

			<h2>Quesito 26</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito26.jpg" alt="tela com a pergunta 26">	
				</picture>
			</figure>

			<!-- FIM-->


			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Considera-se cuidado de pessoas as atividades realizadas por um morador em apoio ou auxílio a outro que não poderia realizá-las de forma independente.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>Essas pessoas poderão ser crianças, idosos, enfermos ou pessoas que necessitam de cuidados especiais.</p>

			<p>O entrevistador deverá selecionar <strong>Sim</strong> ou <strong>Não</strong>, de acordo com as seguintes orientações:</p>

			<dl class="definition-list">

				<dt>Auxiliar nos cuidados pessoais (alimentar, vestir, pentear, dar remédio, dar banho, colocar para dormir)?</dt>
				<dd>A criança de 5 a 13 anos de idade, na semana de referência, auxiliou nos cuidados pessoais (alimentou, vestiu, penteou, deu remédio, deu banho, colocou para dormir) de moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. Além dos cuidados mencionados, podem ser considerados quaisquer outras atividades de apoio nos cuidados pessoais de outro(s) morador(es). Exemplo: trocar fralda; amamentar; levar ao banheiro; escovar os dentes; fazer a barba etc.</dd>

				<dt>Auxiliar em atividades educacionais?</dt>
				<dd>A criança de 5 a 13 anos de idade, na semana de referência, auxiliou em atividades educacionais de moradores do domicílio que eram crianças ou pessoas com necessidades especiais. São consideradas atividades educacionais: orientar ou ajudar nos deveres e nas atividades escolares em geral, realizar atividades que incentivem o desenvolvimento cognitivo, visando facilitar o processo de aprendizado de crianças ou pessoas portadoras de necessidades especiais.</dd>


				<dt>Ler, jogar ou brincar?</dt>
				<dd>A criança de 5 a 13 anos de idade, na semana de referência, realizou atividades de leitura, jogos ou brincadeiras para moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. São consideradas todas as atividades de recreação dentro ou fora do domicílio realizadas pela pessoa que cuida.</dd>

				<dt>Monitorar ou fazer companhia dentro do domicílio?</dt>
				<dd>A criança de 5 a 13 anos de idade, na semana de referência, monitorou ou fez companhia dentro do domicílio a moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. São consideradas atividades de monitoramento e companhia: ficar atento para situações em que é necessária a participação da pessoa que está cuidando, observar uma criança enquanto brinca para não se acidentar, acompanhar se o idoso tomou todos os remédios de forma correta, ficar atento e disponível às necessidades de um enfermo ou idoso ao longo do dia etc.</dd>


				<dt>Transportar ou acompanhar para escola, médico, exames, parque, praça, atividades sociais, culturais, esportivas ou religiosas?</dt>
				<dd>A criança de 5 a 13 anos de idade, na semana de referência, transportou ou acompanhou para escola, médico, exame, parque, praça, atividades sociais, culturais, esportivas ou religiosas, moradores do domicílio que eram crianças, idosos, enfermos ou pessoas com necessidades especiais. Também são consideradas atividades de transporte ou acompanhamento levar o idoso a um baile, transportá-lo para a casa de amigos ou parentes, levar crianças para natação e outras atividades etc.</dd>


				<dt>Outras tarefas de cuidados de moradores?</dt>
				<dd>A criança de 5 a 13 anos de idade, na semana de referência, realizou outras tarefas de cuidados de moradores do domicílio: crianças, idosos, enfermos ou pessoas com necessidades especiais.</dd>

				<dd>É importante ressaltar que o cuidado só é oferecido a adultos que estejam doentes ou tenham necessidades especiais que os incapacitem. Por exemplo, o ato de uma esposa levar comida na cama para o marido, por carinho, não pode ser considerado como cuidado, já que ele é capaz de fazer isso sozinho.</dd>


			</dl>

		</div>	
		<!--Fim quesito-->		


		<!--QUESITO 27-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 27</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito27.jpg" alt="tela com a pergunta 27">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Este quesito visa identificar a realização de atividades de cuidado ao morador parente que não residia no mesmo domicílio, mesmo que o cuidado tenha sido realizado no próprio domicílio do entrevistado. Por exemplo, a criança que cuida da avó, sendo esta moradora de outro domicílio; filhos que monitoram a saúde da mãe doente etc.</p>

			<p>O entrevistador irá selecionar <strong>Sim</strong> ou <strong>Não</strong>, conforme o caso. As orientações para o preenchimento são as mesmas já apresentadas no quesito anterior, que apresenta os tipos de tarefa de cuidados.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Não devem ser consideradas as pessoas não parentes que moram em outro domicílio e receberam cuidados, como por exemplo vizinhos e amigos. Esse tipo de cuidados se caracteriza como trabalho voluntário, que não é captado para crianças de 5 a 13 anos de idade.</q>
			</aside>
			<!-- Realce [fim] -->
	
		</div>
		<!--Fim quesito-->

		<!--QUESITO 28-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Afazeres domésticos</h2> 

			<p>Os afazeres domésticos são as atividades realizadas em benefício próprio e dos moradores, sem envolver qualquer tipo de remuneração em dinheiro, produtos ou mercadorias.</p>

			<p>Também compreendem o exercício de tarefas relacionadas às atividades de arrumação ou limpeza de quintal ou de terreno que circunda a residência e tenham caráter exclusivamente doméstico.</p> 

			<h2>Quesito 28</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito28.jpg" alt="tela com a pergunta 28">	
				</picture>
			</figure>

			<!-- FIM-->

			<p>Neste quesito, o entrevistador irá marcar <strong>Sim</strong> ou <strong>Não</strong>, para cada um dos tipos de afazeres domésticos, para cada criança. A seguir, a lista completa, constante do <span class="small-caps">DMC</span>:</p>

			<!-- Lista ordenada [inicio] -->
			<ul class="numeric-list">
				
				<li>Preparar ou servir alimentos, arrumar a mesa ou lavar as louças?</li>
				<li>Cuidar da limpeza ou manutenção de roupas e sapatos?</li>
				<li>Fazer pequenos reparos ou manutenção do domicílio, do automóvel, de eletrodomésticos ou outros equipamentos?</li>
				<li>Limpar ou arrumar o domicílio, a garagem, o quintal ou o jardim?</li>
				<li>Cuidar da organização do domicílio (pagar contas, contratar serviços, orientar empregados etc.)?</li>
				<li>Fazer compras ou pesquisar preços de bens para o domicílio?</li>
				<li>Cuidar dos animais domésticos?</li>
				<li>Outras tarefas domésticas?</li>

			</ul>
			<!-- Lista ordenada [FIM] -->	

			<p>Observe as seguintes orientações, na seleção dos itens acima listados:</p>	

			<dl class="definition-list">

				<dt>Cuidado de animais domésticos</dt>
				<dd>São tarefas realizadas por morador do domicílio relativas à alimentação, limpeza, banho, passeio, assim como dar remédio, levar no veterinário etc.</dd>

				<dt>Cuidar da organização do domicílio</dt>
				<dd>Neste conjunto de atividades também se incluem: fazer lista de compras; planejar o cardápio da refeição; planejar o orçamento doméstico; fazer os pagamentos no banco, na internet ou diretamente ao prestador de serviços; estabelecer as atividades que o trabalhador doméstico deverá realizar ao longo do dia; chamar pintor, eletricista ou bombeiro hidráulico para fazer reparos ou obras etc.</dd>

				<dt>Fazer compras ou pesquisar preços de bens para o domicílio</dt>
				<dd>Neste conjunto de atividades deve ser considerada a realização de compras ou pesquisa de preço no estabelecimento comercial, por telefone ou internet.</dd>

				<dt>Cuidados com o automóvel</dt>
				<dd>Lavar o carro, levar ao mecânico ou para a vistoria é considerado afazer doméstico no item 3.</dd>

				<dt>Alimentos de grande durabilidade X alimentos de pouca durabilidade</dt>
				<dd>As atividades de preparo de alimentos de pouca durabilidade, para o consumo imediato ou a serem congelados, para consumo em período relativamente curto, devem ser consideradas como parte dos afazeres domésticos. Como exemplo temos o ato de fazer feijão, arroz, legumes, carnes e tortas.</dd>

				<dd>Alimentos de grande durabilidade como a produção, o processamento e a conservação de carnes (abate de animais para produção de charque, de carne de sol, de peixe salgado, de linguiça defumada etc.) ou a produção de marmeladas, de goiabadas, de conservas, de queijos, de geleias, de farinha, de manteiga, de gordura animal, de massas caseiras, de torrefação e moagem de café etc. devem ser consideradas como produção para o próprio consumo. Portanto, para o presente quesito, diante de tal situação, o entrevistador deverá selecionar “Não”.</dd>

				<dt>Pequenos reparos × confecção</dt>
				<dd>Trocar zíper, botão, fazer bainha é afazer doméstico, abrangido por este quesito e deverá ser marcado “Sim” pelo entrevistador. Já fazer uma roupa é produção pra próprio consumo e deverá ser marcado “Não”, no presente quesito.</dd>

				<dt>Afazeres domésticos × construção para o próprio consumo</dt>
				<dd>Trocar lâmpada, pintar cômodo, rejuntar o piso, consertar uma tomada são consideradas atividades domésticas. Em contrapartida, reformas e grandes consertos no domicílio, realizadas por morador(es), tais como trocar toda a rede elétrica, azulejos, pisos, construir cômodo ou fazer ampliação do domicílio, não são atividades domésticas. Essas atividades devem ser consideradas como construção para o próprio uso.</dd>	
			</dl>		

		</div>
		<!--Fim quesito-->

		<!--QUESITO 29-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 29</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito29.jpg" alt="tela com a pergunta 29">	
				</picture>
			</figure>

			<!-- FIM-->


			<p>Este quesito visa identificar a realização de atividades de afazeres domésticos para parentes que não residiam no mesmo domicílio do entrevistado.</p>

			<p>O entrevistador irá selecionar <strong>Sim</strong>, caso o morador tenha executado, para parente, alguma das atividades listadas no quesito anterior.</p>

		</div>	
		<!--Fim quesito-->	

		<!--QUESITO 30-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 30</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito30.jpg" alt="tela com a pergunta 30">	
				</picture>
			</figure>

			<!-- FIM-->


			<p>Este quesito será habilitado apenas se for selecionado <strong>Sim</strong> para atividades de cuidado de pessoas e/ou afazeres domésticos. Nesta situação, o entrevistador vai solicitar ao morador que some as horas efetivamente dedicadas, na semana de referência, às <strong>atividades de cuidados de pessoas</strong> no domicílio ou de parentes e as <strong>atividades domésticas</strong> realizadas no próprio domicílio ou em domicílio de parente.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>As atividades de cuidado de pessoas e tarefas domésticas realizadas de forma simultânea devem ser contabilizadas uma única vez.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>Imaginemos o exemplo de uma criança que, na semana de referência, cuidou da organização do domicílio enquanto monitorava seu irmão de seis anos, brincando. A atividade de monitoramento durou 3 horas e a de organização doméstica durou 1 hora. Nesse caso, o registro para o presente quesito será de 3 horas.</p>

			<figure class="img-container">
				<picture>
					<?php inlineSvg("dist/img/15grafico01.svg", "image", "grafico de atividades"); ?>
				</picture>
			</figure>

		</div>	
		<!--Fim quesito-->

		<!--QUESITO 31-->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2>Quesito 31</h2>

			<!-- Imagem quesitos-->
			<figure class="img-container">
				<picture>
				<img class="image" src="dist/img/01telas/trab_infantil--quesito31.jpg" alt="tela com a pergunta 31">	
				</picture>
			</figure>

			<!-- FIM-->


			<p>Neste quesito o entrevistador deverá informar qual foi a pessoa que prestou as informações nas perguntas relativas ao trabalho de crianças de 5 a 13 anos de idade. Esta informação é extremamente importante, pois em uma eventual checagem de dados, podemos procurar diretamente a pessoa que prestou as informações.</p>

			<p>Por fim, assista o vídeo, a seguir, para compreender a dinâmica de funcionamento do <span class="small-caps">DMC</span> nos quesitos sobre Trabalho de crianças de 5 a 13 anos:</p>


			<!-- Video incorporado (YouTube) [inicio] -->
			<div class="video-wrapper">
				<div class="video-wrapper__iframe video-wrapper__iframe--focusable" id="youtube-video--example01"></div>
			</div>
			<p class="video-link">Vídeo <a href="https://www.youtube.com/watch?v=9FZaGIsKYtM" rel="noopener">Pnad Contínua - Módulo Trabalho de pessoas de 5 a 13 anos de idade</a></p>
			<!-- Video incorporado (YouTube) [fim] -->
			<br>
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
<!-- Inclua o script a seguir para incorporar videos do YouTube -->
<script src="https://www.youtube.com/iframe_api"></script>
<script>

	/* Configuracao e ativacao da incorporacao de video do YouTube [inicio] */
	function onYouTubeIframeAPIReady() {
		//Funcao que cria o player do YouTube. O primeiro parametro e o elemento, o segundo a ID do video
		buildYouTubePlayer('youtube-video--example01','9FZaGIsKYtM');
	};
	/* Configuracao e ativacao da incorporacao de video do YouTube [fim] */

	</script>	
</body></html>

	