<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'agenda.php';
require_once 'gerardo/adapters/mysqlAdapter.php';
require_once 'gerardo/adapters/fileAdapter.php';
use gerardo\Agenda;




$agenda = new Agenda(new \gerardo\adapters\fileAdapter());

?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table>
                    <?php foreach ($agenda->fetchAll() as $value):?>
                        <tr>
                            <td><?php echo $value['id']?></td><td><?php echo $value['nombre']?></td><td><?php echo $value['facebook']?></td><td><?php echo $value['telefono']?></td><td><?php echo $value['twitter']?></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>


