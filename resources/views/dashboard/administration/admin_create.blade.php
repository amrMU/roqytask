@extends('dashboard.layout')

@section('content')

<div class="content-wrapper">
                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{__('dash.users')}} </span> - {{__('dash.add_new_user')}}</h4>
                        </div>
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> {{__('dash.home')}}</a></li>
                            <li><a href="{{URL::to('/')}}/dashboard/admin">{{__('dash.users')}}</a></li>
                            <li class="active">{{__('dash.add_new_user')}}</li>
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
        <form action="{{ route('admin_store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

            {{ @csrf }}

            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"> {{ trans('dash.add_new_user') }} </h5>
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
                        <label class="col-lg-3 control-label display-block"> {{ trans('dash.type_user') }} </label>
                        <div class="col-lg-9">
                            <select name="type" class="type_user select-border-color border-warning" required>
                                <optgroup label="{{ trans('dash.choose_type_user') }}">
                                    <option value="nurse">تمريض</option>
                                    <option value="doctor">دكتور</option>
                                    <option value="helthy_educator">اخصائي تثقيف</option>
                                    <option value="coordinator">منسق</option>
                                    <option value="admin">لحة تحكم / ادمن</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group group">
                        <label class="col-lg-3 control-label display-block"> {{ trans('dash.group') }} </label>
                        <div class="col-lg-9">
                            <select name="administration_group_id" class="select-border-color border-warning" required>
                                <optgroup label="{{ trans('dash.choose_administration_group') }}">
                                 <option value=""> غير معروف </option>
                                @foreach ($permissions_groups as $group)
                                    <option value="{{ $group->id }}"> {{ $group->name_ar.' - '.$group->name_en }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                    <div class="form-group">

                        <label class="col-lg-3 control-label">{{ trans('dash.name') }}</label>

                        <div class="col-lg-9">

                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ trans('dash.name') }}" required>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-lg-3 control-label">{{ trans('dash.email') }}</label>

                        <div class="col-lg-9">

                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="{{ trans('dash.email') }}" required >

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-lg-3 control-label">{{ trans('dash.mobile') }}</label>

                        <div class="col-lg-9">

                            <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control" placeholder="{{ trans('dash.mobile') }}" >

                        </div>

                    </div>





                    <div class="form-group">

                        <label class="col-lg-3 control-label"> {{ trans('dash.image') }}</label>

                        <div class="col-lg-9">

                            <input type="file" class="file-styled" name="image">

                            <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>

                        </div>

                    </div>

<!-- 

                    <div class="form-group">

                        <label class="col-lg-3 control-label display-block"> {{ trans('dash.city') }} </label>

                        <div class="col-lg-9">

                            <select name="country_id" class="select-border-color border-warning" >

                            @foreach($countries as $country)

                          <option value="{{ $country->id }}"> {{$country->name }} </option>

                                @endforeach

                            </optgroup>

                        </select>

                        </div>

                    </div> -->



                    <div class="form-group">

                        <label class="col-lg-3 control-label"> {{ trans('dash.password') }} </label>

                        <div class="col-lg-9">

                            <input type="password" class="form-control" name="password" placeholder=" {{ trans('dash.password') }} " required />

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-lg-3 control-label"> {{ trans('dash.confirm_password') }} </label>

                        <div class="col-lg-9">

                            <input type="password" class="form-control" name="confirm_password" placeholder=" {{ trans('dash.confirm_password') }} " required />

                        </div>

                    </div>







                    <div class="text-right">

                        <input type="submit" class="btn btn-primary" value=" {{ trans('dash.save') }} " />

                        

                    </div>

                </div>

            </div>

        </form>

        <!-- /basic layout -->
    </div>
    </div>

</div>
@stop
@section('jsContent')

<script type="text/javascript">
        $('.group').hide();
    $('.type_user').on('click',function () {
       var type_user = $(this).val(); 
       if (type_user == 'admin') {
        $('.group').show();
       }else{
        $('.group').hide();

       }
       console.log(type_user);
    });
</script>
@stop