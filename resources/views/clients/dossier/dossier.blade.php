<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .sidebar {
            transition: width 0.3s ease;
        }

        .sidebar.collapsed {
            width: 4rem;
        }

        .sidebar.collapsed .sidebar-title {
            display: none;
        }

        .sidebar.collapsed ul li span {
            display: none;
        }

        .sidebar.collapsed ul li a::before {
            content: attr(data-icon);
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            min-width: 150px;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropdown-toggle {
            color: #555;
        }

        /* Additional styles to align the content inside the profile information card */
        .profile-info .flex {
            justify-content: flex-start;
            align-items: center;
        }

        .profile-info .flex label {
            min-width: 120px;
        }
    </style>
</head>

<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-white shadow p-4 flex justify-between items-center">
    <div class="flex items-center">
        <button id="menu-toggle" class="text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="flex items-center space-x-4">
        <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-plus"></i></a>
        <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-globe"></i></a>
        <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-bell"></i></a>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle text-gray-600 hover:text-gray-800">Test last</a>
            <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="#">Settings</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <img src="path/to/profile.jpg" alt="Profile Picture" class="w-8 h-8 rounded-full">
    </div>
</nav>

<!-- Main Content Wrapper -->
<div class="flex">
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar bg-red-600 text-white w-64 h-screen">
        <div class="p-4 text-xl font-bold sidebar-title">Tableau de bord</div>
        <nav>
            <ul class="space-y-2">
                <li class="p-4"><a href="#" data-section="dossiers"><i class="fas fa-home"></i> <span>Dossiers</span></a></li>
                <li class="p-4"><a href="#" data-section="contrats"><i class="fas fa-file-alt"></i> <span>Contrats</span></a></li>
                <li class="p-4"><a href="#" data-section="factures"><i class="fas fa-file-invoice"></i> <span>Factures</span></a></li>
                <li class="p-4"><a href="#" data-section="paiements"><i class="fas fa-credit-card"></i> <span>Paiements</span></a></li>
                <li class="p-4"><a href="#" data-section="boutique"><i class="fas fa-store"></i> <span>Boutique</span></a></li>
                <li class="p-4"><a href="#" data-section="commandes"><i class="fas fa-shopping-cart"></i> <span>Commandes</span></a></li>
                <li class="p-4"><a href="#" data-section="tickets"><i class="fas fa-ticket-alt"></i> <span>Tickets</span></a></li>
                <li class="p-4"><a href="#" data-section="annonces"><i class="fas fa-bullhorn"></i> <span>Annonces</span></a></li>
                <li class="p-4"><a href="#" data-section="fichiers"><i class="fas fa-folder"></i> <span>Fichiers</span></a></li>
                <li class="p-4"><a href="#" data-section="mon-profil"><i class="fas fa-user"></i> <span>Mon profil</span></a></li>
                <li class="p-4"><a href="#" data-section="base-de-connaissance"><i class="fas fa-book"></i> <span>Base de connaissance</span></a></li>
                <li class="p-4"><a href="#" data-section="taches"><i class="fas fa-tasks"></i> <span>Tâches</span></a></li>
            </ul>
        </nav>
    </div>

    <!-- Profile Content -->
    <div class="flex-1 p-6">
        <!-- Profile Header -->
        <div class="bg-red-800 text-white p-6 rounded-lg">
            <div class="flex items-center">
                <img src="path/to/profile.jpg" alt="Profile Picture" class="w-24 h-24 rounded-full">
                <div class="ml-4">
                    <h2 class="text-2xl font-semibold">Test last</h2>
                    <span class="bg-blue-500 text-white px-2 py-1 rounded">Untitled</span>
                    <div class="mt-2">dayaba4707@givehit.com</div>
                </div>
            </div>
        </div>

        <!-- Profile Tabs -->
        <div class="bg-white mt-6 rounded-lg shadow">
            <div class="border-b flex space-x-4 px-6 py-4">
                <a href="#" data-tab="informations-generales" class="text-red-800 font-semibold border-b-2 border-red-800 tab-link">Informations générales</a>
                <a href="#" data-tab="coordonnees" class="text-gray-600 hover:text-red-800 tab-link">Coordonnées</a>
                <a href="#" data-tab="liens-reseaux-sociaux" class="text-gray-600 hover:text-red-800 tab-link">Liens des réseaux sociaux</a>
                <a href="#" data-tab="parametres-compte" class="text-gray-600 hover:text-red-800 tab-link">Paramètres du compte</a>
                <a href="#" data-tab="mes-preferences" class="text-gray-600 hover:text-red-800 tab-link">Mes préférences</a>
                <a href="#" data-tab="menu-gauche" class="text-gray-600 hover:text-red-800 tab-link">Menu de gauche</a>
            </div>
            <div class="p-6 tab-content" id="informations-generales">
                <h3 class="text-lg font-semibold">Informations générales</h3>
                <div class="mt-4 profile-info">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex">
                            <label class="text-gray-600 w-1/4">Prénom:</label>
                            <p class="text-gray-800 w-3/4">Test</p>
                        </div>
                        <div class="flex">
                            <label class="text-gray-600 w-1/4">Nom:</label>
                            <p class="text-gray-800 w-3/4">last</p>
                        </div>
                        <div class="flex">
                            <label class="text-gray-600 w-1/4">Téléphone:</label>
                            <p class="text-gray-800 w-3/4">Téléphone</p>
                        </div>
                        <div class="flex">
                            <label class="text-gray-600 w-1/4">Skype:</label>
                            <p class="text-gray-800 w-3/4">Skype</p>
                        </div>
                        <div class="flex">
                            <label class="text-gray-600 w-1/4">Nom de société:</label>
                            <p class="text-gray-800 w-3/4">Nom de société</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more tab-content divs as needed -->
        </div>
    </div>
</div>

<script>
    // Sidebar toggle
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('collapsed');
    });

    // Tab navigation
    const tabs = document.querySelectorAll('.tab-link');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function (event) {
            event.preventDefault();

            // Hide all content
            contents.forEach(content => content.style.display = 'none');

            // Remove active class from all tabs
            tabs.forEach(tab => tab.classList.remove('border-b-2', 'border-red-800', 'text-red-800'));

            // Show the selected tab content
            document.getElementById(this.getAttribute('data-tab')).style.display = 'block';

            // Set the clicked tab as active
            this.classList.add('border-b-2', 'border-red-800', 'text-red-800');
        });
    });

    // Default tab
    document.querySelector('.tab-link').click();
</script>

</body>

</html>
