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
        <div class="gridTile">test</div>
        <div class="gridTile">testt</div>
        <div class="gridTile">test</div>
      </div>
    </div>
  </div>
</main>