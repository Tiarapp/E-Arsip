@extends('tampilan')

@section('css')

    <!-- Plugins css -->
    <link href="{{asset('/template/assets/plugins/timepicker/tempusdominus-bootstrap-4.css')}}" rel="stylesheet" />
    <link href="{{asset('/template/assets/plugins/timepicker/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('/template/assets/plugins/clockpicker/jquery-clockpicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/template/assets/plugins/colorpicker/asColorPicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/template/assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />


    <link href="{{asset('/template/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />

    <style>
        .col-md-12{
            margin-top: 10px;
        }
    </style>

@endsection

@section('page_awal')
    <a href="/user/klien">Data Klien</a>
@endsection

@section('page_aktif')
    View data klien
@endsection

@section('page_title')
    Data Klien
@endsection

@section('conten')

    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Detail Data Klien</h4>

                        <div class="row form-material">

                            <div class="col-md-12">
                                <div id="image">
                                    <img class="img-thumbnail img-fluid mx-auto d-block" alt="200x200" height="200px" width="200px" src="{{asset('/foto/'.$klien->foto)}}" data-holder-rendered="true">
                                </div>
                                {{-- <div class="mt-2 text-center"><code class="font-16">.rounded-circle</code></div> --}}
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted">Nama Klien</h6>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{$klien->nama}}" readonly>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted">Tanggal Lahir</h6>
                                <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{$klien->tgl_lahir->format('d-m-Y')}}" readonly>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted">Jenis Kelamin</h6>
                                <input type="text" name="jns_kel" id="jns_kel"  class="form-control" value="{{$klien->jenis_kel}}" readonly>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted">Asal Usul Alamat</h6>
                                <textarea id="textarea" name="alamat" id="alamat" class="form-control" maxlength="225" rows="3" placeholder="Maksimal hanya 255 huruf" readonly> {{$klien->alamat}} </textarea>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted">Tanggal Masuk</h6>
                                <input type="text" name="tgl_msk" id="tgl_msk" class="form-control" value="{{$klien->tgl_msk}}" readonly>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted">Keterangan</h6>
                                <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{$klien->keterangan}}" readonly>
                            </div>

                        </div>

                        <div class="form-group mb-0" style="margin-top: 10px;">
                            <div>
                                <button type="reset" class="btn" onclick="window.history.back()">kembali</button>
                            </div>
                        </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section('javascript')
    <!-- Parsley js -->
    <script src="{{asset('/template/assets/plugins/parsleyjs/parsley.min.js')}}"></script>
    <script src="{{asset('/template/assets/pages/validation-init.js')}}"></script>

    <!-- Plugins js -->
    <script src="{{asset('/template/assets/plugins/timepicker/moment.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/timepicker/tempusdominus-bootstrap-4.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/timepicker/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/clockpicker/jquery-clockpicker.min.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/colorpicker/jquery-asColor.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/colorpicker/jquery-asGradient.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/colorpicker/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/select2/select2.min.js')}}"></script>

    <script src="{{asset('/template/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('/template/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

    <!-- Plugins Init js -->
    <script src="{{asset('/template/assets/pages/form-advanced.js')}}"></script>
@endsection
