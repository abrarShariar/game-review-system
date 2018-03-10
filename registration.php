<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration Page</title>

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

#register_form{
  text-align: -webkit-center;
  line-height: 2.5;
  font-size: large;
}
</style>
</head>

<body bgcolor="#E6E6FA">
  <br/><h1 style="text-align:center"><font  face="verdana" size="7">Register Here</font></h1><br/><br/><br/><br/><br/><br/>

  <form id="register_form" action="register.php" method="POST">
    <label face="verdana"> Username: </label>
    <input type="text" name="username" placeholder="enter username here"/>
    <br/>

    <label face="verdana"> Email: </label>
    <input type="email" name="email" placeholder="enter email here"/>
    <br/>

    <label face="verdana"> Password: </label>
    <input  type="password" name="password" placeholder="enter password here"/>
    <br/>

    <label face="verdana">Confirm Password: </label>
    <input  type="password" name="confirm_password" placeholder="enter confirm password here"/>
    <br/>

    <input class="button" type="submit" name="submit" value="Register">
    <input type="button" class="button" name="gp_back" value="Go Back" onclick="window.location = '.'"/> <br>
  </form>

</body>

</html>
