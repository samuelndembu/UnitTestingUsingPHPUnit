
<?php
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
    
    else{
        return $this->message + 'from' + $this->author->name + 'replied' + $this->repliedTo->author->name;
    }
}
}
?>