<html>
<head>
<title>Inventory Management System Admin Side</title>
<style>
@import 'https://fonts.googleapis.com/css?family=Ubuntu';
body {
  background : #bdc3c7 ;
  font-family: 'Ubuntu', sans-serif; 
  font-size : 17px ;
}



.window {
  width : 600px ; 
  margin : 75px auto ; 
  background : #2c3e50; 
  height : 350px ; 
  border-radius : 5px ;
  display : relative ; 
   box-shadow: 10px 10px 10px  #888888;
}

.afterclose {
    color : #34495e ; 
    display: none  ; 
    text-align: center  ; 
}

.open {
    color : #fff ; 
    padding : 15px ; 
    background: #2ecc71 ; 
    border-radius: 4px ; 
    border: none ; 
}

.bash {
  width : 600px ; 
  background : #34495e; 
  height : 310px ; 
  border-radius : 5px ;
  top: 40px;
  display : absolute; 
  color : #fff ;
}

/* effected by controllers */

.windowmax {
  width : 100% ; 
  margin : auto ; 
  background : #2c3e50; 
  height : 1000px; 
  border-radius : 5px ;
  display : relative ; 
}

.windowmin {
  width : 300px ; 
  height : 45px ;
  background : #2c3e50; 
  border-radius : 5px ; 
  bottom : 0 ; 
  position: fixed;
}

.bashmax {
  display : absolute ; 
  width : 100% ; 
  background : #34495e; 
  height : 960px ; 
  border-radius : 5px ;
  bottom: 0;
  color : #fff ;
}

/* !--end--! */

.buttons {
  width : 15px ;
  height : 15px ; 
  border-radius : 50% ;
  float : right ; 
  margin : 13px 4px;
  border: none ; 
}

.close {
  background : #e74c3c ;
}

.maximize{
  background : #f1c40f ;
}

.minimize{
  background : #2ecc71 ;
}

.result {
  display : none ;
}

.controls {
  height : 40px ; 
  top : 0 ; 
}

.title {
    color : #fff ; 
    font-weight: bold ; 
    padding : 10px;
}

/* Style for labels */
label {
  font-weight: bold;
  margin-bottom: 5px;
}

/* Style for input fields */
input[type="text"],
input[type="password"] {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  width: 100%;
  box-sizing: border-box;
  margin-bottom: 10px;
}

/* Style for submit button */
input[type="submit"] {
  background-color: green;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.typeit/4.2.3/typeit.min.js"></script>
<body>

<h1 class="afterclose"> You Closed Terminal ! --> <button class="open"> reopen ? </button> </h1>
      <div class="window">
        <div class="controls"> 
          <button class="buttons close" id="close"></button>
          <button class="buttons maximize" href="#"></button>
          <button class="buttons minimize" href="#"></button>
          <div class="title">Inventory Management System Admin Terminal</div>
      </div>
      <div class="bash">
        <span id="span">[admin@inventory_system ~]:$</span>
        <span class="type-it">sudo su</span>
        <br >
        <div class="result">
            <br>
                <form>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username"><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password"><br>
                    <input type="submit" value="Submit" style="background-color: green; color: white; border: none; padding: 10px 20px; font-size: 16px;">
                </form>
        </div>
      </div>  

</body>
<script>
$('.type-it').typeIt({
  });
//detected terminal words
var span = $("#span");
span.html(span.html().replace(/adnan/, '<span style="color: #3498db ; font-weight: bold; ">$&</span>'));

var span = $("#span");
span.html(span.html().replace(/~/, '<span style="color: #2ecc71 ; font-weight: bold; ">$&</span>'));



//result proccess
setInterval(Timer, 3500);
  function Timer() {
    $(".result").show();
}

//controllers :D
$("button.close").click(function(){
    $(".window").hide();
    $(".afterclose").fadeIn("fast");
});

$("button.open").click(function(){
    $(".window").show();
    $(".afterclose").hide();
});

$("button.maximize").click(function(){  $(".window").addClass("windowmax");  
    $(".bash").addClass("bashmax");
    $(".windowmax").removeClass("window");          
    $(".bashmax").removeClass("bash");
});

$("button.minimize").click(function(){
    $(".bash").remove();
    $(".window").addClass("windowmin");
    $(".windowmin").removeClass("window");
});



</script>
</html>