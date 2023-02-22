<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kecamatan extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'kecamatans';

    public static $searchable = [
        'kd_kec',
        'nm_kec',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'kd_kab_id',
        'kd_kec',
        'nm_kec',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function kd_kab()
    {
        return $this->belongsTo(Kabupaten::class, 'kd_kab_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
