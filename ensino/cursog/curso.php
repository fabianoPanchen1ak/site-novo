<!DOCTYPE html>
<html lang="en">

	<?php
		include 'include/head.php';
		include '../../css/template_principal.php';
		$mysqli->set_charset("utf8");
	?>

<body class="home_3">

	<?php
		include 'include/toolbar.php';
		include 'include/menu.php';
	?>
    <!--=================================
        BREADCRUMB START
    ==================================-->
	
	<?php	
				if(isset($_GET['id']))
					$id = $_GET['id'];
									
						$sql = "SELECT ID, NOME_CURSO, SUBNIVEL_ENSINO, 
						URL_S3_COMPRESSED, CONTEUDO, COORDENADORES, LINK_INSCRICOES, 
						INSCRICOES_ABERTAS, CAMPUS, NOME_CAMPUS, TEXTO_INSCRICOES, AREA,
						CATEGORIA, DURACAO, REGIME
						FROM curso WHERE ATIVO='S' AND NOME_CURSO_LINK = '$id'
						and SUBNIVEL_ENSINO=2 ORDER BY NOME_CURSO";
						
				
				
				$query = $mysqli->query($sql);

				while ($dados = $query->fetch_array()) 
				{
				  $ID = $dados['ID'];
				  $NOME_CURSO = $dados['NOME_CURSO'];
				  $URL_S3_COMPRESSED = $dados['URL_S3_COMPRESSED'];
				  $SUBNIVEL_ENSINO = $dados['SUBNIVEL_ENSINO'];
				  $CONTEUDO = $dados['CONTEUDO'];
				  $COORDENADORES = $dados['COORDENADORES'];
				  $LINK_INSCRICOES = $dados['LINK_INSCRICOES'];
				  $INSCRICOES_ABERTAS = $dados['INSCRICOES_ABERTAS'];
				  $CAMPUS = $dados['CAMPUS'];
				  $NOME_CAMPUS = $dados['NOME_CAMPUS'];
				  $TEXTO_INSCRICOES = $dados['TEXTO_INSCRICOES'];
				  $AREA = $dados['AREA'];
				  $CATEGORIA = $dados['CATEGORIA'];
				  $DURACAO = $dados['DURACAO'];
				  $REGIME = $dados['REGIME'];
				  
				  $id_curso = $ID;
				  
				  if($CATEGORIA == 'B')
				  {
					  $CATEGORIA = 'Bacharelado';
				  }
				  elseif($CATEGORIA == 'P')
				  {
					  $CATEGORIA = 'Lato Sensu';
				  }
				  elseif($CATEGORIA == 'L')
				  {
					  $CATEGORIA = 'Licenciatura';
				  }
				  elseif($CATEGORIA == 'S')
				  {
					  $CATEGORIA = 'Stricto Sensu';
				  }
				  elseif($CATEGORIA == 'D')
				  {
					  $CATEGORIA = 'Doutorado';
				  }
				  else
				  {
					  $CATEGORIA = 'Qualificação';
				  }
				  
				}
