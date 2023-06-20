 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
              <span data-feather="file-text" class="align-text-bottom"></span>
             My Posts
            </a>
          </li>
        </ul>
        @can('isAdmin')
        <h6 class="text-muted justify-content-between align-items-center mt-4 mb-2 px-3 d-flex">
            Administrator
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : ''}}" href="/dashboard/categories">
              <span data-feather="grid" class="align-text-bottom"></span>
                    Post Categories
            </a>
            </li>
        </ul>
        @endcan

      </div>
    </nav>
