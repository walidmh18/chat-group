<?php
include('../components/head.php')
?>
<link rel="stylesheet" href="../chat/stylee.css">
<style>
   .msgArea{
      position: relative;
   }
   .msgArea .center{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      text-align: center;
   }
   .msgArea .center h1{
      font-weight: 700;
      margin-bottom: 1rem;
      font-size: 3rem;
      color: var(--light1);
      text-transform: capitalize;
   }
   .msgArea .center p{
      font-weight: 500;
      color: var(--light2);
   }


</style>
<body>
   <div class="container">
   <?php  include('../components/leftMenu.php') ?>
   <div class="body">
      <nav class="top">
         <div class="navToggle">
            <input hidden class="check-icon" id="check-icon" name="check-icon" type="checkbox">
            <label class="icon-menu" for="check-icon">
                <div class="bar bar--1"></div>
                <div class="bar bar--2"></div>
                <div class="bar bar--3"></div>
            </label>
         </div>
         <p class="channelName">CHAT GROUP</p>
      </nav>
      <div class="msgArea">
         <div class="center">
            <h1>your messages</h1>
            <p>join group via invite link or create one <br> and start chatting now</p>
         </div>
      </div>
      
   </div>
   </div>

   <div class="addChannelPopupContainer popupContainer">
      <div class="overlay">
         <div class="popup">
            <form action="../components/createChannel.php" method="post">
               <h1>New Channel</h1>
               <input type="text" name="name" placeholder="Channel Name" max="15" required>
               <textarea name="desc" id="desc" cols="3" rows="15" placeholder="Channel Description" required min="10" max="500"></textarea>
               <div class="btns">
               <button type="cancel" onclick="hidePopup('.popupContainer.addChannelPopupContainer')">cancel</button>
               <button type="submit" name="submit">Save</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>
</html>