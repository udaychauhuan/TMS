<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand fs-3" href="#">
        <span class="text-primary border border-primary rounded-circle">
            <i class="fa-solid fa-diagram-project"></i>
        </span> TASK MANAGEMENET SYSTEM
     </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <span class="navbar-text">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item my-1 fs-4">
                  <a class="nav-link active button" aria-current="page" href="#"><i class="fa-solid fa-envelope "></i><span class="alert-badge">22</span></a>
                </li>

                <li class="nav-item ">
                    <div class="btn-group">
                        <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="dropdown" aria-expanded="false"aria-current="page" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            @php
                                $imgsrc = auth()->user()->gender == 1 ? 'assets\male-plac-img.png' : 'assets\female-plac-img.jpg' ;
                                $imgsrc = auth()->user()->profile_image ?? $imgsrc ;
                            @endphp
                            <img class="img-fluid img-thumbnail border border-primary rounded-circle" style="height:45px;width:45px;" src="{{$imgsrc}}" alt="">
                            {{auth()->user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Profile</a></li>

                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="{{route('LogOut')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</a></li>
                        </ul>
                      </div>
                </li>
            </ul>
        </span>
      </div>
    </div>
  </nav>
