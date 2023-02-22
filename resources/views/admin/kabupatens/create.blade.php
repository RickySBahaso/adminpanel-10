@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.kabupaten.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.kabupatens.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="kd_prop_id">{{ trans('cruds.kabupaten.fields.kd_prop') }}</label>
                <select class="form-control select2 {{ $errors->has('kd_prop') ? 'is-invalid' : '' }}" name="kd_prop_id" id="kd_prop_id" required>
                    @foreach($kd_props as $id => $entry)
                        <option value="{{ $id }}" {{ old('kd_prop_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('kd_prop'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kd_prop') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.kabupaten.fields.kd_prop_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="kd_kab">{{ trans('cruds.kabupaten.fields.kd_kab') }}</label>
                <input class="form-control {{ $errors->has('kd_kab') ? 'is-invalid' : '' }}" type="number" name="kd_kab" id="kd_kab" value="{{ old('kd_kab', '') }}" step="1" required>
                @if($errors->has('kd_kab'))
                    <div class="invalid-feedback">
                        {{ $errors->first('kd_kab') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.kabupaten.fields.kd_kab_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nama_kab">{{ trans('cruds.kabupaten.fields.nama_kab') }}</label>
                <input class="form-control {{ $errors->has('nama_kab') ? 'is-invalid' : '' }}" type="text" name="nama_kab" id="nama_kab" value="{{ old('nama_kab', '') }}" required>
                @if($errors->has('nama_kab'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_kab') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.kabupaten.fields.nama_kab_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lat">{{ trans('cruds.kabupaten.fields.lat') }}</label>
                <input class="form-control {{ $errors->has('lat') ? 'is-invalid' : '' }}" type="number" name="lat" id="lat" value="{{ old('lat', '') }}" step="0.0000000001">
                @if($errors->has('lat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.kabupaten.fields.lat_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lng">{{ trans('cruds.kabupaten.fields.lng') }}</label>
                <input class="form-control {{ $errors->has('lng') ? 'is-invalid' : '' }}" type="number" name="lng" id="lng" value="{{ old('lng', '') }}" step="0.0000000001">
                @if($errors->has('lng'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lng') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.kabupaten.fields.lng_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tz">{{ trans('cruds.kabupaten.fields.tz') }}</label>
                <input class="form-control {{ $errors->has('tz') ? 'is-invalid' : '' }}" type="number" name="tz" id="tz" value="{{ old('tz', '') }}" step="1">
                @if($errors->has('tz'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tz') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.kabupaten.fields.tz_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="path">{{ trans('cruds.kabupaten.fields.path') }}</label>
                <input class="form-control {{ $errors->has('path') ? 'is-invalid' : '' }}" type="text" name="path" id="path" value="{{ old('path', '') }}">
                @if($errors->has('path'))
                    <div class="invalid-feedback">
                        {{ $errors->first('path') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.kabupaten.fields.path_helper') }}</span>
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