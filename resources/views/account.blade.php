<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <link rel="stylesheet" href="https://yarjani19.com/assets/account.css">
</head>
<body>
<style>
            @font-face {
                font-family: "Vazir";
                src: url("https://yarjani19.com/mark/fonts/Vazir.ttf")format("Truetype");
                src: url("https://yarjani19.com/mark/fonts/Vazir.woff")format("woff");
                src: url("https://yarjani19.com/mark/fonts/Vazir.woff2")format("woff2");
            }
            </style>
    <div class="container">
        <header>
            <h1 style="font-family:Vazir">سامانه کارآموزی</h1>
        </header>
        <div class="profile">
            <div class="info">
                <h2 style="font-family:Vazir">{{$user->code_melli}}</h2>
                <p style="font-family:Vazir">{{$user->name}}</p>
                <h4 style="font-family:Vazir">{{$user->major}}</h4>
                </div>
        </div>
     
            <div class="menu-item">
                <i class="fas fa-lock"></i>
                <div>
                    <h3 style="font-family:Vazir"> کارآموزی</h3>
                    <a href="{{route('karamoozi')}}" style="font-family:Vazir">ثبت اطلاعات کارآموزی</a>
                </div>
            </div>
            <div class="menu-item">
                <i class="fas fa-plug"></i>
                <div>
                <h3 style="font-family:Vazir"></h3>
                    <a href="{{route('show_data')}}" style="font-family:Vazir">مشاهده اطلاعات ثبت شده</a>
                </div>
            </div>
            <div class="menu-item">
                <i class="fas fa-lock"></i>
                <div>
                    <h3 style="font-family:Vazir">راهنمای کارآموزی</h3>
                    <a href="{{route('karamoozi')}}" style="font-family:Vazir">دانلود راهنمای کارآموزی</a>
                </div>
            </div>
            <div class="menu-item">
                <i class="fas fa-comments"></i>
                <div>
                <h3  style="font-family:Vazir"> خروج از سامانه</h3>
                <a href="{{route('logout')}}" style="font-family:Vazir">خروج</a>
                </div>
            </div>
        </div>
        <footer>
            <p style="font-family:Vazir">Developed by: Mojtaba Goodarzi</p>
        </footer>
    </div>
</body>
</html>