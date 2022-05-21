<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLoginIpRequest;
use App\Http\Requests\StoreLoginIpRequest;
use App\Http\Requests\UpdateLoginIpRequest;
use App\Models\LoginIp;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LoginIpController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('login_ip_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LoginIp::query()->select(sprintf('%s.*', (new LoginIp)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'login_ip_show';
                $editGate      = 'login_ip_edit';
                $deleteGate    = 'login_ip_delete';
                $crudRoutePart = 'login-ips';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('user', function ($row) {
                return $row->user ? $row->user : "";
            });
            $table->editColumn('ip', function ($row) {
                return $row->ip ? $row->ip : "";
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? LoginIp::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.loginIps.index');
    }

    public function create()
    {
        abort_if(Gate::denies('login_ip_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.loginIps.create');
    }

    public function store(StoreLoginIpRequest $request)
    {
        $loginIp = LoginIp::create($request->all());

        return redirect()->route('admin.login-ips.index');
    }

    public function edit(LoginIp $loginIp)
    {
        abort_if(Gate::denies('login_ip_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.loginIps.edit', compact('loginIp'));
    }

    public function update(UpdateLoginIpRequest $request, LoginIp $loginIp)
    {
        $loginIp->update($request->all());

        return redirect()->route('admin.login-ips.index');
    }

    public function show(LoginIp $loginIp)
    {
        abort_if(Gate::denies('login_ip_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.loginIps.show', compact('loginIp'));
    }

    public function destroy(LoginIp $loginIp)
    {
        abort_if(Gate::denies('login_ip_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $loginIp->delete();

        return back();
    }

    public function massDestroy(MassDestroyLoginIpRequest $request)
    {
        LoginIp::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
