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
     <section class="tf__breadcrumb" style="background: url(images/breadcrumb_bg_1.jpg);">
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
        BREADCRUMB END
    ==================================-->

    <!--=================================
        TERMS AND CONDITION START
    ==================================-->
    <section class="tf__pricacy_policy mt_120 xs_mt_95">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xl-12">
                    <div class="tf__pricacy_policy_text">
                       <?php echo($TEXTO); ?>
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