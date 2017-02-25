{!! Form::open(['url' => 'foo/bar']) !!}
<<<<<<< HEAD
{!! Form::label('email' , 'E-mail Address') !!}
{!! Form::text('email' , 'Luisacaviedes@gmail.com'); !!}
{!! Form::checkbox('name' , 'value'); !!}
=======
{!! Form::label('pregunta1' , '¿Qué le gusta más en nuestro nuevo servicio?') !!}<br>
{!! Form::textarea('pregunta1' , '') !!}
{!! Form::checkbox('name' , 'value') !!}
>>>>>>> origin/master
{!! Form::close() !!}
