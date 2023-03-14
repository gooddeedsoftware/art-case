@extends('administrator.layouts.app')



@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-6 float-left ">
                            <h3 class="card-title  text-uppercase">Add Art</h3>
                        </div>
                        <div class="col-6 d-flex  justify-content-end">
                            <a href="" class="btn btn-primary">Back</a>
                        </div>
                        @if(session('success'))
                            <div class="alert alert-success mt-2">
                                {{session('success')}}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger  mt-2">
                                {{session('error')}}
                            </div>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <form action="@if(!$edit){{route('art.store')}}@else{{route('art.update', $art->id)}}@endif" method="post" enctype="multipart/form-data">
                        @csrf()
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="first_name" class="col-form-label">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Your First Name" required  value="@if($edit){{$art->title}}@endif"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="col-form-label">Artist ID</label>
                                    <select type="select" name="user_id" class="form-control"  required>
                                        <option value="">Select Artist</option>
                                        @if($artist)
                                            @foreach($artist as $artistData)
                                             <option value="{{$artistData->id}}"  @if($edit) @if($art->user_id == $artistData->id){{'selected'}}@endif @endif>{{$artistData->first_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="col-form-label">Size Type</label>
                                    <select type="select" name="size" class="form-control"  required>
                                        <option value="cm" @if($edit) @if($art->size === 'cm'){{'selected'}}@endif @endif>CM </option>
                                        <option value="m" @if($edit) @if($art->size === 'Meter'){{'selected'}}@endif @endif>Meter </option>
                                        <option value="mm" @if($edit) @if($art->size === 'mm'){{'selected'}}@endif @endif>MM</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="height" class="col-form-label">height</label>
                                    <input type="number" class="form-control " name="height"  placeholder="Enter Height"   required value="@if($edit){{$art->height}}@endif" />
                                </div>
                                <div class="col-md-6">
                                    <label for="width" class="col-form-label">width</label>
                                    <input type="number" class="form-control " name="width"   placeholder="Enter Width"   required value="@if($edit){{$art->width}}@endif" />
                                </div>
                                <div class="col-md-6">
                                    <label for="width" class="col-form-label">Image</label>
                                    <input type="file" class="form-control " name="image" @if(!$edit) required @endif @if($edit && empty($art->image)) required @endif />
                                    @if($edit) 
                                        <img src="{{asset('uploads/art/'.$art->image)}}" style="height: 150px;margin: 7px 0;">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="price" class="col-form-label">Price</label>
                                    <input type="text" class="form-control " name="price" id="mobile"  placeholder="Enter Your Price"   required value="@if($edit){{$art->price}}@endif" />
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

