  <nav class="nav-side-menu">
      <div class="brand"><img src="{{ asset('img/logoWh.png') }}" alt=""></div>
      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
      <div class="menu-list">
          <ul id="menu-content" class="menu-content collapse out">
              <li>
                  <a href="{{ url('/home' )}}">
                       Home
                  </a>
              </li>
              <li>
                  <a href="{{ url('/news' )}}">
                       News
                  </a>
              </li>
              <li>
                  <a href="{{ url('/projects' )}}">
                       Projects
                  </a>
              </li>
              <li>
                  <a href="{{ url('/studio' )}}">
                       Studio
                  </a>
              </li>
              <li>
                  <a href="{{ url('/contact' )}}">
                       Contact
                  </a>
              </li>
              <li>
                  <a href="{{ url('/mk' )}}">
                       МК
                  </a>
              </li>
              <li>
                  <a href="#">
                       <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
                  </a>
                  <a href="">
                       <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
                  </a>
              </li>
          </ul>
      </div>
  </nav>
