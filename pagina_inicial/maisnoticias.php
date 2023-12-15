<!DOCTYPE html>
<html lang="en">

	<?php
		include '../include/head.php';
		include '../css/template_principal.php';
		$mysqli->set_charset("utf8");
	?>

<body class="home_3">

	<?php
		include '../include/toolbar.php';
		include '../include/menu.php';
	?>
    <!--=================================
        HEADER
    ==================================-->
    <section class="tf__breadcrumb" style="background: url(../images/breadcrumb_bg_1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>Notícias</h2>
                        <ul>
                            <li><a href="index">Home</a></li>
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

    <!--=================================
        NOTICIAS
    ==================================-->
    <section class="tf__blog_page mt_190 xs_mt_95">
        <div class="container">
            <div class="row">
			<?php 
						
							$sql = "SELECT ID,TITULO_NOTICIA,IMAGEM_PRINCIPAL,RESUMO_NOTICIA,
						TEXTO_NOTICIA, URL_S3, URL_S3_COMPRESSED FROM noticia WHERE ATIVO = 'P'
						ORDER BY DATA_PUBLICACAO DESC LIMIT 24";
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
							  
							  echo("<div class='col-xl-4 col-md-6 wow fadeInUp' data-wow-duration='1.5s'>
									<div class='tf__single_blog'>
										<a class='tf__single_blog_img' href='blog_details.html'>
											<img src='$URL_S3_COMPRESSED' alt='blog' class='img-fluid w-100'>
										</a>
										<div class='tf__single_blog_text'>
											<a class='title' href='noticias/$id_noticia'>$TITULO_NOTICIA</a>
											<p>$RESUMO_NOTICIA</p>
											<a class='read_btn' href='noticias/$id_noticia'>Ler mais <i
													class='fas fa-chevron-circle-right'></i></a>
										</div>
									</div>
								</div>");
							  
							  
							}
					?>
                
            </div>
            <!--<div class="tf__pagination mt_50">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="far fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="far fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>-->
        </div>
    </section>
    <!--=================================
      NOTICIAS
    ==================================-->

	<?php
		include '../include/footer.php';
		include '../include/script.php';
	?>

</body>
</html>