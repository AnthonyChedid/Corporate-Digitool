<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competence;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class CompetenceController extends VoyagerBaseController
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'competenceName'=>'required'
        ]);

        return Competence::create($request->all());
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $competence=Competence::find($id);
        $competence->update($request->all());
        return $competence;
    }


     /**
     * Search for a team
     *
     * @param  str  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Competence::where('competenceName','like','%'.$name.'%')->get();
    }
}
