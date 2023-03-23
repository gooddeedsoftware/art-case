@extends('layouts.app')

@section('content')
      <!-- main section -->
      <div class="paintingCartcontainer">
        <div class="paintingCartWrapper">
          <div class="cartWrapper">
            <div class="paintingImg">
              <img src="{{asset('uploads/art/'.$art->image)}}" alt="post" class="img-fluid" />
            </div>
            <div class="paintingDetails">
              <div class="paintingDescription">
                <h3>{{$art->title}}</h3>
                <p>Size : {{$art->height}} X {{$art->width}} {{$art->size}}</p>
              </div>
              <!-- <div class="shareImg">
                <i class="fas fa-share-alt"></i>
              </div> -->
              <div class="paintingRate">
                <p>INR {{$art->price}}</p>
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
                src="{{asset('uploads/users/'.$art->artist->image)}}"
                alt="profile"
                class="img-fluid"
                style="height: 178px;border-radius: 15px;"
              />
            </div>
            <div class="profileDetails">
              <div class="userName">
                <h3>{{$art->artist->first_name}} {{$art->artist->last_name}}</span></h3>
              </div>
              <div class="userBio">
                <p><span>BIO</span></p>
                <p>
                  {{$art->artist->aboutnote}}
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
                <form action="{{route('add-review')}}" method="post">
                  @csrf
                  <input type="hidden" name="type" value="art">
                  <input type="hidden" name="list_id" value="{{$art->id}}">
                  <textarea name="review" id="" rows="3" placeholder="Write Your Review"></textarea>
                  <input type="submit" value="Post" />
                </form>
              </div>
            </div>
            <div class="customerReviewWrapper">
              <b>Customer Review :</b>
              @if($reviews)
                  @foreach($reviews as $review)
                    <div class="customerReview">
                      <div class="row">
                        <div class="col-1">
                          <div class="customerImg">
                            <img
                              src="{{asset('uploads/users/'.$review->user->image)}}"
                              alt="Artist"
                              class="img-fluid w-100"
                            />
                          </div>
                        </div>
                        <div class="col-11">
                          <div class="customerDetails">
                            <div class="customername">
                              <p>{{$review->user->first_name}} {{$review->user->last_name}}</p>
                            </div>
                            <div class="comment">
                              <p>
                                {{$review->review}}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @endif
            </div>
          </div>
        </div>
      </div>

      <!-- main section -->
@endsection
