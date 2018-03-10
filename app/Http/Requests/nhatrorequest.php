<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class nhatrorequest extends FormRequest
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
            'nt_ten' => 'required|max:50',
            'nt_kinhdo' => 'required',
            'nt_vido' => 'required',
            'nt_sdtlienhe' => 'required',
            'nt_diachi' => 'required',
            'nt_giadien' => 'required',
            'nt_gianuoc' => 'required',
            'lnt_ma' => 'required',
            'nt_ten'=>'unique:nhatro',
            'nt_diachi'=>'unique:nhatro',
        ];
    }
    public function messages()
    {
        return [
        'nt_ten.required' => 'Tên Nhà Trọ Không Được Bỏ Trống',
        'nt_kinhdo.required' => 'Kinh Độ Không Được Bỏ Trống',
        'nt_vido.required' => 'Vĩ Độ Không Được Bỏ Trống',
        'nt_ten.max' => 'Tên Không Được Vượt Quá :max Kí Tự',
        'nt_ten.unique' => 'Nhà Trọ Này Đã Tồn Tại',
        ];
    }
}
