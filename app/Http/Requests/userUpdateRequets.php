<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userUpdateRequets extends FormRequest
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
            'name'=>'required|max:155|min:3',
            'phone'=>'required|max:15|min:10',
            'password'=>'',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Không được để trống tường họ và tên',
            'name.min' => 'tên tối thiểu phải 3 ký tự',
            'name.max'=> 'tên tối đa phải được 155 ký tự',
            'phone.required' => 'trường điện thoại không được để trống',
        ];
    }
}
