<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a href="{{url('/')}}" class="navbar-brand">
                <h2 class="text-white">DailyHabits</h2>
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{url('feedbacks')}}" class="nav-item nav-link">Feedback</a>
                    <div class="nav-item dropdown">
                        <div class="dropdown-menu bg-light mt-2">
                        </div>

                        @guest
                        <a class="nav-item nav-link" href="{{url('login')}}" style="color: black;">Login</a>
                        <a class="nav-item nav-link" href="{{url('register')}}" style="color: black;">Register</a>
                        @else
                        <a class="nav-item nav-link" href="{{route('logout')}}" style="color: black;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="color: black;">
                            @csrf
                        </form>
                        @endguest


                    </div>
        </nav>
    </div>
</div>