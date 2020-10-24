
   
       
        <style>
        body{/*background-color:black;*/}
            .video-section {
                display: grid;
                 grid-template-columns: repeat(auto-fill,minmax(250px,1fr));
              gap: 3rem 1rem;
             padding: 3rem 0;
             margin: 0 1.5rem;
            border-top: 4px solid #ccc;
            /*background-color:black; */
            }

            video{
                width: 100%;
                 height: 300px;
                 min-width: 250px;
                 min-height: 150px;
                 background-color:black;
            }

            .video-container {
                       display: flex;
                         flex-direction: column;
                        width: fit-content;
                        
            }
          /*  .videos {

            background-color:black; 
            }*/
        </style>
                <article class="video-container">   <!--- open video-container--->

                <!--- صورة  open thumbnail--->
                
                
                    <!--- thumbnail-img--->


                    <video  controls>
                        <source  src="videos/<?php echo $videoPath; ?>" >
                
                            Your browser does not support the video tag.
                    </video>

                </a>     <!--- close thumbnail--->

                <div class="video-bottom-section">  <!--- معلومات اسفل thumnail  open video-bottom-section -->
                    
                    <a href="#">

                        <img class="channel-icon" src="http://unsplash.it/36/36?gravity=centeer">   <!--- channel-icon--->
                    </a>

                    <div class="video-details"> <!--- open video-details--->

                        <a class="videio-title" <?php echo "href=whatch.php?id=$id"; ?>>    <!--- open videio-title--->
                    <?php echo  $videoTitle; ?>
                        </a>    <!--- close videio-title--->
                        <a class="video-channel-name" href="#"> <!--- open video-channel-name--->
                           <h7 style="color:#9e9e9e">Uploaded by : <?php echo $userUpload ?></h7>
                        </a> <!--- close video-channel-name--->
                        <div class="video-metadata "> <!---open video-details--->

                            <span>12k view</span>
                            •
                            <span><?php echo  $deteUpload; ?></span>
                            
                            
                        </div>

                    </div>  <!--- close video-details--->


                </div>  <!--- video-bottom-section--->







                </article>  <!--- close video-container--->



                <script> 
var myVideo = document.getElementById("video1");

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 
</script> 
