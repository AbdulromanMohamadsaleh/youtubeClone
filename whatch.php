<?php  include("header1.php") ?>
<style >
.video-turn{

width:100%;
height: 560px;
align-items: center;

                 
                 min-width: 250px;
                 min-height: 150px;

}

.video-section {
    display: grid;
    grid-template-columns: repeat(auto-fill,minmax(250px,1fr));
    gap: 3rem 1rem;
    padding: 0 0 1rem 0;
    margin: 0 1.5rem;
    border-top: 4px solid #ccc;
}


div.video-watch{

  grid-column: 1/-1;

}
h3{color:#0400ff;  /* for video title */
    margin-top:2px;}


</style>


                                    

             
  <div class="video-watch">
      <br>
      
      <video  class="video-turn"autoplay controls>

      <source src="videos/
<?php
    if(isset($_GET['id'])) {  //  take id of video from URL

            $id=$_GET['id'];
          
            include_once("conDtatabase.php");
            $q="select * from video where id=$id";  //  query check if thre is id
            $query=mysqli_query($con,$q);
        
            $row=mysqli_fetch_assoc($query);
            $p=$row['path']; //  use $row to take value of path from table in  database
            $title=$row['title']; //  use $row to take value of title from table in  database
            $desc=$row['description'];
            $deteUpload=$row['updateDate'];
            $userupload=$row['uploadBy'];
            echo $p;
    }


?>">
      </video>
      <h3>Title: <?php echo $title; ?></h3>
      <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
                           <h7 style="color:#9e9e9e">Uploaded by : <?php echo  $userupload ?></h7>
                        </a> <!--- close video-channel-name--->
      <h5>Description: <?php echo  "<br><h6>$desc</h6>"; ?></h5>

                        <div class="video-metadata "> <!---open video-details--->

                            <span>12k view</span>
                            •
                            <span><?php echo  $deteUpload; ?></span>
      </div>

      
     
      
      
     
      
      

      
    </section>
    <!--begains of videos -->
    <section class="video-section">
      <h2 class="video-section-title">

        
      </h2>
      <article class="video-container">   <!--- open video-container--->

<a href="#" class="thumbnail" data-duration="12:24">  <!--- صورة  open thumbnail--->
    <img class="thumbnail-img" src="http://unsplash.it/250/150?gravity=centeer">     <!--- thumbnail-img--->
    

</a>     <!--- close thumbnail--->

<div class="video-bottom-section">  <!--- معلومات اسفل thumnail  open video-bottom-section -->
    
    <a href="#">

        <img class="channel-icon" src="http://unsplash.it/36/36?gravity=centeer">   <!--- channel-icon--->
    </a>

    <div class="video-details"> <!--- open video-details--->

        <a class="videio-title" href="#">    <!--- open videio-title--->
            Videio title
        </a>    <!--- close videio-title--->
        <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
            channel name
        </a> <!--- close video-channel-name--->
        <div class="video-metadata "> <!---open video-details--->

            <span>12k view</span>
            •
            <span>1 week ago</span>

        </div>

    </div>  <!--- close video-details--->


</div>  <!--- video-bottom-section--->







</article>  <!--- close video-container--->


<article class="video-container">   <!--- open video-container--->

<a href="#" class="thumbnail" data-duration="12:24">  <!--- صورة  open thumbnail--->
    <img class="thumbnail-img" src="http://unsplash.it/250/150?gravity=centeer">     <!--- thumbnail-img--->
    

</a>     <!--- close thumbnail--->

<div class="video-bottom-section">  <!--- معلومات اسفل thumnail  open video-bottom-section -->
    
    <a href="#">

        <img class="channel-icon" src="http://unsplash.it/36/36?gravity=centeer">   <!--- channel-icon--->
    </a>

    <div class="video-details"> <!--- open video-details--->

        <a class="videio-title" href="#">    <!--- open videio-title--->
            Videio title
        </a>    <!--- close videio-title--->
        <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
            channel name
        </a> <!--- close video-channel-name--->
        <div class="video-metadata يحتوي على عدد المشاهدت و التاريخ">

            <span>12k view</span>
            •
            <span>1 week ago</span>

        </div>

    </div>  <!--- close video-details--->


</div>  <!--- video-bottom-section--->







</article>  <!--- close video-container--->


<article class="video-container">   <!--- open video-container--->

