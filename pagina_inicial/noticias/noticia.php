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
        HEADER
    ==================================-->
    <section class="tf__breadcrumb" style="background: url(../../images/breadcrumb_bg_1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>Notícias</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="maisnoticias.php">Notícias</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        HEADER
    ==================================-->
	
	<?php
	
	if(isset($_GET['id']))
					$id = $_GET['id'];
				
				$ID = base64_decode($id);
				
				$sql = "SELECT ID,TITULO_NOTICIA,DATA_PUBLICACAO,DATE_FORMAT(DATA_PUBLICACAO,'%d de %M de %Y') AS DATA_PUBLICACAO_EXT,
						IMAGEM_PRINCIPAL,RESUMO_NOTICIA,TEXTO_NOTICIA, URL_S3, URL_S3_COMPRESSED
						FROM noticia WHERE ATIVO = 'P' AND ID = $ID ORDER BY DATA_PUBLICACAO DESC";
				
				$query = $mysqli->query($sql);
				$cont = 0;
				
				if ($dados = $query->fetch_array()) 
				{
				  $ID = $dados['ID'];
				  $TITULO_NOTICIA = $dados['TITULO_NOTICIA'];
				  $DATA_PUBLICACAO = $dados['DATA_PUBLICACAO'];
				  $DATA_PUBLICACAO_EXT = $dados['DATA_PUBLICACAO_EXT'];
				  $IMAGEM_PRINCIPAL = $dados['IMAGEM_PRINCIPAL'];
				  $RESUMO_NOTICIA = $dados['RESUMO_NOTICIA'];
				  $TEXTO_NOTICIA = $dados['TEXTO_NOTICIA'];
				  $URL_S3 = $dados['URL_S3'];
				  $URL_S3_COMPRESSED = $dados['URL_S3_COMPRESSED'];
				  
				}
				
				
	?>

    <!--=================================
        NOTICIAS
    ==================================-->
   <section class="tf__blog_details_page mt_195 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="tf__blog_details_area">
                        <div class="tf__blog_details_img wow fadeInUp" data-wow-duration="1.5s">
                            <img src="<?php echo($URL_S3_COMPRESSED); ?>" alt="blog details" class="img-fluid w-100">
                        </div>
                        <div class="tf__blog_details_text wow fadeInUp" data-wow-duration="1.5s">
                            <ul class="date d-flex flex-wrap">
                                <li><i class="fal fa-calendar-alt"></i> <?php echo($DATA_PUBLICACAO_EXT); ?></li>
                            </ul>
                            <h3><?php echo($TITULO_NOTICIA); ?></h3>
                            <?php echo($TEXTO_NOTICIA); ?>
                        </div>
						<br>
						<center>
							<div id="carouselExample" class="carousel slide" style="width: 80%;">
							  <div class="carousel-inner">
								<?php 

									$sql_imagens = "SELECT ID,TITULO_NOTICIA,DATA_PUBLICACAO,DATE_FORMAT(DATA_PUBLICACAO,'%d de %M de %Y') AS DATA_PUBLICACAO_EXT,
									IMAGEM_PRINCIPAL,RESUMO_NOTICIA,TEXTO_NOTICIA, URL_S3, URL_S3_COMPRESSED
									FROM noticia WHERE ATIVO = 'P' ORDER BY DATA_PUBLICACAO DESC LIMIT 3";
					
									$query_imagens = $mysqli->query($sql_imagens);
									$cont = 0;
									
									while ($dados = $query_imagens->fetch_array()) 
									{
									  $ID = $dados['ID'];
									  $TITULO_NOTICIA = $dados['TITULO_NOTICIA'];
									  $DATA_PUBLICACAO = $dados['DATA_PUBLICACAO'];
									  $DATA_PUBLICACAO_EXT = $dados['DATA_PUBLICACAO_EXT'];
									  $IMAGEM_PRINCIPAL = $dados['IMAGEM_PRINCIPAL'];
									  $RESUMO_NOTICIA = $dados['RESUMO_NOTICIA'];
									  $TEXTO_NOTICIA = $dados['TEXTO_NOTICIA'];
									  $URL_S3 = $dados['URL_S3'];
									  $URL_S3_COMPRESSED = $dados['URL_S3_COMPRESSED'];
									  
									  $cont++;
								  
									  $active = '';
									  
									  if($cont == 1)
									  {
										  $active = 'active';
									  }
					  
									  
									  echo("<div class='carousel-item $active'>
												<img src='$URL_S3_COMPRESSED' class='d-block w-100' alt='...'>
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
					</center>
                        <div class="tf__comment_reply mt_65 wow fadeInUp" data-wow-duration="1.5s">
                            <h3>Quer receber nossas notícias por email? Cadastre-se na nossa lista de transmissão:</h3>
                            <form>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input type="text" placeholder="Nome">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="tf__sidebar" id="sticky_sidebar">
                        <div class="tf__sidebar_blog sidebar_item">
                            <h3>Últimas notícias</h3>
                            <ul>
							<?php
								$sql_ultimas_noticias = "SELECT ID,TITULO_NOTICIA,DATA_PUBLICACAO,DATE_FORMAT(DATA_PUBLICACAO,'%d de %M de %Y') AS DATA_PUBLICACAO_EXT,
											IMAGEM_PRINCIPAL,RESUMO_NOTICIA,TEXTO_NOTICIA, URL_S3, URL_S3_COMPRESSED
											FROM noticia WHERE ATIVO = 'P' ORDER BY DATA_PUBLICACAO DESC LIMIT 3";
					
								$query_mais_noticias = $mysqli->query($sql_ultimas_noticias);
								$cont = 0;
								
								while ($dados = $query_mais_noticias->fetch_array()) 
								{
								  $ID = $dados['ID'];
								  $TITULO_NOTICIA = $dados['TITULO_NOTICIA'];
								  $DATA_PUBLICACAO = $dados['DATA_PUBLICACAO'];
								  $DATA_PUBLICACAO_EXT = $dados['DATA_PUBLICACAO_EXT'];
								  $IMAGEM_PRINCIPAL = $dados['IMAGEM_PRINCIPAL'];
								  $RESUMO_NOTICIA = $dados['RESUMO_NOTICIA'];
								  $TEXTO_NOTICIA = $dados['TEXTO_NOTICIA'];
								  $URL_S3 = $dados['URL_S3'];
								  $URL_S3_COMPRESSED = $dados['URL_S3_COMPRESSED'];
								  
								  echo("<li>
											<div class='img'>
												<img src='$URL_S3_COMPRESSED' alt='blog' class='img-fluid w-100'>
											</div>
											<div class='text'>
												<p><i class='far fa-calendar-alt'></i>$DATA_PUBLICACAO_EXT</p>
												<a href='#'>$TITULO_NOTICIA</a>
											</div>
										</li>");
								}
							?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
      NOTICIAS
    ==================================-->

	<?php
		include 'include/footer.php';
		include 'include/script.php';
	?>

</body>
</html>