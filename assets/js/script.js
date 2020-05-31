
$(document).on("click",".submit", function(){
    var n =0;
    var e=0;
    var h=0;
    //validasi nama
    var nama = $(".nama").val().length;
        if (nama == 0) {			
            document.getElementById('nama-alert').innerHTML = "Nama tidak boleh kosong";
            //return false;
        }else{
            document.getElementById('nama-alert').innerHTML = "";
            n=1;
            
        }

    //validasi email
    var email = $(".email").val();
    var atps=email.indexOf("@");
    var dots=email.lastIndexOf(".");
        if (email.length==0) {
            document.getElementById('email-alert').innerHTML = "Email tidak boleh kosong";
        } else if(atps<1 || dots<atps+2 || dots+2>=email.length) {
            document.getElementById('email-alert').innerHTML = "Email tidak valid";
        }else{
            document.getElementById('email-alert').innerHTML = "";
            e=1;
        }

    //validasi nomor hp
    var hp=$(".hp").val();
    var format=/^[0-9]+$/;
        if(hp==null || hp=="" ||hp.length==0){
            document.getElementById('hp-alert').innerHTML = "Nomor HP tidak boleh kosong";
        }else if(!hp.match(format)){
            document.getElementById('hp-alert').innerHTML = "Nomor Hp harus angka";
        }else if(hp.length<9){
            document.getElementById('hp-alert').innerHTML = "Nomor Hp minimal 9 karakter";
        }else{
            document.getElementById('hp-alert').innerHTML = "";
            h=1;
        }
    console.log(n,e,h); 
    if(n==1 && e==1 && h==1){
            var data = $('.form-validation').serialize();;
            $.ajax({
                type: 'POST',
                url: "aksi.php",
                data: data,
                success: function() {
                    $('.tampildata').load("tampil.php");
                    alert("Berhasil mendaftar")
                }
            });
            return false;
    }
  })
