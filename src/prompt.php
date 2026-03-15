<style>
.message{
   position: sticky;
   top:0; left:0; right:0;
   padding:15px 10px;
   background-color: white;
   text-align: center;
   z-index: 1000;
   box-shadow:10px 10px 5px #aaaaaa;
   color:black;
   font-size: 20px;
   text-transform: capitalize;
   cursor: pointer;
}
</style>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}

?>
