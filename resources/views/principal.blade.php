
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Musica Moz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link rel="icon" href="{{ URL::asset('img/favicon.png') }}"> -->
  <!-- <link rel="apple-touch-icon" href="{{ URL::asset('img/apple-touch-icon.png') }}"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  

  <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendor/swiper/swiper-bundle.min.css') }}">

  

  <!-- Template Main CSS File -->


  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="#">MusicaMoz</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Musica</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Album</a></li>
          
          
          
    
          <li class="dropdown"><a href="#"><span>Genero</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Marrabenta</a></li>
              <li><a href="#">Pandza</a></li>
              <li><a href="#">Kizomba</a></li>
              <li><a href="#">Gospel</a></li>
            </ul>

            <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
       
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
      
        <div class="carousel-container">
        

          <h2 class="animate__animated animate__fadeInDown">Bem Vindo à <span>MusicaMoz</span></h2>
          <p class="animate__animated fanimate__adeInUp">Musica Moz é um site que visa promover e vender 
          música moçambicana.</p>
          
          
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ler Mais</a>
        </div>
      </div>


      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <!-- <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg> -->

  </section><!-- End Hero -->

  <main id="main">

    
<!-- ===== Pesquisar==== -->
<!-- <section id="pesquisar">

<form class="navbar-form navbar-left" role="search" action="{!! url('/pesquisar') !!}" method="post" style="margin-left: 25%;margin-bottom: 3%;">

    <div class="form-group">
      {!! csrf_field() !!}
      <input type="text" name="texto" class="form-control" placeholder="Pesquisar" style="width: 600px;">

    </div>
    
    </section> -->
<!-- ===Fim Pesquisar=== -->
    

    

    <!-- ======= Team Section ======= -->
    

    @extends('musica.parent')
    @section('main')
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Últimos Lançamentos</h2>
          
        </div>

        <div class="row">
        @foreach($data as $row)
        
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{ URL::to('/') }}/images/{{ $row->foto }}" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
              <h4>{{$row->artista}}</h4> 
               <span>{{$row->titulo}}</span>
              <span>{{$row->preco}} MZN</span>
              
              
                
                 
                <audio controls style="width: 230px;  header:100px;">
  		          <source src="{{ URL::to('/') }}/audios/{{ $row->audio }}" type="audio/mpeg" >
                </audio>
                </span>
                <a href="{{ route('musica.show', $row->id) }}" class="btn btn-default" >Ver Mais</a>
              </div>
            </div>
          </div>


    
          
          @endforeach
      </div>
    </section>
   
    <!-- End Team Section -->
    
    

</div>


  



    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Perguntas Frequentes</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">O que é Musica Moz? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
              Musica Moz é um site que visa promover e vender  música moçambicana através da carteira móvel M-pesa.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Como faço para publicar minha música? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
              Para ter a sua música no nosso site vá ate a aba  contacto e preencha o formulário seguindos os passos dados.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Como comprar as musicas? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
              Para comprar as musicas…
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Qual é a vantagem de vender no Musica Moz? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
              A vantagem de vender…
              </p>
            </div>
          </li>

          

  
        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

 <!-- ======= About Section ======= -->
 <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Sobre</h2>
          <p>Quem Somos</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
            Musica Moz é um site que visa promover e vender  música moçambicana através da carteira móvel M-pesa.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Facilitar o Processo de Venda de Musica</li>
              <li><i class="ri-check-double-line"></i> Promover e Divulgar a Musica Mocambicana</li>
              <li><i class="ri-check-double-line"></i> Promover e Divulgar a Musica Mocambicana</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            O site MusicaMoz é um projecto moambicano de músicas online que tem como objetivo ajudar artistas e gravadoras no início de carreira a conseguir uma receita maior com a comercialização de suas músicas. 
            Fundado em 2021, por Helia Cossa e Dercio Pale, a mecânica da proposta é que os responsáveis pela produção das faixas de música controlem como serão feitas as vendas, estipulando o próprio valor,
             oferecendo a opção de pagar mais(caso o comprador queira incentivar o seu artista favorito).
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contacto</h2>
          <p>Contacte-Nos</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localização:</h4>
                <p>Mocambique, Maputo, Ferroviário Nr. 4213  </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@musicamoz.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Celular:</h4>
                <p>+258840394038</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Mensagem Enviada, Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Menssagem</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MusicaMoz</h3>
      <!-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> -->
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MusicaMoz</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="#">HAFC & PALE</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  

  <script src="{{ URL::asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ URL::asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  
  

  <!-- Template Main JS File -->

  <script src="{{ URL::asset('js/main.js') }}"></script>
  

</body>

</html>
@endsection