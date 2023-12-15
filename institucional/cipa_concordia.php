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
                        <h2>CIPA Concórdia</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
							<li><a href="institucional.php">Institucional</a></li>
                            <li><a href="capacitacao.php">Capacitação</a></li>
							<li><a href="cipa_concordia.php">CIPA Concórdia</a></li>
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
        COURSES DETAILS START
    ==================================-->
    <section class="tf__courses_details mt_195 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="tf__courses_details_area">

                        <div class="tf__courses_det_text">
                            <h2>CIPA Concórdia</h2>
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
							 <?php	
												
								$sql = "SELECT PM.ID, GM.DESCRICAO AS SIGLA,
										  PM.DESCRICAO AS TITULO_MENU,
										  LOWER(SUBSTRING_INDEX(SUBSTRING_INDEX(PM.DESCRICAO, ' ', 1),' ',- 1)) AS TITULO_MENU_PAGINA,
										  P.TITULO AS TITULO_PAGINA,
										  P.TEXTO AS TEXTO,
										  P.LINK AS LINK
										  FROM pagina P
										INNER JOIN pagina_menu PM ON (PM.ID_PAGINA = P.ID)
										INNER JOIN grupo_menu GM ON (GM.ID = P.ID_GRUPO_MENU)
										WHERE LINK LIKE '%cipa_concordia%'
										ORDER BY P.ID";
								
								$query = $mysqli->query($sql);
								$cont = 0;
								
								while ($dados = $query->fetch_array()) 
								{
								  $SIGLA = $dados['SIGLA'];
								  $TITULO_MENU = $dados['TITULO_MENU'];
								  $TITULO_PAGINA = $dados['TITULO_PAGINA'];
								  $TITULO_MENU_PAGINA = $dados['TITULO_MENU_PAGINA'];
								  $TEXTO = $dados['TEXTO'];
								  $cont++;
								  
								  $active = '';
								  
								  if($cont == 1)
								  {
									  $active = 'active';
								  }
								  
								  echo("	<li class='nav-item' role='presentation'>
											<button class='nav-link $active' id='pills-$TITULO_MENU_PAGINA-tab' data-bs-toggle='pill'
												data-bs-target='#pills-$TITULO_MENU_PAGINA' type='button' role='tab' 
												aria-controls='pills-$TITULO_MENU_PAGINA'
												aria-selected='true'>$TITULO_MENU</button>
										</li>
											   
									");
								}
						?>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                               <?php
							
							$sql = "SELECT PM.ID, GM.DESCRICAO AS SIGLA,
										  PM.DESCRICAO AS TITULO_MENU,
										  LOWER(SUBSTRING_INDEX(SUBSTRING_INDEX(PM.DESCRICAO, ' ', 1),' ',- 1)) AS TITULO_MENU_PAGINA,
										  P.TITULO AS TITULO_PAGINA,
										  P.TEXTO AS TEXTO,
										  P.LINK AS LINK
										  FROM pagina P
										INNER JOIN pagina_menu PM ON (PM.ID_PAGINA = P.ID)
										INNER JOIN grupo_menu GM ON (GM.ID = P.ID_GRUPO_MENU)
										WHERE LINK LIKE '%cipa_concordia%'
										ORDER BY P.ID";
						
						$query = $mysqli->query($sql);
						$cont_conteudo = 0;
						
						while ($dados = $query->fetch_array()) 
						{
						  $SIGLA = $dados['SIGLA'];
						  $TITULO_MENU = $dados['TITULO_MENU'];
						  $TITULO_PAGINA = $dados['TITULO_PAGINA'];
						  $TITULO_MENU_PAGINA = $dados['TITULO_MENU_PAGINA'];
						  $TEXTO = $dados['TEXTO'];
						  $cont_conteudo++;	
							
							
							$active_conteudo = '';
						  
							  if($cont_conteudo == 1)
							  {
								  $active_conteudo = 'active';
							  }
							
								echo("<div class='tab-pane fade show $active_conteudo' id='pills-$TITULO_MENU_PAGINA' role='tabpanel'
                                    aria-labelledby='pills-$TITULO_MENU_PAGINA-tab' tabindex='0'>
                                    <div class='tf__course_overview'>
											<h3>$TITULO_PAGINA</h3>
												<p>$TEXTO</p>
										</div>
									</div>");
						}
							
							?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        COURSES DETAILS END
    ==================================-->
	
	<?php
		include '../include/footer.php';
		include '../include/script.php';
	?>


</body>
</html>