@extends('admin.index')
@section('content')
<div class="container">
    <h3>This order has:</h3>
    <div class="card-body table-full-width table-reponsive">
        <table class="table" id="table-index">
            <thead class="thead-dark">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            @foreach ($order_detail as $detail)
            <tr class="my-2">
                <td>
                    <img src="{{ asset('storage/' . $detail['product']->image) }}" alt="" height="120px">
                </td>
                <td>{{ $detail['product']->name }}</td>
                <td>{{ $detail['product']->price }}</td>
                <td>
                    <span class="quantity-display my-5">{{ $detail['quantity'] }}</span>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection