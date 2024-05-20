<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body>
    @include('header');

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Portfolio<a href="#"></a></li>
          <li class="breadcrumb-item active" aria-current="page">Website</li>
        </ol>
      </nav>
      {{-- <h5 class="card-title">{{$userpost->id}}</h5>
      <p class="card-text">{{$userpost->post}}</p --}}

    
      <div>
        <div class="card-deck">
            @foreach($userpost as $userpost)
            @if($userpost->type == "website")
            <div class="container mx-auto mt-4">
              <div class="row">
                <div class="col-md-4">
                  <div class="card" style="width: 18rem;">
                    <h5 class="card-title d-flex justify-content-center">{{$userpost->status}}</h5>
              <img src="data:image/png;base64,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" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$userpost->appname}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$userpost->link}}</h6>
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
