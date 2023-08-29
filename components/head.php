<?php 
include('../components/connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css"
      >
   <link rel="stylesheet" href="stylee.css">
   <script src="./script.js" defer></script>
   <title>Document</title>

   <style>
      html , body{
         min-height: 100dvh;
      }
      a,button{
         all: unset;
         cursor: pointer;
      }
      input{
         border: none;         
         outline: none;
      }
      *{
         padding: 0;
         margin: 0;
         box-sizing: border-box;
         font-family: 'Noto Sans', sans-serif;
      }
      :root{
         --dark:     #0B090C;
         --grey1:    #120F13;
         --grey2:    #252329;
         --grey3:    #3C393F;
         --grey4:    #3C393F;
         --grey5:    #BDBDBD;
         --light1:   #E0E0E0;
         --light2:   #828282;
         --blue:     #2F80ED;
         --red:      #EB5757;
         --glass:    #120F1380;
         --shadow:   0px 4px 4px 0px rgba(0, 0, 0, 0.25);
      }
   </style>
</head>
