@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.detailPagu.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.detail-pagus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.detailPagu.fields.kd_akun') }}
                        </th>
                        <td>
                            {{ $detailPagu->kd_akun }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.detailPagu.fields.program') }}
                        </th>
                        <td>
                            {{ $detailPagu->program }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.detailPagu.fields.kegiatan') }}
                        </th>
                        <td>
                            {{ $detailPagu->kegiatan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.detailPagu.fields.kro') }}
                        </th>
                        <td>
                            {{ $detailPagu->kro }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.detailPagu.fields.pagu') }}
                        </th>
                        <td>
                            {{ $detailPagu->pagu }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.detail-pagus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection