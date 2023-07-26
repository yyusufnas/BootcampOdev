<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="header-wrapper mt-5">
                <div class="row header-content">
                    <div class="header-title col-md-8">
                        <a href="index.php">Blog Title</a>
                    </div>
                    <div class="header-menu col-md-4">
                        <ul>
                            <li>
                                <a href="index.php" style="opacity: 100%;">Home</a>
                            </li>
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                            <li>
                                <a href="adminpage.php">Admin Login</a>
                            </li>
                            

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="person-info-wrapper">
        <div class="container">
            <div class="person-info-container">
                <div class="row">
                    <div class="person-photo col-md-5">
                        <img src="IMG_7143.jpg.jpg" alt="" srcset="">
                    </div>
                    <div class="person-info-text col-md-7">
                        <div class="person-job">
                            Web Developer
                        </div>
                        <div class="person-name">
                            <h1>Yusuf Nas</h1>
                        </div>
                        <div class="person-text">
                            Merhabalar ben Yusuf Nas.Zonguldak Bülent Ecevit Üniversitesi Bilgisayar Mühendisliği 
                            1.sınıf öğrencisiyim.2022 yılından beri aktif olarak yazılım ve siber güvenlik ile uğraşıyorum.
                            1 yıldır Siber Vatan öğrencisiyim.
                    
                        </div>
                        <div class="person-social-link">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/yyusufnas"><i class="flaticon-twitter"></i></a>
                                </li>
                                
                                <li>
                                    <a href="https://www.instagram.com/yyusufnas/"><i class="flaticon-instagram"></i></a>
                                </li>
                                
                                <li>
                                    <a href="https://www.linkedin.com/in/yusuf-nas-6182a9214/"><i class="flaticon-linkedin-1"></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/yyusufnas"><i class="flaticon-github"></i></a>
                                </li>
                                <li>
                                    <a href="mailto:yyusufnass@gmail.com"><i class="flaticon-mail-1"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-post-wrapper">
        <div class="container">
            <div class="blog-post-container">
                <div class="blog-post-top-title">
                    Blog
                </div>
                <div class="blog-post-row">
                    <div class="row">
                    <?php
                        $db = new PDO("sqlite:veritaban/veritabanım.db");

                        $posts = $db->query("SELECT * FROM post");

                        foreach($posts as $post){
                    ?>

                        <div class="blog-post col-md-6">
                            <a href="blog-text.html">
                                <div class="blog-post-thumbnail">
                                    <img src="upload/<?php echo $post['postID']; ?>.jpg" alt="" >
                                </div>S
                                <div class="blog-post-text">
                                    <div class="blog-post-title">
                                        <?php echo $post['baslik']; ?>
                                    </div>
                                    <div class="blog-post-description">
                                        <?php echo $post['aciklama']; ?>
                                    </div>
                                    <div class="blog-post-meta-info">
                                        <ul>
                                            <li>
                                                <div class="blog-post-date">
                                                    1 January 2020
                                                </div>
                                                <div class="blog-post-meta-dot">
                                                    ·
                                                </div>
                                                <div class="blog-post-reading-time">
                                                    4 minute
                                                </div>
                                                <div class="blog-post-meta-dot">
                                                    ·
                                                </div>
                                                <div class="blog-post-author">
                                                    Name Surname
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                

                            
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid mt-5"></div>
            <hr>
        </div>
        <div class="container text-center mt-5 mb-5" >
            <div class="copyright">
                © 2021 All rights reserved.
            </div>   
        </div>
        
    </footer>

</body>

</html>