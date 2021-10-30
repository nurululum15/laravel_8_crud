<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/home" class="{{request()->is('home') ? 'nav-link active' :'nav-link'}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="projects" class="{{request()->is('projects') ? 'nav-link active' :'nav-link'}}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Projects
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="projects/favorites" class="{{request()->is('projects/favorites') ? 'nav-link active' :'nav-link'}}">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Favorites
              </p>
            </a>
          </li>
</ul>