<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Brand</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Homepage</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/about">About</a></li>
		<li class="nav-item"><a class="nav-link active" aria-current="page" href="/create">Add Image</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="https://laravel.com/docs/10.x">Laravel_DOCS</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="https://laravel.su/docs/8.x/documentation">Laravel_DOCS_RUS</a></li>
      </ul>
    </div>
  </div>
</nav>
		@yield('content')
    </body>
</html>
