<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/design.css" rel="stylesheet">
</head>
<body>
    @include('header');

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">{{$headerurl}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">Android</li>
      </ol>
    </nav>

    <div>
      <div class="card-deck">
          @foreach($userpost as $userpost)
          @if($userpost->type == "android")
          <div class="container mx-auto mt-4">
            <div class="row">
              <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <h5 class="card-title d-flex justify-content-center">{{$userpost->status}}</h5>
            <img src="{{$userpost->link}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$userpost->appname}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted"></h6>
              <p class="card-text">{{$userpost->description}}
                {{-- @if($userpost->status == "online")
                  {{$resultpost}}
                @else
                  <p>nothing</p>
                @endif --}}
              </p>
                 <a href="http://{{$userpost->link}}" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
              <a href="#" class="btn "><i class="fab fa-github"></i> Github</a>
            </div>
            </div>
            </div>    
            </div>
          </div>
          @endif
          @endforeach
      </div>
    </div>


</body>
</html>