<!--  -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
   <style type="text/css">
      .carousel-item img {  
          float: none;
         margin: 0 auto;
         /*margin-bottom: 100px;*/
         background-size: cover;
         background-position: center center;
         background-repeat: no-repeat;
         position: relative;
         height: 300px;
         width: 350px;
         display: block;
         margin-bottom: 30px;
      }
     /* .project {
          background-size: cover;
          background-position: center center;
          background-repeat: no-repeat;
          position: relative;
          height: 300px;
          width: 100%;
          display: block;
          margin-bottom: 30px;
      }*/

      carousel-caption {
         background-color: whitesmoke;
         opacity: 1;
         background: rgba(0, 0, 0, 0.4);  
         position: absolute;
         top: 0;
         bottom: 0;
         left: 0;
         right: 0;
         background: #2c98f0;
         opacity: 0;
         -webkit-transition: 0.3s;
         -o-transition: 0.3s;
         transition: 0.3s;       
      }

   </style> 
  </head>
  <body>
    <h1>Hello, world!</h1>

      <div class="bd-example">
         <?php 
            $project = "select * from project";
            $result = mysqli_query($conn, $project);                   
            $row = mysqli_fetch_assoc($result);
            $rowcount=mysqli_num_rows($result);
          ?>

           <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>             
                  <?php 
                     $rowcount;
                        for ($i=0; $i <= $rowcount; $i++) { ?>                
                           <li data-target="#carouselExampleCaptions" data-slide-to="<?= $i; ?>"></li>
                  <?php } ?>    
            </ol>
            <div class="carousel-inner row">
               <div class="carousel-item active ffset-md-4 ol-md-4">
                 <img src="img/portfolio/p2.jpg" alt="1st image">
                 <div class="carousel-caption">
                   <h2>I have total <?= $rowcount; ?> project</h2>                
                 </div>
               </div>

               <?php $i=0;
                  $project = "select * from project";
                  $result2 = mysqli_query($conn, $project);
                  $rowcount=mysqli_num_rows($result2);

                     while($row = mysqli_fetch_assoc($result2)) { ?>
                        <?php 
                           $rowcount;
                              if($i <= $rowcount){
                                 $i=$i+1;
               } ?>

               <div class="carousel-item ffset-md-4 ol-md-4">
                  <img src="<?= $row['image']; ?>" alt="Image not found">
                  <div class="carousel-caption">
                     <h1>Project No: <?= $i; ?> of <?= $rowcount; ?></h1>
                     <h2><?= $row['name']; ?></h2>
                     <h4><?= $row['about']; ?></h4>
                     <a class="btn btn-success" target="_blank" href="<?= $row['link']; ?>" >Link</a>
                  </div>
               </div>  
               <?php } ?> 
           </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
           </div>
       </div> 






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <script type="text/javascript">
  $('.carousel').carousel({
  interval: 2000
})
</script> 
  </body>
</html>