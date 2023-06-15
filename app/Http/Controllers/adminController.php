<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\registForm;
use App\event;

class adminController extends Controller
{
    // public function dashboardadmin(){
    //     return view('admin.dashboardadmin');
    // }

    public function registform()
    {
        // memanggil view tambah
        return view('user.registform');
    }

	public function uploadproses(Request $request){
		$this->validate($request, [
			'idcard' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'payproof' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'eventPoster' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'logo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			//'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$idcard = $request->file('idcard');
		$nama_idcard = time()."_".$idcard->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_idcard = 'ID_CARD_DB';
		$idcard->move(public_path($tujuan_idcard),$nama_idcard);

        $payproof = $request->file('payproof');
		$nama_payproof = time()."_".$payproof->getClientOriginalName();
        $tujuan_payproof = 'PAYMENT_PROOF_DB';
		$payproof->move(public_path($tujuan_payproof),$nama_payproof);

        $eventPoster = $request->file('eventPoster');
		$nama_poster = time()."_".$eventPoster->getClientOriginalName();
        $tujuan_poster = 'poster_event';
		$eventPoster->move($tujuan_poster,$nama_poster);


        $logo = $request->file('logo');
		$nama_logo = time()."_".$logo->getClientOriginalName();
        $tujuan_logo = 'logo_event';
		$logo->move(public_path($tujuan_logo),$nama_logo);


		DB::table('regist_forms')->insert([
            'id_form' => $request->id,
            'organizer' => $request->organizer,
            'address' => $request->address,
            'contact' => $request->contact,
            'email' => $request->email,
            'identity_card' => $idcard,
            'title' => $request->title,
            'event_location' => $request->eventlocation,
            'category' => $request->category,
            'ticket_price' => $request->ticketprice,
            'start_date' => $request->startdate,
            'end_date' => $request->enddate,
            'event_detail' => $request->eventdetail,
            'event_website' => $request->linkweb,
            'event_logo' => $logo,
            'event_poster' => $eventPoster,
            'account_number' => $request->accountNumber,
			'payment_proof' => $payproof,
		]);

		return redirect()->back()->with('message','Event Registered');
        return view('dashboardadmin',['regist_forms' => $regist_forms]);
	}

    public function dashboardadmin()
    {
        $regist_forms = DB::table('regist_forms')->get();
        // memanggil view tambah
        return view('admin.dashboardadmin',['regist_forms' => $regist_forms]);

    }

    public function refundForm($id) {
        // mengambil data event dari Regist Form berdasarkan id yang dipilih
        $regist_form = DB::table('regist_forms')->where('id_form',$id)->get();

        // passing data dari Regist Form ke refundForm.blade.php
        return view('refundForm',['regist_forms' => $regist_forms]);
    }

    public function uploadRefund(Request $request) {

        $this->validate($request, [
		'refund_proof' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
	]);

        // menyimpan data file yang diupload ke variabel $file
	    $file = $request->file('refund_proof');
        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        // ini insert ke database yang TANPA model
        DB::table('refund_forms')->insert([
            'issue' => $request->issue,
            'refund_proof' => $nama_file,
            'id_form' => $request->id_form
        ]);

        // kembali ke page dashboard admin
        return redirect('/admin/dashboard');

    }

    public function getEvent($id_form){
        $getEvent = Event::find('id_form', $id_form)->get();

    foreach ($getEvent as $g) {
        DB::table('events')->insert([
            'id_form'=> $regist_forms->id_form,
            'title' => $regist_forms->title,
            'event_location' => $regist_forms->eventlocation,
            'category' => $regist_forms->category,
            'ticket_price' => $regist_forms->ticketprice,
            'start_date' => $regist_forms->startdate,
            'end_date' => $regist_forms->enddate,
            'event_detail' => $regist_forms->eventdetail,
            'event_website' => $regist_forms->linkweb,
            'event_logo' => $regist_forms->$logo,
            'event_poster' => $regist_forms->$eventPoster,
            // Add more columns as needed
        ]);
        $g->regist_forms->save();
        return view('admin.dashboardadmin', compact('regist_forms'));

    }}

    // public function storeEvent(Request $request){
    //     $storeEvent = events::create([
    //     'id_form'=> $regist_forms->id_form,
    //     'title' => $regist_forms->title,
    //     'event_location' => $regist_forms->eventlocation,
    //     'category' => $regist_forms->category,
    //     'ticket_price' => $regist_forms->ticketprice,
    //     'start_date' => $regist_forms->startdate,
    //     'end_date' => $regist_forms->enddate,
    //     'event_detail' => $regist_forms->eventdetail,
    //     'event_website' => $regist_forms->linkweb,
    //     'event_logo' => $regist_forms->$logo,
    //     'event_poster' => $regist_forms->$eventPoster,
    //     ]);
    //        events->regist_forms->save();
    // }



}
