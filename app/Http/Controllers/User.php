<?php

namespace App\Http\Controllers;
use PDF;

use App\ModelUser;
use App\Classroom;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class User extends Controller {

    //
    public function index() {
        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Kamu harus login dulu');
    } else {
            $students = Student::all();
            $classrooms = Classroom::all();
            $teachers = Teacher::all();

            return view('user', compact('students', 'classrooms', 'teachers'));
        }
    }

    public function login() {
        return view('login');
    }

    public function loginPost(Request $request) {

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email', $email)->first();
        if ($data) { //apakah email tersebut ada atau tidak
            if (Hash::check($password, $data->password)) {
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('login', TRUE);
                return redirect('home_user');
            } else {
                return redirect('login')->with('alert', 'Password atau Email, Salah !');
            }
        } else {
            return redirect('login')->with('alert', 'Password atau Email, Salah!');
        }
    }

    public function logout() {
        Session::flush();
        return redirect('login')->with('alert', 'Kamu sudah logout');
    }

    public function register(Request $request) {
        return view('register');
    }

    public function downloadPDF(){
      $classrooms = Classroom::all();

      $pdf = PDF::loadView('pdf', compact('classrooms'));
      return $pdf->download('class.pdf');

    }
   

}
