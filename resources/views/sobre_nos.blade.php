@extends('layouts.app')

@section('page')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1></h1>
        </div>
        <a href="/#"><img src="build/assets3/img/Logo/logoCompass(bemvindo).png" class="img-menu"></a>
      </div>

      
  </section><!-- End Hero -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compass - Sobre Nós</title>

</head>

<body>
  <section class="professional_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="build/assets3/img/Logo/livrosempilhados.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="detail-box">
            <h2>
              Bem-vindo à Compass
            </h2>
            <p>
              A Compass é uma organização com um propósito nobre: promover o amor pela leitura, o compartilhamento de
              conhecimento e a construção de um mundo onde todos tenham acesso a livros, independentemente de sua
              situação econômica. Fundada com a visão de tornar a leitura e a educação mais acessíveis para todos, a
              Compass lançou o site geek.me, uma plataforma inovadora que conecta pessoas dispostas a doar livros com
              aquelas que desejam recebê-los.
            </p>
            <h2>
              geek.me - O Portal da Generosidade Literária
            </h2>
            <p>
              Em nosso site geek.me, acreditamos que a leitura não deve ser um privilégio, mas um direito fundamental.
              Nosso objetivo é criar uma comunidade vibrante onde os amantes da leitura e os defensores da educação
              podem se unir para fazer a diferença na vida de outras pessoas. O geek.me permite que você doe livros que
              não precisa mais, dando-lhes uma segunda vida e proporcionando alegria a outros ávidos leitores. Da mesma
              forma, se você está ansioso para mergulhar em novos mundos literários, pode encontrar livros incríveis
              doados por pessoas generosas em nossa plataforma.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<style>
  .Texto {
    color: #fff;
  }

  .professional_section {
    background-color: #fff;
  }

  .professional_section .row {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .professional_section .img-box img {
    width: 100%;
    border-radius:20px;
    margin-left:-60px;
  }

  .professional_section .detail-box h2 {
    text-transform: uppercase;
    font-weight: bold;
    color: #2947a1;
    font-size: 25px;
  }

  .professional_section .detail-box p {
    margin-top: 20px;
  }

  .professional_section .detail-box a {
    margin-top: 25px;
    display: inline-block;
    font-family: 'Merriweather Sans', sans-serif;
    text-transform: uppercase;
    padding: 10px 45px;
    background-color: #ff8a1d;
    border: 1px solid #ff8a1d;
    border-radius: 2px;
    color: #ffffff;
  }

  .professional_section .detail-box a:hover {
    background-color: transparent;
    color: #ff8a1d;
  }
</style>
@endsection