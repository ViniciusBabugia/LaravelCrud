<!DOCTYPE html>
<html lang="pt-br">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <title>CRMALL</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for closed sidebar option" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('css/global/css/components-rounded.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('css/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('css/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('css/global/plugins/bootstrap-toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('css/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('css/global/plugins/icheck/skins/all.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!--BEGIN PAGE LEVEL PLUGINS--> 
        <link href="{{asset('css/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS --> 

        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('css/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("css/layout/css/themes/light2.css")}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('css/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/layout/css/common.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        
        <link type="image/png" rel="shortcut icon" href="{{asset('images/favico.png')}}">

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('css/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/global/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet')}}" type="text/css" />
        <link href="{{asset('css/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/global/plugins/clockface/css/clockface.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-full-width">
        <div class="page-wrapper">
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a>
                            <img src="{{asset('images/logo.png')}}" alt="logo" class="logo-default" width="120" style="margin-top: 10px;" />
                        </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN MEGA MENU -->
                    <!-- DOC: Remove "hor-menu-light" class to have a horizontal menu with theme background instead of white background -->
                    <!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) in the responsive menu below along with sidebar menu. So the horizontal menu has 2 seperate versions -->
                    <div class="hor-menu   hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li class="classic-menu-dropdown" aria-haspopup="true">
                                <a href="{{route('clients')}}"> Clientes</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MEGA MENU -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile">Vinícius Babugia</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a>
                                            <i class="icon-user"></i> Meus Dados
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i class="icon-logout"></i> Sair
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a class="dropdown-toggle" alt="Sair">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- FIM TOPO -->
            <div class="clearfix"> </div>
            <!-- CONTEUDO -->
            <div class="page-container">
               @yield('content')
            </div>
            <!-- FIM CONTEUDO -->
            <!-- RODAPE -->
            <div class="page-footer">
                <div class="page-footer-inner"> 
                    © CRMALL - 2021 - Todos os Direitos Reservados.
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- FIM RODAPE -->
            @extends('clients_form')
            @extends('clients_delete')
        </div>
        <!-- LINKS JS -->
        <script src="{{asset('js/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        
        
        <script src="{{asset('js/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/scripts/components-date-time-pickers.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/scripts/clients.js')}}" type="text/javascript"></script>
        
        <script src="{{asset('js/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/layout/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/layout/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
        
        <script src="{{asset('js/global/scripts/datatable.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/scripts/table-datatables-responsive.min.js')}}" type="text/javascript"></script>
        
        <script src="{{asset('js/global/scripts/form-input-mask.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/scripts/jquery.price_format.1.8.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/jquery.input-ip-address-control-1.0.min.js')}}" type="text/javascript"></script>
        
        <script src="{{asset('js/global/plugins/bootbox/bootbox.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/icheck/icheck.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/global/plugins/bootstrap-toastr/toastr.min.js')}}" type="text/javascript"></script>
        
        <!--<script src="assets/pages/scripts/form-validation.min.js" type="text/javascript"></script>-->
        <!-- FIM LINKS JS -->
    </body>
</html>

        