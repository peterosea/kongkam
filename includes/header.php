<!-- Main Header -->
<header class="main_header">
    <!-- Top Menu -->
    <div class="top_nav_wrap">
        <div class="logo">
            <a href="/room_list" ></a>
        </div>
        <ul class="top_menu">
            <li class="user_name">
                <a href="#" class="_name">김정현</a>님
            </li>
            <li class="logout">
                <a href="/">LOGOUT</a>
            </li>
        </ul>
    </div>
    <!-- /.Top Menu -->
    <!-- Main Navigation -->
    <nav class="gnb">
        <div class="container_inner fixed_inner">
            <ul class="_nav">
                <li class="menu_item has_icon <?php if($matches[1] == 'room_list'){echo '_active';} ?>">
                    <a href="/room_list">
                        <span class="_icon room_list"></span>객실 관리
                    </a>
                </li>
                <li class="menu_item has_icon <?php if($matches[1] == 'reservation_list'){echo '_active';} ?>">
                    <a href="/reservation_list">
                        <span class="_icon reservation_list"></span>예약 관리
                    </a>
                </li>
                <li class="menu_item has_icon <?php if($matches[1] == 'settle_list'){echo '_active';} ?>">
                    <a href="#">
                        <span class="_icon settle_list"></span>정산 목록
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /.Main Navigation -->
</header>
<!-- /.Main Header -->