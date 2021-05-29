<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   // check logged in
   if (isset($_SESSION['id'])) {

      echo template("templates/partials/header.php");
      echo template("templates/partials/nav.php");

      // Build SQL statment that selects a student's modules
      //$sql = "select * from studentmodules sm, module m where m.modulecode = sm.modulecode and sm.studentid = '" . $_SESSION['id'] ."';";

$stmt = $conn->prepare('select * from studentmodules sm, module m where m.modulecode = sm.modulecode and sm.studentid = ?'); $stmt->bind_param('i', $_SESSION['id']);// 'i' specifies the variable type => 'integer'
$stmt->execute(); 
$result = $stmt->get_result();
//while ($row = $result->fetch_assoc()) {
     // Do something with $row
//}



      //$result = mysqli_query($conn,$sql);

      // prepare page content
      $data['content'] .= "<h2>Modules</h2><table class='table table-striped'>";
      $data['content'] .= "<thead>";
      $data['content'] .= "<tr><th>Code</th><th>Type</th><th>Level</th></tr></thead><tbody>";
      // Display the modules within the html table
      while($row = mysqli_fetch_array($result)) {
         $data['content'] .= "<tr><td> $row[modulecode] </td><td> $row[name] </td>";
         $data['content'] .= "<td> $row[level] </td></tr>";
      }
      $data['content'] .= "</tboday></table>";

      // render the template
      echo template("templates/default.php", $data);

   } else {
      header("Location: index.php");
   }

   echo template("templates/partials/footer.php");

?>
