<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../style.css">
  <?php require '../db.php'; ?>
</head>
<body>
<div class="main">
  <div class="ring">
    <i style="--clr:#00ff0a;"></i>
    <i style="--clr:#ff0057;"></i>
    <i style="--clr:#fffd44;"></i>
    <div class="Add">
    <h2>Delete</h2>
    <form action="funct.php" method="POST">
      <div class="inputBx">
        <div id="select-wrap">
          <?php 
          $person=get_person_all(NULL);
          ?>
          <select name="delete" >
            <?
            foreach($person as $p)
            {
              ?>
              <option value="<?echo $p["id"] ?>"><?echo $p["name"] ?></option>
              <?
            }
            ?>
          </select>
        </div>
      </div>
     <div class="inputBx">
        <input type="submit" value="Delete">
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
