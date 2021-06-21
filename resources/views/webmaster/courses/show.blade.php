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
                        <div class="card-title">جزییات دوره</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="users-view-image">
                                <img src="{{ $course->thumbnail_path }}"
                                    class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                            </div>
                            <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                <table>
                                    <tr>
                                        <td class="font-weight-bold">عنوان دوره</td>
                                        <td>{{ $course->title }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">نوع دوره</td>
                                        <td>{{ $course->type->title ?? '---' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">وضعیت دوره</td>
                                        <td>{{ $course->status->title ?? '---' }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-12 col-lg-5">
                                <table class="ml-0 ml-sm-0 ml-lg-0">
                                    <tr>
                                        <td class="font-weight-bold">دسته بندی ها</td>
                                        <td>
                                            @foreach ($course->categories as $item)
                                                <a href="{{ $item->path() }}"> {{ $item->name }} - </a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">انتشار یافته در</td>
                                        <td>{{ $course->published_at ?? '---' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">قیمت</td>
                                        <td>{{ $course->price ?? '---' }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12">
                                <a href="{{ route('webmaster.courses.edit', $course->uuid) }}"
                                    class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> ویرایش</a>
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
                                <td class="font-weight-bold">سطح دوره </td>
                                <td>{{ $course->level->title ?? '---' }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">تعداد درس ها </td>
                                <td>{{ $course->episodes()->count() ?? '---' }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">تعداد سرفصل ها </td>
                                <td>{{ $course->chapters()->count() ?? '---' }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">تاریخ ثبت </td>
                                <td>{{ jdate($course->created_at)->ago() ?? '---' }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">تاریخ بروزرسانی </td>
                                <td>{{ jdate($course->updated_at)->ago() ?? '---' }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">تاریخ قرارگیری آخرین درس </td>
                                <td>{{ jdate($course->last_update)->ago() ?? '---' }}</td>
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
                                <td class="font-weight-bold">تعداد دانشجو</td>
                                <td>
                                    {{ $course->downloadCount ?? '---' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">تعداد نظر</td>
                                <td>
                                    {{ $course->comments()->count() ?? '---' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">تعداد بازدید</td>
                                <td>
                                    {{ $course->viewCount ?? '0' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">مدرس</td>
                                <td> <a href="{{ $course->teacher->path() }}">{{ $course->teacher->label }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">کاربر ثبت کننده</td>
                                <td> <a href="{{ $course->author->path() }}">{{ $course->author->label }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">وضعیت دوره</td>
                                <td>
                                    @if ($course->active)
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
                                    @foreach ($course->tags as $item)
                                        <a href="{{ $item->path() }}"> {{ $item->name }} -
                                        </a>
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
