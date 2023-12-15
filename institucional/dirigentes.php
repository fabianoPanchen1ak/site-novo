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
					<?php 

						$sql = "SELECT 
								  ID,
								  TITULO,
								  USUARIO_GERACAO,
								  DATA_GERACAO,
								  TEXTO,
								  TEXTO_DESTAQUE,
								  LINK
								FROM
								  pagina
								WHERE ID = 278";
								
						$query = $mysqli->query($sql);
						$cont = 0;
						while ($dados = $query->fetch_array()) 
						{
						  $ID = $dados['ID'];
						  $TITULO = $dados['TITULO'];
						  $TEXTO = $dados['TEXTO'];
						  $TEXTO_DESTAQUE = $dados['TEXTO_DESTAQUE'];
						  $LINK = $dados['LINK'];
						  
						  echo("
							<h2>$TITULO</h2>
						  ");  
}

?>
                        
                        <ul>
                            <li><a href="index.php">Home</a></li>
							<li><a href="institucional.php">Institucional</a></li>
                            <li><a href="<?php echo($LINK); ?>.php"><?php echo($TITULO); ?></a></li>
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
        TERMS AND CONDITION START
    ==================================-->
    <section class="tf__team_page mt_190 xs_mt_95">
        <div class="container">
            <!--<div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto">
                    <div class="tf__heading_area mb_15">
                        <h5>Meet OUR Team</h5>
                        <h2>Become A Instruction Instructor Teacher.</h2>
                    </div>
                </div>
            </div>-->
            <div class="row">
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="https://imagem-resize.s3.amazonaws.com/luciano.jpg" alt="team" class="img-fluid w-100">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <div class="tf__single_team_text">
                            <a class="title" href="team_details.html">Dr. Luciano Bendlin</a>
                            <p>Reitor</p>
                        </div>
                    </div>
                </div>
				<div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_team">
                        <div class="tf__single_team_img">
                            <img src="https://imagem-resize.s3.amazonaws.com/solange.jpg" alt="team" class="img-fluid w-100">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                        <div class="tf__single_team_text">
                            <a class="title" href="team_details.html">Me. Solange S. Sprandel da Silva</a>
                            <p>Vice-Reitora</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        TERMS AND CONDITION END 
    =================================-->

	<?php
		include '../include/footer.php';
		include '../include/script.php';
	?>

</body>
</html>