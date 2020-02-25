@extends('templates.layout')     

@section('title','Index')

@section('content')

<section>

    <div style="margin-top:70px">
        <!-- sign in -->
        <div class="modal fade" id="sign_in">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Iniciar sesión</h4>
                        <button type="button" id='sign-in-min-btn' class="close" data-dismiss="modal">
                            <span>-</span>
                        </button>
                        <button type="button" class="icon" data-dismiss="modal">
                            <span>&#9633;</span>
                        </button>
                        <button type="button" id='sign-in-close-btn' class="close" data-dismiss="modal">
                            <span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form method="post" action="{{ route('main.sign_in') }}">
                        <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4 modal-label">
                                <label for="Email">Email</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="Email"/>
                                {!! $errors->first('Email', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            @csrf

                            <div class="row">
                                <div class="col-sm-4 modal-label">
                                    <label for="Password">Password</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="Password"/>
                                    {!! $errors->first('Password', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="button-group text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-yellow">Iniciar sesión</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="modal-forgot mt-2" href="">Olvidé mi contraseña, o mis datos</a>
                                </div>
                            </div>
                            <!-- <a href="{{ route('main.sign_in') }}" class="btn btn-info btn-block" >{{__('words.back')}}</a> -->

                        </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <!-- forgot -->

        <!-- recuperar email -->

        <!-- recuperar con cédula -->
    </div>

@endsection