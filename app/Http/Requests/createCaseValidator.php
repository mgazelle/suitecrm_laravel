<?php

namespace app\Http\Requests;

use App\Http\Requests\Request;

class createCaseValidator extends Request
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
          'case_type' => 'required',
                'case_subject' => 'required',
                'case_message' => 'required'
        ];
    }
}
