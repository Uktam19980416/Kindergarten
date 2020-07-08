<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKinderNewsRequest;
use App\Http\Requests\UpdateKinderNewsRequest;
use App\Repositories\KinderNewsRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\KinderNews;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

class KinderNewsController extends AppBaseController
{
    /** @var  KinderNewsRepository */
    private $kinderNewsRepository;

    public function __construct(KinderNewsRepository $kinderNewsRepo)
    {
        $this->kinderNewsRepository = $kinderNewsRepo;
    }

    /**
     * Display a listing of the KinderNews.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $kinderNews = $this->kinderNewsRepository->all();

        return view('kinder_news.index')
            ->with('kinderNews', $kinderNews);
    }

    /**
     * Show the form for creating a new KinderNews.
     *
     * @return Response
     */
    public function create()
    {
        return view('kinder_news.create');
    }

    /**
     * Store a newly created KinderNews in storage.
     *
     * @param CreateKinderNewsRequest $request
     *
     * @return Response
     */
    public function store(CreateKinderNewsRequest $request) // CreateKinderNewsRequest
    {

        // $input = $request->all();

        // $photos = KinderNews::create($input);

        $photos = new KinderNews();
        $photos->title = $request->input('title');
        $photos->desrciption = $request->input('description');

        if($request->file('images')!=null){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/news/', $fileName);
            $photos->images = $fileName;
        }
        // else{
        //    // dd($request);
        //     return $request;
        //     $photos->images = '';
        // }

        $photos->save();

        Flash::success('Kinder News saved successfully.');

        return redirect(route('kinderNews.index'));
    }

    /**
     * Display the specified KinderNews.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kinderNews = $this->kinderNewsRepository->find($id);

        if (empty($kinderNews)) {
            Flash::error('Kinder News not found');

            return redirect(route('kinderNews.index'));
        }

        return view('kinder_news.show')->with('kinderNews', $kinderNews);
    }

    /**
     * Show the form for editing the specified KinderNews.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kinderNews = $this->kinderNewsRepository->find($id);

        if (empty($kinderNews)) {
            Flash::error('Kinder News not found');

            return redirect(route('kinderNews.index'));
        }

        return view('kinder_news.edit')->with('kinderNews', $kinderNews);
    }

    /**
     * Update the specified KinderNews in storage.
     *
     * @param int $id
     * @param UpdateKinderNewsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKinderNewsRequest $request)
    {
        // $kinderNews = $this->kinderNewsRepository->find($id);
        $photos = KinderNews::find($id);
        // dd($id);
        if (empty($photos)) {
            Flash::error('Kinder News not found');

            return redirect(route('kinderNews.index'));
        }
        
        $photos->title = $request->input('title');
        $photos->desrciption = $request->input('description');

        if($request->file('images')!=null){
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('uploads/news/', $fileName);
            $photos->images = $fileName;
        } 
        // else{
        //    // dd($request);
        //     return $request;
        //     $photos->images = '';
        // }

        $photos->save();

        // $kinderNews = $this->kinderNewsRepository->update($request->all(), $id);

        Flash::success('Kinder News updated successfully.');

        return redirect(route('kinderNews.index'));
    }

    /**
     * Remove the specified KinderNews from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kinderNews = $this->kinderNewsRepository->find($id);

        if (empty($kinderNews)) {
            Flash::error('Kinder News not found');

            return redirect(route('kinderNews.index'));
        }

        $this->kinderNewsRepository->delete($id);

        Flash::success('Kinder News deleted successfully.');

        return redirect(route('kinderNews.index'));
    }
}
