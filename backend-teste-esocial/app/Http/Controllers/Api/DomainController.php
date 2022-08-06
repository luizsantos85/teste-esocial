<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateDomainFormRequest;
use Illuminate\Http\Request;
use App\Models\Domain;

class DomainController extends Controller
{
    private $domain;

    public function __construct(Domain $domain)
    {
        $this->domain = $domain;
    }

    public function index(Request $request)
    {
        $domain = $this->domain->getDomains($request->name);
        return response()->json($domain, 200);
    }

    public function store(StoreUpdateDomainFormRequest $request)
    {
        $domain = $this->domain->create($request->all());
        return response()->json($domain, 201);
    }

    public function update(StoreUpdateDomainFormRequest $request, $id)
    {
        $domain = $this->domain->find($id);
        if (!$domain) {
            return response()->json(['error' => 'ID não encontrado!'], 404);
        }

        $domain->update($request->all());
        return response()->json($domain, 200);
    }
}
