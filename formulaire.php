<?php
 
 if(isset($_POST['send'])){
    
    $service =$_POST['service'];
    $besoins = $_POST['besoins'];
    $qt = $_POST['qt'];
    $qtstock = $_POST['qtstock'];
    $datee = $_POST['datee'];
    if (!(empty($service) || empty($besoins) || empty($qt) || empty($qtstock) || empty($datee))){
        include('connexion.php');
        $pdostat = $pdo->prepare('INSERT INTO user (services,besoins,quantite,stock,dates) values(?,?,?,?,?)');
        $pdostat->bindparam(1,$service);
        $pdostat->bindparam(2,$besoins);
        $pdostat->bindparam(3,$qt);
        $pdostat->bindparam(4,$qtstock);
        $pdostat->bindparam(5,$datee);
        $pdostat->execute();
        header('location: maquette.php');
    }

 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="\bootstrap-5.0.2-dist\css\bootstrap.min.css">
</head>
<body class="bg-secondary">
    
    <div class="w-50 mx-auto vh-100  d-flex align-items-center">
        
        <form action="#" method="post" class="row gx-2 gy-2 px-2 py-3 bg-light border rounded" id="formulaire">
            <div class="col-12 text-center">
                <span class="reponse">salut</span>
            </div>
            <div class="col-6">
                <input type="text" placeholder="entrer le service" name="service" class="form-control ">
            </div>
            <div class="col-6">
                <input type="text" placeholder="entrer le besoins" name="besoins" class="form-control">
            </div>
            <div class="col-6">
                <input type="number" placeholder="entrer la quatite" name="qt" class="form-control ">
            </div>
            <div class="col-6">
                <input type="number" placeholder="entrer la quantite en stock" name="qtstock" class="form-control ">
            </div>
            <div class="col-6">
                <input type="date" placeholder="entrer la date" name="datee" class="form-control">
            </div>
            <div class="col-6">
                <input type="submit" value="enregistrer" name="send" class="btn btn-success w-100 " id="bout">
            </div>
        </form>
    </div>
    <a href="maquette.php"></a>
    <style>
        input{
            text-transform: capitalize;
        }
        form{
            box-sizing: border-box;
            flex-grow: 1;
        }
        span{
            visibility: hidden;

        }
        a{
            position: absolute;
            top:10px;
            right: 10px;
            text-decoration: none;
        }
    </style>
    <script>
        let formulaire = document.getElementById('formulaire');
        let btn = document.getElementById('bout');
        
          console.log(document.querySelector('a')); 
       
        btn.addEventListener('click',(e)=>{
        
            if(formulaire.service.value ==='' || formulaire.besoins.value === ''|| formulaire.qt.value === '' || formulaire.qtstock.value === '' || formulaire.datee.value === ''){
                e.preventDefault();
                document.querySelector('.reponse').style.color = 'red';
                document.querySelector('.reponse').textContent = 'veuillez remplir tout les champs';
                document.querySelector('.reponse').style.visibility = 'visible';
                
            }
            else{
                
                
            

            }
            
               

        })

            
            
            

        
        
            
           
        

    </script>
</body>
</html>