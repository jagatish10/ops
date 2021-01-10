<html>
<body bgcolor="#f0fff0">
<head>
<br><br>
<style>

div.container {
    width: 100%;
    border: 0;
}

header, footer {
    padding: 1em;
    color: black;
    background-color:slategray;
    clear: left;
    text-align: center;
}
 
</style>
</head>
</body>
<body> 
<div class="container">

<header>
   <h1>AKIYO.SHOP</h1>
   <h1>Online Printing System</h1>
</header>
<br><br>
<tr>
<td align="left"><a href="utama.php"><img width="2% "src="../images/home.png"></a></td>
</tr>

</div>

<br><br>
<center>
<script type="text/javascript">
  function myr(n) {
    var l = Math.floor(n);
    var r = Math.round((100*n)%100);
    if (r<10) return "myr"+l+".0"+r;
    if (r==100) return "myr"+(l+1)+".00";
    return "myr"+l+"."+r;
  }
  function calculate(f) {
    var amount=f.amount.options[f.amount.selectedIndex].text;
    var price=f.price.options[f.price.selectedIndex].value;
    var total=amount*price;
    f.total.value=myr(total);
    f.due.value=myr(0.00*total);
  }
</script>

<form method="post" action="upload.php">
  Copies
  <select name=amount>
    <option>1
    <option>2
    <option>5
    <option>10
    <option>100
	<option>200
  </select>
  Price
  <select name=price>
    <option value="0.20">0.20
	<option value="0.40">0.40

  </select>
  each.
  <p>
  <table>
    <tr><td>
      Total cost:</td><td><input type=text name=total size=8>
    </td></tr>
    
    <tr><td>
      Amount due:</td><td><input type=text name=due size=8>
    </td></tr>
  </table>
  <p>
  <input type=button value=Calculate onClick="calculate(this.form);"> 
 <tr>
<td><input type="submit" name="submit" required="required" value="SEND"/></td>
<td><input type="Reset" name="Reset" required="required" value="CLEAR"/></td></tr> 
  
</form>
</center>