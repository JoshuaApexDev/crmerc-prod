<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCrmNoteRequest;
use App\Http\Requests\StoreCrmNoteRequest;
use App\Http\Requests\UpdateCrmNoteRequest;
use App\Models\CrmCustomer;
use App\Models\CrmNote;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CrmNoteController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crm_note_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crmNotes = CrmNote::with(['customer'])->get();

        return view('admin.crmNotes.index', compact('crmNotes'));
    }

    public function create(Request $request)
    {
        abort_if(Gate::denies('crm_note_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = CrmCustomer::all();

        $customer_id = $request->customer_id ?? null;
        $customer = CrmCustomer::find($customer_id);
        return view('admin.crmNotes.create', compact('customers', 'customer'));
    }

    public function store(StoreCrmNoteRequest $request)
    {
        $crmNote = CrmNote::create($request->all());
        $crmNote->user_id = auth()->user()->id;
        $crmNote->save();

        if (isset($request->customer_id)) {
            return redirect()->route('admin.crm-customers.edit', $request->customer_id);
        }

        return redirect()->route('admin.crm-notes.index');
    }

    public function show(CrmNote $crmNote)
    {
        abort_if(Gate::denies('crm_note_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crmNote->load('customer');

        return view('admin.crmNotes.show', compact('crmNote'));
    }

    public function edit(CrmNote $crmNote)
    {
        abort_if(Gate::denies('crm_note_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customers = CrmCustomer::all();

        $crmNote->load('customer');

        return view('admin.crmNotes.edit', compact('customers', 'crmNote'));
    }

    public function update(UpdateCrmNoteRequest $request, CrmNote $crmNote)
    {
        $user = auth()->user();
        $crmNote->update($request->all());
        $crmNote->user_id = $user->id;
        $crmNote->save();
        return redirect()->route('admin.crm-notes.index');

    }

    public function destroy(CrmNote $crmNote)
    {
        abort_if(Gate::denies('crm_note_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crmNote->delete();

        return back();

    }

    public function massDestroy(MassDestroyCrmNoteRequest $request)
    {
        CrmNote::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }


}
