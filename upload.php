<?php 
  $src=$_FILES['img']['tmp_name'];
  $file=$_FILES['img']['name'];
  $ext=array_pop(explode('.',$file));
  $rand=time().mt_rand().'.'.$ext;
  $dst="uploads/{$rand}";
  if($_FILES['img']['error']===0){
  	if(move_uploaded_file($src,$dst)){
  		echo '上传成功!';
  	};
  }
?>