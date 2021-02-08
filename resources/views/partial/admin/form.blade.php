<div class="container">
    <form action="/admin-store" method="POST">
        @csrf
        <div class="form-group">
            <label for="titreArticle">Titre</label>
            <input type="text" name="titre" class="form-control" id="titreArticle" placeholder="Je suis un exemple de titre">
        </div>
        {{-- <div class="form-group">
            <label for="ID">ID</label>
            <input type="number" name="ID" class="form-control" id="ID" placeholder="Je suis un exemple d'ID">
        </div> --}}
        <div class="form-group">
            <label for="sousTitre">Sous-titre</label>
            <input type="text" name="nom" class="form-control" id="sousTitre" placeholder="Je suis un exemple de sous-titre">
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <input type="text" name="paraArticle" class="form-control" id="content" placeholder="Je suis un exemple de contenu">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>