      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                  <a href="{!!  route('home') !!}"
                      class="{{ Request::is('home*') ? 'nav-link active' : 'nav-link' }}">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                          Home
                      </p>
                  </a>
              </li>

              <li class="{{ Request::is('company') || Request::is('portfolios*') || Request::is('services*') ? 'nav-item has-treeview menu-open' : 'nav-item has-treeview' }} ">
                  <a href="#"
                      class="{{ Request::is('company') || Request::is('portfolios*') || Request::is('services*') ? 'nav-link active' : 'nav-link' }} ">
                      <i class="fas fa-cogs"></i>
                      <p>
                          Customize Site
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{!!  route('company.index') !!}"
                              class="{{ Request::is('company') ? 'nav-link active' : 'nav-link' }}">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Business Details</p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="{!!  route('portfolios.index') !!}"
                              class="{{ Request::is('portfolios*') ? 'nav-link active' : 'nav-link' }}">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Products</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{!!  route('services.index') !!}"
                              class="{{ Request::is('services*') ? 'nav-link active' : 'nav-link' }}">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Services</p>
                          </a>
                      </li>
                  </ul>
              </li>


              <li class="nav-item">
                  <a href="{!!  route('users.edit-password') !!}"
                      class="{{ Request::is('users*') ? 'nav-link active' : 'nav-link' }}">
                      <i class="nav-icon fas fa-lock-open"></i>
                      <p>
                          Change Password
                      </p>
                  </a>
              </li>


          </ul>
      </nav>
      </div>
