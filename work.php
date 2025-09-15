<?php
if (!isset($_REQUEST['id'])){
    header('Location: ./works.php');
    exit();
} else {
    $title = "";
    switch($_REQUEST['id']){
        case 1:
            $title = "架空の美容室サイト";
            break;
        case 2:
            $title = "架空のマウスECサイト";
            break;
        case 3:
            $title = "スケジュール管理アプリ";
            break;
        case 4:
            $title = "つぶやきアプリ";
            break;
        case 5:
            $title = "自作キーボード配列";
            break;
        case 6:
            $title = "完全自作キーボード";
            break;
    }
}
?>
<?php require('./header.php') ?>
<div class="container">
    <?php require('./left-content.php') ?>
    <div class="main-content">
        <div class="work font-english">
            <div class="title"><h2><?php echo $title; ?></h2></div>
            <div class="work-content">
                <div class="work-img">
                    <img src="images/atelier_noir_top.png" alt="tumbnail1">
                </div>
                <div class="work-text">
                    <p>これ</p>
                </div>
            </div>
        </div>
    </div>
    <?php require('./right-content.php') ?>
</div>
<?php require('./footer.php') ?>