<div id="content">
        
    <a class="nav-link js-scroll-trigger" href='Login_v1/index.php?deconnexion=true'>Déconnexion</a>
    
    <?php
    // session_start();
    
    if(isset($_GET['deconnexion']))
    { 
    if($_GET['deconnexion']==true)
    {  

        session_unset();
    	header("location: index.php");
 }
}
     ?>
   
</div>

