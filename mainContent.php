  
    <?php

include("conDtatabase.php");

    $sql="SELECT * FROM `video`";
    
    
    $result = mysqli_query($con, $sql);

    $resultCheck=mysqli_num_rows($result);

    if( $resultCheck>0){ //check if got any result from query
   


        while($row = mysqli_fetch_assoc($result)) {
    

    $videoPath=$row['path'];
    $videoTitle=$row['title'];
    $deteUpload=$row['updateDate'];
    $id=$row['id'];
    $userUpload=$row['uploadBy'];
    

   

        include("searchResultContent.php") ;
        

    }}

    ?>