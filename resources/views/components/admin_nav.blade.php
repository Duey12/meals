<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">Meal</a>
      </li>
      @if(Auth::user()->roleid==1)
      <li class="nav-item">
        <a class="nav-link" href="/studentselection">Student Selection</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/categories">Categories</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="/myselections">My Selections</a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="/logout">logout</a>
      </li>
    </ul>
  </div>
</div>
</nav>
