<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Welcome to the registration system.</span>
            </li>
            <li>
            <li><a class="fa fa-sign-out" href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                   退出
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            {{--</li>--}}

                {{--<a href="login.html">--}}
                    {{--<i class="fa fa-sign-out"></i> --}}
                {{--</a>--}}
            </li>
        </ul>

    </nav>
</div>