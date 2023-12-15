<!DOCTYPE html>
<html lang="en">

	<?php
		include '../include/head.php';
		include '../css/template_principal.php';
		$mysqli->set_charset("utf8");
	?>

<style>
a {
    display: inline;
    text-decoration: none;
}
</style>

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
                        <h2>Graduação</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="ensino.php">Ensino</a></li>
							<li><a href="graduacao.php">Graduação</a></li>
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
        ABOUT START
    ==================================-->
	<br><br>
    <section class="tf__about mt_250 xs_mt_195">
        <div class="container">
            <div class="tf__about_top wow fadeInUp" data-wow-duration="1.5s"
                style="background: url(../images/about_top_bg.jpg);">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="tf__about_top_img">
                            <img src="../images/about_top_img.jpg" alt="about" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="tf__about_top_text">
                            <div class="tf__about_top_text_center">
                                <h2 style="font-size: 40px;font-weight: 700;margin-top: 15px;text-transform: capitalize;color:white">NOSSOS CURSOS</h2>
                                <p>Clique aqui para conferir todos os nossos cursos disponíveis.</p>
                            </div>
                            <a href="cursos_graduacao" class="common_btn">Ver cursos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        ABOUT END
    ==================================-->

    <!--=================================
        CATEGORIES START
    ==================================-->
    <section class="tf__categories">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8 col-lg-6 m-auto wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__heading_area mb_15">
                        <!--<h5>OUR COURSE CATEGORIES</h5>
                        <h2>We success for categories creative students.</h2>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category light_blue">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
						<a href="formas_ingresso">
                        <div class="tf__single_category_text">
                            <h3>Formas de Ingresso</h3>
                            <p>We can provide you with a handyan in London.</p>
                        </div>
						</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category red">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
						<a href="bolsas_estudo">
                        <div class="tf__single_category_text">
                            <h3>Bolsa de Estudo</h3>
                            <p>We can provide you with a handyan in London.</p>
                        </div>
						</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category green">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
						<a href="formularios_documentos">
                        <div class="tf__single_category_text">
                            <h3>Formulários e Documentos</h3>
                            <p>We can provide you with a handyan in London.</p>
                        </div>
						</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category orange">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
						<a href="politicas">
                        <div class="tf__single_category_text">
                            <h3>Políticas Afirmativas</h3>
                            <p>We can provide you with a handyan in London.</p>
                        </div>
						</a>
                    </div>
                </div>
				<div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category gray">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
						<a href="repositorio">
                        <div class="tf__single_category_text">
                            <h3>Repositório</h3>
                            <p>We can provide you with a handyan in London.</p>
                        </div>
						</a>
                    </div>
                </div>
				<div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category blue">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
						<a href="indissociabilidade">
                        <div class="tf__single_category_text">
                            <h3>Indissociabilidade UNC</h3>
                            <p>We can provide you with a handyan in London.</p>
                        </div>
						</a>
                    </div>
                </div>
				
				
            </div>
        </div>
    </section>
    <!--=================================
        CATEGORIES END
    ==================================-->
	
	<!--=================================
        LINKS
    ==================================-->
    <div class="tf__activities_3 tf__activities_slider_area mt_50 pt_30 pb_100">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-6 col-xxl-5 col-md-8 col-lg-6 m-auto">
                    <div class="tf__heading_area mb_15">
                        <h5>Links</h5>
                        <!--<h2>Links importantes</h2>-->
                    </div>
                </div>
            </div>
            <div class="row popular_service_slider wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-3">
				<a href="https://emestre.unc.br/login/login.php" target="_blank">
                    <div class="tf__activities_item light_blue">
                        <span> <i class="fal fa-university"></i> </span>
                        <h3>E-mestre</h3>
                    </div>
				</a>
                </div>
                <div class="col-xl-3">
				<a href="https://uni-contestado-site.s3.amazonaws.com/site/ensino/docs/Guia%20Acad%C3%AAmico%202021%20-%20alterado.pdf" target="_blank">
                    <div class="tf__activities_item orange">
                        <span> <i class="fas fa-graduation-cap"></i> </span>
                        <h3>Guia Acadêmico</h3>
                    </div>
				</a>
                </div>
                <div class="col-xl-3">
				<a href="https://uni-contestado-site.s3.amazonaws.com/editais/Resolucao%20UnC%20CONSUN%20078%202022%20%20Aprovacao%20Ad%20referendum%20do%20Calendario%20Academico%202023-2.pdf" target="_blank">
                    <div class="tf__activities_item green">
                        <span> <i class="far fa-calendar"></i> </span>
                        <h3>Calendário UNC</h3>
                    </div>
				</a>
                </div>
                <div class="col-xl-3">
				<a href="https://www.documentodoestudante.com.br/" target="_blank">
                    <div class="tf__activities_item light_blue">
                        <span> <i class="fas fa-user"></i> </span>
                        <h3>Carteira de Estudante</h3>
                    </div>
				</a>
                </div>
				 <div class="col-xl-3">
				 <a href="https://documentodoprofessor.com.br/" target="_blank">
                    <div class="tf__activities_item orange">
                        <span> <i class="fas fa-address-book"></i> </span>
                        <h3>Carteira do Professor</h3>
                    </div>
				</a>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
        LINKS
    ==================================-->
	
	<?php
		include '../include/footer.php';
		include '../include/script.php';
	?>


</body>
</html>