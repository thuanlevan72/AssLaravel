<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' =>'required|min:3|max:50',
            'title'=>'max:150',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'name không được để trống',
            'name.min' => 'name tối thiểu 3 ký tự',
            'name.max' => 'name tối đa 50 ký tự',

            'title.max'  => 'title không được quá 150 ký tự',
        ];
    }
}
