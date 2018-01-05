<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentValidator extends FormRequest
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
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'contact' => 'required|numeric',
            'password' => 'required',
            'reg' => 'required|numeric',
            'address' => 'required',
            'session' => 'required',
            'department' => 'required',
            'semester' => 'required',
            'gender' => 'required',
            'email' => 'required|unique:students',
        ];
    }
}
