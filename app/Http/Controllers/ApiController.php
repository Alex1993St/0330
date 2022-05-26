<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductSearchRequest;
use App\Services\Search;
use App\Services\Session;

class ApiController extends Controller
{
    /**
     * @return mixed|string
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function getKey()
    {
        return Session::getKeySession();
    }

    /**
     * @param ProductSearchRequest $request
     * @param Search $search
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function search(ProductSearchRequest $request, Search $search)
    {
        return $search->getProducts($request->all());
    }
}
