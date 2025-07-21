<?php

$today = date("Y-m-d_H-i");
$path = "Task4_Folder_Uploads/$today";
if (!file_exists($path)) {
mkdir($path, 0777, true);
echo "Created folder: $path";
} else {
echo "Folder already exists: $path";
}
?>