<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                    <i class="mdi mdi-message-text font-size-22"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                    <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                    <i class="mdi mdi-settings font-size-22"></i>
                </a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content text-muted">
            <div class="tab-pane active" id="chat-tab" role="tabpanel">

                <form class="search-bar py-4 px-3">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="mdi mdi-magnify"></span>
                    </div>
                </form>

                <h6 class="px-4 py-3 mt-2 bg-light">Group Chats</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                        <span class="mb-0 mt-1">App Development</span>
                    </a>

                </div>

                <h6 class="px-4 py-3 mt-4 bg-light">Favourites</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="{{asset('/images/admin/users/avatar-10.jpg')}}" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Andrew Mackie</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <h6 class="px-4 py-3 mt-4 bg-light">Other Chats</h6>

                <div class="p-2 pb-4">
                    <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="media">
                            <div class="position-relative align-self-center mr-3">
                                <img src="{{asset('/images/admin/users/avatar-10.jpg')}}" class="rounded-circle avatar-xs" alt="user-pic">
                                <i class="mdi mdi-circle user-status online"></i>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h6 class="mt-0 mb-1">Andrew Mackie</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="tab-pane" id="tasks-tab" role="tabpanel">
                <h6 class="p-3 mb-0 mt-4 bg-light">Working Tasks</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                        <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>

                </div>

                <h6 class="p-3 mb-0 mt-4 bg-light">Upcoming Tasks</h6>

                <div class="p-2">
                    <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                        <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a>
                </div>

                <div class="p-3 mt-2">
                    <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">Create Task</a>
                </div>

            </div>
            <div class="tab-pane" id="settings-tab" role="tabpanel">
                <h6 class="px-4 py-3 bg-light">General Settings</h6>

                <div class="p-4">
                    <h6 class="mt-4">Directionality</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check3" name="settings-check3">
                        <label class="custom-control-label font-weight-normal" for="settings-check3">RTL</label>
                    </div>

                    <h6 class="font-weight-medium">Online Status</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check1" name="settings-check1" checked="">
                        <label class="custom-control-label font-weight-normal" for="settings-check1">Show your status to all</label>
                    </div>

                    <h6 class="mt-4">Auto Updates</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check2" name="settings-check2" checked="">
                        <label class="custom-control-label font-weight-normal" for="settings-check2">Keep up to date</label>
                    </div>

                    <h6 class="mt-4">Backup Setup</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check3" name="settings-check3">
                        <label class="custom-control-label font-weight-normal" for="settings-check3">Auto backup</label>
                    </div>

                </div>

                <h6 class="px-4 py-3 mt-2 bg-light">Advanced Settings</h6>

                <div class="p-4">
                    <h6 class="font-weight-medium">Application Alerts</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check4" name="settings-check4" checked="">
                        <label class="custom-control-label font-weight-normal" for="settings-check4">Email Notifications</label>
                    </div>

                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check5" name="settings-check5">
                        <label class="custom-control-label font-weight-normal" for="settings-check5">SMS Notifications</label>
                    </div>

                    <h6 class="mt-4">API</h6>
                    <div class="custom-control custom-switch mb-1">
                        <input type="checkbox" class="custom-control-input" id="settings-check6" name="settings-check6">
                        <label class="custom-control-label font-weight-normal" for="settings-check6">Enable access</label>
                    </div>

                </div>
            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->
