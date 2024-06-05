@extends('admin.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('admin/css/property/property-add.css') }}">

    <script src="https://cdn.tiny.cloud/1/ju1bvikv973o0e3f8964tro1flrl91rhqoyng6mnle3mvrux/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#description',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                "See docs to implement AI Assistant")),
        });
    </script>
@endsection


@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Property Add</h6>
        </div>
        <div class="card-body">
            <form id="uploadForm" method="POST" action="{{ route('admin.property.submit') }}" enctype="multipart/form-data">
                @csrf

                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Property
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">

                                <div class="">
                                    <div class="row">
                                        <div class="col-lg-4 mb-3 col-sm-12">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" required name="title"
                                                id="title">
                                        </div>

                                        <div class="col-lg-4 mb-3 col-sm-12">
                                            <label for="registration" class="form-label">registration</label>
                                            <input type="text" class="form-control" name="registration"
                                                id="registration">
                                        </div>

                                        <div class="col-lg-2 mb-3 col-sm-12">
                                            <label for="bedroom" class="form-label">Bedroom</label>
                                            <input type="number" class="form-control" name="bedroom" id="bedroom">
                                        </div>
                                        <div class="col-lg-2 mb-3 col-sm-12">
                                            <label for="bathroom" class="form-label">Bathroom</label>
                                            <input type="number" class="form-control" name="bathroom" id="bathroom">
                                        </div>

                                    </div>

                                    <div class="row my-3">
                                        <div class="col-lg-4 mb-3 col-sm-12">
                                            <label for="short_description" class="form-label">Short Description</label>
                                            <textarea class="form-control" name="short_description" id="short_description"> </textarea>
                                        </div>

                                        <div class="col-lg-2 mb-3 col-sm-12">
                                            <label for="min_rate" class="form-label">Min Rate</label>
                                            <input type="number" class="form-control" name="min_rate" id="min_rate">
                                        </div>
                                        <div class="col-lg-2 mb-3 col-sm-12">
                                            <label for="max_rate" class="form-label">Max Rate</label>
                                            <input type="number" class="form-control" name="max_rate" id="max_rate">
                                        </div>

                                        <div class="col-lg-2 mb-3 col-sm-12">
                                            <label for="sleep" class="form-label">Sleep</label>
                                            <input type="number" class="form-control" name="sleep" id="sleep">
                                        </div>
                                        <div class="col-lg-2 mb-3 col-sm-12">
                                            <label for="sqft" class="form-label">sqft</label>
                                            <input type="number" class="form-control" name="sqft" id="sqft">
                                        </div>

                                    </div>

                                    <div class="row my-3">
                                        <div class="col-lg-4 mb-3 col-sm-12">
                                            <label for="aboutOwner" class="form-label">About Owner</label>
                                            <textarea class="form-control" name="about_owner" id="aboutOwner"></textarea>
                                        </div>
                                        <div class="col-lg-4 mb-3 col-sm-12">
                                            <label for="location" class="form-label">Location</label>
                                            <textarea class="form-control" name="location" id="location"> </textarea>
                                        </div>
                                        <div class="col-lg-2 mb-3 col-sm-12">
                                            <label for="latitude" class="form-label">latitude</label>
                                            <input type="number" class="form-control" name="latitude" id="latitude">
                                        </div>
                                        <div class="col-lg-2 mb-3 col-sm-12">
                                            <label for="longitude" class="form-label">longitude</label>
                                            <input type="number" class="form-control" name="longitude" id="longitude">
                                        </div>
                                    </div>

                                    <div class="row my-3">
                                        <div class="col-lg-4 mb-3 col-sm-12">
                                            <label class="text-center">Featured Image</label>
                                            <!-- Div to trigger file input -->
                                            <div id="uploadDiv" class="upload-container">
                                                Click here to upload image
                                            </div>
                                            <!-- Hidden file input -->
                                            <input type="file" id="imageInput" name="featured_image" class="d-none"
                                                accept="image/*">
                                        </div>

                                        <div class="col-lg-8 mb-3 col-sm-12">
                                            <label class="text-center">Other Images</label>
                                            <input type="file" id="files" name="images[]" multiple />
                                        </div>
                                    </div>

                                    <div class="row my-3">

                                        <div class="col-lg-12 mb-3 col-sm-12 h-75">
                                            <label for="Description" class="form-label">Detail Description</label>
                                            <textarea id="description" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Amenities
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 mb-3 col-sm-12">
                                        <label for="property_type" class="form-label">Property Type</label>
                                        <input type="text" class="form-control"   name="property_type"
                                            id="property_type">
                                    </div>

                                    <div class="col-lg-4 mb-3 col-sm-12">
                                        <label for="accommodation" class="form-label">Accommodation</label>
                                        <input type="text" class="form-control" name="accommodation"
                                            id="accommodation">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary my-3">Submit</button>
            </form>


        </div>
    </div>
@endsection


@section('script')
    <script>
        var selectedfiles;
        var selectedfile;
        var fileIndex;

        $(document).ready(function() {

            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                    var files = e.target.files,
                        selectedfiles = files;
                    console.log(selectedfiles);
                    filesLength = files.length;

                    for (var i = 0; i < filesLength; i++) {
                        selectedfile = files[i]
                        fileIndex = i;

                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result +
                                "\" title=\"" + selectedfile.name + "\"/>" +
                                "<br/>" +
                                "<span class=\"filename\">" + selectedfile.name + "</span>" +
                                "<br/>" +
                                "<span class=\"edit\">Edit</span>" +
                                "<span class=\"remove\" onclick=\"removeImage('" +
                                selectedfile.name + "')\">Remove</span>" +
                                "</span>").insertAfter("#files");

                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                            });

                            $(".edit").click(function() {
                                var newName = prompt("Enter new name:");
                                if (newName !== null) {
                                    $(this).siblings('.filename').text(newName);
                                }
                            });
                        });
                        fileReader.readAsDataURL(selectedfile);
                    }
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });

        function removeImage(name) {
            selectedfiles = document.getElementById("files").files;
            var final = [];
            $.each(selectedfiles, function(index, value) {
                if (value.name !== name) {
                    final.push(value);
                }
            });
            document.getElementById("files").files = new FileListItem(final);
        }

        function FileListItem(a) {
            a = [].slice.call(Array.isArray(a) ? a : arguments)
            for (var c, b = c = a.length, d = !0; b-- && d;) d = a[b] instanceof File
            if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
            for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(a[c])
            return b.files
        }
    </script>
    <script src="{{ asset('admin/js/property/property-add.js') }}"></script>
@endsection
