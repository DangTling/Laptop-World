@extends('admin.index')
@section('content')
<div class="card-body table-full-width">
    <div class="d-flex justify-content-between">
        <form class="form-horizontal">
            <label class="mr-2">Search</label> <input type="text" type="search" name="q" value="{{ $search }}">
        </form>
    </div>
    <table class="table" id="table-index">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Date Of birdth</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $each)
        <tr class="my-2">
            <td> {{ $each->id }} </td>
            <td>
                <img src="{{asset('/storage/'.$each->avatar)}}" alt="Image about user" style="height: 50px">
            </td>
            <td> {{ $each->name }} </td>
            <td> {{ $each->birth_of_date }} </td>
            <td> {{ $each->phone_number }} </td>
            <td> {{$each->address}} </td>
            <td class="d-flex">
                <form action="{{ route('users.destroy', $each) }}" method="post">
                    @csrf
                    @method('Delete')
                    <button class="btn btn-danger">Delete</button>
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