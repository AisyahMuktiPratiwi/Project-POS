<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ewert&family=Kranky&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Ewert&family=Fredericka+the+Great&family=Kumar+One&family=Train+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ewert&family=Fredericka+the+Great&family=Kumar+One&family=Romanesco&family=Train+One&display=swap" rel="stylesheet">

    <title>ADEAMART|Home</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light " style="background-color:rgb(255, 139, 86)">
         <div class="container">
           <a class="navbar-brand" href="#" style="font-family:'Kranky', cursive;color:white;font-size:30px;">ADEAMART</a>
           <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
               aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

               <form class="d-flex my-2 my-lg-0">
                 <a href="" style="color:white;text-decoration:none;"><i class="fab fa-whatsapp" style="font-size:25px;color:white"></i><span style="color:darkorange ">--</span> 0857-8686-5435</a>
                 <a href="" style="color:white;text-decoration:none;"><i class="far fa-envelope"style="font-size:25px;color:white; margin-left:2rem;"></i><span style="color:darkorange ">--</span></i>adeamart@gmail.com</a>

               </form>
               <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item has-icon text-danger" style="color: white">
                <i class="fas fa-sign-out-alt" style="color: white"></i> <span style="color: white">Logout</span>
            </button>
        </form>
           </div>
     </div>
   </nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>
</html>
