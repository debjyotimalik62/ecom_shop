<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\models\Category;

class CategoryController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ]);

        if($validator->passes()){
            $category = new Category();
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->status = $request->status;
            $category->save();

            $request->session()->flash('success', 'Catgory added successfully');

            return response()->json([
                'status' =>true,
                'errors' => "Catgegory added successfully"
            ]);

        }else{
            return response()->json([
                'status' =>false,
                'errors' =>$validator->errors()
            ]);
        }
    }

    public function edit(){

    }

    public function destroy(){

    }
    
}
