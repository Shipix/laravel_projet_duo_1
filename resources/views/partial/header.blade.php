  <!-- ======= Header ======= -->
  <header id="header" class=" ">
    <div class="container d-flex align-items-center justify-content-between">

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href={{route('home')}}>{{$compoCont[0]->paraComp}}</a></li>
          <li><a href={{route('article')}}>{{$compoCont[1]->paraComp}}</a></li>
          <li><a href={{route('contact')}}>{{$compoCont[2]->paraComp}}</a></li>
        </ul>
      </nav>
      <h1 class="logo"><a href="index.html">{{$compoCont[3]->paraComp}}</a></h1>
    </div>
  </header>