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
            <div class="col">숙소</div>
            <div class="col">룸 타입</div>
            <div class="col">객실 수</div>
            <div class="col">추가</div>
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
  </div>
</main>
<?php include_once '../includes/body-close.php' ?>
<?php include_once '../includes/footer.php' ?>