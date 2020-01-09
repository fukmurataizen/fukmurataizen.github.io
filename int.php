<?php
$data="test";
$itijouhou_file='itijouhou.txt';
$fp=fopen($itijouhou_file,'ab');
if($fp){
  if(flock($fp, LOCK_EX)){
    if(fwrite($fp, $data) == FALSE){
      print('file write error');
    }
    flock($fp, LOCK_UN);
  } else {
    print('file lock error');
  }
}
?>









