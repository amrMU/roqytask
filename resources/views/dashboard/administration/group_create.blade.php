@extends('dashboard.layouts.main')
@section('content')
<div class="content-wrapper">
                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{__('home.permissions_groups')}} </span> - {{__('home.add_new_permissions_groups')}}</h4>
                        </div>
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> {{__('home.home')}}</a></li>
                            <li><a href="{{URL::to('/')}}/dashboard/permissions_groups">{{__('home.permissions_groups')}}</a></li>
                            <li class="active">{{__('home.add_new_permissions_groups')}}</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <!-- Content area -->
                <div class="content">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                      @endif
                      @if(Session::has('success'))
                      <div class="alert alert-success">{{Session::get('success')}}</div>
                      @endif       
           <form action="{{ route('permissions_groups_store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            @csrf 
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"> {{ trans('home.add_new_permissions_groups') }} </h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">

                    <div class="form-group">
                        <label class="col-lg-3 control-label"> {{ trans('home.name') }} </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" placeholder="{{ trans('home.name') }}" required>
                        </div>
                    </div>

                  



                    <div class="form-group">
                        <label class="col-lg-3 control-label"> {{ trans('home.desc') }} </label>
                        <div class="col-lg-9">
                            <textarea class="form-control" name="short_desc_ar" placeholder="{{ trans('home.desc') }}"></textarea>
                        </div>
                    </div>

    
                
                                                 <!-- ============ Amr Mahanna =============== -->

                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title"> {{ trans('home.all_permitions') }} </h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="row">
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label class="control-label col-lg-3"> {{ trans('home.all_permitions') }} </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery switchery-xs">
                                            <label>
                                                <input type="checkbox" name="perms[]" class="switchery" value="*" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            


                        </div>

                    </div>
                </div>
                
       
                
                <!-- ============ Amr Mahanna =============== -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title"> {{ trans('home.permissions_groups') }} </h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="row">
                           
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-lg-3"> {{ trans('home.administration') }} </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery switchery-xs">
                                            <label>
                                                <input type="checkbox" name="perms[]" class="switchery" value="permissions_groups" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-lg-3"> {{ trans('home.create') }} </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery switchery-xs">
                                            <label>
                                                <input type="checkbox" name="perms[]" class="switchery" value="permissions_groups_create" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-lg-3"> {{ trans('home.edit') }} </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery switchery-xs">
                                            <label>
                                                <input type="checkbox" name="perms[]" class="switchery" value="permissions_groups_edit" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-lg-3"> {{ trans('home.delete') }} </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery switchery-xs">
                                            <label>
                                                <input type="checkbox" name="perms[]" class="switchery" value="permissions_groups_delete" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                
                

                
                {{-- users group --}}
                  <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title"> {{ trans('home.users') }} </h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-lg-3"> {{ trans('home.users') }} </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery switchery-xs">
                                            <label>
                                                <input type="checkbox" name="perms[]" class="switchery" value="permissions_user_list" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-lg-3"> {{ trans('home.create') }} </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery switchery-xs">
                                            <label>
                                                <input type="checkbox" name="perms[]" class="switchery" value="permissions_create_user" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-lg-3"> {{ trans('home.edit') }} </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery switchery-xs">
                                            <label>
                                                <input type="checkbox" name="perms[]" class="switchery" value="permissions_edit_user" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-lg-3"> {{ trans('home.delete') }} </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery switchery-xs">
                                            <label>
                                                <input type="checkbox" name="perms[]" class="switchery" value="permissions_delete_user" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                {{-- users group --}}

 {{-- album group --}}
                  <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title"> {{ trans('home.album') }} </h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-lg-3"> {{ trans('home.album') }} </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery switchery-xs">
                                            <label>
                                                <input type="checkbox" name="perms[]" class="switchery" value="albums_list" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                           
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="control-label col-lg-3"> {{ trans('home.delete') }} </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-switchery switchery-xs">
                                            <label>
                                                <input type="checkbox" name="perms[]" class="switchery" value="permissions_delete_user" >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                {{-- album group --}}

              




                    <div class="text-center">

                     <input type="submit" class="btn btn-success" name="back" value=" {{ trans('home.save') }} " />
                    </div>
                </div>
            </div>
        </form>
        <!-- /basic layout -->

    </div>

</div>


@endsection
