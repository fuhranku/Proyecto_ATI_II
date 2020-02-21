@extends('templates.layout') 

@section('title','Index')

@section('content')
<section>

    <div class="container">
        <div class="row">
            <div class="col">
                <p class="font-weight-bold m-0">Teléfonos</p>
                <p class="m-0 ml-2">+58 (0212) 362-82-68</p>
                <p class="ml-2">+58 (0414) 389-74-44</p>

                <p class="font-weight-bold m-0">Atención al público</p>
                <p class="m-0 ml-2"><strong>Lunes y viernes:</strong> de 8am a 12pm</p>
                <p class="ml-2"><strong>Sábados y domingos:</strong> de 8am a 12pm</p>

                <p class="font-weight-bold m-0">Correo electrónico</p>
                <p class="m-0 ml-2">Envíanos tus preguntas o comentarios a</p>
                <p class="ml-2">nirvana01@gmail.com</p>

                <p class="font-weight-bold m-0">Enlaces de interés</p>
                <ul class="list-unstyled ml-2">
                    <li><a href="/">Preguntas de interés</a></li>
                    <li><a href="/">Términos de servicio</a></li>
                </ul>

                <div class="row">

                    <div class="col-md-3">
                        <p class="font-weight-bold">Síguenos en</p>
                    </div>

                    <div class="col-md-6 bg-info">
                        
                        <div >
                            <a href="#" class="fa fa-facebook"></a>
                            <p class=" d-inline-block">Facebook</p>
                        </div>

                        <div >
                            <a href="#" class="fa fa-twitter"></a>
                            <p class=" d-inline-block">Twitter</p>
                        </div>

                        <div >
                            <a href="#" class="fa fa-youtube"></a>
                            <p class=" d-inline-block">Youtube</p>
                        </div>

                        <div>
                            <a href="#" class="fa fa-instagram"></a>
                            <p class=" d-inline-block">Instagram</p>
                        </div>

                        <div>
                            <a href="#" class="fa fa-linkedin"></a>
                            <p class=" d-inline-block">Linkedin</p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col">

                <div>
                    <p class="font-weight-bold">Preguntas Frecuentes</p>
                </div>

                <div class="border border-dark p-3">

                    <p class="text-center font-weight-bold">Formulario de contacto</p>
    
                    <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Para</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre y apellido">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" placeholder="Mensaje"></textarea>
                    </div>
    
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    </form>
                </div>

            </div>
            
        </div>
    </div>
    
@endsection