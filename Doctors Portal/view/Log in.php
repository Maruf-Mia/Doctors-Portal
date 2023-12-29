

<html >


     
      <head>
          <title>Login</title>
          <style>
            section{background-color: skyblue;
                text-align: center;
                font-size: 30px;}
                table {
                    text-align: center;
                    font-size: 25px;}
          </style>
      </head>
 
      <body background="project pic.jpg">
            <section> 
                <h1> Patient Log in </h1>
            </section>

             <table>
                 <tr>
                     <td> Username</td>
                     <td>
                          <input type="text" id="Username" name="Username"  value="">
                    </td>
                    <td id="usere"></td>
                 </tr>
                 <tr>
                    <td> Password</td>
                    <td>
                         <input type="password" id="Password" name="Password"  value="">
                   </td>
                   <td id="passworde"></td>
                   
                </tr>
                <tr>
                    <td> </td>
                    <td>
                         <input type="button" name="submit" value="submit" onclick="validation()">
                   </td>
                   
                </tr>
                 </table>>

          <ul>
                 <li> 
              <h1>  <a href="Signup.php">signup</a></h1>
                </li>
        </ul>   
            </table>  
              
                  
               <script>
                function validation() {

                let username = document.getElementById('Username').value;

                let password = document.getElementById('Password').value;

               

                if ((username.length) > 2 && (password.length) > 2) {

                    

                    window.location.href = "dashboard.php";

                }

                if ((username.length) < 3) {

                    document.getElementById('usere').innerHTML = "Username should be 3 character";

                }

                if ((password.length) < 8) {

                    document.getElementById('passworde').innerHTML = "Password should be 8 character";

                }

                else {

                    document.getElementById('usere').innerHTML = "";

                    document.getElementById('passworde').innerHTML = "";

                }
            }
               </script>           
     </body>

</html>