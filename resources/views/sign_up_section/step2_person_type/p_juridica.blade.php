<div class="container pl-5 pr-5 d-none" id="container-p-juridica">
    <div class="row mt-4 pl-5 pr-5">
        <div class="col-sm-6">
            <div class="text-center">
                <span class="bg-blue text-white font-weight-bold pt-2 pb-2 pl-3 pr-3">
                    Datos de la empresa
                </span>
            </div>

            <div class="row mt-3">
                <div class="col-md-6 my-auto">
                    <label class="font-weight-bold"> <span class="ast-required"> *</span>Nombre de la empresa</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="nombre_empresa_pj">
                </div>
            </div>
            @component('components.field_error')
                @slot('grid_size')
                    12
                @endslot
                @slot('error_row_id')
                    error_row_nombre_empresa_pj
                @endslot
                @slot('error_ul_id')
                    error_ul_nombre_empresa_pj
                @endslot
            @endcomponent
            <div class="row mt-3">
                <div class="col-md-6 my-auto">
                    <label class="font-weight-bold"> <span class="ast-required"> *</span>Razón social/RIF</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name='rif_empresa_pj'>
                </div>
            </div>
            @component('components.field_error')
                @slot('grid_size')
                    12
                @endslot
                @slot('error_row_id')
                    error_row_rif_empresa_pj
                @endslot
                @slot('error_ul_id')
                    error_ul_rif_empresa_pj
                @endslot
            @endcomponent
            <div class="row mt-3">
                <div class="col-md-6 my-auto">
                    <label class="font-weight-bold"> <span class="ast-required"> *</span>País de procedencia</label>
                </div>
                <div class="col-md-6">
                    <select class="form-control" id="country_empresa_pj">
                        <option value='' label="Seleccione su país" disabled selected value></option>
                        @foreach($countries as $country)
                        <option value={{$country->id}}>{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @component('components.field_error')
                @slot('grid_size')
                    12
                @endslot
                @slot('error_row_id')
                    error_row_country_empresa_pj
                @endslot
                @slot('error_ul_id')
                    error_ul_country_empresa_pj
                @endslot
            @endcomponent
            <div class="row mt-3">
                <div class="col-md-6 my-auto">
                    <label class="font-weight-bold"> <span class="ast-required"> *</span>Ciudad</label>
                </div>
                <div class="col-md-6">
                    <select class="form-control" id="cities_empresa_pj">
                    <option label="Seleccione su ciudad" disabled selected value></option>
                    </select>
                </div>
            </div>
            @component('components.field_error')
                @slot('grid_size')
                    12
                @endslot
                @slot('error_row_id')
                    error_row_cities_empresa_pj
                @endslot
                @slot('error_ul_id')
                    error_ul_cities_empresa_pj
                @endslot
            @endcomponent
            <div class="row mt-3">
                <div class="col-md-6 my-auto">
                    <label class="font-weight-bold"> <span class="ast-required"> *</span>Dirección</label>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control overflow-auto" style="resize:none;" name="address_empresa_pj"></textarea>
                </div>
            </div>
            @component('components.field_error')
                @slot('grid_size')
                    12
                @endslot
                @slot('error_row_id')
                    error_row_address_empresa_pj
                @endslot
                @slot('error_ul_id')
                    error_ul_address_empresa_pj
                @endslot
            @endcomponent
        </div>
        <div class="col-sm-6 pl-5">
            <div class="text-center">
                <span class="bg-blue text-white font-weight-bold pt-2 pb-2 pl-3 pr-3">
                    Datos del representante de la empresa
                </span>
            </div>
                <div class="row mt-3">
                    <div class="col-md-6 my-auto">
                        <label class="font-weight-bold"> <span class="ast-required">*</span>Nombre</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="nombre_rep_pj">
                    </div>
                </div>
                @component('components.field_error')
                    @slot('grid_size')
                    12
                @endslot
                    @slot('error_row_id')
                        error_row_nombre_rep_pj
                    @endslot
                    @slot('error_ul_id')
                        error_ul_nombre_rep_pj
                    @endslot
                @endcomponent
                <div class="row mt-3">
                    <div class="col-md-6 my-auto">
                        <label class="font-weight-bold"> <span class="ast-required">*</span>Apellido</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="apellido_rep_pj">
                    </div>
                </div>
                @component('components.field_error')
                    @slot('grid_size')
                    12
                @endslot
                    @slot('error_row_id')
                        error_row_apellido_rep_pj
                    @endslot
                    @slot('error_ul_id')
                        error_ul_apellido_rep_pj
                    @endslot
                @endcomponent
                <div class="row mt-3">
                    <div class="col-md-6 my-auto">
                        <label class="font-weight-bold"> <span class="ast-required"> *</span>Correo electrónico</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name='email_rep_pj'>
                    </div>
                </div>
                @component('components.field_error')
                    @slot('grid_size')
                    12
                @endslot
                    @slot('error_row_id')
                        error_row_email_rep_pj
                    @endslot
                    @slot('error_ul_id')
                        error_ul_email_rep_pj
                    @endslot
                @endcomponent
                <div class="row mt-3">
                    <div class="col-md-6 my-auto">
                        <label class="font-weight-bold"> <span class="ast-required"> *</span>Teléfono</label>
                    </div>
                </div>
                <div class="row ml-3" >
                    <div class="text-blue"> Seleccione el o los teléfonos de su preferencia</div>
                </div>
                <div class="row pl-5 mt-3 mb-3">
                        <div class="col-md-6 form-check">
                            <input type="checkbox" class="form-check-input" id="mobile-checkbox-juridica">
                            <label class="form-check-label bg-yellow text-white tlf-checkbox pt-1 pb-1 pl-5 pr-5" for="portal-web">Móvil</label>
                        </div>
                        <div class="col-md-6 form-check">
                            <input type="checkbox" class="form-check-input" id="landline-checkbox-juridica">
                            <label class="form-check-label bg-yellow text-white tlf-checkbox pt-1 pb-1 pl-5 pr-5" for="portal-web">Fijo</label>
                        </div>
                </div>

                <div class="row mb-3 d-none" id="input-mobile-juridica">
                    <div class="col-sm-6"> 
                    <input class="phone form-control" name="phone1" type="tel">
                    </div>
                </div>
                <div class="row d-none" id="input-landline-juridica">
                    <div class="col-md-6"> 
                    <input class="phone form-control" name="phone2" type="tel">
                    </div>
                    <div class="col-sm-2 font-weight-bold my-auto">
                            Ext
                    </div>
                    <div class="col-md-4"> 
                        <input type="text" class="form-control"  style="margin-left:-30px;" placeholder="Opcional">
                    </div>
                </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-12"> 
            <div class="text-blue text-justify font-weight-bold mt-3"><span class="ast-required"> *</span>
                Por favor, verifique que sus datos sean los correctos, ya que serán utilizados
                para generar su publicación, enviarle sus datos de acceso, inscribirse en un
                adiestramiento, o solicitar cotizaciones
            </div>
        </div>
    </div>
</div>