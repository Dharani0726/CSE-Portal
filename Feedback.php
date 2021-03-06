<html>
<head>
    <title>Feedback Form</title>
    <!-- <style type="text/css">
        <?php //include'style.css'; ?>
    </style-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="row">
    <div class="col-sm-1">
        <p> </p>
    </div>
    <div class="col-sm-10">
        <br><div class="panel panel-default">
            <div class="panel panel-heading">
                <h1><b><center>FEEDBACK</center></h1></b>
            </div>
            <div class="panel panel-body">
                <div class="form-container">
                    <form name="frmContact" id="" frmContact"" method="post" role="form" action="FeedbackValidation.php" enctype="multipart/form-data" onsubmit="return validateContactForm()">
                        <div class="input-row">
                            <label>Name</label> 
                            <span id="userName-info" class="info"></span><br/> 
                            <input type="text" class="input-field" name="userName" placeholder="Name" id="userName"/>
                        </div><br>
                        <div class="input-row">
                            <label>Email</label> 
                            <span id="userEmail-info" class="info"></span><br /> 
                            <input type="text" class="input-field" name="userEmail" placeholder="Email" id="userEmail" />
                        </div><br>
                        <div class="input-row">
                            <label>Subject</label>
                            <span id="subject-info" class="info"></span><br /> 
                            <input type="text" class="input-field" name="subject" placeholder="Subject" id="subject" />
                        </div><br>
                        <div class="input-row">
                            <label>Message</label> 
                            <span id="userMessage-info" class="info"></span><br />
                            <textarea name="content" id="content" placeholder="Comments" class="input-field" cols="60" rows="6"></textarea>
                        </div><br>
                        <div>
                            <center><input type="submit" name="send" class="btn btn-primary" value="Send" /></center>
                            <div id="statusMessage"> 
                                <?php
                                    if (!empty($message)) 
                                    {
                                ?>
                                <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-1">
        <p>     </p>
    </div>
</div>
<script type="text/javascript">
    function validateContactForm() {
        var valid = true;
        $(".info").html("");
        $(".input-field").css('border', '#e0dfdf 1px solid');
        var userName = $("#userName").val();
        var userEmail = $("#userEmail").val();
        var subject = $("#subject").val();
        var content = $("#content").val();
            
        if (userName == "") 
        {
            $("#userName-info").html("Required.");
            $("#userName").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (userEmail == "") 
        {
            $("#userEmail-info").html("Required.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
        {
            $("#userEmail-info").html("Invalid Email Address.");
            $("#userEmail").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (subject == "") 
        {
            $("#subject-info").html("Required.");
            $("#subject").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (content == "") 
        {
            $("#userMessage-info").html("Required.");
            $("#content").css('border', '#e66262 1px solid');
            valid = false;
        }
        return valid;
    }
</script>
</body>
</html>