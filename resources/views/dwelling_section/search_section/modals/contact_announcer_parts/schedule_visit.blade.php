<div class='d-none contact-announcer-section' id="section-4">
    <div class="row">
        <div class="col md-12 font-weight-bold text-red text-center" style='    font-size: 21px;margin-top: -7px;'>Agendar visita</div>
    </div>
    <div class="container mr-5 pt-3">
        <div class="row">
            <div class="col-md-5">
                <label class='font-weight-bold text-blue sm-text'>Fecha en que desea realizar la visita</label>
            </div>
            <div class="col-md-7 pr-0 ">
                <input type="date" class='sm-text w-fit-content pl-2'>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-12 pr-0 d-flex justify-content-center">
                <label class='font-weight-bold sm-text bg-warning text-white label-contact-announcer' style='margin-left:0px;'>Horas en que puedes hacer la visita</label>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-12">
                <p class="text-center sm-text text-blue">Seleccione el horario en que puedes hacer la visita al inmueble</p>
            </div>
        </div>

        <div class="row mt-n1">
            <div class="col-md-1 pr-0">
                <div class="radio">
                    <input type="radio" name="opt_schedule_visit" value='fixed' checked>
                </div>
            </div>
            <div class="col-md-5 pr-0 my-auto">
                <div class="sm-text font-weight-bold">
                    Desde
                </div>
                <div class="row">
                    <div class="col-md-6 pr-0">
                        <ul class="tiny-checkbox-dropdown w-100" >
                            <li class="dropdown">
                                <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 sm-text"></p>
                                <ul class="dropdown-menu hour-dropdown sm-text">
                                    <li><label class="checkbox "><input type="checkbox" value=1 name="from_hour">1</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=2 name="from_hour">2</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=3 name="from_hour">3</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=4 name="from_hour">4</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=5 name="from_hour">5</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=6 name="from_hour">6</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=7 name="from_hour">7</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=8 name="from_hour">8</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=9 name="from_hour">9</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=10 name="from_hour">10</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=11 name="from_hour">11</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=12 name="from_hour">12</label></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pl-1 pr-2 w-100">
                        <ul class="tiny-checkbox-dropdown" >
                            <li class="dropdown">
                                <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 sm-text"></p>
                                <ul class="dropdown-menu hour-dropdown sm-text">
                                    <li><label class="checkbox"><input type="checkbox" value="am" name="from_time">am</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="pm" name="from_time">pm</label></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 pr-0 my-auto">
                <div class="sm-text font-weight-bold">
                    Hasta
                </div>
                <div class="row">
                    <div class="col-md-6 pr-0">
                        <ul class="tiny-checkbox-dropdown w-100" >
                            <li class="dropdown">
                                <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 sm-text"></p>
                                <ul class="dropdown-menu hour-dropdown sm-text">
                                    <li><label class="checkbox "><input type="checkbox" value=1 name="to_hour">1</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=2 name="to_hour">2</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=3 name="to_hour">3</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=4 name="to_hour">4</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=5 name="to_hour">5</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=6 name="to_hour">6</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=7 name="to_hour">7</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=8 name="to_hour">8</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=9 name="to_hour">9</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=10 name="to_hour">10</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=11 name="to_hour">11</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=12 name="to_hour">12</label></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pl-1 pr-2 w-100">
                        <ul class="tiny-checkbox-dropdown" >
                            <li class="dropdown">
                                <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 sm-text"></p>
                                <ul class="dropdown-menu hour-dropdown sm-text">
                                    <li><label class="checkbox"><input type="checkbox" value="am" name="to_time">am</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="pm" name="to_time">pm</label></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1 pr-0">
                <div class="radio">
                    <input type="radio" name="opt_schedule_visit" value='custom'>
                </div>
            </div>
            <div class="col-md-5">
                <label class='font-weight-bold text-blue sm-text my-auto'> A convenir</label>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-5 pr-0">
                <label class='font-weight-bold text-blue sm-text'>Email</label>
            </div>
            <div class="col-md-7 ">
                <input class='sm-text w-100 pl-1' type="text" placeholder="Email" name='section-4-announcer-email'>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 pr-0">
                <label class='font-weight-bold text-blue sm-text'>Teléfono</label>
            </div>
            <div class="col-md-9 pr-0 ">
                <span class="text-blue sm-text">Seleccione el o los teléfonos de su preferencia</span>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-1"></div>
            <div class="col-md-5 form-check">
                <input type="checkbox" class="form-check-input phone-checkbox" name="mobile-phone-checkbox-contact-announcer-dwelling" value="mobile">
                <label class="form-check-label bg-yellow text-white tlf-checkbox-contact-announcer md-text">Móvil</label>
            </div>
            <div class="col-md-5 form-check">
                <input type="checkbox" class="form-check-input phone-checkbox" name="landline-phone-checkbox-contact-announcer-dwelling" value="landline">
                <label class="form-check-label bg-yellow text-white tlf-checkbox-contact-announcer md-text">Fijo</label>
            </div>
        </div>
        <div class="container ml-n5">
            <div class="row mt-3 ml-3 mb-3 d-none mobile-input-contact-announcer-dwelling-mobile">
                <div class="col-md-10 md-text"> 
                </div>
            </div>
    
            <div class="row landline-phone mt-3 ml-3 mb-3 d-none landline-input-contact-announcer-dwelling-mobile">
                <div class="col-md-10 md-text"> 
                </div>
                <div class="col-md-1 sm-text ml-n3 font-weight-bold my-auto">
                        Ext
                </div>
                <div class="col-md-1 sm-text my-auto">
                    <input type="text" placeholder="Opcional" name='landline_ext_contact_announcer_dwelling' 
                    style='
                        padding: 4px 5px;
                        width: 62px;
                        font-weight: bold;'
                    >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 pr-0">
                <label class='font-weight-bold sm-text text-blue'>Otros detalles que desees aportar sobre la visita</label>
            </div>
            <div class="col-md-7 ">
                <textarea class="form-control border border-dark rounded-0 resize-none sm-text" rows="3" id="dwelling_other_details"></textarea>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-1 pr-0">
            </div>
            <div class="col-md-11 pr-0 sm-text">
                <span class="font-weight-bold text-red ml-n2">*</span>
                <span class="font-weight-bold text-blue">
                    Por favor verifique que sus datos sean los correctos,
                    ya que serán utilizados por el anunciante para contactarlo
                </span>
            </div>
        </div>
        <div class="row text-center mb-3">
            <div class="col-sm-12 mt-2 pl-2 pr-2">
                <a class="btn btn-yellow text-center post-contact-announcer-btn mt-2 md-text" style='padding: 0px 15px;' href="#" data-section-id=4>Contactar al anunciante</a>
            </div>
        </div>
    </div>
</div>
