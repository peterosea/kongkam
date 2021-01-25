<?php include_once '../includes/head.php' ?>

<?php include_once '../includes/navtopbar-superadmin.php' ?>
<?php include_once '../includes/header-superadmin.php' ?>

<?php include_once '../includes/body-open.php' ?>
<main class="page-content customer_care">
  <div class="container">
    <?php include_once 'customer-care-nav.php' ?>
    <div class="roomTypeLease registrationStyle">
      <div class="header modify">
        객실타입 리스
      </div>
      <div class="body">
        <div class="table">
          <div class="header">
            <div class="col name">숙소</div>
            <div class="col room-type">룸 타입</div>
            <div class="col room">객실 수</div>
            <div class="col add">추가</div>
          </div>
          <div class="row">
            <div class="col name">
              L타워
            </div>
            <div class="col room-type">
              <div class="wrap">
                <div class="type">스탠다드 룸</div>
                <div class="type">팬트하우스</div>
              </div>
            </div>
            <div class="col room">
              <div class="wrap">
                <div class="count">12</div>
                <div class="count">2</div>
              </div>
            </div>
            <div class="col add">
              <button type="buttn" class="label _deposit">
                객실타입 추가
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col name">
              팔레드 시티
            </div>
            <div class="col room-type">
              <div class="wrap">
                <div class="type">스탠다드 룸</div>
                <div class="type">팬트하우스</div>
              </div>
            </div>
            <div class="col room">
              <div class="wrap">
                <div class="count">12</div>
                <div class="count">2</div>
              </div>
            </div>
            <div class="col add">
              <button type="buttn" class="label _deposit">
                객실타입 추가
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="roomTypeDetail registrationStyle">
      <div class="header modify">
        팔레드시티
      </div>
      <form class="body type-default">
        <div class="row">
          <div class="header col">
            스탠다드 룸
          </div>
          <div class="col content">
            <ul>
              <li class="two-label">
                <label>
                  <span class="name">방 개수</span>
                  <input type="number" value="3">
                </label>
                <label>
                  <span class="name">가격</span>
                  <input type="text" value="150,000">
                </label>
              </li>
              <li>
                <label class="roomLabel">
                  <span class="name">객실</span>
                  <div class="roomInput">
                    <input type="text" value="101호">
                    <input type="text" value="102호">
                    <input type="text" value="103호">
                    <button type="button"><img src="../public/img/165.png" srcset="../public/img/165@2x.png 2x, ../public/img/165@3x.png 3x"></button>
                  </div>
                </label>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="header col">
            팬트하우스
          </div>
          <div class="col content">
            <ul>
              <li class="two-label">
                <label>
                  <span class="name">방 개수</span>
                  <input type="number" value="3">
                </label>
                <label>
                  <span class="name">가격</span>
                  <input type="text" value="150,000">
                </label>
              </li>
              <li>
                <label class="roomLabel">
                  <span class="name">객실</span>
                  <div class="roomInput">
                    <input type="text" value="101호">
                    <input type="text" value="102호">
                    <input type="text" value="103호">
                    <button type="button"><img src="../public/img/165.png" srcset="../public/img/165@2x.png 2x, ../public/img/165@3x.png 3x"></button>
                  </div>
                </label>
              </li>
            </ul>
          </div>
        </div>

        <div class="btnListItem">
          <button type="submit" class="label _deposit">저장</button>
        </div>
      </form>
    </div>
  </div>
</main>
<?php include_once '../includes/body-close.php' ?>
<?php include_once '../includes/footer.php' ?>