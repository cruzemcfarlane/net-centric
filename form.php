<?php

    $conn = mysql_connect("localhost", "comp2190SA”", "2014Sem1");
    mysql_select_db("CourseMgmtDB");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    echo "Connected succesfully<br />";
    
    /*
    if(strlen($_POST["disc"]) != 4 && strlen($code) != 4){
        echo "Incorrect input!";
    }
    
    elseif(!isset($_POST["tit"])){
        echo "Incorrect input!";
    }
    
    elseif(is_numeric($_POST["lev"]) === false || is_numeric($_POST["sem"]) === false || is_numeric($_POST["cred"]) === false){
        echo "Incorrect input!";
    }
    
    else(){
        $discipline = $_POST["disc"];
        $code = $_POST["cd"];
        $title = $_POST["tit"];
        $level = $_POST["lev"];
        $semester = $_POST["sem"];
        $credit = $_POST["cred"];
        
        $result = mysql_query("INSERT INTO Course_Details (Course_Discipline, Course_Code, Course_Title, Level, Semester, Credits) VALUES ('$discipline', '$Ccode', '$title', '$level', '$Semester', '$credit')");
    }
    
    $database = new PDO("mysql:dbname=CourseMgmtDB; host=localhost", "root", "");

    $rows = $database->query("SELECT * FROM Courses"); 
    
?>	<table>
		<tr>
			<th>Discipline</th>
			<th>Code</th>
			<th>Course Title</th>
			<th>Level</th>
			<th>Semester</th>
			<th>Credits</th>
		</tr>
<?php
    // loops through Courses table
    foreach ($rows as $row) 
    { 
 		// generates table
		echo '<tr>
				<td class>'.$row['Discipline'].'</td>
				<td>'.$row['Code'].'</td>
				<td >'.$row['Title'].'</td>
				<td>'.$row['Level'].'</td>
				<td>'.$row['Semester'].'</td>
				<td>'.$row['Credits'].'</td></tr>';
										
    } 
    echo '</table>';
    */
?>
