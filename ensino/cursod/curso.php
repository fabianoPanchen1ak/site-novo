<!DOCTYPE html>
<html lang="en">

	<?php
		include 'include/head.php';
		include '../../css/template_principal.php';
		$mysqli->set_charset("utf8");
	?>

<body class="home_3">

	<?php
		include 'include/toolbar.php';
		include 'include/menu.php';
	?>
    <!--=================================
        BREADCRUMB START
    ==================================-->
	
	<?php	
				if(isset($_GET['id']))
					$id = $_GET['id'];
									
						$sql = "SELECT ID, NOME_CURSO, SUBNIVEL_ENSINO, URL_S3_COMPRESSED, CONTEUDO, COORDENADORES, LINK_INSCRICOES, 
						INSCRICOES_ABERTAS, CAMPUS, NOME_CAMPUS, TEXTO_INSCRICOES FROM curso WHERE ATIVO='S' AND NOME_CURSO_LINK = '$id'
						and SUBNIVEL_ENSINO=10 ORDER BY NOME_CURSO";
						
				
				
				$query = $mysqli->query($sql);

				while ($dados = $query->fetch_array()) 
				{
				  $ID = $dados['ID'];
				  $NOME_CURSO = $dados['NOME_CURSO'];
				  $URL_S3_COMPRESSED = $dados['URL_S3_COMPRESSED'];
				  $SUBNIVEL_ENSINO = $dados['SUBNIVEL_ENSINO'];
				  $CONTEUDO = $dados['CONTEUDO'];
				  $COORDENADORES = $dados['COORDENADORES'];
				  $LINK_INSCRICOES = $dados['LINK_INSCRICOES'];
				  $INSCRICOES_ABERTAS = $dados['INSCRICOES_ABERTAS'];
				  $CAMPUS = $dados['CAMPUS'];
				  $NOME_CAMPUS = $dados['NOME_CAMPUS'];
				  $TEXTO_INSCRICOES = $dados['TEXTO_INSCRICOES'];
				  
				  $id_curso = $ID;
				  
				}
