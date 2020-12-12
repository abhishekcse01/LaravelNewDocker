<?php

/**
 * @author Abhishek
 * Date: 10/12/20
 */

namespace App\Http\RequestValidator;

use Illuminate\Foundation\Http\FormRequest;

class FileUploaderRequest extends FormRequest
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
     * This validation is only for the front end side
     */
    public function rules()
    {
        return [
            'input_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'requestData' => 'array|present'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'files' => 'file  Json is required'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'address' => 'Address Json Data',
        ];
    }
}
