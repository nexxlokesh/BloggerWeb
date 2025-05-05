<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HTML & CSS - Blogger World</title>
    <meta name="description" content="Blogger World dedicated to providing valuable & informative content about tech, money, web development technologies such as the HTML, CSS, JavaScript, and PHP.">
    <link rel="stylesheet" href="Styles/index.css" />
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
                <div class="title-wrap">
                <h3 class="title">HTML & CSS <i class="bi bi-chevron-right"></i></h3>
                </div>
                <div class="blog-posts">

                  <article class="blog-post post-0">
                    <div class="post-img box">
                        <img src="Images/postimg.jpg" alt="">
                    </div>
                    <div class="post-header box">
                        <h2 class="title"><a href="">Facebook Login Page Clone: Creat it Yourself with HTML & CSS</a></h2>
                        <div class="published">
                          <span>Wednesday, July 26, 2023</span>
                        </div>
                        <p>Welcome to the world of boundless conceivable outcomes and information! In this ever evolving co…</p>
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
        <!-- Main Blog Post Index end -->

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
