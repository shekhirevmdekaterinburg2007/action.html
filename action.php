<?php echo htmlspecialchars($_POST['name']); ?> 
<?php 
if (string)$(htmlspecialchars($_POST['name'])=="0")
  echo "100 из 100"; 
?>