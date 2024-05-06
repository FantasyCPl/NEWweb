
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../style.css">

</head>
<body>
<div class="main">
  <div class="ring">
    <i style="--clr:#00ff0a;"></i>
    <i style="--clr:#ff0057;"></i>
    <i style="--clr:#fffd44;"></i>
    <div class="Add">
    <h2>Add</h2>
    <form action="create.php" method="POST" enctype="multipart/form-data">
    <div class="inputBx">
        <input type="text" placeholder="person" name="person">
      </div>
      <div class="inputBx">
        <input type="text" placeholder="job" name="job">
      </div>
      <div class="inputBx">
        <input type="int" placeholder="phone" name="phone">
      </div>
      <div><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></div><!---->
      <div>
        <input type="file" name="userfile">
      </div>
     <div class="inputBx">
        <input type="submit" value="Add">
      </div>
      <div class="links">
        <a href="../index.php">Back</a>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>
