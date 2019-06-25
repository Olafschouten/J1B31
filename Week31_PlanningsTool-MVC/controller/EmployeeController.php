<?php
require(ROOT . "model/EmployeeModel.php");

function index()
{
    $games = getAllGames();
    render('employee/index', $games);
}

function create()
{
    render('employee/create', ["games" => getAllGames()]);
}

function store()
{
    $validation = validate($_POST);

    if ($validation["succes"])
    {
        createUserInput($validation["result"]);
        header("location: index");
    }
    else
    {
        render("employee/create", ["userInput" => $validation["result"], "error" => $validation["error"], "games" => getAllGames()]);
    }
}

function overzicht()
{
    $userInput = getAllUserInputs();
    render('employee/overzicht', $userInput);
}

function edit($id)
{
    render('employee/update', ["games" => getAllGames(), "userInput" => getUserInput($id)]);
}

function update($id)
{
    $validation = validate($_POST);

    if ($validation["succes"])
    {
        updateUserInput($validation["result"]);
        header("location: ../index");
        // var_dump($validation);
    }
    else {
        render("employee/update", ["error" => $validation["error"], "games" => getAllGames(), "userInput" => $validation["result"]]);
    }
}

function delete($id)
{
    $idOfUserInput = getUserInput($id);
    render('employee/delete', $idOfUserInput);
}

function destroy($id)
{
    deleteUserInput($id);
    header("location: ../index");    
}

function changeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validate($post)
{
    $data = NULL;
    $error = NULL;
    $valid = true;

    foreach ($post as $key => $value)
    {
        if ($value)
        {
            $data[$key] = changeInput($value);
        }
        else
        {
            $error[$key] = "Dit veld is verplicht";
            $valid = false;
        }
    }
    if ($valid)
    {
        return [
            "succes" => true,
            "result" => $data
        ];
    }
    else
    {
        return [
            "succes" => false,
            "error" => $error,
            "result" => $data
        ];
    }
}
?>