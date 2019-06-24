<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dev Ops Cour</title>
</head>
<body>
    <div class="container">
        <h1>Dev Ops Paul TEDESCO</h1>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <?php
                        $mysqli = new mysqli('mariadb', 'root', 'toor');
                        if (mysqli_connect_errno()) {
                            printf("Connect failed: %s\n", mysqli_connect_error());
                            exit();
                        }

                        if ($mysqli->query("INSERT INTO mydb.mytable (compteur) SELECT count(*)+1 FROM  mydb.mytable;") === TRUE) {
                            echo "Le compte est à jour ❤️ <br>";
                        }  
                    ?>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>
                            <?php 
                            if ($result = $mysqli->query("SELECT * FROM  mydb.mytable")) {
                                echo "Votre Count: $result->num_rows 🔥";
                                $result->close();
                            }
                            $mysqli->close();
                            ?>
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

