{!! Form::open(['route' => 'books.store']) !!}
  {!! Form::label('title') !!}
  <br>
  {!! Form::input('text', 'title') !!}
  <br>
  {!! Form::label('description') !!}
  <br>
  {!! Form::textarea('description') !!}
  <br>
  {!! Form::submit('criar') !!}
{!! Form::close() !!}