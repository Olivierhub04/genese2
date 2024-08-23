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
            <h3>Formulaire d’immigration pour professionnels et travailleurs avec conjoint</h3>
            <p><a href="{{route('index')}}">Accueil</a> - Formulaire d’immigration pour professionnels et travailleurs avec conjoint</p>
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
              Profil personnel  <center>-Competences linguistiques</center>    <span>Completer votre evaluation ci-dessous</span>       
             
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>


             <div class="col-lg-6 col-md-6 mb-3">

                   <label for="age" class="form-label">Selectionner votre age*</label>
                   

                    <div style="margin-bottom: 20px" class="accordion-body">
                                           
                      <select id="age" class="form-select" aria-label="Default select example">
                        <option  value=" 17ans"> 17ans</option>
                        <option value="18ans">18ans</option>
                        <option value="19ans">19ans</option>
                        <option value="20ans">20ans</option>
                        <option value="21ans">21ans</option>
                        <option value="22ans">22ans</option>
                        <option value="23ans">23ans</option>
                        <option value="24ans">24ans</option>
                        <option value="25ans">25ans</option>
                        <option value="26ans">26ans</option>
                        <option value="27ans">27ans</option>
                        <option value="28ans">28ans</option>
                        <option value="29ans">29ans</option>
                        <option value="30ans">30ans</option>
                        <option value="31ans">31ans</option>
                        <option value="32ans">32ans</option>
                        <option value="33ans">33ans</option>
                        <option value="34ans">34ans</option>
                        <option value="35ans">35ans</option>
                        <option value="36ans">36ans</option>
                        <option value="37ans">36ans</option>
                        <option value="38ans">37ans</option>
                        <option value="39ans">38ans</option>
                      </select>
                
                  </div>

                  <div id="errorAge" class="invalid-feedback"></div>

              </div><br>
             
             <div class="col-lg-6 col-md-6 mb-3">

              <label for="pays" class="form-label">Pays de résidence*</label>
           
               <div style="margin-bottom: 20px" class="accordion-body">
                                      
                 <select id="pays" class="form-select" aria-label="Default select example">
                   <option  value=" Cameroun"> Cameroun</option>
                   <option value="Cote d'ivoire">Cote d'ivoire</option>
                   <option value="Nigeria">Nigeria</option>
                   <option value="France">France</option> 
                 </select>
           
             </div>
             <div id="errorPays" class="invalid-feedback"></div>

         </div><br>

              <div class="col-lg-6 col-md-6 mb-3">
                     
                      <label for="sexe">Avez-vous des enfants qui ont moins de 22 ans? *</label><br><br>
                      <input type="radio" name="sexe" id="oui"><label for="oui">oui</label>
                      <input type="radio" name="sexe" id="non"><label for="non">non</label><br><br>
                        
                      <div id="errorSexe" class="invalid-feedback"></div>
             </div><br>

             <div class="col-lg-6 col-md-6 mb-3">
                     
              <label for="civil">État civil *</label><br><br>
              <input type="radio" name="sexe" id="elibataire"><label for="celibataire">Celibataire</label>
              <input type="radio" name="sexe" id="marié"><label for="marié">Marié</label>
              <input type="radio" name="sexe" id="conjoint(e)de fait"><label for="conjoint(e)de fait">Conjoint(e) de fait</label><br><br>
                
              <div id="errorCivil" class="invalid-feedback"></div>
     </div><br>
         
            <div class="boutton col-lg-8">
              <button type="submit" class="btn btn-secondary w-100 commander">NEXT</button>
    </div>

        </form>            
      </main>
  </div>
  </main><!-- End #main -->

@endsection

