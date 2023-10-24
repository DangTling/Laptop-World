@extends('admin.index');
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/InserForm.scss')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush
<div class="container">
    <div class="row">
        <div id="form-header" class="col-12">
            <h1 id="title">EXISTING PRODUCT:</h1>
        </div>
    </div>

    <div class="row">
        <div id="form-tagline" class="col-md-4">
            <div class="form-tagline">
                <i class="fa fa-envelope fa-5x"></i>
                <h2>How Are We Doing?</h2>
                <p id="description" class="lead">We really value your opinion</p>
            </div>
        </div>

        <div id="form-content" class="col-md-8">
            <form id="survey-form" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col-sm-3">
                        <label id="name-label" class="control-label" for="name">*Name:</label>
                    </div>

                    <div class="input-group col-sm-9">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon-name"><i class="fa fa-user"></i></span>
                        </div>
                        <input id="name" type="text" class="form-control" placeholder="Please Enter Product's Name"
                            name="name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label id="email-label" class="control-label" for="type">*Type:</label>
                    </div>

                    <div class="input-group col-sm-9">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon-mail"><i class="fa-solid fa-tags"></i></span>
                        </div>
                        <input type="text" class="form-control" id="type" placeholder="Enter Product's Type" name="type"
                            required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label id="number-label" class="control-label" for="price">*Price:</label>
                    </div>

                    <div class="input-group col-sm-9">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon-room"><i
                                    class="fa-solid fa-money-bill-wave"></i></span>
                        </div>
                        <input type="number" class="form-control" id="price" placeholder="Enter Product's Price"
                            name="price" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label id="number-label" class="control-label" for="producer">*Producer:</label>
                    </div>

                    <div class="input-group col-sm-9">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon-room"><i
                                    class="fa-solid fa-building"></i></span>
                        </div>
                        <select name="producer" id="producer_id" class="form-control">
                            @foreach($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label id="number-label" class="control-label" for="comment">*Describe:</label>
                    </div>

                    <div class="input-group col-sm-9">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon-room"><i
                                    class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        <input type="text" class="form-control" id="comment" placeholder="Enter Product's Description"
                            name="description" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label id="number-label" class="control-label" for="image">*Described Image:</label>
                    </div>

                    <div class="input-group col-sm-9">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon-room"><i
                                    class="fa-solid fa-image"></i></span>
                        </div>
                        <div class="d-flex my-3">
                            <input type="file" class="file-upload" id="image" placeholder="Enter Product's Image"
                                name="image" required hidden>
                            <input type="file" class="file-upload-second" id="image" placeholder="Enter Product's Image"
                                name="image-second" required hidden>
                            <input type="file" class="file-upload-third" id="image" placeholder="Enter Product's Image"
                                name="image-third" required hidden>
                        </div>
                    </div>

                </div>

                <div class="d-flex">
                    <div class="avatar-wrapper">
                        <img class="profile-pic first" src="" />
                        <div class="upload-button btn-first">
                            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="avatar-wrapper">
                        <img class="profile-pic second" src="" />
                        <div class="upload-button btn-second">
                            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="avatar-wrapper">
                        <img class="profile-pic third" src="" />
                        <div class="upload-button btn-third">
                            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-12 submit-button">
                        <button type="submit" id="submit" class="btn btn-default" aria-pressed="true">Submit
                            Form</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {  	
        var readURL = function(input, imgClass) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(imgClass).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".btn-first").on('click', function() {
        $(".file-upload").click();
        });
    $(".btn-second").on('click', function() {
        $(".file-upload-second").click();
    });
    $(".btn-third").on('click', function() {
        $(".file-upload-third").click();
    });

    $(".file-upload").on('change', function(){
        readURL(this, '.first');
    });
    $(".file-upload-second").on('change', function(){
        readURL(this, '.second');
    });
    $(".file-upload-third").on('change', function(){
        readURL(this, '.third');
    });
    });
</script>

@endsection