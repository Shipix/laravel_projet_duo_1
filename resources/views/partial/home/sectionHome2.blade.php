    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
  
          <div class="row content">
            <div class="col-lg-6">
              <h2>{{$homeCont[3]->paraHome}}</h2>
              <h3>{{$homeCont[4]->paraHome}}</h3>
              <div class=" ">
                <img class="w-100"src="https://img.itch.zone/aW1hZ2UyL3VzZXIvMTAyNjUwNi8xMTQwNTc2LmpwZw==/original/maO0R%2B.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                {{$homeCont[5]->paraHome}}
              </p>
              <ul>
                @foreach ($bps as $item)
                <li><i class="{{$compoCont[10]->paraComp}}"></i>{{$item->contenu}}</li>
              @endforeach
              </ul>
              <p class="font-italic">
                {{$homeCont[6]->paraHome}}
              </p>
            </div>
          </div>
  
        </div>
      </section>
    <!-- End About Section -->