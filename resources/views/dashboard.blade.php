<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Transition for the sidebar */
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

        /* Dropdown menu */
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
    </style>
</head>

<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-white shadow p-4 flex justify-between items-center">
    <div class="flex items-center">
        <button id="menu-toggle" class="text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800">
            ☰
        </button>
    </div>
    <div class="flex items-center">
        <!-- Notification Icon -->
        <div class="mr-4">
            <a href="#" class="text-gray-600 hover:text-gray-800">🔔</a>
        </div>
        <!-- Profile Dropdown -->
        <div class="dropdown">
            <a href="#" class="dropdown-toggle text-gray-600 hover:text-gray-800">{{ Auth::user()->name }}</a>
            <div class="dropdown-content">
                <a href="{{ route('profile.edit') }}">Profile</a>
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </div>
</nav>

<!-- Main Content Wrapper -->
<div class="flex">
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar bg-red-600 text-white w-64 h-screen">
        <div class="p-4 text-xl font-bold sidebar-title">Tableau de bord</div>
        <nav>
            <ul class="space-y-2">
                <li class="p-4"><a href="#" data-icon="🏠"> <span> Dossiers</span></a></li>
                <li class="p-4"><a href="#" data-icon="📄"> <span> Contrats</span></a></li>
                <li class="p-4"><a href="#" data-icon="💰"> <span> Factures</span></a></li>
                <li class="p-4"><a href="#" data-icon="💳"> <span> Paiements</span></a></li>
                <li class="p-4"><a href="#" data-icon="🛒"> <span> Boutique</span></a></li>
                <li class="p-4"><a href="#" data-icon="📦"> <span> Commandes</span></a></li>
                <li class="p-4"><a href="#" data-icon="🎫"> <span> Tickets</span></a></li>
                <li class="p-4"><a href="#" data-icon="📢"> <span> Annonces</span></a></li>
                <li class="p-4"><a href="#" data-icon="📂"> <span> Fichiers</span></a></li>
                <li class="p-4"><a href="#" data-icon="👤"> <span> Mon profil</span></a></li>
                <li class="p-4"><a href="#" data-icon="📚"> <span> Base de connaissance</span></a></li>
                <li class="p-4"><a href="#" data-icon="✔️"> <span> Tâches</span></a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <!-- Dashboard Cards -->
        <div class="grid grid-cols-4 gap-4">
            <div class="bg-blue-100 p-4 rounded-lg text-center">
                <div class="text-blue-500 text-xl font-semibold">0</div>
                <div class="text-gray-600">Dossiers</div>
            </div>
            <div class="bg-blue-100 p-4 rounded-lg text-center">
                <div class="text-blue-500 text-xl font-semibold">0XAF</div>
                <div class="text-gray-600">Total facturé</div>
            </div>
            <div class="bg-blue-100 p-4 rounded-lg text-center">
                <div class="text-blue-500 text-xl font-semibold">0XAF</div>
                <div class="text-gray-600">Paiements</div>
            </div>
            <div class="bg-blue-100 p-4 rounded-lg text-center">
                <div class="text-blue-500 text-xl font-semibold">0XAF</div>
                <div class="text-gray-600">Dû</div>
            </div>
        </div>

        <!-- Dossiers Table -->
        <div class="mt-8">
            <div class="bg-blue-500 p-4 rounded-t-lg text-white">
                <h2 class="text-lg font-semibold">Dossiers</h2>
            </div>
            <div class="bg-white p-4 rounded-b-lg">
                <table class="min-w-full">
                    <thead>
                    <tr class="border-b">
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Titre</th>
                        <th class="px-4 py-2 text-left">Prix</th>
                        <th class="px-4 py-2 text-left">Date de début</th>
                        <th class="px-4 py-2 text-left">Date limite approximative</th>
                        <th class="px-4 py-2 text-left">Progression</th>
                        <th class="px-4 py-2 text-left">Statut</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="7" class="px-4 py-4 text-center text-gray-600">Aucun enregistrement trouvé.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    menuToggle.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
    });
</script>

</body>

</html>
