<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usersRequest extends FormRequest
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
            'email'=>'required|max:155|min:3|email|unique:users',
            'phone'=>'required|max:15|min:10',
            'password'=>'required|max:155|min:3',
            'image'=>'required',

        ];
    }
    public function messages(): array
{
    return [
        'name.required' => 'Không được để trống tường họ và tên',
        'name.min' => 'tên tối thiểu phải 3 ký tự',
        'name.max'=> 'tên tối đa phải được 155 ký tự',
        'email.min'=> 'email tối thiểu phải 3 ký tự',
        'email.max'=> 'email tối thiểu phải 3 ký tự',
        'email.email'=> 'email không hợp lệ',
        'phone.required' => 'trường điện thoại không được để trống',
        'email.unique' => 'email đã được tạo trước',
        'password.required' =>'password không được để trống',
        'email.required' => 'Không được để trống trường email',
        'image.required' =>'image không được bỏ trống',
    ];
}
}
