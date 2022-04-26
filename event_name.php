<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <br>
	<title>Event</title>
    <link rel="stylesheet" href="register.css" />
	
	
</head>
<body>
    <center>
	<h1>!!Event!!</h1>
    </center>
    <div class="wrapper">
    <div class="title">
    </div>
    <div class="contact-form">
    <div class="input-fields">

    <center>
        <form action="event_table.php" style="color: white" id="myform" >
        <tr>
            <td>
            <label>Click here to see the list of available events</label>
            </td>
            <td>
            <input type="submit" value="Available Events" />
            </td>
        </tr>
            <br><br>
        </form>
    </center>
    <center>
    <form action="event_name_check.php" method="post" style="color: white" id="myform">
        <table align="center">
    	<tr>
    		<td>
    			<label>Name of Event:</label>
    		</td>
    		<td>
    			<input type="text" name="event">
    		</td>
        </tr>
        <br>
</center>
        <center>
        <tr>
            <td>
        
            <input type="submit">
	
            </td>
        </tr>
    </form>
</center>
</body>
</html>