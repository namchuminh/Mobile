@extends('LayoutUser')
@section('content')
@include('User.inc.area',['active'=>'Giới thiệu'])

<!-- counter-area-start -->
<div class="counter-area pt-70 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-counter mb-30 text-center">
                    <h2 class="counter">90</h2>
                    <span>DỰ ÁN ĐÃ HOÀN THÀNH</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-counter mb-30 text-center">
                    <h2 class="counter">80</h2>
                    <span>chức năng</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-counter mb-30 text-center">
                    <h2 class="counter">100</h2>
                    <span>giao diện</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-counter mb-30 text-center">
                    <h2 class="counter">70</h2>
                    <span>tốc độ website</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter-area-end -->
@endsection
