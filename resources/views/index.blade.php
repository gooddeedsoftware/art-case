@extends('layouts.app')

@section('content')
        <!-- main section -->
        <div class="mainSectionWrapper">
      <div class="mainContentWrapper">
        <div class="font-size-20 heading">
          <h1>
            Introducing<br />
            Art Showcase Club
          </h1>
        </div>
        <div class="font-size-18 subHeading">
          <em>Grow your business, improve your profile, be fob ready</em>
        </div>
        <div class="ShowcasingCta">
          <a href="#" class="font-size-18">Start Showcasing</a>
        </div>
        <div class="element">
          <img src="{{asset('image/element.png')}}" alt="element" class="img-fluid" />
        </div>
      </div>
    </div>
    <!-- main section -->

    <!-- About section -->
    <div class="aboutsectionWrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="abputTextWrapper">
              <p class="font-size-20">
                <span><em>About</em></span>
              </p>
              <h1>Welcome To The Classic &<br>Modern Arts</h1>
              <p class="font-size-18">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                justo duo dolores et ea rebum.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="aboutImg text-center">
              <img src="{{asset('image/aboutImg.png')}}" alt="About" class="img-fluid w-md-100" />
            </div>
          </div>
        </div>
        <div class="hoverImg">
          <img src="{{asset('image/hoverImg.png')}}" alt="hoverImg" class="img-fluid">
        </div>
      </div>
    </div>
    <!-- About section -->

    <!-- Artist Showcase -->
    <div class="ArtistShowcaseWrapper">
      <div class="container">
        <div class="showcaseHeader">
          <h2>Artist Showcase</h2>
          <div class="viewAllBtn">
            <a href="{{route('artist-showcase')}}" class="font-size-16">View All</a>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          @if($artists)
            @foreach($artists as $artist)
              <div class="item">
                <div class="artistWrapper">
                  <img src="{{asset('uploads/users/'.$artist->image)}}" alt="Artist1" class="img-fluid" />
                  <a href="{{route('artist-showcase-profile', $artist->id)}}">
                    <div class="overlayText">
                      View
                    </div>
                  </a>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
    <!-- Artist Showcase -->

    <!-- Views -->
    <div class="viewsAtShowcaseWrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <p class="font-size-18">
              <span><em>Explore Art</em></span>
            </p>
            <h2>On View At Art Showcse</h2>
          </div>
          <div class="col-md-8">
            <div class="counterWrapper">
              <div class="row">
                <div class="col-3">
                  <div class="numbers">
                    <div class="counter"><em>79</em>+</div>
                    <p class="font-size-14">Exhibitions</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="numbers">
                    <div class="counter"><em>954</em>+</div>
                    <p class="font-size-14">Visitors</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="numbers">
                    <div class="counter"><em>8</em>+</div>
                    <p class="font-size-14">Awards</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="numbers">
                    <div class="counter"><em>567</em>+</div>
                    <p class="font-size-14">Collections</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Views -->

    <!-- Gallery -->
    <div class="imagegalleryWrapper">
      <div class="container">
        <div class="galleryHeader">
          <div class="rightSide">
            <p><em>Gallery Collection</em></p>
            <h2>Explore The Collection</h2>
          </div>
          <div class="viewAllBtn">
            <a href="{{route('art-detail', 1)}}" class="font-size-16">View All</a>
          </div>
        </div>

        <div class="wrapper">

          <div class="gallery">
            <div class="gallery__item gallery__item--1">
              <a href="{{route('art-detail', 1)}}" class="gallery__link">
                <img src="{{asset('image/gallery4.png')}}" class="gallery__image" />
                <div class="gallery__overlay">
                  <span>Balthus</span>
                </div>
              </a>
            </div>
            <div class="gallery__item gallery__item--2">
              <a href="{{route('art-detail', 1)}}" class="gallery__link">
                <img src="{{asset('image/gallery3.png')}}" class="gallery__image" />
                <div class="gallery__overlay">
                  <span>Yaacov Agam</span>
                </div>
              </a>
            </div>
            <div class="gallery__item gallery__item--3">
              <a href="{{route('art-detail', 1)}}" class="gallery__link">
                <img src="{{asset('image/gallery1.png')}}" class="gallery__image" />
                <div class="gallery__overlay">
                  <span>Max Ernst</span>
                </div>
              </a>
            </div>
            <div class="gallery__item gallery__item--4">
              <a href="{{route('art-detail', 1)}}" class="gallery__link">
                <img src="{{asset('image/gallery2.png')}}" class="gallery__image" />
                <div class="gallery__overlay">
                  <span>Hilma af Klint</span>
                </div>
              </a>
            </div>
            <div class="gallery__item gallery__item--5">
              <a href="{{route('art-detail', 1)}}" class="gallery__link">
                <img src="{{asset('image/gallery6.png')}}" class="gallery__image" />
                <div class="gallery__overlay">
                  <span>Ellen Lee</span>
                </div>
              </a>
            </div>
            <div class="gallery__item gallery__item--6">
              <a href="{{route('art-detail', 1)}}" class="gallery__link">
                <img src="{{asset('image/gallery5.png')}}" class="gallery__image" />
                <div class="gallery__overlay">
                  <span>Red Grooms</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Gallery -->

    <!-- testimonial  -->
    <div class="testimonialWrapper">
      <div class="container">
        <div class="testimonial-carousel owl-carousel owl-theme">
          <div class="item">
            <div class="testimonialsWrapper">
              <div class="userImg">
                <img src="{{asset('image/testimonial1.png')}}" alt="User1" class="img-fluid">
              </div>
              <div class="testimonialText">
                <p class="font-size-20">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur illo similique, possimus officia at
                  ipsam non labore. Molestiae, voluptatibus molestias!
                </p>
              </div>
              <div class="testimonialDetails">
                <h5>Elizabeth Bishops</h5>
                <p>One Art</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonialsWrapper">
              <div class="userImg">
                <img src="{{asset('image/testimonial1.png')}}" alt="User1" class="img-fluid">
              </div>
              <div class="testimonialText">
                <p class="font-size-20">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur illo similique, possimus officia at
                  ipsam non labore. Molestiae, voluptatibus molestias!
                </p>
              </div>
              <div class="testimonialDetails">
                <h5>Elizabeth Bishops</h5>
                <p>One Art</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonialsWrapper">
              <div class="userImg">
                <img src="{{asset('image/testimonial1.png')}}" alt="User1" class="img-fluid">
              </div>
              <div class="testimonialText">
                <p class="font-size-20">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur illo similique, possimus officia at
                  ipsam non labore. Molestiae, voluptatibus molestias!
                </p>
              </div>
              <div class="testimonialDetails">
                <h5>Elizabeth Bishops</h5>
                <p>One Art</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonialsWrapper">
              <div class="userImg">
                <img src="{{asset('image/testimonial1.png')}}" alt="User1" class="img-fluid">
              </div>
              <div class="testimonialText">
                <p class="font-size-20">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur illo similique, possimus officia at
                  ipsam non labore. Molestiae, voluptatibus molestias!
                </p>
              </div>
              <div class="testimonialDetails">
                <h5>Elizabeth Bishops</h5>
                <p>One Art</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- testimonial  -->

    <!-- Author Showcase -->
    <div class="ArtistShowcaseWrapper">
      <div class="container">
        <div class="showcaseHeader">
          <h2>Author Showcase</h2>
          <div class="viewAllBtn">
            <a href="{{route('author-showcase')}}" class="font-size-16">View All</a>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          @if($authors)
              @foreach($authors as $author)  
                <div class="item">
                  <div class="artistWrapper">
                    <img src="{{asset('uploads/users/'.$artist->image)}}" alt="Author1" class="img-fluid" />
                    <a href="{{route('author-showcase-profile', $author->id)}}">
                      <div class="overlayText">
                        View
                      </div>
                    </a>
                  </div>
                </div>
              @endforeach
          @endif
        </div>
      </div>
    </div>
    <!-- Artist Showcase -->
@endsection
