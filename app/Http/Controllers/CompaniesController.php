<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;


class CompaniesController extends Controller
{

    public function index()
    {
    }

    public function create()
    {
        return view('Companies_Create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('logo')) {
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToFile = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('logo')->move('logo/', $fileNameToFile);
        } else {
            $fileNameToFile = 'noimage.png';
        }

        $Companies = new Companies;
        $Companies->Id = $request->input('Id');
        $Companies->Name = $request->input('name');
        $Companies->Email = $request->input('Email');
        $Companies->Logo = $fileNameToFile;
        $Companies->Website = $request->input('Website');
        $Companies->timestamps = $request->input('timestamps');
        $Companies->save();

        $request->session()->flash('msg', 'successully new company is added.');
        return redirect('Companies_show');
    }

    public function show(Companies $companies)
    {
        return view('Companies_show')->with('CompaniesArr', Companies::all());
    }

    public function edit($id)
    {
        return view('Companies_Edit')->with('CompaniesArr', Companies::find($id));
    }

    public function update(Request $request)
    {
        if ($request->hasFile('logo')) {
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToFile = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('logo')->move('logo/', $fileNameToFile);
        } else {
            $fileNameToFile = 'noimage.png';
        }
        $Companies = Companies::find($request->id);
        $Companies->Name = $request->input('name');
        $Companies->Email = $request->input('Email');
        $Companies->Logo = $fileNameToFile;
        $Companies->Website = $request->input('Website');
        $Companies->timestamps = $request->input('timestamps');
        $Companies->update();

        $request->session()->flash('msg', 'Data Updated');
        return redirect('Companies_show');
    }

    public function destroy(Companies $companies, $id)
    {
        Companies::destroy(array('id', $id));
        return redirect('Companies_show');
    }
}
