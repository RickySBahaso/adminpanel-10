@extends('layouts.admin')
@section('content')
@can('detailbanpem_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.detailbanpems.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.detailbanpem.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.detailbanpem.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Detailbanpem">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.detailbanpem.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.detailbanpem.fields.tanggal') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($detailbanpems as $key => $detailbanpem)
                        <tr data-entry-id="{{ $detailbanpem->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $detailbanpem->id ?? '' }}
                            </td>
                            <td>
                                {{ $detailbanpem->tanggal ?? '' }}
                            </td>
                            <td>
                                @can('detailbanpem_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.detailbanpems.show', $detailbanpem->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('detailbanpem_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.detailbanpems.edit', $detailbanpem->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('detailbanpem_delete')
                                    <form action="{{ route('admin.detailbanpems.destroy', $detailbanpem->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('detailbanpem_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.detailbanpems.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Detailbanpem:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection