<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Step1Data extends FormRequest
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
            'first_name' => 'required',
            'family_name' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'current_address' => 'required',
            'civil_status' => 'required',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ];
    }
}
