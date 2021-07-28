<?php

namespace App\Http\Controllers;

use App\Companies;
use App\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('Employees_Create');
    }

    public function store(Request $request)
    {
        $employees = new Employees;
        $employees->ID = $request->input('ID');
        $employees->Company_Id = $request->input('Company_Id');
        $employees->Frist_Name = $request->input('Frist_Name');
        $employees->Last_Name = $request->input('Last_Name');
        $employees->Email = $request->input('Email');
        $employees->PNumber = $request->input('PNumber');
        $employees->save();

        $request->session()->flash('msg', 'Successully new Employees is added.');
        return redirect('Employees_show');
    }

    public function show(Employees $employees)
    {
        return view('Employees_show')->with('EmployeesArr', employees::all());
    }

    public function edit($ID)
    {
        return view('Employees_Edit')->with('Employees', Employees::find($ID));
    }

    public function update(Request $request, Employees $employees, $ID)
    {
        $employees = Employees::find($ID);
        $employees->Company_Id = $request->input('Company_Id');
        $employees->Frist_Name = $request->input('Frist_Name');
        $employees->Last_Name = $request->input('Last_Name');
        $employees->Email = $request->input('Email');
        $employees->PNumber = $request->input('PNumber');
        $employees->update();

        $request->session()->flash('success', 'Recorded data is successfully Edited and Updated in table');
        return redirect('Employees_show');

        // $request->validate([
        //     'Company_Id' => 'required',
        //     'Frist_Name' => 'required',
        //     'Last_Name' => 'required',
        //     'Email' => 'required',
        //     'PNumber' => 'required',
        // ]);

        // $employees->update($request->all());
        // $request->session()->flash('msg', 'Data Updated');
        // return redirect('Employees_show');
    }

    public function destroy(Request $request, Employees $employees, $ID)
    {
        $employees->destroy('ID', $ID);

        $request->session()->flash('msg', 'Data Deleted Successfully');
        return redirect('Employees_show');

        //Employees::destroy(array('ID', $ID));
        //return redirect('Employees_show');
    }
}