<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گزارش کارآموزی</title>
    <link rel="stylesheet" href="https://yarjani19.com/mark/management_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
</head>
<body>
<style>
        @font-face {
            font-family: "IRANSans";
            src: url("https://yarjani19.com/mark/fonts/IRANSans.ttf")format("truetype");
            src: url("https://yarjani19.com/mark/fonts/IRANSans.woff")format("woff");
            src: url("https://yarjani19.com/mark/fonts/IRANSans.woff2")format("woff2");

        }
    </style>
    <div class="container">
    <button onclick="exportToExcel()" style="margin-bottom: 10px;font-family:IRANSans;">📁 خروجی اکسل</button>
<h2 style="font-family:IRANSans;text-align:center;color:blue;">آمار کارآموزی های ثبت شده</h2>
        <table id="report">
            <thead>
                <tr>
                <th style="font-family:IRANSans;">کد پستی</th>
                <th style="font-family:IRANSans;">مسئول</th>
                <th style="font-family:IRANSans;">تلفن</th>
                    <th style="font-family:IRANSans;">نام محل</th>
                    <th style="font-family:IRANSans;">آدرس</th>
                    <th style="font-family:IRANSans;">محله کارآموزی</th>
                    <th style="font-family:IRANSans;">رشته</th>
                    <th style="font-family:IRANSans;">کد ملی</th>
                    <th style="font-family:IRANSans;">دانش آموز</th>
                    <th style="font-family:IRANSans;">ردیف</th>


                </tr>
            </thead>
            <tbody>
                @foreach($nama as $index=> $nama)
                <tr>
                <td style="font-family:IRANSans;"><strong>{{$nama->profile->karamoozi_post}}</strong></td>
                    <td style="font-family:IRANSans;"><strong>{{$nama->profile->karfarma}}</strong></td>
                    <td style="font-family:IRANSans;"><strong>{{$nama->Profile->shop_number}}</strong></td>
                    <td style="font-family:IRANSans;"><strong>{{$nama->profile->karamoozi_name}}</strong></td>
                    <td style="font-family:IRANSans;">{{$nama->profile->karamoozi_address}}</td>
                    <td style="font-family:IRANSans;">{{ $nama->profile->area }}</td>
                    <td style="font-family:IRANSans;">{{$nama->major}}</td>
                    <td style="font-family:IRANSans;">{{$nama->code_melli}}  </td>
                    <td style="font-family:IRANSans;">{{$nama->name}}  </td>
                    <td style="font-family:IRANSans;">{{$index+1}}  </td>
                    <td style="font-family:IRANSans;"><span class="status waiting"></span></td>
                </tr>
           @endforeach    
            </tbody>
        </table>
        <p style="font-family:IRANSans;text-size:12px;text-align:center;color:blue;"></p>
        <script>
            function exportToExcel(){
                let table= document.getElementById("report");
                let excel= XLSX.utils.table_to_book(table,{sheet:"گزارش کارآموزی"});
                XLSX.writeFile(excel,"گزارش.xlsx");
            }
            </script>
    </div>
</body>
</html>
