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
              <h3>Elizabeth Bishops &nbsp;&nbsp;<span>(Author)</span></h3>
            </div>
            <div class="userBio">
              <p><span>BIO</span></p>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed At vero eos et accusam et justo duo dolores et ea rebum.</p>
            </div>
            <div class="userNumbers">
              <div class="Number">
                <p><span class="font-size-20">3</span></p>
                <p>Articles</p>
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
            <div class="col-12">
              <div class="poetryContainer">
                <div class="poetryName">
                  <h3>One Art</h3>
                  <p>27 Jul 2021</p>
                </div>
                <div class="poetryText">
                  <p class="font-size-18">Elizabeth Bishop was an American poet and short-story writer. She was Consultant in Poetry to the Library of Congress from 1949 to 1950, the Pulitzer Prize winner for Poetry in 1956, the National Book…</p>
                </div>
                <div class="poetryDetails">
                  <a href="{{route('poetry-detail')}}">Details</a>
                </div>
                <div class="poetryProLike">
                  <i class="fas fa-heart"></i> Like
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="poetryContainer">
                <div class="poetryName">
                  <h3>One Art</h3>
                  <p>27 Jul 2021</p>
                </div>
                <div class="poetryText">
                  <p class="font-size-18">Elizabeth Bishop was an American poet and short-story writer. She was Consultant in Poetry to the Library of Congress from 1949 to 1950, the Pulitzer Prize winner for Poetry in 1956, the National Book…</p>
                </div>
                <div class="poetryDetails">
                  <a href="{{route('poetry-detail')}}">Details</a>
                </div>
                <div class="poetryProLike">
                  <i class="fas fa-heart"></i> Like
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="poetryContainer">
                <div class="poetryName">
                  <h3>One Art</h3>
                  <p>27 Jul 2021</p>
                </div>
                <div class="poetryText">
                  <p class="font-size-18">Elizabeth Bishop was an American poet and short-story writer. She was Consultant in Poetry to the Library of Congress from 1949 to 1950, the Pulitzer Prize winner for Poetry in 1956, the National Book…</p>
                </div>
                <div class="poetryDetails">
                  <a href="{{route('poetry-detail')}}">Details</a>
                </div>
                <div class="poetryProLike">
                  <i class="fas fa-heart"></i> Like
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- main section -->
@endsection
