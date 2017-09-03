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
            'major' => 'required_if:enrolled,1',
            'still_studying' => 'required_if:enrolled,1|boolean',
            'dropping_out_reasons' => 'required_if:still_studying,0',
            'wanted_major' => 'required',
            'languages' => 'required',
            'live_with_family' => 'required|boolean'
        ];
    }
}
