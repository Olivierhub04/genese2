
 <!-- ======= Header ======= -->

    <!-- Uncomment the line below if you also wish to use an image logo -->
    <!-- <img src="assets/img/logo.png" alt=""> -->

    <nav  id="navbar" class="navbar navbar-expand-lg">
      <a href="{{route('index')}}">
        <h4>Contact@geneseimmigrationsarl</h4>
      </a>
      <ul>
          <li>
            lundi-vendredi : 8h30 - 16h30
          </li>
          <li> Montréal, Québec, H4A 2E9</li>
          <li><button> <a
                  href="{{ route('login') }}"
                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
              >
                  Espace Client
              </a> </button></li>
      </ul>

   </nav>

  <header id="header" class="header sticky-top d-flex align-items-center">

    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{route('index') }}" class="logo d-flex align-items-center ms-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Genese Immigration Sarl <span> </span></h1>
      </a>

      <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

      <nav id="navbar" class="navbar navbar-expand-lg">
        <ul>
          <li><a style="color: red" href="{{route('index')}}">Accueil</a></li>

          <li class="dropdown"><a href="{{route('prestations')}}"><span>Prestations</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li class="dropdown"><a href="{{route('travailleur')}}"><span>TRAVAILLEURS</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{route('visapermisdetravail')}}">Visa permis de travail</a></li>
                  <li><a href="{{route('residencepermanante')}}">Residence permanante</a></li>
                  <li><a href="{{route('packcompletresidencepermanente')}}">Pack complet residence permanente</a></li>
                  <li><a href="{{route('cvlettredemotivation')}}">CV et Lettre de motivation</a></li>
                  <li><a href="{{route('assistanceavotrearriveeaucanada')}}">Assistance a votre arrivee au canada</a></li>
                  <li><a href="{{route('masterclasspourtrouveremploiaucanada')}}">Master class pour trouver emploi au canada</a></li>
                  <li><a href="{{('permisdetravailouvert')}}">Permis de travail ouvert</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="{{route('etude')}}"><span> ETUDES</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{route('demandeadmission')}}">Demande d'admission</a></li>
                  <li><a href="{{route('demandedevisa')}}">Demande de visa</a></li>
                  <li><a href="{{route('assistantedelogement')}}">Assistance a l'aide au logement</a></li>
                  <li><a href="{{route('packcompletpourlesetudesaucanada')}}">Pack complet pour les etudes au canada</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="{{route('residencepermanantetravailleurs')}}"><span>FAMILLE</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href=" {{route('parrainage')}} ">Parrainage</a></li>
                  <li><a href=" {{route('permisdetravailpourepouxetconjointe')}}">Permis de travail pour epoux et conjointe</a></li>
                  <li><a href="visaenfant(enfantissuedeparentdetendeurdepermisdetravailetpermisetude)">Visa enfant (Enfant issue de parent detendeur de permis de travail et permis d'etudes)</a></li>
                  <li><a href=" {{route('assistanceainstegration')}}">L'assistance a l'instegration</a></li>
                  <li><a href=" {{route('recherchelogement')}}  ">Recherche Logement</a></li>
                  <li><a href="{{route('cvcanadien')}}">CV Canadien</a></li>
                  <li><a href="{{route('aidepourtrouvervotrepremieremploiaucanada')}}">Aide pour trouver votre premier emploi au canada</a></li>
                  <li><a href="{{route('autreservicesaubesoin')}}">Autres services au besoin</a></li>
                </ul>
              </li>

              <li class="dropdown"><a href="{{route('visiteur')}}"><span>VISITEURS</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href=" {{route('visavisiteurstourisme')}}">Visa visiteurs tourisme</a></li>
                  <li><a href= "{{route('visavisiteurstravail')}}">Visa visiteurs travail</a></li>
                  <li><a href=" {{route('visavisiteursmedical')}}">Visa visiteurs medical</a></li>
                  <li><a href=" {{route('visavisiteursaffaire')}}">Visa visiteurs affaires</a></li>
                  <li><a href="{{route('reservationhotel')}}">Reservation Hotel</a></li>
                  <li><a href="{{route('accueilaareoport')}}">Accueil a l'areoport</a></li>
                  <li><a href=" {{route('prisederendezvousavecdespartenairesaffaire')}}">Prise de rendez-vous avec des partenaires d'affaires</a></li>
                  <li><a href="{{route('prisederendezvousavecdesspecialiste')}}">Prise de rendez-vous avec des specialistes</a></li>
                </ul>
              </li>

            </ul>
          </li>

              <li><a href="{{ route('blog')}}">Blog</a></li>

              <li class="dropdown"><a href="{{route('apropos')}}"><span>Apropos+</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{route('presentationducabinet')}}">Presentation du cabinet</a></li>
                  <li><a href=" {{route('faq')}}">FAQ</a></li>
                </ul>
              </li>

              <li><a href="{{route('contact')}}">Contact</a></li>

              <li class="dropdown"><a href="{{route('evaluation')}}"><span>Evaluation+</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{route('professionneloutravailleursansconjoint')}}">Professionnel ou travailleur sans conjoint</a></li>
                  <li><a href=" {{route('professionneloutravailleuravecconjoint')}}">Professionnel ou travailleur avec conjoint</a></li>
                  <li><a href=" {{route('gestionnaireentreprise')}}">gestionnaire d'entreprise</a></li>
                  <li><a href=" {{route('groupementfamilial')}}">Groupement familial</a></li>
                </ul>
              </li>

            </ul>

              <div class="je">
                <a href=""><i class="bi bi-twitter"></i></a>
              </div>

              <div class="moi">
                <a style="padding-right: 10px"; href=""><i class="bi bi-facebook"></i></a>
              </div>

              <div>
                <a style="padding-right: 10px"; href="tu"><i class="bi bi-instagram"></i></a>
              </div>

              <div>
                <a style="padding-right: 10px"; href="il"><i class="bi bi-linkedin"></i></a>
              </div>


        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
