<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\PortfolioModel;
use App\Http\Requests\StorePortfolioModelRequest;
use App\Http\Requests\UpdatePortfolioModelRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PortfolioModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = PortfolioModel::all();
        return view('admin.works.index', compact('sites'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioModel  $portfolioModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $site = PortfolioModel::findOrFail($id);
        return view('admin.works.show', compact('site'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePortfolioModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioModelRequest $request)
    {
        $form_data= $request->all();

        $site= new PortfolioModel();
        
        if($request->hasFile('image')){
            $path = Storage::put('image', $request->image);

            $form_data['image']=$path;
        }

        $site->fill($form_data);

        $site->save();
        return redirect()->route('admin.works.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioModel  $portfolioModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $site =PortfolioModel::findOrFail($id);
       return view('admin.works.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortfolioModelRequest  $request
     * @param  \App\Models\PortfolioModel  $portfolioModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioModelRequest $request, $id)
    {   
        $site = PortfolioModel::findOrFail($id);
        $form_data = $request->all();
        
        if($request->hasFile('image')){
            $path = Storage::put('image', $request->image);
           
            $form_data['image']=$path;
        }

        $site->update($form_data);
        
        
        return redirect()->route('admin.works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioModel  $portfolioModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $site = PortfolioModel::findOrFail($id);
        $site->delete();
        return redirect()->route('admin.works.index');
    }
}
