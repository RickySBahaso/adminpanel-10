<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kabupaten extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'kabupatens';

    public static $searchable = [
        'kd_kab',
        'nama_kab',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'kd_prop_id',
        'kd_kab',
        'nama_kab',
        'lat',
        'lng',
        'tz',
        'path',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function kd_prop()
    {
        return $this->belongsTo(Provinsi::class, 'kd_prop_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
