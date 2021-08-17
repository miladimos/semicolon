use App\Models\Course;
<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('site.index') }}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Devlearn</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- <li class=" nav-item active">
                <a href="{{ route('webmaster.index') }}"><i class="feather icon-home"></i><span class="menu-title"
                        data-i18n="Dashboard">داشبورد</span></a>
            </li> --}}
            <li class=" nav-item active">
                <a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">حساب کاربری
                        من</span></a>
            </li>
            <li class=" navigation-header"><span>ماژول ها</span>
            </li>
            {{-- <li class=" nav-item"><a href="app-email.html"><i
                        class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">Email</span></a>
            </li> --}}
            <li class=" nav-item"><a href="#"><i class="feather icon-users"></i><span class="menu-title"
                        data-i18n="User">کاربران</span><span
                        class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.users.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه کاربران</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.users.create') }}"><i class="feather
                        icon-user-plus"></i><span class="menu-item" data-i18n="View">ایجاد کاربر جدید</span></a>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title"
                        data-i18n="User">مقالات</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.articles.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه مقاله ها</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.articles.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">ایجاد مقاله جدید</span></a>
                </ul>
            </li>
            {{-- @can('manage-books') --}}
            <li class=" nav-item"><a href="#"><i class="feather
                icon-book"></i><span class="menu-title" data-i18n="User">کتاب ها</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.books.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه کتاب ها</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.books.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">ایجاد کتاب جدید</span></a>
                    <li><a href="{{ route('webmaster.publishers.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه انتشارات </span></a>
                    </li>
                    <li><a href="{{ route('webmaster.publishers.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">ایجاد انتشارات جدید</span></a>
                </ul>
            </li>
            {{-- @endcan --}}
            <li class=" nav-item"><a href="#"><i class="feather icon-video"></i><span class="menu-title"
                        data-i18n="User">دوره ها</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.courses.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه دوره ها</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.courses.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">ایجاد دوره جدید</span></a>
                    <li><a href="{{ route('webmaster.courses.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">سطح دوره ها</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.courses.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">وضعیت دوره ها</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.courses.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">نوع دوره ها</span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-music"></i><span class="menu-title"
                        data-i18n="User">پادکست ها</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.podcasts.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه پادکست ها</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.podcasts.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">ایجاد پادکست جدید</span></a>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-film"></i><span class="menu-title"
                        data-i18n="User">درس ها</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.episodes.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه درس ها</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.episodes.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">ایجاد درس جدید</span></a>
                    <li><a href="{{ route('webmaster.chapters.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه سرفصل ها</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.chapters.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">ایجاد سرفصل جدید</span></a>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-layers"></i><span class="menu-title"
                        data-i18n="User">دست بندی ها</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.categories.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه دسته بندی ها</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.categories.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">ایجاد دسته بندی جدید</span></a>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-tag"></i><span class="menu-title"
                        data-i18n="User">برچسب ها</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.tags.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه برچسب ها</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.tags.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">ایجاد برچسب جدید</span></a>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-percent"></i><span class="menu-title"
                        data-i18n="User">تخفیف ها</span></a>
                <ul class="menu-content">

                    <li><a href="{{ route('webmaster.discounts.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه تخفیف ها</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.discounts.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">ایجاد تخفیف جدید</span></a>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title"
                        data-i18n="User">بخش مالی </span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.payments.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه پرداخت ها</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title"
                        data-i18n="User">تیکت ها </span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.tickets.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه تیکت ها</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather
                icon-message-square"></i><span class="menu-title" data-i18n="User">نظرات </span><span
                        class="badge badge badge-info badge-pill float-right mr-2">22</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.comments.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">همه نظرات </span></a>
                    </li>
                    {{-- <li><a href="{{ route('webmaster.comments.unapproved') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">نظرات تایید نشده</span></a> --}}
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-settings"></i><span class="menu-title"
                        data-i18n="User">تنظیمات</span></a>
                <ul class="menu-content">
                    <li><a href="{{ route('webmaster.discounts.index') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="List">تنظیمات عمومی سایت</span></a>
                    </li>
                    <li><a href="{{ route('webmaster.discounts.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">تنظیمات اطلاع رسانی
                            </span></a></li>
                    <li><a href="{{ route('webmaster.discounts.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">تنظیمات SEO
                            </span></a></li>
                    <li><a href="{{ route('webmaster.discounts.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">تنظیمات قالب
                            </span></a></li>
                    <li><a href="{{ route('webmaster.discounts.create') }}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="View">تنظیمات اشتراک ویژه
                            </span></a></li>
                    </span></a>
            </li>



        </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">نقش
                    ها و سطح دسترسی ها</span></a>
            <ul class="menu-content">
                <li><a href="{{ route('webmaster.roles.index') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="List">همه نقش ها</span></a>
                </li>
                <li><a href="{{ route('webmaster.roles.create') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="View">ایجاد نقش جدید</span></a>
                <li><a href="{{ route('webmaster.permissions.index') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="List">همه سطح دسترسی ها</span></a>
                </li>
                <li><a href="{{ route('webmaster.permissions.create') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="View">ایجاد سطح
                            دسترسی جدید</span></a>
            </ul>
        </li>
        <li class=" navigation-header"><span>بخش های دیگر</span>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-info"></i><span class="menu-title" data-i18n="User">بخش
                    ها </span><span class="badge badge badge-info badge-pill float-right mr-2">22</span></a>
            <ul class="menu-content">
                <li><a href="/admin/statistics"><i class="feather icon-circle"></i><span class="menu-item"
                            data-i18n="List"> بخش آمار سایت </span></a>
                </li>
                <li><a href="{{ route('webmaster.contacts.index') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="List">همه تماس با ما </span></a>
                </li>
                <li><a href="{{ route('webmaster.faqs.index') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="List">همه سوالات متداول </span></a>
                </li>
            </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                    data-i18n="User">خبرنامه </span><span
                    class="badge badge badge-info badge-pill float-right mr-2">22</span></a>
            <ul class="menu-content">
                <li><a href="{{ route('webmaster.newsletters.index') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="List">خبرنامه ها</span></a>
                </li>
            </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                    data-i18n="User">پشتیبان گیر </span><span
                    class="badge badge badge-info badge-pill float-right mr-2">22</span></a>
            <ul class="menu-content">
                <li><a href="{{ route('webmaster.backups') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="View">پشتیبان گیر
                        </span></a></li>
                <li><a href="{{ route('webmaster.backups.create') }}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="View">ایجاد پشتیبان
                        </span></a></li>
            </ul>
        </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
