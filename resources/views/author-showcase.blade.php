@extends('layouts.app')

@section('content')
           <!-- main section -->
           <div class="mainSectionWrapper showcseBannerWrapper">
        <div class="mainContentWrapper">
          <div class="font-size-20 heading">
            <h1>
              Author Showcase
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
            <div class="col-6 col-sm-6 col-md-3">
              <a href="{{route('author-showcase-profile')}}">
                <div class="showCaseUserCard">
                  <div class="userImg">
                    <img src="{{asset('image/AuthorShowcase1.png')}}" alt="Artist1" class="img-fluid">
                  </div>
                  <div class="userDetails">
                    <h6>Elizabeth Bishops</h6>
                    <p>Author</p>
                  </div>
              </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <a href="{{route('author-showcase-profile')}}">
                <div class="showCaseUserCard">
                  <div class="userImg">
                    <img src="{{asset('image/AuthorShowcase2.png')}}" alt="Artist1" class="img-fluid">
                  </div>
                  <div class="userDetails">
                    <h6>Elizabeth Bishops</h6>
                    <p>Author</p>
                  </div>
              </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <a href="{{route('author-showcase-profile')}}">
                <div class="showCaseUserCard">
                  <div class="userImg">
                    <img src="{{asset('image/AuthorShowcase3.png')}}" alt="Artist1" class="img-fluid">
                  </div>
                  <div class="userDetails">
                    <h6>Elizabeth Bishops</h6>
                    <p>Author</p>
                  </div>
              </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <a href="{{route('author-showcase-profile')}}">
                <div class="showCaseUserCard">
                  <div class="userImg">
                    <img src="{{asset('image/AuthorShowcase4.png')}}" alt="Artist1" class="img-fluid">
                  </div>
                  <div class="userDetails">
                    <h6>Elizabeth Bishops</h6>
                    <p>Author</p>
                  </div>
              </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <a href="{{route('author-showcase-profile')}}">
                <div class="showCaseUserCard">
                  <div class="userImg">
                    <img src="{{asset('image/AuthorShowcase5.png')}}" alt="Artist1" class="img-fluid">
                  </div>
                  <div class="userDetails">
                    <h6>Elizabeth Bishops</h6>
                    <p>Author</p>
                  </div>
              </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <a href="{{route('author-showcase-profile')}}">
                <div class="showCaseUserCard">
                  <div class="userImg">
                    <img src="{{asset('image/AuthorShowcase6.png')}}" alt="Artist1" class="img-fluid">
                  </div>
                  <div class="userDetails">
                    <h6>Elizabeth Bishops</h6>
                    <p>Author</p>
                  </div>
              </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <a href="{{route('author-showcase-profile')}}">
                <div class="showCaseUserCard">
                  <div class="userImg">
                    <img src="{{asset('image/AuthorShowcase7.png')}}" alt="Artist1" class="img-fluid">
                  </div>
                  <div class="userDetails">
                    <h6>Elizabeth Bishops</h6>
                    <p>Author</p>
                  </div>
              </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <a href="{{route('author-showcase-profile')}}">
                <div class="showCaseUserCard">
                  <div class="userImg">
                    <img src="{{asset('image/AuthorShowcase8.png')}}" alt="Artist1" class="img-fluid">
                  </div>
                  <div class="userDetails">
                    <h6>Elizabeth Bishops</h6>
                    <p>Author</p>
                  </div>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- pagging -->
      <div class="pagginWrapper">
        <div class="container">
          <div class="pagging">
            <a href="#">
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
            </a>
          </div>
        </div>
      </div>

      <!-- main section -->
@endsection
