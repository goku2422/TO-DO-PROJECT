 <?php
error_reporting(E_ALL);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "to_do";
 
    $conn = mysqli_connect($servername, $username, $password, $dbname);
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>to-do manager</title>
<style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #f3f4f6;
    padding: 40px;
    color: #333;
  }

  h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #2c3e50;
    font-family: 'Arial', sans-serif;
    font-weight: 600;   
    font-size: 40px;
  }

  form#taskForm {
    background: #ffffff;
    max-width: 500px;
    margin: 0 auto;
    padding: 25px 30px;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  }
   form#taskForm input,
  form#taskForm select,
  form#taskForm textarea {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 15px;
    transition: 0.3s ease;

  }

  .btn {
    background-color: #3498db;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    padding: 12px;
    width: 100%;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  .btn:hover {
    background-color: #2980b9;
  }

  @media (max-width: 600px) {
    form#taskForm {
      padding: 20px;
    }

    .btn {
      font-size: 15px;
    }
  }
</style>


</head>
<body> 
     <h2>Manager</h2>
<form id="taskForm" action="#" method="POST">
  <input type="text" id="task" name="task" placeholder="addtask" required>
  <input type="email" id="email" name="email" placeholder="Email" required>
  <input type="date" id="date" name="date" placeholder="Date" required>
  <select id="category" name="category" placeholder="Category" required>
    <option value="" disabled selected>Select Category</option>
    <option value="Student">Student</option>
    <option value="Fresher">Fresher</option>
    <option value="Experienced">Experienced</option>
  </select>
  <input type="tel" id="mobile" name="mobile" placeholder="Mobile" required pattern="[0-9]{10}">
  <textarea id="address" name="address" placeholder="Address" rows="3" required></textarea>
  <input type="submit" name="addtask" value="addtask" class="btn">
</form>
</body>
</html>

<?php
if(isset($_POST['addtask'])){
    $task   = $_POST['task'];
    $date   = $_POST['date'];
    $email  = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address= $_POST['address'];
    $category= $_POST['category'];

    $query= "INSERT INTO manger  VALUES ('$task', '$date', '$email', '$mobile', '$address', '$category')";
    $data = mysqli_query($conn, $query);
    if($data){
        echo "data inserted successfully";
    }else{
        echo "Failed to insert data: ";
    }
}


?>