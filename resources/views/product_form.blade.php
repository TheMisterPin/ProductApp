<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Product From</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles -->

</head>

<body>
    <div class="container mt-5">
        <form id="productForm">
            @csrf
            <div class="mb-3">
                <label for="productName" class="form-label">
                    Product Name
                </label>
                <input type="text" class="form-control" id="productName" name="productName" required>

            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">
                    Quantity
                </label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>

            </div>
            <div class="mb-3">
                <label for="price" class="form-label">
                    Price
                </label>
                <input type="number" class="form-control" id="price" name="price" required>

            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
        <div id="productDisplay"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#productForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '{{ route("save.product") }}',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#productDisplay').html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>