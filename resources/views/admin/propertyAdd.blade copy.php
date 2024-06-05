@extends('admin.layouts.app')

@section('styles')
    <style>
        .upload-container {
            border: 2px dashed #ccc;
            padding: 0.5rem;
            cursor: pointer;
            text-align: center;
            height: 5vw;
            width: 100%;
        }

        .upload-container img {
            max-width: 100%;
            height: 100%;
        }

        /* Style for the upload container */
        .upload-container-multi {
            border: 2px dashed #ccc;
            padding: 0.5rem;
            cursor: pointer;
            text-align: center;
            height: 5vw;
            width: 100%;
        }

        .upload-container-multi img {
            max-width: 100%;
            height: 100%;
            margin: 0 0.5rem
        }
    </style>
@endsection


@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Property Add</h6>
        </div>
        <div class="card-body">
            {{-- <form method="POST" action="{{ route('admin.property.submit') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-4 mb-3 col-sm-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="col-lg-2 mb-3 col-sm-12">
                        <label for="bed" class="form-label">Bed</label>
                        <input type="text" class="form-control" name="bed" id="bed">
                    </div>

                    <div class="col-lg-2 mb-3 col-sm-12">
                        <label for="bath" class="form-label">Bath</label>
                        <input type="text" class="form-control" name="bath" id="bath">
                    </div>
                    <div class="col-lg-2 mb-3 col-sm-12">
                        <label for="sleep" class="form-label">Sleep</label>
                        <input type="text" class="form-control" name="sleep" id="sleep">
                    </div>
                    <div class="col-lg-2 mb-3 col-sm-12">
                        <label for="sqft" class="form-label">sqft</label>
                        <input type="text" class="form-control" name="sqft" id="sqft">
                    </div>

                    <div class="col-lg-3 mb-3 col-sm-12">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea class="form-control" name="short_description" id="short_description"> </textarea>
                    </div>

                    <div class="col-lg-3 mb-3 col-sm-12">
                        <label class="text-center">Featured Image</label>
                        <!-- Div to trigger file input -->
                        <div id="uploadDiv" class="upload-container">
                            Click here to upload image
                        </div>
                        <!-- Hidden file input -->
                        <input type="file" id="imageInput" class="d-none" accept="image/*">
                    </div>


                    <div class="col-lg-6 mb-3 col-sm-12">
                        <label class="text-center">Other Images</label>
                        <!-- Div to trigger file input -->
                        <div id="uploadDivMulti" class="upload-container-multi">
                            Click here to upload images
                        </div>
                        <!-- Hidden file input -->
                        <input type="file" id="imageInputMulti" class="d-none" accept="image/*" multiple>
                    </div>


                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form> --}}
 
            <form id="uploadForm" action="{{ route('admin.property.submit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" id="images" name="images[]" multiple>
                <div id="imagePreview"></div>
                <br>
                <br>
                <button type="submit">Upload Images</button>
            </form>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('admin/js/property/property-add.js') }}"></script>
@endsection
