<?php include_once '../includes/head.php' ?>

<?php include_once '../includes/navtopbar-superadmin.php' ?>
<?php include_once '../includes/header-superadmin.php' ?>

<?php include_once '../includes/body-open.php' ?>
<main class="page-content customer_care">
  <div class="container">
    <?php include_once 'customer-care-nav.php' ?>
    <div class="customerModifyRegistration registrationStyle">
      <div class="header modify">
        고객 등록 / 수정
      </div>
      <div class="body">
        <form class="type-default">
          <ul>
            <li>
              <label>
                <span class="name">ID</span>
                <input type="text">
              </label>
            </li>
            <li>
              <label>
                <span class="name">Password</span>
                <input type="password">
              </label>
            </li>
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
                <span class="name">서비스 이용상태</span>
                <input type="text" readonly value="이용중 (2021.01.01 ~ 2021.03.31)">
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
</main>
<?php include_once '../includes/body-close.php' ?>
<?php include_once '../includes/footer.php' ?>