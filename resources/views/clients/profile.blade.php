@include('sidebar')

    <!-- Profile Content -->
    <div class="flex-1 p-6">
        <!-- Profile Header -->
        <div class="bg-red-800 text-white p-6 rounded-lg">
            <div class="flex items-center">
                <img src="#" alt="Profile Picture" class="w-24 h-24 rounded-full">
                <div class="ml-4">
                    <h2 class="text-2xl font-semibold">{{Auth::user()->name}} {{Auth::user()->lname}}</h2>
                    @if(Auth::user()->poste)
                    <span class="bg-blue-500 text-white px-2 py-1 rounded">{{Auth::user()->poste}}</span>
                    @else
                        <span class="bg-blue-500 text-white px-2 py-1 rounded">Untitled</span>
                    @endif
                        <div class="mt-2">{{Auth::user()->email}}</div>
                </div>
            </div>
        </div>
        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')
        <!-- Profile Tabs -->
        <div class="bg-white mt-6 rounded-lg shadow">
            <div class="border-b flex space-x-4 px-6 py-4">
                <a href="#" class="text-red-800 font-semibold border-b-2 border-red-800">Informations générales</a>
                <a href="#" class="text-gray-600 hover:text-red-800">Coordonnées</a>
                <a href="#" class="text-gray-600 hover:text-red-800">Liens des réseaux sociaux</a>
                <a href="#" class="text-gray-600 hover:text-red-800">Paramètres du compte</a>
                <a href="#" class="text-gray-600 hover:text-red-800">Mes préférences</a>
                <a href="#" class="text-gray-600 hover:text-red-800">Menu de gauche</a>
            </div>
            <div class="p-6">
                <h3 class="text-lg font-semibold">Informations générales</h3>
                <div class="mt-4">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex">
                            <label class="text-gray-600 w-1/4">Prénom:</label>
                            <input class="text-gray-800 w-3/4" name="lname" value="{{Auth::user()->lname}}" id="lname" placeholder="{{Auth::user()->lname}}">
                        </div>
                        <div class="flex">
                            <label class="text-gray-600 w-1/4">Nom:</label>
                            <input class="text-gray-800 w-3/4" id="name" value="{{Auth::user()->name}}" name="name" placeholder="{{Auth::user()->name}}">
                        </div>
                        @if(Auth::user()->telephone)
                        <div class="flex">
                            <label class="text-gray-600 w-1/4">Téléphone:</label>
                            <p class="text-gray-800 w-2/4">{{Auth::user()->telephone}}</p>
                        </div>
                        @else
                            <div class="flex">
                                <label class="text-gray-600 w-1/4">Téléphone:</label>
                                <input class="text-gray-800 w-3/4" name="telephone" id="telephone" placeholder="Telephone">
                            </div>
                        @endif
                        <div class="flex">
                            <label class="text-gray-600 w-1/4">Email:</label>
                            <input class="text-gray-800 w-2/4" name="email" id="email" value="{{Auth::user()->email}}" placeholder="{{Auth::user()->email}}">
                        </div>
                        @if(Auth::user()->poste)
                        <div class="flex">
                            <label class="text-gray-600 w-1/4">Titre du poste:</label>
                            <input class="text-gray-800 w-3/4" name="poste" value="{{Auth::user()->poste}}" placeholder="{{Auth::user()->poste}}">
                        </div>
                        @else
                            <div class="flex">
                                <label class="text-gray-600 w-1/4">Titre du poste:</label>
                                <input class="text-gray-800 w-3/4" name="poste" id="poste" placeholder="Untitled">
                            </div>
                        @endif
                        @if(Auth::user()->genre)
                        <div class="flex">
                            <label class="text-gray-600 w-1/4">Genre:</label>
                            <p class="text-gray-800 w-3/4">{{Auth::user()->genre}}</p>
                        </div>
                        @else
                            <div class="flex">
                                <label class="text-gray-600 w-1/4">Genre:</label>
                                <div class="text-gray-800 w-3/4">
                                    <input type="radio" name="genre" id="genre" value="Homme" class="mr-2"> Homme
                                    <input type="radio" name="genre" id="genre" value="Femme" class="mr-2 ml-4"> Femme
                                    <input type="radio" name="genre" id="genre" value="Autre" class="mr-2 ml-4"> Autre
                                </div>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
            <div class="flex">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Enregistrer</button>
            </div>
        </form>
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
