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
                        <h2>Biblioteca</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="biblioteca.php">Biblioteca</a></li>
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
        CATEGORIES START
    ==================================-->
    <section class="tf__categories mt_150">
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
						<a href="modelos.php">
                        <div class="tf__single_category_text">
                            <h3>Modelos de trabalhos</h3>
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
						<a href="../pesquisa/editora.php">
                        <div class="tf__single_category_text">
                            <h3>Editora</h3>
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
				<a href="https://pergamum.unc.br/" target="_blank">
                    <div class="tf__activities_item light_blue">
                        <span> <i class="fal fa-university"></i> </span>
                        <h3>Consulta ao acervo</h3>
                    </div>
				</a>
                </div>
                <div class="col-xl-3">
				<a href="https://pergamum.unc.br/" target="_blank">
                    <div class="tf__activities_item orange">
                        <span> <i class="fas fa-graduation-cap"></i> </span>
                        <h3>Renovações Online</h3>
                    </div>
				</a>
                </div>
                <div class="col-xl-3">
				<a href="https://minhabiblioteca.unc.br/view/login.html" target="_blank">
                    <div class="tf__activities_item green">
                        <span> <i class="far fa-book"></i> </span>
                        <h3>Biblioteca virtual</h3>
                    </div>
				</a>
                </div>
                <div class="col-xl-3">
				<a href="https://emestre.unc.br/login_revista_direito/index.php" target="_blank">
                    <div class="tf__activities_item light_blue">
                        <span> <i class="fas fa-bookmark"></i> </span>
                        <h3>Revistas dos tribunais online</h3>
                    </div>
				</a>
                </div>
				 <div class="col-xl-3">
				 <a href="https://emestre.unc.br/login_ebsco/index.php" target="_blank">
                    <div class="tf__activities_item orange">
                        <span> <i class="fas fa-book"></i> </span>
                        <h3>Sistema EBSCO</h3>
                    </div>
				</a>
                </div>
				<div class="col-xl-3">
				 <a href="horarios.php">
                    <div class="tf__activities_item green">
                        <span> <i class="fas fa-university"></i> </span>
                        <h3>Horários de funcionamento</h3>
                    </div>
				</a>
                </div>
				<div class="col-xl-3">
				 <a href="https://documentodoprofessor.com.br/" target="_blank">
                    <div class="tf__activities_item light_blue">
                        <span> <i class="fas fa-file"></i> </span>
                        <h3>Autorização de publicação</h3>
                    </div>
				</a>
                </div>
				<div class="col-xl-3">
				 <a href="https://more.ufsc.br/" target="_blank">
                    <div class="tf__activities_item orange">
                        <span> <i class="fas fa-bookmark"></i> </span>
                        <h3>MORE</h3>
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