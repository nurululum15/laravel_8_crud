<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="{{request()->is('/') ? 'nav-link active' :'nav-link'}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/projects" class="{{request()->is('menu') ? 'nav-link active' :'nav-link'}}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Menu
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/favorites" class="{{request()->is('favorites') ? 'nav-link active' :'nav-link'}}">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Favorites
              </p>
            </a>
          </li>
</ul>