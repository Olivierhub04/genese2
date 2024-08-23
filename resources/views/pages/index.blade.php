@extends('welcome')

@section('content')

  
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/images/background.jpeg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Genese d'immigration sarl</h1>
        <button class="btn btn-danger" type="submit">
          <button type="button" class="btn btn-primary button7 button8" style="border-radius: 50px;">Prendre rendez-vous <i class="fa-solid fa-arrow-right"></i></button>
        </button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/background 3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Genese d'immigration sarl</h1>
        <button class="btn btn-success" type="submit">
          <button type="button" class="btn btn-primary button9 button10  " style="border-radius: 50px;">Prendre rendez-vous <i class="fa-solid fa-arrow-right"></i></button>
        </button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/background 8.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Genese d'immigration sarl</h1>
        <button class="btn btn-success" type="submit">
          <button type="button" class="btn btn-primary button11 button12" style="border-radius: 50px;">Prendre rendez-vous <i class="fa-solid fa-arrow-right"></i></button>
        </button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
</div>

    <div class="row">
        
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="{{asset('assets/images/canada-flag-background-vector.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body" style="color: black;">
                  <h2 text-center>Contactez nous  <span style="justify-content:center">maintenant</span> </h2>
                  <button type="button" class="btn btn-light btn-lg btn-outline-danger" style="border-radius: 50px; border-color: red;">Commencer <i class="fa-solid fa-arrow-right"></i></button>
              </div>
          </div>
      </div>

        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('assets/images/canada-flag-background-vector.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body" style="color: black;">
                    <h2 text-center>Ouvrir votre <span style="justify-content: center">dossier</span> </h2>
                    <button type="button" class="btn btn-light btn-lg btn-outline-danger" style="border-radius: 50px; border-color: red;">Commencer <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('assets/images/canada-flag-background-vector.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body" style="color: black;">
                    <h2 text-center>Obtenez votre visa</h2>
                    <button type="button" class="btn btn-light btn-lg btn-outline-danger" style="border-radius: 50px; border-color: red;">Commencer <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('assets/images/canada-flag-background-vector.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body" style="color: black;">
                    <h2 text-center>Voyage pour le canada</h2>
                    <button type="button" class="btn btn-light btn-lg btn-outline-danger" style="border-radius: 50px; border-color: red;">Commencer <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    
<div class="container" id="encre1">
  <main class="row">
        
          <section class="col-lg-5 d-none d-md-block">
            <div class="card mt-3">
                <div class="col"><p class="nombre fs-1 fw-bold" data-value="1000 +">1,000 +</p></div>
                <p>clients satisfaits</p>
              <img src="{{asset('assets/images/genese.jpg')}}" class="card-img-top" alt="...">
            </div>
          </section>

          <section class="col-lg-7 col-md-12 mt-5">
            <h2 class="d-flex justify-content-center fw-bold"> <span style="color: red">L’immigration Canadienne n’a jamais été Aussi facile !</span></h2>
            <p class="p mt-3" style="text-align :center;">Le cabinet d’immigration ma vie au Canada travaille exclusivement avec des consultants en immigration réglementés du Canada (CRIC) qui sont membres en règle du Collège des consultants en immigration et en citoyenneté (CICC). Cliquer ici pour vérifier l’accréditation de nos consultantes firmes en immigration. Madame Floriane Annie KOUAM MALIEDJE est consultante R526930 du CCIC depuis janvier 2017. Cette juriste de formation a immigré au Canada en 2014 comme travailleur qualifié résidente permanente du Québec, et a fondé le Cabinet d’immigration Ma vie au Canada en 2016. Ceci après l’obtention de son diplôme comme consultante en immigration en 2015, au Collège Lasalle de Montréal.

              Elle a travaillé de 2017 à 2020 comme fonctionnaire du gouvernement du Québec et a quitté la fonction publique comme Inspectrice-enquêteuse des Normes du travail du Québec. Elle est mère de 2 enfants et milite pour l’intégration rapide des immigrants au Canada.</p>
          </section>

  </main>
</div>


      <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

  <div class="container">
    <h5 class="d-flex justify-content-center "><span style="color: red">Services</span></h5>
    
    <div class="row gy-3">
     
      <h2 class="d-flex justify-content-center mt-10 fw-bold">Les champs sur</h2> 
      <h2 class="d-flex justify-content-center mt-10 fw-bold">lesquels nous</h2>
      <h2 class="d-flex justify-content-center mt-10 fw-bold">servons</h2>

      <section class="col-lg-4 col-md-6">
        <div class="card mt-5">
            <h2>Accompagnement</h2>
            <p>Que vous offre le service d'accompagnement au Canada ?</p>
            <p>Lire plus</p>
        </div>
      </section>

      <section class="col-lg-4 col-md-6">
        <div class="card mt-5">
            <h2>Entree express</h2>
            <p>Que vous offre le service d'accompagnement au Canada ?</p>
            <p>Lire plus</p>
        </div>
      </section>
      <section class="col-lg-4 col-md-6">
        <div class="card mt-5">
            <h2>Résidence permanente</h2>
            <p>Comment fonctionne la résidence permanente ?</p>
            <p>Lire plus</p>
        </div>
      </section>
      <section class="col-lg-4 col-md-6">
        <div class="card mt-5">
            <h2>Parrainage</h2>
            <p>Comment fonctionne le parrainage canadien pour époux?</p>
            <p>Lire plus</p>
        </div>
      </section>
      <section class="col-lg-4 col-md-6">
        <div class="card mt-5">
            <h2>Permis d’études</h2>
            <p>Obtenir des avantages en étudiant au Canada</p>
            <p>Lire plus</p>
        </div>
      </section>
      <section class="col-lg-4 col-md-6">
        <div class="card mt-5">
            <h2>Visa Visiteur</h2>
            <p>C'est quoi un Visa touristes pour le Canada ?</p>
            <p>Lire plus</p>
        </div>
      </section>
      <section class="col-lg-4 col-md-6">
        <div class="card mt-5">
            <h2>Permis de travail</h2>
            <p>Comment fonctionnent les permis de travail canadiens?</p>
            <p>Lire plus</p>
        </div>
      </section>
      

    </div>
  </div>
</footer><!-- End Footer -->


    <div class="container">
      <main class="row">
              <h1 class="d-flex justify-content-center mt-5 fw-bold"><span style="color: blue">Ils nous ont fait</span> <span style="color: red">Confiance</span> </h1>

                        <section class="col-lg-7 col-md-12 mt-5">
                          
                         <div class="col-lg-6 col-md-4 ">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Votre nom*">
                            </div>
                          </div>
            
                          <div class="col-lg-6 col-md-4">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Numéro de téléphone..*">
                            </div>
                          </div>
          
            
                            <label for="exampleFormControlInput1" class="form-label">Choisir un service</label>
            
                               
                                                <div style="margin-bottom: 20px" class="accordion-body">
                                                           
                                                  <select id="continent" class="form-select" aria-label="Default select example">
                                                    <option value=" Entree Express ">Entree Express </option>
                                                    <option value="Résidence permanente au Quebec"> Résidence permanente au Quebec</option>
                                                    <option value="Parrainage<">Parrainage</option>
                                                    <option value="Permis d'etude Canadiens">Permis d'etude Canadiens</option>
                                                    <option value="Visa Visiteur">Visa Visiteur</option>
                                                    <option value="Permis de travail">Permis de travail</option>
                                                    <option value="Aide a L'integration">Aide a L'integration</option>
                                                    <option value="Aide a L'integration">Propriétaire Exploitant LMIA</option>
                                                  </select>
                                            
                                              </div>
                    
                        <div style="margin-bottom: 100px" class="col-lg-6 col-md-4">
                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label"></label>
                              <textarea class="form-control w-100" id="exampleFormControlTextarea1" rows="3" placeholder="Message.."></textarea>
                            </div>
                          </div>
            
                          
                          <div class="col-lg-6 col-md-4">
                           
                              <button type="button" class="btn btn-primary button7 button8" style="border-radius: 50px;">Obtenir un RDV </button> 
                          </div>
                        
                        </section>  
                        
                        <section class="col-lg-5 d-none d-md-block">
                          <div>
                                      <p>        
                                        Nos bureaux sont situés sur les territoires Canadiens, Camerounais, ivoiriens
                                      </p>
             
                        <div style="margin-bottom: 100px" class="col-lg-6 col-md-4">
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>
                            <textarea class="form-control w-100" id="exampleFormControlTextarea1" rows="3" placeholder="Assistance clientèle 24 heures sur 24, 7 jours sur 7"></textarea>
                            </div>
                        </div>

                        <div>
                          <button type="button" class="btn btn-danger button3 button4" style="border-radius: 30px;">Phone</button>
                      


                          <button type="button" class="btn btn-primary button7 button8" style="border-radius: 50px;">Mail</button>
                        </div>

                          </div>
                        </section>
      </main> 
    </div>    

    <div class="container">
      <main class="row">
              <h4 class="d-flex justify-content-center mt-5"> <span style="color: red">Derniere actualite</span>  </h4>
              <h1 class="d-flex justify-content-center mt-10 fw-bold"><span style="color: blue">Apprenez-en davantage grâce</span></h1>
              <h1 class="d-flex justify-content-center mt-10 fw-bold"><span style="color: blue">à notre blog !</span></h1>
      </main> 

      <div class="row">

        <div class="col-3">
            <div class="card mb-3">
                <div class="card-body" style="color: black;">
                  <button class="btn btn-danger w-2">19 Juin</button>
                    <img src="{{asset('assets/images/background 5.jpg')}}" class="card-img-top" alt="...">
                </div>
            </div>    
        </div>
        <div class="col-3">
            <div class="card mb-3">
                <div class="card-body" style="color: black;">
                  <button type="button" class="btn btn-secondary w-2">BUSINESS</button>
                   <h5><a href="">Trouver un emploi au Canada:ce que vous devez savoir en tant que nouvel arrivant</a></h5>
                    <button type="button" class="btn btn-danger button3 button4" style="border-radius: 50px;">Lire plus</button>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card mb-3">
                <div class="card-body" style="color: black;">
                  <button type="button" class="btn btn-danger w-2">20 Mai</button>
                  <img src="{{asset('assets/images/background 8.jpg')}}" class="card-img-top" alt="...">
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card mb-3">
                <div class="card-body" style="color: black;">
                  <button type="button" class="btn btn-secondary w-2">BUSINESS</button>
                  <h5> <a href=""> Ai-je besoin d'un test de langue pour immigrer au Canada?</a></h5>
                  <button type="button" class="btn btn-danger button5 button6" style="border-radius: 50px;">Lire plus</button>
                </div>
            </div>
        </div>
    </div>
    
    </div> 

@endsection





 

