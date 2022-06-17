<?php

namespace App\Http\Transformers\Front;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{


    public function transform(User $user)
    { 
        $array = [
            'id' => (int) $user->id,
            'name' => (string) $user->name,
            'phone' => (string) $user->phone,
        ];
        return $array;
    }


}


?>
