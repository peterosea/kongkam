<header class="management">
  <div class="container_inner fixed_inner">
    <ul class="_nav">
      <li class="menu_item has_icon <?php if ($matches[1] == 'room_list') {
                                      echo '_active';
                                    } ?>">
        <a href="/room_list">
          <span class="_icon room_list"></span>객실 관리
        </a>
      </li>
      <li class="menu_item has_icon <?php if ($matches[1] == 'reservation_list') {
                                      echo '_active';
                                    } ?>">
        <a href="/reservation_list">
          <span class="_icon reservation_list"></span>예약 관리
        </a>
      </li>
      <li class="menu_item has_icon <?php if ($matches[1] == 'settle_list') {
                                      echo '_active';
                                    } ?>">
        <a href="#">
          <span class="_icon settle_list"></span>정산 목록
        </a>
      </li>
    </ul>
  </div>
</header>