<html>

    <head>
        <title>jawa skrip cuy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showalert() {
            alert("Selamat woyyy!!!! anda berhasil mendapatkan hatinya <3");
            alert("dijaga baik2 yah kids!!!");
            alert("Semoga langgenggg !!!!!!!!!!!!!!");
        }
        function changeText() {
           //var tulisanlama = document.getElementById(""):
            var span = document.getElementById("output"); //membaca isi tulisan lama di span
            var textBox = document.getElementById("textbox"); //membaca tulisan yg baru
            textBox.style.color = "red"; //mengubah warna font dari teks box
            textBox.style.background = "yellow";
            span.innerHTML = textBox.value;
            // innerHTML = mengubah text secara runtime
            // .value = membaca isi komponen form
            console.log("hey kamuuu") ;
            console.log("nama kamu " + textBox.value + " kan!");
        }

    </script>
    <script src="operasi.js"></script>
    </head>

    <body>
        <div class="container">
            <center><button class="btn btn-primary" onclick="showalert();">Klik woy cepet!!!!!</button></center>
            <br>

            <span id="output">isi namamu cuy</yspan>
            <input id="textbox" type="text" class="form-control"/>
            <br>
            <button onclick="changeText();" class="btn btn-success">Click me!</button>
            <br>
            <div class="form-group">
                <label for="bil1">bilangan 1</label>
                <input type="number" id="bil1" placeholder="masukkan bilangan 1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">bilangan 2</label>
                <input type="number" id="bil2" placeholder="masukkan bilangan 2" class="form-control">
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary" onclick="tambah();">tambah</button>
                <button type="button" class="btn btn-primary" onclick="kali();">perkalian</button>
            </div>
            <h3>Hasil operasi : <div id="hasil"></div></h3>
        </div>


    </body>
</html>
