<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- dgbngmnd -->
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">

        <div clSass="col-md-12">
            <div class="row">
                <div class="d-flex justify-content-end col-12">
                    <button type="button" name="" id="" class="btn btn-primary">Add</button>
                </div>
            </div>
            <?php include 'getWorker.php'?>

            <table class="table">
                <thead>
                    <tr>
                        
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Age</th>
                        <th>Telephone</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                   
        foreach ($data as $worker) {
            echo "<tr> 
                 
                <td scope=\"row\">".$worker['name']."</td>
                <td>".$worker['surname']."</td>
                <td>".$worker['Age']."</td>
                <td>".$worker['Telephone']."</td>
        </tr>";
        }
            
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>