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
     * @return mixed
     */
    public function search(ProductSearchRequest $request)
    {
        return app(Search::class)->getProducts($request->all());
    }
}
