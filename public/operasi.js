function tambah() {
   var bilangan1 = parseInt(document.getElementById("bil1").value);
   var bilangan2 = parseInt(document.getElementById("bil2").value); //method yang mengembalkan value
   var hasilnya = document.getElementById("hasil"); //returnnya objek

   hasilnya.innerHTML= bilangan1 + bilangan2;
}

function kali() {

    var bilangan1 = document.getElementById("bil1").value;
   var bilangan2 = document.getElementById("bil2").value; //method yang mengembalkan value
   var hasilnya = document.getElementById("hasil"); //returnnya objek

   hasilnya.innerHTML= bilangan1 * bilangan2;
}