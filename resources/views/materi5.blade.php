<!DOCTYPE html>
<html>
<head>
  <title>jawa skrip cuy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function validateForm() {
    var x = document.getElementById("fname");
    var nrp = document.getElementById("nrp");

    if (isNaN(nrp.value) == true) {
        alert("nrp harus berupa angka!")
        nrp.focus();
        nrp.value="";
        return false;
    }
    if (nrp.value == "") {
    alert("NRP must be filled out");
    nrp.focus();
    return false;
    }

    if (nrp.value.length !=10) {
      alert("Jumlah digit NRP harus 10, Anda memasukkan " + nrp.value.length + " digit!");
      nrp.focus();
      return false;
    }

    if (nrp.value.substring(0,4) !=5026) {
        alert("hanya untuk mahasiswa SI!")
        nrp.focus();
        return false;
    }
    if (nrp.value.substring(4,6) !=22 && nrp.value.substring(4,6) !=21) {
        alert("hanya untuk angkatan 2022 dan 2021!")
        nrp.focus();
        return false;
    }

    return true;
}
</script>
</head>
<body>

<h2>Pendaftaran Asisten Lab</h2>

<form name="myForm" action="https://www.instagram.com/" onsubmit="return validateForm()" method="post">
  <label for="nrp">NRP:</label>
  <input type="text" id="nrp" name="nrp" class="form-control">
  <br>
  <input type="submit" value="Submit" class="btn btn-primary">
  <input type="reset" value="kosongi" class="btn btn-warning">
</form>

</body>
</html>
