@extends('welcome')

@section('content')

  <main id="main">


     <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
        </div>
  
        <div class="col-lg-3 col-md-6 footer-links d-flex">
         
          <div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <div>
            <h1>Nouvelles sur l’immigration</h1>
            <p><a href="{{route('index')}}">Accueil</a> - Nouvelles sur l’immigration</p>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6 footer-links">
        </div>
  
      </div>
    </div>
  
    <div class="container">
      <div class="copyright">
     
      </div>
      <div class="credits">
      </div>
    </div>
  
  </footer><!-- End Footer -->
  <!-- End Footer -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
                    <h6> <span class="h">Actualités</span> </h6>
              <h1 class="fw-bold">
                En savoir plus sur notre </h1>
                <h1 class="fw-bold">blog </h1>
               
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <p>
                Notre blog vous propose des nouveautés indispensables pour vous donner une réponse satisfaisante aux dernières actualités liées à l’immigration Canadienne
            </p>
            <div class="content ps-0 ps-lg-5">
              
              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <div class="container">
        <main class="row">
              
        </main> 
  
        <div class="row">
  
          <div class="col-3">
              <div class="card mb-3">
                  <div class="card-body" style="color: black;">
                      <img src="{{asset('assets/images/background 5.jpg')}}" class="card-img-top" alt="...">
                  </div>
                  <h5>
                    Trouver un emploi au Canada:ce que vous devez savoir en tant que nouvel arrivant
                  </h5>
              </div>    
          </div>
  
  
          <div class="col-3">
              <div class="card mb-3">
                  <div class="card-body" style="color: black;">
                    <img src="{{asset('assets/images/background 8.jpg')}}" class="card-img-top" alt="...">
                  
                    <h5>
                        Ai-je besoin d'un test de langue pour immigrer au Canada?
                    </h5>
                    
                  </div>
              </div>
          </div>

          <div class="col-3">
            <div class="card mb-3">
                <div class="card-body" style="color: black;">
                    <img src="{{asset('assets/images/background 3.jpg')}}" class="card-img-top" alt="...">
                 
                  <h5>
                      Je suis resident permanent canadien,combien de temps dois-je reellement rester au Canada?
                  </h5>
                 
                </div>
            </div>
        </div>
      </div>
      
      </div> 
  

 
   
  </main>

@endsection

