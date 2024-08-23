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
            <h3>Immigrer au Canada</h3>
            <p><a href="{{route('index')}}">Accueil</a> - Immigrer au Canada</p>
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
          
            <section class="col-lg-5 d-none d-md-block">
              <div>
               <h5 class="fw-bold" style="color: blue">Etudier au CANADA</h5>
               <p>
                Vous devez présenter une demande pour étudier au Canada à titre d’étudiant étranger. Faites prolonger votre permis d’études et déterminez s’il est possible de travailler pendant vos études ou après avoir obtenu votre diplôme.
               </p>
               <h5 class="fw-bold" style="color: blue">
                Etudier au Québec</h5>
                <p>
                  Pour étudier au Québec vous devez :
                </p>
                <p>
                  1) Choisir un programme d’étude et un établissement d’enseignement;
                </p>
                <p>
                  2) Obtenir une admission à un programme d’études;
                </p>
                <p>
                  3) Obtenir un certificat d’acceptation du Québec (CAQ) pour des études;
                </p>
                <p>
                  4) Obtenir un permis d’études;
                </p>
                <p>
                  5) Obtenir une assurance maladie et hospitalisation.
                </p>
                <h5 class="fw-bold" style="color: blue">
                Programme des travailleurs qualifiés (fédéral)</h5>
                <p>
                  Ce programme s’adresse aux personnes qui ont une expérience de travail et qui voudraient immigrer au Canada de manière permanente. La détermination de l’admissibilité à ce programme est basée sur 6 critères :
                </p>
                <p>
                  1) Compétences linguistiques;
                </p>
                <p>
                  2) Études;
                </p>
                <p>
                  3) Expérience de travail
                </p>
                <p>
                  4) Âge;
                </p>
                <p>
                  5) Emploi au Canada réservé ou non;
                </p>
                <p>
                  6) Faculté d’adaptation.
                </p>
                <p>
                  Tous ces critères d’évaluation représentent un total de 100 points. Il faudrait atteindre au moins 67 points et répondre également à d’autres exigences pour être admissible à ce programme et soumettre votre profil.
                </p>
                <h5 class="fw-bold" style="color: blue">
                  Études</h5>
                  <p>
                    Si vous avez étudié au canada, vous devriez détenir un certificat, diplôme ou grade d’un établissement d’enseignement secondaire ou postsecondaire. Si vous avez étudié ailleurs, vous devez avoir une évaluation des diplômes d’études EDE, à des fins d’immigration, d’un organisme désigné, pour démontrer des équivalences à un certificat, un diplôme ou un grade d’un établissement d’enseignement secondaire ou postsecondaire. Le maximum de point est de 25.
                  </p>
                  <h5 class="fw-bold" style="color: blue">
                    Expérience de travail</h5>
                    <p>
                      Pour un maximum de 15 points, les valeurs prises en comptes sont le nombre d’années passées à faire un travail à temps plein, le genre de compétences, et le niveau de compétences A ou B de la classification nationale de professions de 2016.
                    </p>
                    <h5 class="fw-bold" style="color: blue">
                      Âge</h5>
                      <p>
                        La tranche d’âge qui confère le maximum de point est celle de 18 – 35 ans. Et plus l’âge est supérieur à 35 ans, moins il ne vaut de points. À partir de 47 ans et à moins de 18 ans, l’âge vaut 0 point
                      </p>
                      <h5 class="fw-bold" style="color: blue">
                        Emploi réservé au Canada</h5>
                        <p>
                          Noté sur un maximum de 10 points, vous pouvez obtenir des points à partir d’une offre d’emploi d’au moins 1 an, d’un employeur canadien.
                        </p>
                        <h5 class="fw-bold" style="color: blue">
                          Faculté d’adaptation</h5>
                          <p>        
                  Faculté d’adaptation
                  Elle est notée sur un maximum de 10 points, à partir d’un certain nombre d’éléments qui permettent de l’évaluer.
                          </p>
              </div>
            </section>
  
            <section class="col-lg-7 col-md-12 mt-5">
              
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
                                        <option value="  j'ai besoin d'un visa de travail pour le canada "> j'ai besoin d'un visa de travail pour le canada </option>
                                        <option value="j'ai des problemes a la frontiere canadienne">j'ai des problemes a la frontiere canadienne</option>
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
                  <textarea class="form-control w-100" id="exampleFormControlTextarea1" rows="3" placeholder=""></textarea>
                </div>
              </div>

              
              <div class="col-lg-6 col-md-4">
                <button type="button" class="btn btn-primary button1 button2 "><span>Envoyer</span></button>
              </div>
            
            </section>

    </main>
  </div>
   

 
   


  </main><!-- End #main -->

@endsection

