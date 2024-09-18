@include('sidebar')

<!-- Main Content -->
<div class="flex-1 p-6">
    <!-- Fichiers Table -->
    <div class="mt-8">
        <div class="p-4 rounded-t-lg text-black flex justify-between bg-white">
            <h2 class="text-lg font-semibold">Etiquettes</h2>
            <a href="{{route('etiquettes.create')}}" class="bg-gray-100 border-2"><i class="fa fa-bookmark"></i> Gerer les etiquettes</a>
        </div>
        <div class="bg-white p-4 rounded-b-lg">
            <form method="post">
                @method('patch')
                @csrf
                <div class="mt-4">
                    <x-input-label for="titre" :value="__('Titre')" />
                    <input type="text" name="titre" id="titre" class="border-gray-500 focus:border-gray-300 focus:ring-gray-500 rounded-md shadow-sm w-full">
                    <x-input-error :messages="$errors->get('titre')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="etiquette" :value="__('Etiquettes')" />
                    <input type="text" name="etiquette" id="etiquette" class="border-gray-500 focus:border-gray-300 focus:ring-gray-500 rounded-md shadow-sm w-full">
                    <x-input-error :messages="$errors->get('etiquette')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="status" :value="__('Status')" />
                    <input type="status" name="status" id="status" class="border-gray-500 focus:border-gray-300 focus:ring-gray-500 rounded-md shadow-sm w-full">
                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="color" :value="__('Colors')" />
                    <input type="file" name="color" id="color" class="border-gray-500 focus:border-gray-300 focus:ring-gray-500 rounded-md shadow-sm w-full">
                    <x-input-error :messages="$errors->get('color')" class="mt-2" />
                </div>
                <div class="mt-4 flex justify-between">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Enregistrer</button>
                    <a href="{{route('taches.index')}}" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Back</a>
                </div>
            </form>
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
