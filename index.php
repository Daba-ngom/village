<?php
include('php/connecter.php');
if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['telephone']) && !empty($_POST['telephone']))
&& (isset($_POST['bp']) && !empty($_POST['bp']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['message']) && !empty($_POST['message']))){
  //Mail
  $name = $_POST['name'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $bp = $_POST['bp'];
  $message = $_POST['message'];
  
  $to = "dabangom56@gamil.com";
  $headers = "From : " . $email;
  
  //if( mail($to, $telephone, $message, $headers)){
      
      $query = "INSERT INTO `contact` (nom, telephone, bp, email, message) VALUES ('$name','$telephone', '$bp',  '$email',  '$message')";
      $result = mysqli_query($connection, $query);
      $succes = "Votre message a été bien enrégistré";

  //}
  
}
?>



 
 
 <!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
        <nav class="navbar navbar-expand-lg">
                  <div class="container">
                    
                   
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <a class="nav-link active av" aria-current="page" href="index.html"><button type="button" class="btn btn-outline-dark">Accueil</button></a>
                        <a class="nav-link av" href="contacts.html"><button type="button" class="btn btn-outline-dark">Contats</button></a>
                        
                      </div>
                    </div>
                  </div>
                </nav>


  

        </header><br><br><br>

       


      <div class="container">
         <div class="row">
           <div class="col-md-3">
           <img src="images/jil.jpg" width="600px" height="600px">
              
           </div>
           <div class="col-md-3">
           </div>
           
           <div class="col-md-6">
             <div id="box">
              <div class="card" style="width: 18rem;">
  
  <div class="card-body">
    <h3 class="card-title"> Contactez-Nous</h3>
    
         
                <form method="POST">
                    <div>
                      <label for="inputName" class="form-label">Nom Prenom</label>
                      <input type="text" name="name" id="inputName" class="form-control form-control-sm " style="font-size:11px;" required>
                      
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telephone</label>
                        <input type="text" name="telephone" class="form-control" id="inputEmailTelephone" aria-describedby="numberHelp" required>
                        
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">BP</label>
                        <input type="text" name="bp" class="form-control" id="inputBp" aria-describedby="emailHelp" required>
                        
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" required>
                        
                      </div>
                      <div class="mb-3">
                      <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">message</label>
                        <textarea class="form-control" name="message" id="inputMessage" rows="3"></textarea>
                         </div>          
                          
                    
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                  </form>
                          </div>
                           </div>
                          <div class="col-md-3">
                          </div>
                   </div>  
            </div><br><br><br>
            <footer>
            <div class="container">
        <div class="row">
            <div class="col">
                    <h1 class="text-center add">
                        Applications et outils...!
                    </h1>
                    <br>
                  
                  </div><br><br>
                  
            </footer>

            
       
              









        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>