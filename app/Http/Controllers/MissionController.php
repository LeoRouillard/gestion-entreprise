<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\Organisation;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missions = Mission::query()->get();
        $organisations = Organisation::query()->get();
        return view('mission.index', ['mission' => $missions, 'organisations' => $organisations]);
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
            'reference' => 'required',
            'organisation_id' => 'required',
            'title' => 'required',
            'deposit' => 'required'
        ]);
        $mission = new Mission;
        $mission->reference = $request->input('reference');
        $mission->organisation_id = $request->input('organisation_id');
        $mission->title = $request->input('title');
        $mission->comment = $request->input('comment');
        $mission->deposit = $request->input('deposit');
        $mission->ended_at = $request->input('ended_at');

        $m = $mission->save();
        if($m) {
            return redirect()->route('missions')->with('mess-success','Mission bien ajoutée !');
        } else {
            return redirect()->route('missions')->with('mess-error','Il y a une erreur');
        }  

    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        //
    }
}
