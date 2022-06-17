<?php

namespace App\Http\Controllers\Api\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\LoginRequest;
use App\Http\Requests\Front\RegisterRequest;
use App\Http\Requests\Front\VerifyRequest;
use App\Http\Traits\SMS;
use App\Http\Transformers\Front\UserTransformer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use  SMS;

    /**
     * @param  RegisterRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     *  User Registration
     */
    public function Register(RegisterRequest $request): \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
    {
        $userData = $request->validated();
        $userData['code'] = Hash::make(123456);
        $userData['password'] = Hash::make('password');
        $user = User::create($userData);
        $user->assignRole('user');
        $token = $user->createToken('php_task')->plainTextToken;
        $this->sendMessage($request->phone, $request->code);
        $fractal = fractal()
            ->item($user)
            ->transformWith(new UserTransformer())
            ->toArray();
        return $this->fullDataResponse($token, $fractal, trans('messages.register'), 200);
    }

    /**
     * @param  VerifyRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     *  User Verification
     */
    public function verification(VerifyRequest $request): \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
    {
        $user = User::where('phone', $request->phone)->first();
        if (!$user) {
            return $this->errorResponse('User Not Found', null, 422);
        }
        if (!Hash::check($request->code, $user->code)) {
            return $this->errorResponse(trans('messages.wrong_code'), null, 422);
        }
        $user->phone_verification = Carbon::now();
        $user->code = null;
        $user->save();
        $token = $user->createToken('php-task')->plainTextToken;
        $fractal = fractal()
            ->item($user)
            ->transformWith(new UserTransformer())
            ->toArray();
        return $this->fullDataResponse($token, $fractal, trans('messages.activated_account'), 200);
    }

    /**
     * @param  LoginRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     *  User Login
     */
    public function login(LoginRequest $request): \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
    {
        $user = User::where('phone', $request->phone)->first();
        if ($user && Hash::check(request('password'), $user?->password)) {
                $user = Auth::user();
                $token = $user->createToken('php-task')->plainTextToken;
                $fractal = fractal()
                    ->item($user)
                    ->transformWith(new UserTransformer())
                    ->toArray();
                return $this->fullDataResponse($token, $fractal, null, 200);
        } else {
            return $this->errorResponse(trans('messages.password_error'), null, 401);
        }
    }



}
