@extends('dashboard.layouts.main')
@section('content')
        <!-- Main content -->
        <div class="content-wrapper">
                        <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">@lang('home.update_info')</span> - @lang('home.dashboard')</h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                         </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('ar/admin/home') }}"><i class="icon-home2 position-left"></i> @lang('home.home')</a></li>
                        <li class="active">@lang('home.update_info')</li>
                    </ul>

                    <ul class="breadcrumb-elements">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear position-left"></i>
                                @lang('home.settings')
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                              
                              <li><a href="{{ URL::to('ar/admin/setting') }}"><i class="icon-gear"></i>@lang('home.settings')</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /page header -->

             <!-- Content area -->
            <div class="content">
                <!-- Form validation -->
                    <div class="panel panel-flat col-md-10">
                        <div class="panel-heading">
                            <h5 class="panel-title">@lang('home.update_info')</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal form-validate-jquery" method="post" action="{{ route('permissions_edit_user',$info) }}" enctype='multipart/form-data'  >
                            <input name="_method" type="hidden" value="PUT">
                            <input name="use" type="hidden" value="{{@$info->id}}">

                                @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $error }}
                                </div>
                                @endforeach
                                @endif
                                @if(Session::has('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ Session::get('success') }}
                                </div>
                                @endif
                                @csrf
                                {{-- general Info --}}
                                <fieldset class="content-group">
                                    <legend class="text-bold">@lang('home.add_new_user')</legend>

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.name') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="name" class="form-control" placeholder="@lang('home.name')" value="{{@$info->name}}">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->

                                   

                                 <!-- content ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.email') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <textarea name="email" class="form-control"  placeholder="@lang('home.email')">{{ @$info->email}}</textarea>
                                        </div>
                                    </div>
                                    <!-- /content ar input -->
                                    <!-- content en input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.administration_group') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9"> 
                                        <select name="administration_group_id" class="form-control">
                                            <option value="null">@lang('home.select_one')</option>
                                               @foreach($adminstration_groups as $group)
                                                    <option value="{{@$group->id}}" @if($info->administration_group_id == $group->id) {{'selected'}} @endif>{{@$group->name}}</option>
                                                @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <!-- /content en input -->                                    
                                   <!-- content en input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.type_user') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9"> 
                                        <select name="type_user" class="form-control" >
                                            <option value="null">@lang('home.select_one')</option>
                                            <option value="user" @if($info->type_user == 'user') selected @endif>users</option>
                                            <option value="admin" @if($info->type_user == 'admin') selected @endif>admin</option>
                                               
                                        </select>
                                        </div>
                                    </div>
                                    <!-- /content en input -->                                    
                                  
                                    <!-- password input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.password')<span class="text-danger" title="@lang('home.required')">*</span> </label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                            @if(LaravelLocalization::getCurrentLocale() == 'en')
                                            <input type="text" class="form-control" name="password" placeholder="@lang('home.password')" id="input_password"  autocomplete="off">
                                            	<span class="input-group-btn">
													<button class="btn btn-default legitRipple" type="button" id="generate_password">
                                                    @lang('home.generate') 
                                                    <li class="glyphicon glyphicon-eye-open"></li>
                                                    </button>
												</span>
                                            @else
                                            <span class="input-group-btn">
													<button class="btn btn-default legitRipple" type="button" id="generate_password">
                                                    @lang('home.generate') 
                                                    <li class="glyphicon glyphicon-eye-open"></li>
                                                    </button>
												</span>
                                                <input type="text" class="form-control" name="password" placeholder="@lang('home.password')" id="input_password"  autocomplete="off">
                                            @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.password_confirmation') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="password" name="password_confirmation" class="form-control"  id="input_password_confirm">
                                        </div>
                                    </div>

                                    <!--/password input -->
                                    <!-- Logo uploader -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.avatar') <span class="text-danger" title="@lang('home.required')"> *</span></label>
                                        <div class="col-lg-9">
                                            <input type="file" name="image" class="file-styled" >
                                        </div>
                                    </div>
                                    <!-- /Logo uploader -->
                                 
                                </fieldset>
                                {{-- general Info --}}
                              
                           
                                <div class="text-right">
                                    <button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                                    <button type="submit" class="btn btn-primary">save <i class="icon-arrow-left13 position-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form validation -->
                    <div class="col-md-2">
                    <img src="{{asset('/').@$info->image}}" class="img-responsive" style="max-width:100%" >
                    </div>
                  
            </div>
             <!-- Content area -->

        </div>
        <!-- Main content -->
@stop

@section('jsCode')
    <script>
    $('#generate_password').click(function(){
        var randomstring = Math.random().toString(36).slice(-8);
        $('#input_password').val(randomstring);input_password_confirm
        $('#input_password_confirm').val(randomstring);


    });
    </script>
@stop
