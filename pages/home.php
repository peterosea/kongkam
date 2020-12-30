<?php include_once '../includes/head.php'; ?>
<?php include_once '../includes/header.php'; ?>

<main class="home-page">
  <div class="section">
    <div class="container">
      <div class="date">2020.11.18 (수)</div>
      <ul class="allInfo">
        <li>
          <div class="count">17</div>
          <div class="title">입금대기</div>
        </li>
        <li>
          <div class="count">3</div>
          <div class="title">예약완료</div>
        </li>
        <li>
          <div class="count">0</div>
          <div class="title">예약취소</div>
        </li>
        <li>
          <div class="count">3</div>
          <div class="title">대기객실</div>
        </li>
        <li>
          <div class="count">15</div>
          <div class="title">사용중</div>
        </li>
        <li>
          <div class="count">2</div>
          <div class="title">청소중</div>
        </li>
      </ul>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="dashboard">
        <div class="gridTile">
          <div class="column checkin">
            <div class="header"><span>오늘 입실</span></div>
            <div class="content borderRight">
              <div class="listWrap">
                <table>
                  <tbody>
                    <tr>
                      <td class="time">11:00</td>
                      <td class="way">야놀자 예약</td>
                      <td class="status">
                        <div class="label _deposit">입금완료</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="time">12:30</td>
                      <td class="way">요기요 예약</td>
                      <td class="status">
                        <div class="label _deposit">입금완료</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="time">15:00</td>
                      <td class="way">전화 예약</td>
                      <td class="status">
                        <div class="label _hold">입금대기</div>
                      </td>
                    </tr>
                    <tr>
                      <td class="time">15:00</td>
                      <td class="way">요기요 예약</td>
                      <td class="status">
                        <div class="label _hold">입금대기</div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="column checkout">
            <div class="header"><span>오늘 퇴실</span></div>
            <div class="content">
              <div class="listWrap">
                <table>
                  <tbody>
                    <tr>
                      <td class="roomNumber">506호</td>
                      <td class="time">11:00</td>
                      <td class="status">퇴실 <span>(청소)</span></td>
                    </tr>
                    <tr>
                      <td class="roomNumber">507호</td>
                      <td class="time">12:30</td>
                      <td class="status">퇴실 <span>(청소)</span></td>
                    </tr>
                    <tr>
                      <td class="roomNumber">102호</td>
                      <td class="time">15:00</td>
                      <td class="status">퇴실 <span>(청소)</span></td>
                    </tr>
                    <tr>
                      <td class="roomNumber">101호</td>
                      <td class="time">15:00</td>
                      <td class="status">퇴실 <span>(청소)</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="gridTile">
          <div class="column">
            <div class="header"><span>현 객실상황</span></div>
            <div class="content">
              <div class="listWrap">
                <table class="currentRoomConditions">
                  <thead>
                    <tr>
                      <th>객실</th>
                      <th>고객</th>
                      <th>입실</th>
                      <th>퇴실</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1001</td>
                      <td>홍길동</td>
                      <td>11월 18일 13:30</td>
                      <td>11월 21일 11:00</td>
                    </tr>
                    <tr>
                      <td>1001</td>
                      <td>홍길동</td>
                      <td>11월 18일 13:30</td>
                      <td>11월 21일 11:00</td>
                    </tr>
                    <tr>
                      <td>1001</td>
                      <td>홍길동</td>
                      <td>11월 18일 13:30</td>
                      <td>11월 21일 11:00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="gridTile">
          <div class="column">
            <div class="header"><span>공지사항</span></div>
            <div class="content">
              <div class="listWrap">
                <ul class="list">
                  <li>
                    <div class="title">11 : 00 김정현 고객 3시 예약 (입금완료)</div>
                    <div class="date">20.12.25</div>
                  </li>
                  <li>
                    <div class="title">12 : 30 예약 고객 입금확인 필요</div>
                    <div class="date">20.12.25</div>
                  </li>
                  <li>
                    <div class="title">10월 미입금 내역 확인</div>
                    <div class="date">20.12.25</div>
                  </li>
                  <li>
                    <div class="title">10월 미입금 내역 확인</div>
                    <div class="date">20.12.25</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="gridTile">test</div>
      </div>
    </div>
  </div>
</main>