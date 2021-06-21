@extends('webmaster.layout.master')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/webmaster/css/pages/app-user.css') }}">
@endsection

@section('content')
  <!-- page users view start -->
  <section class="page-users-view">
    <div class="row">

        <!-- account start -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">حساب کاربری</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="users-view-image">
                            <img src="https://picsum.photos/536/354" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                        </div>
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                            <table>
                                <tr>
                                    <td class="font-weight-bold">نام کاربری</td>
                                    <td>{{ $user->username }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">ایمیل</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">شماره همراه</td>
                                    <td>{{ $user->phone ?? '---'}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 col-md-12 col-lg-5">
                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                <tr>
                                    <td class="font-weight-bold">نام و نام خانوادگی</td>
                                    <td>
                                        {{ $user->profile()->fname ?? '---' }} {{ $user->profile()->lname ?? '---' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">وضعیت ایمیل</td>
                                    <td>
                                        <span class="badge badge-success">تایید شده</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">وضعیت شماره موبایل</td>
                                    <td>
                                        <span class="badge badge-danger">ثبت نشده</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('webmaster.users.edit', $user->id) }}" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> ویرایش</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account end -->

        <!-- information start -->
        <div class="col-md-6 col-12 ">
            <div class="card">
                <div class="card-header">
                    <div class="card-title mb-2">اطلاعات تکمیلی</div>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td class="font-weight-bold">تاریخ تولد </td>
                            <td>
                                <span class="badge badge-danger">ثبت نشده</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">جنسیت</td>
                            <td>آقا</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">تاریخ ثبت نام</td>
                            <td>{{ $user->created_at}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">تاریخ بروزرسانی اطلاعات</td>
                            <td>{{ $user->updated_at}}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <!-- information start -->

        <!-- social links end -->
        <div class="col-md-6 col-12 ">
            <div class="card">
                <div class="card-header">
                    <div class="card-title mb-2">شبکه های اجتماعی</div>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td class="font-weight-bold">Twitter</td>
                            <td>
                                {{ $user->profile()->twetter ?? '---'}}
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Facebook</td>
                            <td>
                                {{ $user->profile()->facebook ?? '---'}}
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Instagram</td>
                            <td>
                                {{ $user->profile()->instagram ?? '---'}}
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Github</td>
                            <td>
                                {{ $user->profile()->github ?? '---'}}
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">CodePen</td>
                            <td>
                                {{ $user->profile()->codePen ?? '---'}}
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Slack</td>
                            <td>
                                {{ $user->profile()->slack ?? '---'}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- social links end -->

    </div>
</section>
<!-- page users view end -->
@endsection
