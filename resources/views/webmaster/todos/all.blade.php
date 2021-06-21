@extends('webmaster.layout.master')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('/webmaster/css/pages/app-todo.css') }}">

@endsection

@section('scripts')
<script src="{{ asset('/webmaster/js/scripts/pages/app-todo.js') }}"></script>
@endsection

@section('content')
<div class="content-area-wrapper">
    <div class="sidebar-left">
        <div class="sidebar">
            <div class="sidebar-content todo-sidebar d-flex">
                <span class="sidebar-close-icon">
                    <i class="feather icon-x"></i>
                </span>
                <div class="todo-app-menu">
                    <div class="form-group text-center add-task">
                        <button type="button" class="btn btn-primary btn-block my-1" data-toggle="modal" data-target="#addTaskModal">Add Task</button>
                    </div>
                    <div class="sidebar-menu-list">
                        <div class="list-group list-group-filters font-medium-1">
                            <a href="#" class="list-group-item list-group-item-action border-0 pt-0 active">
                                <i class="font-medium-5 feather icon-mail mr-50"></i> All
                            </a>
                        </div>
                        <hr>
                        <h5 class="mt-2 mb-1 pt-25">Filters</h5>
                        <div class="list-group list-group-filters font-medium-1">
                            <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-star mr-50"></i> Starred</a>
                            <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-info mr-50"></i> Important</a>
                            <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-check mr-50"></i> Completed</a>
                            <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-trash mr-50"></i> Trashed</a>
                        </div>
                        <hr>
                        <h5 class="mt-2 mb-1 pt-25">Labels</h5>
                        <div class="list-group list-group-labels font-medium-1">
                            <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-primary mr-1"></span> Frontend</a>
                            <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-warning mr-1"></span> Backend</a>
                            <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-success mr-1"></span> Doc</a>
                            <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-danger mr-1"></span> Bug</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                    <div class="modal-content">
                        <section class="todo-form">
                            <form id="form-add-todo" class="todo-input">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="todo-item-action ml-auto">
                                        <a class='todo-item-info'><i class="feather icon-info"></i></a>
                                        <a class='todo-item-favorite'><i class="feather icon-star"></i></a>
                                        <div class="dropdown todo-item-label">
                                            <i class="dropdown-toggle mr-0 mb-1 feather icon-tag" id="todoLabel" data-toggle="dropdown">
                                            </i>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoLabel">
                                                <div class="dropdown-item">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox" data-color="primary" data-value="Frontend">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check mr-0"></i>
                                                            </span>
                                                        </span>
                                                        <span>Frontend</span>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox" data-color="warning" data-value="Backend">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check mr-0"></i>
                                                            </span>
                                                        </span>
                                                        <span>Backend</span>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox" data-color="success" data-value="Doc">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check mr-0"></i>
                                                            </span>
                                                        </span>
                                                        <span>Doc</span>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox" data-color="danger" data-value="Bug">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check mr-0"></i>
                                                            </span>
                                                        </span>
                                                        <span>Bug</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <fieldset class="form-group">
                                        <input type="text" class="new-todo-item-title form-control" placeholder="Title">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <textarea class="new-todo-item-desc form-control" rows="3" placeholder="Add description"></textarea>
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <button type="button" class="btn btn-primary add-todo-item" data-dismiss="modal"><i class="feather icon-check d-block d-lg-none"></i>
                                            <span class="d-none d-lg-block">Add Task</span></button>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
                                            <span class="d-none d-lg-block">Cancel</span></button>
                                    </fieldset>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="content-right">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="app-content-overlay"></div>
                <div class="todo-app-area">
                    <div class="todo-app-list-wrapper">
                        <div class="todo-app-list">
                            <div class="app-fixed-search">
                                <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu"></i></div>
                                <fieldset class="form-group position-relative has-icon-left m-0">
                                    <input type="text" class="form-control" id="todo-search" placeholder="Search..">
                                    <div class="form-control-position">
                                        <i class="feather icon-search"></i>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="todo-task-list list-group">
                                <ul class="todo-task-list-wrapper media-list">
                                    <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                        <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                            <div class="todo-title-area d-flex align-items-center">
                                                <div class="title-wrapper d-flex">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <h6 class="todo-title mt-50 mx-50">Fix Responsiveness 💻</h6>
                                                </div>
                                                <div class="chip-wrapper">
                                                    <div class="chip mb-0">
                                                        <div class="chip-body">
                                                            <span class="chip-text" data-value="Frontend"><span class="bullet bullet-primary bullet-xs"></span> Frontend</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right todo-item-action d-flex">
                                                <a class='todo-item-info'><i class="feather icon-info"></i></a>
                                                <a class='todo-item-favorite'><i class="feather icon-star"></i></a>
                                                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                            </div>
                                        </div>
                                        <p class="todo-desc truncate mb-0">Jelly topping toffee bear claw. Sesame snaps lollipop macaroon croissant cheesecake pastry cupcake.</p>
                                    </li>
                                    <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                        <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                            <div class="todo-title-area d-flex align-items-center">
                                                <div class="title-wrapper d-flex">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <h6 class="todo-title mt-50 mx-50">Meet Jane ❤️</h6>
                                                </div>
                                                <div class="chip-wrapper">
                                                    <div class="chip mb-0">
                                                        <div class="chip-body">
                                                            <span class="chip-text" data-value="Frontend"><span class="bullet bullet-primary bullet-xs"></span> Frontend</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip mb-0">
                                                        <div class="chip-body">
                                                            <span class="chip-text" data-value="Backend"><span class="bullet bullet-warning bullet-xs"></span> Backend</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip mb-0">
                                                        <div class="chip-body">
                                                            <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right todo-item-action d-flex">
                                                <a class='todo-item-info success'><i class="feather icon-info"></i></a>
                                                <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>
                                                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                            </div>
                                        </div>
                                        <p class="todo-desc truncate mb-0">Toffee sugar plum oat cake tiramisu tart bonbon gingerbread cheesecake cake.</p>
                                    </li>
                                    <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                        <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                            <div class="todo-title-area d-flex align-items-center">
                                                <div class="title-wrapper d-flex">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <h6 class="todo-title mt-50 mx-50">Pick up Natasha 😁</h6>
                                                </div>
                                                <div class="chip-wrapper">
                                                </div>
                                            </div>
                                            <div class="float-right todo-item-action d-flex">
                                                <a class='todo-item-info success'><i class="feather icon-info"></i></a>
                                                <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>
                                                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                            </div>
                                        </div>
                                        <p class="todo-desc truncate mb-0">Sweet roll toffee dragée cotton candy jelly beans halvah gingerbread jelly-o. Ice cream bear claw sugar plum powder.</p>
                                    </li>
                                    <li class="todo-item completed" data-toggle="modal" data-target="#editTaskModal">
                                        <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                            <div class="todo-title-area d-flex align-items-center">
                                                <div class="title-wrapper d-flex">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox" checked>
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <h6 class="todo-title mt-50 mx-50">Skype Tommy</h6>
                                                </div>
                                                <div class="chip-wrapper">
                                                    <div class="chip mb-0">
                                                        <div class="chip-body">
                                                            <span class="chip-text" data-value="Bug"><span class="bullet bullet-danger bullet-xs"></span> Bug</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right todo-item-action d-flex">
                                                <a class='todo-item-info'><i class="feather icon-info"></i></a>
                                                <a class='todo-item-favorite'><i class="feather icon-star"></i></a>
                                                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                            </div>
                                        </div>
                                        <p class="todo-desc truncate mb-0">Tart oat cake sesame snaps lollipop croissant cake biscuit.</p>
                                    </li>
                                    <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                        <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                            <div class="todo-title-area d-flex align-items-center">
                                                <div class="title-wrapper d-flex">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <h6 class="todo-title mt-50 mx-50">Send PPT 🎁</h6>
                                                </div>
                                                <div class="chip-wrapper">
                                                    <div class="chip mb-0">
                                                        <div class="chip-body">
                                                            <span class="chip-text" data-value="Backend"><span class="bullet bullet-warning bullet-xs"></span> Backend</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip mb-0">
                                                        <div class="chip-body">
                                                            <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right todo-item-action d-flex">
                                                <a class='todo-item-info success'><i class="feather icon-info"></i></a>
                                                <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>
                                                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                            </div>
                                        </div>
                                        <p class="todo-desc truncate mb-0">Dragée gummi bears tiramisu brownie cookie. Jelly beans pudding marzipan fruitcake muffin. Wafer gummi bears lollipop pudding lollipop biscuit.</p>
                                    </li>
                                    <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                        <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                            <div class="todo-title-area d-flex align-items-center">
                                                <div class="title-wrapper d-flex">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <h6 class="todo-title mt-50 mx-50">Submit Report</h6>
                                                </div>
                                                <div class="chip-wrapper">
                                                    <div class="chip mb-0">
                                                        <div class="chip-body">
                                                            <span class="chip-text" data-value="Frontend"><span class="bullet bullet-primary bullet-xs"></span> Frontend</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip mb-0">
                                                        <div class="chip-body">
                                                            <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right todo-item-action d-flex">
                                                <a class='todo-item-info'><i class="feather icon-info"></i></a>
                                                <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>
                                                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                            </div>
                                        </div>
                                        <p class="todo-desc truncate mb-0">Donut tart toffee cake cookie gingerbread. Sesame snaps brownie sugar plum candy canes muffin cotton candy.</p>
                                    </li>
                                    <li class="todo-item" data-toggle="modal" data-target="#editTaskModal">
                                        <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                            <div class="todo-title-area d-flex align-items-center">
                                                <div class="title-wrapper d-flex">
                                                    <div class="vs-checkbox-con">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox vs-checkbox-sm">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <h6 class="todo-title mt-50 mx-50">Refactor Code</h6>
                                                </div>
                                                <div class="chip-wrapper">
                                                    <div class="chip mb-0">
                                                        <div class="chip-body">
                                                            <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> Doc</span>
                                                        </div>
                                                    </div>
                                                    <div class="chip mb-0">
                                                        <div class="chip-body">
                                                            <span class="chip-text" data-value="Backend"><span class="bullet bullet-warning bullet-xs"></span> Backend</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right todo-item-action d-flex">
                                                <a class='todo-item-info success'><i class="feather icon-info"></i></a>
                                                <a class='todo-item-favorite warning'><i class="feather icon-star"></i></a>
                                                <a class='todo-item-delete'><i class="feather icon-trash"></i></a>
                                            </div>
                                        </div>
                                        <p class="todo-desc truncate mb-0">Pie liquorice wafer cotton candy danish. Icing topping jelly-o halvah pastry lollipop.</p>
                                    </li>
                                </ul>
                                <div class="no-results">
                                    <h5>No Items Found</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="editTodoTask" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                        <div class="modal-content">
                            <section class="todo-form">
                                <form id="form-edit-todo" class="todo-input">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editTodoTask">Edit Task</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="todo-item-action ml-auto">
                                            <a class='edit-todo-item-info todo-item-info'><i class="feather icon-info"></i></a>
                                            <a class='edit-todo-item-favorite todo-item-favorite'><i class="feather icon-star"></i></a>
                                            <div class="dropdown todo-item-label">
                                                <i class="dropdown-toggle mr-0 mb-1 feather icon-tag" id="todoEditLabel" data-toggle="dropdown">
                                                </i>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoEditLabel">
                                                    <div class="dropdown-item">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox" data-color="primary" data-value="Frontend">
                                                            <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check mr-0"></i>
                                                                </span>
                                                            </span>
                                                            <span>Frontend</span>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox" data-color="warning" data-value="Backend">
                                                            <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check mr-0"></i>
                                                                </span>
                                                            </span>
                                                            <span>Backend</span>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox" data-color="success" data-value="Doc">
                                                            <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check mr-0"></i>
                                                                </span>
                                                            </span>
                                                            <span>Doc</span>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="vs-checkbox-con">
                                                            <input type="checkbox" data-color="danger" data-value="Bug">
                                                            <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check mr-0"></i>
                                                                </span>
                                                            </span>
                                                            <span>Bug</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <input type="text" class="edit-todo-item-title form-control" placeholder="Title">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <textarea class="edit-todo-item-desc form-control" rows="3" placeholder="Add description"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <button type="button" class="btn btn-primary update-todo-item" data-dismiss="modal"><i class="feather icon-edit d-block d-lg-none"></i>
                                                <span class="d-none d-lg-block">Update</span></button>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <button type="button" class="btn" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
                                                <span class="d-none d-lg-block">Cancel</span></button>
                                        </fieldset>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
