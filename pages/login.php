<?php include_once '../includes/head.php' ?>

<main>
  <div class="section page-login">
    <div class="container">
      <a class="imageWrap">
        <img src="../public/img/2.png" srcset="../public/img/2@2x.png 2x, ../public/img/2@3x.png 3x">
      </a>
      <div class="formWrap">
        <form action="" class="type-default">
          <div class="login">
            <div class="id">
              <label>
                <span>아이디</span>
                <input type="text" placeholder="아이디를 입력하세요">
              </label>
            </div>
            <div class="password">
              <label>
                <span>비밀번호</span>
                <input type="password" placeholder="비밀번호를 입력하세요">
              </label>
            </div>
          </div>
          <div class="option">
            <ul class="find">
              <li>
                <a href="">
                  <img src="../public/img/94.png" srcset="../public/img/94@2x.png 2x, ../public/img/94@3x.png 3x">
                  <span>아이디 찾기</span>
                </a>
              </li>
              <li>
                <a href="">
                  <img src="../public/img/95.png" srcset="../public/img/95@2x.png 2x, ../public/img/95@3x.png 3x">
                  <span>비밀번호 찾기</span>
                </a>
              </li>
            </ul>
            <label class="squaredFour">
              <input type="checkbox" hidden />
              <div class="checkbox"></div>
              <span>자동 로그인</span>
            </label>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include_once '../includes/foot.php' ?>