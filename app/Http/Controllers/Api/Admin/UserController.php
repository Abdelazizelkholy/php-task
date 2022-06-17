<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\RegisterRequest;
use App\Http\Requests\Front\UpdateProfileRequest;
use App\Http\Transformers\Front\UserTransformer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    /**
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     *  Display All Users
     */
    public function index(Request $request): \Illuminate\Http\JsonResponse
    {
        $skip = ($request->_start) ?? 0;
        $users = new User();
        if ($request->has('q')) {
            $users = $users->where('name', 'LIKE', "%{$request->q}%");
        }
        if ($request->has('role')) {
            $users = $users->role($request->role);
        }
        $count = $users->count();
        $users = ($request->has('_start')) ? $users->take(10)->skip($skip) : $users;
        $users = fractal()
            ->collection($users->orderBy('created_at', 'DESC')->get())
            ->transformWith(new UserTransformer())
            ->toArray();
        return response()->json([
            'data' => $users,
            'count' => $count,
            'status' => true,
        ], 200);
    }

    /**
     * @param  RegisterRequest  $request
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
     *  Store User
     */
    public function store(RegisterRequest $request
    ): \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory {

        $userData = $request->validated();
        $user = User::create([
            'name' => $userData['name'],
            'phone' => $userData['phone'],
            'password' => Hash::make($userData['password']),
            'phone_verification' => now(),
        ]);
        $user->assignRole('user');
        return $this->dataResponse(null, trans('messages.user_added'), 200);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
     *  Show User
     */
    public function show($id
    ): \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory {
        $user = fractal()
            ->item(User::findOrFail($id))
            ->transformWith(new UserTransformer())
            ->toArray();
        return $this->dataResponse($user, null, 200);
    }

    /**
     * @param  UpdateProfileRequest  $request
     * @param $id
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
     *  Update User
     */
    public
    function update(
        UpdateProfileRequest $request,
        $id
    ): \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->input('name') ?? $user->name,
            'phone' => $request->input('phone') ?? $user->phone,
            'password' => $request->input('password') ?? $user->password,
        ]);
        return $this->dataResponse(null, trans('messages.user_updated'), 200);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
     *  User Deleted
     */
    public
    function destroy(
        $id
    ): \Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory {
        User::findOrFail($id)->delete();
        return $this->dataResponse(null, trans('messages.user_deleted'), 200);
    }
}
