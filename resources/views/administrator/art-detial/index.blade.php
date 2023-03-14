@extends('administrator.layouts.app')

@push('page_css')
    @include('administrator.layouts.assets.css.datatables_css')
@endpush

@section('content-header')
    @component('administrator.components.content-header')
        @slot('title')
            Art Management
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-6 float-left ">
                            <h3 class="card-title">Art Management</h3>

                        </div>
                        <div class="col-6 d-flex  justify-content-end">
                            <a href="{{route('art.create')}}" class="btn btn-primary">Create Art</a>
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
                                            <th>Artist Name</th>
                                            <th>Art</th>
                                            <th>size</th>
                                            <th>height</th>
                                            <th>width</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $d)
                                    <tr role="row">
                                            <th>{{$d->id}}</th>
                                            <th>{{$d->title}}</th>
                                            <th>{{$d->artistid}}</th>
                                            <th>{{$d->image}}</th>
                                            <th>{{$d->size}}</th>
                                            <th>{{$d->height}}</th>
                                            <th>{{$d->width}}</th>
                                            <th><button class="btn btn-primary btn-edit"><a href="{{route('art.edit',$d->id)}}">Edit</a></button>
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

@push('page_scripts')
    @include('administrator.layouts.assets.js.datatables_js')

    <script>
       

        $(document).ready(function() {
            /**
             * edit user
             */
            $('#table-user').on('click', '.btn-edit', function(event) {
                event.preventDefault();
                resetForm($('#user-form'));
                const id = $(this).data('id');
                $('.modal-title').html(`<i class="fas fa-pencil-alt"></i>  Edit User`);
                $('#user-id').val(id);
                $('.user-modal').modal('toggle');
            });

            /**
             * Submit modal
             */
            $('#user-form').submit(function(event){
                event.preventDefault();
                const formData = new FormData(this);
                formData.append('_method', 'PUT');
                formData.append('_token', '{{ csrf_token() }}');
                $.ajax({
                    url: '{{ route('manage.user.update', ['id' => 1]) }}',
                    data: formData,
                    type:'POST',
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        $('.btn-save').attr("disabled", true);
                        $('.btn-save').text('Mengubah status...');
                    },
                    complete: function () {
                        $('.btn-save').attr("disabled", false);
                        $('.btn-save').text('Simpan Perubahan');
                    },
                    success: function (data) {
                        if(data.status == 200) {
                            swalSuccess('', data.nessage);
                            tableUser();
                            $('.user-modal').modal('toggle');
                        }
                    }
                });
                return false;
            })

            /**
             * Delete user
             */
            $('#table-user').on('click', '.btn-delete', function(event){
                event.preventDefault();
                const id       = $(this).data('id');
                const name     = $(this).data('first_name');
                const formData = new FormData();
                const url      = "{{ route('manage.user.delete', ['id' => ':id']) }}";
                formData.append('id', id);
                formData.append('first_name', name);
                formData.append('_method', 'DELETE');
                formData.append('_token', '{{ csrf_token() }}');
                swalConfirm({
                    title: 'Delete user?',
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
                                tableUser();
                                swalSuccess('',result.message);
                            }
                        })
                    }
                })
            })
        })
    </script>
@endpush
