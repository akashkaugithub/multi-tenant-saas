<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return auth()->user()->companies;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'industry' => 'required',
        ]);

        $company = auth()->user()->companies()->create($data);

        return response()->json($company);
    }

    public function update(Request $request, $id)
    {
        $company = auth()->user()->companies()->findOrFail($id);
        $company->update($request->only('name', 'address', 'industry'));
        return response()->json($company);
    }

    public function destroy($id)
    {
        $company = auth()->user()->companies()->findOrFail($id);
        $company->delete();
        return response()->json(['message' => 'Company deleted']);
    }
}
