@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.desa.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.desas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.desa.fields.kd_kec') }}
                        </th>
                        <td>
                            {{ $desa->kd_kec->kd_kec ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.desa.fields.kd_desa') }}
                        </th>
                        <td>
                            {{ $desa->kd_desa }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.desa.fields.nm_desa') }}
                        </th>
                        <td>
                            {{ $desa->nm_desa }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.desas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection