<!-- <form action = '' method = 'post'>
    Enter a String: 
    <input type = 'text' id = "string" name = "string" placeholder="Enter a String">
    

</form> -->

<?php

    

    
        $myfile = fopen("hello.txt",'w') or die("Unable to open file!");
        //$txt = $_POST['string'];
        $txt = "Hi, I am Suresh chaudhary,Roll no.A007 from batch Batch1 & currently pursing MCA from MPSTME.";
        echo $txt;

        fwrite($myfile, $txt);

        $myfile = fopen("hello.txt",'r') or die("Unable to open file!");
        echo fread($myfile,filesize("hello.txt"));

        fclose($myfile);

    
?>