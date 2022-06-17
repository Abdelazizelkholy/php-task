<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Http\Transformers\Admin\AdminTransformer;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    /**
     * @param  AdminLoginRequest  $request
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
     *  Admin  Login
     */
    public function login(AdminLoginRequest $request): \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
    {
        $admin = Admin::where(['email' => request('email')])->first();
        if ($admin && Hash::check(request('password'), $admin?->password)) {
            $adminData = fractal()
                ->item($admin)
                ->transformWith(new AdminTransformer())
                ->toArray();
            $token = $admin->createToken('php-task')->plainTextToken;
            return $this->fullDataResponse($token, $adminData, trans('messages.login'), 200);
        }
        return $this->errorResponse(trans('messages.incorrect_login'), null, 401);
    }
}
