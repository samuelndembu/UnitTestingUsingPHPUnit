<?php 

class User
{
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

function getUserName()
{
    return $this->name;
}

function setUserName($name)
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
class Moderator extends User {
    function __construct($name) 
{
    $this->userName = $name;
}
  function canDelete($comment)
{
    return true;
}
}

class Admin extends Moderator
{
    function __construct($name) 
{
    $this->userName = $name;
}
  function canEdit($comment)
{
    return true;
}
}
class Comment {

function __construct($author, $message, $repliedTo)
{
    $this->author = $author;
    $this->repliedTo = $repliedTo;
    $this->createdAt = new Date();
}

function getMessage() 
{
    return $this->message;

}

function setMessage($message) 
{
    $this->message = $message;
}

function getCreatedAt() 
{
    return $this->createdAt;

}

function getAuthor()
 {
    return $this->author;
 }

function getRepliedTo() 
{
    return $this->repliedTo;
}

function __toString() {
    if($this->repliedTo === null){
        return $this->message + 'from' + $this->author->name;
    }
    
    
        return $this->message + 'from' + $this->author->name + 'replied' + $this->repliedTo->author->name;
}
}

