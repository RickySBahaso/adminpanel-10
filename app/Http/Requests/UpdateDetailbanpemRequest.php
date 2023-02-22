<?php

namespace App\Http\Requests;

use App\Models\Detailbanpem;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDetailbanpemRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('detailbanpem_edit');
    }

    public function rules()
    {
        return [
            'tanggal' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
