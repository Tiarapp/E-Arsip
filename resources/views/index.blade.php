@extends('tampilan')

@section('css')

    <!-- DataTables -->
    <link href="{{asset('/template/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/template/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('/template/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

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
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Tanggal Masuk </th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($klien as $k)
                                <tr>
                                    <td>
                                        <img class="d-flex align-self-start mr-3" src="{{asset('foto/'.$k->foto)}}" alt="Generic placeholder image" height="64">
                                    </td>
                                    <td>{{$k->id}}</td>
                                    <td>{{$k->nama}}</td>
                                    <td>{{$k->tgl_msk}}</td>
                                    <td>{{$k->keterangan}}</td>
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

@endsection
