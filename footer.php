<?php
require_once('webpanelcw/config/doj_db.php');
error_reporting(0);
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if ($lang == "en") {
        $stmt = $conn->prepare("SELECT * FROM contact_en");
        $stmt->execute();
        $row_contact = $stmt->fetch(PDO::FETCH_ASSOC);
    } else if ($lang == "cn") {
        $stmt = $conn->prepare("SELECT * FROM contact_cn");
        $stmt->execute();
        $row_contact = $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        $stmt = $conn->prepare("SELECT * FROM contact");
        $stmt->execute();
        $row_contact = $stmt->fetch(PDO::FETCH_ASSOC);
    }
} else {
    $stmt = $conn->prepare("SELECT * FROM contact");
    $stmt->execute();
    $row_contact = $stmt->fetch(PDO::FETCH_ASSOC);
}


?>

<footer>
    <section id="footer-section">
        <div class="container-xxl">

            <div class="row align-items-center">

                <div class="col-lg-5">

                    <div class="row align-items-start">
                        <div class="col-md-8">
                            <h2><?php if ($lang == 'en'){echo "Contact Us";} else if ($lang == 'cn'){echo "聯繫我們";} else {echo "ติดต่อเรา";} ?></h2>
                            <ul>
                                <li class="mb-3">
                                    <b><?php if ($lang == 'en'){echo "Address";} else if ($lang == 'cn'){echo "地址";} else {echo "ที่อยู่";} ?></b><br>
                                    <?php if ($lang == 'en'){echo $row_contact['address'];} else if ($lang == 'cn'){echo $row_contact['address'];} else {echo $row_contact['address'];} ?>
                                </li>
                                <li>
                                <?php echo $row_contact['tel1']; ?> <span class="material-icons-sharp">fax</span> <?php echo $row_contact['tel2'];?>
                                </li>
                                <li>
                                <?php echo $row_contact['tel3'];?> , <?php echo $row_contact['tel4'];?>
                                </li>
                                <li>
                                <?php echo $row_contact['email'];?>
                                </li>
                            </ul>


                        </div>


                        <div class="col-md-4 text-lg-center mb-4">
                            <p class="text-white mb-2">LINE : <?php echo $row_contact['line'];?></p>

                            <img class="img-fluid mb-2" src="webpanelcw/upload/upload_contact/<?php echo $row_contact['line_qr'];?>">
                            <br>
                            <a href="<?php echo $row_contact['link_line'];?>"><img src="images/line-btn.png" width="181"></a>

                        </div>
                    </div>








                </div>
                <div class="col-lg-7 text-lg-end">


                    <div class="mb-4">
                        <h5>Social</h5>

                        <a href="#"><i class="demo-icon icon-facebook"></i></a>
                        <a href="#"><i class="demo-icon icon-instagram"></i></a>
                        <a href="#"><i class="demo-icon icon-line"></i></a>
                    </div>

                    <a href="#" class="btn btn-warning rounded-0 py-2 px-5 text-uppercase">Company profile</a>
                    <a href="#" class="btn btn-success  rounded-0 py-2 px-5 text-uppercase">Regulations Bill-receiving checks</a>


                </div>

            </div>

        </div>
    </section>


    <section id="section-copyright">
        <div class="container text-center">
            <p>
                <span>
                    <img src="images/logocw.png" alt="บริษัทรับทำเว็บไซต์" title="บริษัทรับทำเว็บไซต์">
                </span> Engine by <a href="http://www.cw.in.th/" title="บริษัทรับทำเว็บไซต์" target="_blank">CW</a> | Copyright : 2022 www.doj.com
            </p>
        </div>
    </section>


    <!-- Back to top -->
    <div class="back-top">
        <div class="scroll-line"></div>
        <span class="scoll-text text-uppercase">back to top</span>
    </div>

</footer>