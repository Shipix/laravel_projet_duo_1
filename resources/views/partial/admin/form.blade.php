<table class="table container">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        {{-- <th scope="col">Sous-titre</th>
        <th scope="col">Contenu</th> --}}
        <th scope="col">Show</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articleCont as $article)
        <tr>
          <th scope="row">{{$article->id}}</th>
          <td>{{$article->titre}}</td>
          {{-- <td>{{$article->nom}}</td>
          <td>{{$article->paraArticle}}</td> --}}
          <td><a class="btn btn-success" href="/article-show/{{$article->id}}">show</a></td>
          <td><a class="btn btn-warning" href="/article-edit/{{$article->id}}">Edit</a></td>
          <td>
            <form action="/delete-article/{{$article->id}}" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger">
                 Delete
              </button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody> 
</table>
<div class="container p-5">
    <h1 class="my-5 text-center">
        Ajout d'articles
    </h1>
    <form action="/admin-store" method="POST">
        @csrf
        <div class="form-group">
            <label for="titreArticle">Titre</label>
            <input type="text" name="titre" class="form-control" id="titreArticle"
                placeholder="Je suis un exemple de titre">
        </div>
        <div class="form-group">
            <label for="sousTitre">Sous-titre</label>
            <input type="text" name="nom" class="form-control" id="sousTitre"
                placeholder="Je suis un exemple de sous-titre">
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <input type="text" name="paraArticle" class="form-control" id="content"
                placeholder="Je suis un exemple de contenu">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>

<table class="table container">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Contenu</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    @foreach ($bpf as $list)
    <tbody>
      <tr>
        <th scope="row">{{$list->id}}</th>
        <td>{{$list->contenu}}</td>
        <td>
          <form action="/delete-list1/{{$list->id}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">
              Delete
            </button>
          </form>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>

<div class="container p-5">
    <h1 class="text-center my-5">
        Ajout listes section 1
    </h1>
    <form action="/li-store1" method="POST">
        @csrf
        <div class="form-group">
            <label for="contenu"></label>
            <input type="text" name="contenu" class="form-control" id="contenu" placeholder="Skills bullet point 1">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>

<table class="table container">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Contenu</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    @foreach ($bps as $list)
    <tbody>
      <tr>
        <th scope="row">{{$list->id}}</th>
        <td>{{$list->contenu}}</td>
        <td>
          <form action="/delete-list2/{{$list->id}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">
              Delete
            </button>
          </form>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>

<div class="container p-5">
    <h1 class="text-center my-5">
        Ajout listes section 2
    </h1>
    <form action="/li-store2" method="POST">
        @csrf
        <div class="form-group">
            <label for="contenu"></label>
            <input type="text" name="contenu" class="form-control" id="contenu" placeholder="Skills bullet point 2">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
