<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Navbar</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cool Desks</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('rising_desks') }}">Rising Desks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact_us') }}">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('health_benefits') }}">Health Benefits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('basket') }}">Basket</a>
          </li>
        </ul>
        <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
          <input class="form-control me-2" type="text" name="query" placeholder="Search products..." aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</body>
</html>