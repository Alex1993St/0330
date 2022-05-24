<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductSearchRequest;
use App\Services\Search;
use App\Services\Session;

class ApiController extends Controller
{
    public function getKey()
    {
        return Session::getKeySession();
    }

    public function search(ProductSearchRequest $request)
    {
        return Search::getProducts($request->all());
    }
}
