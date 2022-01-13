
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field()}}
    <div class="card">
        <div class="card-body">
            <div class="col m-3">
            <label for="" class="">Name</label>
                @if(blank($user))
                <input type="text" name="name" id="name" class="form-control" placeholder="">
                @else
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                @endif

                <label for="" class="">email</label>
                @if(blank($user))
                <input type="email" name="email" id="email" class="form-control" placeholder="">
                @else
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                @endif

                <label for="" class="">No Handphone</label>
                @if(blank($user))
                <input type="text" name="no_handphone" id="no_handphone" class="form-control" placeholder="">
                @else
                <input type="text" name="no_handphone" id="no_handphone" class="form-control" value="{{ $user->phone }}">
                @endif

                 <label for="" class="">Name Product</label>
                <input type="text" name="name_product" id="name_product" class="form-control" value="{{ $product->name }}">

                <label for="" class="">Quantity</label>
                <input type="text" name="quantity_product" id="quantity_product" class="form-control">

                <label for="" class="">Address</label>
                <input type="text" name="address_product" id="address_product" class="form-control">

                <label for="" class="">Description</label>
                <input type="text" name="description_product" id="description_product" class="form-control">
            </div>
            <div class="card-footer">
                <button type="submit btn btn-warning" class="btn btn-success  text-white" onclick="return confirm('Are you sure for order this product?')">
                    SUBMIT
                </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</form>
      </div>
    </div>
  </div>
</div>