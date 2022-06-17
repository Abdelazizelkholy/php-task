<?php


namespace App\Http\Transformers\Admin;


use App\Models\Admin;
use JetBrains\PhpStorm\ArrayShape;
use League\Fractal\TransformerAbstract;

class AdminTransformer extends TransformerAbstract
{


    #[ArrayShape([
        'id' => "int", 'name' => "string", 'phone' => "string", 'email' => "string"
    ])] public function transform(Admin $admin): array
    {
        return [
            'id' => (int) $admin->id,
            'name' => (string) $admin->name,
            'phone' => (string) $admin->phone,
            'email' => (string) $admin->email,
        ];
    }


}
