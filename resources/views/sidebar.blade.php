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
    </style>
</head>

<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-white shadow p-4 flex justify-between items-center">
    <div class="flex items-center">
        <img src="#">
        <button id="menu-toggle" class="text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="flex items-center space-x-4">
        <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-plus"></i></a>
        <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-globe"></i></a>
        <a href="#" class="text-gray-600 hover:text-gray-800"><i class="fas fa-bell"></i></a>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle text-gray-600 hover:text-gray-800">{{Auth::user()->name}}{{Auth::user()->lname}}</a>
            <div class="dropdown-content">
                <a href="{{ route('profile.edit') }}">Settings</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
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
                <li class="p-4"><a href="#"><i class="fas fa-home"></i> <span>Dossiers</span></a></li>
                <li class="p-4"><a href="#"><i class="fas fa-file-alt"></i> <span>Contrats</span></a></li>
                <li class="p-4"><a href="#"><i class="fas fa-file-invoice"></i> <span>Factures</span></a></li>
                <li class="p-4"><a href="#"><i class="fas fa-credit-card"></i> <span>Paiements</span></a></li>
                <li class="p-4"><a href="#"><i class="fas fa-store"></i> <span>Boutique</span></a></li>
                <li class="p-4"><a href="#"><i class="fas fa-shopping-cart"></i> <span>Commandes</span></a></li>
                <li class="p-4"><a href="#"><i class="fas fa-ticket-alt"></i> <span>Tickets</span></a></li>
                <li class="p-4"><a href="#"><i class="fas fa-bullhorn"></i> <span>Annonces</span></a></li>
                <li class="p-4 active:bg-gray-100"><a href="{{route('fichiers.index')}}"><i class="fas fa-folder"></i><span>Fichiers</span></a></li>
                <li class="p-4"><a href="{{route('profile.edit')}}"><i class="fas fa-user"></i> <span>Mon profil</span></a></li>
                <li class="p-4"><a href="#"><i class="fas fa-book"></i> <span>Base de connaissance</span></a></li>
                <li class="p-4"><a href="{{route('taches.index')}}" class="active:bg-gray-100"><i class="fas fa-tasks"></i> <span>Tâches</span></a></li>
            </ul>
        </nav>
    </div>

