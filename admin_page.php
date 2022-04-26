
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
    <link rel="stylesheet" href="signin.css" />
    <script type="text/javascript" src="hiddenemailstore.js"></script>
</head>
<body>
    <center>
	<h1>Admin Page!</h1>
    <h3 style="background-color: white;">Report Generation</h3>
	 
    <br>
    
    <div class="wrapper">
  <div class="title">
     </div>
  <div class="contact-form">
    <div class="input-fields">
        
    <form action="report_generation.php" method="post" style="color: white">
    	<div>
            <tr>
    		<td>
    			<label>Starting Date :</label>
    		</td>
    		<td>
    			<input type="date"  name="date1">
    		</td>
    	</tr>
        </div>
        <br>
        <br>
        <div>
    	<tr>
    		<td>
    			<label>End Date:</label>
    		</td>
    		<td>
    			<input type="date" name="date2">
    		</td>
    	</tr>
        </div>
        <br>
        
        <tr>
            <td>
                <input type="Submit">
                </a>
            </td>
        </tr>
       	
</form>  
</div>
</div>
</div>
</center>

</body>
</html>



