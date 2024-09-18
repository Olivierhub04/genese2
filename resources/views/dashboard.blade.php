@include('sidebar')

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
