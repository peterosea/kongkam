<?php include_once '../includes/head.php' ?>

<?php include_once '../includes/navtopbar-superadmin.php' ?>
<?php include_once '../includes/header-superadmin.php' ?>

<?php include_once '../includes/body-open.php' ?>
<main class="page-content customer_care">
  <div class="container">
    <div class="registrationStyle">
      <div class="header modify">
        고객 등록
      </div>
      <div class="body">
        <div class="tableWrap">
          <table class="registration" border="0" cellspacing="0" cellpadding="0">
            <thead class="header">
              <tr>
                <td class="col">고객명</td>
                <td class="col">아이디</td>
                <td class="col">연락처</td>
                <td class="col">가입일</td>
                <td class="col">서비스 이용중</td>
                <td class="col">비고</td>
              </tr>
            </thead>
            <tbody class="body">
              <?php
              $row = <<<HTML
                <tr class="row">
                  <td class="col">
                    김정현
                  </td>
                  <td class="col">
                  Hehji0972
                  </td>
                  <td class="col">
                  010-6547-8520
                  </td>
                  <td class="col">
                  2021.02.01
                  </td>
                  <td class="col">
                    Y
                  </td>
                  <td class="col">
                  임페리얼 호텔
                  </td>
                </tr>
HTML;
              for ($i = 0; $i < 5; $i++) {
                echo $row;
              }
              ?>
            </tbody>
          </table>
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
  </div>
</main>
<?php include_once '../includes/body-close.php' ?>
<?php include_once '../includes/footer.php' ?>