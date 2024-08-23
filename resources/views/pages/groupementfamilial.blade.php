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
            <h3>Formulaire Groupement familial</h3>
            <p><a href="{{route('index')}}">Accueil</a> - Formulaire Groupement familial</p>
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
    <div class="container" id="encre3">
    
      <main class="row justify-content-center">
       
        <form class="row g-3 justify-content-center form mt-5" style="box-shadow: 5px 5px 5px gray;">
 
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Ques ce que vous aimez faire?  <center>Information sur le parrainage</center>       
             
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>


              <div class="col-lg-6 col-md-6 mb-3">
                     
                      <label for="sexe">Qu'est-ce que vous aimerez faire? **</label><br><br>
                      <input type="radio" name="sexe" id="je veux parrainer"><label for="je veux parrainer">je veux parrainer</label>
                      <input type="radio" name="sexe" id="je veux etre parrainer"><label for="je veux etre parrainer">je veux etre parrainer</label><br><br>
                        
                      <div id="errorSexe" class="invalid-feedback"></div>
             </div><br>

         
            <div class="boutton col-lg-8">
              <button type="submit" class="btn btn-secondary w-100 commander">NEXT</button>
    </div>

        </form>            
      </main>
  </div>
  
  </main><!-- End #main -->

@endsection

