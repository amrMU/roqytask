@extends('dashboard.layouts.main')
@section('jsCode')
    <script type="text/javascript" src="{{ url('public/dashboard_assets') }}/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="{{ url('public/dashboard_assets') }}/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{ url('public/dashboard_assets') }}/js/core/app.js"></script>
	<script type="text/javascript" src="{{ url('public/dashboard_assets') }}/js/pages/datatables_advanced.js"></script>
	<script type="text/javascript" src="{{ url('public/dashboard_assets') }}/js/plugins/ui/ripple.min.js"></script>
@endsection

@section('content')

<div class="panel panel-flat tb_padd">
    <div class="panel-heading">
        <h5 class="panel-title">
         {{ trans('home.permissions_groups') }}  </h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <a class="btn btn-primary" href="{{ route('permissions_groups_create') }}"> {{ trans('home.add_new_permissions_groups') }} </a>

    <div class="table-responsive">
        
    <table class="table table-bordered table-hover datatable-highlight">
        <thead>
            <tr>
                <th class="text-center"> # </th>
                <th class="text-center"> {{ trans('home.name') }} </th>
                <th class="text-center"> {{ trans('home.permissions') }} </th>
                <th class="text-center"> {{ trans('home.since') }} </th>
                <th class="text-center"> {{ trans('home.actions') }} </th>
            </tr>
        </thead>
        <tbody>
            @forelse($permissions_groups as $group)
            <tr id="row_{{ $group->id }}">
                <td> {{ $group->id }} </td>
                <td> {{ $group->name }} </td>
                <td> {{ $group->permissions }} </td>
                <td> {{ $group->created_at->format('Y-m-d H:i') }} </td>
                <td class="text-center">
                    <a href="{{ route('permissions_groups_edit',['id' => $group->id ]) }}" class="btn btn-info"> <i class="icon-pencil3"></i> </a>
                    
                    <a href="{{ route('permissions_groups_delete').'/'.$group->id }}"  class="btn btn-danger"> <i class="icon-database-remove"></i> </a>
                </td>
            </tr>
            @empty
            @endforelse

        </tbody>
    </table>
    </div>
</div>

<script>
    function sweet_delete($url,$message,$row_id)
    {
        $( "#row_"+$row_id ).css('background-color','#000000').css('color','white');
        swal({
        title: $message,
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url:$url
            });
            swal({
                title: "{{ trans('alert') }}",
                text: "{{ trans('dash.deleted_successfully') }}",
                icon: "success",
                timer:1000
            });
            $( "#row_"+$row_id ).hide(1000);
        }else{
            $( "#row_"+$row_id ).removeAttr('style');
        }
        });
    }
</script>
@endsection
