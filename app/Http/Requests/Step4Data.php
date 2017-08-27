<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Step4Data extends FormRequest
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
            'enrolled' => 'required|boolean',
            'major' => '',
            'still_studying' => 'boolean',
            'dropping_out_reasons' => '',
            'wanted_major' => 'required',
            'languages' => 'required',
            'live_with_family' => 'required|boolean'
        ];
    }
}
