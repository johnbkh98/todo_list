<html>
	<head>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
		<title>To Do List</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/a22ed12070.js" crossorigin="anonymous"></script>
	</head>
	<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/">My Todo Lists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/create">Create</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class='container'>
      <div class='container'>
        @yield('main_layout')
      </div>
    </div>
    
  </body>
</html>