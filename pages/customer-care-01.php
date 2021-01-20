<?php include_once '../includes/head.php' ?>

<?php include_once '../includes/navtopbar-superadmin.php' ?>
<?php include_once '../includes/header-superadmin.php' ?>

<?php include_once '../includes/body-open.php' ?>
<main class="page-content customer_care">
  <div class="container">
    <div class="registration">
      <div class="header">
        <div class="col">고객명</div>
        <div class="col">아이디</div>
        <div class="col">연락처</div>
        <div class="col">가입일</div>
        <div class="col">서비스 이용중</div>
        <div class="col">비고</div>
      </div>
      <div class="content">
        <?php
        $row = <<<HTML
            <div class="row">
              <div class="col"><input type="text"></div>
              <div class="col"><input type="text"></div>
              <div class="col"><input type="text"></div>
              <div class="col"><input type="text"></div>
              <div class="col"><input type="text"></div>
              <div class="col"><input type="text"></div>
            </div>
HTML;
        for ($i = 0; $i < 5; $i++) {
          echo $row;
        }
        ?>
      </div>
      <div class="footer">
        <div class="paging">
          <button type="button" class="left">
            <i class="fas fa-chevron-left" aria-hidden="true"></i>
          </button>
          <ul class="paging-number">
            <li class="current">1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
          </ul>
          <button type="button" class="right">
            <i class="fas fa-chevron-right" aria-hidden="true"></i>
          </button>
        </div>
        <button type="button" class="customer-registration-btn">
          고객 등록
        </button>
      </div>
    </div>
  </div>
</main>
<?php include_once '../includes/body-close.php' ?>
<?php include_once '../includes/footer.php' ?>