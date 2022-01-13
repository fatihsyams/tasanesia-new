<!-- Modal -->
<div class="modal fade" id="productEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('product.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="card">
        <div class="card-body">
            <div class="col m-3">

                <label for="" class="">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $item->name }}">

                <label for="" class="">Price</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ $item->price }}">

                <label for="" class="">Quantity</label>
                <input type="text" name="quantity" id="quantity" class="form-control" value="{{ $item->quantity }}">

                <label for="" class="">Description</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $item->description }}">

                <label for="" class="">Status</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ $item->status }}">

            </div>
            <div class="card-footer">
                <button type="submit btn btn-warning" class="btn btn-success  text-white">
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