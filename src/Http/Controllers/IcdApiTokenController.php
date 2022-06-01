<?php

namespace Sawirricardo\IcdApi\Laravel\Http\Controllers;

use Illuminate\Routing\Controller;

class IcdApiTokenController extends Controller
{
    public function __invoke()
    {
        return response()->json([
            'access_token' => icdApiClient()->getAccessTokenData(),
        ]);
    }
}
