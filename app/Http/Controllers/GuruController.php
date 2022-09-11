<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->Guru = new Guru();
    }
    
    public function index(){
        $data = [
            'guru'=> $this->Guru->allData(),
        ];

        return view('guru.index', $data);
    }
    public function profil($id)
    {
    $guru = Guru::find($id);
    $data = [
        'guru'=> $this->Guru->detailData($id)
    ];
        return view('guru.profil', ['guru'=> $guru, 'data' => $data]);
    }

    public function create(){
        return view('guru.create');
    }

    public function insert(Request $request){
        $this->validate(
            $request,
            [
            'nama' => 'required|alpha|min:4',
            'nip' => 'required|alpha|min:7',
            'email' => 'required|email',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'telp' => 'required|alpha-num|min:11',
            'photo' => 'required|mimes:jpg,jpeg,png|max:512',
        ]
    );
    $file = $request->photo;
    $fileName = $request->nama . '.' . $file->extension();
    $file->move(public_path('images'), $fileName);
    $guru = \App\Models\Guru::create($request->all());
    return redirect()->route('guru')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $guru = Guru::find($id);
        $data = [
        'guru'=> $this->Guru->detailData($id)
    ];
    return view('guru.edit', ['guru'=> $guru, 'data' => $data]);

    }

    public function update($id){
        //fungsi validate
        Request()->validate([
            'nama' => 'required|alpha|min:4',
            'nip' => 'required|alpha|min:7',
            'jabatan' => 'required',
            'pendidikan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'telp' => 'required|alpha-num|min:11',
            'photo' => 'required|mimes:jpg,jpeg,png|max:512',
        ]);
        
        if (Request()->photo <> "") {
            $file = Request()->photo;
            $fileName = Request()->nama . '.' . $file->extension();
            $file->move(public_path('images'), $fileName);

            $data = [
            'nama' => Request()->nama,
            'nip' => Request()->nip,
            'jabatan' => Request()->jabatan,
            'pendidikan' => Request()->pendidikan,
            'tempat_lahir' => Request()->tempat_lahir,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'agama' => Request()->agama,
            'telp' => Request()->telp,
            'photo' => $fileName,
        ];
        $this->Guru->updateData($id, $data);

        } else {
            $data = [
                'nama' => Request()->nama,
                'nip' => Request()->nip,
                'jabatan' => Request()->jabatan,
                'pendidikan' => Request()->pendidikan,
                'tempat_lahir' => Request()->tempat_lahir,
                'tanggal_lahir' => Request()->tanggal_lahir,
                'agama' => Request()->agama,
                'telp' => Request()->telp,
                'alamat' => Request()->alamat,
            ];
            $this->Guru->updateData($id, $data);
        }
        return redirect()->route('guru')->with('pesan', 'Data Berhasil di update');
    }

    public function delete($id)
    {
        $guru = Guru::findOrFail($id);
        if ($guru->photo <> ""){
            unlink(public_path('images').'/'/$guru->photo);
        }
        $guru->delete();
        return redirect()->route('guru_')->with('pesan', 'Data BerhasilDihapus..!');
    }

}
