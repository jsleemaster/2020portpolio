<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>이순명 포트폴리오</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');
        @font-face {
            font-family: 'RIDIBatang';        
                src: local('RIDIBatang'),
                url('RIDIBatang.otf')
        }/* 이 페이지는 리디주식회사에서 제공한 리디바탕 글꼴이 사용되어 있습니다*/
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="./css/index.css"/> 
    <link rel="stylesheet" href="./css/reset.css"/>
    <link rel="stylesheet" media="screen and (min-width:768px) and (max-width:1024px)"  href="./css/tablet_index.css"/>
    <link rel="stylesheet" media="screen and (min-width:376px) and (max-width:767px)" href="./css/mobile_index.css"/>
    <link rel="stylesheet" media="screen and (max-width:375px)" href="./css/small_mobile_index.css" />
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/prefixfree.min.js"></script>
    <script src="./js/smjquery.js"></script>
 
</head>
<body>
<div id="wrap">
    <div id="start_back" class="start">
        <div id="start_main" class="start">
            <p class="title_name">SunMyoung_Lee</p>
            <p class="text"></p>
        </div>
    </div>
    <header>
        <nav>
            <div id="nav_back">
                <div id="navClock"></div>
                <ul>
                    <li class="navli">
                        <a class="nav" href="#" id="aboutbtn">About</a>
                        <div class="navborder" id="navabout"></div>                        
                    </li>

                    <li class="navli">
                        <a class="nav" href="#" id="projectbtn">Projects</a>
                        <div class="navborder" id="navproject"></div>  
                    </li>

                    <li class="navli">
                        <a class="nav" href="#" id="contactbtn">Contact</a>
                        <div class="navborder" id="navcontact"></div>  
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section id="main" class="section">
            <div id="mainbackground">
                    <p id="mainclick">Click!</p>
                    <img alt="프로필" id="smlee"/>    
                <div id="bubble">
                    <div id="bubbleabout" class="bubblebox">
                        <p class="bubbletitle">안녕하십니까? 기회를 찾는 예비 개발자 이순명입니다.</p>
                        <p class="bubbletext"></p>
                    </div>

                </div>
                <div class="profilebox">
                    <button class="links" id="skillbtn" onclick="openContents(event, 'skill_content'); skillBtn();">
                        <span>My skills</span>
                    </button>
                    <button class="links" id="edubtn" onclick="openContents(event, 'skill_edu')">
                        <span>My info</span>
                    </button>
                </div>
                <div id="skill" class="tabcontents"> <!--스킬 컨텐츠에 관한 내용-->
                            <div id="skill_content" class="contentbox">
                                    <ul class="skillitem skillitem1">
                                        <p class="skill_title">Design</p>
                                        <li><span class="skill_name">Photoshop</span> 
                                            <div class="prog_back">
                                                <div class="prog" id="photoshop"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="skill_name">illust</span>
                                            <div class="prog_back">
                                                <div class="prog" id="illust"></div>
                                            </div>
                                        </li>
                                    </ul>

                                    <ul class="skillitem skillitem2">
                                        <p class="skill_title">Front-end</p>
                                        <li>
                                            <span class="skill_name">Html</span>
                                            <div class="prog_back">
                                                <div class="prog" id="html"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="skill_name">Css</span>
                                            <div class="prog_back">
                                                <div class="prog" id="Css">5%</div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="skill_name">Javascript</span>
                                            <div class="prog_back">
                                                <div class="prog" id="js">5%</div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="skill_name">Jquery</span>
                                            <div class="prog_back">
                                                <div class="prog" id="jquery">5%</div>
                                            </div>
                                        </li>
                                    </ul> 

                                    <ul class="skillitem skillitem3">
                                        <p class="skill_title">Back-end</p>
                                        <li>
                                            <span class="skill_name">Mysql</span>                                            
                                                <div class="prog_back">
                                                    <div class="prog" id="mysql">5%</div>
                                                </div>
                                        </li>
                                        <li>
                                            <span class="skill_name">Php</span>
                                                <div class="prog_back">
                                                    <div class="prog" id="php">5%</div>
                                            </div>  
                                        </li>
                                    </ul>                                   
                                </div>
                                <div id="skill_edu" class="contentbox">
                                    <ul id="nextplan" class="skillitem skillitem1">
                                        <p class="skill_title">Next Plan?</p>
                                        <li><span class="plan">React.js</span></li>
                                        <li><span class="plan">Typescript</span></li>
                                    </ul>
                                    <ul class="skillitem skillitem2">
                                        <p class="skill_title">Certificate</p>
                                        <li>정보처리기능사</li>
                                        <li>워드프로세서 1급</li>
                                        <li>ITQ한글엑셀</li>
                                        <li>컴퓨터활용능력 2급</li>
                                    </ul>
                                    <ul>
                                        <p class="skill_title">Education</p>
                                        <li>그린 컴퓨터 아트학원<br><span id="small_size">(2020-09-08~ 2021-02-08)</span></li>
                                    </ul>
                                    <ul>
                                        <p class="skill_title">Work</p>
                                        <li></li>
                                    </ul>
                                </div>
                        </div>
                     
                        <div id="project"> <!-- 프로젝트에 관한 내용-->
                            <div id="left" onclick="projectContent(-1)">
                                &lt;
                            </div>

                          

                            <div class="project_content"> <!-- 포트폴리오 반응형 페이지-->
                                <div class="page_num"></div>
                                <p class="project_content_title">포트폴리오 반응형 페이지</p>
                                <div class="project_content_img">
                                    <img src="./images/portfolio_responsive.jpg" alt="포트폴리오사진"/>
                                </div>
                                <div class="moreback" onmouseenter="zoomIn('portfolio_more')" onmouseleave="zoomOut('portfolio_more')">
                                    <span class="moreicon">?</span>
                                </div>
                                <div class="more" id="portfolio_more">
                                    <h1>#Use_Skill</h1>
                                    <p>Javascript Jquery Php Photoshop Css</p>
                                </div>
                                <p class="project_sub_title">#구현 사항</p>
                                <p class="project_coment">반응형 웹페이지 구현을 위한 media query 이용</p>
                                <p class="project_coment">media query를 이용하여 모바일 사이즈와 태블릿 사이즈에 따라 적응형과 반응형구현</p>   
                                <div id="github">
                                    <a href="https://github.com/jsleemaster/git-practice" target="_blank">
                                        <img src="./images/GitHub-Mark-Light-64px.png"/>
                                    </a> 
                                </div>
                         
                            </div>

                            <div class="project_content">
                                <div class="page_num"></div>
                                <p class="project_content_title">카카오 API 구현</p>
                                <div class="project_content_img">
                                    <img src="./images/project1_api.jpg" alt="API이미지">
                                </div>
                                <div class="moreback" onmouseenter="zoomIn('project1_api_more')" onmouseleave="zoomOut('project1_api_more')">
                                    <span class="moreicon">?</span>
                                </div>
                                <div class="more" id="project1_api_more">
                                    <h1>#Use_Skill</h1>
                                    <p>Javascript API Photoshop illustrator Css</p>
                                </div>
                                <p class="project_sub_title">#구현 사항</p>
                                <p class="project_coment">카카오 API를 이용한 책 검색 구현</p>
                                <p class="project_coment">포토샵과 일러스트를 이용하여 로고 제작 및 폰트적용</p>                                  
                                <div class="project_button">
                                    <div id="github">
                                    <a href="https://github.com/jsleemaster/Project1_api" target="_blank">
                                        <img src="./images/GitHub-Mark-Light-64px.png"/>
                                    </a> 
                                    </div>
                                    <div class="project_button1">
                                        <a href="http://roeowo123.dothome.co.kr/book_api/booksearch.html" target="_blank">더 보기</a>
                                    </div>                                  
                                </div>
                            </div>

                            <div class="project_content"> <!-- 동물병원 리뉴얼 페이지----------->
                                <div class="page_num"></div>
                                <p class="project_content_title">동물병원 리뉴얼 페이지</p>
                                <div class="project_content_img">
                                    <img src="./images/renew_animal_main.jpg" alt="리뉴얼페이지사진"/>
                                </div>
                                <p class="project_sub_title">#문제점</p>
                                <div class="moreback" onmouseenter="zoomIn('animal_more')" onmouseleave="zoomOut('animal_more')">
                                    <span class="moreicon">?</span>
                                </div>
                                <div class="more" id="animal_more">
                                    <h1>#Use_Skill</h1>
                                    <p>Javascript Jquery Php Photoshop Css</p>
                                </div>
                                <p class="project_coment">기존 사이트는 nav형식이 단순하였고 진료예약시스템이 없었습니다.</p>
                                <p class="project_sub_title">#구현 사항</p>
                                <p class="project_coment">예약기능,로그인,회원가입,구글맵을 이용한 <br>지도 추가,
                                    Light box plug-in 사용</p>    
                                <div class="project_button">
                                    <div class="project_button1">
                                        <a href="http://www.ilovepet.kr/" target="_blank">Demo</a>
                                    </div>
                                    <div class="project_button2">
                                        <a href="http://roeowo123.dothome.co.kr/animal/animal_index.php" target="_blank">Renew</a>
                                    </div>
                                </div>                
                            </div>

                            <div id="right" onclick="projectContent(1)">
                                &gt;
                            </div>
                        </div>

                           <!-- 프로젝트 세부사항-->
                        <!--              Contact                   -->
                        <div id="contact">
                            <div id="contact_header">
                                <h1 class="contact_title">Contact me!</h1>
                                <span>Thank you for watching my portfolio.</span>
                                <br>
                                <p>궁금하신 점은 연락해주시면 답장해드리겠습니다. <br>
                                <span>--이 사이트는 포트폴리오 제작을 위해 제작되었습니다.--</span></p>
                            </div>                                                     
                            <div id="contact_info">
                                <ul>
                                    <li class="contact_info_title">EMAIL</li>
                                    <li>roeowo123@naver.com</li>
                                </ul>

                                <ul>
                                    <li class="contact_info_title">TELEPHONE</li>
                                    <li>010-2934-4579</li>
                                </ul>
                            </div>
                            <div id="contact_info_mobile">
                                <h1>?</h1>
                            </div>

                            <div id="contact_content" class="contentlist">
                                <form name="contact_form" method="POST" action="./php/contact_insert.php">
                                <div id="contact_name">
                                    <p class="contact_small_title">Your NAME :</p>
                                    <input type="text" name="contact_name_input" id="namebox" placeholder="이름" >
                                </div>

                                <div id="contact_email">
                                    <p class="contact_small_title">Your Email :</p>
                                        <input type="text" name="contact_email_input" id="emailbox" placeholder="이메일" >
                                </div>

                                <div id="contact_message">
                                    <p class="contact_small_title" >Message :</p>
                                        <textarea name="contact_text" cols="30" rows="10" id="textbox"  placeholder="내용을 입력해주세요."></textarea>
                                </div>
                                </form>
                            </div>

                            <div> <!--메세지 리스트-->
                                <?php include "./php/contact_list.php";?>
                            </div>
                                <button type="button" onclick="contentList('contact_list');" id="listbox">목록</button>
                                <button type="button" onclick="contentList('contact_content'); check_input();" id="submitbox">제출하기</button>
                                <button type="button" onclick="contentList('contact_content')" id="writebox">글쓰기</button>
                        </div>
                </div>  
            <div id="imgmain2"></div>
            <div id="imgmain3"></div>
    </section>
</div>
    <script src="./js/smjavascript.js"></script>
</body>
</html>