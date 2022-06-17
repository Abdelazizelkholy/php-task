<?php

namespace App\Http\Controllers\Api\Front;

use App\Http\Controllers\Controller;
use App\Http\Transformers\Front\UserTransformer;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     *  User Profile
     */
    public function profile(Request $request): \Illuminate\Http\JsonResponse
    {
        $user = $request->user();
        $fractal = fractal()
            ->item($user)
            ->transformWith(new UserTransformer())
            ->toArray();
        return response()->json([
            'userData' => $fractal,
            'status' => true,
        ], 200);

    }


}
