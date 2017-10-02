<!DOCTYPE html>
<html>
  <head>
    <title>Jokes {{ $jokes->id }}</title>
  </head>
  <body>
    <h1>Jokes {{ $jokes->id }}</h1>
    <ul>
      <li>First Part: {{ $jokes->first_part }}</li>
      <li>Punch Line: {{ $jokes->punch_line }}</li>
    </ul>
  </body>
</html>
