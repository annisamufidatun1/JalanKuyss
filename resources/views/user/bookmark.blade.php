<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JalanKuy Inc.</title>
       <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins&display=swap" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <style>
    body{
        background: #ECEADD;
    }
    .card{
        margin-top: 140px;
        position: absolute;
        width: 1292px;
        height: 260px;
        margin-left: 100px;
        border-radius: 20px;
    }
    .row{
        margin-left: 50px;
        margin-top: 36px;
    }
    .judul-halaman{
        position: absolute;
        width: 1300px;
        height: 70px;
        background: #D9D9D9;
        mix-blend-mode: darken;
        border-radius: 20px;
        left: 100px;
        top: 39px;
    }
    .judul-halaman p{
        font-family: 'Poppins';
        font-weight: 1000;
        font-size: 32px;
        color: #143362;
        margin-left: 17px;
        margin-top: 10px;
    }
    .card-footer{
        margin-left: 40px;
        margin-right: 40px;
    }
    .btn{
        position: absolute;
        width: 150px;
        height: 43px;
        background: #FFC68F;
        border-radius: 14px;
        font-family: 'Lexend';
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        align-items: center;
        text-align: center;
        color: #000000;
        margin-left: 1020px;
    }
    .card .row .card-title{
        font-family: 'Poppins';
        font-style: bolder;
        font-weight: 700;
        font-size: 32px;
        line-height: 48px;
        color: #143362;
    }
    .card .row .text .keterangan p{
        font-family: 'Lexend';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 22px;

        color: #143362;

    }
    </style>
</head>
<body>
    <div class="judul-halaman">
        <p>Bookmarks</p>
    </div>

    <div class="card" id="bookmark">
        <div class="row">
            <div class="col-xl-1.5">
                <img src="Logo Icon/poster.png" width= "133px" height="136px"/>
            </div>
            <div class="text col-xl-10">
                <h5 class="card-title">Festival Musik Pestapora</h5>
                <div class="keterangan">
                    <p> Festival Musik • Jakarta
                        <span class="date-time ml-5">
                                <iconify-icon icon="material-symbols:calendar-month-rounded" style="font-size: 24px; color: #143362; vertical-align:-5px;"></iconify-icon>
                            23-25 September 2022
                        </span>
                    </p>
                    <p class="card-text mt-2">
                        Some quick example text to build on the card title and make up the
                        bulk of the card's content --ini deskripsi--.
                    </p>
                </div>
            </div>
        </div>
        <div class="card-footer bg-transparent mt-3 ">
            <a href="/" class="btn">Detail</a>
        </div>
    </div>
<body>
</html>

