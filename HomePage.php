<!DOCTYPE html>
<html lang="en">
<head>
  	<title>HomePage</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        <?php include 'pagestyle.css'; ?>
    </style>
  	<!--link href="C:\xampp\htdocs\CSEPortal\pagestyle.css" rel="stylesheet" type="text/css"-->
</head>
<body>
	<div class="container con1">
 		<div class="wrapper" id="top_div">
			<div class="row">
				<div class="col-sm-2">
					<div id="logo_left">
						<img src="Icons/centenarylogo.jpg" alt="some text">
					</div>
				</div>
				<div class="col-sm-8">
					<h2><b><center>OSMANIA UNIVERSITY</h2>
					<h3><b><center>Department of Computer Science & Engineering</h3>
				</div>
				<div class="col-sm-2">
					<div id="logo_right">
						<a href="http://www.uceou.edu">
							<img src="Icons/logo.png" alt="some text">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="container con">
		<ul>
    			<li><a href="HomePage.php"><h4>Home</h4></a></li>
    			<li><a href="FacultyDetails.php"><h4>Faculty Details</h4></a></li>
				<li><a href="About.php"><h4>About us</h4></a></li>
    			<li><a href="Achievements.php"><h4>Achievements</h4></a></li>
    			<li><a href="ContactUs.php"><h4>Contact us</h4></a></li>
                <li><a href="placementinfo.php"><h4>Placement Info</h4></a></li>
  		</ul>
	</div>
    <div class="container con2">
		<div class="wrapper">
  			<br><center>
				<div id="outerbox">
					<div id="sliderbox">
						<img src="Images/pic1.jpg" class="img-responsive">
						<img src="Images/pic2.jpg" class="img-responsive">
						<img src="Images/pic3.jpg" class="img-responsive">
						<img src="Images/pic4.jpg" class="img-responsive">
					</div>
				</div>
			<br><hr class="hidden-sm hidden-md hidden-lg">
		</div>
	</div>
	<div class="container con3">
 		<div class="wrapper1">
			<div class="row">
				<!--div class="col-sm-4"-->
					<h3><b>Logins</h3>
						<p>     </p>
						<form>
							<div class="col-sm-4">
								<img src="Icons/Student.png"><br>
								<a href="StudentLogin.php">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="button" type="button" name="Student login" value="Student login">
								</a>
							</div>
							<div class="col-sm-4">
								<img src="Icons/Teacher.png"><br>
  								<a href="TeacherLogin.php">
									&nbsp;&nbsp;&nbsp;&nbsp;<input id="button" type="button" name="Teacher login" value="Teacher login">
								</a>
							</div>
							<div class="col-sm-4">
								<img src="Icons/Admin1.png"><br><br>
                                <a href="AdminLogin.php">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="button" type="button" name="Admin login" value="Admin login">
                                </a>
							</div> 
						</form>
				<!--/div-->
			</div>
		</div>
	</div><br>
	<div class="container" style="background-color:white;padding-left:10px;">
    	<div class="header-wrapper"><br>
        	<div class="panel panel-default">
				<div class="panel-heading">
					<h2 style="color:black; padding-top:10px;padding-bottom:10px;padding-left:10px;"><b>NEWS AND ANNOUNCEMENTS</b></h2>
				</div>
        		<div class="clear"></div>
        		<div class="newsScroller" id="newsScroll">
        			<ol>
            			<li>
                            <a href="https://examcell.uceou.org/new%20online%20appli.pdf" style="color:black;">Notification of B.E.VIII-Sem &amp; IV/IV-II-Sem, VI-Sem &amp; III/IV-II-Sem,IV-Sem &amp; II/IV-II-Sem Main and B.E.VII-Sem &amp; IV/IV-I-Sem, V-Sem &amp; III/IV-I-Sem,III-Sem &amp; II/IV-I-Sem (Supply.) Examinatin April 2019.
                				<!-- <img src="Icons/new.gif" alt='new' width='45px;' style='float:left;'> -->
                			</a>
            			</li><br>
            			<li>   
                			<a href="https://examcell.uceou.org/20190318163033.pdf" style="color:black;">Results of Pre-P.hD. I-Semester  Make-up Examination Feb/March 2019.
                				<img src="Icons/new.gif" alt='new' width='45px;' style='float:left;'>
            				</a>
            			</li><br>
            			<li>       
                			<a href="http://www.uceou.edu/Brochure%20ETDA%202019%20final2.pdf" style="color:black;">One Week Short term Course on &quot;Experimental Techniques and Data Analysis&quot; during 22-26 April 2019.
                				<img src="Icons/new.gif" alt='new' width='45px;' style='float:left;'>
                			</a>
                            <!-- </span>(Updated on 18-03-2019,12:00 PM).</span> -->
            			</li><br>
            			<li>  
                			<a href="http://www.uceou.edu/GIAN%20BROCHURE%20NEW.pdf" style="color:black;">One week GIAN Course.
                				<img src="Icons/new.gif" alt='new' width='45px;' style='float:left;'>
                			</a>
            			</li><br>
            			<li>
                			<a href="http://www.uceou.edu/inter%20net/Internet%20access%20%20%20account-student.pdf" style="color:black;">Apllication forms for internet access.</a>
            			</li><br>
        			</ol>
    			</div>
    			<script type="text/javascript">
    			// javascript will go here
        			$(function () {
            			$('#newsScroll').each(function () {
                			var scroller = $(this);
                			var list = scroller.children('ol');

                			var listH = list.height();
                			var scrollerH = scroller.height();
                			list.css({
                    			marginTop: scrollerH,
                    			marginBottom: scrollerH
                			});
                			scroller.css({
                    			overflow: 'hidden'
                			});
                			var isOver = false;
                			scroller.bind('mouseenter mouseleave', function (e) {
                    			isOver = (e.type == 'mouseenter');
                			});
                			var scroll = 0;
                			setInterval(function () {
                    			if (isOver) return;
                    			scroll++;
                    			var newTop = scroll % (listH + scrollerH);
                    			scroller.scrollTop(newTop);
                			}, 30);
            			});
        			});
			    </script>
			</div>
		</div>
	</div>	
</body>
</html>
