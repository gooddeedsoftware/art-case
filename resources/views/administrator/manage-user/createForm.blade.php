@extends('administrator.layouts.app')



@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <div class="col-6 float-left ">
                            <h3 class="card-title  text-uppercase">Add {{$type}}</h3>
                        </div>
                        <div class="col-6 d-flex  justify-content-end">
                            <a href="" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <form action="{{route('register')}}" method="post">
                                @csrf()
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="first_name" class="col-form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="Enter Your First Name" required />
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="col-form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Enter Your Last Name" required/>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control " name="email" id="email" placeholder="Enter Your Email"   required />
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile" class="col-form-label">mobile</label>
                                    <input type="text" class="form-control " name="mobile" id="mobile"  placeholder="Enter Your mobile number"   required />
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile" class="col-form-label">Country</label>
                                    <input type="text" class="form-control " name="country" id="mobile"  placeholder="Enter Your country"   required />
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile" class="col-form-label">Bio</label>
                                    <input type="text" name="aboutnote"  id="realBtn1" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile" class="col-form-label">Profile</label>
                                    <input type="file" name="img"  id="realBtn1" class="form-control">
                                   
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password"  required />
                                </div>
                        </div>
                        <div class="row mx-1 mt-3">
                            <button class="btn btn-primary">
                                Submit
                            </button>
                    
                        </div>
                    
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
@endsection

