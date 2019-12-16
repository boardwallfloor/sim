<?php

namespace App\Http\Controllers;
use App\Mahasiswa;
use Illuminate\Http\Request;


class MahasiswaController extends Controller
{

	//TODO : show function
  public function index (){
 				$mahasiswa = Mahasiswa::all();
  	// $mahasiswa = Mahasiswa::latest()->paginate(5);
  	return view('test/show_mhs',compact('mahasiswa'))
            ->with('i',
             // (request()->input('page', 1) - 1) * 5
           );
  }

  public function show (){//TEMP SHOW FX
 
  	$data = Mahasiswa::all();
  	return view('test/show',compact('data'));
 
  }

  public function store(Request $request){
  	//TODO : validation
  	$mahasiswa = new Mahasiswa();
  	$mahasiswa->niu = $request->get('niu');
  	$mahasiswa->nif = $request->get('nif');
  	$mahasiswa->nama = $request->get('nama');
  	// $mahasiswa->no_telp = $request->get('no_telp');
  	// $mahasiswa->email = $request->get('email');
  	// $mahasiswa->alamat = $request->get('alamat');
  	$mahasiswa->angkatan = $request->get('angkatan');
  	// $mahasiswa->no_rek = $request->get('no_rek');
  	// $mahasiswa->nama_pemilik_rek = $request->get('nama_pemilik_rek');
  	$mahasiswa->bank = $request->get('bank');
  	// $mahasiswa->password = $request->get('password');
  	$mahasiswa->save();
  	// dd($mahasiswa);
  	return redirect('mahasiswa')->with('success','Mahasiswa berhasil terbuat');
  }

  public function create(){
  	return view('test/create_mhs');
  }

  public function edit(Mahasiswa $mahasiswa){
  return view('test/update_mhs',compact('mahasiswa'));
	}

  public function update(Request $request, Mahasiswa $mahasiswa){
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index') ->with('success','Product updated successfully');
  }
  public function destroy(Mahasiswa $mahasiswa){
        // $mhs = Mahasiswa::find($id);
        // dd($mhs);
        // dd($mahasiswa);
        $mahasiswa->delete();
        
        return redirect()->route('mahasiswa.index')
                        ->with('success','Product deleted successfully');
    }
}
