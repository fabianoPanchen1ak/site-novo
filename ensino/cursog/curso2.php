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
									
						$sql = "SELECT ID, NOME_CURSO, SUBNIVEL_ENSINO, URL_S3_COMPRESSED, CONTEUDO, COORDENADORES, LINK_INSCRICOES, 
						INSCRICOES_ABERTAS, CAMPUS, NOME_CAMPUS, TEXTO_INSCRICOES FROM curso WHERE ATIVO='S' AND NOME_CURSO_LINK = '$id'
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
				  
				  $id_curso = $ID;
				  
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
    <section class="tf__pricacy_policy mt_120 xs_mt_95">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-12">
                    <div class="tf__pricacy_policy_text">
                       <?php echo($CONTEUDO); ?>
                    </div>
                </div>
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