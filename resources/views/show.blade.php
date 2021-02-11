@extends('template/second')
@section('contentSecond')
    <section>
        <div class="container">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title">ID: {{$show->id}}</h5>
                    <h5 class="card-title">Titre: {{$show->titre}}</h5>
                    <h5 class="card-title">Sous-titre: {{$show->nom}}</h5>
                    <h5 class="card-title">Contenu: {{$show->paraArticle}}</h5>
                </div>
            </div>
        </div>
    </section>
@endsection