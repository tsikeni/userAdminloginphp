<html>
<head>
<style>
   #feedback-form {
  width: 280px;
  margin: 0 auto;
  background-color: #fcfcfc;
  padding: 20px 50px 40px;
  box-shadow: 1px 4px 10px 1px #aaa;
  font-family: sans-serif;
}
#feedback-form * {
    box-sizing: border-box;
}
#feedback-form h2{
  text-align: center;
  margin-bottom: 30px;
}
#feedback-form input {
  margin-bottom: 15px;
}
#feedback-form input[type=text] {
  display: block;
  height: 32px;
  padding: 6px 16px;
  width: 100%;
  border: none;
  background-color: #f3f3f3;
}
#feedback-form button[type=submit] {
  display: block;
  margin: 20px auto 0;
  width: 150px;
  height: 40px;
  border-radius: 25px;
  border: none;
  color: #eee;
  font-weight: 700;
  box-shadow: 1px 4px 10px 1px #aaa;
  background: -moz-linear-gradient(left, #207cca 0%, #9f58a3 100%);
  background: -webkit-linear-gradient(left, #207cca 0%,#9f58a3 100%); 
  background: linear-gradient(to right, #207cca 0%,#9f58a3 100%); 
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#207cca', endColorstr='#9f58a3',GradientType=1 ); 
}
#feedback-form input:not(:checked) + #feedback-phone {
  height: 0;
  padding-top: 0;
  padding-bottom: 0;
}
</style>
</head>
<body>
<div id="feedback-form">
<h2 class="header">Register Today</h2>
<div>
<form action="login.php?op=in" method="POST">
Username : <input type="text" name="user" size="17"/>
Password &nbsp;:<input type="password" name="password" size="17"/>
<button type="submit" name="submit" value="LOGIN">Register</button>
</form>
</div>
</div>
</body>
</html