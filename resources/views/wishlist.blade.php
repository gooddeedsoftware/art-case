@extends('layouts.app')

@section('content')
      <!-- main section -->
      <div class="poetryWrapper">
        <div class="container">
        <div class="row">
			    <div class="col-md-12">
			        <h1 class="main-heading text-center mb-10 text-uppercase">My Wishlist</h1>
			        <div class="table-wishlist">
				        <table cellpadding="0" cellspacing="0" width="100%">
				        	<thead>
					        	<tr>
					        		<th width="30%">Art</th>
					        		<th width="20%">Title</th>
					        		<th width="15%">Price</th>
					        		<th width="15%"></th>
					        		<th width="15%"></th>
					        	</tr>
					        </thead>
					        <tbody>
                            @if (Auth::user()->wishlist->count() )
                                @foreach (Auth::user()->wishlist as $wishlist)
                                    <tr>
                                        <td width="30%">
                                            <div class="img-product">
                                                <img src="{{asset('uploads/art/'.$wishlist->listing->image)}}" alt="" class="mCS_img_loaded">
                                            </div>
                                        </td>
                                        <td width="20%" class="price">{{$wishlist->listing->title}}</td>
                                        <td width="15%" class="price">INR {{$wishlist->listing->price}}</td>
                                        <td width="15%"><button class="round-black-btn small-btn">Buy</button></td>
                                        <td width="15%" class="text-center"><a href="#" class="trash-icon"><i class="far fa-trash-alt removeWishlist" data-id="{{$wishlist->id}}"></i></a></td>
                                    </tr>
                                @endforeach
                            @endif
				        	</tbody>
				        </table>
				    </div>
			    </div>
			</div>
        </div>
      </div>

      <!-- main section -->
@endsection
@section('script')
<script>
    $(document).on('click', '.removeWishlist', function() {
        let id = $(this).data('id');
        const url = "{{ route('remove-wishlist', ['id' => ':id']) }}";
        const formData = new FormData();
        formData.append('id', id);
        formData.append('_token', '{{ csrf_token() }}');
        $.ajax({
            url: url.replace(':id', id),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(result) {
                console.log(result);
                location.reload();
            }
        })
    });

</script>
@endsection