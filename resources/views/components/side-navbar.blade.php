<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{asset('images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        {{--<span class="media-heading text-semibold">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>--}}
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Sydney, NSW
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="active"><a href="{{'/dashboard'}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <li>
                        <a href="#"><i class="fa fa-user-plus"></i> <span>Customers</span></a>
                        <ul>
                            <li><a href="{{'/user'}}">Show All</a></li>
                            <li><a href="{{'/student/add'}}">Add New</a></li>
                            <li><a href="{{'/student/search'}}">Search</a></li>
                            {{--<li><a href="#">Update</a></li>--}}
                            <li class="navigation-divider"></li>
                            <li><a href="boxed_default.html">Quotations</a></li>
                            <li><a href="{{'/student/documents'}}">Documents</a> </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bullhorn"></i> <span>Expiring Visas</span></a>
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> <span>Search and Email</span></a></li>
                        </ul>
                    </li>
                    <!-- /main -->

                    <!-- Forms -->
                    <li class="navigation-header"><span>Courses and Diplomas</span> <i class="icon-menu" title="Forms"></i></li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-search"></i> <span>Search By User</span></a>
                        <ul>
                            <li><a href="wizard_steps.html"><i class="icon-pencil3"></i> <span>Add English Course</span></a></li>
                            <li><a href="#"><i class="fa fa-mortar-board"></i> <span>Add Diploma</span></a></li>
                        </ul>
                    </li>
                    <!-- /forms -->

                    <!-- Appearance -->
                    <li class="navigation-header"><span>Administration</span> <i class="icon-menu" title="Administration"></i></li>
                    <li>
                        <a href="#"><i class="icon-grid"></i> <span>Client Payment Receipts</span></a>
                        <ul>
                            <li><a href="components_modals.html">Search</a></li>
                            <li><a href="components_dropdowns.html">Re-issue</a></li>
                            <li><a href="components_tabs.html">Create</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-cash3"></i> <span>Invoicing</span></a>
                        <ul>
                            <li><a href="{{'/invoices'}}">Invoice dashboard</a></li>
                            <li><a href="components_modals.html">Search invoice</a></li>
                            <li><a href="components_dropdowns.html">Re-issue invoice</a></li>
                            <li><a href="components_tabs.html">Create new invoice</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-gift"></i> <span>Extra components</span></a>
                        <ul>
                            <li>
                                <a href="#"><i class="icon-people"></i> <span>Manage Counsellors</span></a>
                                <ul>
                                    <li><a href="{{'/register-counsellor'}}">Create</a></li>
                                    <li><a href="extra_sliders_noui.html">Update</a></li>
                                    <li><a href="extra_sliders_noui.html">Remove</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="extra_sliders_ion.html">Education Providers</a>
                                <ul>
                                    <li><a href="extra_sliders_noui.html">Add College/School</a></li>
                                    <li><a href="extra_sliders_noui.html">Update</a></li>
                                    <li><a href="extra_sliders_noui.html">Remove</a></li>
                                </ul>
                            </li>
                            <li><a href="extra_sliders_noui.html">Download Clients DB to Excel</a></li>
                            <li><a href="extra_sliders_noui.html">Upload Clients lists .csv File</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->