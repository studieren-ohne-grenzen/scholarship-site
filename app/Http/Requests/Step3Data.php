<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Step3Data extends FormRequest
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
            'conditions' => 'required',
            'parents_profession' => 'required',
            'where_live' => 'required',
            'how_many_people' => 'required',
            'job' => 'required',
            'conflict' => 'required',
            'support_needed' => 'required|boolean',
            'additional_information' => ''
        ];
    }
}
