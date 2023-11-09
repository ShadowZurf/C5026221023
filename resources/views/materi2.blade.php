<html>
    <head>
        <h1 style="text-align: center;text-shadow: 2px 2px cyan;">Week 2 pweb gez</h1>
    <title>CSS (minggu ke 2)</title>
    <link rel="stylesheet" href="mystyle.css">
        <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color : rgb(125, 71, 5);
        }
        p{
            text-align: center;
        }
        h1{
            color : darkblue
        }
        .salam {
            font-size: 20;
            text-align: right;
            font-weight: bold;
            text-transform: uppercase;
        }
        .garisbawah {
            text-decoration: underline;
            color : orange;
        }
        </style>
    </head>

    <body>
        <!--Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda-->
        Hallo <b style="color:red;text-decoration: underline;">apa</b> kabar <b style="background-color:aqua ;">gez</b>
        <!--Inpage CSS, digunakan jika yang berbeda hanya di 1 halaman-->
        <div class="garisbawah salam">Hallo apa kabar gez</div>
        <!--External file, digunakan untuk global 1 situs-->
        <span class="sembunyi">Hallo apa kabar gez </span>
        <p> apa kabar gez, hari ini aku lagi kelas pweb C, kalian lagi apa, udah makan kah, aku udh makan, aku
            <b style="background-color: rgb(253, 119, 119);">suka</b> orang yang ada di kelas ini.</p>
    </body>
</html>
