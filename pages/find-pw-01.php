<?php include_once '../includes/head.php' ?>

<?php include_once '../includes/header-find.php' ?>

<?php include_once '../includes/body-open.php' ?>

<main>
  <div class="section page-find password">
    <div class="container">
      <div class="pageHeader">
        <h2 class="title"></h2>
        <p>비밀번호를 찾고자 하는 아이디를 입력해 주세요.</p>
      </div>
      <div class="content">
        <form action="" class="type-default">
          <div class="idWrap">
            <label>
              <input type="text" placeholder="네이버 아이디 또는 단체 아이디" class="fullWidth">
            </label>
          </div>
          <button type="submit">인증번호 받기</button>
          <div class="helpWrap">
            <div class="help">
              <span>
                아이디가 기억나지 않는다면? 아이디 찾기 바로가기
              </span>
              <img src="../public/img/93.png" srcset="../public/img/93@2x.png 2x, ../public/img/93@3x.png 3x">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include_once '../includes/body-close.php' ?>
<?php include_once '../includes/footer.php' ?>