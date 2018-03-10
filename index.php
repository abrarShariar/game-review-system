<?php
if(isset($_GET["m"])){
	echo "<p style='text-align:center'>".$_GET["m"]."</p>";
}
?>
<style>
.button {
    background-color:  #555555;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 3px 2px;
    cursor: pointer;
}
</style>
<form action="check.php" method="post" style="text-align:center">
<br/><h1><font  face="verdana" size="7">Enter your Info</font></h1><br/><br/><br/><br/><br/><br/>

<body bgcolor="#E6E6FA">
<font  face="verdana">User Name :</font>
<input value="" type="text" name="uname" /><br><br/>
<font  face="verdana">Password  :</font> <input type="password" name="pass" /><br>
<br><br/>
<input type="submit" value="Login" class="button" />
<button  value="Logout" class="button">   Go back </button> <br>
</body>

</form>