<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).ready(function(){
            // alert('ok');
            $(document).on('click', '.add_product', function(e){
                e.preventDefault();
                let name = $('#name').val();
                let price = $('#price').val();
                // console.log(name+price);
            })
            $.ajax({
                url: "{{ route('add.product') }}",
                method: 'post',
                data: {name:name, price:price},
                success: function(response){
                // if(response.state == 4 && response.status == 200){
                if(response.status == 'success'){
                    $('#addProductModal').modal('hide');
                    $('#addProductForm')[0].reset();
                    $('.table').load(location.herf+ ' .table');
                }
                },error:function(err){
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value){
                        $('.errorMessage').append('<span class="text-danger">'+value+'</span>'+'<br>');
                    });
                }
            })
        })
    </script>
