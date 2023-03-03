@extends('layouts.app')

@section('content')
<main>
      <!-- main section -->
      <div class="mainSectionWrapper showcseBannerWrapper">
        <div class="mainContentWrapper">
          <div class="font-size-20 heading">
            <h1>Login</h1>
          </div>
          <div class="element">
            <img src="image/element.png" alt="element" class="img-fluid" />
          </div>
        </div>
      </div>
      <!-- main section -->

      <!-- Form section -->
      <div class="regYourSelfWrapper loginWrapper">
        <div class="container">
          <div class="regYourSelfFormWrapper">
            <form action="#">
              <div class="fields emailWrapper">
                <label for="email" class="font-size-20">Email</label>
                <input type="email" class="form-control" name="" id="email" />
              </div>
              <div class="fields passwordWrapper">
                <label for="password" class="font-size-20">Password</label>
                <input type="password" class="form-control" name="" id="password" />
              </div>
              <div class="fields submitBtn">
                <input type="submit" value="Login" >
              </div>
              <div class="already">
                <p class="font-size-18">Don't have an account? <a href="SignUp.html">SignUp</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    @endsection
