<?php
include 'anasayfa.php';
include 'conn.php';
?>
<div class="wrapper">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="index.php">Anasayfa</a></li>
      <li>&#187;</li>
      <li><a href="giris.php">Giriş</a></li>
    </ul>

  </div>
</div>

<body id="yonetim_giris_body">
  <div class="giris_sayfa">
  <div class="giris">
  <form method="post" action="giris_kontrol.php">
        <div id="yonetim_giris_kapsayici" align="justify">
            <p>Kullanıcı Adı</p><input name="kKullaniciAdi" type="text" />
            <p>Şifre</p><input name="kSifre" type="password" />
            <input type="submit" value="Giriş Yap" />
        </div>
    </form>
  </div>

<div class=kayit>

<form action="kayıtol.php" method="POST">
<div id="yonetim_giris_kapsayici" align="justify">
            
            <p>Adınız</p><input name="kAdi" type="text" />
            <p>Soyadınız</p><input name="kSoyadi" type="text" />
            <p>E Posta adresi</p><input id="email" type="text" name="kEposta" />
            <p>Telefon</p><input name="kTel" type="text" />
            <p>Kullanıcı Adınız</p><input name="kKullanıciAdi" type="text" />
            <p>Şifre</p><input name="kSifre" type="password" />
            <input type="submit" id="btn" value="Kayıt Ol" />
</div>
</form>
</div>

<script>
$("#btn").click(function()
{
var email = $("input#email").val();
if(MailKontrol(email))
{
alert("Email Adresi Geçerli");
}
else
{
alert("Geçersiz veya Hatalı Email");
return false;
}
})
function MailKontrol(email)
{
var kontrol = new RegExp(/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/i);
return kontrol.test(email);
}</script>


</body>
  </div>
  