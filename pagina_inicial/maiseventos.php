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
                        <h2>Eventos</h2>
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li><a href="maiseventos">Eventos</a></li>
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
			<?php 
						
							$sql = "SELECT 
									  ID, NOME_EVENTO, LOCAL, LINK, DATE_FORMAT(DATA_INICIO, '%d/%m/%Y') AS DATA_INICIO_FORMAT,
									  DATE_FORMAT(DATA_FIM, '%d/%m/%Y') AS DATA_FIM,
									  DATE_FORMAT(DATA_INSCRICOES_INICIO,'%d/%m/%Y') AS DATA_INSCRICOES_INICIO,
									  DATE_FORMAT(DATA_INSCRICOES_FIM, '%d/%m/%Y') AS DATA_FIM_INSCRICOES
									FROM eventos 
									WHERE DATA_INSCRICOES_FIM >= CURDATE() 
									ORDER BY DATA_INSCRICOES_FIM DESC
									LIMIT 12";
					$query = $mysqli->query($sql);
					
					while ($dados = $query->fetch_array()) 
					{
					  $ID = $dados['ID'];
					  $NOME_EVENTO = $dados['NOME_EVENTO'];
					  $LOCAL = $dados['LOCAL'];
					  $LINK = $dados['LINK'];
					  $DATA_INICIO = $dados['DATA_INICIO_FORMAT'];
					  $DATA_FIM = $dados['DATA_FIM'];
					  $DATA_INSCRICOES_INICIO = $dados['DATA_INSCRICOES_INICIO'];
					  $DATA_INSCRICOES_FIM = $dados['DATA_FIM_INSCRICOES'];
					  	  
							  echo("<div class='col-xl-4 col-md-6 wow fadeInUp' data-wow-duration='1.5s'>
								<div class='tf__single_event'>
									<div class='tf__single_event_img'>
										<img src='#' alt='event' class='img-fluid w-100'>
									</div>
									<div class='tf__single_event_text'>
										<ul>
											<li><i class='far fa-map-marker-alt'></i>$LOCAL</li>
										</ul>
										<a class='title' href='$LINK'>$NOME_EVENTO</a>
										<i class='far fa-clock'></i> $DATA_INICIO - $DATA_FIM
										<div class='tf__single_event_footer'>
											<ul>
												<li><a href='$LINK'>INSCREVA-SE JÁ!</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>");
							  
							  
					}
					?>
                
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