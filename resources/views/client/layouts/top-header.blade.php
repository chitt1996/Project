
<div class="top-header" style="padding: 10px">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="phone dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="fa fa-globe" aria-hidden="true"></i> Language : English </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Aribce</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="social">
                    <ul>
                        <li><a href="{{ route('user.show', Auth::user()->id) }}">My Profile</a></li>
                        <li>|</li>
                        <li><a href="sign-up.html">History</a></li>
                        <li>|</li>
                        @if (Auth::check())
                            <li class="nav-item dropdown dropdown-notifications">
                                <a style="color: white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     Notification <i class="fa fa-bell"></i><span class="caret"></span>
                                </a>
                                <div style="width: 400px; min-height: 300px; padding: 20px;" class="dropdown-menu dropdown-menu-right menu-notification" aria-labelledby="navbarDropdown">
                                    @forelse (Auth::user()->notifications as $notification)
                                        <a class="dropdown-item" href="{{ route('course.show', $notification->data['course_id']) }}">
                                            <span>Bạn Đã Được Thêm Vào {{ $notification->data['name'] }}| {{ $notification->create_at }} </span><br>
                                        </a>
                                    @empty
                                        <p style="color: black;">Empty</p>
                                    @endforelse
                                </div>
                            </li>
                            <li>|</li>
                        @endif
                        @if (Auth::check())
                            <li><a id="logout">Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
