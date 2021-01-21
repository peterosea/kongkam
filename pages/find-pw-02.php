<?php include_once '../includes/head.php' ?>

<?php include_once '../includes/header-find.php' ?>

<?php include_once '../includes/body-open.php' ?>

<main>
  <div class="section page-find password">
    <div class="container">
      <div class="pageHeader">
        <h2 class="title">회원정보에 등록한 휴대전화로 인증</h2>
        <p>회원정보에 등록한 휴대전화 번호와 입력한 휴대전화 번호가 같아야, 인증번호를 받을 수 있습니다.</p>
      </div>
      <div class="content">
        <form action="" class="type-default">
          <ul>
            <li>
              <label>
                <span>이름</span>
                <input type="text">
              </label>
            </li>
            <li>
              <label>
                <span>휴대전화</span>
                <div class="phone">
                  <div class="select">
                    <select name="" id="">
                      <option value="010">010</option>
                      <option value="011">011</option>
                    </select>
                    <img class="arrow" src="../public/img/73.png" srcset="../public/img/73@2x.png 2x, ../public/img/73@3x.png 3x">
                  </div>
                  <input type="tel" placeholder="휴대전화번호">
                </div>
              </label>
            </li>
          </ul>
          <hr>
          <button type="submit">인증번호 받기</button>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include_once '../includes/body-close.php' ?>
<?php include_once '../includes/footer.php' ?>