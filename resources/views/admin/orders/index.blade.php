@extends('admin.index')
@section('content')
<div class="card-body table-full-width">
    <div class="d-flex justify-content-between">
        <form class="form-horizontal">
            <label class="mr-2">Search</label> <input type="number" type="search" name="q" value="{{ $search }}">
        </form>
    </div>
    <table class="table" id="table-index">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>ID of user</th>
                <th>Name of Receiver</th>
                <th>Phone Number of Receiver</th>
                <th>Address to receive</th>
                <th>Total Payment</th>
                <th>Status</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $each)
        <tr class="my-2">
            <td> {{ $each->id }} </td>
            <td> {{$each->user_id}} </td>
            <td> {{ $each->receiver_name }} </td>
            <td> {{ $each->receiver_phone_number }} </td>
            <td> {{ $each->receiver_address }} </td>
            <td> {{$each->total_payment}} </td>
            <td> {{$statusMapping[$each->status]}} </td>
            <td>
                <a href="{{route('orders.edit', $each)}}">
                    <button class="btn btn-primary">See Detail</button>
                </a>
            </td>
            <td class="d-flex justify-content-between">
                @if ($each->status === 0)
                <form action="{{ route('orders.destroy', $each) }}" method="post">
                    @csrf
                    @method('Delete')
                    <button class="btn btn-danger">Cancell</button>
                </form>
                <a href="{{route('orders.accept', $each)}}">
                    <button class="btn btn-danger">Accpet</button>
                </a>
                @endif
            </td>
        </tr>
        @endforeach
    </table>

    <ul class="pagination pagination-primary">
        {{ $data->links() }}
    </ul>
</div>
</div>
@endsection