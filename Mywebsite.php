<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="w3.css">
<script>
			function sample()
			{
			
				var a=document.getElementById("text1");
				var b=document.getElementById("text2");
				var c=document.getElementById("text3");
				
				c.value=Number(a.value)+Number(b.value);
				
			}
			</script>
</head>
<body>

<div class="w3-row">
  <ul class="w3-navbar w3-border w3-black">
  <li><a class="w3-hover-red" href="#">Home</a></li>
  <li><a class="w3-hover-blue" href="#">Services</a></li>
  <li><a class="w3-hover-green" href="#">Products</a></li>
  <li><a class="w3-hover-green" href="#">Cutomers</a></li>
  <li><a class="w3-hover-teal" href="#">About</a></li>
</ul>

</div>


<div class="w3-container w3-grey" style="align:center;" > 
			<p id="para1" align="center">
					<font color="white"><h2>A simple javascript Code.</h2></font>
			</p>
			
			<form action="" method="post">
				<font color="white">Enter a number : &nbsp; </font><input id="text1" type="text"> </input><br/><br/>
				<font color="white">Enter a number : &nbsp; </font><input id="text2" type="text"> </input><br/><br/>
				<font color="white">Result : &nbsp; </font><input id="text3" type="text"> </input><br/><br/>
				
				<input type="button" value="Addition" onclick="sample()"></input>
			</form>
</div>

<article class="w3-container"> 
  <h2>Paris</h2>
  <p>The Paris area is one of the largest population centers in Europe, 
  with more than 2 million inhabitants.</p>
</article>

<section class="w3-container"> 
 <table class="w3-table">
<tr>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Points</th>
</tr>
<tr>
  <td>Jill</td>
  <td>Smith</td>
  <td>50</td>
</tr>
</table>

</section>

<div class="w3-row w3-blue">
  <div class="w3-blue w3-container w3-third">
    <h2>w3-twothird</h2> 
  </div>
  
</div>
</body>
</html>