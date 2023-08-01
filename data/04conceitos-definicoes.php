<?php
	// Titulo da unidade
	$moduleTitle = "Trabalho de pessoas de 5 a 13 anos de idade";
	// Titulo do topico
	$topicTitle = "Introdução";
	// Titulo da pagina	
	$pageTitle = "Trabalho realizado por crianças: conceitos e definições";
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
		<p class="lead">Por uma questão metodológica e pelo fato de nem todas as atividades exercidas por crianças poderem ser imediatamente classificadas como trabalho infantil, o <span class="small-caps">IBGE</span> adota a terminologia “Trabalho de pessoas de 5 a 13 anos de idade”.</p>

		<p class="lead">No entanto, os dados coletados por este módulo da <span class="small-caps">PNAD</span> Contínua ajudam a lançar uma luz sobre crianças em situação de trabalho infantil no Brasil e no mundo. Não é em vão que na pequena amostra de matérias sobre trabalho de crianças, a seguir, o <span class="small-caps">IBGE</span> e a <span class="small-caps">PNAD</span> são sempre referenciados:</p>
	</header>

	<div class="row">

			
	<!-- Mosaico [inicio] -->
	<ul class="row photo-mosaic">
		<li class="col-xs-24 col-sm-12 col-md-8">
			<figure class="photo-mosaic__img-container">
				<picture>
					<source srcset="dist/img/m01--lg.jpg" media="(min-width:1200px)">
					<source srcset="dist/img/m01--md.jpg" media="(min-width:600px)">
					<source srcset="dist/img/m01--sm.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/example-img001--lg.jpg" alt="Fotografia tirada do alto mostra um adolescente sentado no chão, de pernas cruzadas. Sobre elas estão apoiados, em um recipiente, vários pacotes de balas em goma. O adolescente usa casaco preto e branco de zíper e uma bermuda azul.">
				</picture>
				<figcaption class="photo-mosaic__img-caption">	
					<h4 class="news__title"><a href="https://www.terra.com.br/noticias/brasil/trabalho-infantil-criancas-trocam-escola-pelas-ruas-em-busca-de-sustento-para-a-familia,166c32024fd87915ebbbd0f7305033c1i1b2vs3a.html" target="_blank" rel="noopener">Trabalho infantil: crianças trocam escola pelas ruas em busca de sustento para a família</a></h4>
					<p>“Na contramão do que propõe o Estatuto da Criança e do Adolescente (ECA), o número de crianças em situação de trabalho infantil ainda é alto no país. Milhares de brasileiros abaixo dos 18 anos que fazem parte de grupos socialmente vulneráveis deixam sonhos, estudos e o futuro em segundo plano para tentar melhorar o presente”.</p>
					<p><small class="img-container__img-src"><a href="https://p2.trrsf.com/image/fget/cf/774/0/images.terra.com/2022/06/10/whatsapp-image-2022-06-10-at-18-1hv5zrdyrgy7p.01">Foto: imagens.terra.com</a></small></p>
				</figcaption>
			</figure>
		</li>
		<li class="col-xs-24 col-sm-12 col-md-8">
			<figure class="photo-mosaic__img-container">
				<picture>
					<source srcset="dist/img/m02--lg.jpg" media="(min-width:1200px)">
					<source srcset="dist/img/m02--md.jpg" media="(min-width:600px)">
					<source srcset="dist/img/m02--sm.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/example-img001--lg.jpg" alt="Fotografia tirada do alto mostra uma criança, apenas do peitoral para baixo, com as mãos espalmadas. Exibe moedas de real e uma nota amassada de dois reais. Veste casaco amarelo, bermuda jeans e calça chinelos vermelhos. Em segundo plano aparece um carrinho de mão, sob a proteção dele.">
				</picture>
				<figcaption class="photo-mosaic__img-caption">	
					<h4 class="news__title"><a href="https://reporterbrasil.org.br/2021/03/sem-escola-sem-recreio-sem-futuro/" target="_blank" rel="noopener">Sem escola, sem recreio, sem futuro</a></h4>
					<p>“O trabalho infantil atinge, majoritariamente, crianças pobres, em geral negras ou pardas, moradoras da periferia, conforme o perfil mais comum dessas vítimas. Mas a interface dessa violação com o racismo e a pobreza é pouco percebida”.</p>
					<p><small class="img-container__img-src"><a href="https://reporterbrasil.org.br/wp-content/uploads/2021/03/image1-reduzida-1080x608.jpg ">Foto: reporterbrasil.org.br</a></small></p>
				</figcaption>
			</figure>
		</li>
		
		<li class="col-xs-24 col-sm-12 col-md-8">
			<figure class="photo-mosaic__img-container">
				<picture>
					<source srcset="dist/img/m03--lg.jpg" media="(min-width:1200px)">
					<source srcset="dist/img/m03--md.jpg" media="(min-width:600px)">
					<source srcset="dist/img/m03--sm.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/example-img001--lg.jpg" alt="Menina sentada de costas descasca mandioca com instrumento cortante e cercada por cascas de mandioca. À esquerda, uma pilha de mandiocas ainda a serem trabalhadas. À direita, em primeiro plano, uma bicicleta e, em segundo plano, parte das mandiocas já descascadas e um banco de madeira."></picture>
				</picture>
				<figcaption class="photo-mosaic__img-caption">	
					<h4 class="news__title"><a href="https://www.metropoles.com/brasil/casos-de-trabalho-infantil-cresceram-16-em-2022" target="_blank" rel="noopener">Casos de trabalho infantil cresceram 16% em 2022</a></h4>
					<p>Segundo a Pesquisa Nacional por Amostra de Domicílios Contínua (PNAD Contínua) de 2019, cerca de 1,8 milhão de crianças e adolescentes entre 5 e 17 anos estavam trabalhando no Brasil. Em escala global, são mais de 160 milhões no contexto, de acordo com a Organização Mundial do Trabalho.</p>
					<p><small class="img-container__img-src"><a href="https://uploads.metropoles.com/wp-content/uploads/2015/11/13135423/trabalho-infantil-brasil.jpg">Foto: metropoles.com</a></small></p>
				</figcaption>
			</figure>
		</li>
		
		<li class="col-xs-24 col-sm-12 col-md-8">
			<figure class="photo-mosaic__img-container">
				<picture>
					<source srcset="dist/img/m04--lg.jpg" media="(min-width:1200px)">
					<source srcset="dist/img/m04--md.jpg" media="(min-width:600px)">
					<source srcset="dist/img/m04--sm.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/example-img001--lg.jpg" alt="Em primeiro plano, uma criança pisando no chão enlameado de um lixão, carregando um saco de obra cheio de objetos coletados. Veste uma calça jeans e uma camiseta azul. Em segundo plano, dois cachorros farejando o chão e um adulto carregando outro saco cheio de objetos.">
				</picture>
				<figcaption class="photo-mosaic__img-caption">	
					<h4 class="news__title"><a href="https://observatorio3setor.org.br/noticias/trabalho-infantil-aumenta-na-pandemia-mas-segue-ignorado-no-brasil/" target="_blank" rel="noopener">Trabalho infantil aumenta na pandemia, mas segue ignorado no Brasil</a></h4>
					<p>“Essas crianças deveriam estar indo para a escola, recebendo alimento suficiente, fazendo atividades esportivas, participando de iniciativas de lazer e cultura. Na verdade, o que a gente tem no Brasil é uma segmentação de que algumas crianças e alguns adolescentes são merecedores disso e devem fazer parte disso, e outras não.”</p>
					<p><small class="img-container__img-src"><a href="https://upload.wikimedia.org/wikipedia/commons/2/23/Crianca_Lixao_20080220_-_Marcello_Casal_Jr._-_Agencia_Brasil.jpg">Foto: Marcello Casal Jr. - Agência Brasil</a></small></p>
				</figcaption>
			</figure>
		</li>
		
		<li class="col-xs-24 col-sm-12 col-md-8">
			<figure class="photo-mosaic__img-container">
				<picture>
					<source srcset="dist/img/m05--lg.jpg" media="(min-width:1200px)">
					<source srcset="dist/img/m05--md.jpg" media="(min-width:600px)">
					<source srcset="dist/img/m05--sm.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/example-img001--lg.jpg" alt="Em primeiro plano, uma boneca sobre a cadeira. Em segundo plano, fundo esmaecido, uma menina de cabelos longos sobre o rosto se inclina para limpar o chão, utilizando-se de um rodo e um pano.">
				</picture>
				<figcaption class="photo-mosaic__img-caption">	
					<h4 class="news__title"><a href="https://livredetrabalhoinfantil.org.br/noticias/reportagens/trabalho-infantil-domestico-afeta-a-vida-e-desenvolvimento-de-criancas-e-adolescentes-negras/" target="_blank" rel="noopener">Trabalho infantil doméstico afeta a vida e desenvolvimento de crianças e adolescentes negras</a></h4>
					<p>“Melhor estar trabalhando do que roubando”: a naturalização do trabalho infantil doméstico tem colaborado para a manutenção histórica desse cenário e dificultado o enfrentamento do problema.</p>
					<p><small class="img-container__img-src"><a href="http://abet-trabalho.org.br/wp-content/uploads/2019/07/image.jpg">Foto: Lia Mara</a></small></p>
				</figcaption>
			</figure>
		</li>	

		<li class="col-xs-24 col-sm-12 col-md-8">
			<figure class="photo-mosaic__img-container">
				<picture>
					<source srcset="dist/img/m06--lg.jpg" media="(min-width:1200px)">
					<source srcset="dist/img/m06--md.jpg" media="(min-width:600px)">
					<source srcset="dist/img/m06--sm.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/example-img001--lg.jpg" alt="Desenho com traços infantis mostra uma criança com um saco pesado sobre as costas, cheio de frutas vermelhas. A criança está com feições tristes e coleta mais frutas.">
				</picture>
				<figcaption class="photo-mosaic__img-caption">	
					<h4 class="news__title"><a href="https://revistapesquisa.fapesp.br/trabalho-infantil-pode-afetar-quase-6-milhoes-no-pais/" target="_blank" rel="noopener">Trabalho infantil pode afetar quase 6 milhões no país </a></h4>
					<p>“Muitos dos meus alunos não têm mais impressão digital porque começaram a trabalhar desde cedo na produção de semijoias. E isso é descoberto no momento da emissão do documento de identidade.”.</p>
					<p><small class="img-container__img-src"><a href="https://revistapesquisa.fapesp.br/wp-content/uploads/2022/11/076-081_trabalho-infantil_321-1-1140.jpg ">Desenho: revistapesquisa.fapesp.br</a></small></p>
				</figcaption>
			</figure>
		</li>
	</ul>		
					
	<!-- Mosaico [fim] -->

	<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">			
			
			<p>De acordo com a Organização Internacional do Trabalho (<span class="small-caps">OIT</span>), nem todo o trabalho exercido por crianças deve ser classificado como trabalho infantil. O termo "trabalho infantil" é definido como o trabalho que priva as crianças de sua infância, seu potencial e sua dignidade, e que é prejudicial ao seu desenvolvimento físico e mental. Ele se refere ao trabalho que:</p>
			<ul class="bulleted-list">

				<li>É mental, física, social ou moralmente perigoso e prejudicial para as crianças;</li>
				<li>Interfere na sua escolarização;</li>
				<li>Priva as crianças da oportunidade de frequentarem a escola;</li>
				<li>Obriga as crianças a abandonar a escola prematuramente; ou</li>
				<li>Exige que se combine frequência escolar com trabalho excessivamente longo e pesado.</li>
			</ul>	

			<p>Para que um trabalho seja considerado "trabalho infantil" é preciso avaliar uma série de fatores, como a idade da criança, o tipo e horas de trabalho realizadas e as condições em que é executado. Considerando esses fatores, o <span class="small-caps">IBGE</span>, na divulgação da pesquisa, estabeleceu critérios para a classificação das <strong>crianças e adolescentes em situação de trabalho infantil</strong>, havendo critérios específicos para diferentes faixas etárias.</p> 
		</div>
		
		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<p>Em 2020, 160 milhões de crianças e adolescentes entre 5 e 17 anos foram vítimas de trabalho infantil no mundo (97 milhões de meninos e 63 milhões de meninas). Em outras palavras, uma em cada 10 crianças e adolescentes ao redor do mundo se encontravam em situação de trabalho infantil.</p>
				<p><small class="img-container__img-src">Fonte: Organização Internacional do Trabalho (<span class="small-caps">OIT</span class="small-caps">) - <a href="https://www.ilo.org/wcmsp5/groups/public/---ed_norm/---ipec/documents/publication/wcms_797515.pdf">Estimativas globais de trabalho infantil: resultados e tendências 2020</a></small> </p>
			</div>
		</section>
		<!-- Destaque [fim] -->
		
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			
			<p>A <a href="http://www.planalto.gov.br/ccivil_03/constituicao/constituicao.htm">Constituição Federal de 1988</a>, em seu artigo 7º destaca:</p>

			<!-- Citacao em bloco [inicio] -->
			<blockquote class="quote" cite="http://www.google.com.br/">
				<p>"XXXIII - proibição de trabalho noturno, perigoso ou insalubre a menores de dezoito e de qualquer trabalho a menores de dezesseis anos, salvo na condição de aprendiz, a partir de quatorze anos;"</p>
				<footer>
				
				</footer>
			</blockquote>
			<!-- Citacao em bloco [fim] -->  


			<p>Portanto, jovens de 14 e 15 anos já podem trabalhar, desde que como aprendizes. Segundo a Consolidação das Leis do Trabalho (<span class="small-caps">CLT</span>), o contrato não pode ser superior a dois anos, pressupõe assinatura da Carteira de Trabalho e requer que o jovem esteja matriculado e frequentando a escola.</p>

			<p>Já o <a href="https://www.planalto.gov.br/ccivil_03/leis/l8069.htm">Estatuto da Criança e do adolescente (<span class="small-caps">ECA</span>)</a>, assim como a Constituição Federal, determina que o jovem aprendiz não pode exercer trabalhos noturnos (entre 22h e 5h do dia seguinte), perigosos, insalubres, penosos, em locais que prejudiquem sua formação mental e física e realizado em horários e locais que não permitam a frequência à escola.</p>

			<p>É diante deste arcabouço jurídico que são analisados os dados relativos à criança e ao adolescente em situação de trabalho infantil.</p> 

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Um aspecto central sobre abordagem, na aplicação do questionário de trabalho de pessoas de 5 a 13 anos, consiste na postura do entrevistador, que não deve se portar como um agente da lei que veio fiscalizar, vigiar, punir infratores e libertar crianças.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>O entrevistador deverá, de forma isenta e <strong>respeitando o sigilo estatístico</strong>, efetuar as perguntas <strong>sem fazer juízo de valor</strong> e, consequentemente, sem condenar ou deixar o informante desconfortável, o que pode comprometer a qualidade das respostas.</p>

			<p>Conforme veremos a seguir, a metodologia internacional, seguida pelo questionário da <span class="small-caps">PNAD</span> Contínua, delineada pelo arcabouço jurídico citado e em cruzamento com outros dados, vai ajudar a identificar crianças e adolescentes em situação de trabalho infantil, sem constranger ou afastar o informante.</p>			
			

</div>

</main>

<?php
	include "foot.php";
?>

</body></html>

	