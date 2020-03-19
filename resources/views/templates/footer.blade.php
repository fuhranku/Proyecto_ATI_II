<footer>
    <div class="navbar navbar-expand-md">
        <!-- One of the primary actions on mobile is to call a business - This displays a phone button on mobile only -->
        <div class="navbar-toggler-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        </div>

        <div class="collapse navbar-collapse flex-column" id="navbar">
            <!-- First navbar ROW -->
            <ul class="navbar-nav bg-white ml-auto h-100 mr-2 mb-n1">
                
                @if (Session::has('info') && Session::has('info_specific'))
                    <li class="nav-item mr-4">
                    <div class='row'>
                        <div class="col-md-4">
                            <img src="{{asset('images/avatar_default.png')}}" alt="avatar image" class="avatar-image">
                        </div>
                        <div class='col-md-8 font-weight-bold ml-0 pl-0'>
                            <div class="row">
                                <span class="log-in-text" id='header_user_name'>
                                    @if (Session::get('info')->person_type == 'nat')
                                        {{ Session::get('info_specific')->name }} {{ Session::get('info_specific')->last_name }}
                                    @else
                                        {{ Session::get('info_specific')->name_rep }} {{ Session::get('info_specific')->last_name_rep }} 
                                        {{-- {{ Session::get('info_specific')->name_comp }} --}}
                                    @endif
                                </span>
                            </div>
                            <div class="row">
                                <span class="log-in-text" id='header_user_mail'>
                                    {{ Session::get('info')->email }}
                                    @if (Session::get('info')->person_type == 'nat')
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                        
                </li>
                    @endif

                @if (!Session::has('info'))
                <li class="nav-item">
                    <a class="nav-link mx-3 btn-yellow ry-corners mr-2 mt-1 pr-3 pl-3 sign_in_button">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 btn-yellow ry-corners mt-1 pr-3 pl-3 ml-n2" href="{{ url('sign_up') }}">Registrarse</a>
                </li>
                @else
                <li class="nav-item dropdown" id='nav-item-dropdown'>
                    <a class="nav-link mx-3 dropdown-toggle btn-yellow ry-corners ml-2 mr-2 mt-1 pr-5 pl-5" href="#" id="navbarUser" role="button" data-toggle="dropdown">Usuario</a>
                    <div class="dropdown-menu mt-n1 ml-3 user-dropdown ml-2 pt-0 pb-0" aria-labelledby="navbarUser">
                        <a class="dropdown-item user-option font-weight-bold p-2" href="{{ url('user_data') }}"> Datos de usuario </a>
                        <a class="dropdown-item user-option font-weight-bold p-2" href="{{  action('SignInController@logout') }}"> Cerrar sesión </a>
                    </div>
                </li>
                @endif
            </ul>
            <!-- Second navbar ROW -->
            <ul class="navbar-nav justify-content-center w-100 bg-blue">
                <li class="nav-item active mr-7">
                     <a class="nav-link" href="{{ url('index') }}">Inicio</a>
                </li>
                <li class="nav-item mr-7 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarServices" role="button" data-toggle="dropdown">Vivienda</a>

                    <div class="dropdown-menu" aria-labelledby="navbarServices">
                        {{-- <a class="dropdown-item" href="{{ url('dwelling/publish') }}">Publicar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/look') }}">Ver Publicaciones</a>
                        <a class="dropdown-item" href="{{ url('dwelling/search') }}">Buscar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/modify') }}">Modificar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/delete') }}">Eliminar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/enable') }}">Habilitar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/enable') }}">Deshabilitar</a> --}}
                        
                        @if (Session::has('info'))
                        <a class="dropdown-item" href="{{ url('dwelling/publish') }}">Publicar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/publication') }}">Ver Publicaciones</a>
                        @endif
                        <a class="dropdown-item" href="{{ url('dwelling/search') }}">Buscar</a>
                    
                        @if (Session::has('info'))
                        <a class="dropdown-item" href="{{ url('dwelling/modify') }}">Modificar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/delete') }}">Eliminar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/enable') }}">Habilitar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/disable') }}">Deshabilitar</a>
                        @endif
                    </div>
                </li>
                <li class="nav-item mr-7 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarServices" role="button" data-toggle="dropdown">Servicios</a>

                    <div class="dropdown-menu" aria-labelledby="navbarServices">
                        <a class="dropdown-item" href="{{ url('services/create') }}">Crear</a>
                        <a class="dropdown-item" href="{{ url('services/search') }}">Buscar</a>
                        <a class="dropdown-item" href="{{ url('services/consult') }}">Consultar</a>
                        <a class="dropdown-item" href="{{ url('services/modify') }}">Modificar</a>
                        <a class="dropdown-item" href="{{ url('services/delete') }}">Eliminar</a>
                    </div>
                </li>
                <li class="nav-item mr-7">
                    <a class="nav-link" href="{{ url('employment') }}">Empleo</a>
                </li>
                <li class="nav-item mr-7">
                    <a class="nav-link" href="{{ url('help') }}">Ayuda</a>
                </li>
                <li class="nav-item mr-7">
                    <a class="nav-link" href="{{ url('contact_us') }}">Contáctenos</a>
                </li>
                <li class="nav-item mr-7">
                    <a class="nav-link" href="{{ url('about_us') }}">Conócenos más</a>
                </li>
                <li class="nav-item mr-7">
                    <a class="nav-link" href="{{ url('languages') }}">Idioma</a>
                </li>
            </ul>
        </div>
    </div>
</footer>