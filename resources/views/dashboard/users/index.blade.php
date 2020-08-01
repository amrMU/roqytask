@extends('dashboard.layouts.main')
@section('content')

<!-- Main content -->
<div class="content-wrapper">
            <!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">@lang('home.home')</span> - @lang('home.wating_lists')</h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
            </div>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="{{URL::to('ar/admin/home')}}"><i class="icon-home2 position-left"></i> @lang('home.home')</a></li>
            <li class="active">@lang('home.users')</li>
        </ul>

       
    </div>
</div>
<!-- /page header -->

    <!-- Content area -->
<div class="content">
        <!-- Main charts -->
        <div class="row">
        <div class="panel panel-flat ">
        <!-- table lists -->
     {{--    @include('dashboard.users.search_form') --}}
        <div class="table-responsive">
        @if(Session('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>@lang('home.success')!</strong> {{session('success')}}.
        </div>
        @endif
            <table class="table text-nowrap table datatable-basic" id="table">
                <thead>                  
                <tr>                                     
                    <th class="col-md-2">#</th>
                    <th class="col-md-2">@lang('home.name')</th>
                    <th class="col-md-2">@lang('home.email')</th>
                    <th class="col-md-2">@lang('home.type')</th>
                    <th class="col-md-2">@lang('home.edit')</th>
                    <th class="col-md-2">@lang('home.delete')</th>
                    
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td><span class="text-semibold">{{ @$user->id }}</span></td>
                    <td><span class="text-semibold">{{ @$user->name}}</span></td>
                    <td><span class="text-muted">{{ @$user->email }}</span></td>
                    <td><h6 class="text-semibold">{{ @$user->type_user }}</h6></td>
                    <td>
                    <a href="{{URL::to('ar/admin/users/').'/'.$user->id.'/edit'}}" class="btn btn-warning "> 
                    <li class="icon-pencil5"></li>
                    </a>
                    </td>
                    <td>
                    @include('dashboard.users.delete_from_list')
                    </td> 
                </tr>
                @endforeach
                </tbody>
            </table>
            <div style="padding:0 22%; margin-bottom: 24px;" class="center-block">
            {{@$users->links()}}
            </div>

        </div>
        <!-- table reports -->
    </div>
</div>

</div>
    <!-- Content area -->

</div>
<!-- Main content -->
@stop