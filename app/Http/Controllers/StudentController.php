<?php

namespace App\Http\Controllers;

use App\Fee;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function home(){
        $students =Student::all();
        $fee = DB::table('fees')->sum('amount');
        return view('102536.home', ['students'=>$students , 'fee'=>$fee]);
    }
    public function index(){

        return view('102536.student');
    }

    public function create(){
        $student = new Student();

        $student->fullName=request('fullName');
        $student->DateOfBirth=request('DateOfBirth');
        $student->address=request('address');
        $student->balance=request('balance');
        $student->gender=request('gender');
        $student->save();
        return Redirect('/');
    }

    public function search(){
        $id= $_GET['id'];

        $student=Student::find($id, ['id','fullName','Balance']);

        return view('102536.payfee', ['student'=>$student]);
    }
}
