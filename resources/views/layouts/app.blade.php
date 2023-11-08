<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GeekMe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('build/assets3/img/Logo/Logo1.png')}}" rel="icon">
  <link href="build/assets3/img/Logo1.png" rel="LOGO-1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('build/assets3/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('build/assets3/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('build/assets3/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('build/assets3/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('build/assets3/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('build/assets3/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('build/assets3/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('build/assets3/css/style.css')}}" rel="stylesheet">
  
</head>

<body>


 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <a href="/" class="logo me-auto me-lg-0"><img src="build/assets3/img/Logo/Logo2.png" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Menu</a></li>
          <li class="dropdown"><a href="#"><span>Categorias</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/Romance">Romance</a></li>
              <li><a href="/Misterio">Mistério</a></li>
              <li><a href="/Aventura">Aventura</a></li>
              <li><a href="/Drama">Drama</a></li>
              <li><a href="/Ficcao_cientifica">Ficção cientifica</a></li>
              <li><a href="/Terror">Terror</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Autores</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/jk_rowling">J.K. Rowling</a></li>
              <li><a href="/stephen_king">Stephen King</a></li>
              <li><a href="/jeff_kinney">Jeff Kinney</a></li>
              <li><a href="/rick_riordan">Rick Riordan</a></li>
              <li><a href="/agatha_christie">Agatha Christie</a></li>
              <li><a href="/john_green">John Green</a></li>
              <li><a href="/jojo_moyes">Jojo Moyes</a></li>
              <li><a href="/william_p_young">William P. Young</a></li>
              <li><a href="/mauricio_de_sousa">Mauricio de Sousa</a></li>
              <li><a href="/john_boyne">John Boyne</a></li>
              <li><a href="/casey_mcquiston">Casey McQuiston</a></li>
              <li><a href="/harper_lee">Harper Lee</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Editoras</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/arqueiro">Arqueiro</a></li>
              <li><a href="/companhia_das_letras">Companhia das letras</a></li>
              <li><a href="/globo_livros">Globo livros</a></li>
              <li><a href="/harper_collins">Harper collins</a></li>
              <li><a href="/Intrinseca">Intrínseca</a></li>
              <li><a href="/panini">Panini</a></li>
              <li><a href="/penguin_books">Penguin books</a></li>
              <li><a href="/rocco">Rocco</a></li>
              <li><a href="/seguinte">Seguinte</a></li>
              <li><a href="/suma">Suma</a></li>
              <li><a href="/vr_editora">VR editora</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/sobre_nos">Sobre Nós</a></li>
          <li><a class="nav-link scrollto" href="/contato">Contato</a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
                
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      @auth
      
      <a href="/contato" class="get-started-btn scrollto">Doe Aqui!</a>

      <form action="/logout" method="POST">
        @csrf 
      <a href="/logout" class="get-started-btn scrollto" 
        onclick="event.preventDefault();
        this.closest('form').submit();">
        Sair
      </a>
      </form>

      @endauth

      @guest
      <a href="/login" class="get-started-btn scrollto">Login</a>
      <a href="/register" class="get-started-btn scrollto">Registo</a>
      @endguest

    </div>
  </header><!-- End Header -->

  <main id="main">

  @yield('page')

  </main>

  <footer id="footer">
    <br>
    <center>
      <img src="build/assets3/img/Logo2.png" height="10%" width="10%">
    </center>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('build/assets3/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('build/assets3/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('build/assets3/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('build/assets3/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('build/assets3/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('build/assets3/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('build/assets3/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('build/assets3/js/main.js')}}"></script>

</body>

</html>