<?php

namespace App\Http\Traits;

trait Response
{

    public function fullDataResponse($token, $data, $message, $code)
    {
        $array = [
            'token' => $token,
            'data' => $data,
            'message' => $message,
            'status' => in_array($code, $this->successCode()),
        ];
        return response($array, $code);
    }

    public function dataResponse($data, $message = null, $code = 200)
    {
        $array = [
            'data' => $data,
            'message' => $message,
            'status' => in_array($code, $this->successCode()),
        ];
        return response($array, $code);
    }

    public function errorResponse($message, $errors, $code)
    {
        $array = [
            'message' => $message,
            'errors' => $errors,
            'status' => in_array($code, $this->successCode())
        ];
        return response($array, $code);

    }

    public function successCode(): array
    {
        return [200, 201, 202];
    }
        
}
