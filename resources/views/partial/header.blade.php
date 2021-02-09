  <!-- ======= Header ======= -->
  <header id="header" class=" ">
    <div class="container d-flex align-items-center justify-content-between">
      
      <h1 class="logo"><a href={{route('home')}}>{{$compoCont[3]->paraComp}}</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href={{route('home')}}>{{$compoCont[0]->paraComp}}</a></li>
          <li><a href={{route('article')}}>{{$compoCont[1]->paraComp}}</a></li>
          <li><a href={{route('contact')}}>{{$compoCont[2]->paraComp}}</a></li>
          <li><a href="{{route('admin')}}">admin</a></li>
          {{-- @foreach ([$compoCont[0], $compoCont[1], $compoCont[2]] as $item)
              @if ($item->link === "Home")
                  <li class="{{Route::getCurrentRoute()->uri()== '/'? 'active' : ''}}"><a class="text-capitalize" href="{{route($item->link)}}">{{$item->link}}</a></li>
              @else
                  <li class="{{Route::getCurrentRoute()->uri()== $item->link? 'active' : ''}}"><a class="text-capitalize" href="{{route($item->link)}}">{{$item->link}}></a></li>
              @endif
          @endforeach --}}
        </ul>
      </nav>
    </div>
  </header>