<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadData extends FormRequest
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
            'g-recaptcha-response.recaptcha' => 'Wrong captcha.',
            'g-recaptcha-response.required' => 'Please enter the captcha (you have to turn on JavaScript to see it).'
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
            'email' => 'required|email',
            'application_pdf' => 'required|file|mimes:pdf',
            'g-recaptcha-response' => 'required|recaptcha'
        ];
    }
}
