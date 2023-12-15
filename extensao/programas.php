
<?php
function tirarAcentos($string){
return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","a A e E i I o O u U n N c C"),$string);
}
?>

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
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb" style="background: url(../images/breadcrumb_bg_1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>Programas</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="extensao.php">Extensao</a></li>
							<li><a href="programas.php">Programas</a></li>
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
        COURSES PAGE START
    ==================================-->
    <section class="tf__courses_page mt_190 xs_mt_95">
        <div class="container">
            <!--<div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto">
                    <div class="tf__heading_area mb_15">
                        <h5>OUR POPULAR COURSES</h5>
                        <h2>Educational For Students Popular Courses.</h2>
                    </div>
                </div>
            </div>-->
            <div class="row">
			<?php 

					$sql = "SELECT ID, NOME_CURSO, REPLACE(NOME_CURSO_LINK,'-','') AS NOME_CURSO_LINK, 
					SUBNIVEL_ENSINO, IMAGEM, CONTEUDO, COORDENADORES, CAMPUS, NOME_CAMPUS, INSCRICOES_ABERTAS, 
					LINK_INSCRICOES, TEXTO_INSCRICOES, URL_S3_COMPRESSED
					FROM curso WHERE ATIVO='S' and SUBNIVEL_ENSINO=7
					ORDER BY NOME_CURSO";
					$query = $mysqli->query($sql);
					$cont = 0;
					while ($dados = $query->fetch_array()) 
					{
					  $ID = $dados['ID'];
					  $NOME_CURSO = $dados['NOME_CURSO'];
					  $NOME_CURSO_LINK = $dados['NOME_CURSO_LINK'];
					  $SUBNIVEL_ENSINO = $dados['SUBNIVEL_ENSINO'];
					  $CONTEUDO = $dados['CONTEUDO'];
					  $COORDENADORES = $dados['COORDENADORES'];
					  $CAMPUS = $dados['CAMPUS'];
					  $NOME_CAMPUS = $dados['NOME_CAMPUS'];
					  $INCRICOES_ABERTAS = $dados['INSCRICOES_ABERTAS'];
					  $LINK_INSCRICOES = $dados['LINK_INSCRICOES'];
					  $TEXTO_INSCRICOES = $dados['TEXTO_INSCRICOES'];
					  $URL_S3_COMPRESSED = $dados['URL_S3_COMPRESSED'];
					  
					  $id = base64_encode($ID);
					  					
					  $nome = tirarAcentos($NOME_CURSO_LINK);
					  $resumo = substr($CONTEUDO, 17, 80);
						
						if($INCRICOES_ABERTAS == 'N')
					  {
				 		
					  echo("							
								<div class='col-xl-4 col-md-6 wow fadeInUp' data-wow-duration='1.5s'>
							<div class='tf__single_courses'>
								<div class='tf__single_courses_img'>
									<img src='$URL_S3_COMPRESSED' alt='courses' class='img-fluid w-100'>
									<a class='categories green' href='#'>Programas</a>
								</div>
								<ul class='tf__single_course_header'>
									<li><i class='fas fa-user'></i>Campus</li>
									<!--<li><i class='fas fa-folder-open'></i> 14 lessons</li>-->
								</ul>
								<div class='tf__single_courses_text'>
									<a class='title' href='programas/curso.php?id=$nome'>$NOME_CURSO</a>
									<p class='description'>$resumo...</p>
									<br>
									<ul>
										<li>
											<i class='fas fa-star'></i>
											<i class='fas fa-star'></i>
											<i class='fas fa-star'></i>
											<i class='fas fa-star'></i>
											<i class='far fa-star'></i>
											<span>(04)</span>
										</li>
										<!--<li>50+ students</li>-->
									</ul>
								</div>
							</div>
						</div>");
					  }
					  elseif($INCRICOES_ABERTAS == 'T')
					  {
						  echo("
								  <div class='col-xl-4 col-md-6 wow fadeInUp' data-wow-duration='1.5s'>
							<div class='tf__single_courses'>
								<div class='tf__single_courses_img'>
									<img src='$URL_S3_COMPRESSED' alt='courses' class='img-fluid w-100'>
									<a class='categories green' href='#'>Programas</a>
								</div>
								<ul class='tf__single_course_header'>
									<li><i class='fas fa-user'></i>Campus</li>
									<!--<li><i class='fas fa-folder-open'></i> 14 lessons</li>-->
								</ul>
								<div class='tf__single_courses_text'>
									<a class='title' href='programas/curso.php?id=$nome'>$NOME_CURSO</a>
									<p class='description'>$resumo...</p>
									<br>
									<ul>
										<li>
											<i class='fas fa-star'></i>
											<i class='fas fa-star'></i>
											<i class='fas fa-star'></i>
											<i class='fas fa-star'></i>
											<i class='far fa-star'></i>
											<span>(04)</span>
										</li>
										<li>$TEXTO_INSCRICOES</li>
									</ul>
								</div>
							</div>
						</div>");
					  }
					  else
					  {
						  echo("
								 <div class='col-xl-4 col-md-6 wow fadeInUp' data-wow-duration='1.5s'>
							<div class='tf__single_courses'>
								<div class='tf__single_courses_img'>
									<img src='$URL_S3_COMPRESSED' alt='courses' class='img-fluid w-100'>
									<a class='categories green' href='#'>Programas</a>
								</div>
								<ul class='tf__single_course_header'>
									<li><i class='fas fa-user'></i>Campus</li>
									<!--<li><i class='fas fa-folder-open'></i> 14 lessons</li>-->
								</ul>
								<div class='tf__single_courses_text'>
									<a class='title' href='programas/curso.php?id=$nome'>$NOME_CURSO</a>
									<p class='description'>$resumo...</p>
									<br>
									<ul>
										<li>
											<i class='fas fa-star'></i>
											<i class='fas fa-star'></i>
											<i class='fas fa-star'></i>
											<i class='fas fa-star'></i>
											<i class='far fa-star'></i>
											<span>(04)</span>
										</li>
										<li><a href='$LINK_INSCRICOES'>$TEXTO_INSCRICOES</a></li>
									</ul>
								</div>
							</div>
						</div>");
					  }
  
			}
			?>
            </div>
        </div>
    </section>
    <!--=================================
        COURSES PAGE END
    ==================================-->
	
	<?php
		include '../include/footer.php';
		include '../include/script.php';
	?>


</body>
</html>