
<div class="row">
    <h1>AJOUTER UN ETUDIANT - LARAVEL 11</h1>

<form action="/ajouter/traitement" method="POST" class="form-group">
    <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="text" class="form-control" id="Nom" name="nom">
    </div>

    <div class="form-group">
        <label for="Prenom">Prenom</label>
        <input type="text" class="form-control" id="Prenom" name="prenom">
    </div>

    <div class="form-group">
        <label for="Classe">Classe</label>
        <input type="text" class="form-control" id="Classe" name="classe">

    </div>

    <br>
    <button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button>
    <br> <br>

    <a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>

</form>
</div>
</div>
</body>
</html>