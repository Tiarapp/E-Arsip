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
    <a href="/user/dokumen_keuangan">Dokumen Lain</a>
@endsection

@section('page_aktif')
    Tambah dokumen lain
@endsection

@section('page_title')
    Dokumen Lain
@endsection

@section('conten')
    @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            @foreach ($errors->all() as $error)
                <strong>{{ $error }}</strong>
            @endforeach
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Tambah Dokumen Lain</h4>

                    <form class="mb-0" action="/user/dokumen_lain_create/{{$id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row form-material">

                            <input type="hidden" name="id" value="{{$dokumen->id ?? ''}}">
                            <div class="col-md-12">
                                <h6 class="text-muted">Jenis Dokumen</h6>
                                <select class="select2 form-control mb-3 custom-select" name="jns" style="width: 100%; height:36px;" required>
                                    @if (empty($dokumen->jns_dokumen_id))

                                        <option value="" selected>Pilih Jenis Dokumen</option>
                                        @foreach ($jns_dokumen as $jd)
                                            <option value="{{$jd->id}}">{{$jd->jns_dokumen}}</option>
                                        @endforeach
                                    @else

                                        @foreach ($jns_dokumen as $jd)
                                            <option value="{{$jd->id}}" @if ($dokumen->jns_dokumen_id==$jd->id) selected @endif>{{$jd->jns_dokumen}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="col-md-12">
                                <h6 class="text-muted">Nama Dokumen / Barang</h6>
                                <input type="text" name="nm" class="form-control" value="{{$dokumen->nm ?? ''}}"  placeholder="Nama Dokumen / Barang"/>
                            </div>

                            <div class="col-md-12">
                                <h6 class="text-muted">Jumlah</h6>
                                <input type="text" name="jml" class="form-control" value="{{$dokumen->jml ?? ''}}"  placeholder="Jumlah Barang"/>
                            </div>

                            <div class="col-md-12">
                                <h6 class="text-muted">Keterangan</h6>
                                <textarea id="textarea" name="keterangan" class="form-control" maxlength="225" rows="3" placeholder="Maksimal hanya 255 huruf" >{{$dokumen->deskripsi ?? ''}}</textarea>
                            </div>

                            <div class="col-md-12">
                                <h6 class="text-muted">Upload File</h6>
                                <input type="file" class="form-control-file" id="exampleInputFile" name="file" value="{{$dokumen->file ?? ''}}">
                                {{-- <small class="text-muted">
                                    Hanya File jpg, png, jpeg, ukuran file maksimal 3Mb
                                </small> --}}
                            </div>

                        </div>

                        <div class="form-group mb-0" style="margin-top: 10px;">
                            <div>
                                <button type="submit" class="btn btn-raised btn-primary waves-effect waves-light mb-0">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-raised btn-secondary waves-effect m-l-5 mb-0">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>

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
