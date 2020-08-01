@extends('dashboard.layout')



@section('script')

    <!-- Theme JS files -->

    <script type="text/javascript" src="{{ url('public/dashboard_assets') }}/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="{{ url('public/dashboard_assets') }}/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="{{ url('public/dashboard_assets') }}/js/core/app.js"></script>

	<script type="text/javascript" src="{{ url('public/dashboard_assets') }}/js/pages/form_layouts.js"></script>

	<script type="text/javascript" src="{{ url('public/dashboard_assets') }}/js/pages/form_select2.js"></script>

    <script type="text/javascript" src="{{ url('public/dashboard_assets') }}/js/plugins/ui/ripple.min.js"></script>



    <!-- /theme JS files -->



@endsection



@section('content')



<div class="row">

    <div class="col-md-12">



        <!-- Basic layout-->

        <form action="{{ route('admin_update') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

            {{ Form::token() }}

            <input type="hidden" name="admin_id" value="{{ $admin->id }}" />

            <div class="panel panel-flat">

                <div class="panel-heading">

                    <h5 class="panel-title"> {{ trans('dash.edit_admin') }} </h5>

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
                                    <option value="nurse" @if($admin->type == 'nurse') selected @endif>تمريض</option>
                                    <option value="doctor" @if($admin->type == 'doctor') selected @endif>دكتور</option>
                                    <option value="helthy_educator" @if($admin->type == 'helthy_educator') selected  @endif>خصائي تثقيف</option>
                                   
                                    <option value="coordinator" @if($admin->type == 'coordinator') selected  @endif>منسق</option>

                                    <option value="admin" @if($admin->type == 'admin') selected @endif>لحة تحكم / ادمن</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group group">

                        <label class="col-lg-3 control-label display-block"> {{ trans('dash.group') }} </label>

                        <div class="col-lg-9">

                            <select name="administration_group_id" class="select-border-color border-warning" required>

                                <optgroup label="{{ trans('dash.choose_administration_group') }}">
                                 <option value=""> غير معروف </option>
                                @foreach ($administration_groups as $group)
                                    <option value="{{ $group->id }}" @if($group->id == $admin->administration_group_id) selected @endif> {{ $group->name_ar.' - '.$group->name_en }} </option>

                                @endforeach

                            </select>

                        </div>

                    </div>



                    <div class="form-group ">

                        <label class="col-lg-3 control-label">{{ trans('dash.name') }}</label>

                        <div class="col-lg-9">

                            <input type="text" class="form-control" name="name" value="{{ $admin->name }}" placeholder="{{ trans('dash.name') }}" required>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-lg-3 control-label">{{ trans('dash.email') }}</label>

                        <div class="col-lg-9">

                            <input type="email" name="email" class="form-control" value="{{ $admin->email }}" placeholder="{{ trans('dash.email') }}" required >

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-lg-3 control-label">{{ trans('dash.mobile') }}</label>

                        <div class="col-lg-9">

                            <input type="text" name="mobile" value="{{ $admin->mobile }}" class="form-control" placeholder="{{ trans('dash.mobile') }}" >

                        </div>

                    </div>







                    <div class="form-group">

                        <label class="col-lg-3 control-label display-block"> {{ trans('dash.city') }} </label>

                        <div class="col-lg-9">

                            <select name="country_id" class="select-border-color border-warning" >

                            @foreach($countries as $country)

                            <option value="{{ $country->id }}" @if($admin->country_id == $country->id) selected @endif> {{ $country->name}}</option>

                            @endforeach

                        </select>

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-lg-3 control-label"> {{ trans('dash.password') }} </label>

                        <div class="col-lg-9">

                            <input type="password" class="form-control" name="password" placeholder=" {{ trans('dash.password') }} "  />

                        </div>

                    </div>



                    <div class="form-group">

                        <label class="col-lg-3 control-label"> {{ trans('dash.confirm_password') }} </label>

                        <div class="col-lg-9">

                            <input type="password" class="form-control" name="confirm_password" placeholder=" {{ trans('dash.confirm_password') }} "  />

                        </div>

                    </div>





                    <div class="text-right">

                  

                    <input type="submit" class="btn btn-success"  value=" {{ trans('dash.save') }} " />

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
    @if($admin->type == 'admin')
      $('.group').show();
    @else 
      $('.group').hide();
    @endif

    $('.type_user').on('click',function () {
       var type_user = $(this).val(); 
       if (type_user == 'admin') {
        $('.group').show();
       }else{
        $('.group').hide();

       }

    });
</script>
@stop