@extends('LayoutUser')
@section('content')
    @include('User.inc.area', ['active' =>  isset($status) ? 'Thay đổi mật khẩu' : 'Quên mật khẩu'])
    <!-- user-login-area-start -->
    <div class="user-login-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-title text-center mb-30">
                        <h2>{{ isset($status) ? 'Thay đổi mật khẩu' : 'Quên mật khẩu' }}</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                    <form action="{{ isset($status) ? route('mail.update',$status) : route('mail.store') }}" method="POST">
                        @isset($status)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="login-form">
                            @if (isset($status))
                            <div class="single-login" style="position: sticky;">
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="password" required />
                            </div>
                            @else
                            <div class="single-login">
                                <label>Email<span>*</span></label>
                                <input type="email" name="email" required />
                            </div>
                            @endif
                            <div class="single-login single-login-2">
                                <button style=" width: 100%; margin-top: 2%; " type="submit">Tiếp tục <i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- user-login-area-end -->
@endsection
