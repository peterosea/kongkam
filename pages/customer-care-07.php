<?php include_once '../includes/head.php' ?>

<?php include_once '../includes/navtopbar-superadmin.php' ?>
<?php include_once '../includes/header-superadmin.php' ?>

<?php include_once '../includes/body-open.php' ?>
<div class="customer_care popup">
  <div class="container inner">
    <div class="search">
      <form class="type-default">
        <ul>
          <li>
            <label>
              <span class="name">주 관리자 ID</span>
              <input type="text">
            </label>
          </li>
          <li>
            <label>
              <span class="name">주 관리자 이름</span>
              <input type="text">
            </label>
          </li>
        </ul>
        <div class="btnListItem">
          <button type="submit" class="label">검색</button>
        </div>
      </form>
    </div>
    <div class="table">
      <div class="row header">
        <div class="col checkbox">선택</div>
        <div class="col number">번호</div>
        <div class="col managerId">주 관리자 ID</div>
        <div class="col managerName">주 관리자 이름</div>
        <div class="col buildingName">건물 이름</div>
      </div>
      <div class="content">
        <?php
        for ($i = 1; $i < 5; $i++) {
          echo <<<HTML
          <div class="row">
            <div class="col checkbox">
              <input type="checkbox">
            </div>
            <div class="col number">
              $i
            </div>
            <div class="col managerId">Jlab0982</div>
            <div class="col managerName">김정현</div>
            <div class="col buildingName">유토피아 호텔</div>
          </div>
HTML;
        }
        ?>
      </div>
    </div>
    <div class="btnListItem">
      <button type="submit" class="label _deposit">저장</button>
      <button type="submit" class="label cancel">취소</button>
    </div>
  </div>
</div>
<?php include_once '../includes/body-close.php' ?>
<?php include_once '../includes/footer.php' ?>