<?php

namespace App\Http\Controllers;

use App\CompanyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\EditCompanyDetailsRequest;

class CompanyDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_detail = CompanyDetail::all()->first();
        return view('company_details.index', compact('company_detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $company_detail = CompanyDetail::find($id);
        
        if (empty($company_detail)) {
            Session::flash('message', "Company Detail Not Found");
            return redirect(route('company.index'));
        }
        
        return view('company_details.edit', compact('company_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCompanyDetailsRequest $request, $id)
    {
        
        $company_detail = CompanyDetail::find($id);
        
        if (empty($company_detail)) {
            Session::flash('message', "Company Detail Not Found");
            return redirect(route('company.index'));
        }

        $company_detail->update([
            'company_name' => $request->company_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
        ]);

        if($request->hasFile('logo'))
        {
            $fileNameWithExt = $request->file('logo')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('logo')->storeAs('public/logo', $fileNameToStore);
            $company_detail->logo = $fileNameToStore;
            $company_detail->save();
        }

        Session::flash('message', "Company Details Updated");
        return redirect(route('company.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
