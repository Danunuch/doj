<?php if (!isset($_SESSION)) {
  session_start();
}   ?>
  
  
  <header>
    <!-- Start Navigation -->
    <nav hidden>
      <div class="nav-header">
        <a href="index.php" class="brand" title="รับเหมา ระบบไฟฟ้าอาคาร ระบบสุขาภิบาล ระบบปรับอากาศ ระบบดับเพลง  ระบบไฟฟ้า"><img src="images/logo.png" /></a>
        <button class="toggle-bar">
          <span class="material-icons-outlined">
            menu
          </span>
          Menu
        </button>
      </div>
      <ul class="menu">
        <li><a href="index<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else if($_GET['lang'] == 'cn'){echo '?lang=cn';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Home";
                              }
                              if ($_GET['lang'] == "cn") {
                                echo "主頁";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "หน้าแรก";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "หน้าแรก";
                            } ?></a></li>


        <li><a href="about<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else if($_GET['lang'] == 'cn'){echo '?lang=cn';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "About Us";
                              }
                              if ($_GET['lang'] == "cn") {
                                echo "關於我們";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "เกี่ยวกับเรา";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "เกี่ยวกับเรา";
                            } ?></a></li>

                            
        <li><a href="service<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else if($_GET['lang'] == 'cn'){echo '?lang=cn';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Services";
                              }
                              if ($_GET['lang'] == "cn") {
                                echo "服務";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "บริการ";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "บริการ";
                            } ?></a></li>


        <li><a href="project<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else if($_GET['lang'] == 'cn'){echo '?lang=cn';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Project References";
                              }
                              if ($_GET['lang'] == "cn") {
                                echo "過去的作品";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ผลงานที่ผ่านมา";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ผลงานที่ผ่านมา";
                            } ?></a></li>


        <li><a href="product<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else if($_GET['lang'] == 'cn'){echo '?lang=cn';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Product";
                              }
                              if ($_GET['lang'] == "cn") {
                                echo "產品";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ผลิตภัณฑ์";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ผลิตภัณฑ์";
                            } ?></a></li>


        <li><a href="contact<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else if($_GET['lang'] == 'cn'){echo '?lang=cn';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "Contact Us";
                              }
                              if ($_GET['lang'] == "cn") {
                                echo "聯繫我們";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ติดต่อเรา";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ติดต่อเรา";
                            } ?></a></li>

        <li><a href="new<?php if(isset($_GET['lang'])){if($_GET['lang'] == "en"){echo '?lang=en';}else if($_GET['lang'] == 'cn'){echo '?lang=cn';}else{echo '?lang=th';}}else{echo "";} ?>"><?php if (isset($_GET['lang'])) {
                              if ($_GET['lang'] == "en") {
                                echo "News & Blog";
                              }
                              if ($_GET['lang'] == "cn") {
                                echo "新聞和博客";
                              }
                              if ($_GET['lang'] == "th") {
                                echo "ข่าวและบล็อก";
                              } else {
                                echo "";
                              }
                            } else {
                              echo "ข่าวและบล็อก";
                            } ?></a></li>

      </ul>
      <ul class="attributes">
        <li><a href="?lang=en" <?php
                                if (!isset($_GET['lang'])) {
                                  echo "class='not_active'";
                                } else if (isset($_GET['lang'])) {
                                  $lang = $_GET['lang'];
                                  if ($lang == 'en') {
                                    echo "class='active'";
                                  } else {

                                    echo "class='not_active'";
                                  }
                                } ?>><img class="flag" src="images/uk.png"></a></li>
        <li><a href="?lang=th" <?php
                                if (!isset($_GET['lang'])) {
                                  echo "class='not_active'";
                                } else if (isset($_GET['lang'])) {
                                  $lang = $_GET['lang'];
                                  if ($lang == 'th') {
                                    echo "class='active'";
                                  } else {

                                    echo "class='not_active'";
                                  }
                                } ?>><img class="flag" src="images/thailand.png"></a></li>
        <li><a href="?lang=cn" <?php
                                if (!isset($_GET['lang'])) {
                                  echo "class='not_active'";
                                } else if (isset($_GET['lang'])) {
                                  $lang = $_GET['lang'];
                                  if ($lang == 'cn') {
                                    echo "class='active'";
                                  } else {

                                    echo "class='not_active'";
                                  }
                                } ?>><img class="flag" src="images/china.png"></a></li>

      </ul>
    </nav>
    <!-- End Navigation -->

  </header>