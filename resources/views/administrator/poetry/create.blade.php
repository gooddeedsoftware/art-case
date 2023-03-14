@extends('administrator.layouts.app')



@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <div class="col-6 float-left ">
                            <h3 class="card-title  text-uppercase">Add Poetry</h3>
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
                    <form action="@if(!$edit){{route('poetry.store')}}@else{{route('poetry.update', $poetry->id)}}@endif" method="post" enctype="multipart/form-data">
                                @csrf()
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="first_name" class="col-form-label">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Title" required value="@if($edit){{$poetry->title}}@endif" />
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="col-form-label">Author</label>
                                    <select type="select" name="user_id" class="form-control"  required>
                                        <option value="">Select Author</option>
                                        @if($author)
                                            @foreach($author as $authorData)
                                             <option value="{{$authorData->id}}"  @if($edit) @if($poetry->user_id == $authorData->id){{'selected'}}@endif @endif>{{$authorData->first_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                               
                                <div class="col-md-6">
                                    <label for="height" class="col-form-label">Short Description</label>
                                    <textarea type="text" class="form-control " name="description" required >
                                        @if($edit){{$poetry->description}}@endif</textarea>
                                </div>
                               
                                <div class="col-md-6">
                                    <label for="width" class="col-form-label">Image</label>
                                    <input type="file" class="form-control " name="image" @if(!$edit) required @endif @if($edit && empty($poetry->image)) required @endif />
                                    @if($edit) 
                                        <img src="{{asset('uploads/author/'.$poetry->image)}}" style="height: 150px;margin: 7px 0;">
                                    @endif
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

