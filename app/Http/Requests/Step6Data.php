<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Step6Data extends FormRequest
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
            'project' => 'required',
            'project_goal' => 'required',
            'project_reach' => 'required',
            'project_role' => 'required',
            'project_finances' => 'required',
            'project_partners' => 'required'
        ];
    }
}
