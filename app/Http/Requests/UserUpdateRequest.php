<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'first_name'=>'required',
            'last_name'=>'required',
            'age'=>'required|numeric',
            'address'=>'required'
        ];
    }
	
	
	public function messages()
    {
        return [
			'first_name.required' => 'First Name required',
			'last_name.required' => 'Last Name required',
			'age.required' => 'Age required',
			'age.numeric' => 'Age must be numeric',
			'address.required' => 'Address required',
		];
    }
}
