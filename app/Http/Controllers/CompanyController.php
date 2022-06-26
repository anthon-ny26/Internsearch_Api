<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::all();
    }

    public function companyIncategory($id)
    {
        $company = Company::where('company_id', $id)->get();
        return response($company, 200);
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'company_id' => 'required',
            'category_name' => 'required',
            'name' => 'required',
            'slug' => 'required|unique:companys',
            'image' => 'required',
            'excerpt' => 'required',
            'desc' => 'required',
        ]);
        $company = Company::create([
            'company_id' => $fields['company_id'],
            'category_name' => $fields['category_name'],
            'name' => $fields['name'],
            'slug' => $fields['slug'],
            'image' => $fields['image'],
            'price' => $fields['price'],
            'excerpt' => $fields['excerpt'],
            'desc' => $fields['desc']
        ]);

        $response = [
            'message' => 'Data company Berhasil Ditambahkan',
            'company' => $company,
        ];
        return response($response, 201);
    }

    public function show($id)
    {
        return Company::find($id);
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        if ($company == null) {
            return response('company Tidak Ditemukan', 400);
        } else {
            $company->update($request->all());
            $response = [
                'message' => 'Data company Berhasil Diubah',
                'data' => $company,
            ];
            return response($response, 200);
        }
    }

    public function search($name)
    {
        return Company::where('name', 'like', '%' . $name . '%')->get();
    }

    public function destroy($id)
    {
        return Company::destroy($id);
    }
}
