<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeretaController extends Controller
{
    public function beranda(){
        $jadwal = DB::table('jadwal')->join('stasiun as pstasiun','jadwal.asal', '=', 'pstasiun.id')
        ->join('stasiun as test','jadwal.tujuan', '=', 'test.id')
        ->select('jadwal.id','jadwal.nama_kereta', 'jadwal.tgl_berangkat', 'jadwal.tgl_sampai','jadwal.kelas','jadwal.harga', 'pstasiun.nama_stasiun as tujuan', 'test.nama_stasiun')->get();
        return view('beranda', ['jadwal' => $jadwal]);
    }
    
    public function carikereta(Request $req){
        $berangkat = $req->get('berangkat');
        $berangkat2 = $req->get('tujuans');
        $date = $req->get('date');
        
        $jadwal = DB::table('jadwal')->join('stasiun as pstasiun','jadwal.asal', '=', 'pstasiun.id')
        ->join('stasiun as test','jadwal.tujuan', '=', 'test.id')
        ->where('pstasiun.nama_stasiun',  '=', $berangkat)
        ->where('test.nama_stasiun',  '=', $berangkat2)
        ->orWhere('tgl_berangkat', '%m-%d-%Y', '=', $date)
        ->select('jadwal.id','jadwal.nama_kereta', 'jadwal.tgl_berangkat', 
        'jadwal.tgl_sampai','jadwal.kelas','jadwal.harga', 'pstasiun.nama_stasiun as tujuan', 'test.nama_stasiun')->get();
        return view('beranda', ['jadwal' => $jadwal]);
    }

    //pesan tiket
    public function pesan($id){
        $jadwal = DB::table('jadwal')
        ->join('stasiun as pstasiun','jadwal.asal', '=', 'pstasiun.id')
        ->join('stasiun as test','jadwal.tujuan', '=', 'test.id')
        ->select('jadwal.id','jadwal.nama_kereta', 'jadwal.tgl_berangkat', 'jadwal.tgl_sampai','jadwal.kelas','jadwal.harga', 'pstasiun.nama_stasiun as tujuan', 'test.nama_stasiun')
        ->where('jadwal.id', $id)->get();
        return view('pesan', ['jadwal' => $jadwal]);
    }
    
    public function transfer(Request $req){
        $gen = $req->get('gen');
        DB::table('penumpang')->insert(
        [
            'nama' =>$gen.$req->nama,
            'no_identitas' => $req->identitas,
            'no_telp' => $req->no_telp,
            'email' => $req->email,
        ]);
        return view('transfer');
    }


    //Admin Stasiun
    public function admin(){
        return view('adminberanda');
    }
    public function stasiun(){
        $stasiun = DB::table('stasiun')->get();
        return view('stasiun',['stasiun' => $stasiun]);
    }
    public function hapus($id){
        DB::table('stasiun')->where('id',$id)->delete();
        return redirect('/index/stasiun');
    }
    public function simpan(Request $req){
        DB::table('stasiun')->insert(
            [
                'nama_stasiun' => $req->namastasiun
            ]
        );
        return redirect('/index/stasiun');
    }
    public function perbaruist($id){
        $ubah = DB::table('stasiun')->where('id', $id)->get();
        return view('perbaruist', ['ubah'=>$ubah]);
    }
    public function ubah(Request $req){
        DB::table('stasiun')->where('id', $req->id)->update(
            ['nama_stasiun' => $req->ubahstasiun]
        );
        return redirect('/index/stasiun');
    }

    
    //Admin Jadwal Stasiun
    public function jadwalkereta(){
        $jadwal = DB::table('jadwal')->join('stasiun as pstasiun','jadwal.asal', '=', 'pstasiun.id')
        ->join('stasiun as test','jadwal.tujuan', '=', 'test.id')
        ->select('jadwal.id','jadwal.nama_kereta', 'jadwal.tgl_berangkat', 'jadwal.tgl_sampai','jadwal.kelas','jadwal.harga', 'pstasiun.nama_stasiun as tujuan', 'test.nama_stasiun')->get();
        $stasiun = DB::table('stasiun')->get();
        return view('jadwalkereta', array('jadwal' => $jadwal,
        'stasiun' => $stasiun));
    }

    public function tambahjadwal(Request $req){
        $test = "";
        $test2 = "";
        $stasiun = DB::table('stasiun')->get();
        foreach($stasiun as $cekstasiun){
            if($cekstasiun->nama_stasiun == $req->asal){
                $test = $cekstasiun->id;
            }
        }
        foreach($stasiun as $cekstasiun){
            if($cekstasiun->nama_stasiun == $req->tujuan){
                $test2 = $cekstasiun->id;
            }
        }

        $jadwal = DB::table('jadwal')->insert(
        [
            'nama_kereta' => $req->nama_kereta,
            'asal' => $test,
            'tujuan' => $test2,
            'tgl_berangkat' => $req->tgl_berangkat,
            'tgl_sampai' => $req->tgl_sampai,
            'kelas' => $req->kelas,
            'harga' => $req->harga,
            'status' => $req->status
        ]);
        
        return redirect('/index/jadwalkereta');
    }
    public function edit($id){
        $jadwal = DB::table('jadwal')
        ->join('stasiun as pstasiun','jadwal.asal', '=', 'pstasiun.id')
        ->join('stasiun as test','jadwal.tujuan', '=', 'test.id')
        ->select('jadwal.id','jadwal.nama_kereta', 'jadwal.tgl_berangkat', 'jadwal.tgl_sampai','jadwal.kelas','jadwal.harga', 'pstasiun.nama_stasiun as tujuan', 'test.nama_stasiun')
        ->where('jadwal.id', $id)->get();
        return view('updatejadwal', ['jadwal'=>$jadwal]);
    }
    public function fixedit(Request $req){
        
        $jadwal = DB::table('jadwal')->where('id', $req->id)->update(
        [
            'nama_kereta' => $req->nama_kereta,
            'asal' => $req->asal,
            'tujuan' => $req->tujuan,
            'tgl_berangkat' => $req->tgl_berangkat,
            'tgl_sampai' => $req->tgl_sampai,
            'kelas' => $req->kelas,
            'harga' => $req->harga,
            'status' => $req->status
        ]); 
        return redirect('/index/jadwalkereta');       
    }
    
    public function hilang($id){
        $jadwal = DB::table('jadwal')
        ->join('stasiun as pstasiun','jadwal.asal', '=', 'pstasiun.id')
        ->join('stasiun as test','jadwal.tujuan', '=', 'test.id')
        ->select('jadwal.id','jadwal.nama_kereta', 'jadwal.tgl_berangkat', 'jadwal.tgl_sampai','jadwal.kelas','jadwal.harga', 'pstasiun.nama_stasiun as tujuan', 'test.nama_stasiun')
        ->where('jadwal.id', $id)->delete();
        return redirect('/index/jadwalkereta');
    }


    //Penumpang
    public function penumpang(){
        $penumpang = DB::table('penumpang')->get();
        return view('konfirmasipem',['penumpang' => $penumpang]);
    }

    //Munculkan data diri 
    
}