<?php
//to open session start .

session_start();

    //to check if the list not empty 
    if (!empty($_POST['list'])) {

        $toDo = $_POST['list'];
        //if there is a session read it to make push on it

        if (!empty($_SESSION['todolist'])) {
            $arrayList = ($_SESSION['todolist']);

            // if there's no session creat empty array

        } else {
            $arrayList = array();
        }
        //add buton (push to session)
        if (isset($_POST['submit'])) {
            array_push($arrayList, $toDo);
            $_SESSION['todolist'] = $arrayList;

        }

    }
    //delete button (delete session)
    // if (isset($_POST['delete'])) {
    //     unset($_SESSION['todolist']);
    // }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>To-Do List</title>

</head>

<body>
    <div class="container">
        <div class="content inf-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post">
                                <input type="text" name="list" placeholder="You Can ✌..." >
                                <button type="submit" name="submit">Add</button>
                                <button name="delete">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <?php

                            //check if there is to do list in session

                            if (isset($_SESSION['todolist']) && !empty($_SESSION['todolist'])) {

                                //i use for loop to print li for each text 
                                for ($i = 0; $i < count($_SESSION['todolist']); $i++) {
                            ?>

                                    <li><?php
                                        //print every single text in li (index)
                                        echo $_SESSION['todolist'][$i]; ?></li>


                            <?php

                                }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>