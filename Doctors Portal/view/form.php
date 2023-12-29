<?php

    

?>

<html>
<head>
	
	<title>form</title>
</head>
<body>
     <h2>Signup</h2>  
         
      <form>

      <div>
            <label for="Fullname">FullName:</label>
            <input type="text" name="fullname" id= "fullname">
      </div><br>

       <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id= "email">
      </div><br>

       <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id= "password">
      </div><br>

       <div>
            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id= "dob">
      </div><br>

       <div>
            <label for="photo">Choose your photo:</label>
            <input type="file" name="photo" id= "photo">
      </div><br>

       <div>
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" id= "gender"> male
            <input type="radio" name="gender" id= "gender"> Female
      </div><br>

       <div>
            <label for="answer">Didyou ever use med-on?</label>
            <select name=""><br>
            	<option>yes</option>
            	<option>No</option>
      </div>
      <br>

      <div>
      	   <input type="submit" value="Submit">
      	   <input type="reset" value="Reset">
      </div>

      </form>        

</body>
</html>>
