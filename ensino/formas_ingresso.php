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
								WHERE ID = 281";
								
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
                            <li><a href="index">Home</a></li>
                            <li><a href="ensino">Ensino</a></li>
							<li><a href="graduacao">Graduação</a></li>
							<li><a href="<?php echo($LINK); ?>"><?php echo($TITULO); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BREADCRUMB END
    ==================================-->
	
    <!--=========================
        FAQ PAGE START
    ==========================-->
    <section class="tf__faq tf__faq_page pt_190 xs_pt_95">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-9 m-auto wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__faq_text">
                        <div class="tf__faq_accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item orange">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Vestibular Presencial
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Constitui-se de prova composta por questões objetivas das diversas áreas do conhecimento e elaboração de uma redação, em especial para Medicina. O vestibular pode ser operacionalizado pelo Sistema ACAFE ou pela própria instituição.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item green">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Vestibular Digital UNC
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Constitui-se de prova composta por questões objetivas das diversas áreas do conhecimento e elaboração de uma redação no próprio portal do sistema e-mestre.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item red">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Seletivo por mérito
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>O vestibulando ao optar pelo processo seletivo por Mérito escolar participa da classificação por meio da sua nota no ENEM, quando se trata do curso de Medicina ou pela classificação da media do Histórico Escolar do Ensino Médio para outros cursos.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item blue">
                                    <h2 class="accordion-header" id="headingThree1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                            aria-expanded="false" aria-controls="collapseThree1">
                                            Reingresso
                                        </button>
                                    </h2>
                                    <div id="collapseThree1" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>O reingresso é o retorno aos estudos do acadêmico que não tenha concluído seu curso por motivo de desistência. O interessado requer o retorno, e em havendo vaga, é matriculado no curso de acordo com a matriz curricular em vigor, exceto para o Curso de Medicina.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item orange">
                                    <h2 class="accordion-header" id="headingThree11">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree11"
                                            aria-expanded="false" aria-controls="collapseThree11">
                                            Ingresso por Transferência
                                        </button>
                                    </h2>
                                    <div id="collapseThree11" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree11" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>As vagas remanescentes dos cursos são ofertadas por Edital de transferência, considerando a existência de vínculo acadêmico com outra instituição.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item green">
                                    <h2 class="accordion-header" id="headingThree12">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree12"
                                            aria-expanded="false" aria-controls="collapseThree12">
                                            Portador de Diploma
                                        </button>
                                    </h2>
                                    <div id="collapseThree12" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree12" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Com uma graduação já concluída o candidato requer seu ingresso em determinado curso, exceto para o Curso de Medicina.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
        FAQ PAGE END 
    ==========================-->
	
	<?php
		include '../include/footer.php';
		include '../include/script.php';
	?>


</body>
</html>