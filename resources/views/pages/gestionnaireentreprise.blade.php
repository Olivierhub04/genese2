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
            <h3>Formulaire Gestionnaires d’entreprise</h3>
            <p> <a href="{{route('index')}}">Accueil</a> - Formulaire Gestionnaires d’entreprise</p>
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
   

    <div class="container">
   
          <main class="row d-flex justify-content-center">
            <div class="" id="encre3"></div>
    
    
              <form class="row g-3 justify-content-center form mt-5">
     
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                 Entrez Vos coordonnees  <center>Profil personnel</center>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
    
    
                 <div class="col-lg-6 col-md-4 mb-3">
                       <label for="nom" class="form-label"></label>
                        <input type="text" class="form-control" id="nom" placeholder="First Name">
                        <div id="errorNom" class="invalid-feedback"></div>
                  </div><br>
    
                  <div class="col-lg-6 col-md-4 mb-3">
                           <label for="email" class="form-label"></label>
                           <input type="text" class="form-control" id="email" placeholder="Last Name ">
                           <div id="errorEmail" class="invalid-feedback"></div>
                  </div><br>
    
                  <div class="col-lg-6 col-md-4 mb-3">
                          <label for="tel" class="form-label"></label>
                          <input type="text" class="form-control " id="tel" placeholder="Email Address">
                          <div id="errorTel" class="invalid-feedback"></div>
                 </div><br>
    
                
                 <div class="col-lg-6">
                  <label for="date" class="form-label"></label>
                  <input type="text" class="form-control " id="tel" placeholder="Phone">
                      <div id="errorColor" class="invalid-feedback"></div>
                </div>
                  
                 <div class="boutton col-lg-8">
                           <button type="submit" class="btn btn-secondary w-100 commander">NEXT</button>
                 </div> 
            </form>            
          </main>
      </div>
  </main><!-- End #main -->

@endsection

