<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShopResource;
use App\Models\Shop;
use Illuminate\Http\Request;

class ListShopsController extends Controller
{
    const PAGE_SIZE = 50;
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $shops = Shop::paginate(self::PAGE_SIZE);

        return ShopResource::collection($shops);
    }
}
