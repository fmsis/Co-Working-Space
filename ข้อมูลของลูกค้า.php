<?php session_start();?>

<?php
//include('connection.php');
require 'connection.php';

  $sql = "SELECT * FROM user";

  $query = mysqli_query($mysqli,$sql);


if (!$_SESSION["UserID"]){  //check session
    Header("Location: เข้าสู่ระบบ.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{}
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
                    <h1 id="logo"><a href="หน้าหลักA.php"><img src="images/1.jpg" width="100" height="100"></a></h1>
                    <nav id="nav">
                        <ul>
                           <li class="current"><a href="profileA.php">ข้อมูลล่วนตัว</a></li>
                            <li class="current"><a href="อนุมัติการจอง.php">อนุมัติการจอง</a></li>
              
                             <div class="w3-dropdown-hover">
      							<button class="w3-button">สถิติการใช้งาน</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                      <a href="g_day.php" class="w3-bar-item w3-button">สถิติรายวัน</a>
                      <a href="g_month.php" class="w3-bar-item w3-button">สถิติรายเดือน</a>
                       <a href="g_years.php" class="w3-bar-item w3-button">สถิติรายปี</a>
                    </div>
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
                            <h2>ข้อมูลของลูกค้า</h2>
                        </header>
                    </div>
                </section>

				<!-- Three -->
					<section class="wrapper style3 container special">
<div class="w3-row w3-border">
			<div style="background-color:#ffa8fb;">	
			<div class="w3-container">
<table width="650" border="1">
  <tr class="w3-purple">
    <th width="91"> <div align="center">Member_ID</div></th>
    <th width="91"> <div align="center">Name</div></th>
    <th width="98"> <div align="center">Lastname</div></th>
    <th width="97"> <div align="center">Numberphone</div></th>
    <th width="59"> <div align="center">Email </div></th>
	<th width="50"> <div align="center">Edit </div></th>
	
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["Member_ID"];?></div></td>
    <td><?php echo $result["Name"];?></td>
    <td><?php echo $result["Lastname"];?></td>
    <td><?php echo $result["Numberphone"];?></td>
    <td><?php echo $result["Email"];?></td>



	<td align="center"><a href="แก้ไขข้อมูล.php?Member_ID=<?php echo $result["Member_ID"];?>"> <button class="w3-btn w3-white w3-border w3-border-purple w3-round-large">Edit</button></a></td>
  </tr>



<?php
}
?>
</table>
		</div>

		</div>
		</section>
		
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

