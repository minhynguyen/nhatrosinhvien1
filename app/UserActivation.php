<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserActivation extends Model
{
    protected $table = 'user_activations';

    // Tạo mã xác thực
    protected function getToken()
    {
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }

    // Tạo xác thực người dùng
    public function createActivation($user)
    {
        $activation = $this->getActivation($user);

        if (!$activation) {
            return $this->createToken($user);
        }
        return $this->regenerateToken($user);
    }

    // Tạo lại dòng dữ liệu có chứa tài khoản và mã xác thực
    private function regenerateToken($user)
    {
        $token = $this->getToken();
        UserActivation::where('user_id', $user->id)->update([
            'activation_code' => $token,
            'created_at' => new Carbon()
        ]);
        return $token;
    }

    // Tạo dòng dữ liệu có chứa tài khoản và mã xác thực
    private function createToken($user)
    {
        $token = $this->getToken();
        UserActivation::insert([
            'user_id' => $user->id,
            'activation_code' => $token,
            'created_at' => new Carbon()
        ]);
        return $token;
    }

    // Tìm user cần xác thực theo "user_id"
    public function getActivation($user)
    {
        return UserActivation::where('user_id', $user->id)->first();
    }

    // Tìm user cần xác thực theo "activation_code"
    public function getActivationByToken($token)
    {
        return UserActivation::where('activation_code', $token)->first();
    }

    // Xóa tài khoản cần xác thực
    public function deleteActivation($token)
    {
        UserActivation::where('activation_code', $token)->delete();
    }
}