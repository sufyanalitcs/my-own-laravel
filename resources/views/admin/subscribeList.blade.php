@extends('admin.layouts.app')


@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Subscribe Newsletter</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @if(isset($data['lists']) && count( $data['lists'] )  > 0 )
                        @foreach ($data['lists'] as $key => $contact)
                            
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $contact->email }}</td>
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
