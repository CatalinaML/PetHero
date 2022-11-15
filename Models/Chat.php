<?php 

namespace Models;

class Chat
{
    private $idChat;
    private $idUserFrom;
    private $idUserTo;

    function __construct($idUserFrom, $idUserTo)
    {
        $this->idUserFrom = $idUserFrom;
        $this->idUserTo = $idUserTo;
    }
    
    public function getIdChat()
    {
        return $this->idChat;
    }

    public function setIdChat($idChat)
    {
        $this->idChat = $idChat;

        return $this;
    }

    public function getIdUserFrom()
    {
        return $this->idUserFrom;
    }

    public function setIdUserFrom($idUserFrom)
    {
        $this->idUserFrom = $idUserFrom;

        return $this;
    }

    public function getIdUserTo()
    {
        return $this->idUserTo;
    }

    public function setIdUserTo($idUserTo)
    {
        $this->idUserTo = $idUserTo;

        return $this;
    }
}

?>