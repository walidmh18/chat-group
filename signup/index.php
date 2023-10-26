<?php  

include("../components/head.php");


?>


<body>
   <div class="signupContainer">
      <h1>SIGNUP</h1>
      <form action="../components/signup.php" method="post">
         <div class="username">
            <label for="usernameInp">Username:</label>
            <input type="text" name="username" id="usernameInp" placeholder="Enter Your Username">

         </div>

         <div class="email">
            <label for="emailInp">Email:</label>
            <input type="text" name="email" id="emailInp" placeholder="Enter Your email">

         </div>

         <div class="password">
            <label for="passwordInp">Password:</label>
            <input type="password" name="password" id="passwordInp" placeholder="Enter Your Password">
         </div>

         <button type="submit">Login</button>
      </form>
      <p>You already have an account? <a href="../login">Login now</a></p>
   </div>

</body>