<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;

class CompanyController extends Controller
{

    private Company $company;

    public function __construct(Company $company) {
        $this->company = $company;
    }
   
    public function store(CompanyRequest $request)
    {
        $params = $request->validated();
        $company = $this->company->create($params);
        return $company;
    }

   
    public function show(int $id)
    {
        $company = $this->company->findOrFail($id);

        return $company;
    }


    public function update(CompanyRequest $request, string $id)
    {
        $params = $request->validated();
        $company = $this->company->findOrFail($id);

        $company->update($params);

        return $company;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $this->company->findOrFail($id)->delete();
        return ['message' => 'success'];
    }
}
