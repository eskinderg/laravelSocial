<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserProfileUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'min:3|required',
            'lastname' => 'min:3',
            'email' => 'required|email'
        ];
    }
}
