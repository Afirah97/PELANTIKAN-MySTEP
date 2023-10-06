<?php

namespace App\Http\Controllers;

use App\Models\Mystep;
use Illuminate\Http\Request;

class MystepController extends Controller
{
    /**
    * index
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $mysteps = Mystep::orderBy('id','desc')->paginate(10);
        return view('mystep.index', compact('mysteps'));
    }

    /**
    * create
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('mystep.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'gred' => 'required',
            'gaji' => 'required',
            'tarikh_masuk' => 'required',
            'tarikh_tamat' => 'required',
            'tempoh' => 'required',

        ]);
        
        Mystep::create($request->post());

        return redirect()->route('mysteps.index')->with('success','Maklumat Berjaya Di Simpan');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\mystep  $mystep
    * @return \Illuminate\Http\Response
    */
    public function show(mystep $mystep)
    {
        return view('mysteps.show',compact('mystep'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\mystep  $mystep
    * @return \Illuminate\Http\Response
    */
    public function edit(mystep $mystep)
    {
        return view('mystep.edit',compact('mystep'));
    }

    /**
    * Update
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\mystep  $mystep
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, mystep $mystep)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'gred' => 'required',
            'gaji' => 'required',
            'tarikh_masuk' => 'required',
            'tarikh_tamat' => 'required',
            'tempoh' => 'required',
        ]);
        
        $mystep->fill($request->post())->save();

        return redirect()->route('mysteps.index')->with('success','Kemaskini Berjaya');
    }

    /**
    * Remove
    *
    * @param  \App\mystep  $mystep
    * @return \Illuminate\Http\Response
    */
    public function destroy(mystep $mystep)
    {
        $mystep->delete();
        return redirect()->route('mysteps.index')->with('success','Maklumat Berjaya Di Padam');
    }
}

