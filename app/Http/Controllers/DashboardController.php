<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\tampilan;  
use \App\penerimaan;
use \App\reportpenerimaan;
use App\Http\Requests;

class DashboardController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	return view('dashboard');
    }

    public function penerimaan(){
    	return view('laporan.penerimaan');
    }
    public function pengeluaran()
    {
        return view('laporan.pengeluaran');
    }
    public function laporanperusahaan()
    {
    	return view('laporan/laporanperusahaan');
    }
    public function laporanpengeluaran()
    {
        $data = array('data'=>tampilan::all());
    	return view('laporan/historypengeluaran')->with($data);
    }
    public function penerimaanedit($id)
	{
		$data = array('data'=>penerimaan::find($id));
		return view('laporan.penerimaanedit')->with($data);
	}
    public function penerimaansave(Request $request){
        $post = new penerimaan;
        $post->username = $request->username;
        $post->nama_penerima = $request->nama_penerima;
        $post->jenis_kelamin = $request->jenis_kelamin;
        $post->ttl = $request->ttl;
        $post->nama_perusahaan = $request->nama_perusahaan;
        $post->no_tlp = $request->no_tlp;
        $post->jenis_rek = $request->jenis_rek;
        $post->jumlah = $request->jumlah;

        $post->save();
        return redirect(url('/'));
    }
    public function penerimaanreport(){
        $data = array('data'=>penerimaan::all());
        return view('laporan.historypenerimaan')->with($data);
    }
    public function pengeluaranreport(){
        $data = array('data'=>tampilan::all());
        return view('laporan.historypengeluaran')->with($data);
    }
    public function bindex(){        
        return view('laporan.index');
    }
   public function penerimaandelete($id)
    {
        User::find($id)->delete();

        return redirect(url('/laporan/list'));
    }
    public function delete($id)
    {
        penerimaan::find($id)->delete($id);
        return redirect('penerimaan/report');
    }
    public function penerimaanreportpdf()
    {
        $no = 1;
        $pdf = \DB::select('select *from penerimaans');
        $jumlah = \DB::select('select sum(jumlah) as jumlah from penerimaans');
        $html = view('laporan.reportpenerimaan')->with('pdf',$pdf)->with('jumlah',$jumlah)->with('no',$no);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($html->render())->setPaper('a4')->setOrientation('potrait')->setWarnings(false);
        return $pdf->stream();
    }
    public function pengeluaransave(Request $request)
    {
        $post = new tampilan;
        $post->username = $request->username;
        $post->nama_nasabah = $request->nama_nasabah;
        $post->jenis_kelamin = $request->jenis_kelamin;
        $post->tanggal_pengeluaran = $request->tanggal_pengeluaran;
        $post->no_rek = $request->no_rek;
        $post->jenis_rek = $request->jenis_rek;
        $post->jml_setoran = $request->jml_setoran;

        $post->save();
        return redirect(url('/'));
    }
    public function pengeluaranedit($id)
    {
        $data = array('data'=>tampilan::find($id));
        return view('laporan.pengeluaranedit')->with($data);
    }
    public function deletee($id)
    {
        tampilan::find($id)->delete($id);
        return redirect('pengeluaran/report');
    }
   public function pengeluaranreportpdf()
    {
        $no = 1;
        $pdf = \DB::select('select *from tampilans');
        $jumlah = \DB::select('select sum(jml_setoran) as jml_setoran from tampilans');
        $html = view('laporan.reportpengeluaran')->with('pdf',$pdf)->with('jumlah',$jumlah)->with('no',$no);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($html->render())->setPaper('a4')->setOrientation('potrait')->setWarnings(false);
        return $pdf->stream();
    } 
}