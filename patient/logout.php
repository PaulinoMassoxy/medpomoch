<?php
session_start();
include("includes/config.php");
$_SESSION['login_pat']=="";
session_unset();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="<?php echo INCLUDE_PATH_PAINEL_PAT; ?>login_pat";
</script>
