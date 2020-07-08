<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateKinderRequest;
use App\Models\KinderModel;
use App\Models\KinderNews;
use App\Models\Courses;
use App\Models\Teachers;
use App\Models\Parents;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function indexs(){
        $kinder = KinderModel::orderBy('updated_at', 'desc')->get();
        $kinderNews = KinderNews::orderBy('id', 'desc')->get();
        return view('index')->with(['kinder' => $kinder, 'kinderNews' => $kinderNews]);
    }

    public function stores(CreateKinderRequest $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $kinder = new KinderModel();
        $kinder->name = $request->input('name');
        $kinder->email = $request->input('email');
        $kinder->phone = $request->input('phone');
        $kinder->subject = $request->input('subject');
        $kinder->message = $request->input('message');
        $kinder->save();

        return redirect('/')->with('success', 'Ma\'lumotlaringiz qabul qilindi');
    }

    public function about(){
        // $kinder = KinderModel::orderBy('updated_at', 'desc')->get();
        $parents = Parents::orderBy('id', 'desc')->get();
        return view('about')->with('parents', $parents); //->with('kinder', $kinder);
    }

    public function teacher(){
        // $kinder = KinderModel::orderBy('updated_at', 'desc')->get();
        $teachers = Teachers::orderBy('id', 'desc')->get();
        return view('teacher')->with('teachers', $teachers);
    }

    public function courses(){
        $courses = Courses::orderBy('id', 'desc')->get();
        // $kinder = KinderModel::orderBy('updated_at', 'desc')->get();
        return view('courses')->with('courses', $courses); //->with('kinder', $kinder);
    }
    
    public function section($id){
        $section = KinderNews::where('id',$id)->first();
        // dd($section);
        return view('product.section')->with('section', $section);
    }
}
