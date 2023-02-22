@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.detailPagu.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.detail-pagus.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="kd_akun">{{ trans('cruds.detailPagu.fields.kd_akun') }}</label>
                <input class="form-control {{ $errors->has('kd_akun') ? 'is-invalid' : '' }}" type="text" name="kd_akun" id="kd_akun" value="{{ old('kd_akun', '') }}">
                @if($errors->has('kd_akun'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kd_akun') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.detailPagu.fields.kd_akun_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="program">{{ trans('cruds.detailPagu.fields.program') }}</label>
                <input class="form-control {{ $errors->has('program') ? 'is-invalid' : '' }}" type="text" name="program" id="program" value="{{ old('program', '') }}">
                @if($errors->has('program'))
                    <div class="invalid-feedback">
                        {{ $errors->first('program') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.detailPagu.fields.program_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="kegiatan">{{ trans('cruds.detailPagu.fields.kegiatan') }}</label>
                <input class="form-control {{ $errors->has('kegiatan') ? 'is-invalid' : '' }}" type="text" name="kegiatan" id="kegiatan" value="{{ old('kegiatan', '') }}">
                @if($errors->has('kegiatan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kegiatan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.detailPagu.fields.kegiatan_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="kro">{{ trans('cruds.detailPagu.fields.kro') }}</label>
                <input class="form-control {{ $errors->has('kro') ? 'is-invalid' : '' }}" type="text" name="kro" id="kro" value="{{ old('kro', '') }}">
                @if($errors->has('kro'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kro') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.detailPagu.fields.kro_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pagu">{{ trans('cruds.detailPagu.fields.pagu') }}</label>
                <input class="form-control {{ $errors->has('pagu') ? 'is-invalid' : '' }}" type="number" name="pagu" id="pagu" value="{{ old('pagu', '0') }}" step="0.01">
                @if($errors->has('pagu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pagu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.detailPagu.fields.pagu_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection