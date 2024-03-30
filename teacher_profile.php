
<?php 
include 'dashboard_teacher.php';
?>

<html>
<head><title>Teacher Profile</title></head>

<style>

li a {
  display: block;
  color: #34425A;
  /*font-weight: bold; */
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
 
}

li a:hover {
  background-color: #E9edf2;
}


</style>
<body>
<div class="page-header" style="background-color: #f9f9f9">
<h1 style="text-shadow: 1px 1px 1px #000000; color: #1d7874; font-size: 25px">&nbsp&nbspMy Profile</h1>
              
            </div>


<div class="page-content" style="background-color: #f9f9f9">
<div class="card" style="border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">


<?php
include '_conn.php';
?>

<table style="margin-left: 20px; margin-top: 3px; margin-bottom: 20px; ">
    <tbody >
      <tr>
        <th style="background-color: #f9f9f9; color: black; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName:</th>
        <td  style="background-color: #f9f9f9; color: dark; width: 300px; position: relative; "><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["fullname"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp";
        echo '<td><a href="editt.php?id=' . $row["user_id"] . '"><img src="images/edit_icon.png" style="height: 20px; width: 20px; margin-left: -50px; position: relative">&nbsp&nbsp&nbsp&nbsp</a></td>';
        }}}?></td>
      </tr>

     
      <tr>
        <th style="background-color: #f9f9f9; color: black;">ID Number:</th>
        <td style="background-color: #f9f9f9; color: dark; width: 210px; position: relative"><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["id_number"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp"; 
        echo '<td><a href="editt_id.php?id=' . $row["user_id"] . '"><img src="images/edit_icon.png" style="height: 20px; width: 20px; margin-left: -50px; position: relative">&nbsp&nbsp&nbsp&nbsp</a></td>';
        }}}?>

        </td>
      </tr>
      
      <tr>
        <th style="background-color: #f9f9f9; color: black">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmail: </th>
        <td style="background-color: #f9f9f9; color: dark; width: 210px; position: relative"><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["email"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp"; 
        echo '<td><a href="editt_email.php?id=' . $row["user_id"] . '"><img src="images/edit_icon.png" style="height: 20px; width: 20px; margin-left: -50px; position: relative">&nbsp&nbsp&nbsp&nbsp</a></td>';
        }}}?>

        </td>
      </tr>
      <tr>
        <th style="background-color: #f9f9f9; color: black">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspContact Number:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </th>
        <td style="background-color: #f9f9f9; color: dark; width: 210px; position: relative"><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp ". $row["contact_number"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp";
        echo '<td><a href="editt_contact.php?id=' . $row["user_id"] . '"><img src="images/edit_icon.png" style="height: 20px; width: 20px; margin-left: -50px; position: relative">&nbsp&nbsp&nbsp&nbsp</a></td>';
        }}}?>

        </td>
      </tr>
      <tr>
        <th style="background-color: #f9f9f9; color: black">&nbsp&nbsp&nbsp&nbspAddress: </th>
        <td style="background-color: #f9f9f9; color: dark; width: 210px; position: relative"><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp ". $row["address"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp";
        echo '<td><a href="editt_address.php?id=' . $row["user_id"] . '"><img src="images/edit_icon.png" style="height: 20px; width: 20px; margin-left: -50px; position: relative">&nbsp&nbsp&nbsp&nbsp</a></td>';
        }}}?>


        </td>
      </tr>
      <tr>
        <th style="background-color: #f9f9f9; color: black">&nbsp&nbsp&nbsp&nbspBirthday: </th>
        <td style="background-color: #f9f9f9; color: dark; width: 210px; position: relative"><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp ". $row["birthday"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp";
        echo '<td><a href="editt_birthday.php?id=' . $row["user_id"] . '"><img src="images/edit_icon.png" style="height: 20px; width: 20px; margin-left: -50px; position: relative">&nbsp&nbsp&nbsp&nbsp</a></td>';
        }}}?>


        </td>
      </tr>
      <tr>
        <th style="background-color: #f9f9f9; color: black">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSkills: </th>
        <td style="background-color: #f9f9f9; color: dark; width: 210px; position: relative"><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp ". $row["skills"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp";
        echo '<td><a href="editt_skills.php?id=' . $row["user_id"] . '"><img src="images/edit_icon.png" style="height: 20px; width: 20px; margin-left: -50px; position: relative">&nbsp&nbsp&nbsp&nbsp</a></td>';
        }}}?>

        </td>
      </tr>




      <!-- Add more rows as needed -->

    </tbody>
  </table>



</div>

</div>