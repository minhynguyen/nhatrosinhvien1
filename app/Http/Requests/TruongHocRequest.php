<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TruongHocRequest extends FormRequest
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
        't_ten' => 'required|max:200',
        't_vido' => 'required',
        't_kinhdo' => 'required',
        't_taomoi' => 'required',
        't_capnhat' => 'required',
        't_trangthai' => 'required',
        ];
    }
    public function messages()
    {
        return [
        't_ten.required' => 'Tên Trường Không Được Bỏ Trống',
        't_kinhdo.required' => 'Kinh Độ Không Được Bỏ Trống',
        't_vido.required' => 'Vĩ Độ Không Được Bỏ Trống',
        't_capnhat.required' => 'Ngày Cập Nhật Không Được Bỏ Trống',
        't_taomoi.required' => 'Ngày Tạo Mới Không Được Bỏ Trống',
        't_ten.max' => 'Tên Không Được Vượt Quá :max Kí Tự',
        ];
    }
}
