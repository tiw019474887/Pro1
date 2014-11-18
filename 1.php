<!-->V.1.0.0<!-->
<!doctype html>
<html>
<head>
</head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<style type="text/css">
@import url("1234/stylesheet.css");

body {
	background-color: #FFFFFF;
	;
	
}
body,td,th {
	font-family: "1234";
}
</style>
<meta charset="utf-8">
<title>ก๋วยเตี๋ยวต้มยำบ้านลายจุดข้างวัง</title>
</head>

<body>
<table width="785" border="0" align="center">
  <tbody>
    <tr>
      <td colspan="3"><img src="Untitled-1.png" width="800" height="300" alt=""/></td>
    </tr>
    <tr>
      <td colspan="3"><marquee align="left"><font size="+1">
      ก๋วยเตี๋ยวต้มยำบ้านลายจุดข้างวัง ยินดีตอนรับ เชิญสั่งตามใจชอบเลยนะ^^
      </font></marquee></td>
    </tr>
    <tr>
      <td width="10">&nbsp;</td>
      <td width="307" ><h1><center>สั่งก๋วยเตี๋ยวต้มยำ</center></h1>
      <center><h3>บ้านลายจุดข้างวัง   </h3></center>
      <form class="form-group" method="post" action="1.php" font="quark bold">    
       	<div class="form-group">
          <label for="select"><h4>เลือกเส้น :</h4></label>
          <select  class="form-control" name="select" id="select" >
             <option>เลือกเส้น</option>
            <option>เส้นเล็ก</option>
            <option>เส้นหมี่</option>
            <option>เส้นบะหมี่</option>
            <option>วุ้นเส้น</option>
          </select>
       	  </div>
        </p>
        <p>
        <div class="form-group">
          <label>
            <input type="checkbox" name="CheckboxGroup[]" value="หมู" id="CheckboxGroup1_0">
            หมู</label>
          <br>
          <label>
            <input type="checkbox" name="CheckboxGroup[]" value="ลูกชิ้น" id="CheckboxGroup1_1">
            ลูกชิ้น</label>
          <br>
          <label>
            <input type="checkbox" name="CheckboxGroup[]" value="หมูสับ" id="CheckboxGroup1_2">
            หมูสับ</label>
          <br>
          <label>
            <input type="checkbox" name="CheckboxGroup[]" value="ตับลวก" id="CheckboxGroup1_4">
            ตับลวก</label>
      </p></div>
       <div class="form-group">
    	   <h4>ใส่อะไรเป็นพิเศษ:</h4>
        <label for="fvalue1">ใส่ไข่ยางมะตูม 15 บาท/ฟอง:</label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="กี่ฟอง" name="fvalue1">
            
           
        <label for="fvalue2">ใส่กุ้ง 55 บาท/ตัว: </label>
			<input type="text" class="form-control" id="exampleInputEmail1" placeholder="กี่ตัว" name="fvalue2">
            
            
        <label for="fvalue3">ใส่ปลาหมึก 55 บาท/ตัว: </label>
    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="กี่ตัว" name="fvalue3">
          </div>
                <div class="form-group">
                	<label for="fvalue4"><h4>เพิ่มเติม: </h4> 
                	(สิ่งที่ต้องการเพิ่มเติม เช่น ไม่ใส่ผัก)</label>
    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="fvalue4">
                </div>
                
                <div class="form-group">
                	<label for="fvalue5"><h4>ชื่อผู้สั่ง</h4></label>
    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="fvalue5">
                </div>  
                
                <div class="control-group">
					<label class="control-label" for="submit"></label>
					<div class="controls">
					<button id="submit" name="ok" value="ok"
							class="btn btn-warning">สั่ง</button>
						<button input type="reset" name="Submit1" value="   RESET  " class="btn btn-danger">RESET</button>
					</div>
				</div>                          
        </form></td>
      <td width="454" align="center" valign="top">
		
		<p><img src="ก๋วยเตี๋ยว.png" width="200" height="193" alt=""/></p>
        
        
		<p>
		  <?php
		
		if(isset($_POST['select'])){
		$selected_val = $_POST['select'];  
		
		echo "รายการชำระเงิน <br>";
		echo "<h4>------ชามที่1-------</h4>"."<br>";
		echo "เส้น :     " .$selected_val."<br>";
		}
		if(isset($_POST['CheckboxGroup'])){
		for($i=0;$i<count($_POST["CheckboxGroup"]);$i++){
		if(trim($_POST["CheckboxGroup"][$i]) != "")
		{
		$box = $_POST["CheckboxGroup"][$i];
		echo "ใส่ :     ".$box."<br>";
		}
		}
		}
		if(isset($_POST['fvalue1'])){
		$a = $_POST['fvalue1'];
		$aa = $a*15;
		if($aa != 0){
			echo "ไข่ยางมะตูม :   $a  ฟอง    ".$aa." บาท"."<br>";
			$sum = 0;
			$sum = $sum+$aa;
		}
		}
		if(isset($_POST['fvalue2'])){
		$b = $_POST['fvalue2'];
		$bb = $b*55;
		if($bb != 0){
			echo "กุ้ง :   $b  ตัว     ".$bb." บาท"."<br>";
			$sum = $sum+$bb;
		}
		}
		if(isset($_POST['fvalue3'])){
		$c = $_POST['fvalue3'];
		$cc = $c*55;
		if($cc != 0){
			echo "ปลาหมึก :    $c  ตัว    ".$cc." บาท"."<br>";
			$sum = $sum+$cc;
		}
		}
		if(isset($_POST['fvalue4'])){
		if($_POST['fvalue4'] != " "){
			echo "เพิ่มเติม : ".$_POST['fvalue4']."<br>";
		}
		}
		if(isset($_POST['fvalue5'])){
			echo "ชื่อผู้สั่ง:   ".$_POST['fvalue5']."<br>";
			$sum = $sum+35;
			echo "<h4>------รวมทั้งหมด-------</h4>"."<br>";
			echo "รวมเป็นเงิน :  ".$sum." บาท"."<br>";
		}
		?>
      </p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p><img src="45.png" width="437" height="305" alt=""/></p></td>
    </tr>
  </tbody>
</table>
</body>
</html>