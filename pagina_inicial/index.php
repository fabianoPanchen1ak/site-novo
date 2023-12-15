<!DOCTYPE html>
<html lang="en">

	<?php
		include '../include/head.php';
		include '../css/template_principal.php';
		$mysqli->set_charset("utf8");
	?>
	
<style>
a {
    display: inline-table;
    text-decoration: none;
}
</style>	

<body class="home_3">

	<?php
		include '../include/toolbar.php';
		include '../include/menu.php';
	?>
	
    <!--=================================
        BANNER 3 START
    ==================================
    <section class="tf__banner_2 tf__banner_3" style="background: url(../images/banner_bg3.jpg);">
        <div class="container">
            <div class="row">
               <div class="col-xl-8 col-md-10 col-lg-8">
                    <div class="tf__banner_text wow fadeInUp" data-wow-duration="1.5s" style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                        <h5>Bem vindo à UNC!</h5>
                        <h1>Somos os melhor<span> cursos Online</span> de educação.</h1>
                        <p>Our agency can only be as strong as our people &amp; because of team have designed game changing
                            products.</p>
                        <ul class="d-flex flex-wrap align-items-center">
                            <li><a class="common_btn_3" href="#">Nossos cursos</a></li>
                            <li>
                                <a class="venobox play_btn vbox-item" data-autoplay="true" data-vbtype="video" href="https://youtu.be/xsnCYCEbdr4">
                                    <i class="fas fa-play" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BANNER 3 END
    ==================================-->
	
	
	<section>
			<div id="carouselExample" class="carousel slide">
			  <div class="carousel-inner">
				<?php 

					$sql = "SELECT ID, IMAGEM, LINK, URL_S3_COMPRESSED FROM banner_principal WHERE ATIVO='A' AND 
					DATA_INICIO <= CURDATE() AND DATA_FIM >= CURDATE() ORDER BY ORDEM";
					$query = $mysqli->query($sql);				
					$cont = 0;
					
					while ($dados = $query->fetch_array()) 
					{
					  $ID = $dados['ID'];
					  $IMAGEM = $dados['IMAGEM'];
					  $LINK = $dados['LINK'];
					  $URL_S3_COMPRESSED = $dados['URL_S3_COMPRESSED'];
					   
					  $cont++;
								  
					  $active = '';
					  
					  if($cont == 1)
					  {
						  $active = 'active';
					  }
					  
					  
					  echo("<div class='carousel-item $active'>
							  <a href='https://www.unc.br/'>
								<img src='$URL_S3_COMPRESSED' class='d-block w-100' alt='...'>
							  </a>
							</div>");
					  
					  
					}
			?>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Anterior</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Próxima</span>
			  </button>
			</div>
	</section>


    <!--=================================
		CURSOS ATIVOS
    ==================================-->
    <div class="tf__popular_services_3">
        <div class="container">
            <div class="row popular_service_slider wow fadeInUp" data-wow-duration="1.5s">
			
			<?php 

					$sql = "SELECT ID, NOME_CURSO,IF(SUBNIVEL_ENSINO = 2, 'Graduação','') AS SUBNIVEL_ENSINO,NOME_CAMPUS, NOME_CURSO_LINK, URL_S3_COMPRESSED
					FROM curso WHERE ATIVO='S' AND SUBNIVEL_ENSINO=2 AND INSCRICOES_ABERTAS = 'S'
					ORDER BY NOME_CURSO";
					$query = $mysqli->query($sql);
					$cont = 0;
					while ($dados = $query->fetch_array()) 
					{
					  $ID = $dados['ID'];
					  $NOME_CURSO = $dados['NOME_CURSO'];
					  $SUBNIVEL_ENSINO = $dados['SUBNIVEL_ENSINO'];
					  $NOME_CAMPUS = $dados['NOME_CAMPUS'];			 	
					  $NOME_CURSO_LINK = $dados['NOME_CURSO_LINK'];
					  $URL_S3_COMPRESSED = $dados['URL_S3_COMPRESSED'];
					  
					  echo("<div class='col-xl-3'>
							<a href='ensino/curso/$NOME_CURSO_LINK' style='display: block;'>
								<div class='tf__popular_service_single red' style='background: url($URL_S3_COMPRESSED); background-position: center;background-repeat: no-repeat;background-size: cover;'>
									<span><i class='fal fa-book'></i></span>
									<h3>$NOME_CURSO</h3>
									<!--<p>We can provide you with a handyan in London.</p>-->
									<i class='fas fa-long-arrow-right'></i>
								</div>
							</a>
							</div>");
					  
					  
					}
			?>
            </div>
        </div>
    </div>
    <!--=================================
        CURSOS ATIVOS
    ==================================-->
	
    <!--=================================
        BOLSAS
    ==================================-->
    <div class="about_3 tf__about_2_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="tf__about_2_img">
                        <div class="tf__about_small">
                            <img src="../images/about_2_img_2.jpg" alt="about us" class="img-fluid w-100">
                        </div>
                        <div class="tf__about_large">
                            <img src="../images/about_2_img_1.jpg" alt="about us" class="img-fluid w-100">
                        </div>
                        <p><span>+51</span> anos de experiência</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-duration="1.5s">
                    <div class="tf__about_2_text">
                        <div class="tf__heading_area tf__heading_area_left mb_25">
                            <h5>Nossas bolsas</h5>
                            <h2>Confira nossas bolsas de estudo</h2>
                        </div>
                        <p>Business tailored it design, management & support services
                            business agency elit, sed do eiusmod tempor. </p>
                        <ul>
                            <li>
                                <div class="icon">
                                    <img src="../images/about_2_icon_1.jpg" alt="about" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>Bolsa Atleta</h4>
                                    <p>Incentivar e favorecer o desempenho esportivo dos estudantes regularmente matriculados na UNC.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="../images/about_2_icon_2.jpg" alt="about" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>Bolsa FAP</h4>
                                    <p>Fundo de Apoio a Pesquisa: estimular o desenvolvimento do pensamento científico e da iniciação à pesquisa.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="../images/about_2_icon_3.jpg" alt="about" class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>Bolsa Mérito</h4>
                                    <p>A bolsa de pesquisa por mérito consiste no subsídio de até 30% (trinta por cento) do valor da mensalidade por 01 (um) semestre letivo.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
        BOLSAS
    ==================================-->
	
	


    <!--=================================
        CURSOS
    ==================================-->
    <section class="tf__study_contact" style="background: url(../images/study_contact_bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__study_contact_text">
                        <div class="img">
                            <img src="../images/study_contact_img.jpg" alt="contact" class="img-fluid w-100">
                        </div>
                        <div class="text">
                            <h4>Estudo com flexibilidade</h4>
                            <p>Podemos fornecer a você um aprendizado confiável e com flexibilidade na forma de aulas.
                                Clique no botão ao lado para ter acesso a todos os nossos cursos que vão desde a graduação até o doutorado.</p>
                        </div>
                        <a href="../ensino/cursos_graduacao">Ver os cursos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        CURSOS
    ==================================-->
	
	 <!--=================================
        NOTICIAS
    ==================================-->
    <section class="tf__blog_2 mt_95">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-6 col-xxl-5 col-md-8 col-lg-6 m-auto">
                    <div class="tf__heading_area mb_15">
                        <h5>ÚLTIMAS NOTÍCIAS</h5>
                        <h2>Notícias</h2>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php 

					$sql = "SELECT ID,TITULO_NOTICIA,IMAGEM_PRINCIPAL,RESUMO_NOTICIA,
						TEXTO_NOTICIA, URL_S3, URL_S3_COMPRESSED FROM noticia WHERE ATIVO = 'P'
						ORDER BY DATA_PUBLICACAO DESC LIMIT 1";
					$query = $mysqli->query($sql);
					$cont = 0;
					while ($dados = $query->fetch_array()) 
					{
					  $ID_NOTICIA = $dados['ID'];
					  $TITULO_NOTICIA = $dados['TITULO_NOTICIA'];
					  $IMAGEM_PRINCIPAL = $dados['IMAGEM_PRINCIPAL'];
					  $RESUMO_NOTICIA = $dados['RESUMO_NOTICIA'];
					  $TEXTO_NOTICIA = $dados['TEXTO_NOTICIA'];
					  $URL_S3 = $dados['URL_S3'];
					  $URL_S3_COMPRESSED = $dados['URL_S3_COMPRESSED'];
					  
					  
					  $id_noticia = base64_encode($ID_NOTICIA);
					  
					  echo("<div class='col-xl-5 col-lg-5 wow fadeInLeft' data-wow-duration='1.5s'>
                    <div class='tf__single_blog'>
                        <a class='tf__single_blog_img' href='noticias/$id_noticia'>
                            <img src='$URL_S3_COMPRESSED' alt='blog' class='img-fluid w-100'>
                        </a>
                        <div class='tf__single_blog_text'>
                            <a class='title' href='noticias/$id_noticia'>$TITULO_NOTICIA</a>
                            <p>$RESUMO_NOTICIA</p>
                            <a class='read_btn' href='noticias/$id_noticia'>Ler mais<i class='fas fa-chevron-circle-right'></i></a>
                        </div>
                    </div>
                </div>");
					  
					  
					}
			?>
			
                <div class="col-xl-7 col-lg-7  wow fadeInRight" data-wow-duration="1.5s">
                    <div class="row">
					
					<?php 
						
							$sql = "SELECT ID,TITULO_NOTICIA,IMAGEM_PRINCIPAL,RESUMO_NOTICIA,
								TEXTO_NOTICIA, URL_S3, URL_S3_COMPRESSED FROM noticia WHERE ATIVO = 'P'
								AND ID <> $ID_NOTICIA
								ORDER BY DATA_PUBLICACAO DESC LIMIT 2";
							$query = $mysqli->query($sql);
							$cont = 0;
														
							while ($dados = $query->fetch_array()) 
							{
							  $ID_NOTICIA_PARTE2 = $dados['ID'];
							  $TITULO_NOTICIA = $dados['TITULO_NOTICIA'];
							  $IMAGEM_PRINCIPAL = $dados['IMAGEM_PRINCIPAL'];
							  $RESUMO_NOTICIA = $dados['RESUMO_NOTICIA'];
							  $TEXTO_NOTICIA = $dados['TEXTO_NOTICIA'];
							  $URL_S3 = $dados['URL_S3'];
							  $URL_S3_COMPRESSED = $dados['URL_S3_COMPRESSED'];
							  
							  
							  $id_noticia2 = base64_encode($ID_NOTICIA_PARTE2);
							  
							  echo("<div class='col-12 col-md-6 col-lg-12'>
                            <div class='tf__single_blog_2'>
                                <a class='tf__single_blog_2_img' href='noticias/$id_noticia'>
                                    <img src='$URL_S3_COMPRESSED' alt='blog' class='img-fluid w-100'>
                                </a>
                                <div class='tf__single_blog_text_2'>
                                    <a class='title' href='noticias/$id_noticia2'>$TITULO_NOTICIA</a>
                                    <p>$RESUMO_NOTICIA </p>
                                    <a class='read_btn' href='noticias/$id_noticia'>ler mais <i class='fas fa-chevron-circle-right'></i></a>
                                </div>
                            </div>
                        </div>");
							  
							  
							}
					?>
                        
                    </div>
                </div>
				<div class="col-12 mt_50 xs_mt_50 tf__heading_area wow fadeInCenter" data-wow-duration="1.5s">
                    <a href="maisnoticias" class="common_btn">Mais notícias</a>
                </div>
				
				
            </div>
        </div>
    </section>
    <!--=================================
        NOTICIAS
    ==================================-->
	
	
    <!--=================================
        SOBRE UNC
    ==================================-->
    <section class="tf__counter_3">
        <div class="container">
            <div class="tf__counter_3_area" style="background: url(../images/counter_3_bg.jpg);">
                <div class="row">
                    <div class="col-xxl-6 col-lg-8 wow fadeInUp" data-wow-duration="1.5s">
                        <div class="tf__counter_3_text">
                            <div class="tf__heading_area tf__heading_area_left mb_25">
                                <h5>PONTOS FORTES</h5>
                                <h2>O que nos diferencia?</h2>
                            </div>
                            <p>Business tailored it design, management & support services
                                business agency elit, sed do eiusmod tempor. </p>
                        </div>
                    </div>
                    <div class="col-xl-9 wow fadeInUp" data-wow-duration="1.5s">
                        <div class="tf__counter_area">
                            <div class="tf__counter2_overlay">
                                <ul class=" d-flex flex-wrap">
                                    <li class="tf__single_counter">
                                        <h2 class="counter">53</h2>
                                        <h4>Anos de sucesso</h4>
                                    </li>
                                    <li class="tf__single_counter">
                                        <h2 class="counter">2000</h2>
                                        <h4>Alunos formados</h4>
                                    </li>
                                    <li class="tf__single_counter">
                                        <h2 class="counter">100</h2>
                                        <h4>Cursos ofertados</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
       SOBRE UNC
    ==================================-->
	
	<!--=================================
        EVENTOS
    ==================================-->
    <section class="tf__team_3 pt_250 pb_100" style="background: url(../images/team_3_bg.jpg);">
        <div class="container mt_85">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto">
                    <div class="tf__heading_area mb_15">
                        <h5>PRÓXIMOS EVENTOS</h5>
                        <h2>Eventos</h2>
                    </div>
                </div>
            </div>
            <div class="row">
			<?php 

					$sql = "SELECT ID, SUBSTRING_INDEX(NOME_EVENTO,' ',10) AS EVENTO, 
							LOCAL, 
							LINK, 
							DATE_FORMAT(DATA_INICIO, '%d/%m') AS DATA_INICIO,
							DATE_FORMAT(DATA_FIM, '%d/%m') AS DATA_FIM,
							EXTRACT(DAY FROM DATA_INICIO) AS DIA_DATA, 
							CONCAT(UCASE(LEFT(MONTHNAME(DATA_INICIO), 1)), SUBSTRING(MONTHNAME(DATA_INICIO), 2))AS MES_DATA,
							DATE_FORMAT(DATA_INSCRICOES_INICIO, '%d/%m') AS DATA_INICIO_INSCRICOES,
							DATE_FORMAT(DATA_INSCRICOES_FIM, '%d/%m') AS DATA_FIM_INSCRICOES
							FROM eventos 
							WHERE DATA_INSCRICOES_FIM >= CURDATE() 
							ORDER BY DATA_INSCRICOES_FIM
							LIMIT 3";
					$query = $mysqli->query($sql);
					$cont = 0;
					while ($dados = $query->fetch_array()) 
					{
					  $ID = $dados['ID'];
					  $EVENTO = $dados['EVENTO'];
					  $LOCAL = $dados['LOCAL'];
					  $LINK = $dados['LINK'];
					  $DATA_INICIO = $dados['DATA_INICIO'];
					  $DATA_FIM = $dados['DATA_FIM'];
					  $DIA_DATA = $dados['DIA_DATA'];
					  $MES_DATA = $dados['MES_DATA'];
					  $DATA_INICIO_INSCRICOES = $dados['DATA_INICIO_INSCRICOES'];
					  $DATA_FIM_INSCRICOES = $dados['DATA_FIM_INSCRICOES'];
					  					  
					  echo("
					  
							  <div class='col-xl-4 col-md-6 wow fadeInUp' data-wow-duration='1.5s'>
							<div class='tf__single_event'>
								<div class='tf__single_event_img'>
									<img src='../images/event_img_1.jpg' alt='event' class='img-fluid w-100'>
								</div>
								<div class='tf__single_event_text'>
									<ul>
										<li><i class='far fa-map-marker-alt'></i> $LOCAL</li>
										<li><i class='far fa-clock'></i>$DATA_INICIO até $DATA_FIM</li>
									</ul>
									<a class='title' href='$LINK'>$EVENTO</a>
									<p>Data Inscrições: $DATA_INICIO_INSCRICOES até $DATA_FIM_INSCRICOES</p>
									<div class='tf__single_event_footer'>
										<div class='col-12 wow fadeInLeft' data-wow-duration='1.5s'>
											<a href='$LINK' class='read_btn'>Mais eventos</a>
										</div>
									</div>
								</div>
							</div>
						</div>
                  
					  ");
  
  
			}
			?>
            <div class="col-12 mt_50 xs_mt_50 tf__heading_area wow fadeInCenter" data-wow-duration="1.5s">
                    <a href="maiseventos" class="common_btn">Mais eventos</a>
                </div>
        </div>
    </section>
    <!--=================================
        EVENTOS
    ==================================-->
	
	<!--=================================
       CONTATO
    ==================================-->
    <section class="tf__contact_3 mt_100">
        <div class="container">
            <div class="tf__contact_3_area" style="background: url(../images/contact_3_bg.jpg);">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="tf__contact_3_text">
                            <h2>Inscreva-se <span>aqui</span>.</h2>
                            <p>E receba em primeira mão nossas notícias e anúncios.</p>
                            <a href="#">Inscrever-se</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-duration="1.5s">
                        <form class="tf__contact_3_form">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" placeholder="Seu nome*">
                                </div>
                                <div class="col-12">
                                    <input type="text" placeholder="Seu email*">
                                </div>
                                <div class="col-12">
                                    <input type="text" placeholder="Celular*">
                                </div>
                                <div class="col-12">
                                    <button type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        CONTATO
    ==================================-->
	
	<!--=================================
        PORTAIS
    ==================================-->
    <div class="tf__activities_3 tf__activities_slider_area mt_100 pt_95 pb_100">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-6 col-xxl-5 col-md-8 col-lg-6 m-auto">
                    <div class="tf__heading_area mb_15">
                        <h5>Informativos</h5>
                        <h2>Portais/Informativos</h2>
                    </div>
                </div>
            </div>
            <div class="row popular_service_slider wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-3">
				<a href="https://emestre.unc.br/login/login.php" target="_blank">
                    <div class="tf__activities_item light_blue">
                        <span> <i class="fal fa-book"></i> </span>
                        <h3>E-mestre (Aluno/Professor)</h3>
                    </div>
				</a>
                </div>
                <div class="col-xl-3">
				<a href="https://emestre.unc.br/login/login.php" target="_blank">
                    <div class="tf__activities_item green">
                        <span> <i class="fas fa-graduation-cap"></i> </span>
                        <h3>Diplomado (Egresso)</h3>
                    </div>
				</a>
                </div>
                <div class="col-xl-3">
				<a href="https://emestre.unc.br/login/login.php" target="_blank">
                    <div class="tf__activities_item orange">
                        <span> <i class="far fa-university"></i> </span>
                        <h3>Técnico Administrativo</h3>
                    </div>
				</a>
                </div>
                <div class="col-xl-3">
				<a href="https://emestre.unc.br/login/login.php" target="_blank">
                    <div class="tf__activities_item blue">
                        <span> <i class="fas fa-plus"></i> </span>
                        <h3>Cadastro de Fornecedor</h3>
                    </div>
				</a>
                </div>
				 <div class="col-xl-3">
				 <a href="https://emestre.unc.br/login/login.php" target="_blank">
                    <div class="tf__activities_item orange">
                        <span> <i class="fas fa-address-book"></i> </span>
                        <h3>Trabalhe conosco</h3>
                    </div>
				</a>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
        PORTAIS
    ==================================-->
	
	<!--=================================
        EDITAIS
    ==================================-->
    <section class="tf__courses_2 tf__courses_3 mt_100">
        <div class="container">
            <div class="row">
                 <div class="col-xl-8 col-lg-8">
                    <div class="tf__sidebar" id="sticky_sidebar">
                        <div class="tf__sidebar_blog sidebar_item">
                            <h3 style="display: contents;">Editais</h3>
<!--<a href="maiseditais" class="common_btn" style="margin-left: 62%;padding: 10px 30px !important;">Mais editais</a>-->
                            <ul>
							
							<?php 
								
									$sql = "SELECT 
												IFNULL(B.ID,A.ID) AS ID,
												DATE_FORMAT(IFNULL(B.DATA_PUBLICACAO,A.DATA_PUBLICACAO),'%d de %b de %Y') AS DIA_DATA,
												SUBSTRING(( IFNULL(B.TITULO_DOCUMENTO,A.TITULO_DOCUMENTO)),1,100) AS TITULO,
												IFNULL(B.DOCUMENTO,A.DOCUMENTO) AS DOCUMENTO,
												IFNULL(B.URL_S3,A.URL_S3) AS URL_S3
												
											FROM 
												documentos_legais A
											LEFT JOIN documentos_legais_vinculos B ON (A.ID = B.ID_DOCUMENTOS_LEGAIS)
											WHERE A.ID_CATEGORIA = 1 AND A.ID_ASSUNTO = 2
											ORDER BY IFNULL(B.DATA_PUBLICACAO,A.DATA_PUBLICACAO) DESC LIMIT 2";
											
									$query = $mysqli->query($sql);
									$N_IMAGEM = 1;
									while ($dados = $query->fetch_array()) 
									{
									  $ID = $dados['ID'];
									  $DIA_DATA = $dados['DIA_DATA'];
									  $TITULO = $dados['TITULO'];
									  $DOCUMENTO = $dados['DOCUMENTO'];
									  $URL_S3 = $dados['URL_S3'];
									  
									  echo("
											<li>
											<div class='icon mr_20'>
												<img src='../images/about_2_icon_$N_IMAGEM.jpg' alt='about' class='img-fluid w-100'>
											</div>
												<div class='text'>
													<p><i class='far fa-calendar-alt'></i> $DIA_DATA</p>
													<a href='$URL_S3'>$TITULO...</a>
												</div>
											</li>
										");
										
										$N_IMAGEM++;
									}
			?>
			

                            </ul>
							<div class="col-12 mt_20 mb_20 xs_mt_50 tf__heading_area wow fadeInCenter" data-wow-duration="1.5s">
								<a href="maiseditais" class="common_btn">Mais editais</a>
							</div>
                        </div>
                    </div>
                </div>
				<div class="col-xl-4 col-lg-4">
                    <div class="tf__sidebar" id="sticky_sidebar">
                        <div class="tf__sidebar_blog sidebar_item">
                            <h3>Canais</h3>
                            <ul>
								<li>
									<div class='icon mr_20'>
										<img src='../images/about_2_icon_1.jpg' alt='about' class='img-fluid w-100'>
									</div>
										<div class='text'>
											<a href='https://www.uncfm.com.br/' target="_blank">Rádios UNC</a>
										</div>
								</li>
								<li>
									<div class='icon mr_20'>
										<img src='../images/about_2_icon_2.jpg' alt='about' class='img-fluid w-100'>
									</div>
										<div class='text'>
											<a href="https://open.spotify.com/show/2sv30td9QGCy810pblkTDo?si=6ca285f3b8bd406f" target="_blank">UNCast</a>
										</div>
								</li>
							</ul>
                        </div>
                    </div>
                </div>
				<div class="col-xl-12 col-lg-12">
                    <div class="tf__sidebar" id="sticky_sidebar">
                        <div class="sidebar_item pb_20">
                            <center>
							<ul>
								<li>
								<a href="https://acafe.org.br/site/" target="_blank">
									<img src='https://www.unc.br/assets/images/parceiros/linkACAFE.png' class="pr_10">
								</a>
								<a href="https://comunitarias.org.br/" target="_blank">
									<img src='https://www.unc.br/assets/images/parceiros/linkON.png' class="pr_10">
								</a>
								<a href="https://www.gov.br/capes/pt-br" target="_blank">
									<img src='https://www.unc.br/assets/images/parceiros/linkCAPES.png' class="pr_10">
								</a>
								<a href="https://www.gov.br/cnpq/pt-br" target="_blank">
									<img src='https://www.unc.br/assets/images/parceiros/linkCNPq.png' class="pr_10">
								</a>
								<a href="http://www.fapesc.rct-sc.br/" target="_blank">
									<img src='https://www.unc.br/assets/images/parceiros/linkFAPESC.png' class="pr_10">
								</a>
								<a href="http://www.uniedu.sed.sc.gov.br/" target="_blank">
									<img src='https://www.unc.br/assets/images/parceiros/linkUNIEDU.png' class="pr_10">
								</a>
							</li>
							</ul>
							</center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        EDITAIS
    ==================================-->

	<?php
		include '../include/footer.php';
		include '../include/script.php';
	?>

</body>
</html>