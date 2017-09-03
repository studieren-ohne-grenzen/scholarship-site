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

    public function messages()
    {
        return [
            'gender.in' => 'For this application period, we will only accept female applicants.'
        ];
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
            'gender' => 'required|in:female',
            'current_address' => 'required',
            'civil_status' => 'required',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ];
    }
}