?>
    <section class="tf__breadcrumb" style="background: url(../../images/breadcrumb_bg_1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2><?php echo($NOME_CURSO); ?></h2>
                        <ul>
                            <li><a href="../../index.php">Home</a></li>
							<li><a href="../ensino.php">Ensino</a></li>
							<li><a href="../graduacao.php">Gradução</a></li>
							<li><a href="#"><?php echo($NOME_CURSO); ?></a></li>
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
                <div class="col-xl-8 col-lg-8">
                    <div class="tf__courses_details_area">
                        <div class="tf__courses_details_img">
                            <img src="<?php echo($URL_S3_COMPRESSED); ?>" alt="courses" class="img-fluid w-100">
                        </div>
                        <div class="tf__courses_details_header d-flex flex-wrap align-items-center">
						<div class="img">
                                <img src="../../images/client_img_1.png" alt="instuuctor" class="img-fluid w-100">
                            </div>
                            <ul class="text d-flex flex-wrap align-items-center">
                                <li>
                                    <h4>Area</h4>
                                    <p>Exatas</p>
                                </li>
								<li>
                                    <h4>Categoria</h4>
                                    <p>Bacharelado</p>
                                </li>
                                <li>
                                    <h4>Duração</h4>
                                    <p>4 anos</p>
                                </li>
                                <li>
                                    <h4>Regime</h4>
                                    <p>Noturno</p>
                                </li>
                                <li>
                                    <a class="common_btn" href="#">Inscrições</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tf__courses_det_text">
                            <h2><?php echo($NOME_CURSO); ?></h2>

                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Sobre</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Coordenadores</button>
                                </li>
								<li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-corpo-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-corpo" type="button" role="tab"
                                        aria-controls="pills-corpo" aria-selected="false">Corpo docente</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Informações adicionais</button>
                                </li>
								
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="tf__course_overview">
                                        <h3>Objetivo</h3>
                                        <p>Formar bacharéis em Administração com formação ética, 
										por meio de conhecimentos e ferramentas que favoreçam o 
										desenvolvimento de competências e habilidades nos processos 
										de tomada de decisão, capazes de proporcionar a circulação de 
										informações para soluções inovadoras e adaptáveis ao contexto 
										organizacional.</p>
										
                                        <h3>Campos de Atuação</h3>
                                        <ul>
                                            <li>Gestão de Pessoas;</li>
                                            <li>Finanças;</li>
                                            <li>Projetos;</li>
                                            <li>Marketing;</li>
                                            <li>Estratégicas Organizacionais;</li>
                                            <li>Logística e Serviços;</li>
											<li>Produção e Materiais;</li>
											<li>Sistemas de Informações;</li>
											<li>Novas tendências da Administração Pública e Privada.</li>
                                        </ul>

                                        <h3>Perfil Profissional<h3>
                                        <p>O Bacharel em Administração atuará no planejamento, organização, 
										direção e controle das organizações, gerindo questões financeiras, 
										materiais e de pessoas. Tem ainda como função fixar objetivos, 
										organizar e alocar recursos financeiros e tecnológicos, liderar as 
										pessoas e equipes, negociar, controlar e avaliar resultados, 
										compreendendo o contexto sociopolítico e econômico em que atua 
										exercitando a capacidade de comunicação e de relacionamento. Em 
										sua atuação deve considerar a ética, a segurança e as questões 
										sócio ambientais.</p>
										
										<h3>Local<h3>
                                         <ul>
                                            <li>Campus Universitário Canoinhas</li>
                                            <li>Campus Universitário Concórdia</li>
											<li>Campus Universitário Curitibanos</li>
											<li>Campus Universitário Mafra</li>
											<li>Campus Universitário Rio Negrinho</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab" tabindex="0">
                                    <div class="tf__course_instructor">
                                        <div class="row">
											<div class="col-xl-5 col-md-6 mb_30">
                                                <div class="tf__course_instructor_img">
                                                    <img src="../../images/team_1.jpg" alt="instructor"
                                                        class="img-fluid w-100">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-md-6 mb_30">
                                                <div class="tf__course_instructor_text">
                                                    <h4>Canoinhas</h4>
                                                    <p>Nome</p>
                                                    <p>Email</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-md-6 mb_30">
                                                <div class="tf__course_instructor_img">
                                                    <img src="../../images/team_1.jpg" alt="instructor"
                                                        class="img-fluid w-100">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-md-6 mb_30">
                                                <div class="tf__course_instructor_text">
                                                    <h4>Concórdia</h4>
                                                    <p>Nome</p>
                                                    <p>administracao.concordia@unc.br</p>
                                                </div>
                                            </div>
											<div class="col-xl-5 col-md-6 mb_30">
                                                <div class="tf__course_instructor_img">
                                                    <img src="../../images/team_1.jpg" alt="instructor"
                                                        class="img-fluid w-100">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-md-6 mb_30">
                                                <div class="tf__course_instructor_text">
                                                    <h4>Mafra</h4>
                                                    <p>Prof. Esp. Amauri Gelbcke</p>
                                                    <p>administracao.mafra@unc.br</p>
                                                </div>
                                            </div>
											<div class="col-xl-5 col-md-6 mb_30">
                                                <div class="tf__course_instructor_img">
                                                    <img src="../../images/team_1.jpg" alt="instructor"
                                                        class="img-fluid w-100">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-md-6 mb_30">
                                                <div class="tf__course_instructor_text">
                                                    <h4>Curitibanos</h4>
                                                    <p>Prof. Esp. Rodrigo Antônio Zanetti</p>
                                                    <p>administracao.curitibanos@unc.br</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="tab-pane fade" id="pills-corpo" role="tabpanel"
                                    aria-labelledby="pills-corpo-tab" tabindex="0">
                                     <div class="tf__course_overview">
                                        <h3>Professor 1</h3>
                                        <ul>
											<li><a href="">Lattes</a></li>
										</ul>
										
                                        <h3>Professor 1</h3>
                                        <ul>
											<li><a href="">Lattes</a></li>
										</ul>

                                        <h3>Professor 1</h3>
                                        <ul>
											<li><a href="">Lattes</a></li>
										</ul>
										
										<h3>Professor 1</h3>
                                        <ul>
											<li><a href="">Lattes</a></li>
										</ul>
										
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab" tabindex="0">
                                     <div class="tf__course_overview">
                                        <h3>Ato legal do curso</h3>
                                        <ul>
											<li><a href="">Decreto</a></li>
										</ul>
										
                                        <h3>Matriz Curricular</h3>
                                        <ul>
											<li><a href="">Clique aqui para visualizar a Matriz Curricular do Curso</a></li>
										</ul>

                                        <h3>Fluxograma</h3>
                                        <ul>
											<li><a href=""></a></li>
										</ul>
										
										<h3>Horários</h3>
                                        <ul>
											<li>Os horários e cronogramas de aulas estão disponíveis no sistema acadêmico E-mestre/Portal do Aluno.</li>
										</ul>
										
										<h3>Avaliação</h3>
                                        <ul>
											<li></li>
										</ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="tf__sidebar" id="sticky_sidebar">
                        <div class="tf__sidebar_category sidebar_item">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#"> Graduação <span>(08)</span></a></li>
                                <li><a href="#"> Pós-Graduação <span>(14)</span></a></li>
                                <li><a href="#"> Mestrado <span>(20)</span></a></li>
                                <li><a href="#"> Doutorado<span>(29)</span></a></li>
                            </ul>
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
		include 'include/footer.php';
		include 'include/script.php';
	?>


</body>
</html>