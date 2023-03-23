@extends('layouts.app')

@section('content')
         <!-- main section -->
         <div class="mainSectionWrapper showcseBannerWrapper">
        <div class="mainContentWrapper">
          <div class="font-size-20 heading">
            <h1>
              Artist Showcase
            </h1>
          </div>
          <div class="element">
            <img src="{{asset('image/element.png')}}" alt="element" class="img-fluid" />
          </div>
        </div>
      </div>

      <!-- Showcase user -->
      <div class="showcaseUserWrapper">
        <div class="container">
          <div class="row">
            @if($artists)
              @foreach($artists as $artist)
                <div class="col-6 col-sm-6 col-md-3">
                  <a href="{{route('artist-showcase-profile', $artist->id)}}">
                    <div class="showCaseUserCard">
                      <div class="userImg">
                        <img src="{{asset('uploads/users/'.$artist->image)}}" alt="Artist1" class="img-fluid">
                      </div>
                      <div class="userDetails">
                        <h6>{{$artist->first_name}} {{$artist->last_name}}</h6>
                        <!-- <p>Art Expert</p> -->
                      </div>
                  </div>
                  </a>
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>


      <!-- pagging -->
      <div class="pagginWrapper">
        <div class="container">
          <div class="pagging" style="margin: 0 50%;">
            {{$artists->links()}}
            <!-- <a href="#">
              <i class="fas fa-chevron-left"></i>
            </a>
            <div class="page active">
              <a href="#">1</a>
            </div>
            <div class="page">
              <a href="#">2</a>
            </div>
            <div class="page">
              <a href="#">3</a>
            </div>
            <div class="page">
              <a href="#">4</a>
            </div>
            <div class="page">
              <a href="#">5</a>
            </div>
            <a href="#">
              <i class="fas fa-chevron-right"></i>
            </a> -->
          </div>
        </div>
      </div>

      <!-- main section -->
@endsection
