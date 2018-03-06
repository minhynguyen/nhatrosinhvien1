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
            'lnt_ten' => 'required|max:50',
            'lnt_trangthai' => 'required',
        ];
    }
    public function messages()
    {
        return [
        'lnt_ten.required' => 'Tên Loại Không Được Bỏ Trống',
        'lnt_ten.max' => 'Tên Không Được Vượt Quá :max Kí Tự',
        ];
    }
}
