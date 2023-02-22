<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'app_connection_access',
            ],
            [
                'id'    => 20,
                'title' => 'master_data_access',
            ],
            [
                'id'    => 21,
                'title' => 'provinsi_create',
            ],
            [
                'id'    => 22,
                'title' => 'provinsi_edit',
            ],
            [
                'id'    => 23,
                'title' => 'provinsi_show',
            ],
            [
                'id'    => 24,
                'title' => 'provinsi_delete',
            ],
            [
                'id'    => 25,
                'title' => 'provinsi_access',
            ],
            [
                'id'    => 26,
                'title' => 'kabupaten_create',
            ],
            [
                'id'    => 27,
                'title' => 'kabupaten_edit',
            ],
            [
                'id'    => 28,
                'title' => 'kabupaten_show',
            ],
            [
                'id'    => 29,
                'title' => 'kabupaten_delete',
            ],
            [
                'id'    => 30,
                'title' => 'kabupaten_access',
            ],
            [
                'id'    => 31,
                'title' => 'kecamatan_create',
            ],
            [
                'id'    => 32,
                'title' => 'kecamatan_edit',
            ],
            [
                'id'    => 33,
                'title' => 'kecamatan_show',
            ],
            [
                'id'    => 34,
                'title' => 'kecamatan_delete',
            ],
            [
                'id'    => 35,
                'title' => 'kecamatan_access',
            ],
            [
                'id'    => 36,
                'title' => 'desa_create',
            ],
            [
                'id'    => 37,
                'title' => 'desa_edit',
            ],
            [
                'id'    => 38,
                'title' => 'desa_show',
            ],
            [
                'id'    => 39,
                'title' => 'desa_delete',
            ],
            [
                'id'    => 40,
                'title' => 'desa_access',
            ],
            [
                'id'    => 41,
                'title' => 'satker_create',
            ],
            [
                'id'    => 42,
                'title' => 'satker_edit',
            ],
            [
                'id'    => 43,
                'title' => 'satker_show',
            ],
            [
                'id'    => 44,
                'title' => 'satker_delete',
            ],
            [
                'id'    => 45,
                'title' => 'satker_access',
            ],
            [
                'id'    => 46,
                'title' => 'app_anggaran_access',
            ],
            [
                'id'    => 47,
                'title' => 'app_banpem_access',
            ],
            [
                'id'    => 48,
                'title' => 'detail_pagu_access',
            ],
            [
                'id'    => 49,
                'title' => 'data_realisasi_create',
            ],
            [
                'id'    => 50,
                'title' => 'data_realisasi_edit',
            ],
            [
                'id'    => 51,
                'title' => 'data_realisasi_show',
            ],
            [
                'id'    => 52,
                'title' => 'data_realisasi_delete',
            ],
            [
                'id'    => 53,
                'title' => 'data_realisasi_access',
            ],
            [
                'id'    => 54,
                'title' => 'detailbanpem_create',
            ],
            [
                'id'    => 55,
                'title' => 'detailbanpem_edit',
            ],
            [
                'id'    => 56,
                'title' => 'detailbanpem_show',
            ],
            [
                'id'    => 57,
                'title' => 'detailbanpem_delete',
            ],
            [
                'id'    => 58,
                'title' => 'detailbanpem_access',
            ],
            [
                'id'    => 59,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
