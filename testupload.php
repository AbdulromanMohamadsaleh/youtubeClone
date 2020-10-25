
<?php
// Start the session
session_start();
?>
<?php ob_start(); ?>
<?php  include_once("header1.php") ?>
<?php  include_once("class/VideoDetailsFromProvider.php");
 $_SESSION['pathloc']= "testupload.php";

 if(!empty($_SESSION['user'])){$user=$_SESSION['user'];}
 
 ?>

<style>
  
  h4 {
    margin-left: 23;
    color: red;
}

.video-section{border-top:none;}
</style>   


    <section class="video-section">     <!--- open video-section--->




    <!----------------------------   open main upload form  --------------------------------->
      
    <form  method='POST' id='form' enctype="multipart/form-data">
    <div class"form-group">
    <br><br>
        <input type="file" name="fileInput" class="form-control-file" id="exampleFormControlFile1" required>
      </div>
      <br>
      <div class"form-group">
            <input type="text" name="titleInput" class="form-control" placeholder="Title" required>
        </div>
        <br>
        <div class"form-group">
        <textarea class="form-control" name="description"  rows="3" placeholder="description"  ></textarea>
        <br>
        </div>

        <br>
        <select class="custom-select" name="category">
              <option selected>Open this select menu</option>
              <option value="0">Public</option>
              <option value="1">Private</option>
              
            </select>
            <br>
            <br>
            <button type='submit'name='uploadButton' class='btn btn-primary'>Upload</button>
        
        
        
                       
    </form>


    <!----------------------------   close main upload form  --------------------------------->


  




    </section>   <!--- close video-section--->
  <?php 
  
  if(empty($_SESSION['user'])){echo "<h4>Sorry You Cant Upluad Because You are Not a Member You have to Register First<h4>";}
  else{
  
  include("conDtatabase.php");

if(isset($_POST['uploadButton'])){

      $description=$_POST['description'];
      $title=$_FILES['fileInput']['name'];
      $tmp=$_FILES['fileInput']['tmp_name'];
      $titleInput=$_POST['titleInput'];
      

      // move_uploaded_file($tmp,"videos/".$name);

      $allowType="mp4";
      $path=$tmp.basename($title);


      $videoEXE=strtolower(pathinfo($path,PATHINFO_EXTENSION));
      $videoPath=basename($title);
      if($videoEXE==$allowType){

          $videioPath=move_uploaded_file($tmp,"videos/".basename($title));  
          $videoPath=basename($title);
          $_SESSION["path"] =$videoPath;
          $sql="insert into video (title,description,path,uploadBy) values ('$titleInput','$description','$videoPath','$user')";
          $res=mysqli_query($con,$sql);
          
          $_SESSION["res"] =$res;
          
     
                 header('Location: p.php');
                 ob_end_flush;
       
          }
          

         else{echo"<h4>Invalid Type:"."<br>"."you Most Enter mp4 Only</h4>";}
        }
         
          // end if check file

        

     
      

} // end if is set




?>
    

 <?php include_once("footer.php")?>

