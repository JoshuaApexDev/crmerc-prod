<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')

</head>

<body class="c-app">
<div class="c-wrapper">
    <div class="c-body">
        <main class="c-main" style="background-color: #2196F3;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-lg-12 col-sm-4">
                        <form action="/store/applicant" method="POST">
                            @csrf
                            <div class="text-center">
                                <img src="/apexlogo2.png" width="200px" height="200px" alt="">
                                <h1 class="text-white"><b>Solicitud de nuevo ingreso</b></h1>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header text-center">
                                    <h3><b>Informacion Personal</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <input type="text" value="spanish" name="lang" hidden>
                                            <div class="form-group">
                                                <label class="required"
                                                       for="first_name">Nombres</label>
                                                <input
                                                    class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}"
                                                    type="text" name="first_name" id="first_name"
                                                    value="{{ old('first_name', '') }}" required>
                                                @if($errors->has('first_name'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('first_name') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.crmCustomer.fields.first_name_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="required"
                                                       for="last_name">Apellidos</label>
                                                <input
                                                    class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}"
                                                    type="text" name="last_name" id="last_name"
                                                    value="{{ old('last_name', '') }}" required>
                                                @if($errors->has('last_name'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('last_name') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.crmCustomer.fields.last_name_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label
                                                       for="email">Correo electronico</label>
                                                <input
                                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                    type="text" name="email" id="email" value="{{ old('email', '') }}">
                                                @if($errors->has('email'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.crmCustomer.fields.email_helper') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label class="required"
                                                       for="phone">Telefono</label>
                                                <input
                                                    class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                                    type="text" name="phone" id="phone" value="{{ old('phone', '') }}"
                                                    required>
                                                @if($errors->has('phone'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('phone') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.crmCustomer.fields.phone_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label class="required"
                                                       for="address">Direccion</label>
                                                <input
                                                    class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                                    type="text" name="address" id="address"
                                                    value="{{ old('address', '') }}" required>
                                                @if($errors->has('address'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('address') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.crmCustomer.fields.address_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label
                                                    for="description">Referencia de direccion</label>
                                                <input
                                                    class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                                    name="description" id="description">{{ old('description') }}</input>
                                                @if($errors->has('description'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('description') }}
                                                    </div>
                                                @endif
                                                <span
                                                    class="help-block">{{ trans('cruds.crmCustomer.fields.description_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label class="required"
                                                       for="age">Edad</label>
                                                <input
                                                    class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}"
                                                    type="number" min="0" name="age" id="age"
                                                    value="{{ old('age', '') }}" step="1" required>
                                                @if($errors->has('age'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('age') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label
                                                    class="required">Sexo/Genero</label>
                                                <select
                                                    class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}"
                                                    name="gender" id="gender" required>
                                                    <option value
                                                            disabled {{ old('gender', null) === null ? 'selected' : '' }}>Seleccione</option>
                                                    @foreach(App\Models\CrmCustomer::GENDER_SELECT as $key => $label)
                                                        <option
                                                            value="{{ $key }}" {{ old('gender', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('gender'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('gender') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="required">Actualmente vivo con</label>
                                                <select
                                                    class="form-control {{ $errors->has('living_with') ? 'is-invalid' : '' }}"
                                                    name="living_with" id="living_with">
                                                    <option value
                                                            disabled {{ old('living_with', null) === null ? 'selected' : '' }}>Seleccione</option>
                                                    @foreach(App\Models\CrmCustomer::LIVING_WITH_SELECT as $key => $label)
                                                        <option
                                                            class="required" value="{{ $key }}" {{ old('living_with', 'Do you currently live with?') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('living_with'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('living_with') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="required">Dependientes</label>
                                                <select
                                                    class="form-control {{ $errors->has('dependents') ? 'is-invalid' : '' }}"
                                                    name="dependents" id="dependents">
                                                    <option class="required" value
                                                            disabled {{ old('dependents', null) === null ? 'selected' : '' }}>Seleccione</option>
                                                    @foreach(App\Models\CrmCustomer::DEPENDENTS_SELECT as $key => $label)
                                                        <option
                                                            value="{{ $key }}" {{ old('dependents', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('dependents'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('dependents') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="required"
                                                       for="date_of_birth">Fecha de nacimiento</label>
                                                <input
                                                    class="form-control date {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}"
                                                    type="text" name="date_of_birth" id="date_of_birth"
                                                    value="{{ old('date_of_birth') }}" required>
                                                @if($errors->has('date_of_birth'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('date_of_birth') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="required"
                                                       for="nationality">Nacionalidad</label>
                                                <input
                                                    class="form-control {{ $errors->has('nationality') ? 'is-invalid' : '' }}"
                                                    type="text" name="nationality" id="nationality"
                                                    value="{{ old('nationality', '') }}" required>
                                                @if($errors->has('nationality'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('nationality') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label class="required">Estado civil</label>
                                                <select
                                                    class="form-control {{ $errors->has('marital_status') ? 'is-invalid' : '' }}"
                                                    name="marital_status" id="marital_status">
                                                    <option value
                                                            disabled {{ old('marital_status', null) === null ? 'selected' : '' }}>Seleccione</option>
                                                    @foreach(App\Models\CrmCustomer::MARITAL_STATUS_SELECT as $key => $label)
                                                        <option
                                                           class="required" value="{{ $key }}" {{ old('marital_status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('marital_status'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('marital_status') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header text-center">
                                    <h3><b>Documentacion</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="curp">CURP</label>
                                                <input class="form-control {{ $errors->has('curp') ? 'is-invalid' : '' }}" type="text" name="curp" id="curp" value="{{ old('curp', '') }}">
                                                @if($errors->has('curp'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('curp') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="rfc">RFC</label>
                                                <input class="form-control {{ $errors->has('rfc') ? 'is-invalid' : '' }}" type="text" name="rfc" id="rfc" value="{{ old('rfc', '') }}">
                                                @if($errors->has('rfc'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('rfc') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="ssn">Numero de seguro social</label>
                                                <input class="form-control {{ $errors->has('ssn') ? 'is-invalid' : '' }}" type="text" name="ssn" id="ssn" value="{{ old('ssn', '') }}">
                                                @if($errors->has('ssn'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('ssn') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <div class="form-check {{ $errors->has('proof_of_residence') ? 'is-invalid' : '' }}">
                                                    <input type="hidden" name="proof_of_residence" value="0">
                                                    <input class="form-check-input" type="checkbox" name="proof_of_residence" id="proof_of_residence" value="1" {{ old('proof_of_residence', 0) == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="proof_of_residence">Comprobante de domicilio</label>
                                                </div>
                                                @if($errors->has('proof_of_residence'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('proof_of_residence') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <div class="form-check {{ $errors->has('birth_certificate') ? 'is-invalid' : '' }}">
                                                    <input type="hidden" name="birth_certificate" value="0">
                                                    <input class="form-check-input" type="checkbox" name="birth_certificate" id="birth_certificate" value="1" {{ old('birth_certificate', 0) == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="birth_certificate">Acta de nacimiento</label>
                                                </div>
                                                @if($errors->has('birth_certificate'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('birth_certificate') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <div class="form-check {{ $errors->has('official_valid') ? 'is-invalid' : '' }}">
                                                    <input type="hidden" name="official_valid" value="0">
                                                    <input class="form-check-input" type="checkbox" name="official_valid" id="official_valid" value="1" {{ old('official_valid', 0) == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="official_valid">Identificacion oficial</label>
                                                </div>
                                                @if($errors->has('official_valid'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('official_valid') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header text-center">
                                    <h3><b>Estado de salud y hábitos personales</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label>Estado de salud</label>
                                                <select class="form-control {{ $errors->has('health_status') ? 'is-invalid' : '' }}" name="health_status" id="health_status">
                                                    <option value disabled {{ old('health_status', null) === null ? 'selected' : '' }}>Seleccione</option>
                                                    @foreach(App\Models\CrmCustomer::HEALTH_STATUS_SELECT as $key => $label)
                                                        <option value="{{ $key }}" {{ old('health_status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('health_status'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('health_status') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="chronic_illness">Padece alguna enfermedad cronica?</label>
                                                <input class="form-control {{ $errors->has('chronic_illness') ? 'is-invalid' : '' }}" type="text" name="chronic_illness" id="chronic_illness" value="{{ old('chronic_illness', '') }}">
                                                @if($errors->has('chronic_illness'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('chronic_illness') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label>Ha tenido COVID?</label>
                                                <select class="form-control {{ $errors->has('have_had_covid') ? 'is-invalid' : '' }}" name="have_had_covid" id="have_had_covid">
                                                    <option value disabled {{ old('have_had_covid', null) === null ? 'selected' : '' }}>Seleccione</option>
                                                    @foreach(App\Models\CrmCustomer::HAVE_HAD_COVID_SELECT as $key => $label)
                                                        <option value="{{ $key }}" {{ old('have_had_covid', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('have_had_covid'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('have_had_covid') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label>Tiene la vacuna contra el COVID?</label>
                                                <select class="form-control {{ $errors->has('covid_vaccine') ? 'is-invalid' : '' }}" name="covid_vaccine" id="covid_vaccine">
                                                    <option value disabled {{ old('covid_vaccine', null) === null ? 'selected' : '' }}>Seleccione</option>
                                                    @foreach(App\Models\CrmCustomer::COVID_VACCINE_SELECT as $key => $label)
                                                        <option value="{{ $key }}" {{ old('covid_vaccine', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('covid_vaccine'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('covid_vaccine') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header text-center">
                                    <h3><b>Historia Educativa</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="elementary_school_name">Primaria</label>
                                                <input class="form-control {{ $errors->has('elementary_school_name') ? 'is-invalid' : '' }}" type="text" name="elementary_school_name" id="elementary_school_name" value="{{ old('elementary_school_name', '') }}">
                                                @if($errors->has('elementary_school_name'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('elementary_school_name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="elementary_graduate_date">Fecha de graduacion</label>
                                                <input class="form-control date {{ $errors->has('elementary_graduate_date') ? 'is-invalid' : '' }}" type="text" name="elementary_graduate_date" id="elementary_graduate_date" value="{{ old('elementary_graduate_date') }}">
                                                @if($errors->has('elementary_graduate_date'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('elementary_graduate_date') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="middle_school_name">Secundaria</label>
                                                <input class="form-control {{ $errors->has('middle_school_name') ? 'is-invalid' : '' }}" type="text" name="middle_school_name" id="middle_school_name" value="{{ old('middle_school_name', '') }}">
                                                @if($errors->has('middle_school_name'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('middle_school_name') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="middle_school_graduate_date">Fecha de graduacion</label>
                                                <input class="form-control date {{ $errors->has('middle_school_graduate_date') ? 'is-invalid' : '' }}" type="text" name="middle_school_graduate_date" id="middle_school_graduate_date" value="{{ old('middle_school_graduate_date') }}">
                                                @if($errors->has('middle_school_graduate_date'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('middle_school_graduate_date') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="high_school_name">Preparatoria</label>
                                                <input class="form-control {{ $errors->has('high_school_name') ? 'is-invalid' : '' }}" type="text" name="high_school_name" id="high_school_name" value="{{ old('high_school_name', '') }}">
                                                @if($errors->has('high_school_name'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('high_school_name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="high_school_graduate_date">Fecha de graduacion</label>
                                                <input class="form-control date {{ $errors->has('high_school_graduate_date') ? 'is-invalid' : '' }}" type="text" name="high_school_graduate_date" id="high_school_graduate_date" value="{{ old('high_school_graduate_date') }}">
                                                @if($errors->has('high_school_graduate_date'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('high_school_graduate_date') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="college_name">Universidad</label>
                                                <input class="form-control {{ $errors->has('college_name') ? 'is-invalid' : '' }}" type="text" name="college_name" id="college_name" value="{{ old('college_name', '') }}">
                                                @if($errors->has('college_name'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('college_name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="college_graduate_date">Fecha de graduacion</label>
                                                <input class="form-control date {{ $errors->has('college_graduate_date') ? 'is-invalid' : '' }}" type="text" name="college_graduate_date" id="college_graduate_date" value="{{ old('college_graduate_date') }}">
                                                @if($errors->has('college_graduate_date'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('college_graduate_date') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header text-center">
                                    <h3><b>Informacion Adicional</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Ha vivido en Estados Unidos?</label>
                                                <select class="form-control {{ $errors->has('lived_in_usa') ? 'is-invalid' : '' }}" name="lived_in_usa" id="lived_in_usa">
                                                    <option value disabled {{ old('lived_in_usa', null) === null ? 'selected' : '' }}>Seleccione</option>
                                                    @foreach(App\Models\CrmCustomer::LIVED_IN_USA_SELECT as $key => $label)
                                                        <option value="{{ $key }}" {{ old('lived_in_usa', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('lived_in_usa'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('lived_in_usa') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Habla ingles?</label>
                                                <select class="form-control {{ $errors->has('speak_english') ? 'is-invalid' : '' }}" name="speak_english" id="speak_english">
                                                    <option value disabled {{ old('speak_english', null) === null ? 'selected' : '' }}>Seleccione</option>
                                                    @foreach(App\Models\CrmCustomer::SPEAK_ENGLISH_SELECT as $key => $label)
                                                        <option value="{{ $key }}" {{ old('speak_english', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('speak_english'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('speak_english') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Nivel de ingles</label>
                                                <select class="form-control {{ $errors->has('english_level') ? 'is-invalid' : '' }}" name="english_level" id="english_level">
                                                    <option value disabled {{ old('english_level', null) === null ? 'selected' : '' }}>Seleccione</option>
                                                    @foreach(App\Models\CrmCustomer::ENGLISH_LEVEL_SELECT as $key => $label)
                                                        <option value="{{ $key }}" {{ old('english_level', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('english_level'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('english_level') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Ingles escrito</label>
                                                <select class="form-control {{ $errors->has('written_english') ? 'is-invalid' : '' }}" name="written_english" id="written_english">
                                                    <option value disabled {{ old('written_english', null) === null ? 'selected' : '' }}>Seleccione</option>
                                                    @foreach(App\Models\CrmCustomer::WRITTEN_ENGLISH_SELECT as $key => $label)
                                                        <option value="{{ $key }}" {{ old('written_english', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('written_english'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('written_english') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="career">Carrera Profesional</label>
                                                <input class="form-control {{ $errors->has('career') ? 'is-invalid' : '' }}" type="text" name="career" id="career" value="{{ old('career', '') }}">
                                                @if($errors->has('career'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('career') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="required" for="position_id">Posicion solicitada</label>
                                                <select class="form-control select2 {{ $errors->has('position') ? 'is-invalid' : '' }}" name="position_id" id="position_id" required>
                                                    @foreach($positions as $id => $entry)
                                                        <option value="{{ $entry->id }}" {{ old('position_id') == $entry->id ? 'selected' : '' }}>{{ $entry->position_name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('position'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('position') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="when_start">Cuando puede empezar?</label>
                                                <input class="form-control date {{ $errors->has('when_start') ? 'is-invalid' : '' }}" type="text" name="when_start" id="when_start" value="{{ old('when_start') }}">
                                                @if($errors->has('when_start'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('when_start') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="infonavit_credit">Tiene credito infonavit</label>
                                                <input class="form-control {{ $errors->has('infonavit_credit') ? 'is-invalid' : '' }}" type="text" name="infonavit_credit" id="infonavit_credit" value="{{ old('infonavit_credit', '') }}">
                                                @if($errors->has('infonavit_credit'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('infonavit_credit') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <div class="form-check {{ $errors->has('payment_method') ? 'is-invalid' : '' }}">
                                                    <input type="hidden" name="payment_method" value="0">
                                                    <input class="form-check-input" type="checkbox" name="payment_method" id="payment_method" value="1" {{ old('payment_method', 0) == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="payment_method">Tiene cuenta de banco?</label>
                                                </div>
                                                @if($errors->has('payment_method'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('payment_method') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">Esto es con la finalidad de decidir cual seria la forma de pago, debido a que la empresa usa banco Santander para pagar a sus empleados.</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="how_you_knew">Como se entero de la vacante?</label>
                                                <input class="form-control {{ $errors->has('how_you_knew') ? 'is-invalid' : '' }}" type="text" name="how_you_knew" id="how_you_knew" value="{{ old('how_you_knew', '') }}">
                                                @if($errors->has('how_you_knew'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('how_you_knew') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="additional_comments">Comentarios adicionales</label>
                                                <input class="form-control {{ $errors->has('additional_comments') ? 'is-invalid' : '' }}" type="text" name="additional_comments" id="additional_comments" value="{{ old('additional_comments', '') }}">
                                                @if($errors->has('additional_comments'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('additional_comments') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header text-center">
                                    <h3><b>Informacion Familiar</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="father_name">Nombre del padre</label>
                                                <input class="form-control {{ $errors->has('father_name') ? 'is-invalid' : '' }}" type="text" name="father_name" id="father_name" value="{{ old('father_name', '') }}">
                                                @if($errors->has('father_name'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('father_name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="father_age">Edad del padre</label>
                                                <input class="form-control {{ $errors->has('father_age') ? 'is-invalid' : '' }}" type="number" name="father_age" id="father_age" min="0" value="{{ old('father_age', '') }}" step="1">
                                                @if($errors->has('father_age'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('father_age') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="mother_name">Nombre de la madre</label>
                                                <input class="form-control {{ $errors->has('mother_name') ? 'is-invalid' : '' }}" type="text" name="mother_name" id="mother_name" value="{{ old('mother_name', '') }}">
                                                @if($errors->has('mother_name'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('mother_name') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="mother_age">Edad de la madre</label>
                                                <input class="form-control {{ $errors->has('mother_age') ? 'is-invalid' : '' }}" type="number" name="mother_age" id="mother_age" value="{{ old('mother_age', '') }}" min="0" step="1">
                                                @if($errors->has('mother_age'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('mother_age') }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header text-center">
                                    <h3><b>Referencias</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="reference_name_1">#1 Nombre de referencia</label>
                                                <input class="form-control {{ $errors->has('reference_name_1') ? 'is-invalid' : '' }}" type="text" name="reference_name_1" id="reference_name_1" value="{{ old('reference_name_1', '') }}">
                                                @if($errors->has('reference_name_1'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('reference_name_1') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.reference_name_1_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="reference_relationship_1">Relacion</label>
                                                <input class="form-control {{ $errors->has('reference_relationship_1') ? 'is-invalid' : '' }}" type="text" name="reference_relationship_1" id="reference_relationship_1" value="{{ old('reference_relationship_1', '') }}">
                                                @if($errors->has('reference_relationship_1'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('reference_relationship_1') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.reference_relationship_1_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="reference_phone_1">Telefono</label>
                                                <input class="form-control {{ $errors->has('reference_phone_1') ? 'is-invalid' : '' }}" type="number" min="0" name="reference_phone_1" id="reference_phone_1" value="{{ old('reference_phone_1', '') }}" step="1">
                                                @if($errors->has('reference_phone_1'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('reference_phone_1') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.reference_phone_1_helper') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="reference_name_2">#2 Nombre de referencia</label>
                                                <input class="form-control {{ $errors->has('reference_name_2') ? 'is-invalid' : '' }}" type="text" name="reference_name_2" id="reference_name_2" value="{{ old('reference_name_2', '') }}">
                                                @if($errors->has('reference_name_2'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('reference_name_2') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.reference_name_2_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="reference_relationship_2">Relacion</label>
                                                <input class="form-control {{ $errors->has('reference_relationship_2') ? 'is-invalid' : '' }}" type="text" name="reference_relationship_2" id="reference_relationship_2" value="{{ old('reference_relationship_2', '') }}">
                                                @if($errors->has('reference_relationship_2'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('reference_relationship_2') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.reference_relationship_2_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="reference_phone_2">Telefono</label>
                                                <input class="form-control {{ $errors->has('reference_phone_2') ? 'is-invalid' : '' }}" type="number" min="0" name="reference_phone_2" id="reference_phone_2" value="{{ old('reference_phone_2', '') }}" step="1">
                                                @if($errors->has('reference_phone_2'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('reference_phone_2') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.reference_phone_2_helper') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="reference_name_3">#3 Nombre de referencia</label>
                                                <input class="form-control {{ $errors->has('reference_name_3') ? 'is-invalid' : '' }}" type="text" name="reference_name_3" id="reference_name_3" value="{{ old('reference_name_3', '') }}">
                                                @if($errors->has('reference_name_3'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('reference_name_3') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.reference_name_3_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="reference_relationship_3">Relacion</label>
                                                <input class="form-control {{ $errors->has('reference_relationship_3') ? 'is-invalid' : '' }}" type="text" name="reference_relationship_3" id="reference_relationship_3" value="{{ old('reference_relationship_3', '') }}">
                                                @if($errors->has('reference_relationship_3'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('reference_relationship_3') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.reference_relationship_3_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="reference_phone_3">Telefono</label>
                                                <input class="form-control {{ $errors->has('reference_phone_3') ? 'is-invalid' : '' }}" type="number" min="0" name="reference_phone_3" id="reference_phone_3" value="{{ old('reference_phone_3', '') }}" step="1">
                                                @if($errors->has('reference_phone_3'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('reference_phone_3') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.reference_phone_3_helper') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header text-center">
                                    <h3><b>Experiencia Laboral</b></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="company_name_1">#1 Nombre de empresa</label>
                                                <input class="form-control {{ $errors->has('company_name_1') ? 'is-invalid' : '' }}" type="text" name="company_name_1" id="company_name_1" value="{{ old('company_name_1', '') }}">
                                                @if($errors->has('company_name_1'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('company_name_1') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.company_name_1_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="company_phone_1">Telefono</label>
                                                <input class="form-control {{ $errors->has('company_phone_1') ? 'is-invalid' : '' }}" type="number" min="0" name="company_phone_1" id="company_phone_1" value="{{ old('company_phone_1', '') }}" step="1">
                                                @if($errors->has('company_phone_1'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('company_phone_1') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.company_phone_1_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="worked_from_1">Desde</label>
                                                <input class="form-control date {{ $errors->has('worked_from_1') ? 'is-invalid' : '' }}" type="text" name="worked_from_1" id="worked_from_1" value="{{ old('worked_from_1') }}">
                                                @if($errors->has('worked_from_1'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('worked_from_1') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.worked_from_1_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="worked_until_1">Hasta</label>
                                                <input class="form-control date {{ $errors->has('worked_until_1') ? 'is-invalid' : '' }}" type="text" name="worked_until_1" id="worked_until_1" value="{{ old('worked_until_1') }}">
                                                @if($errors->has('worked_until_1'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('worked_until_1') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.worked_until_1_helper') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="reason_for_leaving_1">Motivo de renuncia </label>
                                                <input class="form-control {{ $errors->has('reason_for_leaving_1') ? 'is-invalid' : '' }}" type="text" name="reason_for_leaving_1" id="reason_for_leaving_1" value="{{ old('reason_for_leaving_1', '') }}">
                                                @if($errors->has('reason_for_leaving_1'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('reason_for_leaving_1') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.reason_for_leaving_1_helper') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="company_name_2">#2 Nombre de empresa</label>
                                                <input class="form-control {{ $errors->has('company_name_2') ? 'is-invalid' : '' }}" type="text" name="company_name_2" id="company_name_2" value="{{ old('company_name_2', '') }}">
                                                @if($errors->has('company_name_2'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('company_name_2') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.company_name_2_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="company_phone_2">Telefono</label>
                                                <input class="form-control {{ $errors->has('company_phone_2') ? 'is-invalid' : '' }}" type="number" min="0" name="company_phone_2" id="company_phone_2" value="{{ old('company_phone_2', '') }}" step="1">
                                                @if($errors->has('company_phone_2'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('company_phone_2') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.company_phone_2_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="worked_from_2">Desde</label>
                                                <input class="form-control date {{ $errors->has('worked_from_2') ? 'is-invalid' : '' }}" type="text" name="worked_from_2" id="worked_from_2" value="{{ old('worked_from_2') }}">
                                                @if($errors->has('worked_from_2'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('worked_from_2') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.worked_from_2_helper') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="worked_until_2">Hasta</label>
                                                <input class="form-control date {{ $errors->has('worked_until_2') ? 'is-invalid' : '' }}" type="text" name="worked_until_2" id="worked_until_2" value="{{ old('worked_until_2') }}">
                                                @if($errors->has('worked_until_2'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('worked_until_2') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.worked_until_2_helper') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="reason_for_leaving_2">Motivo de renuncia</label>
                                                <input class="form-control {{ $errors->has('reason_for_leaving_2') ? 'is-invalid' : '' }}" type="text" name="reason_for_leaving_2" id="reason_for_leaving_2" value="{{ old('reason_for_leaving_2', '') }}">
                                                @if($errors->has('reason_for_leaving_2'))
                                                    <div class="invalid-feedback">
                                                        {{ $errors->first('reason_for_leaving_2') }}
                                                    </div>
                                                @endif
                                                <span class="help-block">{{ trans('cruds.crmCustomer.fields.reason_for_leaving_2_helper') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <button class="btn btn-danger" type="submit">
                                                    Enviar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
