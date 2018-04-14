<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resume</title>
        <script src="./plugins/jquery-3.2.1.slim.min.js"></script>
        <link rel="stylesheet" href="./plugins/font-awesome/css/font-awesome.css">
        <style>
            @font-face{
                font-family: Chinese;
                src: local(Microsoft JhengHei);
                unicode-range: U+4E00-9FFF;
            }
            @font-face{
                font-family: English;
                src: local(Work Sans);
                unicode-range: U+00-024F;
            }
            html{
                padding: 0px;
                line-height:2em;
                font-size: 1.2em;
            }
            body{
                padding: 0px;
                margin: 0px;
                font-family: Chinese,English,sans-serif;
                /* color: #333333; */
                color: #dddddd;
            }
            h1{
                margin:0px;
            }
            .section{
                width:100%;
                height:100vh;
                margin:0px;
            }

            .home{
                background-color: #3C599B;
            }
            .home h1{
                color: #FFF;
                font-size: 6em;
                font-family: Georgia, serif;
                width: 100%;
                line-height: 100vh;
                text-align: center;
                margin: 0;
            }

            .grid-middle{
                position: relative;
                top:50%;
                transform:translateY(-50%);
                text-align:center;
            }
            .content{
                height:50vh;
                width:40vw;
                margin-left:auto;
                margin-right:auto;
            }
            .content-title{
                height:30%;
                font-size:3em;
            }
            .content-body{
                height:70%;
            }
            .content-row2{
                height:50%;
                text-align:left;
                line-height:100%;
            }
            .content-row4{
                height:25%;
            }


            .grid2{
                /* border: 1px black solid; */
                float: left;
                width: 40%;
                height: 100%;
                margin-right: 5%;
                margin-left: 5%;
            }

            .me{
                background-color: #123334;
                text-align: center;
            }
            .me-photo{
                text-align: center;
                line-height: 100%;
            }
            .me-photo img{
                max-width: 100%;
                position: relative;
                top:50%;
                transform:translateY(-50%);
            }
            .me-information{
                position: relative;
                top:50%;
                transform:translateY(-50%);
            }
            .me-table{
                margin-left: auto;
                margin-right: auto;
            }
            .me-table td{
                width:6em;
                height: 3em;
            }

            .education{
                background-color: #568594;
            }
            .education-name{
                font-size: 1.6em;
                padding-top: 0.5em;
                margin-bottom: -0.5em;
            }
            .education-duration{
                font-size:1.3em;
            }

            .skill{
                background-color: #594376;
            }
            .line-default{
                width: 100%;
                height: 40%;
                background-color: #eeeeee;
                display: block;
                margin-left:auto;
                margin-right:auto;
            }
            .line-red{

            }
            .line-blue{
                height:100%;
                width:80%;
                background-color: #57d3aa;
                display:block;
                /* animation-name: line-blue-animation; */
                animation-duration: 2s;
            }
            .line-blue2{
                height:100%;
                width:75%;
                background-color: #57d3aa;
                display:block;
                /* animation-name: line-blue-animation; */
                animation-duration: 2s;
            }
            .line-blue3{
                height:100%;
                width:70%;
                background-color: #57d3aa;
                display:block;
                /* animation-name: line-blue-animation; */
                animation-duration: 2s;
            }
            .line-yellow{

            }
            .line-dark{

            }
            @keyframes line-red-animation{
                0% {width:0%;}
                100% {width:60%}
            }
            @keyframes line-blue-animation{
                0% {width:0%;}
                100% {width:80%}
            }
            @keyframes line-blue-animation2{
                0% {width:0%;}
                100% {width:75%}
            }
            @keyframes line-blue-animation3{
                0% {width:0%;}
                100% {width:70%}
            }
            @keyframes line-yellow-animation{
                0% {width:0%;}
                100% {width:60%}
            }
            @keyframes line-dark-animation{
                0% {width:0%;}
                100% {width:60%}
            }

        </style>
        <script>
            $(document).ready(function(){
                $(window).scroll(function(){
                    var scrollVal = $(this).scrollTop();
                    var sectionVal = $(".section").height();
                    if(scrollVal>2.5*sectionVal){
                        $(".line-blue").css("animation-name","line-blue-animation");
                        $(".line-blue2").css("animation-name","line-blue-animation2");
                        $(".line-blue3").css("animation-name","line-blue-animation3");
                    }
                });
            });
        </script>
    </head>
    <body>
        <div class="section home">
            <h1>HELLO</h1>
            <!-- <h1>^ ^</h1> -->

        </div>
        <div class="section me">
            <div class="grid-middle">
                <div class="content">
                    <div class="grid2 me-photo">
                        <img src="./images/head2.jpg" alt="head photo"></img>
                    </div>
                    <div class="grid2">
                        <div class="me-information">
                            <table class="me-table" align="center">
                                <tr><td><i class="fa fa-user fa-lg"></i></td><td>Li Yu-Cheng</td></tr>
                                <tr><td><i class="fa fa-envelope fa-lg"></i></td><td>fantp@gmail.com</td></tr>
                                <!-- <tr><td><i class="fa fa-phone fa-lg"></i></td><td>(+886)901234567</td></tr> -->
                                <tr><td><i class="fa fa-globe fa-lg"></i></td><td>www.fantp6.com.tw</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="section education">
           <div class="grid-middle">
                <div class="content">
                    <div class="content-title">
                    EDUCATION
                    </div>
                    <div class="content-body">
                        <div class="content-row2">
                            <div class="content-row2 education-name">資訊工程學系 | 長庚大學</div>
                            <div class="content-row2 education-duration">2014.09 ~ 2018.06</div>
                        </div>
                        <div class="content-row2">
                            <div class="content-row2 education-name">資訊工程所 | 中央大學</div>
                            <div class="content-row2 education-duration">2018.09 ~ now</div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <div class="section skill">
           <div class="grid-middle">
                <div class="content">
                    <div class="content-title">
                    SKILL
                    </div>
                    <div class="content-body">
                        <div class="content-row4">
                            <div class="content-row2">C++</div>
                            <div class="content-row2">
                                <span class="line-default">
                                    <span class="line-blue"></span>
                                </span>
                            </div>
                        </div>
                        <div class="content-row4">
                            <div class="content-row2">JAVA</div>
                            <div class="content-row2">
                                <span class="line-default">
                                    <span class="line-blue2"></span>
                                </span>
                            </div>
                        </div>
                        <div class="content-row4">
                            <div class="content-row2">HTML/CSS</div>
                            <div class="content-row2">
                                <span class="line-default">
                                    <span class="line-blue"></span>
                                </span>
                            </div>
                        </div>
                        <div class="content-row4">
                            <div class="content-row2">PHP/JS</div>
                            <div class="content-row2">
                                <span class="line-default">
                                    <span class="line-blue3"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </body>
</html>
