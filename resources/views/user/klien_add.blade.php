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
    Tambah data klien
@endsection

@section('page_title')
    Data Klien
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

                    <h4 class="mt-0 header-title">Tambah Data Klien</h4>

                    <form class="mb-0" action="/user/klien_create/{{$id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row form-material">

                            <input type="hidden" name="id" value="{{$klien->id ?? ''}}">
                            <div class="col-md-12">
                                <h6 class="text-muted">Nama Klien</h6>
                                <input type="text" name="nama" class="form-control" value="{{$klien->nama ?? ''}}" required placeholder="Nama Klien"/>
                            </div>

                            <div class="col-md-12">
                                <h6 class="text-muted">Tanggal Lahir</h6>
                                @if (empty($klien->tgl_lahir))

                                    <input type="date" class="form-control" name="tgl_lahir" placeholder="2017-06-04" id="mdate" required>
                                @else

                                    <input type="date" class="form-control" name="tgl_lahir" value="{{$klien->tgl_lahir->format('Y-m-d')}}" placeholder="2017-06-04" id="mdate" required>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <h6 class="text-muted">Jenis Kelamin</h6>
                                <select class="select2 form-control mb-3 custom-select" name="jenis_kel" style="width: 100%; height:36px;" required>
                                    @if (empty($klien->tgl_lahir))

                                        <option value="" selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    @else
                                        <option value="" @if ($klien->jenis_kel=="") selected @endif>Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki" @if ($klien->jenis_kel=="Laki-Laki") selected @endif>Laki-Laki</option>
                                        <option value="Perempuan" @if ($klien->jenis_kel=="Perempuan") selected @endif>Perempuan</option>
                                    @endif
                                </select>
                            </div>

                            <div class="col-md-12">
                                <h6 class="text-muted">Asal Usul Alamat</h6>
                                <textarea id="textarea" name="alamat" class="form-control" maxlength="225" rows="3" placeholder="Maksimal hanya 255 huruf" required>{{$klien->alamat ?? ''}}</textarea>
                            </div>

                            <div class="col-md-12">
                                <h6 class="text-muted">Tanggal Masuk</h6>
                                @if (empty($klien->tgl_msk))

                                    <input type="date" class="form-control" name="tgl_msk" placeholder="2017-06-04" id="mdate" required>
                                @else

                                    <input type="date" class="form-control" name="tgl_msk" value="{{$klien->tgl_msk}}" placeholder="2017-06-04" id="mdate" required>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <h6 class="text-muted">Keterangan</h6>
                                <textarea id="textarea" name="keterangan" class="form-control" maxlength="225" rows="3" placeholder="Maksimal hanya 255 huruf" required>{{$klien->keterangan ?? ''}}</textarea>
                            </div>

                            <div class="col-md-12">
                                <h6 class="text-muted">Upload Foto</h6>
                                <input type="file" class="form-control-file" id="exampleInputFile" name="foto">
                                <small class="text-muted">
                                    Hanya File jpg, png, jpeg, ukuran file maksimal 3Mb
                                </small>
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
