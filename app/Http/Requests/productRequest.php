<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
           'name_product' =>'required|min:3|max:50',
           'quantity'=>'required|min:1',
           'price'=>'required|integer|min:1',
           'sale_price'=>'required|integer|min:1|max:100',
           'image_product'=>'required',
           'body'=>'required|min:5|max:2000',
            'title'=>'required|min:3|max:50',
        ];
    }
    public function messages()
    {
        return [
            'name_product.required' => 'tên sản phẩm không được để trống',
            'name_product.min' => 'tên sản phẩm tối thiểu 3 ký tự',
            'name_product.max' => 'tên sản phẩm tối đa 50 ký tự',
            'image_product.required'  => 'image không được để trống',
            'quantity.required'=>'số lượng không được để trống',
            'price.required'=>'giá sản phẩm không được để trống',
            'sale_price.required' => 'giá khuyên mãi không được để trống',
            'sale_price.size'=> 'giá sản phẩm khuyến mãi không được vượt quá 100%',
            'body.required'=>'vui lòng nhập vào nội dung của sản phẩm',
            'body.min'=>'nội dung của sản phẩm quá ngắn',
            'body.max'=>'nội dung của sản phẩm quá dài',
            'title.required'=>'vui lòng nhập vào tiêu đề của sản phẩm',
            'title.min'=>'tiêu đề của sản phẩm quá ngắn',
            'title.max'=>'tiêu đề của sản phẩm quá dài'
        ];
    }
}
