<?php 
reqiure('user.php');
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

?>