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
            <label style="font-family:Vazir;text-align:center;" >دانش آموز</label>
            <div class="password-container">
                <input type="text" name="name" style="font-family:Vazir;text-align:center;" value="آقای {{$user->name}}" placeholder="" readonly>
                <i class="fas fa-eye-slash"></i>
                <label  style="font-family:Vazir;text-align:center;" >ساعت کارآموزی</label>
            <div class="password-container">
                <input type="text" name="major" style="font-family:Vazir;text-align:center;" value="ساعت {{$user->hr}}" placeholder="" readonly>
                <i class="fas fa-eye-slash"></i>
                <label  style="font-family:Vazir;text-align:center;" class="fas fa-eye-slash" >محله ی کارآموزی</label>
                <div class="password-container">
               <select class="fas fa-eye-slash"  style="font-family:Vazir;text-align:center;"  name="area">
                <option style="font-family:Vazir">یاخچی آباد</option>
                <option style="font-family:Vazir">بهمنیار</option>
                <option style="font-family:Vazir">خانی آباد</option>
                <option style="font-family:Vazir">عبدل آباد</option>
                <option style="font-family:Vazir">نعمت آباد</option>
                <option style="font-family:Vazir">آفتاب</option>
                <option style="font-family:Vazir">خارج از محدوده(به شرط داشتن مجوز)</option>
        </select>
        <br>
               
                <label  style="font-family:Vazir;text-align:center;" >نام محل/مغازه کارآموزی</label>
            <div class="password-container">
                <input type="text" name="karamoozi_name" autocomplete="off"  style="font-family:Vazir;text-align:right;" value="{{old('karamoozi_name')}}"  required>
                <i class="fas fa-eye-slash"></i>
                <label  style="font-family:Vazir;text-align:center;">آدرس کامل کارآموزی</label>
            <div class="password-container">
                <input type="text" name="karamoozi_address" autocomplete="off"  style="font-family:Vazir;text-align:right;" value="{{old('karamoozi_address')}}"  required>
                <i class="fas fa-eye-slash"></i>
                <label  style="font-family:Vazir;text-align:center;" >کد پستی کارآموزی</label>
            <div class="password-container">
                <input type="text" name="karamoozi_post" autocomplete="off" maxlength="10" style="font-family:Vazir;text-align:center;" value="{{old('karamoozi_post')}}" placeholder="کد پستی کارآموزی" required>
                <i class="fas fa-eye-slash"></i>
                <label  style="font-family:Vazir;text-align:center;" > نام خانوادگی کارفرما</label>
            <div class="password-container">
                <input type="text" name="karfarma" autocomplete="off"   style="font-family:Vazir;text-align:center;" value="{{old('karfarma')}}"  required>
                <i class="fas fa-eye-slash"></i>
                <label  style="font-family:Vazir;text-align:center;" >تلفن مغازه یا موبایل کارفرما</label>
            <div class="password-container">
                <input type="text" name="shop_number" autocomplete="off" maxlength="11" style="font-family:Vazir;text-align:center;" value="{{old('shop_number')}}"  required>
                <i class="fas fa-eye-slash"></i>
            </div>

            <button style="font-family:Vazir" type="submit" name="submit" class="signup-btn">بروزرسانی اطلاعات</button>
        </form>
    </div>
</body>
</html>
