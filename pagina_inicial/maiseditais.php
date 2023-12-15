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
                        <h2>Editais</h2>
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li><a href="maiseditais">Editais</a></li>
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
    <section class="tf__event_page mt_190 xs_mt_95">
        <div class="container">
            <div class="row">
			<div class='col-xl-12 col-md-12 wow fadeInUp' data-wow-duration='1.5s'>
				<iframe style="height: 1900px; width: 100%!important;" src="https://conteudo.unc.br/unc/grid_tb_documentos_legais_editais_UnC/index.php" name="frame" width="300" height="150"></iframe>
			</div>
                
            </div>
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