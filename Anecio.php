<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Activity 2 - SET C: Expansion Project</title>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	color: #000033;
	font-size: 12px;
}
.style1 {color:rgb(248, 6, 6)}
.style2 {
	color: #006600;
	font-weight: bold;
}
.style3 {color: #006600}
.style7 {color:rgb(15, 15, 37); font-style: italic; }
body {
	background-color:rgb(216, 119, 22);
}
.style8 {color:rgb(8, 8, 8)}

</style></head>

<body>
<p>&nbsp;</p>
<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#1230">
  <tbody><tr>
    <td><h1 align="center">&nbsp;</h1>
      <h1 align="center" class="style8">Public Library Expansion Project</h1>
      <h2 align="center" class="style1">Cost Estimates</h2>
      <table width="82%" border="0" align="center" cellpadding="5" cellspacing="0">
        <tbody><tr>
          <th width="23%" height="31" bgcolor="#CCCCCC" scope="col">Expenditures</th>
          <th width="18%" align="right" bgcolor="#CCCCCC" scope="col">Estimated Cost</th>
          <th width="19%" align="right" bgcolor="#CCCCCC" scope="col">10% Increase</th>
          <th width="19%" align="right" bgcolor="#CCCCCC" scope="col">15% Increase</th>
          <th width="21%" align="right" bgcolor="#CCCCCC" scope="col">20% Increase</th>
        </tr>
        <tr bgcolor="#FFFFCC">
          <td align="center" bgcolor="#FFFFCC">Lumber</td>
          <td align="right" bgcolor="#FFFFCC">$ 150,000.00</td>
          <td align="right"><span class="style7"><?php
            $cost = 150000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 150000.00;
            $total_cost = $cost + $cost * 0.15;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 150000.00;
            $total_cost = $cost + $cost * 0.20;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
        </tr>
        <tr bgcolor="#CCFFFF">
          <td align="center" bgcolor="#CCFFFF">Concrete</td>
          <td align="right" bgcolor="#CCFFFF">$ 78,000.00</td>
          <td align="right"><span class="style7"><?php
            $cost = 78000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 78000.00;
            $total_cost = $cost + $cost * 0.15;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 78000.00;
            $total_cost = $cost + $cost * 0.20;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
        </tr>
        <tr bgcolor="#FFFFCC">
          <td align="center" bgcolor="#FFFFCC">Drywall</td>
          <td align="right" bgcolor="#FFFFCC">$ 69,000.00</td>
          <td align="right"><span class="style7"><?php
            $cost = 69000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 69000.00;
            $total_cost = $cost + $cost * 0.15;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 69000.00;
            $total_cost = $cost + $cost * 0.20;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
        </tr>
        <tr bgcolor="#CCFFFF">
          <td align="center" bgcolor="#CCFFFF">Paint</td>
          <td align="right" bgcolor="#CCFFFF">$ 12,000.00</td>
          <td align="right"><span class="style7"><?php
            $cost = 12000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 12000.00;
            $total_cost = $cost + $cost * 0.15;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 12000.00;
            $total_cost = $cost + $cost * 0.20;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
        </tr>
        <tr bgcolor="#FFFFCC">
          <td align="center" bgcolor="#FFFFCC">Miscellaneous</td>
          <td align="right" bgcolor="#FFFFCC">$ 20,000.00</td>
          <td align="right"><span class="style7"><?php
            $cost = 20000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 20000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
          <td align="right"><span class="style7"><?php
            $cost = 20000.00;
            $total_cost = $cost + $cost * 0.10;
            echo "$ " . number_format($total_cost, 2);
        ?></span></td>
        </tr>
        
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>
          <td align="right">&nbsp;</td>
        </tr>
        <tr>
          <td align="right"><strong>Total Expenditures:</strong></td>
          <td align="right"><span class="style2"><?php
			$a = 150000.00;
            $b = 78000.00;
            $c = 69000.00;
            $d = 12000.00;
            $e = 20000.00;
			$total_cost = $a + $b + $c + $d + $e;
			echo "$ " . number_format($total_cost, 2);
		?></span></td>
          <td align="right"><span class="style3"><span class="style2"><?php
			$a = 165000.00;
            $b = 85800.00;
            $c = 75900.00;
            $d = 13200.00;
            $e = 22000.00;
			$total_cost = $a + $b + $c + $d + $e;
			echo "$ " . number_format($total_cost, 2);
		?></span></span></td>
          <td align="right"><span class="style3"><span class="style2"><?php
			$a = 172500.00;
            $b = 89700.00;
            $c = 79350.00;
            $d = 13800.00;
            $e = 23000.00;
			$total_cost = $a + $b + $c + $d + $e;
			echo "$ " . number_format($total_cost, 2);
		?></span></span></td>
          <td align="right"><span class="style3"><span class="style2"><?php
			$a = 180000.00;
            $b = 93600.00;
            $c = 82800.00;
            $d = 14400.00;
            $e = 24000.00;
			$total_cost = $a + $b + $c + $d + $e;
			echo "$ " . number_format($total_cost, 2);
		?></span></span></td>
        </tr>
        
        <tr>
          <td colspan="5" align="right"><h4>Created by: &lt;<em>Justin C. Anecio</em>&gt;</h4></td>
        </tr>
      </tbody></table>      
      <p align="center" class="style1">&nbsp;</p></td>
  </tr>
</tbody></table>


</body></html>