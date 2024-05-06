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
        @php $grandTotal = 0; @endphp
        @foreach ($products as $product)
        <tr>
            <td>{{ $product['productName'] ?? 'Default Product' }}</td>
            <td>{{ $product['quantity'] ?? '0' }}</td>
            <td>{{ $product['price'] ?? '0.00' }}</td>
            <td>{{ $product['datetime'] ?? now()->toDateTimeString() }}</td>
            <td>{{ $product['totalValue'] ?? '0.00' }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4" class="text-end"><strong>Grand Total:</strong></td>
            <td><strong>{{ $grandTotal }}</strong></td>
        </tr>
    </tbody>
</table>