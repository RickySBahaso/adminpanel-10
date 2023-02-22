@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.detailPagu.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-DetailPagu">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.detailPagu.fields.kd_akun') }}
                    </th>
                    <th>
                        {{ trans('cruds.detailPagu.fields.program') }}
                    </th>
                    <th>
                        {{ trans('cruds.detailPagu.fields.kegiatan') }}
                    </th>
                    <th>
                        {{ trans('cruds.detailPagu.fields.kro') }}
                    </th>
                    <th>
                        {{ trans('cruds.detailPagu.fields.pagu') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.detail-pagus.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'kd_akun', name: 'kd_akun' },
{ data: 'program', name: 'program' },
{ data: 'kegiatan', name: 'kegiatan' },
{ data: 'kro', name: 'kro' },
{ data: 'pagu', name: 'pagu' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-DetailPagu').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection