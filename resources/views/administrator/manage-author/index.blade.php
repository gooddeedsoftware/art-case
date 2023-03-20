@extends('administrator.layouts.app')

@push('page_css')
    @include('administrator.layouts.assets.css.datatables_css')
@endpush

@section('content-header')
    @component('administrator.components.content-header')
        @slot('title')
            Management Author
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
                            <h3 class="card-title">Management Author</h3>

                        </div>
                        <div class="col-6 d-flex  justify-content-end">
                            <a href="{{route('manage.user.createAuthor')}}" class="btn btn-primary">Create Author</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="table-user" class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr role="row">
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $d)
                                    <tr role="row">
                                            <th>{{$d->id}}</th>
                                            <th>{{$d->first_name}}</th>
                                            <th>{{$d->email}}</th>
                                            <th>{{$d->mobile}}</th>
                                            <th>
                                            <a  type="button"  class="btn btn-sm btn-primary btn-edit"
                                                    href="">
                                                        <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a type="button" data-id="{{$d->id}}" data-name="" class="btn btn-danger btn-sm btn-delete"><i class="fas fa-trash-alt"></i></a>
                                           
                                            </th>
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
    <!-- Modal -->
    <div class="modal fade user-modal" tabindex="-1" role="dialog" aria-labelledby="user-modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-pencil-alt"></i> Create User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="user-form" id="user-form">
                    <input id="user-id" type="hidden">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="John doe">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="john@example.com">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary btn-save" value="Save">
                    </div>
                </form>
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
