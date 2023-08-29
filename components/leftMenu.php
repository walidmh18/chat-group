
<?php 
$_SESSION['username']= 'walid';
$_SESSION['id'] = '1';
$_SESSION['img'] = 'https://static.vecteezy.com/system/resources/thumbnails/002/534/006/small/social-media-chatting-online-blank-profile-picture-head-and-body-icon-people-standing-icon-grey-background-free-vector.jpg';

if (isset($_SESSION['username'])) {
   $username = $_SESSION['username'];
} else {
   header('Location:../login');
} ?>
<link rel="stylesheet" href="../components/leftMenuaa.css">
<div class="leftMenu">
   <nav class="allChannels" style="display: none;">
      <div class="top">
         <p>Channels</p>
         <button onclick="showPopup('.popupContainer.addChannelPopupContainer')"><i class="fa-solid fa-plus"></i></button>
      </div>
      <div class="core">
         <div class="search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" name="searchChannel" id="searchChannel" placeholder="Search">
         </div>
         <div class="channels">


         <?php
      
         $id = $_SESSION['id'];

         $sql = "SELECT * FROM `groups`";
         $query = mysqli_query($con,$sql);
         while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $members = json_decode($row['members']);
            // echo '<pre>';
            // print_r($members);
            // echo '</pre>';
            foreach($members as $x){
               if ($x == $id) {
                  $name = $row['real_name'];

                  $first_two_words = explode(" ", $name, 2);
                  
                  $first_letters = [];
                  foreach ($first_two_words as $word) {
                    $first_letters[] = $word[0];
                  }

                  
                  
                  $logo = implode("", $first_letters);
                  
                  echo '<a href="../groups?id='.$row['name'].'&name='.$name.'" class="channel">
                  <div class="logo">'.$logo.'</div>
                  <div class="name">'.$name.'</div>
               </a>';
               }
            }
         }


         ?>
            
         </div>
      </div>
   </nav>
   <nav class="channelInfo">
      <div class="top">
         <button><i class="fa-solid fa-chevron-left"></i></button>
         <p>All Channels</p>
      </div>
      <div class="core">
         <p class="name">web developers</p>
         <div class="output">aklsjdf;akjdf;</div>
         <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia totam tenetur deserunt eos facilis accusantium qui, corporis quis eligendi ratione.</p>

      </div>
   </nav>
   <div class="bottom">
      <div class="profile">
         <img src="<?php echo $_SESSION['img']; ?>" alt="">
         <p class="name"><?php echo $_SESSION['username']; ?></p>

      </div>
      <script>
         function toggleActions() {
            const actionBtns = document.querySelector('.actionBtns')
            actionBtns.classList.toggle('active')
         }
         function closeNav(){
            const leftMenu = document.querySelector('.leftMenu') 
            leftMenu.classList.toggle('active')
         }
      </script>
      <button onclick="toggleActions()">
      
      <i class="fa-solid fa-chevron-up"></i>
      </button>
      <div class="actionBtns">
         <a href="../profile?id=1"><i class="fa-solid fa-user"></i>   Profile</a>
         <a href="../tweeter"><i class="fa-light fa-mountains"></i>   twitter</a>
         <hr>
         <button class="logoutBtn"><i class="fa-solid fa-right-from-bracket"></i>   Logout</button>
      </div>
   </div>
         <button class="closeNavbar" onclick="closeNav()"><i class="fa-solid fa-xmark"></i></button>
</div>