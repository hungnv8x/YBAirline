@extends('frontend.home')

@section('title','Flight detail')

@section('content')
    <h1 style="text-align: center">Oder</h1>
    <form action="" method="post">
        @csrf
        <div style="background-color: #ebebeb; border-radius: 5px; padding: 5px; margin-bottom: 5px">
            <table style="margin: 5px; width: 100%">
                <tr>
                    <td>{{$flight->from}}</td>
                    <td><img src= {{asset("images/plane.png")}} ></td>
                    <td>{{$flight->to}} </td>
                    <td>{{$flight->departure_date}} </td>
                    <td>Seat</td>
                    <td>x</td>
                    <td><input name="quantity" style=" width: 50px" type="number" value="1"></td>
                    <td>=</td>
                    <td>{{$flight->seat->price}}</td>
                </tr>
                <tr>
                    <td><img width="50px" src={{asset("images/logo.png")}} alt=""></td>
                    <td>{{$flight->name}}</td>
                    <td></td>
                    <td>{{$flight->travel_time}}</td>
                    <td>Tax + fee</td>
                    <td></td>
                    <td></td>
                    <td>=</td>
                    <td>{{$flight->seat->price * 0.1}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Sum</td>
                    <td></td>
                    <td></td>
                    <td>=</td>
                    <td style="color: red">{{$flight->seat->price + $flight->seat->price * 0.1}}</td>
                </tr>
            </table>
        </div>
        <div style="background-color: #ebebeb; border-radius: 5px; padding: 5px">
            <table style="margin: 5px; width: 100%">
                <tr>
                    <td colspan="3"><h5>Customer information</h5></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input name="name" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->name}}"></td>
                    <td>email</td>
                    <td><input readonly name="email" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->email}}"></td>
                    <td>Phone</td>
                    <td><input name="phone" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"></td>
                </tr>
                <tr></tr>
            </table>
        </div>
        <div style="background-color: #ebebeb; border-radius: 5px; padding: 5px; margin: 5px 0 5px 0;">
            <table style="margin: 5px; width: 100%">
                <tr>
                    <td style="text-align: right">To {{$flight->to}}, {{$flight->departure_date}}</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="row">
            <div class="col-6 form-group mt-3">
                <p class="semibold-text mb-0"><a href="{{route('home')}}" ><i class="fa fa-angle-left fa-fw"></i> Back</a></p>
            </div>
            <div class="col-6">
                <button style="float: right" type="submit" class="btn btn-primary">Order</button>
            </div>

        </div>
    </form>
    <div style="background-color: #ebebeb; border-radius: 5px; padding: 5px">
        <div style="padding: 5px  5px 0 20px">
            <p><h5>6 lý do đặt vé máy bay tại YB Airline:</h5></p>
        </div>
        <ul>
            <li>Luôn bán đúng giá</li>
            <li>Xuất hóa đơn trong ngày</li>
            <li>Xác nhận đặt vé sau 1 phút</li>
            <li>Phục vụ 24/7 không nghỉ 1900100 có</li>
            <li>Dịch vụ sau bán hàng chuyên nghiệp</li>
            <li>Công ty vé máy bay online 2 thành viên, 1 tuần kinh nghiệm</li>
        </ul>
    </div>
@endsection
