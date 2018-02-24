<p>
    Chào mừng {{ $user->name }} đã đăng ký thành viên tại nhatrosinhvien.com Bạn hãy click vào đường link sau đây để hoàn tất việc đăng ký.
    </br>
    <a href="{{ $user->activation_link }}">{{ $user->activation_link }}</a>
</p>