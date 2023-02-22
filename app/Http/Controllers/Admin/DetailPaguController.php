<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailPagu;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class DetailPaguController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('detail_pagu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = DetailPagu::query()->select(sprintf('%s.*', (new DetailPagu())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'detail_pagu_show';
                $editGate = 'detail_pagu_edit';
                $deleteGate = 'detail_pagu_delete';
                $crudRoutePart = 'detail-pagus';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('kd_akun', function ($row) {
                return $row->kd_akun ? $row->kd_akun : '';
            });
            $table->editColumn('program', function ($row) {
                return $row->program ? $row->program : '';
            });
            $table->editColumn('kegiatan', function ($row) {
                return $row->kegiatan ? $row->kegiatan : '';
            });
            $table->editColumn('kro', function ($row) {
                return $row->kro ? $row->kro : '';
            });
            $table->editColumn('pagu', function ($row) {
                return $row->pagu ? $row->pagu : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.detailPagus.index');
    }

    public function show(DetailPagu $detailPagu)
    {
        abort_if(Gate::denies('detail_pagu_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.detailPagus.show', compact('detailPagu'));
    }
}
