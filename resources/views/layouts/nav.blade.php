@csrf
<nav class="navbar navbar-expand-lg bg-body-tertiary"
    style="background: linear-gradient(-135deg, #8795aa, #287abc);
margin:-24px 0px ;
height:35px;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="color: white;">
                        เงินสดย่อย
                    </a>
                    <style>
                        .dropdown-menu a:hover {
                            background-color: #3a589978;
                        }
                    </style>
                    <ul class="dropdown-menu" style="background-color: #287abc;">
                        @auth
                            @if (auth()->user()->role == 'adminle1')
                                <li><a class="dropdown-item" style="color: white;">Admin1 Menu</a></li>
                                <li><a class="dropdown-item" href="/cash1"
                                        style="color: white;">02.บัญชีตรวจสอบและจัดการข้อมูล</a></li>
                                <li><a class="dropdown-item" href="/cash3"
                                        style="color: white;">04.รายการที่สมบูรณ์แล้ว</a>
                                </li>
                            @elseif(auth()->user()->role == 'adminle2')
                            <li><a class="dropdown-item" style="color: white;">Admin2 Menu</a></li>
                                <li><a class="dropdown-item" href="/cash2"
                                        style="color: white;">03.อนุมัติจ่ายเงินสดย่อย</a>
                                </li>
                                <li><a class="dropdown-item" href="/cash3"
                                        style="color: white;">04.รายการที่สมบูรณ์แล้ว</a>
                                </li>
                            @elseif(auth()->user()->role == 'user')
                                <li><a class="dropdown-item" style="color: white;">User Menu</a></li>
                                <li><a class="dropdown-item" href="/cash" style="color: white;">01.สร้างใบเงินสดย่อย</a>
                                </li>
                                <li><a class="dropdown-item" href="/cash3"
                                        style="color: white;">04.รายการที่สมบูรณ์แล้ว</a>
                                </li>
                            @elseif(auth()->user()->role == 'views')
                                <li><a class="dropdown-item" href="/cash3"
                                        style="color: white;">04.รายการที่สมบูรณ์แล้ว</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
