<html>
<?php
  include_once '../Model/connection.php';
  include_once '../Model/Artifact.Class.php';
  include_once 'header.php';

  $artifactObject = new Artifact;
  $artifacts = json_decode($artifactObject->GetAllArtifacts());

  for($i = 0; $i < sizeof($artifacts);$i++)
  {
    echo $artifacts[$i]->Name;
  }


  include 'footer.php';
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
</body>
</html>
