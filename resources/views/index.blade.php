<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FGO:5th</title>
    <!-- link css 順序 1.bs 2.self -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="{{asset('assets\img\Marie Antoinette (Summer) 1.png')}}" sizes="32x32" type="image/png">
    {{-- <link rel="icon" href="./icon/Marie Antoinette (Summer) 1.png" sizes="32x32" type="image/png"> --}}
    <link rel="stylesheet" href="{{asset('assets\css\css.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets\css\css.css')}}"> --}}
    <!-- 字體 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Zen Old Mincho", serif;
            font-weight: 400;
            font-style: normal;
        }

        .font-bold {
            font-weight: bold;
        }
    </style>
</head>


{{-- {{asset('assets\img\'}} --}}
<body class="bg-blue">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg  fixed-top nav-w bg-nav">
        <div class="container-fluid ">
            <a class="navbar-brand " href="#"><img src="{{asset('assets\img\Marie Antoinette (Summer) 1.png')}}" alt=""
                    class="logo "></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active highlight-hover fs-bold " aria-current="home" href="#home">FGO:5th</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active highlight-hover fs-bold zen-old-mincho-regular"
                            aria-current="Shizuoka" href="#Shizuoka">静岡</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active highlight-hover fs-bold" aria-current="Saitama" href="#Saitama">埼玉</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active highlight-hover fs-bold" aria-current="Ibaraki" href="#Ibaraki">茨城</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active highlight-hover fs-bold" aria-current="Hokkaido"
                            href="#Hokkaido">北海道</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active highlight-hover fs-bold" aria-current="Shiga" href="Shiga">滋賀</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link active highlight-hover fs-bold" href="#footer">聯絡我</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- header h -->
    <div class="container-fluid header-h">

    </div>

    <!-- home -->
    <!-- <div id="page1"></div> -->
    <!-- Carousel -->
    <div class="container-fluid " id="home">
        <div class="row">
            <!-- col- -->
            <!--  -->

            <div class="col">
                <!-- 旋轉木馬 -->
                <!-- Carousel -->
                <div id="demo" class="carousel slide vh-100" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active cas"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="cas"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="cas"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="3" class="cas"></button>
                        <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="4" class="cas"></button> -->

                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner rounded-5">
                        <div class="carousel-item active">
                            <img src="{{asset('assets\img\shizuoka.jpg')}}" alt="Shizuoka" class="d-block  img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets\img\Saitama.jpg')}}" alt="Saitama" class="d-block  img-fluid">
                            {{-- <img src="./icon/Saitama.jpg" alt="Saitama" class="d-block  img-fluid"> --}}
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets\img\Ibaraki.jpg')}}" alt="Ibaraki" class="d-block  img-fluid">
                            {{-- <img src="./icon/Ibaraki.jpg" alt="Ibaraki" class="d-block  img-fluid"> --}}
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets\img\HokkaidoFurano.jpg')}}" alt="Hokkaido" class="d-block  img-fluid">
                            {{-- <img src="./icon/HokkaidoFurano.jpg" alt="Hokkaido" class="d-block  img-fluid"> --}}
                        </div>
                        <!-- <div class="carousel-item">
                            <img src="./icon/Shiga.jpg" alt="Shiga" class="d-block  img-fluid">
                        </div> -->
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev " type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!-- Shizuoka -->
    <div class="page-space"></div>

    <div class="container-fluid container1-vh " id="Shizuoka">
        <div class="h-100">
            <div class="row h-100 d-flex ">
                <!-- <div class="col-1 "></div> -->
                <!-- icom -->
                <div class="col-7 ">
                    <img src="{{asset('assets\img\shizuoka.jpg')}}" class="img-fluid img-radius" alt="Shizuoka" title="Shizuoka">
                </div>
                <!-- text -->
                <div class="col-5  h-100 ">
                    <div class="  text-center text-possion rwd-font">
                        <h3 class="font-bold mt-5">静岡県</h2>
                            <div class="mt-1">富士山南麓</div>
                            <div class="mt-5">葛飾北斎</div>
                            <div class="mt-2 rwd-text ">「こっからってのはとと様も描いてねぇだろぉ？」</div>

                    </div>
                    <!-- <div class="d-block d-md-none ">
                        <h2 font-bold>静岡</h2>
                        <h4>富士山南麓</h4>
                        <h2>静岡</h2>
                        <h4>「こっからってのはとと様も描いてねぇだろぉ？」</h4>
                    </div> -->
                </div>
                <!-- <div class="col-1 "></div> -->
            </div>
        </div>
    </div>
    <!-- Saitama -->
    <div class="pageII-space Saitama"></div>
    <div class="container-fluid container1-vh  Saitama" id="Saitama">
        <div class="h-100">
            <div class="row h-100 d-flex ">
                <!-- <div class="col-1 "></div> -->
                <!-- icom -->
                <!-- text -->

                <div class="col-5  h-100 ">
                    <div class="  text-center text-possion rwd-font Saitama-font-color">
                        <h4 class="font-bold mt-5">埼玉県</h4>
                        <div class="mt-1">首都圏外郭放水路</div>
                        <div class="mt-5">エレシュキガル</div>
                        <div class="mt-2 rwd-text ">「現世の地下も、中々のものなのだわ！」</div>
                    </div>
                </div>
                <div class="col-7 ">
                    <img src="{{asset('assets\img\Saitama.jpg')}}" class="img-fluid img-radius" alt="Shizuoka" title="Shizuoka">
                </div>
            </div>
        </div>
    </div>
    <!-- Ibaraki -->
    <div class="pageII-space"></div>
    <div class="container-fluid container1-vh " id="Ibaraki">
        <div class="h-100">
            <div class="row h-100 d-flex ">
                <!-- <div class="col-1 "></div> -->
                <!-- icon -->
                <div class="col-7 ">
                    <img src="{{asset('assets\img\Ibaraki.jpg')}}" class="img-fluid img-radius" alt="Ibaraki" title="Ibaraki">
                </div>
                <!-- text -->

                <div class="col-5  h-100 ">
                    <div class="  text-center text-possion rwd-font">
                        <h4 class="font-bold mt-5">茨城県</h4>
                        <div class="mt-1">偕楽園</div>
                        <div class="mt-5">加藤段蔵</div>
                        <div class="mt-2 rwd-text ">「これは・・・！まさに幻術要らずでございます」</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hokkaido -->
    <div class="pageII-space Hokkaido"></div>
    <div class="container-fluid container1-vh Hokkaido" id="Hokkaido">
        <div class="h-100">
            <div class="row h-100 d-flex ">
                <!-- <div class="col-1 "></div> -->
                <!-- text -->

                <div class="col-5  h-100 ">
                    <div class="  text-center text-possion rwd-font font-color-w">
                        <h4 class="font-bold mt-5">北海道</h4>
                        <div class="mt-1">富良野</div>
                        <div class="mt-5">マーリン</div>
                        <div class="mt-2 rwd-text ">「素敵な花畑じゃないか！ところで美しいご婦人はどこに？」</div>
                    </div>
                </div>
                <!-- icon -->
                <div class="col-7 ">
                    <img src="{{asset('assets\img\Hokkaido.jpg')}}" class="img-fluid img-radius" alt="Hokkaido" title="Hokkaido">
                </div>
            </div>
        </div>
    </div>
    <!-- Shiga -->

    <div class="pageII-space Hokkaido"></div>


    <div class="col-5">
        <select id="locationSelect" class="form-select form-select-lg">
            <!-- <option value=""></option> -->
        </select>
    </div>
    <div class="container-fluid mt-5 h-table">
        <div class="row">

            <div class="col-10">
                <table class="table " id="myTable">
                    <thead>
                        <tr class="rwd-textII">
                            <th>地區</th>
                            <th>溫度</th>
                            <th>降雨機率</th>
                            <th>舒適度指數</th>
                            <th>時間</th>
                        </tr>
                    </thead>
                    <tbody class="rwd-textII">
                        <!-- <tr>
                          <td>John</td>
                          <td>Doe</td>
                          <td>john@example.com</td>
                          <td>john@example.com</td>
                        </tr>
                        <tr>
                          <td>Mary</td>
                          <td>Moe</td>
                          <td>mary@example.com</td>
                        </tr>
                        <tr>
                          <td>July</td>
                          <td>Dooley</td>
                          <td>july@example.com</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div class="col-1">

                <div class="align-items-md-end ">
                    <div class="rwd-text">
                        溫度：<span id="tempValue">--</span>°C
                    </div>

                    <!-- <p class="rwd-font">當前溫度</p> -->
                    <div class="thermometer ">
                        <div class="temperature" id="tempBar" style="height: 0;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="pageII-space Hokkaido"></div> -->
    <div class="footer-space Hokkaido"></div>

    <!-- footer -->
    <div id="footer" class="container-fluid footer-hight ">
        <div class="row  align-items-center">
            <div class="col text-center fs-2 mt-5">
                聯絡我
                <div class="rwd-font">

                    地址:新北市泰山區貴子里致遠新村55之1號
                </div>
            </div>
        </div>
        <div class="row h-25">

            <!-- =====================icons======================== -->
            <div class="col icons m-auto">
                <a href="#footer" class="a-box">
                    <i class="bi bi-line fs-1 text-success"></i>

                </a>
                <a href="#footer" class="a-box">
                    <i class="bi bi-twitch fs-1 text-murasaki"></i>

                </a>
                <a href="#footer" class="a-box">
                    <i class="bi bi-discord  dc fs-1"></i>

                </a>
                <a href="#footer" class="a-box">
                    <i class="bi bi-twitter-x fs-1 text-dark"></i>

                </a>
                <!-- <i class="bi bi-facebook fs-1 text-primary"></i> -->
                <a href="https://github.com/maplesift" class="a-box" target="_blank">
                    <i class="bi bi-github fs-1 text-dark"></i>
                </a>

            </div>
        </div>

        <footer class="row text-center copyright vh-25">
            <div class="col fs-5 mt-3">
                <!-- Copyright © 2024 maplesift All rights reserved. -->

            </div>
        </footer>
    </div>
    <a href="#top" id="back-to-top"><i class="bi bi-arrow-90deg-up fs-5"></i></a>

    <!-- js include 順序 1.bs 2.jq 3.self -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
    {{-- <script src="{{asset('assets\js\pwd.js')}}"></script> --}}
    <script>
        let locationsData = []; // 儲存所有地區的氣象資料

        const myTable = $('#myTable');
        const myTbody = myTable.find('tbody');
        const locationSelect = $('#locationSelect');
        let url = `https://opendata.cwa.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization={{$pw}}}`
        let url1 = `https://opendata.cwa.gov.tw/api/v1/rest/datastore/F-D0047-069?Authorization={{$pw}}`
        function fetchTemperature() {
            $.ajax({
                type: "get",
                url: url1,
                dataType: "json",
                success: function (res) {
                    let Locations = res.records.Locations[0];
                    locationsData = Locations.Location; // 儲存所有地區

                    // 清空 select 選單
                    locationSelect.empty().append('<option value="0">請選擇地區</option>');
                    // 將所有地區名稱加入 <select>
                    locationsData.forEach((location, index) => {
                        locationSelect.append(`<option value="${index}">${location.LocationName}</option>`);
                    });

                    console.log("地區列表已更新");

                }
            });
        }

        // 監聽地區選擇變更
        $('#locationSelect').on('change', function () {
            let selectedIndex = $(this).val();
            if (selectedIndex === "") return; // 如果沒有選擇地區則不執行

            const myTbody = $('#myTable tbody');
            myTbody.empty(); // 清空表格

            let data = locationsData[selectedIndex];
            let WeatherElement = data.WeatherElement;

            // 溫度
            let Temperature = WeatherElement[0].Time[0].ElementValue[0].Temperature;
            // console.log(Temperature, 'Temperature');

            // 降雨機率 
            let ProbabilityOfPrecipitation = WeatherElement[7].Time[0].ElementValue[0].ProbabilityOfPrecipitation;
            // console.log(ProbabilityOfPrecipitation, 'ProbabilityOfPrecipitation');

            // 舒適度指數
            let ComfortIndexDescription = WeatherElement[4].Time[0].ElementValue[0].ComfortIndexDescription;
            // console.log(ComfortIndexDescription, 'ComfortIndexDescription');

            // 時間
            let DataTime = WeatherElement[0].Time[0].DataTime;
            // console.log(DataTime, 'DataTime');

            let tmp = `
            <tr>
                <td>${data.LocationName}</td>
                <td>${Temperature}°C</td>
                <td>${ProbabilityOfPrecipitation}%</td>
                <td>${ComfortIndexDescription}</td>
                <td>${DataTime}</td>
            </tr>
        `;
            myTbody.append(tmp);
            $("#tempValue").text(Temperature);  // 顯示數字溫度
            updateThermometer(Temperature); // 更新溫度計
        });

        document.addEventListener('DOMContentLoaded', () => {
            const backToTop = document.getElementById('back-to-top');

            window.addEventListener('scroll', () => {
                const scrollTop = window.scrollY || document.documentElement.scrollTop;
                const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrollPercent = (scrollTop / windowHeight) * 100;

                if (scrollPercent > 10) {
                    backToTop.style.opacity = '1'; // 設為完全不透明
                    backToTop.style.visibility = 'visible'; // 顯示按鈕
                    backToTop.style.transform = 'translateY(0)'; // 回到原始位置
                } else {
                    backToTop.style.opacity = '0'; // 設為完全透明
                    backToTop.style.visibility = 'hidden'; // 隱藏按鈕
                    backToTop.style.transform = 'translateY(50px)'; // 下移回初始位置
                }
            });
        });

        function updateThermometer(Temperature) {
            let minTemp = -10;  // 最低溫度（可調整）
            let maxTemp = 40;   // 最高溫度（可調整）
            let height = ((Temperature - minTemp) / (maxTemp - minTemp)) * 100;
            // 
            if (height < 0) height = 0;
            if (height > 100) height = 100;

            $("#tempBar").css("height", height + "%");
        }

        // 頁面加載時獲取溫度
        $(document).ready(function () {
            fetchTemperature();
            setInterval(fetchTemperature, 1200000);  // 每 20 分鐘更新一次
        });

        $(document).ready(function () {

        });
    </script>
</body>

</html>