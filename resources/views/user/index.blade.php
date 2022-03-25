@extends('tampilan')

@section('css')

    <!-- DataTables -->
    <link href="{{asset('/template/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/template/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('/template/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/template/assets/style.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('page_awal')
    data klien
@endsection

@section('page_title')
    Data Klien
@endsection

@section('conten')

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="kartu">
                        <div class="logo">
                            <img src="{{ asset('template/assets/images/email.png') }}" alt="email">
                            <p class="total">
                                48
                            </p>
                        </div>
                        <div class="title">
                            <a href="/user/dokumen_surat">Dokumen Surat</a>
                        </div>
                    </div>
                    <div class="kartu">
                        <div class="logo">
                            <img src="{{ asset('template/assets/images/email.png') }}" alt="email">
                            <p class="total">
                                48
                            </p>
                        </div>
                        <div class="title">
                            <a href="/user/dokumen_surat">Dokumen Surat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section('javascript')

    <!-- Required datatable js -->
    <script src="{{asset('/template/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('/template/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{asset('/template/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('/template/assets/pages/datatables.init.js')}}"></script>

@endsection
