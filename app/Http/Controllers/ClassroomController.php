<?php

namespace App\Http\Controllers;

use App\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //

        $this->validate($request, [
            'name' => 'required'
        ]);

        $data = new Classroom();
        $data->name = $request->name;
        $data->save();
        return redirect('home_user');
        //  return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
        return redirect('home_user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        // 
        $data = Classroom::find($id);
        return view('Classroomedit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
        $data = Classroom::find($id);

        $data->name = $request->name;

        $data->save();
        return redirect('home_user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
        $user = Classroom::find($id);

        $user->delete();
        return redirect('home_user');
    }

    public function addclass(Request $request) {
        //
        $Classroom = Classroom::find($request->Classroom);

        $ModelClassroom = Classroom::find([$request->classroom]);
        $Classroom->classroom()->attach($ModelClassroom);
        return redirect('home_user');
    }

}
