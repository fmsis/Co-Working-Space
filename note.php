<?php session_start();?>
<?php

require ('connection.php');
if (!$_SESSION["Userlevel"]){  //check session

    Header("Location: เข้าสู่ระบบ.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{}
  //$_SESSION['frmAction'] = md5('itoffside.com' . rand(1, 9999));
?>

<?php
//เป็นไฟล์ของข้อมูลเเรก
$book = $_GET['ID'];
$meSQL = "SELECT DISTINCT * FROM booksa WHERE ID LIKE '$book%' ORDER BY DateReceip ASC ";
$meQuery = mysqli_query($mysqli,$meSQL);
if ($meQuery == TRUE) {
$meResult = mysqli_fetch_array($meQuery);
//$fileID = $meResult[$_SESSION['fileID']];
} else {
echo 'error';
}
?>
<!DOCTYPE HTML>
<!--
  Twenty by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
  </head>
  <body class="index">
    <div id="page-wrapper">

      <!-- Header -->
        <header id="header" class="alt">
        <h1 id="logo"><a href="index.php"><img src="images/1.jpg" width="100" height="100"></a></h1>
          <nav id="nav">
            <ul>
              <li class="current"><a href="index.php">Welcome</a></li>
              <li class="current"><a href="คำแนะนำ.php">คำแนะนำ</a></li>
              <li><a href="ออกจากระบบ.php" class="button special">ออกจากระบบ</a></li>
              


            </ul>
          </nav>
          <?php 
          echo "WELCOME ". $_SESSION['Name'];
          ?>
        </header>

          <!-- Banner -->
        <section id="banner">

          <!--
            ".inner" is set up as an inline-block so it automatically expands
            in both directions to fit whatever's inside it. This means it won't
            automatically wrap lines, so be sure to use line breaks where
            appropriate (<br />).
          -->
          <div class="inner">

            <header>
              <h2>รายละเอียดการจอง</h2>
            </header>
          </div>
        </section>
          
        <h1 style="background-color:#ffcccc;">
        <center>
        
            <p><h3>ชื่อผู้จอง :<?php echo $meResult['Name']; ?></h3>
          <p><h3>ห้อง :<?php echo $meResult['Rooms']; ?></h3>
            <p><h3>วันที่ :<?php echo $meResult['DateReceip']; ?></h3>
            <p><h3>เวลาจอง :<?php echo $meResult['Start_time' ]; ?>-<?php echo $meResult['End_time' ]; ?></h3>
            
            <p><h3>จำนวนผู้ใช้ :<?php echo $meResult['Usercount']; ?></h3>
            <p><h3>สถานะ :<?php echo $meResult['Status']; ?></h3>
            
        </center>
        <center><p><h3><button class="w3-button w3-black w3-round-large" name="st1"><?php echo "<a href='status.php?ID=$meResult[ID]'>"?>อนุมัติ</button></h3></a></p></center></h1>

        

      <!-- CTA -->
        <section id="cta">

          <header>
            <h2><strong>Tuber  Thailand</strong></h2>
            <p>
          <h3>
            สถานที่ที่จุดประกายความคิดสร้างสรรค์
            <br />
            และเชื่อมโยงผู้คนเข้ามาร่วมมือกันด้วยความอบอุ่นเป็นกันเอง
            <br /> 
          </h3>
            </p>
          </header>
        </section>



    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollgress.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>

  </body>
</html>

