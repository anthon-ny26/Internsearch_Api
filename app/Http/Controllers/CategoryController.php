<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:category',
        ]);
        $category = Category::create([
            'name' => $fields['name'],
            'slug' => $fields['slug'],
        ]);

        $response = [
            'message' => 'Data kategori Berhasil Ditambahkan',
            'category' => $category,
        ];
        return response($response, 201);
    }

    public function show($id)
    {
        return Category::find($id);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if ($category == null) {
            return response('Kota Tidak Ditemukan', 400);
        } else {
            $category->update($request->all());
            $response = [
                'message' => 'Data Kota Berhasil Diubah',
                'data' => $category,
            ];
            return response($response, 200);
        }
    }

    public function search($name)
    {
        return Category::where('name', 'like', '%' . $name . '%')->get();
    }

    public function destroy($id)
    {
        return Category::destroy($id);
    }
}
