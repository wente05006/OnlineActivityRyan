<?php
if(isset($_POST['uname'])){
$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$utel = $_POST['utel'];
$uconmet = $_POST['uconmet'];
$unvaildate = $_POST['uavaildate'];
$ubrowser = $_POST['ubrowsers'];
$umessage = $_POST['umessage'];
if(isset($_POST['uftype_1'])){
	$_POST['uftype_1'] = "Say Hello ";
	$uftype_1 = $_POST['uftype_1'];
}else{
	$uftype_1 = "";
}
if(isset($_POST['uftype_2'])){
	$_POST['uftype_2'] = "Complain ";
	$uftype_2 = $_POST['uftype_2'];
}else{
	$uftype_2 = "";
}
if(isset($_POST['uftype_3'])){
	$_POST['uftype_3'] = "Share Opinion ";
	$uftype_3 = $_POST['uftype_3'];
}else{
	$uftype_3 = "";
}
if(isset($_POST['uftype_4'])){
	$_POST['uftype_4'] = "Share Joke ";
	$uftype_4 = $_POST['uftype_4'];
}else{
	$uftype_4 = "";
}
echo "Name = ".$uname."<br>";
echo "E-mail = ".$uemail."<br>";
echo "Telephone = ".$utel."<br>";
echo "Contact Preference = ".$uconmet."<br>";
echo "Available Date = ".$unvaildate."<br>";
echo "Favourite Browser = ".$ubrowser."<br>";
echo "Feedbacktype = ".$uftype_1.$uftype_2.$uftype_3.$uftype_4."<br>";
echo "Message = ".$umessage."<br>";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Handling in PHP</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="uname">
      </div>
      <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="uemail">
      </div>
      <div>
        <label for="telephone">Telephone:</label>
        <input type="tel" id="tel" name="utel">
      </div>
      <div>
        <label for="cmethod">Contact Preference:</label>
        <input type="radio" id="conmet" name="uconmet" value="mail" checked>Email&nbsp;&nbsp;
        <input type="radio" id="conmet" name="uconmet" value="tel">Telephone<br>
      </div>
      <div>
        <label for="availDate">Available Date:</label>
        <input type="date" id="adate" name="uavaildate">
      </div>
      <div>
        <label for="availDate">Favourite Browser:</label>
        <input list="browsers" name="ubrowsers">
        <datalist id="browsers">
          <option value="Chrome">
          <option value="Edge">
          <option value="Firefox">
          <option value="Opera">
          <option value="Safari">
        </datalist>
      </div>
      <div>
        <label for="feedtype">Feedback type:</label><br>
        <label for="ftype_1">Say Hello</label>
        <input type="checkbox" id="ftype_1" name="uftype_1" value="1"><br>
        <label for="ftype_2">Complain</label>
        <input type="checkbox" id="ftype_2" name="uftype_2" value="2"><br>
        <label for="ftype_3">Share Opinion</label>
        <input type="checkbox" id="ftype_3" name="uftype_3" value="3"><br>
        <label for="ftype_4">Share Joke</label>
        <input type="checkbox" id="ftype_4" name="uftype_4" value="4"><br>
      </div>
      <div>
        <label for="msg">Message:</label><br>
        <textarea id="msg" name="umessage" style="width:400px; height:200px"></textarea>
      </div>
      <div class="button">
        <button type="submit">Submit</button>
      </div>
    </form>
  </body>
</html>
