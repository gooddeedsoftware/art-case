@extends('layouts.app')

@section('content')
         <!-- main section -->
         <div class="profileDetailsWrapper">
        <div class="profileContainer">
          <div class="userProfileImg">
            <img src="{{asset('uploads/users/'.$artist->image)}}" alt="profile" class="img-fluid" style="height: 178px;border-radius: 15px;">
          </div>
          <div class="profileDetails">
            <div class="userName">
              <h3>{{$artist->first_name}} {{$artist->last_name}} <!--  &nbsp;&nbsp;<span>(Art Expert) --></span></h3>
            </div>
            <div class="userBio">
              <p><span>BIO</span></p>
              <p>{{$artist->aboutnote}}</p>
            </div>
            <div class="userNumbers">
              <div class="Number">
                <p><span class="font-size-20">{{$arts->count()}}</span></p>
                <p>Artworks</p>
              </div>
              <div class="Number">
                <p><span class="font-size-20">{{$artist->avarage_rating($artist->id)?$artist->avarage_rating($artist->id):0}} <i class="fa-solid fa-star" style="color: #f0d105;"></i></span></p>
                <p>Rating</p>
              </div>
              <div class="Number">
                <p><span class="font-size-20">{{$viewSum}}</span></p>
                <p>Views</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- post section -->
      <div class="postWrapper">
        <div class="container">
          <div class="row">
            @if($arts)
              @foreach($arts as $art)
                <div class="col-sm-6 col-md-4">
                  <div class="post">
                    <a href="{{route('art-detail', $art->id)}}" class="gallery__link">
                      <img src="{{asset('uploads/art/'. $art->image)}}" alt="post" class="img-fluid">
                    </a>
                  </div>
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>

      <!-- main section -->
@endsection
