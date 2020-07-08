<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateParentsRequest;
use App\Http\Requests\UpdateParentsRequest;
use App\Repositories\ParentsRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Parents;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class ParentsController extends AppBaseController
{
    /** @var  ParentsRepository */
    private $parentsRepository;

    public function __construct(ParentsRepository $parentsRepo)
    {
        $this->parentsRepository = $parentsRepo;
    }

    /**
     * Display a listing of the Parents.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $parents = $this->parentsRepository->all();

        return view('parents.index')
            ->with('parents', $parents);
    }

    /**
     * Show the form for creating a new Parents.
     *
     * @return Response
     */
    public function create()
    {
        return view('parents.create');
    }

    /**
     * Store a newly created Parents in storage.
     *
     * @param CreateParentsRequest $request
     *
     * @return Response
     */
    public function store(CreateParentsRequest $request)
    {
        // $input = $request->all();

        // $parents = $this->parentsRepository->create($input);

        $parents = new Parents();

        if($request->file('images') != null){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/parents/', $fileName);
            $parents->images = $fileName;
        }
        $parents->about_kinder = $request->input('about_kinder');
        $parents->full_name = $request->input('full_name');
        $parents->parent = $request->input('parent');
        $parents->save();

        Flash::success('Parents saved successfully.');

        return redirect(route('parents.index'));
    }

    /**
     * Display the specified Parents.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parents = $this->parentsRepository->find($id);

        if (empty($parents)) {
            Flash::error('Parents not found');

            return redirect(route('parents.index'));
        }

        return view('parents.show')->with('parents', $parents);
    }

    /**
     * Show the form for editing the specified Parents.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parents = $this->parentsRepository->find($id);

        if (empty($parents)) {
            Flash::error('Parents not found');

            return redirect(route('parents.index'));
        }

        return view('parents.edit')->with('parents', $parents);
    }

    /**
     * Update the specified Parents in storage.
     *
     * @param int $id
     * @param UpdateParentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParentsRequest $request)
    {
        // $parents = $this->parentsRepository->find($id);
        $parents = Parents::find($id);
        if (empty($parents)) {
            Flash::error('Parents not found');

            return redirect(route('parents.index'));
        }
        if($request->file('images') != null){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/parents/', $fileName);
            $parents->images = $fileName;
        }
        $parents->about_kinder =$request->input('about_kinder');
        $parents->full_name =$request->input('full_name');
        $parents->parent =$request->input('parent');
        $parents->save();

        // $parents = $this->parentsRepository->update($request->all(), $id);

        Flash::success('Parents updated successfully.');

        return redirect(route('parents.index'));
    }

    /**
     * Remove the specified Parents from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parents = $this->parentsRepository->find($id);

        if (empty($parents)) {
            Flash::error('Parents not found');

            return redirect(route('parents.index'));
        }

        $this->parentsRepository->delete($id);

        Flash::success('Parents deleted successfully.');

        return redirect(route('parents.index'));
    }
}