?>
    <section class="tf__breadcrumb" style="background: url(../../images/breadcrumb_bg_1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2><?php echo($NOME_CURSO); ?></h2>
                        <ul>
                            <li><a href="../../index.php">Home</a></li>
							<li><a href="../ensino.php">Ensino</a></li>
							<li><a href="../graduacao.php">Graduação</a></li>
							<li><a href="#"><?php echo($NOME_CURSO); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BREADCRUMB END
    ==================================-->


    <!--=================================
        COURSES DETAILS START
    ==================================-->
    <section class="tf__courses_details mt_195 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <div class="tf__courses_details_area">
                        <div class="tf__courses_details_img">
                            <img src="<?php echo($URL_S3_COMPRESSED); ?>" alt="courses" class="img-fluid w-100">
                        </div>
                        <div class="tf__courses_details_header d-flex flex-wrap align-items-center">
						<div class="img">
                                <img src="../../images/client_img_1.png" alt="instuuctor" class="img-fluid w-100">
                            </div>
                            <ul class="text d-flex flex-wrap align-items-center">
                                <li>
                                    <h4>Área</h4>
                                    <p><?php echo($AREA); ?></p>
                                </li>
								<li>
                                    <h4>Categoria</h4>
                                    <p><?php echo($CATEGORIA); ?></p>
                                </li>
                                <li>
                                    <h4>Duração</h4>
                                    <p><?php echo($DURACAO); ?></p>
                                </li>
                                <li>
                                    <h4>Regime</h4>
                                    <p><?php echo($REGIME); ?></p>
                                </li>
                                <li>
                                    <a class="common_btn" href="#">Inscrições</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tf__courses_det_text">
                            <h2><?php echo($NOME_CURSO); ?></h2>

                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <?php	
								
								if(isset($_GET['id']))
								$id = $_GET['id'];
												
								$sql = "SELECT PM.ID, GM.DESCRICAO AS SIGLA,
										  PM.DESCRICAO AS TITULO_MENU,
										  LOWER(SUBSTRING_INDEX(SUBSTRING_INDEX(PM.DESCRICAO, ' ', 1),' ',- 1)) AS TITULO_MENU_PAGINA,
										  P.TITULO AS TITULO_PAGINA,
										  P.TEXTO AS TEXTO,
										  P.LINK AS LINK
										  FROM pagina P
										INNER JOIN pagina_menu PM ON (PM.ID_PAGINA = P.ID)
										INNER JOIN grupo_menu GM ON (GM.ID = P.ID_GRUPO_MENU)
										WHERE LINK = '$id'
										ORDER BY P.ID";
								
								$query = $mysqli->query($sql);
								$cont = 0;
								
								while ($dados = $query->fetch_array()) 
								{
								  $SIGLA = $dados['SIGLA'];
								  $TITULO_MENU = $dados['TITULO_MENU'];
								  $TITULO_PAGINA = $dados['TITULO_PAGINA'];
								  $TITULO_MENU_PAGINA = $dados['TITULO_MENU_PAGINA'];
								  $TEXTO = $dados['TEXTO'];
								  $cont++;
								  
								  $active = '';
								  
								  if($cont == 1)
								  {
									  $active = 'active';
								  }
								  
								  echo("	<li class='nav-item' role='presentation'>
											<button class='nav-link $active' id='pills-$TITULO_MENU_PAGINA-tab' data-bs-toggle='pill'
												data-bs-target='#pills-$TITULO_MENU_PAGINA' type='button' role='tab' 
												aria-controls='pills-$TITULO_MENU_PAGINA'
												aria-selected='true'>$TITULO_MENU</button>
										</li>
											   
									");
								}
						?>
								
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <?php
								
							if(isset($_GET['id']))
							$id = $_GET['id'];
							
							$sql = "SELECT PM.ID, GM.DESCRICAO AS SIGLA,
										  PM.DESCRICAO AS TITULO_MENU,
										  LOWER(SUBSTRING_INDEX(SUBSTRING_INDEX(PM.DESCRICAO, ' ', 1),' ',- 1)) AS TITULO_MENU_PAGINA,
										  P.TITULO AS TITULO_PAGINA,
										  P.TEXTO AS TEXTO,
										  P.LINK AS LINK
										  FROM pagina P
										INNER JOIN pagina_menu PM ON (PM.ID_PAGINA = P.ID)
										INNER JOIN grupo_menu GM ON (GM.ID = P.ID_GRUPO_MENU)
										WHERE LINK = '$id'
										ORDER BY P.ID";
						
						$query = $mysqli->query($sql);
						$cont_conteudo = 0;
						
						while ($dados = $query->fetch_array()) 
						{
						  $SIGLA = $dados['SIGLA'];
						  $TITULO_MENU = $dados['TITULO_MENU'];
						  $TITULO_PAGINA = $dados['TITULO_PAGINA'];
						  $TITULO_MENU_PAGINA = $dados['TITULO_MENU_PAGINA'];
						  $TEXTO = $dados['TEXTO'];
						  $cont_conteudo++;	
							
							
							$active_conteudo = '';
						  
							  if($cont_conteudo == 1)
							  {
								  $active_conteudo = 'active';
							  }
							
								echo("<div class='tab-pane fade show $active_conteudo' id='pills-$TITULO_MENU_PAGINA' role='tabpanel'
                                    aria-labelledby='pills-$TITULO_MENU_PAGINA-tab' tabindex='0'>
                                    <div class='tf__course_overview'>
											<h3>$TITULO_PAGINA</h3>
												<p>$TEXTO</p>
										</div>
									</div>");
						}
							
							?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-xl-4 col-lg-4">
                    <div class="tf__sidebar" id="sticky_sidebar">
                        <div class="tf__sidebar_category sidebar_item">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#"> Graduação <span>(08)</span></a></li>
                                <li><a href="#"> Pós-Graduação <span>(14)</span></a></li>
                                <li><a href="#"> Mestrado <span>(20)</span></a></li>
                                <li><a href="#"> Doutorado<span>(29)</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!--=================================
        COURSES DETAILS END
    ==================================-->
	
	<!--=================================
        IMAGENS CURSOS
    ==================================-->
   <section class="tf__blog_details_page mt_50 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <h2>Estrutura</h2>
					<br>
					<div class="tf__blog_details_area">
							<div id="carouselExample" class="carousel slide" style="width: 100%;">
							  <div class="carousel-inner">
								<?php 

									$sql_imagens = "select ARQUIVO_FOTO, URL_COMPRESSED from curso_imagens where ID_CURSO = $id_curso";
					
									$query_imagens = $mysqli->query($sql_imagens);
									$cont = 0;
									
									while ($dados = $query_imagens->fetch_array()) 
									{
									  $ARQUIVO_FOTO = $dados['ARQUIVO_FOTO'];
									  $URL_COMPRESSED_IMAGENS = $dados['URL_COMPRESSED'];
									  
									  $cont++;
								  
									  $active = '';
									  
									  if($cont == 1)
									  {
										  $active = 'active';
									  }
					  
									  
									  echo("<div class='carousel-item $active'>
												<img src='$URL_COMPRESSED_IMAGENS' class='d-block w-100' alt='...'>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
      IMAGENS CURSOS
    ==================================-->

	
	<?php
		include 'include/footer.php';
		include 'include/script.php';
	?>


</body>
</html>