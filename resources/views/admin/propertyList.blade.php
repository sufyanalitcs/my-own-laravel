@extends('admin.layouts.app')

@section('styles')
    <style>
        .feautred-img {
            height: 5vw;
        }

        .feautred-img img {
            height: 100%;
        }
    </style>
@endsection


@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Property List</h6>
        </div>
        <div class="card-body">
            <div class="d-flex my-3 justify-content-end">
                <a class="btn btn-success" href="{{ route('admin.property.add') }}">Add New</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Short Desc.</th>
                            <th>Image</th>
                            <th>From - To Rate</th>
                            <th>Bed</th>
                            <th>Bath</th>
                            <th>Sleeps</th>
                            <th>sqft</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Short Desc.</th>
                            <th>Image</th>
                            <th>From - To Rate</th>
                            <th>Bed</th>
                            <th>Bath</th>
                            <th>Sleeps</th>
                            <th>sqft</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if (isset($data['lists']) && count($data['lists']) > 0)
                            @foreach ($data['lists'] as $key => $property)
                                <tr>
                                    <td width="5">{{ $key + 1 }}</td>
                                    <td width="20">{{ $property->name }}</td>
                                    <td width="25">{{ $property->short_description }}</td>
                                    <td width="25">
                                        <div class="feautred-img">
                                            <img src="{{ asset('public/front/images/product/' . $property->featured_image) }}"
                                                alt="{{ $property->name }}">
                                        </div>
                                    </td>
                                    <td width="5">$ {{ $property->min_price . ' - ' . $property->max_price }} /night
                                    </td>
                                    <td width="5">{{ $property->bedroom }}</td>
                                    <td width="5">{{ $property->bathroom }}</td>
                                    <td width="5">{{ $property->sleeps }}</td>
                                    <td width="5">{{ $property->sqft }}</td>
                                    <td width="5">
                                        <a class="btn btn-success" href="{{ route('admin.property.edit' , $property->id) }}" > Edit</a>
                                        <a class="btn btn-danger" href="{{ route('admin.property.delete' , $property->id) }}" > Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('public/admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/admin/js/contact-list/script.js') }}"></script>
@endsection
