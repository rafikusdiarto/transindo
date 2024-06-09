<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
    private $param;
    public function __construct(){
        $this->middleware(['role:merchant']);
    }

    public function Index(){
        try {
            $categories = MenuCategory::latest()->get();
            return view('admin.pages.menu-category.index', compact('categories'));
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function AddCategory(){
        try {
            return view('admin.pages.menu-category.create');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function StoreCategory(Request $request){
        try {
            $request->validate([
                'name'=>'required'
            ]);

            MenuCategory::create([
                'name'=> $request->name,
            ]);

            return redirect()->route('allcategory')->with('success', 'Category Successfully Added !');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function EditCategory($id){
        try {
            $category_info = MenuCategory::findOrFail($id);
            return view('admin.pages.menu-category.edit',compact('category_info'));
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function UpdateCategory(Request $request){
        try {
            $category_id = $request->category_id;

            $request->validate([
                'name' => 'required'
            ]);

            MenuCategory::findOrFail($category_id)->update([
                'name'=>$request->name,
            ]);

            return redirect()->route('allcategory')-> with('success', 'category successfully update');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function DeleteCategory($id){
        try {
            MenuCategory::findOrFail($id)->delete();
            return redirect()->route('allcategory')->with('success', 'category successfully delete');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
