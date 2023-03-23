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
                    <form action="@if(!$edit){{route('manage.user.store')}}@else{{route('manage.user.update', $user->id)}}@endif" method="post"  enctype="multipart/form-data">
                        @csrf()
                            <input type="hidden" name="type" value="@if($edit){{$user->type}}@else{{$type}}@endif">
                        @if($edit)
                            <input type="hidden" name="_method" value="put" />
                        @endif
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="first_name" class="col-form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="Enter Your First Name" value="@if($edit){{$user->first_name}}@endif" required />
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="col-form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Enter Your Last Name" value="@if($edit){{$user->last_name}}@endif" required/>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control " name="email" id="email" placeholder="Enter Your Email" value="@if($edit){{$user->email}}@endif"   required />
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile" class="col-form-label">mobile</label>
                                    <input type="text" class="form-control " name="mobile" id="mobile"  placeholder="Enter Your mobile number" value="@if($edit){{$user->mobile}}@endif"  required />
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile" class="col-form-label">Country</label>
                                    <input type="text" class="form-control " name="country" id="country"  placeholder="Enter Your country" value="@if($edit){{$user->country}}@endif"  required />
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile" class="col-form-label">Bio</label>
                                    <textarea class="form-control" name="aboutnote">@if($edit){{$user->aboutnote}}@endif</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="width" class="col-form-label">Profile</label>
                                    <input type="file" class="form-control " name="image" @if(!$edit) required @endif @if($edit && empty($user->image)) required @endif />
                                    @if($edit) 
                                        <img src="{{asset('uploads/users/'.$user->image)}}" style="height: 150px;margin: 7px 0;">
                                    @endif
                                </div>
                                @if(!$edit)
                                <div class="col-md-6">
                                    <label for="password" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password"  required />
                                </div>
                                @endif
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

