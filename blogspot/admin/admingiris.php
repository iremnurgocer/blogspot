
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    
    <title>Admin Giriş</title>
    <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
    <h1><a href="../index.php">BLOGSPOT</a></h1>
    <p>Admin Girişi</p>
  </div>
</div>
</body>
<body id="yonetim_giris_body">

<form method="post" action="giris_kontrol.php">
        <div id="yonetim_giris_kapsayici" align="justify">
            <p>Kullanıcı Adı</p><input name="yKAdi" type="text" />
            <p>Şifre</p><input name="ySifre" type="password" />
            <input type="submit" value="Giriş Yap" />
        </div>
    </form>


</body> 

</html>



