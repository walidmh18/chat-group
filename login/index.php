<?php  

include("../components/head.php");


?>


<body>
   <div class="loginContainer">
      <h1>LOGIN</h1>
      <form action="../components/login.php" method="post">
         <div class="username">
            <label for="usernameInp">Username:</label>
            <input type="text" name="username" id="usernameInp" placeholder="Enter Your Username">

         </div>

         <div class="password">
            <label for="passwordInp">Password:</label>
            <input type="password" name="password" id="passwordInp" placeholder="Enter Your Password">
         </div>

         <button type="submit">Login</button>
      </form>
      <p>You don't have an account? <a href="../signup">Signup now</a></p>
   </div>

</body>