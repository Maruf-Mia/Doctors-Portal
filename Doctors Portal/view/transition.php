<?php

    if (isset ($_REQUEST['submit'])){

    if ($_REQUEST['Username']==null){
        echo "invalid Username";
    }else{
        echo "ok";
    }
 }


?>

<html>
     
      <head>
          <title> Transition</title>
      </head>>

      <body background="transition.jpg">
      
     </h2><b>View transition history</b></h2>

     <form>
     <table>
                 <tr>
                    <h3> <td> Enter Bill number: </td></h3>
                     <td>
                          <input type="text"name="Username"value="">
                    </td>
                 </tr>
                 
                <tr>
                    <td> </td>
                    <td>
                         <input type="submit"name="submit"value="submit" onclick="validation()">
                   </td>
                </tr>
                 </table>
                  
     </form>

     <ul>
               

                  <li>
                   <h3> <a href="dashboard.php " onclick="log()">Back</a> </h3> 

                </li>

                
            </ul>  
            <script>
              function log() {
             alert("Are You Sure you want to go ?");
             }


            </script>
           
           <script>
                    function validation() {
                    
                     
                        let number  = document.getElementById('number').value;
                    
                        if ((number.length) ==0) {
                            document.getElementById('numberError').innerHTML = "Field can not be null";
                    }
                    else
                    {
                        document.getElementById('numberError').innerHTML = "";
                    }
                }
                </script>  
              
     </body>

</html>
