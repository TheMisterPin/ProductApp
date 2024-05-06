<table class="table">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity in Stock</th>
            <th>Price per Item</th>
            <th>Datetime Submitted</th>
            <th>Total Value</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product['productName'] ?? 'Default Product' }}</td>
            <td>{{ $product['quantity'] ?? '0' }}</td>
            <td>{{ $product['price'] ?? '0.00' }}</td>
            <td>{{ $product['datetime'] ?? now()->toDateTimeString() }}</td>
            <td>{{ $product['totalValue'] ?? '0.00' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>