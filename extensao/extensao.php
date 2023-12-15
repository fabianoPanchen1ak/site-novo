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
                        <h2>Extensão</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="extensao.php">Extensão</a></li>
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
                                <h2 style="font-size: 40px;font-weight: 700;margin-top: 15px;text-transform: capitalize;color:white">CURSOS DE QUALIFICAÇÃO</h2>
                                <p>Clique aqui para conferir todos os nossos cursos disponíveis.</p>
                            </div>
                            <a href="cursos_qualificacao.php" class="common_btn">Ver cursos</a>
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
						<a href="formularios.php">
                        <div class="tf__single_category_text">
                            <h3>Formulários</h3>
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
						<a href="programas.php">
                        <div class="tf__single_category_text">
                            <h3>Programas</h3>
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
						<a href="atendimentos.php">
                        <div class="tf__single_category_text">
                            <h3>Atendimentos à Comunidade</h3>
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
						<a href="responsabilidade.php">
                        <div class="tf__single_category_text">
                            <h3>Responsabilidade social</h3>
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
	
	<?php
		include '../include/footer.php';
		include '../include/script.php';
	?>


</body>
</html>