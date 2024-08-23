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
            <h1>Services</h1>
            <p><a href="{{route('index')}}">Accueil</a> - Services v.1</p>
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

       
    <div class="container" id="encre1">
      <main class="row">
            
              <section class="col-lg-5 d-none d-md-block ">

            <h6> <span class="h">Services</span> </h6>
        <h2 style="margin-top: 5px" class="fw-bold">
        We position our clients at the forefront of their field by </h2>
        <h2 class="fw-bold"> advancing an agenda. </h2>                 
                       
              </section>

              <section class="col-lg-5 d-none d-md-block">
                Easily apply to multiple jobs with one click! Quick Apply shows you recommended jobs based off your most recent search and allows you to apply to 25+ jobs in a matter of seconds!
                </section>

      </main>
    </div>

 
    <!-- ======= Chefs Section ======= -->
  
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
               
              </div>
              <div class="member-info">
                <h4 class="fw-bold">Entrée Express</h4>
                <p>Qu'est ce que le programme d'entree</p>
                 <p>express pour immigrer au Canada?</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
              </div>
              <div class="member-info">
                <h4 class="fw-bold">Résidence permanante</h4>
                <p>Comment fonctionne la Residence</p>
                 <p> permanente?</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
              </div>
              <div class="member-info">
                <h4 class="fw-bold">Permis d'etudes</h4>
                
                <p>Obtenir des avantages en etudiant </p>
                  <p> au Canada</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
  
  </main><!-- End #main -->

@endsection

