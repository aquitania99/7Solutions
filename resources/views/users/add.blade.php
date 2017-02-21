@extends('layouts.app-dashboard')

@section('title', 'Add User')

@section('headerCSS')
    <link href="{{asset('assets/css/extras/animate.min.css')}}" rel="stylesheet" type="text/css">
    @endsection
@section('content-row')
    <!-- Highlighted tabs -->
    <div>
        <div class="panel panel-flat">
            <div class="panel-heading"></div>

            <div class="panel-body">
                <div class="tabbable">
                    <ul class="nav nav-tabs nav-tabs-highlight nav-justified">
                        <li class="active"><a href="#highlighted-tab1" data-toggle="tab">User Data</a></li>
                        <li><a href="#highlighted-tab2" data-toggle="tab">Orders</a></li>
                        <li><a href="#highlighted-tab3" data-toggle="tab">Documents</a></li>
                        <li><a href="#highlighted-tab4" data-toggle="tab">Help</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="highlighted-tab1">
                            @include('components.add-user-form')
                        </div>

                        <div class="tab-pane" id="highlighted-tab2">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
                        </div>

                        <div class="tab-pane" id="highlighted-tab3">
                            DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
                        </div>

                        <div class="tab-pane" id="highlighted-tab4">
                            Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /highlighted tabs -->
    @endsection
@section('extraJs')
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery_ui/core.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/wizards/form_wizard/form.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/wizards/form_wizard/form_wizard.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/core/libraries/jasny_bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/validation/validate.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/plugins/notifications/jgrowl.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/anytime.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/pickdate/picker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/pickdate/picker.date.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/pickdate/picker.time.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/pickdate/legacy.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/pages/wizard_form.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/form_checkboxes_radios.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/pickers/pickadate/picker.date.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/picker_date.js')}}"></script> 
    @parent
    <script type="text/javascript" src="{{asset('assets/js/pages/picker_date.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/components_navs.js')}}"></script> 
    <!-- /theme JS files -->

@endsection