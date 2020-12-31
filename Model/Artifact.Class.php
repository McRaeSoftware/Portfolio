<?php
class Artifact extends Dbh
{
  private $sql;
  private $stmt;
  protected $rows;

  public function GetAllArtifacts()
  {
    $this->sql = "SELECT * FROM Artifact";
    $this->stmt = $this->Connect()->prepare($this->sql);

    $success = $this->stmt->execute();

    if($success && $this->stmt->rowCount() > 0)
    {
      $this->rows = array();
      while($row = $this->stmt->fetch())
      {
        $this->rows[] = $row;
      }
      return json_encode($this->rows);
    }
  }

  public function GetArtifactById($artifactId)
  {

  }
}
