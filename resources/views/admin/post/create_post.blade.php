<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>new one</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
  <body>
    <div id="app">
      <v-app>
        @include('includes.toolbar')
        <new-post></new-post>
    </v-app>
  </div>
  <script src="{{asset('js/app.js')}}" defer>
  </script>
  </body>
</html>
