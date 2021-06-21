@extends('layout')
@section('content')
<!-- MENU PRINCIPAL -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-closed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <li class="nav-item">
                <a href="{{route('clients')}}" class="nav-link ">
                    <span class="title">Clientes</span>
                    <!--<span class="badge badge-default"> 4 </span>-->
                    <span class="arrow"></span>
                </a>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- FIM MENU PRINCIPAL -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a>Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="{{route('clients')}}">Clientes</a>
                </li>
            </ul>
        </div>
        <!-- CONTEUDO -->
        <h1 class="page-title"></h1>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <span class="caption-subject bold uppercase"> CLIENTES</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a class="btn sbold blue" data-toggle="modal" onclick="cliAddModal()"><i class="fa fa-plus"></i> Novo Cliente</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong><i class="fa fa-check"></i></strong>
                                {{session('message')}}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong><i class="fa fa-remove"></i></strong>
                                {{session('message')}}
                            </div>
                        @endif
                        <!-- MODAL FIM CONFIRM EXCLUIR CLIENTE -->
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="clients">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Dt. Nascimento</th>
                                    <th>Sexo</th>
                                    <th>Cep</th>
                                    <th class="none">Endereço</th>
                                    <th class="none">Bairro</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td class="">{{$client->name}}</td>
                                        <td>{{date('d/m/Y', strtotime($client->birth_date))}}</td>
                                        <td>{{$client->sex == 'M' ? 'Masculino' : 'Feminino'}}</td>
                                        <td>{{$client->zip_code}}</td>
                                        <td class="none">
                                            {{$client->address}} {{$client->address_number}}{{$client->address_complement != "" ? ', '.$client->address_complement : ''}}
                                        </td>
                                        <td class="none">{{$client->district}}</td>
                                        <td>{{$client->city}}</td>
                                        <td>{{$client->state}}</td>
                                        <td>
                                            <a onclick="cliEditModal({{$client->id}})" class="btn blue btn-outline btn-sm" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false">
                                                <i class="icon-pencil"></i> Editar
                                            </a>
                                            <a onclick="cliDeleteModal({{$client->id}})" class="btn red btn-outline btn-sm" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false">
                                                <i class="icon-trash"></i> Excluir
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>                                
        <!-- FIM CONTEUDO -->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection