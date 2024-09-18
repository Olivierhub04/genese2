@include('sidebar')

<!-- Main Content -->
<div class="flex-1 p-6">
    <form method="post" action="{{route('taches.store')}}">
        @csrf
    <div class="flex">
        <x-input-label for="titre" :value="__('Taches')" />
        <input type="text" name="titre" class="w-3/4">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Enregistrer</button>
    </div>
    </form>
    <!-- Fichiers Table -->
    <div class="mt-8">
        <div class="p-4 rounded-t-lg text-black flex justify-between bg-white">
            <h2 class="text-lg font-semibold">Taches (Privee)</h2>
            <a href="{{route('etiquettes.create')}}" class="bg-gray-100 border-2"><i class="fa fa-bookmark"> </i> Ajouter des Etiquettes </a>
        </div>
        <div class="bg-white p-4 rounded-b-lg">
            <table class="min-w-full">
                <thead>
                <tr class="border-b">
                    <th class="px-4 py-2 text-center">ID</th>
                    <th class="px-4 py-2 text-center">Titre</th>
                    <th class="px-4 py-2 text-center">Date</th>
                    <th class="px-4 py-2 text-center"><i class="fa fa-bars"></i></th>
                </tr>
                </thead>
                @forelse($taches as $tache)
                <tbody>
                <tr>
                    <td class="px-4 py-2 text-center">#{{$tache->id}}</td>
                    <td class="px-4 py-2 text-center">{{$tache->titre}}</td>
                    <td class="px-4 py-2 text-center">{{$tache->date_du}}</td>
                    <td class="px-4 py-2 text-center"><a href="{{route('taches.edit',$tache->id)}}"><i class="fa fa-pen"></i></a></td>
                </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-4 text-center text-gray-600">Aucun enregistrement trouvé.</td>
                    </tr>
                </tbody>
            </table>
            @endforelse
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
