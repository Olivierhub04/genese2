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
            <table class="min-w-full">
                <thead>
                <tr class="border-b">
                    <th class="px-4 py-2 text-center">ID</th>
                    <th class="px-4 py-2 text-center">Fichiers</th>
                    <th class="px-4 py-2 text-center">Taille</th>
                    <th class="px-4 py-2 text-center">Mise en ligne par</th>
                    <th class="px-4 py-2 text-center">Cree le</th>
                    <th class="px-4 py-2 text-center"><i class="fa fa-bars"></i></th>
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
