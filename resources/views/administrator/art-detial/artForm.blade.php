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
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <form action="{{route('art.stor')}}" method="post">
                                @csrf()
                        <div class="row">
                                <div class="col-md-6">
                                    <label for="first_name" class="col-form-label">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Your First Name" required />
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="col-form-label">Artist ID</label>
                                    <select type="select" name="artistid" class="form-control"  required>
                                        <option>1 </option>
                                        <option>2 </option>
                                        <option>3 </option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="col-form-label">Size Type</label>
                                    <select type="select" name="size" class="form-control"  required>
                                        <option>cm </option>
                                        <option>m </option>
                                        <option>mm </option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="height" class="col-form-label">height</label>
                                    <input type="number" class="form-control " name="height"  placeholder="Enter Height"   required />
                                </div>
                                <div class="col-md-6">
                                    <label for="width" class="col-form-label">width</label>
                                    <input type="number" class="form-control " name="width"   placeholder="Enter Width"   required />
                                </div>
                                <div class="col-md-6">
                                    <label for="width" class="col-form-label">Image</label>
                                    <input type="file" class="form-control " name="image"    required    />
                                </div>
                                <div class="col-md-6">
                                    <label for="price" class="col-form-label">Price</label>
                                    <input type="text" class="form-control " name="price" id="mobile"  placeholder="Enter Your Price"   required />
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

