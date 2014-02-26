<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>First Ajax Tutor</title>
</head>
<script type="text/javascript">
	var ajaxku;
	function ambildata(nip){
		ajaxku = buatajax(); 
		var url ="datakaryawan.php";
		url=url+"?q="+nip;
		url=url+"&id="+Math.random();
		ajaxku.onreadystatechange=stateChanged; 
		ajaxku.open("GET",url,true);
		ajaxku.send(null);
	}

	function buatajax(){
		if ( window.XMLHttpRequest) {
			return new XMLHttpRequest();
		}
		if ( window.ActiveXObject) {
			return new ActiveXObject("Microsoft.XMLHTTP");
		}
		return null;
	}
	
	function stateChanged() {
		var data;
		if ( ajaxku.readyState==4 ) {
			data = ajaxku.responseText;
			if ( data.length > 0 ) {
				document.getElementById("alamat").value = data
			} else {
				document.getElementById("alamat").value = " ";
			}
		}
	}
	
	
</script>
<body>
<table>
	<tr>
		<td>NIP :</td>
	</tr>
	<tr>
		<td>
			<select name="karyawan" id="karyawan" onchange="ambildata(this.value)" >
				<option selected>--Pilih Karyawan--</option> 
				<option value="123456">Wildan Hermansyah</option>
				<option value="234567">Carli Rido</option>
				<option value="345678">Danim Riandi</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Alamat :</td>
	</tr>
	<tr>
		<td><textarea name="alamat" id="alamat" cols="30" rows="10"> </textarea></td>
	</tr>
</table>
</body>
</html>