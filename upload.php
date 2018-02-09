<?php
//It's created by MD.ENAMUL HAQ


//$_FILES function use for know the file name.
$name="photo/".$_FILES['file']['name'];
//$_FILES function use for know the temporary file name.
$tem_name=$_FILES['file']["tmp_name"];
//move_uploaded_file use for move the file another folder.
if (move_uploaded_file($tem_name, $name)) {
	echo "File uploaded completed.";
}else{
	echo "Your file dose not uploaded.Please try again.";
}
?>
