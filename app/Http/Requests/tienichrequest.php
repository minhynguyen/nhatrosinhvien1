<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tienichrequest extends FormRequest
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
            'ti_ten' => 'required|max:30|unique:tienich',
            'ti_diengiai' => 'required',
        ];
    }
    public function messages()
    {
        return [
        'ti_ten.required' => 'Tên Tiện Ích Không Được Bỏ Trống',
        'ti_diengiai.required' => 'Diễn Giải Ích Không Được Bỏ Trống',
        'ti_ten.max' => 'Tên Không Được Vượt Quá :max Kí Tự',
        'ti_ten.unique' => 'Tiện Ích Này Đã Tồn Tại',
        ];
    }
}
