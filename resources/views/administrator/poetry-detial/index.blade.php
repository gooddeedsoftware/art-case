@extends('administrator.layouts.app')

@push('page_css')
    @include('administrator.layouts.assets.css.datatables_css')
@endpush

@section('content-header')
    @component('administrator.components.content-header')
        @slot('title')
            Poetry Management
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid">           
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-6 float-left">
                            <h3 class="card-title">Poetry Management</h3>
                        </div>
                        <div class="col-6 d-flex  justify-content-end">
                            <a href="{{route('poetry.create')}}" class="btn btn-primary">Create Poetry</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table-user" class="table table-bordered text-center">
                                    <thead class="thead-dark">
                                        <tr role="row">
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Author Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $d)
                                    <tr role="row">
                                            <th>{{$d->id}}</th>
                                            <th>{{$d->title}}</th>
                                            <th>{{$d->authorid}}</th>
                                            <th>{{$d->desc}}</th>
                                            <th>{{$d->image}}</th>
                                            <th><button class="btn btn-primary btn-edit">Edit</button>
                                            <button class="btn btn-danger btn-delete">Delete</button></th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  
@endsection



