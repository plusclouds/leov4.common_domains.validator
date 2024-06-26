<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use App\Http\Requests\DomainRequest;
use App\Services\DomainService;

class DomainController extends Controller
{
    /**
     * This method is used to check if the domain is valid or not.
     *
     * @param DomainRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkValidation(DomainRequest $request)
    {
        return response()->json([
            "is_valid" => DomainService::validateDomain($request->validated()['domain'])
        ]);
    }
}
