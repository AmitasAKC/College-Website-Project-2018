<?php
if(isset($_REQUEST["id"])){
	$id=$_REQUEST["id"];
}
else{
	$id=2;
	$filename="notes/blank.txt";
}
	$a[]=array();
	$b[]=array();
	$i=0;
$con=mysqli_connect("localhost","root","","moodle");
$sql="select * from notes where subjectId='$id'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
	 $a[$i]=$row["location"];
	$b[$i]=$row["topic"];
	$i++;
}
$total=count($a);
//$filename=$row["location"];
		

?> 
<!DOCTYPE HTML>

<html>
	<head>
		<title>Career College</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--5grid--><script src="css/5grid/viewport.js"></script><!--[if lt IE 9]><script src="css/5grid/ie.js"></script><![endif]--><link rel="stylesheet" href="css/5grid/responsive.css" /><!--/5grid-->
		<link rel="stylesheet" href="css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
	</head>
	<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
	<body class="subpage">

		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="5grid">
					<div class="12u-first">

						<!-- Logo -->
							<h1><a href="#">Career College</a></h1>
						
						<!-- Nav -->
							<nav>
								<a href="index.html">Home</a>
								<a href="notes.php">Notes</a>
								<a href="practicals.php">Practicals</a>
								<a href="papers.php">Papers</a>
								<a href="alumini.php">Alumini</a>
								<a href="jobs.php">Jobs</a>
							</nav>

					</div>
				</header>
			</div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="5grid">
						<div class="3u-first">
							
							<!-- Sidebar -->
								
								<section>
									<header>
										<h2>Subjects</h2>
										<div class="dropdown">
  <button class="dropbtn">JAVA</button>
  <div class="dropdown-content">
    <a href="#">Unit 1 </a>
    <a href="#">Unit 2</a>
    <a href="#">Unit 3</a>
	<a href="#">Unit 4</a>
	<li><a href="#">Unit 5</a></li>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Internet Security</button>
  <div class="dropdown-content">
   <a href="#">Unit 1 </a>
    <a href="#">Unit 2</a>
    <a href="#">Unit 3</a>
	<a href="#">Unit 4</a>
	<a href="#">Unit 5</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Dot Net</button>
  <div class="dropdown-content">
   <a href="#">Unit 1 </a>
    <a href="#">Unit 2</a>
    <a href="#">Unit 3</a>
	<a href="#">Unit 4</a>
	<a href="#">Unit 5</a>
  </div>

  </div><div class="dropdown">
  <button class="dropbtn">Software Engineering</button>
  <div class="dropdown-content">
   <a href="#">Unit 1 </a>
    <a href="#">Unit 2</a>
    <a href="#">Unit 3</a>
	<a href="#">Unit 4</a>
	<a href="#">Unit 5</a>
  </div>
</div>
									</header>
									<ul class="link-list">
										<li><a href="notes.php?id=java1">Java</a></li>
										<li><a href="notes.php?id=java3">Dot Net</a></li>
										<li><a href="notes.php?id=4">Software eng.</a></li>
										<li><a href="notes.php?id=5">Internet Security</a></li>
										
									</ul>
								</section>
								<section>
									<header>
										<h2>Topics</h2>
									</header>
									<ul class="link-list">
									
									<?php
										for($i=0;$i<$total;$i++){
									
									?>								
										<li><a href="notes.php?sub=<?php echo $a[$i];  ?>"><?php echo $b[$i];  ?></a></li>
										
									<?php
									
										}
									?>
									</ul>
								</section>

						</div>
						<div class="9u">
							
							<!-- Main Content -->
								<section>
									<p>
									<?php
									if(isset($_REQUEST["sub"])){
										$filename=$_REQUEST["sub"];
										$myfile = fopen($filename, "r") or die("Unable to open file!");
										$homepage = file_get_contents($filename);
										$homepage = nl2br($homepage);
										echo $homepage;
										fclose($myfile);
									}

									?>
									<a href="<?php echo $filename; ?>" download ?>download</a>
								
									</p>
																		
									
								
								</section>

						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer-wrapper">
				<footer id="footer" class="5grid">
					<div class="8u-first">
					
						<!-- Links -->
							<section>
								<h2>Developer Links </h2>
								<div class="3u-first">
									<ul class="link-list last-child">
										<li><a href="#">Student 1</a></li>
										<li><a href="#">Student 2</a></li>
										<li><a href="#">Student 3</a></li>
										<li><a href="#">Student 4</a></li>
									</ul>
								</div>
								<div class="3u">
									<ul class="link-list last-child">
										<li><a href="#">Student 1</a></li>
										<li><a href="#">Student 2</a></li>
										<li><a href="#">Student 3</a></li>
										<li><a href="#">Student 4</a></li>
									</ul>
								</div>
								<div class="3u">
									<ul class="link-list last-child">
										<li><a href="#">Student 1</a></li>
										<li><a href="#">Student 2</a></li>
										<li><a href="#">Student 3</a></li>
										<li><a href="#">Student 4</a></li>
									</ul>
								</div>
								<div class="3u">
									<ul class="link-list last-child">
										<li><a href="#">Student 1</a></li>
										<li><a href="#">Student 2</a></li>
										<li><a href="#">Student 3</a></li>
										<li><a href="#">Student 4</a></li>
									</ul>
								</div>
							</section>

					</div>
					<div class="4u">
						
						<!-- Blurb -->
							<section>
								<h2> Informative Text </h2>
								<p>
									This site is developed for get information about BCA final year content. Here you get papers,notes,practicals and job oppotunities.
								</p>
							</section>
					
					</div>
				</footer>
			</div>

		<!-- Copyright -->
			<div id="copyright">
				(c) 2018 Career College. All rights reserved.
			</div>

	</body>
</html>