<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="./css/style.css">
<div class="container_8" id="id01">
    <form action="insertlog.php" method='post'>
    <form class="modal-content animate" method="post" action="./indexdb.php" >
      
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="./img/Unknown_person.jpg" alt="Avatar" class="avatar">
      </div>

      <div class="container_8">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
  
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
          
        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>


      <div class="container_8" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>

</div>

  <!-- js -->
  <script src="./js/index.js"></script>

  <div class="container signin">
    <p>Don't have an account? <a href="indexdb.php">Sign up</a>.</p>
  </div>
 
</html>

 