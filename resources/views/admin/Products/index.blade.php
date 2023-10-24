@extends('admin.index')
@section('content')
<div class="card-body table-full-width">
    <div class="d-flex justify-content-between">
        <a class="btn btn-success" href=" {{ route('products.create') }} ">
            Thêm Sản Phẩm
        </a>
        <form class="form-horizontal">
            <label class="mr-2">Search</label> <input type="text" type="search" name="q" value="{{ $search }}">
        </form>
    </div>
    <table class="table" id="table-index">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $each)
        <tr class="my-2">
            <td> {{ $each->id }} </td>
            <td> {{ $each->name }} </td>
            <td> {{ $each->type }} </td>
            <td> {{ $each->price }} </td>
            <td>
                <img src="{{asset('/storage/'.$each->image)}}" alt="Image about products" style="height: 50px">
                <img src="{{asset('/storage/'.$each->image_second)}}" alt="Image about products" style="height: 50px">
                <img src="{{asset('/storage/'.$each->image_third)}}" alt="Image about products" style="height: 50px">
            </td>
            <td class="d-flex">
                <a href="{{ route('products.edit', $each) }}" class="mx-2">
                    <button class="btn btn-primary">Edit</button>
                </a>
                <form action="{{ route('products.destroy', $each) }}" method="post">
                    @csrf
                    @method('Delete')
                    <button class="btn   btn-danger">Delete</button>
                </form>

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