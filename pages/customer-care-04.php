<?php include_once '../includes/head.php' ?>

<?php include_once '../includes/navtopbar-superadmin.php' ?>
<?php include_once '../includes/header-superadmin.php' ?>

<?php include_once '../includes/body-open.php' ?>
<main class="page-content customer_care">
  <div class="container">
    <?php include_once 'customer-care-nav.php' ?>
    <div class="accommodationList registrationStyle">
      <div class="header modify">
        숙소리스트
      </div>
      <div class="body">
        <ul>
          <li>
            <div class="accommodation">
              <div class="name">팔레드시티</div>
              <div class="room">객실 <span class="count">20</span>개</div>
            </div>
          </li>
          <li>
            <div class="accommodation">
              <div class="name">L타워</div>
              <div class="room">객실 <span class="count">12</span>개</div>
            </div>
          </li>
          <li>
            <div class="accommodation add">
              <img src="../public/img/156.png" srcset="../public/img/156@2x.png 2x, ../public/img/156@3x.png 3x">
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php include_once '../includes/body-close.php' ?>
<?php include_once '../includes/footer.php' ?>