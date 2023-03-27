@extends('layouts.app')

@section('content')
         <!-- main section -->
         <div class="profileDetailsWrapper">
        <div class="profileContainer">
          <div class="userProfileImg">
            <img src="{{asset('uploads/users/'.$author->image)}}" alt="profile" class="img-fluid"  style="height: 178px;border-radius: 15px;">
          </div>
          <div class="profileDetails">
            <div class="userName">
              <h3>{{$author->first_name}} {{$author->last_name}} <!-- &nbsp;&nbsp;<span>(Author) --></span></h3>
            </div>
            <div class="userBio">
              <p><span>BIO</span></p>
              <p>{{$author->aboutnote}}</p>
            </div>
            <div class="userNumbers">
              <div class="Number">
                <p><span class="font-size-20">{{$poetry->count()}}</span></p>
                <p>Articles</p>
              </div>
              <div class="Number">
                <p><span class="font-size-20">100</span></p>
                <p>Likes</p>
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
            @if($poetry)
              @foreach($poetry as $poet)
                <div class="row">
                  <div class="col-12">
                    <div class="poetryContainer">
                      <div class="poetryName">
                        <h3>{{$poet->title}}</h3>
                        <p>{{date('d M Y', strtotime($poet->created_at))}}</p>
                      </div>
                      <div class="poetryText">
                        <p class="font-size-18">{{ Str::limit($poet->description, 165)}}</p>
                      </div>
                      <div class="poetryDetails">
                        <a href="{{route('poetry-detail', $poet->id)}}">Details</a>
                      </div>
                      <div class="poetryProLike">
                        <i class="fas fa-heart add-like @if(Auth::check() && Auth::user()->checkLike($poet->id)){{'active'}}@endif" data-id="{{$poet->id}}"  data-value="@if(Auth::check() && Auth::user()->checkLike($poet->id)){{'0'}}@else{{'1'}}@endif"></i> Like
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
        </div>
      </div>

      <!-- main section -->
@endsection
