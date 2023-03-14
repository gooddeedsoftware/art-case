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
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <form action="{{route('poetry.stor')}}" method="post">
                                @csrf()
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="first_name" class="col-form-label">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Title" required />
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="col-form-label">Author ID</label>
                                    <select type="select" name="authorid" class="form-control"  required>
                                        <option>1 </option>
                                        <option>2 </option>
                                        <option>3 </option>
                                    </select>
                                </div>
                               
                                <div class="col-md-6">
                                    <label for="height" class="col-form-label">Short Description</label>
                                    <textarea type="text" class="form-control " name="desc"     required >
                                    </textarea>
                                </div>
                               
                                <div class="col-md-6">
                                    <label for="width" class="col-form-label">Image</label>
                                    <input type="file" class="form-control " name="image"    required    />
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

