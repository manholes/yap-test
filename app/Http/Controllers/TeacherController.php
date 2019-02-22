<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller {

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

        $data = new Teacher();
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
        $data = Teacher::find($id);
        return view('teacheredit', compact('data'));
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
        $data = Teacher::find($id);

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
        $user = Teacher::find($id);

        $user->delete();
        return redirect('home_user');
    }

    public function addclass(Request $request) {
        //
        $teacher = Teacher::find($request->teacher);

        $ModelClassroom = Classroom::find([$request->classroom]);
        $teacher->classroom()->attach($ModelClassroom);
        return redirect('home_user');
    }

}
