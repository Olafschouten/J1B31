<?php
require(ROOT . "model/EmployeeModel.php");


function index(){
    $games = getAllGames();
    render('employee/index', $games);
}

function gameviewer($id) {
    $data = getGame($id);
    render('employee/gameviewer', $data);
}

function create(){
    $games = getAllGames();
    render('employee/create', $games);
}

function store(){
    createUserInput($_POST);
    header("location: index");
}

function overzicht(){
    $userInput = getAllUserInputs();
    render('employee/overzicht', $userInput);
}

function edit($id){
    $games = getAllGames(); 
    $userInput = getUserInput($id);
    $info = [$games, $userInput];
    render('employee/update', $info);
}

function update(){
    updateUserInput($_POST);
    header("location: ../index");
}

function delete($id){
    $idOfUserInput = getUserInput($id);
    render('employee/delete', $idOfUserInput);
}

function destroy($id){
    deleteUserInput($id);
    header("location: ../index");    
}
?>