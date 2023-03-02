@extends('layouts.app')

@section('content')
      <!-- main section -->
      <div class="poetryWrapper">
        <div class="container">
          <div class="poetryContainer">
            <div class="poetryName">
              <h2>One Art</h2>
              <p>27 Jul 2021</p>
            </div>
            <div class="poetryText">
              <p class="font-size-20">Elizabeth Bishop was an American poet and short-story writer. She was Consultant in Poetry to the Library of Congress from 1949 to 1950, the Pulitzer Prize winner for Poetry in 1956, the National Book Award winner in 1970, and the recipient of the Neustadt International Prize for Literature in 1976.</p>
            </div>
            <div class="poetryPerformance">
              <div class="poetryLike">
                <p>33 View 0 comments</p>
              </div>
              <div class="poetryLike">
                <i class="fas fa-heart"></i> Like
              </div>
            </div>
          </div>
          <div class="poetryImgWrapper">
            <div class="row">
              <div class="col-md-4">
                <img src="{{asset('image/poetry1.png')}}" alt="poetry" class="img-fluid">
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
      </div>

      <!-- main section -->
@endsection
