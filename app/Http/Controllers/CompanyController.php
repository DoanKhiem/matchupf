<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return response()->json($companies);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'logo' => 'nullable|string',
            'description' => 'nullable|string',
            'industry' => 'nullable|string',
            'founded' => 'nullable|string',
            'size' => 'nullable|string',
            'website' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'twitter' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);
        $company = Company::create($validated);
        return response()->json($company, 201);
    }

    public function show($id)
    {
        $company = Company::findOrFail($id);
        return response()->json($company);
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $validated = $request->validate([
            'name' => 'sometimes|required|string',
            'logo' => 'nullable|string',
            'description' => 'nullable|string',
            'industry' => 'nullable|string',
            'founded' => 'nullable|string',
            'size' => 'nullable|string',
            'website' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'twitter' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);
        $company->update($validated);
        return response()->json($company);
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return response()->json(['message' => 'Company deleted successfully']);
    }
} 