<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>
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
        <h2 style="font-family:Vazir">سامانه دانش آموزی</h2>
        @foreach($errors->all() as $error)
        <label style="font-family:Vazir">{{$error}}</label>
@endforeach
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label style="font-family:Vazir">کد ملی</label>
            <input type="number" name="code_melli" maxlength="12" style="font-family:Vazir" value="{{old('code_melli')}}" placeholder="کد ملی" required>
            
            <label style="font-family:Vazir" >سال تولد</label>
            <div class="password-container">
                <input type="text" name="birth" maxlength="4" style="font-family:Vazir" value="{{old('birth')}}" placeholder="مثال: 1385 " required>
                <i class="fas fa-eye-slash"></i>
            </div>


            <button style="font-family:Vazir" type="submit" name="submit" class="signup-btn">ورود به سامانه</button>
        </form>
    </div>
</body>
</html>
