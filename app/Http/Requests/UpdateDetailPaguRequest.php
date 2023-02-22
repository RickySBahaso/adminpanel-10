<?php

namespace App\Http\Requests;

use App\Models\DetailPagu;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDetailPaguRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('detail_pagu_edit');
    }

    public function rules()
    {
        return [
            'kd_akun' => [
                'string',
                'nullable',
            ],
            'program' => [
                'string',
                'nullable',
            ],
            'kegiatan' => [
                'string',
                'nullable',
            ],
            'kro' => [
                'string',
                'nullable',
            ],
        ];
    }
}
