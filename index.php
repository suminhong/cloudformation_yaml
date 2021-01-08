<!DOCTYPE html>
<head>
<title>Web Server Stress Test</title>
</head>
<body>

 <?php
  $stressOrKill = $_GET["stress"];
  if (strlen($stressOrKill) > 0) {
   if ($stressOrKill == "start") {
    echo("<h2>Generating load</h2>");
    exec("stress --cpu 4 --io 1 --vm 1 --vm-bytes 128M --timeout 600s > /dev/null 2>/dev/null &");
   } elseif ($stressOrKill == "stop") {
    exec("kill -9 (pidof stress)");
    echo("<h2>Killed stress processes</h2>");
   } else {}
  }
 ?>
 <div id="content">
  <center>
   <br/>
   <br/>
   <h2>Generate Load</h2>

     <form action="index.php">
      <input type="hidden" name="stress" value="start" />
      <input type="submit" value="Start Stress" />
     </form>

     <form action="index.php">
      <input type="hidden" name="stress" value="stop" />
      <input type="submit" value="Stop Stress" />
     </form>

  </center>
 </div>

</body>
</html>
