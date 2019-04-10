<?php 
class User extends Moderator {

private $userName;

function __construct($name) 
{
    $this->userName = $name;
    $this->logged_in = false;
    $this->lastLoggedInAt = 'timestamp';
}
function isLoggedIn() 
{
   return $this->logged_in;  
}
function getLastLoggedInAt() 
{
     return $this->lastLoggedInAt;
}
function logIn() 
{
$this->lastLoggedInAt = new Date();
$this->logged_in = true;
}

function logOut()
{
    $this->logged_in = false;
}

function getName()
{
    return $this->name;
}

function setName($name)
{
    $this->name = $name;
}

function canEdit($comment) 
{
    if($comment->author->name === $this->$name)
    {
return true;
    } 
    else{
        return false;
    } 
}

function canDelete($comment) 
{
    return false;
}

}

?>