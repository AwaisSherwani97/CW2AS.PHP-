   <?php 
 //include("_includes/config.inc");
  // include("_includes/dbconnect.inc");
  // include("_includes/functions.inc");
  
  $sql1 ="INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES ('20000001', 'test1', '1974-11-10', 'Jon1', 'Smith', '24 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT'); "; 
  
  $sql2 = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES ('20000002', 'test2', '1974-11-10', 'Jon2', 'Smith', '25 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT'); ";
  $sql3 = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES ('20000003', 'test3', '1974-11-10', 'Jon3', 'Smith', '26 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT'); ";
  $sql4 = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES ('20000004', 'test4', '1974-11-10', 'Jon4', 'Smith', '27 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT'); ";
  $sql5 = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) VALUES ('20000005', 'test5', '1974-11-10', 'Jon5', 'Smith', '28 Victoria Road', 'High Wycombe', 'Bucks', 'UK', 'HP11 1RT'); ";


  
  if ($conn->query($sql1) === TRUE) {
		  echo "New record created successfully<br/>";
		} else {
		  echo "Error: " . $sql1 . "<br/>" . $conn->error;
		} 
	if ($conn->query($sql2) === TRUE) {
		  echo "New record created successfully<br/>";
		} else {
		  echo "Error: " . $sql2 . "<br/>" . $conn->error;
		}	
		
		if ($conn->query($sql3) === TRUE) {
		  echo "New record created successfully<br/>";
		} else {
		  echo "Error: " . $sql3 . "<br/>" . $conn->error;
		}
		
		if ($conn->query($sql4) === TRUE) {
		  echo "New record created successfully<br/>";
		} else {
		  echo "Error: " . $sql4 . "<br/>" . $conn->error;
		}
		
		if ($conn->query($sql5) === TRUE) {
		  echo "New record created successfully<br/>";
		} else {
		  echo "Error: " . $sql5 . "<br/>" . $conn->error;
		}
		
?>