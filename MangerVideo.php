
<link rel="stylesheet" href="css/MangeVideo.css">




    <style>
        body{/*background-color:black;*/}
            .video-section {
                display: grid;
                 grid-template-columns: repeat(auto-fill,minmax(250px,1fr));
              gap: 3rem 1.5rem;
             padding: 3rem 0;
             margin: 0 1.5rem;
            border-top: 4px solid #ccc;
            /*background-color:black; */
            }

            video{
                width: 98%;
                 height: 280px;
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

                        <a class="videio-title" >    <!--- open videio-title--->
                    <?php echo  $videoTitle; ?>
                        </a>    <!--- close videio-title--->
                        <h7 style="color:#9e9e9e">Uploaded by :<a class="video-channel-name" href="#"> <!--- open video-channel-name--->
                            <?php echo $_SESSION['user'] ?>
                        </a> </h7><!--- close video-channel-name--->
                        <div class="video-metadata "> <!---open video-details--->

                            <span>12k view</span>
                            •
                            <span><?php echo  $deteUpload; ?></span>
                            
                            <button onclick="document.getElementById('id01').style.display='block'" class="D_video">Delete Video</button>
              <button onclick="document.getElementById('id01').style.display='block'"class="U_video">Update</button>

              <div id="id01" class="modal">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <form class="modal-content" action="/action_page.php">
                  <div class="container">
                    <h1>Delete Video</h1>
                    <p>Are you sure you want to delete your Video?</p>
                  
                    <div class="clearfix">
                      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancel_btn">Cancel</button>
                      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="delete_btn">Delete</button>
                    </div>
                  </div>
                </form>
              </div>


                </div>  <!--- video-bottom-section--->



                </article>  <!--- close video-container--->


                

     

    <script>
      // Get the modal
      var modal = document.getElementById('id01');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      </script>
 
