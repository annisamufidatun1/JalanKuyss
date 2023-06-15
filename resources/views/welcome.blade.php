<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn.dribbble.com/userupload/7740149/file/original-48a39c2d5d7d49ba6a384eea98e116f0.png?compress=1&resize=400x333" style="width=100%">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap');

        *{
            font-family: 'Lexend', sans-serif;
            font-size: 15px;
        }

        .container-fluid{
        }

        :root {
            --sidbar-width: 240px;
            --background-base: #ECEADD;
            --biru-paling-tua: #143362;
            --biru-tengah: #3569A5;
            --biru-muda: #69A8DB;
            --biru-paling-muda: #C9DAE8;
            --kuning: #F3E177;
            --orange-tua: #FD7B46;
            --orange-muda:#FFC68F;

        }

        #sidebar-kiri{
            background-color: yellow;
            width: 250px;
            background: white;
            border-radius: 0 25px 25px 0;
            position: -webkit-sticky;
        }

        #sidebar-kiri .logo{
            display: flex;
        }

        #sidebar-kiri .logo img{
            margin: 25px auto;
        }

        #sidebar-kiri .list{
            display: flex;
            width: 200px;
            height: 71px;
            left: 201px;
            top: 208px;
            border-radius: 22px;
            margin: 25px 25px;
            padding-left: 10px ;
        }

        #sidebar-kiri .list:hover{
            background: #FFC68F;
            transition: ease-in-out 50ms;
        }

        #sidebar-kiri .list .icon{
            /* display: flex; */
            height: 40px;
            width: 40px;
            margin: auto 0;
        }

        #sidebar-kiri .list .menu{
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 15px;
            line-height: 40px;
            display: flex;
            align-items: center;
            color: #143362;
            margin-left: 10px;
        }

        /* Dzaky Start */

        #content{
            padding: 30px;
            position: relative;
            overflow-y: scroll;
            max-height: 100%;
        }

        #content::-webkit-scrollbar{
            width:0;
        }

        #content h2{
            /* width: 300px;
            height: 48px; */
            margin: 0;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: bold;
            font-size: 25px;
            line-height: 48px;
            align-items: center;
            color: #143362;
        }

        #content h3{
            /* width: 327px;
            height: 23px; */
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 22px;
            color: #5F647E;
        }

        #content #searchbar{
            padding-right: 0;
        }

        #content #search{
            /* width: 800px;*/
            height: 50px;
            /* margin-right: 150px; */
            background: #C9DAE8;
            border-radius: 14px;
            border: none;
            outline: none;
            padding-right: 0px;
        }

        #content #search-btn{
            width: 128px;
            height: 50px;
            background: #FFC68F;
            border-radius: 14px;
            border: none;
            outline: none;
            padding: 0;
        }

        #content #filter{
            max-width: 50px;
            padding: 0;
            margin: 0 auto;
        }

        #content #notif{
            max-width: 50px;
            padding: 0;
            margin: 0 22px 0 10px;
        }

        #content #mini-profile{
            max-width: 50px;
            height: 50px;
            background-image: url("Logo Icon/Mark.svg"); /*nanti ambil dr database*/
            background-size: cover;
            border-radius: 100%;
            padding:0;
            margin-right: 15px;
        }

        #popular{
            background-color: #D9D9D9;
            mix-blend-mode: darken;
            border-radius: 20px;
            padding: 30px;
        }

        .wrapper{
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;
        }

        .wrapper::-webkit-scrollbar{
            width:0;
        }

        #discover{
            width:160px;
            background-color: #D9D9D9;
            mix-blend-mode: darken;
            border-radius: 20px;
            border: none;
            outline: none;
            display: flex;
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        #discover .card-img-top{
            padding: 15px;
        }

        #discover .card-body{
            padding:0;
        }

        #discover .card-title{
            margin: 0 15px 10px 15px
        }

        /* Dzaky-end */

        #sidebar-kanan{
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162007.jpg?w=740&t=st=1684284565~exp=1684285165~hmac=df08a23e4806ce7c2de03875c1c4471337375643ba3815704d925e0817456dbf ");
            background-size: cover;
            border-radius: 25px 0 0 25px;
        }

        #sidebar-kanan .tombol{
            grid-row: 1;
            margin-top: 10px;
        }

        #sidebar-kanan .tombol #hide{
            margin: 20px;
            height: 35px;
            width: 35px;
        }

        #sidebar-kanan .tombol #lonceng{
            float: right;
            margin: 20px;
            height: 35px;
            width: 35px;
        }

        #sidebar-kanan .profilepic{
            margin: auto auto;
            width: 120px;
            height: 120px;
            background-image: url("Logo Icon/Mark.svg"); /*nanti ambil dr database */
            background-size: cover;
            border-radius: 100%;
        }

        #sidebar-kanan #name{
            margin: 0 auto;
            margin-top: 10px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            color: #FFFFFF;
        }

        #sidebar-kanan #status{
            margin: 0 auto;
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.85);

        }

        #sidebar-kanan #intro{
            margin: auto;
            margin-top: 250px;
            height: 33px;
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 30px;
            align-items: center;
            text-align: center;
            color: rgba(255, 255, 255, 0.77);
        }

        #sidebar-kanan #generate{
            position: relative;
            margin-left: 48px;
            width: 130px;
            height: 50px;
            background: #F3E177;
            border-radius: 14px;
            color: black;
        }


        .icon iconify-icon{
            font-size: 30px;
            color:#143362;
        }

        /* esty punya */
        .list {
            cursor: pointer;
            padding: 0px;
            margin:0px;
        }

        .bg-settings {
            background-color:  white;
            margin: auto;
            border-radius: 15px;
        }

        .title-settings {
            font-family: poppins;
            font-size: 20px;
            font-weight: 900;
            color: #143362;
        }

        /* jopi punya */
        .btn {
            margin-top: 15px;
            padding: 8px 18px;
            font-weight: 600;
            margin: 10px;
            border-radius: 30px;
            border-collapse: separate;
            border-spacing: 15px 50px;
            background: var(--orange-muda);
            position: right;
            color: var(--biru-paling-tua);
            border: none;
            outline: none;
        }

        .btnkotak {
            margin-top: 15px;
            padding: 8px 18px;
            font-weight: 600;
            margin: 10px;
            border-radius: 15px;
            border-collapse: separate;
            background: var(--orange-muda);
            position: right;
            color: var(--biru-paling-tua);
            border: none;
            outline: none;
        }

        .whitecard {
            background: white;
            margin: 10px;
            border-radius: 30px;
            border-collapse: separate;
            border-spacing: 15px 50px;
        }
        .darkcard {
            background:#D9D9D9;
            margin: 10px;
            border-radius: 30px;
            border-collapse: separate;
            border-spacing: 15px 50px;
        }
        .judul1 {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 48px;
            display: flex;
            align-items: center;
            color: var(--biru-paling-tua);
            padding: 0px;
        }

        .judul2{
            left: 131px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 27px;
            line-height: 48px;
            display: flex;
            align-items: center;
            color: var(--biru-paling-tua);
        }

        .subjudul {
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
            display: flex;
            align-items: center;
            color: #5F647E;
        }
    /* jihan punya */
        .head-of-DE {
            background-color: #D9D9D9;
            color: var(--biru-paling-tua);
            padding-top: 7px;
            padding-bottom: 5px;
            padding-left: 20px;
            border-radius: 15px;
            align-items: center;
        }

        .head-of-DE a, i {
            color:var(--biru-paling-tua);
            width: 20px;
            height: 20px;
        }

        .content-of-RF {
            border-radius: 15px;
            padding-top: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
            padding-left: 30px;
            background-image: linear-gradient(rgba(255,255,255,0.6), rgba(255,255,255,0.6)), url("https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162007.jpg?w=740&t=st=1684284565~exp=1684285165~hmac=df08a23e4806ce7c2de03875c1c4471337375643ba3815704d925e0817456dbf%20");
            background-size: cover;
        }

        #sidebar-kanan{
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("https://img.freepik.com/free-vector/gradient-mountain-landscape_23-2149162007.jpg?w=740&t=st=1684284565~exp=1684285165~hmac=df08a23e4806ce7c2de03875c1c4471337375643ba3815704d925e0817456dbf ");
            background-size: cover;
            border-radius: 25px 0 0 25px;
        }

        #sidebar-kanan .profilepic{
            margin: 85px auto;
            width: 120px;
            height: 120px;
            background-image: url("Logo Icon/Profpic.svg"); /*nanti ambil dr database */
            background-size: cover;
            border-radius: 100%;
        }

        #sidebar-kanan #name{
            margin: 0 auto;
            margin-top: 10px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            color: #FFFFFF;
        }

        #sidebar-kanan #status{
            margin: 0 auto;
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.85);

        }

        #sidebar-kanan #intro{
            margin: auto;
            margin-top: 320px;
            height: 33px;
            font-family: 'Lexend';
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 30px;
            align-items: center;
            text-align: center;
            color: rgba(255, 255, 255, 0.77);
        }

        #sidebar-kanan #generate{
            position: relative;
            margin-left: 48px;
            width: 130px;
            height: 50px;
            background: #F3E177;
            border-radius: 14px;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="background-color: #eceadd; background-size: cover">
        <div class="row" id="overall">
            <div class="col-2.5" id="sidebar-kiri">
                <div class="logo" id="logo">
                    <img src="https://cdn.dribbble.com/userupload/7740475/file/original-1c2b7b06e20f7bc7575aa8c140e77724.png?compress=1&resize=600x400" alt="" style="max-width: 149px; height: auto;">
                </div>

                <div class="list">
                    <div class="icon">
                        <iconify-icon icon="bx:home-alt"></iconify-icon>
                    </div>
                    <div class="menu">
                        Dashboard
                    </div>
                </div>

                <div class="list">
                    <div class="icon" style="margin-top: 10px; vertical-align: 7em;">
                        <iconify-icon icon="ci:paper-plane"></iconify-icon>
                    </div>

                    <div class="menu">
                        Discovery
                    </div>
                </div>

                <div class="list">
                    <div class="icon">
                        <iconify-icon icon="material-symbols:collections-bookmark-outline"></iconify-icon>
                    </div>

                    <div class="menu">
                        Bookmark
                    </div>
                </div>

                <div class="list">
                    <div class="icon">
                        <iconify-icon icon="mdi:event-add"></iconify-icon>
                    </div>

                    <div class="menu">
                        Register Event
                    </div>
                </div>

                <div class="list">
                    <div class="icon">
                        <iconify-icon icon="eva:settings-2-outline"></iconify-icon>
                    </div>

                    <div class="menu">
                        Settings
                    </div>
                </div>

            </div>
            <div class="col" id="content">
                <div class="container-fluid">
                    <div class="row" id="overall">
                        <div class="col" id="content">
                            <h2>Hello!</h2>
                            <h3>Do you want to explore the world?</h3>

                            <form>
                                <div class="row">
                                    <div class="col-7" id="searchbar">
                                        <input type="text" class="container-fluid" id="search" name="cari" placeholder="Search for your favourite destination" value="{{ old('cari') }}">
                                    </div>

                                    <div class="col-2" id="searchbar" action="/dashboard/results" method="GET">
                                        <button type="submit" class="search-btn" id="search-btn">
                                            Search
                                        </button>
                                    </div>

                                    <div class="col-1" id="filter">
                                        <!--  <iconify-icon icon="ic:outline-notifications-none"></iconify-icon> -->
                                        <iconify-icon icon="ri:equalizer-line" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 14px; padding: 5px;"></iconify-icon>
                                    </div>

                                    <div class="col-1" id="notif">
                                        <iconify-icon icon="ic:outline-notifications-none" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 100%; padding: 5px;"></iconify-icon>
                                    </div>

                                    <div class="col-1" id="mini-profile">
                                        <!-- <img src="Logo Icon/Mark.svg" alt=""> -->
                                    </div>
                                </div>
                            </form>

                            <h2>Popular Today</h2>

                            <div class="container-fluid" id="popular">

                                <div class="row">
                                    <div class="col-4">
                                        <img src="Logo Icon/Poster.svg" alt="" style="height: 220px; width: 220px; margin-left:20px">
                                    </div>
                                    <div class="col-8">
                                        <h5 style="font-family: 'Poppins'; font-weight: 700; font-size: 28px; color: #143362">(Nama Event)</h5>
                                        <p style="font-size: 20px; vertical-align:middle; margin:10px 0">
                                            <iconify-icon icon="ion:location-outline" style="font-size: 30px; color: black; vertical-align:middle"></iconify-icon> (Location)
                                        </p>
                                        <p style="font-size: 20px; vertical-align:middle; margin:0">
                                            <iconify-icon icon="ant-design:star-filled" style="font-size: 30px; color: black; vertical-align:middle"></iconify-icon> (rating)
                                        </p>
                                        <p style="color:#5F647E; margin-top: 10px">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit in quas cumque unde rem nesciunt amet ipsum itaque..
                                        </p>
                                        <button type="button" class="btn" style="background-color: #FFC68F; border-radius: 10px ">
                                            Detail
                                        </button>
                                        <button type="button" class="btn" style="background-color: #FD7B46; border-radius: 10px; margin-left: 10px">
                                            Get a Ticket
                                        </button>

                                    </div>
                                </div>

                            </div>

                            <h2>Discover World</h2>
                                <div class="wrapper">
                                    <div class="card" id="discover">
                                        <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">(Nama Event)</h6>
                                        </div>
                                    </div>

                                    <div class="card" id="discover">
                                        <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">(Nama Event)</h6>
                                        </div>
                                    </div>

                                    <div class="card" id="discover">
                                        <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">(Nama Event)</h6>
                                        </div>
                                    </div>

                                    <div class="card" id="discover">
                                        <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">(Nama Event)</h6>
                                        </div>
                                    </div>

                                    <div class="card" id="discover">
                                        <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">(Nama Event)</h6>
                                        </div>
                                    </div>

                                    <div class="card" id="discover">
                                        <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">(Nama Event)</h6>
                                        </div>
                                    </div>

                                    <div class="card" id="discover">
                                        <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">(Nama Event)</h6>
                                        </div>
                                    </div>

                                    <div class="card" id="discover">
                                        <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">(Nama Event)</h6>
                                        </div>
                                    </div>

                                    <div class="card" id="discover">
                                        <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">(Nama Event)</h6>
                                        </div>
                                    </div>

                                    <div class="card" id="discover">
                                        <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">(Nama Event)</h6>
                                        </div>
                                    </div>

                                    <div class="card" id="discover">
                                        <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">(Nama Event)</h6>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-2" id="sidebar-kanan">
                <div class="profilepic">
                    <img src="" alt="">
                </div>

                <div class="text-center" id="intro">
                    <p>Login to explore more!</p>
                </div>
                <a href="{{ route('login') }}">
                <button type="button" class="btn" id="generate">
                    Sign In
                </button>
                </a>
            </div>
        </div>
    </div>

    <script>
        function show() {
          document.getElementById("sidebar-kanan").style.width = "300px";
        //   document.getElementById("content").style.marginLeft = "250px";
        }

        function hide() {
          document.getElementById("sidebar-kanan").style.width = "0";
        //   document.getElementById("content").style.marginLeft = "0";
        }

        $(document).ready(function () {
          $("#hide").click(function () {
            $("#sidebar-kanan").toggle();
            $("#content").toggleClass("ml-0");
          });
        });

        $(document).ready(function () {
          $("#mini-profile").click(function () {
            $("#sidebar-kanan").toggle();
            $("#content").toggleClass("");
          });
        });

        </script>
</body>
</html>



{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}
