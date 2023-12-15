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
                        <h2>EAD</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="ead.php">EAD</a></li>
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
						<a href="cursos_graduacao.php">
                        <div class="tf__single_category_text">
                            <h3>Graduação</h3>
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
						<a href="cursos_posgraduacao.php">
                        <div class="tf__single_category_text">
                            <h3>Pós-Graduacao</h3>
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
						<a href="cursos_qualificacao.php">
                        <div class="tf__single_category_text">
                            <h3>Qualificação</h3>
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