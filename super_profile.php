<?php 
include 'dashboard_super.php';
?>



<html>
<head><title>Admin Profile</title></head>



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

tr {
    background-color: ;
    width: ; /* Change to your desired color */
    /* Other styling properties */
}

td {
    width: ;
}

</style>
<body>
<div class="page-header" style="background-color: #f9f9f9">
                <h1 style="text-shadow: 1px 1px 1px #000000; color: #1d7874; font-size: 25px">&nbsp<!--<img src="images/study_profile.png" style="height: 48px; width: 48px; position: absolute; margin-top: -5px; margin-left: -5px">-->&nbsp&nbspAdmin Profile</h1>
              
            </div>


<div class="page-content" style="background-color:#f9f9f9">
<div class="card" style="background-color: white; border-style: none; border-width: 10px; border-color: #1d7874; box-shadow: none;
border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">

<?php
include '_conn.php';
?>

<table style="background-color: #f9f9f9; margin-left: 20px; margin-top: 5px">
    <tbody style="background-color: #f9f9f9;">
      <tr >
        <th style="background-color: #f9f9f9 color: white; height: 40px " >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName:</th>
        <td><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["fullname"] . "</td>"; }}}?></td>
      </tr>

      <tr>
        <th style="background-color:#f9f9f9; color: black; height: 40px">ID Number:</th>
        <td><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["id_number"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp"; }}}?>

        </td>
      </tr>

      
      <tr >
        <th style="background-color: #f9f9f9; color: black; height: 40px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCourse:</th>
        <td ><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["course"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp"; }}}?>

        </td>
      </tr>

      
      <tr>
        <th style="background-color: #f9f9f9; color: black; height: 40px ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYear:</th>
        <td ><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["year"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp"; }}}?>

        </td>
      </tr>

      <tr>
        <th style="background-color: #f9f9f9; color: black; height: 40px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEmail: </th>
        <td ><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["email"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp"; }}}?>

        </td>
      </tr>
      <tr>
        <th style="background-color: #f9f9f9; color: black; height: 40px">&nbsp&nbsp&nbsp&nbspContact Number:&nbsp&nbsp&nbsp&nbsp </th>
        <td ><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["contact_number"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp"; }}}?>

        </td>
      </tr>
      <tr>
        <th style="background-color: #f9f9f9; color: black; height: 40px">&nbsp&nbsp&nbsp&nbspAddress: </th>
        <td ><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["address"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp"; }}}?>


        </td>
      </tr>
      <tr>
        <th style="background-color: #f9f9f9; color: black; height: 40px">&nbsp&nbsp&nbsp&nbspBirthday: </th>
        <td ><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["birthday"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp"; }}}?>


        </td>
      </tr>
      <tr>
        <th style="background-color: #f9f9f9; color: black; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSkills: </th>
        <td ><?php 
        if (isset($_SESSION['user_id'])) {
          $loggedInUserId = $_SESSION['user_id'];
      
          // SQL query to select data for the logged-in user
          $sql = "SELECT * FROM tbl_users WHERE user_id = $loggedInUserId";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        echo "";
         while ($row = $result->fetch_assoc()) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp". $row["skills"] . "&nbsp&nbsp&nbsp&nbsp&nbsp</td>&nbsp<td>&nbsp&nbsp&nbsp&nbsp&nbsp"; }}}?>

        </td>
      </tr>




      <!-- Add more rows as needed -->

    </tbody>
  </table>

<div>

</div>

</div>
</body>
</html>