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
            <h1>FAQ</h1>
            <p> <a href="{{route('index')}}">Accueil</a> - FAQ </p>
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
       

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
                    <h6> <span style="fw-bold">FAQ</span> </h6>
               <h1 class="fw-bold">Vous pouvez en savoir plus en consultant les questions posées</h1> 
            </div>
           
          </div>
          <p>
            Vous pensez à l’immigration? Il y a de fortes chances que vous preniez une décision qui changera votre vie et qui pourrait durer jusqu’à la date d’expiration de votre permis de travail ou un déménagement permanent au Canada. Souvent, les gens font une recherche rapide sur le Web pour trouver des informations sur la façon de venir au Canada. Vous serez lié à des pages de sites, de vidéos, de blo
        </p>
          
          <div class="col-lg-4 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="call-us position-absolute">
                <div style="margin-bottom: 20px" class="accordion-body">
                                               
                    <select id="continent" class="form-select" aria-label="Default select example">
                      <option style="fw-bold" value=" Pourquoi dois-je embaucher quelqu’un pour aider?">Pourquoi dois-je embaucher quelqu’un pour aider?</option>
                       <p>Pour des raisons évidentes, c’est une question populaire.</p>
                        <p>L’immigration canadienne se déplace en ligne avec une attitude de</p>
                         <p>bricolage. Mais cela signifie également que vous comptez souvent</p>
                         <p>sur des informations tierces en espérant qu’elles s’appliquent à</p>
                         <p>votre situation spécifique.</p>

                         <p>L’ avocat en immigration évalue chaque client potentiel pour</p>
                        <p>établir des plans d’action que les deux parties parties</p>
                        <p>comprennent. Les cas d’immigration sont divisés en tâches</p>
                        <p>gérables, ce qui contribue à atténuer l’anxiété qui accompagne les</p>
                         <p>soumissions qui changent la vie.</p>
                    </select>
                </div>

                <div style="margin-bottom: 20px" class="accordion-body">
                                               
                    <select id="continent" class="form-select" aria-label="Default select example">
                      <option style="fw-bold" value=" Pourquoi dois-je embaucher quelqu’un pour aider?">Avec qui vais-je travailler?</option>
                       <p>Un avocat qualifié en immigration et son équipe sont affectés à votre dossier pour vous aider à obtenir les informations et les documents nécessaires. Ils ont navigué dans les interactions avec des milliers de clients et ont assuré une touche personnelle sur mesure à chaque cas.</p>  
                    </select>
                </div>

                <div style="margin-bottom: 20px" class="accordion-body">
                                               
                    <select id="continent" class="form-select" aria-label="Default select example">
                      <option style="fw-bold" value=" Pourquoi dois-je embaucher quelqu’un pour aider?">Comment terminons-nous le processus lorsque je suis à l’étranger?</option>
                       <p>Nous avons aidé des personnes de plus de 44 pays et nous utilisons une variété de technologies pour vous voir, vous parler et vous mettre à l’aise.</p>
                       
                       <p>Nous vous enverrons des instructions détaillées sur la façon de compléter la signature des documents, où aller pour obtenir les documents et tout ce qui est nécessaire pour que le processus soit également rentable et sans stress.</p>
                    </select>
                </div>
        </div>
            <div class="content ps-0 ps-lg-5">
              
              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>

          <section class="col-lg-7 col-md-12 mt-5">
          
                                   <div style="margin-bottom: 20px" class="accordion-body">
                                              
                                     <select id="continent" class="form-select" aria-label="Default select example">
                                       <option style="fw-bold" value="  Combien sont vos honoraires? ">  Combien sont vos honoraires? </option>
                                      <p>
                                        Tous les cas ne sont pas identiques, les frais juridiques tiennent compte de votre objectif d’immigration et de la complexité du cas de manière rentable. N’oubliez pas que notre objectif est de rendre le processus simple et abordable!
                                     </select>
                               
                                 </div>

                                 <div style="margin-bottom: 20px" class="accordion-body">
                                              
                                    <select id="continent" class="form-select" aria-label="Default select example">
                                      <option style="fw-bold" value="  Comment savoir ce dont vous avez besoin?  "> Comment savoir ce dont vous avez besoin? </option>
                                     <p>
                                       Tous les cas ne sont pas identiques, les frais juridiques tiennent compte de votre objectif d’immigration et de la complexité du cas de manière rentable. N’oubliez pas que notre objectif est de rendre le processus simple et abordable!
                                    </select>
                              
                                </div>

                                <div style="margin-bottom: 20px" class="accordion-body">
                                              
                                    <select id="continent" class="form-select" aria-label="Default select example">
                                      <option style="fw-bild" value="  Mon ami a dit…. puis-je faire cela? "> Mon ami a dit…. puis-je faire cela? </option>
                                     <p>
                                        Ceci est une autre question populaire. Les problèmes d’immigration surviennent tous les jours et vous parlez souvent à quelqu’un dans la même situation ou une situation similaire pour évaluer comment vous devriez aller de l’avant.

                                        N’oubliez pas, c’est à vous, en tant que demandeur, de fournir toutes les informations et preuves documentaires nécessaires pour montrer que vous répondez aux critères du programme. Ce n’est pas parce que quelque chose a fonctionné pour votre ami que cela fonctionnera pour vous.
                                        
                                        Le processus commence par une évaluation personnelle de votre situation particulière. Ensuite, ils mettront en place vos options et vous laisseront décider ce qui a du sens pour vous. Nos avocats fourniront des recommandations pour faire en sorte que votre cas se démarque des autres candidats similaires ou fourniront des solutions possibles à vos problèmes uniques.
                                        
                                        J’ai déjà soumis ma demande par moi-même et maintenant j’ai besoin d’aide, que dois-je faire?
                                        ma vie au canada
                                        Cabinet d’immigration ma vie au Canada
                                        Heures d’ouverture :
                                        Du lundi à Vendredi : 08h-30 – 17h-30
                                        
                                        Samedi: 09h00-13h30
                                        dimanche : FERMÉ
                                        
                                           
                                        Newsletter
                                        Inscrivez-vous à notre bulletin d’information pour recevoir nos dernières mises à jour et actualités.
                                        
                                        Infos officielles:
                                        6540 Rue Beaubien E, Montréal, QW H1M 1A9 Bureau 300D +1-514-369-6494
                                        Douala, Rond-Point Maetur face station Ola immeuble Saint Louis University, troisièmes étages porte D300 . +237 677 88 80 63
                                        Yaoundé, Montée Camair face Camair-co au premier étage +237 676 781 890
                                        Côte d'ivoire, Abidjan Abris 2000 l'immeuble à coté de l''école de Muguets Collège 1er étage +225 05 74 618 329
                                        Facebook
                                        
                                        2024 © Cabinet ma vie au Canada. All rights reserved
                                        
                                        
                                        Chers clients et visiteurs, nous avons le plaisir de vous informer que Cabinet d’immigration ma vie au le Canada devient AFKM INTERNATIONAL INC
                                        Ok, merci! </p>
                                        
                                        
                                    </select>
                              
                                </div>

                                <div style="margin-bottom: 20px" class="accordion-body">
                                              
                                    <select id="continent" class="form-select" aria-label="Default select example">
                                      <option style="fw-bild" value="  J’ai déjà soumis ma demande par moi-même et maintenant j’ai besoin d’aide, que dois-je faire?"> J’ai déjà soumis ma demande par moi-même et maintenant j’ai besoin d’aide, que dois-je faire? </option>
                                     <p>
                                        La première chose que nous demandons est, quel est votre délai? Souvent, lorsque vous avez présenté vous-même un mémoire, vous disposez d’un délai très court pour répondre à une demande d’ Immigration, Réfugiés et Citoyenneté Canada (IRCC) .

                                        Si vous ne répondez pas ou ne fournissez pas les bons documents, votre cas peut être rejeté. Ma source Visa s’est efforcée d’aider les clients à respecter ces délais serrés pour répondre aux demandes d’IRCC.
                                        
                                        Bien que le résultat puisse réussir, pourquoi prendre cette chance? N’oubliez pas que l’information est accessible au «bricoleur», mais que faire avec.</p>
                                    </select>
                              
                                </div>


           </section>



        </div>

      </div>
    </section><!-- End About Section -->

 
  </main><!-- End #main -->

@endsection

