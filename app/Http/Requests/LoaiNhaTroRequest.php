<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiNhaTroRequest extends FormRequest
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
            'lnt_ten' => 'required|max:50|unique:loainhatro',
            'lnt_trangthai' => 'required',
        ];
    }
    public function messages()
    {
        return [
        'lnt_ten.required' => 'Tên Loại Nhà Trọ Không Được Bỏ Trống',
        'lnt_ten.max' => 'Tên Loại Nhà Trọ Không Được Vượt Quá :max Kí Tự',
        'lnt_ten.unique' => 'Loại Nhà Trọ Này Đã Tồn Tại',
        ];
    }
}
