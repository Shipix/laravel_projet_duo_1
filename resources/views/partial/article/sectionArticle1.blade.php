<!-- ======= Why Us Article 1 Section ======= -->
<section id="why-us" class="why-us">
        <div class="container">
  
          <div class="row">
            @foreach ($articleCont as $article)
            <div class="col-lg-4 my-3">
              <div class="box">
                <h1>{{$article->titre}}</h1>
                <span>{{$article->id}}</span>
                <h4>{{$article->nom}}</h4>
                <p>{{$article->paraArticle}}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
<!-- End Why Us Article 1 Section -->