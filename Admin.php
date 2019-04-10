<?php class Admin extends Moderator
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
?>