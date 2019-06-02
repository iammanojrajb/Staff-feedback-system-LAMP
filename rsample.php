<html>
 <head>
  <style>

  .printalign{
       margin-top:-870px;
       


  }

.box {
    width:300px;
    height:300px;
    position:absolute;
    margin-left:-500px; /* half of width */
    margin-top:-150px;  /* half of height */
    top:30%;
    left:40%;
}

#target {
  position: absolute;
  left:0;
  top: 80px;
  width: 100%;
}
a{
  padding-left: 10%;
}

table, th, td {
 border: 1px solid black;
 border-collapse: collapse;
text-align:center;
}
	</style>
 </head>
<body>
<div id="printpg">
<div id="target">
<a>Date:<?echo date("d-m-Y");?></a><a>Year:<? echo $yearvalue; ?> </a><a>Sem:<? echo $semvalue;?> </a> <a>Department:<? echo $depname;?> </a>       
</div>
   <form>
      <table class="box" align="center" style="width:70%">
	<tr>	
		<th>SNO</th>
		<th>SubjectCode</th>
		<th>SubjectTitle</th>
		<th>Staffname</th>
		<th>Percentage</th></tr>
<?php 
for($z=0;$z<count($copysname);$z++)
{  $sno=$z+1;?>

	<tr>
    	 <td><?php echo $sno; ?> 
       </td>
    	 <td><?php echo $copysubcode[$z]; ?> </td>
    	 <td><?php echo $copysubname[$z]; ?> </td>
	 <td><?php echo $copysname[$z] ;?> </td>
    	 <td> <?php echo $avgvalue[$z] ;?> </td>
 	</tr><?
}

//for($i=0;$i<count($copysname);$i++)
//echo "-----$copysubcode[$i]-------$avg[$i]";

   </table>
   </div>

   <div class="printalign">
   <button onclick="printInfo('printpg')">PRINT</button>
   </div>
  </form>
  <script>function printInfo(divname) {
    /*var openWindow = window.open("", "title", "attributes");
    openWindow.document.write(ele.previousSibling.innerHTML);
    openWindow.document.close();
    openWindow.focus();
    openWindow.print();
    openWindow.close();*/
    var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>
</html>