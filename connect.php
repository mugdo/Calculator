<?php
   session_start();
   if($_SESSION[user]==true)
   {
     header("location: about.html");
   }
   else 
   {
     $user ="please logint first....";
     header("location: home.html");  
   }
?>
<script>
    function wellcomeMsg()
    {
       var user="<?php echo $user ?>";
       alert(user);
    }
   window.addEventListener('load',wellcomeMsg);        
 </script>
