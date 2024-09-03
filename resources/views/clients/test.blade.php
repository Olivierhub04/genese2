@include('sidebar')

<div class="main-content">
    <div class="header">
        <input type="text" placeholder="Ajouter une tâche...">
        <button>Enregistrer</button>
    </div>

    <div class="tasks-table">
        <h3>Tâches (Privée)</h3>
        <div class="table-controls">
            <select>
                <option value="10">10</option>
            </select>
            <button>À faire</button>
            <button>Terminé</button>
            <button>Excel</button>
            <button>Imprimer</button>
            <input type="text" placeholder="Recherche">
        </div>

        <table>
            <thead>
            <tr>
                <th>Titre</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input type="checkbox">
                    Foire
                </td>
                <td>
                    <span class="urgent">Urgent</span>
                    28-08-2024
                </td>
            </tr>
            </tbody>
        </table>

        <div class="pagination">
            <button>&laquo;</button>
            <button>1</button>
            <button>&raquo;</button>
        </div>
    </div>
</div>
</style>

</body>
</html>
