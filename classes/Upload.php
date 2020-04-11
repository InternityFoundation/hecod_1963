<?php
   
trait Upload{
	
	public function uploadImage($fileData,$folder){	
		$newFile = time();
		$errors= array();
		$file = $fileData;
		$fileName = $file['name'];
		$fileSize =$file['size'];
		$fileTmp =$file['tmp_name'];
		$fileType=$file['type'];
		$fileExt=strtolower(end(explode('.',$file['name'])));

		$expensions= array("jpeg","jpg","png");
		if(file_exists($fileName)) {
			echo "Sorry, file already exists.";
			}
		if(in_array($fileExt,$expensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}
 
		if($fileSize > 102400){
			$errors[]='File size must be excately 100 KB';
		}

		if(empty($errors)==true){
			move_uploaded_file($fileTmp,"./upload/".$folder."/".$newFile.".".$fileExt);
			//$login->photoUpdate($newFile.'.'.$fileExt);
			//echo "$newFile file uplod";
			return $newFile.'.'.$fileExt;
		}

		else{
			$qry = join(' ', $errors);
		}
	}
}