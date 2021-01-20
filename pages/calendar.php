<?php include_once '../includes/head.php' ?>
<link type="text/css" rel="stylesheet" href="../public/css/fullcalendar.css">

<?php include_once '../includes/navtopbar-default.php' ?>
<?php include_once '../includes/header-management.php' ?>

<?php include_once '../includes/body-open.php' ?>
<div class="calendarContainer">
  <div class="innerWrap container">
    <?php include_once './calendarSource.php' ?>
  </div>
  <div class="innerWrap container mobileOnly">
    <div class="toolbar">
      <div class="fc-center">
        <!-- HTML 커스텀 start -->
        <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
          <i class="fas fa-chevron-left" aria-hidden="true"></i>
        </button>
        <h2>18일 (금)</h2>
        <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right">
          <i class="fas fa-chevron-right" aria-hidden="true"></i>
        </button>
        <!-- HTML 커스텀 end -->
      </div>
    </div>

    <div class="room_list">
      <div class="room">
        <div class="inner_wrap">
          <div class="number">
            <span>104호</span>
          </div>
          <div class="text_wrap">
            <ul class="_text">
              <li class="people">정아인님 외 2명</li>
              <li class="date"></li>
              <li class="password"></li>
            </ul>
            <div class="label_grp">
              <span class="label _reserve">예약</span>
              <span class="label _hold">입금대기</span>
            </div>
          </div>
        </div>
        <div class="inner_popup">
          <?php include('calendarDetailView.php') ?>
        </div>
      </div>
      <div class="room">
        <div class="inner_wrap">
          <div class="number">
            <span>104호</span>
          </div>
          <div class="text_wrap">
            <ul class="_text">
              <li class="people">정아인님 외 2명</li>
              <li class="date"></li>
              <li class="password"></li>
            </ul>
            <div class="label_grp">
              <span class="label _reserve">예약</span>
              <span class="label _deposit">입금완료</span>
            </div>
          </div>
        </div>
        <div class="inner_popup">
          <?php include('calendarDetailView.php') ?>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      // 객실관리 리스트 팝업
      const getRoom = document.querySelectorAll('.room .inner_wrap');
      const pop = '_pop';
      for (let i = 0; i < getRoom.length; i++) {
        getRoom[i].addEventListener('click', function(e) {
          if (getRoom[i].parentElement.classList.contains(pop)) {
            getRoom[i].parentElement.classList.remove(pop);
          } else {
            for (let j = 0; j < getRoom.length; j++) {
              getRoom[j].parentElement.classList.remove(pop);
            }
            getRoom[i].parentElement.classList.add(pop);
          }
        });
      }
    </script>
  </div>
  <div class="container desktopOnly">
    <?php include('calendarDetailView.php') ?>
  </div>
</div>
<?php include_once '../includes/body-close.php' ?>
<?php include_once '../includes/footer.php' ?>