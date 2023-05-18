<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="" method="POST" id="addProductForm">
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

                    <div class="errorMessage">

                    </div>

                    <div class="form-group">
                        <label id="">Product Name </label>
                        <input type="text" class="form-control" placeholder="Enter Product Name" id="name" name="name">

                    </div>
                    <div class="form-group">
                        <label id="">Product Price </label>
                        <input type="number" class="form-control"placeholder="Enter Product Price" id="price" name="price">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary add_product">Save Product</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
    </form>
</div>
