<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActiveCompanyController extends Controller
{
    public function setActive(Request $request)
    {
        $request->validate(['company_id' => 'required|exists:companies,id']);

        $user = auth()->user();

        $company = $user->companies()->where('id', $request->company_id)->firstOrFail();

        \App\Models\UserActiveCompany::updateOrCreate(
            ['user_id' => $user->id],
            ['company_id' => $company->id]
        );

        return response()->json(['message' => 'Active company set']);
    }

}
