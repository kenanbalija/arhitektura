
        <!-- Sidebar -->
    <div class="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/home">
                        <img style="width: 195px;" src="{{asset('img/logoWh.png')}}">
                    </a>
                </li>
                <li>
                    <a href="{{url('news')}}">News</a>
                </li>
                <li>
                    <a href="{{url('projects')}}">Projects</a>
                </li>
                <li>
                    <a href="{{url('studio')}}">Studio</a>
                </li>
                <li>
                    <a href="{{url('contact')}}">Contact</a>
                </li>
                <li>
                    <a href="{{url('/mk')}}">MK</a>
                </li>
                <li>
                    <a href="#"><i style="position: relative; left: -15px;" class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
                    <a href="#"><i style="position: relative; left: -15px;" class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
                </li>
                @if(Auth::user())
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                            </form>
                </li>

                @endif
            </ul>
    </div>
        <!-- /#sidebar-wrapper -->
