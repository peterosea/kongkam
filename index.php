<?php include_once 'includes/head.php'; ?>

    <?php
    // 페이지 URL 가져오기
    $pageUrl = basename($_SERVER["PHP_SELF"]);
    // 로그인 안했다면 로그인 페이지로
    if($pageUrl == 'index.php' || $pageUrl == 'index' || $pageUrl == ' ') {
        include_once 'pages/login.php';
    } else {
        include_once 'includes/header.php';
        ?>
        <div id="content" class="content_wrap">
            <div class="container_inner fixed_inner">
                <?php include_once 'pages/'. $pageUrl .'.php'; ?>
            </div>
        </div>
    <?php
    }
    ?>

<?php include_once 'includes/foot.php'; ?>