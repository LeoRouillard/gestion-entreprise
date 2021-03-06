<?php

namespace App\Http\Controllers;

use App\Models\MissionLine;
use App\Models\Mission;

use Illuminate\Http\Request;

class MissionLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missionLines = MissionLine::query()->get();
        $missions = Mission::query()->get();
        return view('missionLine.index', ['missionLine' => $missionLines, 'missions' => $missions]);
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
        $validatedData = $this->validate($request, [
            'title' => 'required',
            'mission_id' => 'required',
            'unity' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);
        $missionLine = new MissionLine;
        $missionLine->mission_id = $request->input('mission_id');
        $missionLine->title = $request->input('title');
        $missionLine->quantity = $request->input('quantity');
        $missionLine->price = $request->input('price');
        $missionLine->unity = $request->input('unity');

        $m = $missionLine->save();
        if($m) {
            return redirect()->route('missionLines')->with('mess-success','Mission Line bien ajoutée !');
        } else {
            return redirect()->route('missionLines')->with('mess-error','Il y a une erreur');
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function show(MissionLine $missionLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function edit(MissionLine $missionLine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MissionLine $missionLine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function destroy(MissionLine $missionLine)
    {
        $ml = $missionLine->destroy($missionLine->id);
        if($ml) {
            return redirect()->route('missionLines')->with('mess-success','Mission Line bien supprimée !');
        } else {
            return redirect()->route('missionLines')->with('mess-error','Il y a une erreur');
        }
    }
}
