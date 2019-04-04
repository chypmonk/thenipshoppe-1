<!DOCTYPE html>
<html>
<head>    
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">  
   <title>'The Nip Shoppe'</title> 
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Elsie" rel="stylesheet">       
   <link rel= 'stylesheet' type='text/css' href= 'style.css'> 
</head> 
<body>
    <main> 
        <div class = 'title'><a href = 'index.php'>The Nip Shoppe</a></div> 
        <div class = 'headerwrap'>
            <div class = 'header'>               
                <div class = 'description'>For All Your Catnip Needs </div>
            </div>
        </div>
        <div class = 'sidebar-column'>
            <?php echo  nl2br (file_get_contents ("page-sections/left-sidebar.txt"));?>           
        
        </div><div class = 'content-column'>
            <?php echo  nl2br (file_get_contents ("page-sections/center.txt"));?>    
            
        </div><div class = 'sidebar-column'>
            <?php echo  nl2br (file_get_contents ("page-sections/right-sidebar.txt"));?>    
           
            </div>        
        <br><br><br>Copyright &copy; <?php echo  date('Y'); ?> Susan Rodgers, <a href = 'https://lilaavenue.com'>Lila Avenue</a><br><br>
       
       
    </main>    
</body>
</html>
        
