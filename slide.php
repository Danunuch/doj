<?php
require_once('webpanelcw/config/doj_db.php');


$stmt = $conn->prepare("SELECT * FROM slide_img");
$stmt->execute();
$row_slide_img = $stmt->fetchAll();


$_SESSION['lang'] = "";
if (isset($_GET['lang']) && $_GET['lang'] != "") {
    $_SESSION['lang'] = $_GET['lang'];
    $lang = $_GET['lang'];
    if ($_SESSION['lang'] == "en") {
        $stmt = $conn->prepare("SELECT * FROM slide_text_en");
        $stmt->execute();
        $row_slide_text = $stmt->fetchAll();
    } else if ($_SESSION['lang'] == "cn") {
        $stmt = $conn->prepare("SELECT * FROM slide_text_cn");
        $stmt->execute();
        $row_slide_text = $stmt->fetchAll();
    } else {
        $stmt = $conn->prepare("SELECT * FROM slide_text");
        $stmt->execute();
        $row_slide_text = $stmt->fetchAll();
    }
} else {
    $stmt = $conn->prepare("SELECT * FROM slide_text");
    $stmt->execute();
    $row_slide_text = $stmt->fetchAll();
}


?>





<!-- Start WOWSlider.com BODY section -->
<!-- add to the <body> of your page -->
<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            <?php for ($i = 1; $i <= 3; $i++) { ?>
                <li>
                    <img src="webpanelcw/upload/upload_slide/<?php echo $row_slide_img[0]['img']; ?>" alt="DOJ Industrial Co., Ltd. " title="" id="wows1_$i" />
                    <?php echo $row_slide_text[0]['slide_text']; ?>
                </li>
                <li> <img src="webpanelcw/upload/upload_slide/<?php echo $row_slide_img[1]['img']; ?>" alt="DOJ Industrial Co., Ltd. " title="" id="wows1_1" />
                    <?php echo $row_slide_text[0]['slide_text']; ?>
                </li>
                <li> <img src="webpanelcw/upload/upload_slide/<?php echo $row_slide_img[2]['img']; ?>" alt="DOJ Industrial Co., Ltd. " title="" id="wows1_2" />
                    <?php echo $row_slide_text[0]['slide_text']; ?>
                </li>
        </ul><?php } ?>
    </div>
    <div class="ws_bullets">
        <div>
            <a href="#" title="DOJ Industrial Co., Ltd. "><span>1</span></a>
            <a href="#" title="DOJ Industrial Co., Ltd. "><span>2</span></a>
            <a href="#" title="DOJ Industrial Co., Ltd. "><span>3</span></a>
        </div>
    </div>
    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery image slider</a> by
        WOWSlider.com v9.0</div>
    <div class="ws_shadow"></div>

</div>