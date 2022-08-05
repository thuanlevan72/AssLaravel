<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cartRequest extends FormRequest
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
            'email'=>'required|min:3|max:150',
            'address'=>'required|min:3|max:255',
            'phone' =>'required|min:10|max:15'             
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'tên người đặt không được để trống',
            'name.min' => 'tên  người đặt tối thiểu 3 ký tự',
            'name.max' => 'tên người đặt tối đa 50 ký tự',
            'email.required' => 'email người đặt không được để trống',
            'email.min' => 'email  người đặt tối thiểu 3 ký tự',
            'email.max' => 'email người đặt tối đa 150 ký tự',
            'address.required' => 'address người đặt không được để trống',
            'address.min' => 'address  người đặt tối thiểu 3 ký tự',
            'address.max' => 'address người đặt tối đa 255 ký tự',
            'phone.required' => 'phone người đặt không được để trống',
            'phone.min' => 'phone  người đặt tối thiểu 10 ký tự',
            'phone.max' => 'phone người đặt tối đa 15 ký tự',
          
        ];
    }
}
