<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Categories;
use App\Model\Companies;
use App\Model\Medicines;

use Session;

class CategoriesController extends Controller
{
    public function index()
    {
    	$companies = Companies::all();
    	$categories = Categories::with('company')->get();
    	return view('categories')->with(compact('categories', 'companies'));
    }

   	public function create(Request $request)
    {
      $this->validate($request,array(
          'category_name' => 'required|alpha_num'
      ));
    	$category = new Categories;
    	$category->name = $request->category_name;
    	$category->company_id = $request->company_id;
    	$category->save();

        Session:: flash('success', 'Category Created Successfully!');

    	return redirect()->route('categories');
    }

    public function edit($id)
    {
   		$categories= Categories::all();
   		$companies = Companies::all();
   		$ct = Categories::find($id);
      $comp_name = Companies::find($ct->id);
   		return view('categoryEdit')->with(compact('categories', 'companies', 'ct', 'comp_name'));
	}

	public function update(Request $request, $id)
	{
      $this->validate($request,array(
          'category_name' => 'required|alpha_num'
      ));
		$category = Categories::find($id);
		$category->name = $request->input('category_name');
		$category->company_id = $request->input('company_id');
		$category->save();

        Session:: flash('success', 'Category Updated Successfully!');

		return redirect()->route('categories');
	}
  public function delete(Request $request, $id)
  {
    $category = Categories::find($id);
    $medicines = Medicines:: with('category')
                -> where('category_id', '=', $id)
                -> delete();
    $category -> delete();
    return redirect()-> route('categories');
  }
}
