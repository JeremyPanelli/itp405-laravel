<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
<<<<<<< HEAD
    <ul class="nav">
        @if (Auth::check())
            <li class="nav-item">
                <a href="/profile" class="nav-link">Profile</a>
            </li>
            <li class="nav-item">
                <a href="/logout" class="nav-link">Logout</a>
            </li>
            <li class="nav-item">
                <a href="/settings" class="nav-link">Settings</a>
            </li>
        @else
            <li class="nav-item">
                <a href="/login" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="/signup" class="nav-link">Sign Up</a>
            </li>
        @endif
        <li class="nav-item">
            <a href="/genres" class="nav-link">Genres</a>
        </li>
        <li class="nav-item">
            <a href="/tracks" class="nav-link">Tracks</a>
        </li>
    </ul>

=======
  <div class = "container-fluid">
  <ul class = "nav">
    <li class = "nav-item">
      <a href = "/login">Login </a>
    </li>
    <li class = "nav-item">
      <a href = "/signup"> Sign Up </a>
    </li>
    <li class = "nav-item">
      <a href = "/logout"> Logout</a>
    </li>
  </ul>
</div>
    <!-- <nav class="text-center">
        <a href="/genres">Genres</a>
        <a href="/tracks">Tracks</a>
    </nav> -->
>>>>>>> itp-405-laravel
    @yield('main')
</body>
</html>
