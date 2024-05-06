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
            <td>{{ $product['productName'] }}</td>
            <td>{{ $product['quantity'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['datetime'] }}</td>
            <td>{{ $product['totalValue'] }}</td>
            @php $grandTotal += $product['totalValue']; @endphp
        </tr>
        @endforeach
        <tr>
            <td colspan="4" class="text-end"><strong>Grand Total:</strong></td>
            <td><strong>{{ $grandTotal }}</strong></td>
        </tr>
    </tbody>
</table>