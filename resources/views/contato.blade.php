@extends('layouts.app')

@section('page')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1></h1>
        </div>
        <a href="/#"><img src="build/assets3/img/Logo/contato.png" class="img-menu"></a>
      </div>

      
  </section><!-- End Hero -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compass - Contato</title>

</head>

<body>
    <section class="professional_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="detail-box">
                        <h2>
                            Faça uma Diferença, Doe Livros
                        </h2>
                        <h2>
                            Como Doar Livros:
                        </h2>
                        <h1>
                            Passo 1: Entre em Contato
                        </h1>
                        <p>
                            Para iniciar o processo de doação de livros, pedimos que você entre em contato conosco via
                            e-mail.<br>Você pode nos enviar um e-mail para CompassSuporte@gmail.com com o assunto "Doação de
                            Livros". Nossa equipe estará pronta para responder e auxiliá-lo em todo o processo.
                        </p>
                        <h1>
                            Passo 2: Detalhes da Doação
                        </h1>
                        <p>
                            Após entrar em contato conosco, discutiremos os detalhes da sua doação, como a quantidade de
                            livros, o estado em que se encontram e quaisquer outras informações relevantes. Isso nos
                            ajudará a entender melhor como suas doações podem ser utilizadas para apoiar nossa missão.
                        </p>
                        <h1>
                            Passo 3: Agende sua entrega com o Donatário
                        </h1>
                        <p>
                            Dependendo da sua localização e das condições da sua doação, discutiremos as opções de
                            coleta ou entrega. Faremos o possível para tornar o processo de doação o mais conveniente
                            para você.
                        </p>
                        <h1>
                            Passo 4: Celebre sua Contribuição
                        </h1>
                        <p>
                            Após a conclusão da doação, agradecemos sinceramente pela sua contribuição para a promoção
                            da leitura e do conhecimento. Sua doação fará a diferença na vida de muitas pessoas e será
                            uma parte valiosa do nosso projeto.<br>Na Geek.Me, acreditamos que cada livro doado é
                            uma oportunidade de mudar vidas. Se você tem livros que não são mais utilizados, considere
                            doá-los e ajudar a espalhar a magia da leitura.<br>Obrigado por se juntar a nós nessa missão!
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="build/assets3/img/Logo/doacao_livro.jpg" alt="">
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
        border-radius: 20px;
    }

    .professional_section .detail-box h2 {
        text-transform: uppercase;
        font-weight: bold;
        color: #2947a1;
        font-size: 20px;
    }

    .professional_section .detail-box h1 {
        text-transform: uppercase;
        font-weight: bold;
        color: #2947a1;
        font-size: 15px;
    }

    .professional_section .detail-box p {
        margin-top: 10px;
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