<a href="#" class="thumbnail" data-duration="12:24">  <!--- صورة  open thumbnail--->
    <img class="thumbnail-img" src="http://unsplash.it/250/150?gravity=centeer">     <!--- thumbnail-img--->
    

</a>     <!--- close thumbnail--->

<div class="video-bottom-section">  <!--- معلومات اسفل thumnail  open video-bottom-section -->
    
    <a href="#">

        <img class="channel-icon" src="http://unsplash.it/36/36?gravity=centeer">   <!--- channel-icon--->
    </a>

    <div class="video-details"> <!--- open video-details--->

        <a class="videio-title" href="#">    <!--- open videio-title--->
            Videio title
        </a>    <!--- close videio-title--->
        <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
            channel name
        </a> <!--- close video-channel-name--->
        <div class="video-metadata يحتوي على عدد المشاهدت و التاريخ">

            <span>12k view</span>
            •
            <span>1 week ago</span>

        </div>

    </div>  <!--- close video-details--->


</div>  <!--- video-bottom-section--->







</article>  <!--- close video-container--->                


<article class="video-container">   <!--- open video-container--->

<a href="#" class="thumbnail" data-duration="12:24">  <!--- صورة  open thumbnail--->
    <img class="thumbnail-img" src="http://unsplash.it/250/150?gravity=centeer">     <!--- thumbnail-img--->
    

</a>     <!--- close thumbnail--->

<div class="video-bottom-section">  <!--- معلومات اسفل thumnail  open video-bottom-section -->
    
    <a href="#">

        <img class="channel-icon" src="http://unsplash.it/36/36?gravity=centeer">   <!--- channel-icon--->
    </a>

    <div class="video-details"> <!--- open video-details--->

        <a class="videio-title" href="#">    <!--- open videio-title--->
            Videio title
        </a>    <!--- close videio-title--->
        <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
            channel name
        </a> <!--- close video-channel-name--->
        <div class="video-metadata يحتوي على عدد المشاهدت و التاريخ">

            <span>12k view</span>
            •
            <span>1 week ago</span>

        </div>

    </div>  <!--- close video-details--->


</div>  <!--- video-bottom-section--->







</article>  <!--- close video-container--->


<article class="video-container">   <!--- open video-container--->

<a href="#" class="thumbnail" data-duration="12:24">  <!--- صورة  open thumbnail--->
    <img class="thumbnail-img" src="http://unsplash.it/250/150?gravity=centeer">     <!--- thumbnail-img--->
    

</a>     <!--- close thumbnail--->

<div class="video-bottom-section">  <!--- معلومات اسفل thumnail  open video-bottom-section -->
    
    <a href="#">

        <img class="channel-icon" src="http://unsplash.it/36/36?gravity=centeer">   <!--- channel-icon--->
    </a>

    <div class="video-details"> <!--- open video-details--->

        <a class="videio-title" href="#">    <!--- open videio-title--->
            Videio title
        </a>    <!--- close videio-title--->
        <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
            channel name
        </a> <!--- close video-channel-name--->
        <div class="video-metadata يحتوي على عدد المشاهدت و التاريخ">

            <span>12k view</span>
            •
            <span>1 week ago</span>

        </div>

    </div>  <!--- close video-details--->


</div>  <!--- video-bottom-section--->







</article>  <!--- close video-container--->  

<article class="video-container">   <!--- open video-container--->

<a href="#" class="thumbnail" data-duration="12:24">  <!--- صورة  open thumbnail--->
    <img class="thumbnail-img" src="http://unsplash.it/250/150?gravity=centeer">     <!--- thumbnail-img--->
    

</a>     <!--- close thumbnail--->

<div class="video-bottom-section">  <!--- معلومات اسفل thumnail  open video-bottom-section -->
    
    <a href="#">

        <img class="channel-icon" src="http://unsplash.it/36/36?gravity=centeer">   <!--- channel-icon--->
    </a>

    <div class="video-details"> <!--- open video-details--->

        <a class="videio-title" href="#">    <!--- open videio-title--->
            Videio title
        </a>    <!--- close videio-title--->
        <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
            channel name
        </a> <!--- close video-channel-name--->
        <div class="video-metadata يحتوي على عدد المشاهدت و التاريخ">

            <span>12k view</span>
            •
            <span>1 week ago</span>

        </div>

    </div>  <!--- close video-details--->


</div>  <!--- video-bottom-section--->







</article>  <!--- close video-container--->                  

<article class="video-container">   <!--- open video-container--->

