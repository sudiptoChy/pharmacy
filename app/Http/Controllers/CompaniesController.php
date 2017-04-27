<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Companies;
use App\Model\Categories;
use App\Model\Medicines;
use App\Model\Suppliers;
use Session;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Database\Eloquent\Collection;

class CompaniesController extends Controller
{
    public function index()
    {
    	$companies = Companies::all();

    	return view('companies')->with('companies', $companies);
    }

    public function create(Request $request)
    {
        $this->validate($request,array(
            'companyName' =>'required'
        ));
    	$company = new Companies;
    	$company->name = $request->companyName;
    	$company->save();

        Session:: flash('success', 'Company Created Successfully!');

    	return redirect()->route('companies');
    }

    public function edit($id)
    {
   		$companies = Companies::all();
   		$cmp = Companies::find($id);

   		return view('companiesEdit')->with(compact('companies', 'cmp'));
	}

	public function update(Request $request, $id)
	{
        $this->validate($request,array(
            'name' =>'required'
        ));
		$company = Companies::find($id);
		$company->name = $request->input('companyName');
		$company->save();

        Session:: flash('success', 'Company Updated Successfully!');

		return redirect()->route('companies');
	}

    public function delete(Request $request, $id)
    {
        $company = Companies::find($id);
        $categories = Categories::with('company')
                 -> where('company_id', '=', $id)
                 -> get();
        foreach ($categories as $key => $value) {
                $medicine = Medicines::with('category')->where('category_id', '=', $value->id )->delete();
        }
        $categories = Categories::with('company')
                 -> where('company_id', '=', $id)
                 -> delete();
        $suppliers = Suppliers::with('company')
                    -> where('company_id', '=', $id)
                    -> delete();
        $company -> delete();
        return redirect()-> route('companies');
    }
}