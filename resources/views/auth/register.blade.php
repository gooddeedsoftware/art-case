@extends('layouts.app')

@section('content')
<main>
      <!-- main section -->
      <div class="mainSectionWrapper showcseBannerWrapper">
        <div class="mainContentWrapper">
          <div class="font-size-20 heading">
            <h1>Register Yourself</h1>
          </div>
          <div class="element">
            <img src="image/element.png" alt="element" class="img-fluid" />
          </div>
        </div>
      </div>

      <div class="regYourSelfWrapper">
        <div class="container">
          <div class="regYourSelfFormWrapper regYourSelfFormWrappers ">
            <form action="{{route('register')}}" method="post">
                @csrf()
              <div class="row my-2">
                <div class="col-12 col-sm-6">
                  <div>
                    <label for="First Name" class="form-label font-size-18">First Name</label
                    >
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="" value="{{old('first_name')}}" required />
                    @error('first_name')
                      <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div>
                    <label for="Last Name" class="form-label font-size-18">Last Name</label>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name"    value="{{old('last_name')}}" required  />
                    @error('last_name')
                      <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-12">
                  <div class="mb-3">
                    <label for="Email" class="form-label font-size-18">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder=""  value="{{old('email')}}" required />
                    @error('email')
                      <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-12 col-sm-6">
                  <div>
                    <label for="Password" class="form-label font-size-18">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="" value="{{old('password')}}" required />
                    @error('password')
                      <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div>
                    <label for="confirmed" class="form-label font-size-18">Confirm Password</label>
                    <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{old('password_confirmation')}}" id="password_confirmation" required
                    />
                    @error('confirmed')
                      <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-12 col-sm-6">
                  <div>
                    <label for="Mobile Number" class="form-label font-size-18">Mobile Number</label
                    >
                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" id="mobile"   placeholder=""  value="{{old('mobile')}}" required />
                    @error('mobile')
                      <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div>
                    <label for="Country" class="form-label font-size-18">Country</label>
                    <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" id="country"  value="{{old('country')}}" required
                    />
                    @error('country')
                      <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-12">
                  <div class="uploadImgWrapper">
                    <p class="font-size-16"><span>Upload 5 images</span> of in-stock artwork for approval. Maximum size allowed per image is 5 MB. Images should be properly cropped, without any background and not taken at an angle.</p>
                    <div class="uploadImgMenu">
                      <input type="file" name="img1"  id="realBtn1" hidden="hidden">
                      <button type="button" class="customeBtn" id="customeBtn1"><em>+</em></button>
                      <input type="file" name="img2" id="realBtn2" hidden="hidden">
                      <button type="button" class="customeBtn" id="customeBtn2"><em>+</em></button>
                      <input type="file" name="img3" id="realBtn3" hidden="hidden">
                      <button type="button" class="customeBtn" id="customeBtn3"><em>+</em></button>
                      <input type="file" name="img4" id="realBtn4" hidden="hidden">
                      <button type="button" class="customeBtn" id="customeBtn4"><em>+</em></button>
                      <input type="file" name="img5" id="realBtn5" hidden="hidden">
                      <button type="button" class="customeBtn" id="customeBtn5"><em>+</em></button>
                      @error('image')
                        <span class="error invalid-feedback">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-12">
                  <div>
                    <label for="About us" class="form-label font-size-18"
                      >Please Tell Us A Little About Yourself</label
                    >
                    <textarea class="form-control @error('aboutnote') is-invalid @enderror" name="aboutnote" id="aboutnote" rows="3" placeholder="" required>{{old('aboutnote')}}</textarea>
                    @error('aboutnote')
                      <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="disclaimer font-size-14">
                <p>Please note we also look for freshness in art, and usually do not approve over common subjects.</p>
                <p>Art could be disapproved for blurry, dull, non cropped & non-straight images as well.</p>
                <p>Please wait 3 to 5 mins after you click submit button for images to be uploaded to our server.</p>
              </div>
              <div class="btnWrapper">
                <input type="submit" value="Submit" class="yourselfBtn yourselfSubmit">
                <input type="reset" value="Reset" class="yourselfBtn yourSelfReset">
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- main section -->
    </main>

    @endsection
