<?php

namespace App\Http\Requests\Front;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => 'required|exists:users,phone',
            'password' => 'required|min:6'
        ];
    }


    public function messages()
    {
        return [
            'phone.required' => 'phone is required!',
            'phone.exists' => ' login data is invalid',
            'password.required' => 'password is required!',

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = [
            'status' => false,
            'message' => $validator->errors()->first(),
            'data' => $validator->errors()
        ];
        throw new HttpResponseException(response()->json($response, 422));
    }
}
