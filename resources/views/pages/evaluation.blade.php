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
            <h2>Evaluation</h2>
            <p><a href="{{route('index')}}">Accueil</a> - Evaluation </p>
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
              
                <section class="col-lg-7 col-md-12 mt-5">

       <div class="mt-5 text-center">
                        <h2 style="margin-bottom: 5px" class=""><span class="fw-bold" style="color: blue">Apprenez maintenant si vous êtes admissible à l'immigration </span></h2>
                        <h1 class="fw-bold"><span style="color: blue">canadienne</span></h1>
              
                        <div class="col-lg-30">
                          <p style="color: blue">
                            Nos professionels de l’immigration qualifiés peuvent répondre à vos questions et élaborer une feuille de route pour vous afin d’atteindre vos objectif en matiere d’immigration
                        </p>
                     
             <ol>
                <li>
                    <span>Remplissez le formulaire d’évaluation ci-dessous et nous vous répondrons dans les 24 heures</span>
                </li>
                <li>
                    <span>Planifiez votre consultation</span>
                </li>
                <li>
                    <span>Découvrez si vous êtes éligible et vos prochaines étapes</span>
                </li>
            </ol>  
                        </div>
</div> <br><br>
                       <h1 class="fw-bold" style="color: blue ">Commencer ici</h1> 
                       <p>Remplissez ce formulaire (il faut moins d’une minute pour le remplir) et dans un délai d’un jour ouvrable (souvent beaucoup plus rapide), nous vous contacterons pour planifier votre consultation en immigration .</p>
               
                   
                </section>

                <section class="col-lg-5 d-none d-md-block">
                    <div class="card mb-3">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ny3iznrppnU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <a href="https://www.youtube.com/embed/Ny3iznrppnU">
                            <img src="{{asset('/images/download_video.jpg')}}" alt="">
                        </a>
                    </div>
                  </section>

        </main>
      </div>
  
  </main><!-- End #main -->

@endsection

