<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDetailbanpemRequest;
use App\Http\Requests\StoreDetailbanpemRequest;
use App\Http\Requests\UpdateDetailbanpemRequest;
use App\Models\Detailbanpem;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DetailbanpemController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('detailbanpem_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $detailbanpems = Detailbanpem::all();

        return view('admin.detailbanpems.index', compact('detailbanpems'));
    }

    public function create()
    {
        abort_if(Gate::denies('detailbanpem_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.detailbanpems.create');
    }

    public function store(StoreDetailbanpemRequest $request)
    {
        $detailbanpem = Detailbanpem::create($request->all());

        return redirect()->route('admin.detailbanpems.index');
    }

    public function edit(Detailbanpem $detailbanpem)
    {
        abort_if(Gate::denies('detailbanpem_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.detailbanpems.edit', compact('detailbanpem'));
    }

    public function update(UpdateDetailbanpemRequest $request, Detailbanpem $detailbanpem)
    {
        $detailbanpem->update($request->all());

        return redirect()->route('admin.detailbanpems.index');
    }

    public function show(Detailbanpem $detailbanpem)
    {
        abort_if(Gate::denies('detailbanpem_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.detailbanpems.show', compact('detailbanpem'));
    }

    public function destroy(Detailbanpem $detailbanpem)
    {
        abort_if(Gate::denies('detailbanpem_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $detailbanpem->delete();

        return back();
    }

    public function massDestroy(MassDestroyDetailbanpemRequest $request)
    {
        Detailbanpem::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
