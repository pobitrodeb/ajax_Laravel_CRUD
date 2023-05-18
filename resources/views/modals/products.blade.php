<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="" method="POST" enctype="multipart/form-data" id="addProductForm">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product Form </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label id="name">Product Name </label>
                        <input type="text" class="form-control"  aria-describedby="emailHelp"
                            placeholder="Enter Product Name" id="name" name="name">
                        <small id="emailHelp" class="form-text text-muted">Must be add with code </small>
                    </div>
                    <div class="form-group">
                        <label id="price">Product Price </label>
                        <input type="number" class="form-control"  aria-describedby="emailHelp"
                            placeholder="Enter Product Price" id="price" name="price">
                        <small id="emailHelp" class="form-text text-muted">You can double number</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary add_product">Save Product</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
    </form>
</div>
