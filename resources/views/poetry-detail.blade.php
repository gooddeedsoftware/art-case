@extends('layouts.app')

@section('content')
      <!-- main section -->
      <div class="poetryWrapper">
        <div class="container">
          <div class="poetryContainer">
            <div class="poetryName">
              <h2>{{$poetry->title}}</h2>
              <p>{{date('d M Y', strtotime($poetry->created_at))}}</p>
            </div>
            <div class="poetryText">
              <p class="font-size-20">{{$poetry->description}}</p>
            </div>
            <div class="poetryPerformance">
              <div class="poetryLike">
                <p>{{$poetry->views}} View {{$reviews->count()}} comments</p>
              </div>
              <div class="poetryLike">
              <i class="fas fa-heart add-like @if(Auth::check() && Auth::user()->checkLike($poetry->id)){{'active'}}@endif" data-id="{{$poetry->id}}"  data-value="@if(Auth::check() && Auth::user()->checkLike($poetry->id)){{'0'}}@else{{'1'}}@endif"></i> Like
              </div>
            </div>
          </div>
          <div class="poetryImgWrapper">
            <div class="row">
              <div class="col-md-4">
                <img src="{{asset('uploads/author/'.$poetry->image)}}" alt="poetry" class="img-fluid">
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
                    <input type="hidden" name="type" value="poetry">
                    <input type="hidden" name="list_id" value="{{$poetry->id}}">
                    <textarea name="review" rows="3" placeholder="Write Your Review"></textarea>
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
      </div>

      <!-- main section -->
@endsection
