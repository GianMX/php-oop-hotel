<?php
  class stanza {
    public $room_number;
    public $floor;
    public $beds;
    public $created_at;
    public $updated_at;

    public function __construct($_room_number,$_floor,$_beds,$_created_at,$_updated_at)
    {
      $this->room_number = $_room_number;
      $this->floor = $_floor;
      $this->beds = $_beds;
      $this->created_at = $_created_at;
      $this->updated_at = $_updated_at;
    }


    public function getStanze()
    {
      return  '<li>Numero della stanza: ' . $this->room_number . '</li>'.
              '<li>Piano: ' . $this->floor . '</li>' .
              '<li>Letti presenti: ' . $this->beds . '</li>'.
              '<li>Creato il: ' . $this->created_at . '</li>'.
              '<li>Ultima modifica: ' . $this->updated_at . '</li> <br>';
    }
  }
?>
