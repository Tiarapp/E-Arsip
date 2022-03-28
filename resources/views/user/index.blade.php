@extends('tampilan')

@section('css')

    <!-- DataTables -->
    <link href="{{asset('/template/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/template/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('/template/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/template/assets/css/custome.css')}}" rel="stylesheet" type="text/css" />

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
                    <div class="wrapper-dash">
                        <div class="kartu">
                            <div class="logo-dash">
                                <img src="{{ asset('template/assets/images/email.png') }}" alt="email">
                                <p class="total">
                                    {{ $dokumen_surat }}
                                </p>
                            </div>
                            <div class="title">
                                <p>Dokumen Surat</p>
                            </div>
                            <div class="btn-next">
                                <a href="/user/dokumen_surat">See More Document</a>
                            </div>
                        </div>
                        <div class="kartu">
                            <div class="logo-dash">
                                <img src="{{ asset('template/assets/images/email.png') }}" alt="email">
                                <p class="total">
                                    {{ $dokumen_aset }}
                                </p>
                            </div>
                            <div class="title">
                                <p>Dokumen Aset</p>
                            </div>
                            <div class="btn-next">
                                <a href="/user/dokumen_aset">See More Document</a>
                            </div>
                        </div>
                        <div class="kartu">
                            <div class="logo-dash">
                                <img src="{{ asset('template/assets/images/email.png') }}" alt="email">
                                <p class="total">
                                    {{ $dokumen_keuangan }}
                                </p>
                            </div>
                            <div class="title">
                                <p>Dokumen Keuangan</p>
                            </div>
                            <div class="btn-next">
                                <a href="/user/dokumen_keuangan">See More Document</a>
                            </div>
                        </div>
                        <div class="kartu">
                            <div class="logo-dash">
                                <img src="{{ asset('template/assets/images/email.png') }}" alt="email">
                                <p class="total">
                                    {{ $dl }}
                                </p>
                            </div>
                            <div class="title">
                                <p>Dokumen Lain-lain</p>
                            </div>
                            <div class="btn-next">
                                <a href="/user/dokumen_lain">See More Document</a>
                            </div>
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
