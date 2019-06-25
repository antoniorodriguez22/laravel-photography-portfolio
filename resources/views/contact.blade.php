@extends('layout')

@section('title', 'Contacto')


@section('content')

  <div class='Row'>
    <div class='col-md-12 col-lg-12 col-xl-12 pt-5 mt-5 text-white text-center'>
      <h1 class='w3-animate-bottom'>&iquest;Quieres saber m&aacute;s acerca de mi trabajo? &iexcl;Cont&aacute;ctame!</h1>
    </div>
  </div>

  <div class='row'>
    <div class='col-md-3 col-lg-3 col-xl-3 text-white text-center'>
    </div>

    <div class='col-md-6 col-lg-6 col-xl-6 text-white text-center w3-animate-bottom'>

          <form class="text-center py-3 px-4" method="post" action="{{route('contact.store')}}">
            @csrf

            @if(session()->has('message'))
                <h6 class="success">
                    {{ session()->get('message') }}
                </h6>
            @endif

            <div class="form-group">
              <h3><label for="namefield">Nombre: </label></h3>
              <input type="text" class="form-control" id="namefield" placeholder="Nombre" name='name' value="{{old('name')}}">
              {!!$errors->first('name','</br><span class="error"><small>:message</small></span></br>')!!}
            </div>


          <div class="form-group">
              <h3><label for="emailfield">Correo Electr&oacute;nico: </label>  </h3>
            <input type="email" class="form-control" id="emailfield" placeholder="Correo Electr&oacute;nico" name='emailAddress' value="{{old('emailAddress')}}">
            {!!$errors->first('emailAddress','</br><span class="error"><small>:message</small></span></br>')!!}
          </div>


          <div class="form-group">
              <h3><label for="commentfield">Comentarios:</label>  </h3>
            <textarea class="form-control" id="commentfield" rows="5" placeholder="Escribe un comentario..." name="comment" >{{old('comment') }}</textarea>
              {!!$errors->first('comment','</br><span class="error"><small>:message</small></span></br>')!!}
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-danger">Enviar</button>
          </div>

        </form>
  </div>

  <div class='col-md-3 col-lg-3 col-xl-3 text-white text-center'>
  </div>
  </div>

@endsection
