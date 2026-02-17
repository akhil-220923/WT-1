<!-- <?php
if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
}


?>
<a href="<?php echo $_SERVER['PHP_SELF'];?>? name=Brad & age=20">Click</a>
 <!-- <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?name=Brad">Click</a> -->

 <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
       
         
       

    </div>
    <div>
     <label for="age">Age:</label>
        <input type="text" name="age">
</div>
<input type="submit" value="submit" name="submit">
 </form> -->

