<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>이순명 포트폴리오(대전종합동물병원)</title>
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="./css/common.css">
    <script src="./js/header.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700&family=Nanum+Pen+Script&family=Noto+Serif+KR:wght@200;300&family=Shadows+Into+Light&display=swap');
    </style>
</head>
<body>
 
<?php
    session_start();
    if(isset($_SESSION["userid"])) $userid = $_SESSION["userid"]; //session이 설정 되어있는지 확인하는 함수 =isset 
    else $userid="";
    if(isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username="";
?>
    <div id="wrap">
        <header>
            
            <div id="main_logo">
                <img src="./images/logo.png">
                <form action="" method="POST">
                    <div id="search">
                        <input type="text" placeholder="검색어를 입력하세요..">
                        <img src="./images/search.png" alt="search_submit" id="serach_img">
                    </div>
                </form>
                    <div id="login_join">
                        <?php
                        if(!$userid){
                            ?>
                        <div id="login">
                            <img src="./images/lock.png" alt="login">
                            <a onclick="window.open('./php/pop_login_form.html','로그인','scrollbars=no,resizable=no,width=430,height=400,status=no, toolbar=no, left=550, top=200')">로그인</a>
                        </div>
                        <div id="join">
                            <img src="./images/profile.png" alt="join">
                            <a onclick="window.open('./php/pop_join_form.html','회원가입','width=500,height=500,menubar=no,status=no, scrollbars=no, left=550,top=200,resizable=no')">회원가입</a>
                        </div>
                        <?php
                    }
                        else{
                            $logged =$username."(".$userid."님".")";
                            ?>
                        <div id="logout">
                            <div id="logout_id">
                                <span><?=$logged?></span>
                            </div> 
                            <a id="loginid" href="./php/logout.php">로그아웃</a>
                        </div>    
                    <?php
                    }
                ?>
                    </div>
            </div>
            <nav>
                <ul>
                      <li>
                            <a href="animal_intro.html">병원 소개</a>
                            <ul>
                                <li><a href="animal_intro.html">인사말</a></li>
                                <li><a href="animal_staff.html">의료진 소개</a></li>
                                <li><a href="animal_facility.html">시설안내</a></li>
                                <li><a href="animal_equipment.html">보유장비</a></li>
                                <li><a href="animal_map.html">오시는 길</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="animal_guide.html">진료 안내</a>
                            <ul>
                                <li><a href="animal_guide.html">진료 안내</a></li>
                                <li><a href="animal_reserve.php">진료 예약</a></li>
                                <li><a href="animal_check.html">종합 검진</a></li>
                                <li><a href="animal_filed.html">진료 분야</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="animal_notice.php">커뮤니티</a>
                            <ul>
                                <li>
                                    <a href="animal_notice.php">공지사항</a>
                                </li>
                            </ul>
                    </li>
                </ul>
            </nav>
        </header>


        <video muted autoplay loop poster="./images/background.mp4" id="video">
            <source src="./images/Pet - 20830.mp4" type="video/mp4">
        </video>


        <section id="main">
            <p id="main_title">PHP와 Mysql을 이용하여<span>로그인</span>과&nbsp;<span>회원가입</span>구현</p>
            <p id="sub_title">DBMS를 이용하여 정보를 확인,수정,추가할 수 있습니다.<br> 로그인,회원가입,진료예약을 추가하여 리뉴얼페이지를 만들었습니다.</p>
        </section>


        <footer>
            <img src="./images/btm_logo.png">
            <img src="./images/btm_add.png">
        </footer>
    </div>
</body>
</html>