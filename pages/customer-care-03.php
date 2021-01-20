<?php include_once '../includes/head.php' ?>

<?php include_once '../includes/navtopbar-superadmin.php' ?>
<?php include_once '../includes/header-superadmin.php' ?>

<?php include_once '../includes/body-open.php' ?>
<main class="page-content customer_care">
  <div class="container">
    <?php include_once 'customer-care-nav.php' ?>
    <div class="lodgingModifyRegistration registrationStyle">
      <div class="header modify">
        숙소 등록 / 수정
      </div>
      <div class="body">
        <form class="type-default">
          <ul>
            <li>
              <label>
                <span class="name">숙소이름</span>
                <input type="text">
              </label>
            </li>
            <li>
              <label>
                <span class="name">주소</span>
                <input type="text">
              </label>
            </li>
            <li>
              <label>
                <span class="name">체크인/마감 시간</span>
                <input type="text" value="15:00">
                <input type="text" value="15:00">
              </label>
            </li>
            <li>
              <label>
                <span class="name">체크아웃 시간</span>
                <input type="text" value="15:00">
              </label>
            </li>
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