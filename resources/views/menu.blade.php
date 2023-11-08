@extends('layouts.app')

@section('page')

<head> <title>Home</title> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="build/assets2/images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="build/assets2/css/util.css">
	<link rel="stylesheet" type="text/css" href="build/assets2/css/main.css">
	<!--==============================================================================================-->
	</head>

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center justify-content-center">
		<div class="container" data-aos="fade-up">
			<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
				<div class="col-xl-6 col-lg-8">
					<h1>Encontre o seu livro ideal</h1>
				</div>
			</div>

			<div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
				<div class="col-xl-2 col-md-4">
					<a href="/Romance">
						<div class="icon-box">
							<img src="build/assets3/img/icon/RomanceIcon.png" height="100px" width="100px">
							<h3><a href="/Romance">Romance</a></h3>
						</div>
					</a>
				</div>
				<div class="col-xl-2 col-md-4">
					<a href="/Misterio">
						<div class="icon-box">
							<img src="build/assets3/img/icon/Misterio.png" height="100px" width="100px">
							<h3><a href="/Misterio">Mistério</a></h3>
						</div>
					</a>
				</div>
				<div class="col-xl-2 col-md-4">
					<div class="icon-box">
						<a href="/Aventura">
							<img src="build/assets3/img/icon/Aventura.png" height="100px" width="100px">
							<h3><a href="/Aventura">Aventura</a></h3>
					</div>
					</a>
				</div>
				<div class="col-xl-2 col-md-4">
					<a href="/Drama">
						<div class="icon-box">
							<img src="build/assets3/img/icon/Drama.png" height="100px" width="100px">
							<h3><a href="/Drama">Drama</a></h3>
						</div>
					</a>
				</div>
				<div class="col-xl-2 col-md-4">
					<div class="icon-box">
						<a href="/Ficcao_cientifica">
							<img src="build/assets3/img/icon/Ficcao.png" height="100px" width="100px">
							<h3><a href="/Ficcao_cientifica">Ficção Cientifica</a></h3>
					</div>
					</a>
				</div>
				<div class="col-xl-2 col-md-4">
					<a href="/Terror">
						<div class="icon-box">
							<img src="build/assets3/img/icon/Terror.png" height="100px" width="100px">
							<h3><a href="/Terror">Terror</a></h3>
						</div>
					</a>
				</div>
			</div>

		</div>
	</section><!-- End Hero -->

	<!-- ======= Clients Section ======= -->
	<section id="home" class="clients">
		<div class="container" data-aos="zoom-in">

			<div class="clients-slider swiper">
				<div class="swiper-wrapper align-items-center">

					<div class="swiper-slide"><a href="/amd"><img src="build/assets3/img/clients/arqueiro.jpg"
								class="img-fluid"></a></div>
					<div class="swiper-slide"><a href="/intel"><img
								src="build/assets3/img/clients/CompanhiaDasLetras.jpg" class="img-fluid" alt=""></a>
					</div>
					<div class="swiper-slide"><a href="/apple"><img src="build/assets3/img/clients/harper collins.png"
								class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="/hp"><img src="build/assets3/img/clients/Intrínseca.png"
								class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="/lenovo"><img src="build/assets3/img/clients/panini.jfif"
								class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="/acer"><img src="build/assets3/img/clients/pinguim.png"
								class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="/dell"><img src="build/assets3/img/clients/Rocco.png"
								class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="/msi"><img src="build/assets3/img/clients/Seguinte.jpg"
								class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="/gigabyte"><img src="build/assets3/img/clients/VReditora.png"
								class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a href="/logitech"><img src="build/assets3/img/clients/Suma.jpg"
								class="img-fluid" alt=""></a></div>
				</div>
				<div class="swiper-pagination"></div>
			</div>

		</div>
	</section><!-- End Clients Section -->

	<!-- ======= Services Section ======= -->
	<section id="services" class="services">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<a href="/Romance">
					<p>Romance</p><a>
						<a href="/Romance">
							<h2>Ver mais</h2><a>
			</div>

			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/ComoEuEraAntesDeVoce.png" alt="IMG-PRODUCT">

							<a href="/como_eu_era_antes_de_voce"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/como_eu_era_antes_de_voce"
									class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Como eu era antes de você
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/VermelhoBrancoeSangueAzul.png" alt="IMG-PRODUCT">

							<a href="/vermelho_branco_e_sangue_azul"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/vermelho_branco_e_sangue_azul"
									class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Vermelho branco e sangue azul
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/DepoisDeVoce.png" alt="IMG-PRODUCT">

							<a href="/depois_de_voce"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/depois_de_voce" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Depois de você
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/ContinênciaAoAmor.png" alt="IMG-PRODUCT">

							<a href="/continencia_ao_amor"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/continencia_ao_amor" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Continência ao amor
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="section-title">
				<a href="/Misterio">
					<p>Mistério</p><a>
						<a href="/Misterio">
							<h2>Ver mais</h2><a>
			</div>

			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/ACabana.png" alt="IMG-PRODUCT">

							<a href="/a_cabana"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/a_cabana" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									A cabana
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/AssasinatonoExpressodoOriente.png"
								alt="IMG-PRODUCT">

							<a href="/Assasinato_no_expresso_do_oriente"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/Assasinato_no_expresso_do_oriente"
									class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Assasinato no expresso do oriente
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/ATravessia.png" alt="IMG-PRODUCT">

							<a href="/a_travessia"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/a_travessia" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									A travessia
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/ENaoSobrouNenhum.png" alt="IMG-PRODUCT">

							<a href="/e_nao_sobrou_nenhum"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/e_nao_sobrou_nenhum" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									E não sobrou nenhum
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="section-title">
				<a href="/Aventura">
					<p>Aventura</p><a>
						<a href="/Aventura">
							<h2>Ver mais</h2><a>
			</div>

			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/AsTirasClassicasDaTurmaDaMonica.png"
								alt="IMG-PRODUCT">

							<a href="/as_tiras_classicas_da_turma_da_monica"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/as_tiras_classicas_da_turma_da_monica"
									class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									As tiras classicas da Turma da Mônica
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/TurmadaMônicaFolcloreBrasileiro.png"
								alt="IMG-PRODUCT">

							<a href="/turma_da_monica_folclore_brasileiro"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/turma_da_monica_folclore_brasileiro"
									class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Turma da Mônica Folclore Brasileiro
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/DiarioDeUmBanana.png" alt="IMG-PRODUCT">

							<a href="/diario_de_um_banana"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/diario_de_um_banana" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Diário de um Banana
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/DiarioDeUmBanana2.png" alt="IMG-PRODUCT">

							<a href="/diario_de_banana_rodrik_e_cara"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/diario_de_banana_rodrik_e_cara"
									class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Diário de um Banana 2 - Rodrick é o cara
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section-title">
				<a href="/Drama">
					<p>Drama</p><a>
						<a href="/Drama">
							<h2>Ver mais</h2><a>
			</div>

			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/ACulpaEDasEstrelas.png" alt="IMG-PRODUCT">

							<a href="/a_culpa_e_das_estrelas"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/a_culpa_e_das_estrelas"
									class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									A Culpa é das Estrelas
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/CidadesDePapel.png" alt="IMG-PRODUCT">

							<a href="/cidades_de_papel"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/cidades_de_papel" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Cidades de papel
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/OMeninodePijamaListrado.png" alt="IMG-PRODUCT">

							<a href="/o_menino_do_pijama_listrado"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/o_menino_do_pijama_listrado"
									class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									O Menino de pijama listrado
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/Livros/OSoleParaTodos.png" alt="IMG-PRODUCT">

							<a href="/o_sol_e_para_todos"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/o_sol_e_para_todos" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									O Sol é para todos
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="section-title">
				<a href="/Ficcao_cientifica">
					<p>Ficção Cientifica</p><a>
						<a href="/Ficcao_cientifica">
							<h2>Ver mais</h2><a>
			</div>

			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/AnimaisFantasticos.png" alt="IMG-PRODUCT">

							<a href="/animais_fantasticos"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/animais_fantasticos" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Animais Fantásticos
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/HarryPoterPF.png" alt="IMG-PRODUCT">

							<a href="/harry_poter_p_f"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/harry_poter_p_f" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Harry Poter - Pedra Filosofal
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/OsDiariosdoSemideus.png" alt="IMG-PRODUCT">

							<a href="/os_diarios_do_semideus"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/os_diarios_do_semideus"
									class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									Os Diários do Semideus
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/OSoleaEstrela.png" alt="IMG-PRODUCT">

							<a href="/o_sol_e_a_estrela"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/o_sol_e_a_estrela" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									O Sol e a Estrela
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="section-title">
				<a href="/Terror">
					<p>Terror</p><a>
						<a href="/Terror">
							<h2>Ver mais</h2><a>
			</div>

			<div class="row isotope-grid">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/ACasaAssombrada.png" alt="IMG-PRODUCT">

							<a href="/a_casa_assombrada"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/a_casa_assombrada" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									A Casa Assombrada
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/AEsperaDeUmMilagre.png" alt="IMG-PRODUCT">

							<a href="/a_espera_de_um_milagre"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/a_espera_de_um_milagre"
									class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									A Espera de um Milagre
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/ItACoisa.png" alt="IMG-PRODUCT">

							<a href="/it_a_coisa"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/it_a_coisa" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									It a coisa
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="build/assets2/images/produtos/OInstituto.png" alt="IMG-PRODUCT">

							<a href="/o_instituto"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver Mais
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="/o_instituto" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									O Instituto
								</a>
							</div>
						</div>
					</div>
				</div>
	</section><!-- End Services Section -->



	<!--===============================================================================================-->
	<script src="build/assets2/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="build/assets2/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="build/assets2/vendor/bootstrap/js/popper.js"></script>
	<script src="build/assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="build/assets2/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function () {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="build/assets2/vendor/daterangepicker/moment.min.js"></script>
	<script src="build/assets2/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="build/assets2/vendor/slick/slick.min.js"></script>
	<script src="build/assets2/js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script src="build/assets2/vendor/parallax100/parallax100.js"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="build/assets2/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function () { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="build/assets2/vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="build/assets2/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function (e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function () {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function () {
				swal(nameProduct, "Adicionado aos favoritos!", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function () {
				swal(nameProduct, "Adicionado aos favoritos!", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
	<!--===============================================================================================-->
	<script src="build/assets2/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function () {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function () {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="build/assets2/js/main.js"></script>
	@endsection