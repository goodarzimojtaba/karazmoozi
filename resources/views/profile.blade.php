<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت کارآموزی </title>
    <link rel="stylesheet" href="https://yarjani19.com/assets/style_mobile.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="" alt="">
        </div>
        <style>
            @font-face {
                font-family: "Vazir";
                src: url("https://yarjani19.com/mark/fonts/Vazir.ttf")format("Truetype");
                src: url("https://yarjani19.com/mark/fonts/Vazir.woff")format("woff");
                src: url("https://yarjani19.com/mark/fonts/Vazir.woff2")format("woff2");
            }
            </style>
        <h2 style="font-family:Vazir">اطلاعات ثبت شده </h2>
        <span style="font-family:Vazir;color:green;">اطلاعات ذیل توسط شما ثبت شده است و ملاک عمل نمره ی کارآموزی و محل مراجعه بازرسان آموزش و پرورش می باشد</span>
            <label style="font-family:Vazir" >نام و نام خانوادگی</label>
            <div class="password-container">
                <input type="text" name="name" style="font-family:Vazir" value="{{$user->name}}" placeholder="" readonly>
                <i class="fas fa-eye-slash"></i>
                <label style="font-family:Vazir" >کد ملی</label>
            <div class="password-container">
                <input type="text" name="major" style="font-family:Vazir" value="{{$user->code_melli}}" placeholder="" readonly>
                <i class="fas fa-eye-slash"></i>
                <div class="password-container">
                <label style="font-family:Vazir" >نام محل کارآموزی</label>
            <div class="password-container">
                <input type="text" name="karamoozi_name"  style="font-family:Vazir" value="{{$user->profile->karamoozi_name}}"  readonly>
                <i class="fas fa-eye-slash"></i>
                <label style="font-family:Vazir" >آدرس کامل کارآموزی</label>
            <div class="password-container">
                <input type="text" name="karamoozi_address"   style="font-family:Vazir" value="{{$user->profile->karamoozi_address}}"  readonly>
                <i class="fas fa-eye-slash"></i>
                <label style="font-family:Vazir" >کد پستی کارآموزی</label>
            <div class="password-container">
                <input type="text" name="karamoozi_post" maxlength="10" style="font-family:Vazir" value="{{$user->profile->karamoozi_post}}" placeholder="کد پستی کارآموزی" readonly>
                <i class="fas fa-eye-slash"></i>
                <label style="font-family:Vazir" >نام و نام خانوادگی کارفرما</label>
            <div class="password-container">
                <input type="text" name="karfarma"  style="font-family:Vazir" value="{{$user->profile->karfarma}}" readonly>
                <i class="fas fa-eye-slash"></i>
            </div>
    </div>
</body>
</html>
