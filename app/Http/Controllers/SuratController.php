<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Storage;
class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
        $surats=Surat::all();
        return view('suratdashboard',compact('surats'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addsurat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('pdf')){
            $pdf_name = $request->file('pdf')->store('pdf', 'public');
        }
        Surat::create([
            'nomor' => $request->nomor,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'pdf' => $pdf_name,
        ]);
        return redirect('/surat');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        return view('lihat',compact('surat'));
    }

    public function cetak_pdf(Request $request){
        // 
        $pdf = Surat::where('id', $request->id)->first();
        // return Storage::disk('public')->get($pdf->pdf);
        return file_get_contents(asset('storage/'.$pdf->pdf));
        // return Storage::url('kuceng.jpg');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $surat)
    {
        //
    }

    public function pdf(){
        $pdfs = Surat::all();
        $pdf = PDF::loadview('pdf',['pdf'=>$pdfs]);
        return $pdf->stream();
       }
       
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
       
    public function destroy(Surat $surat)
    {
        //
    }
}
