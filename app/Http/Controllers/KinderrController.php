<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KinderModel;
use Illuminate\Support\Facades\Validator;

class KinderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $kinder = KinderModel::orderBy('updated_at', 'desc')->get();
        return view('index')->with('kinder', $kinder);
    }

    public function about(){
        // $kinder = KinderModel::orderBy('updated_at', 'desc')->get();
        return view('about'); //->with('kinder', $kinder);
    }

    public function teacher(){
        // $kinder = KinderModel::orderBy('updated_at', 'desc')->get();
        return view('teacher'); //->with('kinder', $kinder);
    }

    public function courses(){
        // $kinder = KinderModel::orderBy('updated_at', 'desc')->get();
        return view('courses'); //->with('kinder', $kinder);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $kinders = new KinderModel();
        $kinders->name = $request->input('name');
        $kinders->phone = $request->input('phone');
        $kinders->email = $request->input('email');
        $kinders->subject = $request->input('subject');
        $kinders->message = $request->input('message');
        $kinders->save();

        return redirect()->to('/')->with('success', 'Sizning so\'rovingiz jo\'natildi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
