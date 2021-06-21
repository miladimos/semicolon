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
                    <div class="card-title">جزییات</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="users-view-image">
                            <img src="{{  asset('storage/'.$podcast->thumbnail_path)  }}" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                        </div>
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                            <table>
                                <tr>
                                    <td class="font-weight-bold">عنوان کتاب</td>
                                    <td>{{ $podcast->title }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">نویسنده</td>
                                    <td>{{ $podcast->author ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">زبان</td>
                                    <td>{{ $podcast->lang ?? '---'}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12 col-md-12 col-lg-5">
                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                <tr>
                                    <td class="font-weight-bold">دسته بندی ها</td>
                                    {{-- <td>
                                        @foreach ($podcast->categories  as $item)
                                            {{ $item->name }}} -
                                        @endforeach
                                    </td> --}}
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">انتشارات</td>
                                    <td>{{ $podcast->publisher->title ?? '---'}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">انتشار یافته در</td>
                                    <td>{{ $podcast->published_at ?? '---'}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('webmaster.podcasts.edit', $podcast->id) }}" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> ویرایش</a>
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
                            <td class="font-weight-bold">تعداد صفحات </td>
                            <td>{{ $podcast->page_count ?? '---'}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">تاریخ ثبت </td>
                            <td>{{ $podcast->created_at ?? '---'}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">تاریخ بروزرسانی </td>
                            <td>{{ $podcast->updated_at ?? '---'}}</td>
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
                    <div class="card-title mb-2">بیشتر</div>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td class="font-weight-bold">تعداد دانلود</td>
                            <td>
                                {{ $podcast->downloadCount ?? '---'}}
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">تعداد نظر</td>
                            <td>
                                {{ $podcast->comments()->count() ?? '---'}}
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">کاربر ثبت کننده</td>
                            <td>
                                {{ $podcast->user->username ?? '---'}}
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">وضعیت کتاب</td>
                            <td>
                                @if($podcast->active)
                                <div class="chip chip-primary">
                                    <div class="chip-body">
                                        <div class="chip-text">فعال</div>
                                    </div>
                                </div>
                                @else
                                <div class="chip chip-danger">
                                    <div class="chip-body">
                                        <div class="chip-text">غیر فعال</div>
                                    </div>
                                </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">برچسب ها</td>
                            <td>
                                @foreach ($podcast->tags  as $item)
                                    {{ $item->name }}} -
                                @endforeach
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