<a href="#" class="thumbnail" data-duration="12:24">  <!--- صورة  open thumbnail--->
    <img class="thumbnail-img" src="http://unsplash.it/250/150?gravity=centeer">     <!--- thumbnail-img--->
    

</a>     <!--- close thumbnail--->

<div class="video-bottom-section">  <!--- معلومات اسفل thumnail  open video-bottom-section -->
    
    <a href="#">

        <img class="channel-icon" src="http://unsplash.it/36/36?gravity=centeer">   <!--- channel-icon--->
    </a>

    <div class="video-details"> <!--- open video-details--->

        <a class="videio-title" href="#">    <!--- open videio-title--->
            Videio title
        </a>    <!--- close videio-title--->
        <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
            channel name
        </a> <!--- close video-channel-name--->
        <div class="video-metadata "> <!---open video-details--->

            <span>12k view</span>
            •
            <span>1 week ago</span>

        </div>

    </div>  <!--- close video-details--->


</div>  <!--- video-bottom-section--->







</article>  <!--- close video-container--->

<article class="video-container">   <!--- open video-container--->

<a href="#" class="thumbnail" data-duration="12:24">  <!--- صورة  open thumbnail--->
    <img class="thumbnail-img" src="http://unsplash.it/250/150?gravity=centeer">     <!--- thumbnail-img--->
    

</a>     <!--- close thumbnail--->

<div class="video-bottom-section">  <!--- معلومات اسفل thumnail  open video-bottom-section -->
    
    <a href="#">

        <img class="channel-icon" src="http://unsplash.it/36/36?gravity=centeer">   <!--- channel-icon--->
    </a>

    <div class="video-details"> <!--- open video-details--->

        <a class="videio-title" href="#">    <!--- open videio-title--->
            Videio title
        </a>    <!--- close videio-title--->
        <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
            channel name
        </a> <!--- close video-channel-name--->
        <div class="video-metadata "> <!---open video-details--->

            <span>12k view</span>
            •
            <span>1 week ago</span>

        </div>

    </div>  <!--- close video-details--->


</div>  <!--- video-bottom-section--->







</article>  <!--- close video-container--->

<article class="video-container">   <!--- open video-container--->

<a href="#" class="thumbnail" data-duration="12:24">  <!--- صورة  open thumbnail--->
    <img class="thumbnail-img" src="http://unsplash.it/250/150?gravity=centeer">     <!--- thumbnail-img--->
    

</a>     <!--- close thumbnail--->

<div class="video-bottom-section">  <!--- معلومات اسفل thumnail  open video-bottom-section -->
    
    <a href="#">

        <img class="channel-icon" src="http://unsplash.it/36/36?gravity=centeer">   <!--- channel-icon--->
    </a>

    <div class="video-details"> <!--- open video-details--->

        <a class="videio-title" href="#">    <!--- open videio-title--->
            Videio title
        </a>    <!--- close videio-title--->
        <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
            channel name
        </a> <!--- close video-channel-name--->
        <div class="video-metadata "> <!---open video-details--->

            <span>12k view</span>
            •
            <span>1 week ago</span>

        </div>

    </div>  <!--- close video-details--->


</div>  <!--- video-bottom-section--->







</article>  <!--- close video-container--->                


<article class="video-container">   <!--- open video-container--->

<a href="#" class="thumbnail" data-duration="12:24">  <!--- صورة  open thumbnail--->
    <img class="thumbnail-img" src="http://unsplash.it/250/150?gravity=centeer">     <!--- thumbnail-img--->
    

</a>     <!--- close thumbnail--->

<div class="video-bottom-section">  <!--- معلومات اسفل thumnail  open video-bottom-section -->
    
    <a href="#">

        <img class="channel-icon" src="http://unsplash.it/36/36?gravity=centeer">   <!--- channel-icon--->
    </a>

    <div class="video-details"> <!--- open video-details--->

        <a class="videio-title" href="#">    <!--- open videio-title--->
            Videio title
        </a>    <!--- close videio-title--->
        <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
            channel name
        </a> <!--- close video-channel-name--->
        <div class="video-metadata "> <!---open video-details--->

            <span>12k view</span>
            •
            <span>1 week ago</span>

        </div>

    </div>  <!--- close video-details--->


</div>  <!--- video-bottom-section--->







</article>  <!--- close video-container--->


</section>   <!--- close video-section--->

    </section>
  </div>


  <?php include_once("footer.php")?>
