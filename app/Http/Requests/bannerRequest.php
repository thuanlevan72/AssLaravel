<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bannerRequest extends FormRequest
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
            'name_slide' =>'required|min:3|max:50',
            'image_slide'=>'required',
            'link'=>'required|min:3'
        ];
    }
    public function messages()
    {
        return [
            'name_slide.required' => 'tên slide không được để trống',
            'name_slide.min' => 'tối thiểu 3 ký tự',
            'name_slide.max' => 'tối đa 50 ký tự',
            'image_slide.required'=> 'ảnh bắt buộc phải nhập vào',
            'link.required'=> 'link bắt buộc phải được nhập vào',
            'link.min'=> 'link tối thiểu phải 3 ký tự',
        ];
    }
}
