//<?php
// $fle=fopen("data.txt","r");
// echo "File opened successfully";
// ?>

// <?php
// $file=fopen("data.txt","r");
// fclose($file);
// echo "File closed";


// ?>
// <?php
// $file=fopen("data.txt","r");
// $content=fread($file,filesize("data.txt"));
// fclose($file);
// echo $content;

// ?>

// <?php
// $file=fopen("data.txt","w");
// fwrite($file,"Hello PHP File Handling!");
// fclose($file);
// echo "Data Written Successfully";


// ?>


// <?php
// $file=fopen("data.txt","a");
// fwrite($file,"\nThis line is appended.");
// fclose($file);

// ?>


// <?php

// echo file_get_contents("data.txt");

// ?>


// <?php
// echo file_put_contents("data.txt","\nAppend text",FILE_APPEND);


// ?>

// <?php
// $lines=file("data.txt");
// foreach($lines as $line){
//     echo $line."<br>";

// }

//?>
<?php
//file_exists()


if(file_exists("data.txt")){
    echo "File exists";
}else{
    echo "File not exist";
}

//fiesize()
$size=filesize("data.txt");
echo "Filesize" . $size . "bytes";

//filetype()
echo filetype("data.txt");

//fileattime()
// echo "Last Accessed:" . date("d-m-Y H:i:s",fileatime("data.txt"));

echo "Lat Accessed" .  fileatime("data.txt");

//filemtime()
echo "Last modified: " . date("d-m-Y H:i:s", filemtime("data.txt"));

//filectime
echo "Last changed:" . date("d-m-Y H:i:s",filectime("data.txt"));

//fileperms()
$perms=fileperms("data.txt");
echo "Permissions:" . substr(sprintf('%o',$perms),-4);

//fileowner()

echo "Owner ID" . fileowner("data.txt");

//filegroup()
echo "Groupm ID:" . filegroup("data.txt");

//fileinode()
echo "Inode number: " . fileinode("data.txt");

//file and folder management functions
//copy
copy("data.txt","data_copy.txt");
echo "File copied successfully";

//rename()
rename("data_copy.txt","newdata.txt");
echo "File renamed";

//unlink()
unlink("newdata.txt");
echo "File deleted permanently";

//mkdir()
mkdir("myfolder");
echo "Folder created";

//rmdir()
rmdir("myfolder");
echo "Folder removed";

//is_file()
if(is_file("data.txt")){
    echo "It is a file";
}else{
    echo "It is not a file";
}

//is_dir()
if(is_dir("myfolder")){
    echo "It is a directory";
}else{
    echo "Not a directory";
}


//PHP DIRECTORY HANDLING FUNCTIONS
//scandir()
$files=scandir(".");
print_r($files);

//opendir()
$dir=opendir(".");
echo "Directory opened";

//closedir()
$dir=opendir(".");
closedir($dir);
echo "Directory closed";

//getcwd()
echo getcwd();

//chdir()
//chdir("uploads");
echo getcwd();

?>



