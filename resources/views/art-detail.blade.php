@extends('layouts.app')

@section('content')
      <!-- main section -->
      <div class="paintingCartcontainer">
        <div class="paintingCartWrapper">
          <div class="cartWrapper">
            <div class="paintingImg">
              <img src="{{asset('image/postcart1.png')}}" alt="post" class="img-fluid" />
            </div>
            <div class="paintingDetails">
              <div class="paintingDescription">
                <h3>Morden Artwork</h3>
                <p>Size in Centimetres : 123 X 345 cm</p>
              </div>
              <div class="shareImg">
                <i class="fas fa-share-alt"></i>
              </div>
              <div class="paintingRate">
                <p>INR 2800</p>
              </div>
              <div class="cartBtn wishlistBtn">
                <a href="#">Add to Wish List</a>
              </div>
              <div class="cartBtn paingingBuyBtn">
                <a href="#">Buy Now</a>
              </div>
              <div class="rating">
                <img
                  src="{{asset('image/fillRating.png')}}"
                  alt="fillRating"
                  class="img-fluid"
                />
                <img
                  src="{{asset('image/fillRating.png')}}"
                  alt="fillRating"
                  class="img-fluid"
                />
                <img
                  src="{{asset('image/fillRating.png')}}"
                  alt="fillRating"
                  class="img-fluid"
                />
                <img
                  src="{{asset('image/emptyRating.png')}}"
                  alt="emptyRating"
                  class="img-fluid"
                />
                <img
                  src="{{asset('image/emptyRating.png')}}"
                  alt="emptyRating"
                  class="img-fluid"
                />
              </div>
            </div>
      
          </div>
        </div>

        <div class="profileDetailsWrapper">
          <div class="profileContainer">
            <div class="userProfileImg">
              <h4>Design By:</h4>
              <img
                src="{{asset('image/userProfile.png')}}"
                alt="profile"
                class="img-fluid"
              />
            </div>
            <div class="profileDetails">
              <div class="userName">
                <h3>Elizabeth Bishops &nbsp;&nbsp;<span>(Author)</span></h3>
              </div>
              <div class="userBio">
                <p><span>BIO</span></p>
                <p>
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                  At vero eos et accusam et justo duo dolores et ea rebum.
                </p>
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

        <div class="commentWrapper">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h5>Product Review :</h5>
                <form action="#">
                  <textarea name="" id="" rows="3" placeholder="Write Your Review"></textarea>
                  <input type="submit" value="Post" />
                </form>
              </div>
            </div>
            <div class="customerReviewWrapper">
              <b>Customer Review :</b>
              <div class="customerReview">
                <div class="row">
                  <div class="col-1">
                    <div class="customerImg">
                      <img
                        src="{{asset('image/Artist2.png')}}"
                        alt="Artist"
                        class="img-fluid w-100"
                      />
                    </div>
                  </div>
                  <div class="col-11">
                    <div class="customerDetails">
                      <div class="customername">
                        <p>Elizabeth Bishops</p>
                      </div>
                      <div class="comment">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Deleniti, impedit, expedita temporibus libero
                          velit in doloribus illum voluptates rem error debitis
                          culpa non hic blanditiis consequatur cumque ut
                          excepturi, eveniet sunt animi iusto. Atque illum
                          laudantium debitis molestias cum alias.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="customerReview">
                <div class="row">
                  <div class="col-1">
                    <div class="customerImg">
                      <img
                        src="{{asset('image/Artist3.png')}}"
                        alt="Artist"
                        class="img-fluid w-100"
                      />
                    </div>
                  </div>
                  <div class="col-11">
                    <div class="customerDetails">
                      <div class="customername">
                        <p>Elizabeth Bishops</p>
                      </div>
                      <div class="comment">
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Corporis eligendi ea ullam ex. Facilis assumenda
                          rem iure fugit consequatur dicta obcaecati, deleniti
                          velit sed, quia, omnis numquam odit repudiandae
                          tempora.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="customerReview">
                <div class="row">
                  <div class="col-1">
                    <div class="customerImg">
                      <img
                        src="{{asset('image/Artist5.png')}}"
                        alt="Artist"
                        class="img-fluid w-100"
                      />
                    </div>
                  </div>
                  <div class="col-11">
                    <div class="customerDetails">
                      <div class="customername">
                        <p>Elizabeth Bishops</p>
                      </div>
                      <div class="comment">
                        <p>
                          Lorem, ipsum dolor sit amet consectetur adipisicing
                          elit. Ratione, aut!
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- main section -->
@endsection
