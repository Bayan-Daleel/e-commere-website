<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|max:30',
            'email'=>'email|required',
            'password'=>'required|min:8,max:255|unique:users,password',
            'username'=>'required|unique:users,username',
        ];
    }
}
