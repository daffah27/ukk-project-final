<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item m-1">
          <a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}"  href="/dashboard">
                        Dashboard
          </a>
        </li>
        <li class="nav-item m-1">
          <a class="nav-link {{ Request::is('pengaduan*') ? 'active' : '' }}" href="/pengaduan">
                          Pengaduan
          </a>
        </li>
        <li class="nav-item m-1">
          <a class="nav-link {{ Request::is('masyarakat*') ? 'active' : '' }}" href="/masyarakat">
                        Masyarakat
          </a>
        </li>
        <li class="nav-item m-1">
          <a class="nav-link {{ Request::is('petugas*') ? 'active' : '' }}" href="/petugas">
                        Petugas / Admin
          </a>
        </li>

      </ul>

<form action="/logout" method="post">
@csrf
<button type="submit" class="ms-3 m-1 flex-column btn btn-outline-danger">Log out</button>
</form>

  </nav>

      @can('admin')
      <h6 class="d-flex sidebar-heading justify-content-start align-items-start text-muted px-3 mt-4 mb-1 ">Administrator</h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/kategori*') ? 'text-danger' : 'text-dark' }} text-decoration-none" aria-current="page" href="/dashboard/kategori">
            <span data-feather="home" class="align-text-bottom"></span>
            Kategori
          </a>
        </li>
      </ul>

      @endcan


    </div>
  </nav>
