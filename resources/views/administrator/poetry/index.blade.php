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
                            <a href="{{route('poetry.create')}}" class="btn btn-primary">Add Poetry</a>
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
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table-user" class="table table-bordered text-center">
                                    <thead class="thead-dark">
                                        <tr role="row">
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Author Name</th>
                                            <!-- <th>Description</th> -->
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $d)
                                        <tr role="row">
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->title}}</td>
                                            <td>{{$d->author->first_name}} {{$d->author->last_name}}</td>
                                            <!-- <td>{{$d->description}}</td> -->
                                            <td>
                                                <img src="{{asset('uploads/author/'.$d->image)}}" style="height: 150px;margin: 7px 0;">
                                            </td>
                                            <td>
                                                <a  type="button"  class="btn btn-sm btn-primary btn-edit"
                                                    href="{{route('poetry.edit',$d->id)}}">
                                                        <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a type="button" data-id="{{$d->id}}" data-name="{{$d->author->first_name}}" class="btn btn-danger btn-sm btn-delete"><i class="fas fa-trash-alt"></i></a>
                                            </td>
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


@push('page_scripts')
    @include('administrator.layouts.assets.js.datatables_js')

    <script>
       

        $(document).ready(function() {
            /**
             * Delete user
             */
            $('#table-user').on('click', '.btn-delete', function(event){
                event.preventDefault();
                const id       = $(this).data('id');
                const name     = $(this).data('first_name');
                const formData = new FormData();
                const url      = "{{ route('poetry.delete', ['id' => ':id']) }}";
                formData.append('id', id);
                formData.append('first_name', name);
                formData.append('_method', 'DELETE');
                formData.append('_token', '{{ csrf_token() }}');
                swalConfirm({
                    title: 'Delete Poetry?',
                    confirm: 'Delete!',
                    cancel: 'Cancel',
                    icon: 'question',
                    complete: (result) => {
                        $.ajax({
                            url: url.replace(':id', id),
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(result) {
                                swalSuccess('',result.message);
                                location.reload();
                            }
                        })
                    }
                })
            })
        })
    </script>
@endpush


