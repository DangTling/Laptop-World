@extends('admin.index')
@section('content')
@push('css')
<link rel="stylesheet" href="{{asset('css/InserForm.scss')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush

<div class="container">
    <div class="row">

        <div id="form-header" class="col-12">
            <h1 id="title">PARTNER COMPANY:</h1>
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
            <form id="survey-form" action="{{route('companies.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-group">
                    <div class="col-sm-3">
                        <label id="name-label" class="control-label" for="name">*Name:</label>
                    </div>

                    <div class="input-group col-sm-9">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon-name"><i class="fa fa-user"></i></span>
                        </div>
                        <input id="name" type="text" class="form-control" placeholder="Please Enter Company's Name"
                            name="name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label id="email-label" class="control-label" for="email">*Email:</label>
                    </div>

                    <div class="input-group col-sm-9">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon-mail"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" id="email" placeholder="Enter Company's Email"
                            name="email" pattern="^[-+.\w]{1,64}@[-.\w]{1,64}\.[-.\w]{2,6}$" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label id="number-label" class="control-label" for="number">*Phone Number:</label>
                    </div>

                    <div class="input-group col-sm-9">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon-room"><i class="fa fa-door-open"></i></span>
                        </div>
                        <input type="number" class="form-control" id="number" placeholder="Enter Company's Phone Number"
                            name="phone-number" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label id="number-label" class="control-label" for="address">*Headquarters:</label>
                    </div>

                    <div class="input-group col-sm-9">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon-room"><i
                                    class="fa-solid fa-map-location"></i></span>
                        </div>
                        <input type="text" class="form-control" id="address" placeholder="Enter Company's Headquarters"
                            name="headquarter" required>
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
                        <input type="text" class="form-control" id="comment" placeholder="Enter Company's Description"
                            name="description" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-3">
                        <label id="number-label" class="control-label" for="logo">*Logo:</label>
                    </div>

                    <div class="input-group col-sm-9">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon-room"><i
                                    class="fa-solid fa-image"></i></span>
                        </div>
                        <input type="file" class="file-upload" id="logo" placeholder="Enter Company's Logo" name="logo"
                            required>
                    </div>

                </div>

                <div class="avatar-wrapper">
                    <img class="profile-pic" src="" />
                    <div class="upload-button">
                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
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
          
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
      
                reader.onload = function (e) {
                    $('.profile-pic').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }
       
        $(".file-upload").on('change', function(){
            readURL(this);
        });
        
        $(".upload-button").on('click', function() {
           $(".file-upload").click();
        });
      });
</script>


@endsection