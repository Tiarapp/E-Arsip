<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\klien;
use App\Models\dokumen;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Data KLIEN
        public function index_klien()
        {
            $klien=klien::all()
                        ->sortby('nama');

            return view('/user/klien', compact('klien'));
        }

        public function create_klien($id)
        {
            $klien=klien::find($id);
            return view('/user/klien_add', compact('klien', 'id'));
        }

        public function add_klien(Request $request, $id)
        {
            $messages = [
                'foto.mimes'        =>  'Upload foto Hanya File dengan type JPEG, PNG, dan JPG',
                'foto.max'          =>  'Maksimal File foto Berukuran 3 Mb',
            ];
            $this->validate($request,[

                'foto'              => 'required|file|mimes:jpeg,png,jpg|max: 3072',
            ],$messages);

            if ($request->foto == NULL) {

                $nama_foto=NULL;
            } else {

                $foto = $request->file('foto');
                $nama_foto = time()."_".$foto->getClientOriginalName();
            }

            $klien = klien::updateOrCreate(
                ['id' => $id],
                ['user_id'  => 1,
                'nama'      => $request->nama,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kel' => $request->jenis_kel,
                'alamat'    => $request->alamat,
                'tgl_msk'   => $request->tgl_msk,
                'foto'      => $nama_foto,
                'keterangan'=> $request->keterangan]
            );

            if ($request->foto == NULL) {
            } else {

                $tujuan_upload = 'foto';
                $foto->move($tujuan_upload,$nama_foto);
            }

            return redirect('/user/klien');
        }

        public function view_klien($id)
        {
            $klien=klien::find($id);

            return view('user.view_klien', compact('id', 'klien'));
        }

        public function delete_klien($id)
        {
            $klien = klien::findOrFail($id);
            $klien->delete();
            return redirect('/user/klien')->with('succes','Data Berhasil di Hapus');
        }

    // Dokumen
        // SURAT
            public function index_surat()
            {
                $dokumen=dokumen::where('jns_dokumen_id', 1)
                                ->orderby('nm')
                                ->get();

                return view('/user/dokumen_surat', compact('dokumen'));
            }

            public function create_surat($id)
            {
                $dokumen=dokumen::find($id);
                return view('/user/dokumen_surat_add', compact('dokumen', 'id'));
            }

            public function add_surat(Request $request, $id)
            {
                // $messages = [
                //     'file.mimes'        =>  'Upload file Hanya File dengan type JPEG, PNG, dan JPG',
                //     'file.max'          =>  'Maksimal File file Berukuran 3 Mb',
                // ];
                // $this->validate($request,[

                //     'file'              => 'required|file|mimes:jpeg,png,jpg|max: 3072',
                // ],$messages);

                if ($request->file == NULL) {

                    $nama_file=NULL;
                } else {

                    $file = $request->file('file');
                    $nama_file = time()."_".$file->getClientOriginalName();
                }

                $dokumen = dokumen::updateOrCreate(
                    ['id' => $id],
                    ['user_id'          => 1,
                    'jns_dokumen_id'    => 1,
                    'nm'                => $request->nm,
                    'deskripsi'         => $request->deskripsi,
                    'file'              => $nama_file]
                );

                if ($request->file == NULL) {
                } else {

                    $tujuan_upload = 'surat';
                    $file->move($tujuan_upload,$nama_file);
                }

                return redirect('/user/dokumen_surat');
            }

            public function delete_surat($id)
            {
                $dokumen = dokumen::findOrFail($id);
                $dokumen->delete();
                return redirect('/user/dokumen_surat')->with('succes','Data Berhasil di Hapus');
            }

        // KEUANGAN
            public function index_keuangan()
            {
                $dokumen=dokumen::where('jns_dokumen_id', 3)
                                ->orderby('nm')
                                ->get();

                return view('/user/dokumen_keuangan', compact('dokumen'));
            }

            public function create_keuangan($id)
            {
                $dokumen=dokumen::find($id);
                return view('/user/dokumen_keuangan_add', compact('dokumen', 'id'));
            }

            public function add_keuangan(Request $request, $id)
            {
                // $messages = [
                //     'file.mimes'        =>  'Upload file Hanya File dengan type JPEG, PNG, dan JPG',
                //     'file.max'          =>  'Maksimal File file Berukuran 3 Mb',
                // ];
                // $this->validate($request,[

                //     'file'              => 'required|file|mimes:jpeg,png,jpg|max: 3072',
                // ],$messages);

                if ($request->file == NULL) {

                    $nama_file=NULL;
                } else {

                    $file = $request->file('file');
                    $nama_file = time()."_".$file->getClientOriginalName();
                }

                $dokumen = dokumen::updateOrCreate(
                    ['id' => $id],
                    ['user_id'          => 1,
                    'jns_dokumen_id'    => 3,
                    'nm'                => $request->nm,
                    'deskripsi'         => $request->deskripsi,
                    'file'              => $nama_file]
                );

                if ($request->file == NULL) {
                } else {

                    $tujuan_upload = 'keuangan';
                    $file->move($tujuan_upload,$nama_file);
                }

                return redirect('/user/dokumen_keuangan');
            }

            public function delete_keuangan($id)
            {
                $dokumen = dokumen::findOrFail($id);
                $dokumen->delete();
                return redirect('/user/dokumen_keuangan')->with('succes','Data Berhasil di Hapus');
            }

        // ASET
            public function index_aset()
            {
                $dokumen=dokumen::where('jns_dokumen_id', 3)
                                ->orderby('nm')
                                ->get();

                return view('/user/dokumen_aset', compact('dokumen'));
            }

            public function create_aset($id)
            {
                $dokumen=dokumen::find($id);
                return view('/user/dokumen_aset_add', compact('dokumen', 'id'));
            }

            public function add_aset(Request $request, $id)
            {
                // $messages = [
                //     'file.mimes'        =>  'Upload file Hanya File dengan type JPEG, PNG, dan JPG',
                //     'file.max'          =>  'Maksimal File file Berukuran 3 Mb',
                // ];
                // $this->validate($request,[

                //     'file'              => 'required|file|mimes:jpeg,png,jpg|max: 3072',
                // ],$messages);

                if ($request->file == NULL) {

                    $nama_file=NULL;
                } else {

                    $file = $request->file('file');
                    $nama_file = time()."_".$file->getClientOriginalName();
                }

                $dokumen = dokumen::updateOrCreate(
                    ['id' => $id],
                    ['user_id'          => 1,
                    'jns_dokumen_id'    => 3,
                    'nm'                => $request->nm,
                    'deskripsi'         => $request->deskripsi,
                    'file'              => $nama_file]
                );

                if ($request->file == NULL) {
                } else {

                    $tujuan_upload = 'aset';
                    $file->move($tujuan_upload,$nama_file);
                }

                return redirect('/user/dokumen_aset');
            }

            public function delete_aset($id)
            {
                $dokumen = dokumen::findOrFail($id);
                $dokumen->delete();
                return redirect('/user/dokumen_aset')->with('succes','Data Berhasil di Hapus');
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
