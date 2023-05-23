<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      {{-- @if (Auth::user()->role_id == 1) --}}
      {{-- admin --}}
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
            <span data-feather="table" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">
            <span data-feather="users" class="align-text-bottom"></span>
            Users
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="book-open" class="align-text-bottom"></span>
            Books
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="server" class="align-text-bottom"></span>
            Categories
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Rent Log
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="log-out" class="align-text-bottom"></span>
            Log Out
          </a>
        </li>
        {{-- @else --}}
        {{-- client --}}
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="circle" class="align-text-bottom"></span>
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="log-out" class="align-text-bottom"></span>
              Log Out
            </a>
          </li>
      {{-- @endif --}}

    </ul>
    
    {{-- hanya bisa dilihat oleh admin --}}
    {{-- @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Administration</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="grid" class="align-text-bottom"></span>
            Post Categories
          </a>
        </li>
      </ul>
    @endcan --}}
  </div>
</nav>