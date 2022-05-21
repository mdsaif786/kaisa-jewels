<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmailSubscriberRequest;
use App\Http\Requests\StoreEmailSubscriberRequest;
use App\Http\Requests\UpdateEmailSubscriberRequest;
use App\Models\EmailSubscriber;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmailSubscribersController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('email_subscriber_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmailSubscriber::query()->select(sprintf('%s.*', (new EmailSubscriber)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'email_subscriber_show';
                $editGate      = 'email_subscriber_edit';
                $deleteGate    = 'email_subscriber_delete';
                $crudRoutePart = 'email-subscribers';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : "";
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? EmailSubscriber::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.emailSubscribers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('email_subscriber_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.emailSubscribers.create');
    }

    public function store(StoreEmailSubscriberRequest $request)
    {
        $emailSubscriber = EmailSubscriber::create($request->all());

        return redirect()->route('admin.email-subscribers.index');
    }

    public function edit(EmailSubscriber $emailSubscriber)
    {
        abort_if(Gate::denies('email_subscriber_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.emailSubscribers.edit', compact('emailSubscriber'));
    }

    public function update(UpdateEmailSubscriberRequest $request, EmailSubscriber $emailSubscriber)
    {
        $emailSubscriber->update($request->all());

        return redirect()->route('admin.email-subscribers.index');
    }

    public function show(EmailSubscriber $emailSubscriber)
    {
        abort_if(Gate::denies('email_subscriber_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.emailSubscribers.show', compact('emailSubscriber'));
    }

    public function destroy(EmailSubscriber $emailSubscriber)
    {
        abort_if(Gate::denies('email_subscriber_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $emailSubscriber->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmailSubscriberRequest $request)
    {
        EmailSubscriber::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
