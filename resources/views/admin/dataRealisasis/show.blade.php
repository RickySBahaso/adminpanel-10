@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.dataRealisasi.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.data-realisasis.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.kdsatker') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->kdsatker }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.ba') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->ba }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.baes_1') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->baes_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.akun') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->akun }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.program') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->program }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.kegiatan') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->kegiatan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.output') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->output }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.kewenangan') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->kewenangan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.sumber_dana') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->sumber_dana }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.cara_tarik') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->cara_tarik }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.kdregister') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->kdregister }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.lokasi') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->lokasi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.budget_type') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->budget_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.tanggal') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->tanggal }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.dataRealisasi.fields.amount') }}
                        </th>
                        <td>
                            {{ $dataRealisasi->amount }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.data-realisasis.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection