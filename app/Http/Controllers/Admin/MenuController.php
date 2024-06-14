<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index()
    {
        try {
            $menus = Menu::all();
            return view('admin.pages.menu.index', ['menus' => $menus]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function create()
    {
        try {
            $menuCategories = MenuCategory::all();
            return view('admin.pages.menu.create', ['getCategories' => $menuCategories]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'menu_category_id' => 'required',
                'img' => 'required|mimes:png,jpg,jpeg,webp',
                'price' => 'required',
                'stock' => 'required',
                'description' => 'required'
            ]);

            $file = $request->file('img');
            $fileName = $file->getClientOriginalName();
            $filePath = 'img/menu/' . $fileName;
            $file->move('img/menu', $fileName);

            Menu::create([
                'title' => $request->title,
                'menu_category_id' => $request->menu_category_id,
                'img' => url($filePath),
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
            ]);
            return redirect()->route('menu.index')->with('success', 'menu successfully created');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $menu = Menu::findOrFail($id);
            $categories = MenuCategory::all();
            return view('admin.pages.menu.edit', [
                'getMenu' => $menu,
                'getCategories' => $categories
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'menu_category_id' => 'required',
                'img' => 'mimes:png,jpg,webp,jpeg',
                'price' => 'required',
                'stock' => 'required',
                'description' => 'required'
            ]);

            $menu = Menu::findOrFail($id);

            if ($request->hasFile('img')) {
                $relativePath = str_replace(url('/'), '', $menu->img);
                $filePath = public_path($relativePath);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
                $file = $request->file('img');
                $fileName = $file->getClientOriginalName();
                $filePath = 'img/menu/' . $fileName;
                $file->move('img/menu', $fileName);
            } else{
                $filePath = $menu->img;
            }

            $menu->update([
                'title' => $request->title,
                'menu_category_id' => $request->menu_category_id,
                'img' => url($filePath),
                'price' => $request->price,
                'stock' => $request->stock,
                'description' => $request->description,
            ]);
            return redirect()->route('menu.index')->with('success', 'menu successfully update');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $menu = Menu::findOrFail($id);
            $relativePath = str_replace(url('/'), '', $menu->img);
            $filePath = public_path($relativePath);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $menu->delete();
            return redirect()->back()->with('success', 'menu successfully delete');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
