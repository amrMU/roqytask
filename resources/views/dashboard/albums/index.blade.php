@extends('dashboard.layouts.main')
@section('content')

<!-- Main content -->
<div class="content-wrapper">
            <!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">@lang('home.home')</span> - @lang('home.album')</h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
            </div>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="{{URL::to('ar/admin/home')}}"><i class="icon-home2 position-left"></i> @lang('home.home')</a></li>
            <li class="active">@lang('home.album')</li>
        </ul>

        <ul class="breadcrumb-elements">
            <!-- <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li> -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-gear position-left"></i>
                    @lang('home.settings')
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="{{ URL::to('ar/admin/setting') }}"><i class="icon-gear"></i>@lang('home.general_settings')</a></li>
                </ul>
            </li>
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
                    <th class="col-md-2">@lang('home.title')</th>
                    <th class="col-md-2">@lang('home.content')</th>
                    <th class="col-md-2">@lang('home.image')</th>
                    <th class="col-md-2">@lang('home.delete')</th>
                    
                </tr>
                </thead>
                <tbody>
                @foreach($albums as $album)
                <tr>
                    <td><span class="text-semibold">{{ @$album->id }}</span></td>
                    <td><span class="text-semibold">{{ @$album->name}}</span></td>
                    <td title="{{ @$album->content }}"><span class="text-muted">{{ @substr($album->content,0,51).'...' }}</span></td>
                    <td>
                        <a href="{{ @url('uploads/albums/500x500/'.$album->images->first()->image) }}" target="_blank">
                            <img src="{{ @url('uploads/albums/50x50/'.$album->images->first()->image) }}">
                        </a>
                    </td>
                    
                    <td>
                    @include('dashboard.albums.delete_from_list')
                    </td> 
                </tr>
                @endforeach
                </tbody>
            </table>
            <div style="padding:0 22%; margin-bottom: 24px;" class="center-block">
            {{@$albums->links()}}
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