<?php include_once '../includes/head.php' ?>
<header>
  <nav class="find">
    <div class="container">
      <ul class="menu-list">
        <li>
          <a href="" class="active">
            <img src="../public/img/90.png" srcset="../public/img/90@2x.png 2x, ../public/img/90@3x.png 3x">
            <span>아이디 찾기</span>
          </a>
        </li>
        <li>
          <a href="">
            <img src="../public/img/65.png" srcset="../public/img/65@2x.png 2x, ../public/img/65@3x.png 3x">
            <span>비밀번호 찾기</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<main>
  <div class="section page-find">
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
          <!-- <button type="submit">인증번호 받기</button> -->
        </form>
        <form action="" class="type-default type-authortication">
          <div class="numberPush">
            <label>
              <input type="text" placeholder="인증번호 6자리 숫자 입력">
              <span class="timer">50:12</span>
            </label>
            <button type="submit">확인</button>
          </div>
          <div class="helpWrap">
            <div class="help">
              <span>
                인증번호가 오지 않나요
              </span>
              <img src="../public/img/91.png" srcset="../public/img/91@2x.png 2x, ../public/img/91@3x.png 3x">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>