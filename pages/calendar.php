<?php include_once '../includes/head.php' ?>
<link type="text/css" rel="stylesheet" href="../public/css/fullcalendar.css">
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
        <div class="inner_popup with_tail">
          <ul>
            <li><label>고객명</label>김영희</li>
            <li><label>인원</label>3명</li>
            <li><label>숙박기간</label>2박 3일</li>
            <li><label>입실</label>11월 12일</li>
            <li><label>퇴실</label>11월 15일</li>
            <li><label>예약앱</label>야놀자</li>
            <li><label>메모</label>차량 여부 및 다른 사항들</li>
          </ul>
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
        <div class="inner_popup with_tail">
          <ul>
            <li><label>고객명</label>김영희</li>
            <li><label>인원</label>3명</li>
            <li><label>숙박기간</label>2박 3일</li>
            <li><label>입실</label>11월 12일</li>
            <li><label>퇴실</label>11월 15일</li>
            <li><label>예약앱</label>야놀자</li>
            <li><label>메모</label>차량 여부 및 다른 사항들</li>
          </ul>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      // 객실관리 리스트 팝업
      const getRoom = document.querySelectorAll('.room');
      const pop = '_pop';
      for (let i = 0; i < getRoom.length; i++) {
        getRoom[i].addEventListener('click', function(e) {
          if (getRoom[i].classList.contains(pop)) {
            getRoom[i].classList.remove(pop);
          } else {
            for (let j = 0; j < getRoom.length; j++) {
              getRoom[j].classList.remove(pop);
            }
            getRoom[i].classList.add(pop);
          }
        });
      }
    </script>
  </div>
  <div class="innerWrap container">
    <div class="calendarDetailView">
      <div class="header">101호</div>
      <div class="content">
        <form class="type-default">
          <ul>
            <li>
              <label>
                <span class="name">고객명</span>
                <input type="text">
              </label>
            </li>
            <li>
              <label>
                <span class="name">전화번호</span>
                <input type="text">
              </label>
            </li>
            <li>
              <label>
                <span class="name">입실일</span>
                <input type="date">
              </label>
            </li>
            <li>
              <label>
                <span class="name">퇴실일</span>
                <input type="date">
              </label>
            </li>
            <li>
              <label>
                <span class="name">예약앱</span>
                <div class="select">
                  <select name="" id="">
                    <option value="야놀자">야놀자</option>
                  </select>
                  <img class="arrow" src="../public/img/73.png" srcset="../public/img/73@2x.png 2x, ../public/img/73@3x.png 3x">
                </div>
              </label>
            </li>
            <li>
              <label>
                <span class="name">입금상태</span>
                <div class="select">
                  <select name="" id="">
                    <option value="입금대기">입금대기</option>
                    <option value="입금완료">입금완료</option>
                  </select>
                  <img class="arrow" src="../public/img/73.png" srcset="../public/img/73@2x.png 2x, ../public/img/73@3x.png 3x">
                </div>
              </label>
            </li>
            <li class="fullWidth">
              <label class="align-flex-start">
                <span class="name">메모</span>
                <textarea name="" id="" cols="30" rows="10"></textarea>
              </label>
            </li>
            <li class="fullWidth btnListItem">
              <button type="submit" class="label _deposit">저장</button>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include_once '../includes/foot.php' ?>