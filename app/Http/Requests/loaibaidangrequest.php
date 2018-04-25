<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loaibaidangrequest extends FormRequest
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
            'lbd_ten' => 'required|max:50|unique:loaibaidang',
            'lbd_trangthai' => 'required',
        ];
    }

    public function messages()
    {
        return [
        'lbd_ten.required' => 'Tên Loại Bài Đăng Không Được Bỏ Trống',
        'lbd_ten.max' => 'Tên Loại Bài Đăng Không Được Vượt Quá :max Kí Tự',
        'lbd_ten.unique' => 'Loại Bài Đăng Này Đã Tồn Tại',
        ];
    }
}
