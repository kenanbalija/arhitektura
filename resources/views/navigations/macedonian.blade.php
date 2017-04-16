
        <!-- Sidebar -->
        <div class="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/mk/home">
                        <img style="width: 195px;" src="{{asset('img/logoWh.png')}}">
                    </a>
                </li>
                <li>
                    <a href="{{url('/mk/news')}}">Вести</a>
                </li>
                <li>
                    <a href="{{url('/mk/projects')}}">Проекти</a>
                </li>
                <li>
                    <a href="{{url('/mk/studio')}}">Студио 4a</a>
                </li>
                <li>
                    <a href="{{url('mk/contact')}}">Контакт</a>
                </li>
                <li>
                    <a href="{{url('/')}}">ENG</a>
                </li>
                <li>
                    <a href="#"><i style="position: relative; left: -15px;" class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
                    <a href="#"><i style="position: relative; left: -15px;" class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
                </li>
                @if(Auth::user())
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Одјава </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                            </form>
                </li>

                @endif
            </ul>
        </div>
         
