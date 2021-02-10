<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CreatePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;

class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePortfolioRequest $request)
    {
       $portifolio = Portfolio::create($request->all());
       
        if($request->hasFile('image'))
        {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/portfolios', $fileNameToStore);
            $portifolio->image = $fileNameToStore;
            $portifolio->save();
        }

        Session::flash('message', "Portfolio Created");
        return redirect(route('portfolios.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        
        if (empty($portfolio)) {
            Session::flash('message', "Portfolio Not Found");
            return redirect(route('portfolios.index'));
        }

        return view('portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioRequest $request, $id)
    {
        $portfolio = Portfolio::find($id);
        
        if (empty($portfolio)) {
            Session::flash('message', "Portfolio Not Found");
            return redirect(route('portfolios.index'));
        }

        $portfolio->update($request->all());
       
        if($request->hasFile('image'))
        {

            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/portfolios', $fileNameToStore);
            $portfolio->image = $fileNameToStore;
            $portfolio->save();
        }

        Session::flash('message', "Portfolio Updated");
        return redirect(route('portfolios.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        
        if (empty($portfolio)) {
            Session::flash('message', "Portfolio Not Found");
            return redirect(route('portfolios.index'));
        }

        $portfolio->delete();
        
        Session::flash('message', "Portfolio Deleted");
        return redirect(route('portfolios.index'));  
    }
}
