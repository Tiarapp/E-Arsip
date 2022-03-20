@extends('tampilan')

@section('css')
        <!-- DataTables -->
        <link href="{{asset('/template/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('/template/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('/template/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('page_awal')
    <a href="#">Dokumen</a>
@endsection

@section('page_aktif')
    dokumen surat
@endsection

@section('page_title')
    @php
        $id=0;
    @endphp
    Dokumen Surat <a href="/user/dokumen_surat_add/{{$id}}"><button>+</button></a>
@endsection

@section('conten')
    @if ($message = Session::get('succes'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
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
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Dokumen</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <th>Option</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dokumen as $d)
                                <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->nm}}</td>
                                    <td>{{$d->deskripsi}}</td>
                                    <td>{{$d->created_at->format('d-m-Y')}}</td>
                                    <td style="text-align: center">
                                        <a href="/user/dokumen_surat_add/{{$d->id}}">
                                            <button type="button" class="btn btn-primary bmd-btn-icon">
                                                <i class="mdi mdi-lead-pencil"></i>
                                            </button>
                                        </a>
                                        <a href="/user/dokumen_surat_delete/{{$d->id}}">
                                            <button type="button" class="btn btn-primary bmd-btn-icon">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

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

    <script>
        $(document).ready(function() {
            //edit data
            $('#edit').on("click",function() {
                var id = $(this).attr('data-id');
                $.ajax({
                    url : "/user/klien_view/?id="+id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data)
                    {
                        $('#nama').val(data.nama);
                        // $('#kelas').val(data.kelas);
                        $('#modal-edit').modal('show');
                    }
                });
            });
        });
        </script>

@endsection
