{!! Form::model($book, ['method' => 'PATCH', 'url' => "books/$book->id"]) !!}
  {!! Form::label('title') !!}
  <br>
  {!! Form::input('text', 'title') !!}
  <br>
  {!! Form::label('description') !!}
  <br>
  {!! Form::textarea('description') !!}
  <br>
  {!! Form::submit('alterar') !!}
{!! Form::close() !!}