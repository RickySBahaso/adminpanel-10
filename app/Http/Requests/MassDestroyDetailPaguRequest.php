<?php

namespace App\Http\Requests;

use App\Models\DetailPagu;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDetailPaguRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('detail_pagu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:detail_pagus,id',
        ];
    }
}
