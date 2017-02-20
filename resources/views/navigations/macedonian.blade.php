  <nav class="nav-side-menu">
      <div class="brand"><img src="{{ asset('img/logoWh.png') }}" alt=""></div>
      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
      <div class="menu-list">
          <ul id="menu-content" class="menu-content collapse out">
              <li>
                  <a href="{{ url('/mk/home' )}}">
                       Почетна
                  </a>
              </li>
              <li>
                  <a href="{{ url('/mk/news' )}}">
                       Новости
                  </a>
              </li>
              <li>
                  <a href="{{ url('/mk/projects' )}}">
                       Проекти
                  </a>
              </li>
              <li>
                  <a href="{{ url('/mk/studio' )}}">
                       Студио
                  </a>
              </li>
              <li>
                  <a href="{{ url('/mk/contact' )}}">
                       Контакт
                  </a>
              </li>
              <li>
                  <a href="{{ url('/home' )}}">
                       ENG
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
