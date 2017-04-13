<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Update Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
      <p> {{ $blog->title }} </p>
      <form name="updateBlogFrm" action="/blogs/{{ $blog->id }}" method="POST">
        {{ csrf_field() }} <!-- need to ask why it only works with this? -->
        {{ method_field('PATCH') }}

        <textarea name="id">{{ $blog->id }}</textarea> <!-- THIS NEEDS TO BE REMOVED (OR HIDDEN) -->
        <textarea name="title">{{ $blog->title }}</textarea>
        <textarea name="contents">{{ $blog->contents }}</textarea>

        <input type="submit" name="updateBlogSub" value="Update">
      </form>
    </body>
</html>
