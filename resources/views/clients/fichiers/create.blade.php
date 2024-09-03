@include('sidebar')

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <!-- Fichiers Table -->
        <div class="mt-8">
            <div class="p-4 rounded-t-lg text-black flex justify-between bg-white">
                <h2 class="text-lg font-semibold">Fichiers</h2>
                <a href="{{route('fichiers.create')}}" class="bg-gray-100 border-2">Ajouter des fichiers</a>
            </div>
            <div class="bg-white p-4 rounded-b-lg">
                <form action="{{route('fichiers.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4">
                        <x-input-label for="fichiers" :value="__('Fichiers')" />
                        <input type="file" name="fichiers" id="fichiers" class="border-gray-500 focus:border-gray-300 focus:ring-gray-500 rounded-md shadow-sm w-full">
                        <x-input-error :messages="$errors->get('fichiers')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Description')" />
                        <textarea name="description" id="description" placeholder="Add description..." class="border-gray-500 focus:border-gray-300 focus:ring-gray-500 rounded-md shadow-sm w-full"></textarea>
                        <x-input-error :messages="$errors->get('descriptions')" class="mt-2" />
                    </div>
                    <div class="mt-4 flex justify-between">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Enregistrer</button>
                        <a href="{{route('fichiers.index')}}" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Back</a>
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
