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
        <h2 style="font-family:Vazir">ثبت اطلاعات کارآموزی</h2>
        @foreach($errors->all() as $error)
        <label style="font-family:Vazir">{{$error}}</label>
@endforeach
        <form method="POST" action="{{route('valid_karamoozi')}}">
            @csrf
            <label style="font-family:Vazir" >دانش آموز</label>
            <div class="password-container">
                <input type="text" name="name" style="font-family:Vazir" value="{{$user->name}}" placeholder="" readonly>
                <i class="fas fa-eye-slash"></i>
                <label style="font-family:Vazir" >رشته</label>
            <div class="password-container">
                <input type="text" name="major" style="font-family:Vazir" value="{{$user->major}}" placeholder="" readonly>
                <i class="fas fa-eye-slash"></i>
                <label style="font-family:Vazir" class="fas fa-eye-slash" >محله ی کارآموزی</label>
                <div class="password-container">
               <select class="fas fa-eye-slash" style="font-family:Vazir"  name="area">
                <option style="font-family:Vazir">یاخچی آباد</option>
                <option style="font-family:Vazir">بهمنیار</option>
                <option style="font-family:Vazir">خانی آباد</option>
                <option style="font-family:Vazir">عبدل آباد</option>
                <option style="font-family:Vazir">آفتاب</option>
                <option style="font-family:Vazir">خارج از محدوده</option>
        </select>
               
                <label style="font-family:Vazir" >نام محل کارآموزی</label>
            <div class="password-container">
                <input type="text" name="karamoozi_name"  style="font-family:Vazir" value="{{old('karamoozi_name')}}" placeholder="مثال: مکانیکی ناصری" required>
                <i class="fas fa-eye-slash"></i>
                <label style="font-family:Vazir" >آدرس کامل کارآموزی</label>
            <div class="password-container">
                <input type="text" name="karamoozi_address"   style="font-family:Vazir" value="{{old('karamoozi_address')}}"  required>
                <i class="fas fa-eye-slash"></i>
                <label style="font-family:Vazir" >کد پستی کارآموزی</label>
            <div class="password-container">
                <input type="text" name="karamoozi_post" maxlength="10" style="font-family:Vazir" value="{{old('karamoozi_post')}}" placeholder="کد پستی کارآموزی" required>
                <i class="fas fa-eye-slash"></i>
                <label style="font-family:Vazir" >نام و نام خانوادگی کارفرما</label>
            <div class="password-container">
                <input type="text" name="karfarma"  style="font-family:Vazir" value="{{old('karfarma')}}" placeholder="نام و نام خانوادگی کارفرما" required>
                <i class="fas fa-eye-slash"></i>
            </div>

            <button style="font-family:Vazir" type="submit" name="submit" class="signup-btn">بروزرسانی اطلاعات</button>
        </form>
    </div>
</body>
</html>
