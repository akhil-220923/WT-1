<?php
session_start();
?>

<h2>PHP Crash Course Project</h2>

<?php if(isset($_SESSION['github_user'])): ?>

    <h3>Welcome <?php echo $_SESSION['github_user']['login']; ?></h3>
    <img src="<?php echo $_SESSION['github_user']['avatar_url']; ?>" width="100"><br><br>
    <a href="github-logout.php">Logout</a>

<?php else: ?>

    <a href="github-login.php">Login with GitHub</a>

<?php endif; ?>
