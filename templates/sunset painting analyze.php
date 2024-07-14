{% comment %} <?php
if(isset($_FILES['image'])){

    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];

    if(move_uploaded_file($file_tmp,"static/uploads/". $file_name)){
        echo'<script language="javascript">';
        echo'alert("Image Uploaded Successfully :)")';
        echo'</script>';
    }else {
        echo'<script language="javascript">';
        echo'alert("Image Upload Failed!!")';
        echo'</script>';
    }
}

?> {% endcomment %}

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Sunset: Step 11</title>

  <!-- font Awesome -->
  <script src="https://kit.fontawesome.com/b7fd829945.js" crossorigin="anonymous"></script>

  <!--bootstrap stylesheet-->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
  <!--my stylesheet-->
  {% load static %}
  <link rel="stylesheet" type="text/css" href="{% static 'styles.css' %}">


</head>

<body>

  <!-- navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark nav-bar">
    <div class="container-fluid">
      <video class="logo" width="25%" autoplay muted>
        <source src="Logo-video.mp4" type="video/mp4">
      </video>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item home">
            <a class="nav-link " aria-current="page" href="HomePage.html">Home</a>
          </li>
          <li class="nav-item blog">
            <a class="nav-link " href="BlogsPage.html">Blogs</a>
          </li>
          <li class="nav-item shop">
            <a class="nav-link" href="ShopPage.html">Shop</a>
          </li>
          <li class="nav-item project">
            <a class="nav-link active" href="Learn.html">SBS</a>
          </li>
          <li class="nav-item gallery">
            <a class="nav-link " href="Gallery.html">Gallery</a>
          </li>
          <li class="nav-item Contact">
            <a class="nav-link" href="HomePage.html #ContactMe">Contact</a>
          </li>
          <li class="nav-item insta">
            <a class="nav-link" href="https://www.instagram.com/mr.singh_23/">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li class="nav-item youtube">
            <a class="nav-link" href="https://www.youtube.com/channel/UC20IYjJgesMSqm8q2ct8dXg">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
        </ul>
        <!-- <form class="d-flex">
                 <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-success" type="submit">Search</button>
               </form> -->
      </div>
    </div>
  </nav>


  <!-- Side navigation -->
  <div class="sidenav">
    <a href="Sunset Step 1.html">Step 1</a>
    <a href="Sunset Step 2.html">Step 2</a>
    <a href="Sunset Step 3.html">Step 3</a>
    <a href="Sunset Step 4.html">Step 4</a>
    <a href="Sunset Step 5.html">Step 5</a>
    <a href="Sunset Step 6.html">Step 6</a>
    <a href="Sunset Step 7.html">Step 7</a>
    <a href="Sunset Step 8.html">Step 8</a>
    <a href="Sunset Step 9.html">Step 9</a>
    <a href="Sunset Step 10.html">Step 10</a>
    <a href="Sunset Step 11.html">Step 11</a>


  </div>
  <div class="Steps-page">


      <script src="main.js"></script>
      <form class="" action="" method="post" enctype="multipart/form-data">
        {% csrf_token %}
        {{ form.as_p }}
        <input class="btn btn-success" type="file" name="image" /><br><br>
        
        <input class="btn btn-success" type="submit"/>
    </form><br>
      <a href="Sunset Step 1.html"><button class="btn btn-success" type="button" name="button">Start Learning Again</button></a><br>
      <a href="SIFT ANALYSIS.html"><button class="btn btn-success" type="button" name="button">Documentation Of Analysis</button></a><br>
      <a href="GENERATE ANALYSIS.html"><button class="btn btn-success" type="button" name="button">See Result</button></a><br>


    </div>

    <!-- footer section -->

    <footer id="footer">
      <a href="https://twitter.com/SokhiAbhinavS23?t=gxnaYTug79lDYXTgr4Dpjw&s=09"><i class="fab fa-twitter footer-icon"></i></a>
      <a href=""><i class="fab fa-facebook-f footer-icon"></i></a>
      <a href="https://www.instagram.com/mr.singh_23/"><i class="fab fa-instagram footer-icon"></i></a>
      <a href="https://www.youtube.com/channel/UC20IYjJgesMSqm8q2ct8dXg"><i class="fab fa-youtube footer-icon"></i></a>
      <p class="footer-copyright">© Copyright 2021 Abhinav Creates Art</p>

    </footer>
    <!-- bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
