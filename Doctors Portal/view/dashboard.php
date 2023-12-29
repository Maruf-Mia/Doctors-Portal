<html>
     
      <head>
          <title>Dashboard</title>
      </head>>

      <body  background="project pic2.jpg">

     
      
        <h1><b>Patient Dashboard</b></h1>

      <ul>
                

                <li> 
                   <h3> <a href="Drlist.php">Available doctors list</a></h3>
                </li>

                <li> 
                    <h3><a href="appointment.php">Make appointment</a></h3>
                </li>

                <li>
                    <h3><a href="request.php">Request for services</a></h3> 
                </li>

                <li>
                  <h3>  <a href="payment.php">Make payment</a>  </h3>
                </li>

                <li>
                 <h3>  <a href="complain.php">For complain</a>  </h3>
                </li>

                <li>
                  <h3>  <a href="medications.html">View medications </a>  </h3>
                </li>

                <li>
                   <h3> <a href="transition.php">View transition history</a>  </h3>
                </li>

                <li>
                  <h3>  <a href="contact.php">Call/Email in health care </a> </h3> 
                </li>

                <li>
                   <h3> <a href="review.php">Review</a> </h3>  
                </li>
                 <li>
                   <h3> <a href="Log in.php " onclick="log()">Logout</a> </h3> 

                </li>
            </ul>  
     
           
              </form>
              <div id= "project">
                  <button type="button"  onclick="loadDoc()">About Us</button>
              </div>
              <script>
               function loadDoc() {
               const xhttp = new XMLHttpRequest();
               xhttp.onload = function() {
               document.getElementById("project").innerHTML = this.responseText;
               }
                  xhttp.open("GET", "../model/ajax.txt");
                 xhttp.send();
                }


             function log() {
             alert("Are You Sure you want to go ?");
             }




             </script>


     </body>

</html>
