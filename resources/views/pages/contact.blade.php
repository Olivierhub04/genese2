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
            <h1 class="fw-bold">Contact</h1 >
            <p><a href="{{route('index')}}">Accueil</a> - Contact</p>
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
      <div class="row">
        <div class="mt-5 text-center">
          <h1 style="margin-bottom: 60px" class=""><span class="fw-bold">Nos adresses dans le monde</span></h1>
        </div>
    </div>
  </div>

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
            
          
             <h2>Canada(siege social)</h2>


          
              
          
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
          
            <section class="col-lg-5 d-none d-md-block">
              <div class="card mb-3">
                <img style="width: 100%" height="500px" src="{{asset('assets/images/genese.jpg')}}" class="card-img-top" alt="...">
              </div>
            </section>
  
            <section class="col-lg-7 col-md-12 mt-5">
             <h3 class="fw-bold">Contactez-nous pour votre projet.</h3>
               
             <div class="col-lg-6 col-md-4 ">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">votre nom</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
              </div>

              <div class="col-lg-6 col-md-4">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Votre numéro de téléphone</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
              </div>

              <div class="col-lg-6 col-md-4">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Votre adresse de messagerie</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
              </div>

                <label for="exampleFormControlInput1" class="form-label">Votre preoccupation</label>

                   
                                    <div style="margin-bottom: 20px" class="accordion-body">
                                               
                                      <select id="continent" class="form-select" aria-label="Default select example">
                                        <option value="  j'ai besoin de travail pour la canada ">  j'ai besoin de travail pour la canada </option>
                                        <option value="j'ai besoin d'un visa de travail pour le canada">j'ai besoin d'un visa de travail pour le canada</option>
                                        <option value="jai des problemes a la frontiere canadienne">jai des problemes a la frontiere canadienne</option>
                                        <option value="Ma demande d'immigration a été refuséé">Ma demande d'immigration a été refuséé</option>
                                        <option value="Carte de résidence permanente">Carte de résidence permanente</option>
                                        <option value="Immigration d'entreprise">Immigration d'entreprise</option>
                                        <option value="Immigration d'entreprise et des investisseurs au canada">Immigration d'entreprise et des investisseurs au canada</option>
                                        <option value="Appels en matiere d'immigration au canada">Appels en matiere d'immigration au canada</option>
                                      </select>
                                
                                  </div>

              <div style="margin-top: 10px">
                Quelle est votre question la plus importante concernant 
                <p>
                  l'immigration?
                </p>
              </div>
           
        
            <div style="margin-bottom: 100px" class="col-lg-6 col-md-4">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label"></label>
                  <textarea class="form-control w-100" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                </div>
              </div>

              
              <div class="col-lg-6 col-md-4">
                <button type="button" class="btn btn-danger ">Envoyer</button>
              </div>
            
            </section>

    </main>
  </div>

 




    <!-- ======= Chefs Section ======= -->
    
  </main><!-- End #main -->

@endsection

