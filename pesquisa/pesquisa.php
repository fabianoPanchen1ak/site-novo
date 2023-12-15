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
                        <h2>Pesquisa</h2>
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li><a href="pesquisa">Pesquisa</a></li>
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
                        <a href="grupo_pesquisa">
							<div class="tf__single_category_text">
								<h3>Grupo de Pesquisa</h3>
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
						<a href="iniciacao">
                        <div class="tf__single_category_text">
                            <h3>Iniciação Científica</h3>
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
						<a href="apoio">
                        <div class="tf__single_category_text">
                            <h3>Apoio à eventos científicos</h3>
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
						<a href="manual">
                        <div class="tf__single_category_text">
                            <h3>Manual de Metodologia</h3>
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
						<a href="internacionalizacao">
                        <div class="tf__single_category_text">
                            <h3>Internacionalizacao</h3>
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
						<a href="iemp">
                        <div class="tf__single_category_text">
                            <h3>IEMP</h3>
                            <p>We can provide you with a handyan in London.</p>
                        </div>
						</a>
                    </div>
                </div>
				<div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_category light_blue">
                        <div class="tf__single_category_icon">
                            <i class="fal fa-book"></i>
                        </div>
						<a href="formularios">
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
						<a href="anais_ebooks">
                        <div class="tf__single_category_text">
                            <h3>Anais e E-books</h3>
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
						<a href="nit">
                        <div class="tf__single_category_text">
                            <h3>NIT</h3>
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
						<a href="fmdd">
                        <div class="tf__single_category_text">
                            <h3>FMDD</h3>
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
						<a href="editora">
                        <div class="tf__single_category_text">
                            <h3>Editora</h3>
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
						<a href="comite">
                        <div class="tf__single_category_text">
                            <h3>Comitê de ética</h3>
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
                    <a href="../pagina_inicial/maiseventos" target="_blank">
					<div class="tf__activities_item light_blue">
                    	<span> <i class="fas fa-graduation-cap"></i> </span>
                        <h3>Eventos</h3>
					</div>
					</a>
                </div>
				<div class="col-xl-3">
				<a href="https://portalpesquisa.unc.br/inicio/" target="_blank">
                    <div class="tf__activities_item orange">
                        <span> <i class="fal fa-university"></i> </span>
                        <h3>Portal da Pesquisa</h3>
                    </div>
				</a>
                </div>
                <div class="col-xl-3">
				<a href="https://www.periodicos.unc.br/" target="_blank">
                    <div class="tf__activities_item green">
                        <span> <i class="fas fa-graduation-cap"></i> </span>
                        <h3>Revistas UNC</h3>
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