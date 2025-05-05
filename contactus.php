<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us - Blogger World</title>
    <meta name="description" content="Blogger World dedicated to providing valuable & informative content about tech, money, web development technologies such as the HTML, CSS, JavaScript, and PHP.">
    <link rel="stylesheet" href="Styles/pages.css" />
    <link rel="stylesheet" href="Styles/hfs-nav.css" />

    <?php include 'Includs/meta.php';?>
  </head>
  <body>
    <!-- Header navbar start -->
    <?php include 'Includs/header.php';?>
    <!-- Header navbar start -->

    <!-- Main Body start -->
    <div class="content-wrapper">
      <div class="container">
        <!-- Main Blog Post Index start -->
        <main>
          <div class="thestickysidebar">
            <div class="main-section">
              <div class="widget">
                <div class="blog-posts">
                <div class="article-items">
                        <div class="article-header">
                            <h1>Contact Us</h1>
                        </div>
                        <div class="article-content">
                        <div class="contact-items">
                            <div class="contact-info c-item">
                                <div class="info">
                                    <ul class="social-icons">
                                      <li><a href="https://www.instagram.com/l.k_gmr_yt/" ><i class="bi-instagram"></i></a></li>
                                      <li><a href="https://telegram.me/invalid_programmer"><i class="bi-telegram"></i></a></li>
                                      <li><a href="https://youtube.com/@invalid_programmer"><i class="bi-youtube"></i></a></li>
                                      <li><a href="https://www.facebook.com/profile.php?id=100080225274617"><i class="bi-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contact-form c-item">
                                <form action="" method="post">
                                    <input type="text" placeholder="Full Name" name="user-name" required="">
                                    <input type="email" placeholder="Email" name="user-email" required="">
                                    <textarea placeholder="Message" name="user-message" required="" id="" cols="30" rows="10"></textarea>
                                    <input type="submit" name="register" required="" value="Send">
                                  </form>
                                  <p>You can contact us at the email below, And you can tell us your problem and ask question easily. <br>Email :- <a href="mailto:lk07062005@gmail.com">lk07062005@gmail.com</a></p>
                          </div>
                          </div>
                        </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- Main Blog Post Index end -->
        <!-- Sticky Sidebar start -->
        <aside>
          <div class="thestickysidebar">
            <div class="sidebar" id="sidebar">
              <div class="widget popularpost">
                <div class="widght-title">
                  <h3 class="title-wrap">
                    Recommended For You
                  </h3>
                </div>
                <div class="side-items">
                  <div class="side-item item-0" style="background-image: url('https://i.postimg.cc/GpKcyczS/postimg.jpg');">
                    <div class="item-title">
                      <a href="">Create & Improve Your Typing Speed with our HTML & JavaScript Tool</a>
                      <p>Wednesday, July 26, 2023</p>
                    </div>
                  </div>
                  <div class="side-item item-1">
                    <div class="side-item-image">
                      <img src="Images/postimg.jpg" alt="">
                    </div>
                    <div class="side-item-title">
                      <a href="">Create & Improve Your Typing Speed with our HTML & JavaScript Tool</a>
                      <p>Wednesday, July 26, 2023</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget lable">
                <div class="widget-title">
                  <h3 class="title">Category</h3>
                </div>
                <div class="widget-content">
                <ul class="footer-links">
                    <li><a href="money">Money</a></li>
                    <li><a href="blogs">Blogs</a></li>
                    <li><a href="html-css">HTML & CSS</a></li>
                    <li><a href="tech">Tech</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <!-- Sticky Sidebar end -->

        <!-- Footer start -->
        <?php include 'Includs/footer.php';?>
        <!-- Footer end -->
  </div>
  <!-- Mobile side menu start -->
  <?php include 'Includs/sidemenu.php';?>
  <!-- Mobile side menu end -->
</div>
<!-- Main Body end -->
</body>
</html>
<?php 
    $servername = "sql209.infinityfree.com";
    $username = "if0_34402218";
    $password = "KDMmtBHcaSrc";
    $dbname = "if0_34402218_bw";

     $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        // echo "connection ok";
    }
    else
    {
        // echo "connection faild !".mysqli_connect_error();
    }
?>

<?php
    if($_POST['register'])
    {
        $u_name = $_POST['user-name'];
        $u_email = $_POST['user-email'];
        $u_msg = $_POST['user-message'];

        $query = "INSERT INTO contact VALUES('$u_name','$u_email','$u_msg')";

        $data = mysqli_query($conn,$query);

        if($data)
        {
            // echo "indert into database";
        }
        else
        {
            // echo "indert faild into database";
        }
    }
?>
