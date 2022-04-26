
<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
    <link rel="stylesheet" href="signin.css" />
    <script type="text/javascript" src="hiddenemailstore.js"></script>
</head>
<body>
    <center>
	<h1>Sign in!</h1>
	 
    <br>
    
    <div class="wrapper">
  <div class="title">
     </div>
  <div class="contact-form">
    <div class="input-fields">
        
    <form action="signin_verify.php" method="post" style="color: white">
    	<div>
            <tr>
    		<td>
    			<label>Email:</label>
    		</td>
    		<td>
    			<input type="text" id = "email" name="email">
    		</td>
    	</tr>
        </div>
        <br>
        <br>
        <div>
    	<tr>
    		<td>
    			<label>Password:</label>
    		</td>
    		<td>
    			<input type="password" name="password">
    		</td>
    	</tr>
        </div>
        <br>
        
        <tr>
            <td>
                <input type="Submit"  id="submit" onclick="handleSubmit()"/>
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



