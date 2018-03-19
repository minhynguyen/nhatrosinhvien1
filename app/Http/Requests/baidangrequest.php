<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class baidangrequest extends FormRequest
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
            'bd_tieude' => 'required',
            'bd_noidung' => 'required',
            'nt_ma' => 'required',
            'lbd_ma' => 'required',
        ];
    }
    public function messages()
    {
        return [
        'bd_noidung.required' => 'Nội Dung Bài Đăng Không Được Bỏ Trống',
        'bd_tieude.required' => 'Tiêu Đề Bài Đăng Không Được Bỏ Trống',
        'lbd_ma.required' => 'Vui Lòng Chọn Loại Bài Đăng',
        'nt_ma.required' => 'Vui Lòng Chọn Nhà Trọ Bạn Muốn Đăng Bài',
        
        ];
    }
}
