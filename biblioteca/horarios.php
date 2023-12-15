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
								WHERE ID = 314";
								
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
							<li><a href="biblioteca.php">Biblioteca</a></li>
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