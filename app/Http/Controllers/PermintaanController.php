<?php namespace App\Http\Controllers;

use App\Http\Request;
use App\Http\Controllers\Controller;

use App;
use Illuminate\Http\Request;

use App\Http\Requests;

class PermintaanController extends Controller
{
    //
}
public function permintaan()
{
		$post = new Kritik;
		$post->nama = \Input::get('nama');
		$post->email = \Input::get('email');
		$post->pilihan = \Input::get('pilihan');
		$post->isi = \Input::get('isi');

		$post->save();
		return redirect(url());
}