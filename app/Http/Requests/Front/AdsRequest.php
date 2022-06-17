<?php

namespace App\Http\Requests\Front;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AdsRequest extends FormRequest
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
    public function onCreate()
    {
        return [
            'area_id' => 'required|exists:areas,id',
            'service_id' => 'required|exists:services,id',
            'type_id' => 'required|exists:types,id',
            'marketed_id' => 'nullable|exists:users,id',
            'price' => 'required|numeric',
            'lat' => 'required',
            'long' => 'required',
            'bank' => 'required|in:0,1',
            'coverage' => 'required|string|max:100',
            'interface' => 'required|string|max:100',
            'room' => 'required|numeric',
            'hall' => 'required|numeric',
            'bathroom' => 'required|numeric',
            'car_entrance' => 'required|in:0,1',
            'driver_room' => 'required|in:0,1',
            'maid_room' => 'required|in:0,1',
            'swimming_pool' => 'required|in:0,1',
            'kitchen' => 'required|in:0,1',
            'inner_staircase' => 'required|in:0,1',
            'appendix' => 'required|in:0,1',
            'furnished' => 'required|in:0,1',
            'property_age' => 'required|numeric',
            'street_view' => 'required|numeric',
            'determine_area' => 'required|numeric',
            'office_name' => 'required|string|max:100',
            'office_num' => 'required|string|max:100',
            'office_reach' => 'required|string|max:100',
            'des' => 'required|string|max:500',
            'featured' => 'required|in:0,1',
            'administration' => 'required|in:0,1',
            'featured_ad' => 'required|in:0,1',
            'img' => 'nullable|mimes:jpeg,png,jpg,gif'
        ];
    }

    public function onUpdate()
    {
        return [
            'area_id' => 'nullable|exists:areas,id',
            'service_id' => 'nullable|exists:services,id',
            'type_id' => 'nullable|exists:types,id',
            'marketed_id' => 'nullable|exists:users,id',
            'price' => 'nullable|numeric',
            'lat' => 'nullable',
            'long' => 'nullable',
            'bank' => 'nullable|in:0,1',
            'coverage' => 'nullable|string|max:100',
            'interface' => 'nullable|string|max:100',
            'room' => 'nullable|numeric',
            'hall' => 'nullable|numeric',
            'bathroom' => 'nullable|numeric',
            'car_entrance' => 'nullable|in:0,1',
            'driver_room' => 'nullable|in:0,1',
            'maid_room' => 'nullable|in:0,1',
            'swimming_pool' => 'nullable|in:0,1',
            'kitchen' => 'nullable|in:0,1',
            'inner_staircase' => 'nullable|in:0,1',
            'appendix' => 'nullable|in:0,1',
            'furnished' => 'nullable|in:0,1',
            'property_age' => 'nullable|numeric',
            'street_view' => 'nullable|numeric',
            'determine_area' => 'nullable|numeric',
            'office_name' => 'nullable|string|max:100',
            'office_num' => 'nullable|string|max:100',
            'office_reach' => 'nullable|string|max:100',
            'des' => 'nullable|string|max:500',
            'featured' => 'nullable|in:0,1',
            'administration' => 'nullable|in:0,1',
            'featured_ad' => 'nullable|in:0,1',
            'img' => 'nullable|mimes:jpeg,png,jpg,gif'
        ];
    }

    public function rules()
    {
        return request()->isMethod('PUT') || request()->isMethod('PATCH') ?
            $this->onUpdate() : $this->onCreate();
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
