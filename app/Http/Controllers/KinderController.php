<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKinderRequest;
use App\Http\Requests\UpdateKinderRequest;
use App\Repositories\KinderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;
use App\Models\KinderModel;

class KinderController extends AppBaseController
{
    /** @var  KinderRepository */
    private $kinderRepository;

    public function __construct(KinderRepository $kinderRepo)
    {
        $this->kinderRepository = $kinderRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Kinder.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        
        $kinders = KinderModel::all();
       // dd($kinders);
        return view('kinders.index')
            ->with('kinders', $kinders);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stores(CreateKinderRequest $request){
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required|integer',
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);
        // $kinders = new KinderModel();
        // $kinders->name = $request->input('name');
        // $kinders->phone = $request->input('phone');
        // $kinders->email = $request->input('email');
        // $kinders->subject = $request->input('subject');
        // $kinders->message = $request->input('message');
        // $kinders->save();

        // return redirect()->to('/')->with('success', 'Sizning so\'rovingiz jo\'natildi.');
    }

    /**
     * Show the form for creating a new Kinder.
     *
     * @return Response
     */
    public function create()
    {
        return view('kinders.create');
    }

    /**
     * Store a newly created Kinder in storage.
     *
     * @param CreateKinderRequest $request
     *
     * @return Response
     */
    public function store(CreateKinderRequest $request)
    {
        $input = $request->all();

        $kinder = KinderModel::create($input);

        Flash::success('Kinder saved successfully.');

        return redirect(route('kinders.index'));
    }

    /**
     * Display the specified Kinder.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        // dd($request);
        $kinder = KinderModel::find($id);

        if (empty($kinder)) {
            Flash::error('Kinder not found');

            return redirect(route('kinders.index'));
        }

        return view('kinders.show')->with('kinder', $kinder);
    }

    /**
     * Show the form for editing the specified Kinder.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kinder = KinderModel::find($id);

        if (empty($kinder)) {
            Flash::error('Kinder not found');

            return redirect(route('kinders.index'));
        }

        return view('kinders.edit')->with('kinder', $kinder);
    }

    /**
     * Update the specified Kinder in storage.
     *
     * @param int $id
     * @param UpdateKinderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKinderRequest $request)
    {
        $kinder = KinderModel::find($id);

        if (empty($kinder)) {
            Flash::error('Kinder not found');

            return redirect(route('kinders.index'));
        }
        //dd($request->all());
        $kinder->update($request->all());

        Flash::success('Kinder updated successfully.');

        return redirect(route('kinders.index'));
    }

    /**
     * Remove the specified Kinder from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kinder = KinderModel::find($id);

        if (empty($kinder)) {
            Flash::error('Kinder not found');

            return redirect(route('kinders.index'));
        }

        $kinder->delete($id);

        Flash::success('Kinder deleted successfully.');

        return redirect(route('kinders.index'));
    }
}
