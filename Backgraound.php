<form method="POST">
                
            
<button type="submit" name="b" class="btn btn-primary btn-sm">night</button>
<button type="submit" name="w" class="btn btn-secondary btn-sm">Small button</button>
</form>
    
                    <?php
                    if(isset($_SERVER['REQUEST_METHOD'])=="POST"){
                    if(isset($_POST['b']))
                        {
                           
                            echo "<style> body{background:black;}</style>";
                            
    
                        }
                        else if (isset($_POST['w'])) {echo "<style> body{background:white;}</style>";}
                    }else {echo "<style> body{background:white;}</style>";}
                      
                    
                    ?>