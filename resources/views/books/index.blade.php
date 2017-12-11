<html>
  <body>
    <a href="/books/create">Create Book</a>
    <table>
      <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Manage</th>
          </tr>
      </thead>
      <tbody>
        @foreach($books as $book)
          <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->description}}</td>
            <td>
               
              <a href="/books/{{$book->id}}/edit"><button>Edit</button></a>
                {{ Form::open(['method' => 'DELETE', 'url' => "books/$book->id"]) }}
                    {{ Form::submit('Remove') }}
                {{ Form::close() }}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>