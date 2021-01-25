<?php include_once '../includes/head.php' ?>

<?php include_once '../includes/navtopbar-superadmin.php' ?>
<?php include_once '../includes/header-superadmin.php' ?>

<?php include_once '../includes/body-open.php' ?>
<main class="page-content customer_care">
  <div class="container">
    <?php include_once 'customer-care-nav.php' ?>
    <div class="chargingDetails registrationStyle">
      <div class="header modify">
        과금내역
      </div>
      <div class="body">
        <form class="type-default">
          <ul>
            <li class="fullWidth">
              <label>
                <span class="name">이용기간</span>
                <input type="text">
                <input type="text">
              </label>
            </li>
            <li class="fullWidth">
              <label class="amountUsed">
                <span class="name">이용금액</span>
                <div>
                  <input type="text">
                </div>
                <div class="select">
                  <select name="" id="">
                    <option value="결제완료">결제완료</option>
                    <option value="결제완료">결제완료</option>
                    <option value="결제완료">결제완료</option>
                    <option value="결제완료">결제완료</option>
                    <option value="결제완료">결제완료</option>
                  </select>
                  <img class="arrow" src="../public/img/73.png" srcset="../public/img/73@2x.png 2x, ../public/img/73@3x.png 3x">
                </div>
              </label>
            </li>
          </ul>
          <hr />
          <div class="btnListItem">
            <button type="submit" class="label _deposit">저장</button>
          </div>
        </form>
        <div class="resultTableWrap">
          <table class="resultTable" border="0" cellspacing="0" cellpadding="0">
            <thead class="row header">
              <tr>
                <td class="col">이용기간</td>
                <td class="col">이용금액</td>
                <td class="col">결제여부</td>
              </tr>
            </thead>
            <tbody class="content">
              <tr class="row">
                <td class="col">2020-06-01 ~ 2020-12-31</td>
                <td class="col">300,000</td>
                <td class="col">결제대기</td>
              </tr>
              <tr class="row">
                <td class="col">2020-06-01 ~ 2020-12-31</td>
                <td class="col">300,000</td>
                <td class="col">결제대기</td>
              </tr>
              <tr class="row">
                <td class="col">2020-06-01 ~ 2020-12-31</td>
                <td class="col">300,000</td>
                <td class="col">결제대기</td>
              </tr>
            </tbody>
          </table>
        </div>
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
      </div>
    </div>
  </div>
</main>
<?php include_once '../includes/body-close.php' ?>
<?php include_once '../includes/footer.php' ?>