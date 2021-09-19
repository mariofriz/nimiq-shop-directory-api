<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShopResource;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShowShopController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id id request parameter
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $id)
    {
        $shop = Shop::findOrFail($id);

        return new ShopResource($shop);
    }
}
