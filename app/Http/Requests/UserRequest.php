<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'phone_number' => 'required|max:11',
            'first_name' => 'required',
            'last_name' => 'required',
            'city' => 'required',
            '_state' => 'required',
            'segment' => 'required',
            'focus' => 'required',
        ];
    }
}
