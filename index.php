<?php

include("function.php");

$task ='encode';
if(isset($_GET['task']) && $_GET['task']!=''){
    $task =$_GET['task'];
}
$key = "abcdefghijklmnopqrstuvwzyz0123456789";
if("key"==$task){
    $key_original = str_split($key);
    shuffle($key_original);
    $key = join('',$key_original);
}elseif(isset($_POST['key']) && $_POST['key'] !=''){
    $key = $_POST['key'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Scrambler</title>
    <style>
        body{
            margin: 30px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-info">
                        <h2 class="text-center">Data Scrambler</h2>
                    </div>
                </div>
                <div class="card-body">
                    <a href="index.php?task=encode" class="btn btn-sm btn-outline-warning">Encode</a>
                    <a href="index.php?task=decode" class="btn btn-sm btn-outline-primary">Decode</a>
                    <a href="index.php?task=key" class="btn btn-sm btn-outline-danger">Genarate Key</a>
                    <form method="post" action="index.php">
                        <div class="form-group">
                            <label for="key">Key</label>
                            <input type="text" class="form-control" id="key" name ="key" <?php displayKey($key);?> >
                        </div>
                        <div class="form-group">
                            <label for="data">Data</label>
                            <input type="text" class="form-control" id="data" name ="data">
                        </div>
                        <div class="form-group">
                            <label for="result">Result</label>
                            <input type="text" class="form-control" id="result" name ="result">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Do it</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>