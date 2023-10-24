<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Http\Requests\StoreCompaniesRequest;
use App\Http\Requests\UpdateCompaniesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompaniesController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('q');

        $data = Companies::query()->where(column: 'name', operator: 'like',  value: '%' . $search . '%')->paginate(5);
        $data->appends(['q' => $search]);
        return view('admin.companies.index', [
            'data' => $data,
            'search' => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $obj = new Companies();
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('public/avatar');

            $obj->logo = 'avatar/' . $request->file('logo')->hashName();
        }
        $obj->name = $request['name'];
        $obj->email = $request['email'];
        $obj->phone_number = $request['phone-number'];
        $obj->headquarter = $request['headquarter'];
        $obj->description = $request['description'];


        $obj->save();

        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Companies $companies)
    {
        return view('admin.companies.edit', [
            'data' => $companies,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Companies $companies)
    {
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('public/avatar');

            $companies->logo = 'avatar/' . $request->file('logo')->hashName();
        }

        $companies->name = $request->input('name');
        $companies->email = $request->input('email');
        $companies->phone_number = $request->input('phone-number');
        $companies->headquarter = $request->input('headquarter');
        $companies->description = $request->input('description');

        $companies->save();

        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Companies $companies)
    {
        $companies->delete();
        return redirect()->route('companies.index');
    }
}
