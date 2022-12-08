@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.crmCustomer.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.crm-customers.update", [$crmCustomer->id]) }}"
                  enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <button class="btn btn-danger" type="submit" onclick="this.disable = 'disable'">
                        {{ trans('global.save') }}
                    </button>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-primary">
                                Basic Info
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="required"
                                           for="first_name">{{ trans('cruds.crmCustomer.fields.first_name') }}</label>
                                    <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}"
                                           type="text"
                                           name="first_name" id="first_name"
                                           value="{{ old('first_name', $crmCustomer->first_name) }}"
                                           required>
                                    @if($errors->has('first_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('first_name') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.crmCustomer.fields.first_name_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                           for="last_name">{{ trans('cruds.crmCustomer.fields.last_name') }}</label>
                                    <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}"
                                           type="text"
                                           name="last_name" id="last_name"
                                           value="{{ old('last_name', $crmCustomer->last_name) }}"
                                           required>
                                    @if($errors->has('last_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('last_name') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.crmCustomer.fields.last_name_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                           for="email">{{ trans('cruds.crmCustomer.fields.email') }}</label>
                                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                           type="text" name="email"
                                           id="email" value="{{ old('email', $crmCustomer->email) }}" required>
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.crmCustomer.fields.email_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                           for="phone">{{ trans('cruds.crmCustomer.fields.phone') }}</label>
                                    <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                           type="text" name="phone"
                                           id="phone" value="{{ old('phone', $crmCustomer->phone) }}" required>
                                    @if($errors->has('phone'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('phone') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.crmCustomer.fields.phone_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="cellphone">Cellphone</label>
                                    <input class="form-control {{ $errors->has('cellphone') ? 'is-invalid' : '' }}"
                                           type="text"
                                           name="cellphone" id="cellphone"
                                           value="{{ old('cellphone', $crmCustomer->cellphone) }}">
                                    @if($errors->has('cellphone'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('cellphone') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-primary">
                                Address Info
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="required"
                                           for="address">{{ trans('cruds.crmCustomer.fields.address') }}</label>
                                    <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                           type="text"
                                           name="address" id="address"
                                           value="{{ old('address', $crmCustomer->address) }}" required>
                                    @if($errors->has('address'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('address') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.crmCustomer.fields.address_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}"
                                           type="text" name="city"
                                           id="city" value="{{ old('city', $crmCustomer->city) }}">
                                    @if($errors->has('city'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('city') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}"
                                           type="text" name="state"
                                           id="state" value="{{ old('state', $crmCustomer->state) }}">
                                    @if($errors->has('state'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('state') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="zip_code">Zip Code</label>
                                    <input class="form-control {{ $errors->has('zip_code') ? 'is-invalid' : '' }}"
                                           type="text"
                                           name="zip_code" id="zip_code"
                                           value="{{ old('zip_code', $crmCustomer->zip_code) }}">
                                    @if($errors->has('zip_code'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('zip_code') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="contry">Country</label>
                                    <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}"
                                           type="text"
                                           name="country" id="country"
                                           value="{{ old('country', $crmCustomer->country) }}">
                                    @if($errors->has('country'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('country') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-primary">
                                Verify Info
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="employee_count">Employee Count</label>
                                    <input class="form-control {{ $errors->has('employee_count') ? 'is-invalid' : '' }}"
                                           type="text"
                                           name="employee_count" id="employee_count"
                                           value="{{ old('employee_count', $crmCustomer->employee_count) }}">
                                    @if($errors->has('employee_count'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('employee_count') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="verify_employee_count">Verify Employee Count</label>
                                    <input
                                        class="form-control {{ $errors->has('verify_employee_count') ? 'is-invalid' : '' }}"
                                        type="text"
                                        name="verify_employee_count" id="verify_employee_count"
                                        value="{{ old('verify_employee_count', $crmCustomer->verify_employee_count) }}">
                                    @if($errors->has('verify_employee_count'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('verify_employee_count') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="first_name_verified">First Name Verified</label>
                                    <input
                                        class="form-control {{ $errors->has('first_name_verified') ? 'is-invalid' : '' }}"
                                        type="text"
                                        name="first_name_verified" id="first_name_verified"
                                        value="{{ old('first_name_verified', $crmCustomer->first_name_verified) }}">
                                    @if($errors->has('first_name_verified'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('first_name_verified') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="last_name_verified">Last Name Verified</label>
                                    <input
                                        class="form-control {{ $errors->has('last_name_verified') ? 'is-invalid' : '' }}"
                                        type="text"
                                        name="last_name_verified" id="last_name_verified"
                                        value="{{ old('last_name_verified', $crmCustomer->last_name_verified) }}">
                                    @if($errors->has('last_name_verified'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('last_name_verified') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="employee_amount">Employee Amount</label>
                                    <input
                                        class="form-control {{ $errors->has('employee_amount') ? 'is-invalid' : '' }}"
                                        type="text"
                                        name="employee_amount" id="employee_amount"
                                        value="{{ old('employee_amount', $crmCustomer->employee_amount) }}">
                                    @if($errors->has('employee_amount'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('employee_amount') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header bg-primary">
                                ERC Info
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="file_code">File Code</label>
                                            <input
                                                class="form-control {{ $errors->has('file_code') ? 'is-invalid' : '' }}"
                                                type="text"
                                                name="file_code" id="file_code"
                                                value="{{ old('file_code', $crmCustomer->file_code) }}">
                                            @if($errors->has('file_code'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('file_code') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="w2_employees">W2 Employee</label>
                                            <select
                                                class="form-control {{ $errors->has('w2_employees') ? 'is-invalid' : '' }}"
                                                name="w2_employees" id="w2_employees">
                                                @foreach(App\Models\CrmCustomer::W2_EMPLOYEES_SELECT as $key => $label)
                                                    <option
                                                        value="{{ $key }}" {{ old('w2_employees', $crmCustomer->w2_employees) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('w2_employees'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('w2_employees') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="receive_erc">Receive ERC</label>
                                            <select
                                                class="form-control {{ $errors->has('receive_erc') ? 'is-invalid' : '' }}"
                                                name="receive_erc" id="receive_erc">
                                                @foreach(App\Models\CrmCustomer::RECEIVE_ERC_SELECT as $key => $label)
                                                    <option
                                                        value="{{ $key }}" {{ old('receive_erc', $crmCustomer->receive_erc) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('receive_erc'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('receive_erc') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="ppp_loan">PPP Loan</label>
                                            <select
                                                class="form-control {{ $errors->has('ppp_loan') ? 'is-invalid' : '' }}"
                                                name="ppp_loan" id="ppp_loan">
                                                @foreach(App\Models\CrmCustomer::PPP_LOAN_SELECT as $key => $label)
                                                    <option
                                                        value="{{ $key }}" {{ old('ppp_loan', $crmCustomer->ppp_loan) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('ppp_loan'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('ppp_loan') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="payroll_amount">Payroll Amount</label>
                                            <input
                                                class="form-control {{ $errors->has('payroll_amount') ? 'is-invalid' : '' }}"
                                                type="text"
                                                name="payroll_amount" id="payroll_amount"
                                                value="{{ old('payroll_amount', $crmCustomer->payroll_amount) }}">
                                            @if($errors->has('payroll_amount'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('payroll_amount') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="erc_advance">ERC Advance</label>
                                            <input
                                                class="form-control {{ $errors->has('erc_advance') ? 'is-invalid' : '' }}"
                                                type="text"
                                                name="erc_advance" id="erc_advance"
                                                value="{{ old('erc_advance', $crmCustomer->erc_advance) }}">
                                            @if($errors->has('erc_advance'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('erc_advance') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="erc_amount">ERC Amount</label>
                                            <input
                                                class="form-control {{ $errors->has('erc_amount') ? 'is-invalid' : '' }}"
                                                type="text"
                                                name="erc_amount" id="erc_amount"
                                                value="{{ old('erc_amount', $crmCustomer->erc_amount) }}">
                                            @if($errors->has('erc_amount'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('erc_amount') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="deal_revenue">Deal Revenue</label>
                                            <input
                                                class="form-control {{ $errors->has('deal_revenue') ? 'is-invalid' : '' }}"
                                                type="text"
                                                name="deal_revenue" id="deal_revenue"
                                                value="{{ old('deal_revenue', $crmCustomer->deal_revenue) }}">
                                            @if($errors->has('deal_revenue'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('deal_revenue') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="contingency_fee">Contingency Fee</label>
                                            <input
                                                class="form-control {{ $errors->has('contingency_fee') ? 'is-invalid' : '' }}"
                                                type="text"
                                                name="contingency_fee" id="contingency_fee"
                                                value="{{ old('contingency_fee', $crmCustomer->contingency_fee) }}">
                                            @if($errors->has('contingency_fee'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('contingency_fee') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="required"
                                                   for="status_id">{{ trans('cruds.crmCustomer.fields.status') }}</label>
                                            <select
                                                class="form-control select2 required {{ $errors->has('status') ? 'is-invalid' : '' }}"
                                                name="status_id" id="status_id">
                                                @foreach($statuses as $id => $entry)
                                                    <option
                                                        value="{{ $id }}" {{ (old('status_id') ? old('status_id') : $crmCustomer->status->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('status'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('status') }}
                                                </div>
                                            @endif
                                            <span
                                                class="help-block">{{ trans('cruds.crmCustomer.fields.status_helper') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header bg-primary">
                                Documents
                            </div>
                            <div class="card-body">
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-lg-12">
                                        <a class="btn btn-success" href="/admin/crm-documents/create?customer_id={{$crmCustomer->id}}">
                                            {{ trans('global.add') }} {{ trans('cruds.crmDocument.title_singular') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class=" table table-bordered table-striped table-hover datatable datatable-CrmDocument">
                                            <thead>
                                            <tr>
                                                <th>
                                                    {{ trans('cruds.crmDocument.fields.document_file') }}
                                                </th>
                                                <th>
                                                    {{ trans('cruds.crmDocument.fields.name') }}
                                                </th>
                                                <th>
                                                    &nbsp;Actions
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($crmDocuments as $key => $crmDocument)
                                                <tr data-entry-id="{{ $crmDocument->id }}">
                                                    <td>
                                                        @if($crmDocument->document_file)
                                                            <a href="{{ $crmDocument->document_file->getUrl() }}" target="_blank">
                                                                {{ trans('global.view_file') }}
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ $crmDocument->name ?? '' }}
                                                    </td>
                                                    <td>
                                                        @can('crm_document_show')
                                                            <a class="btn btn-xs btn-primary"
                                                               href="{{ route('admin.crm-documents.show', $crmDocument->id) }}">
                                                                {{ trans('global.view') }}
                                                            </a>
                                                        @endcan

                                                        @can('crm_document_edit')
                                                            <a class="btn btn-xs btn-info"
                                                               href="{{ route('admin.crm-documents.edit', $crmDocument->id) }}">
                                                                {{ trans('global.edit') }}
                                                            </a>
                                                        @endcan

                                                        @can('crm_document_delete')
                                                            <input type="submit" class="btn btn-xs btn-danger"
                                                                   value="{{ trans('global.delete') }}" onclick="deleteDocument({{$crmDocument->id}})">
                                                        @endcan

                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit" onclick="this.disable = 'disable'">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection

<script>
    deleteDocument = function (id) {
        if (confirm('Are you sure you want to delete this document?')) {
            $.ajax({
                url: '/admin/crm-documents/' + id,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (result) {
                    location.reload();
                }
            });
        }
    }
</script>
