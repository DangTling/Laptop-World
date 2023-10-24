@extends('admin.index')
@section('content')
<div class="card-body table-full-width">
    <div class="d-flex justify-content-between">
        <a class="btn btn-success" href=" {{ route('companies.create') }} ">
            Thêm Đối tác
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
                <th>Logo</th>
                <th>Email</th>
                <th>Headquarter</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $each)
        <tr class="my-2">
            <td> {{ $each->id }} </td>
            <td> {{ $each->name }} </td>
            <td>
                <img src="{{asset('/storage/'.$each->logo)}}" alt="Company Logo" style="height: 50px">
            </td>


            <td> {{ $each->email }} </td>
            <td> {{ $each->headquarter }} </td>
            <td class="d-flex">
                <a href="{{ route('companies.edit', $each) }}" class="mx-2">
                    <button class="btn btn-primary">Edit</button>
                </a>
                <form action="{{ route('companies.destroy', $each) }}" method="post">
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