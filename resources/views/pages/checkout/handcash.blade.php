@extends('welcome');
@section('content');


    <section id="cart_items">
        <div class="container container-max" style="max-width: 100%">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="active">Thanh toán giỏ hàng</li>
                </ol>
            </div><!--/breadcrums-->
            <div class="review-payment">
                <h2>Cảm ơn</h2>
            </div>

        </div>
    </section> <!--/#cart_items-->

@endsection
