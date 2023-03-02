@extends('layouts.app')

@section('content')
         <!-- main section -->
         <div class="profileDetailsWrapper">
        <div class="profileContainer">
          <div class="userProfileImg">
            <img src="{{asset('image/userProfile.png')}}" alt="profile" class="img-fluid">
          </div>
          <div class="profileDetails">
            <div class="userName">
              <h3>Elizabeth Bishops &nbsp;&nbsp;<span>(Art Expert)</span></h3>
            </div>
            <div class="userBio">
              <p><span>BIO</span></p>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed At vero eos et accusam et justo duo dolores et ea rebum.</p>
            </div>
            <div class="userNumbers">
              <div class="Number">
                <p><span class="font-size-20">3</span></p>
                <p>Artworks</p>
              </div>
              <div class="Number">
                <p><span class="font-size-20">1.5M</span></p>
                <p>Followers</p>
              </div>
              <div class="Number">
                <p><span class="font-size-20">370</span></p>
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
            <div class="col-sm-6 col-md-4">
              <div class="post">
                <img src="{{asset('image/post1.png')}}" alt="post" class="img-fluid">
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="post">
                <img src="{{asset('image/post2.png')}}" alt="post" class="img-fluid">
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="post">
                <img src="{{asset('image/post3.png')}}" alt="post" class="img-fluid">
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="post">
                <img src="{{asset('image/post3.png')}}" alt="post" class="img-fluid">
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="post">
                <img src="{{asset('image/post1.png')}}" alt="post" class="img-fluid">
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="post">
                <img src="{{asset('image/post2.png')}}" alt="post" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- main section -->
@endsection
