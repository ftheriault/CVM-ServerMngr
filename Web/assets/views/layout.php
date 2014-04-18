<!DOCTYPE html>
<html>
	<head>
		<title>CVM Server Manager</title>
		<meta charset="utf-8"/>
		<script src="/js/jquery-2.1.0.min.js"></script>
		<script src="/js/jquery.leanModal.min.js"></script>
		<link rel="stylesheet/less" href="/css/global.less" />
		<script src="/js/less.js"></script>
	</head>
	<body>
		<header class="band">
					<nav>
						<ul>
							<?php
								if ($loggedIn) {
									?>
											<li><a href="/index/logout">Logout</a></li>
									<?php
								}
							?>
						</ul>
					</nav>
			
			<h5>CVM Server Manager</h5>
			<div class="clear"></div>
		</header>
		
		<div class="main-section">
			<div class="container">
				<?php
					if (!empty($errorMessage)) {
						?>
						<div class="error-message"><?= $errorMessage ?></div>
						<?php
					}
					else if (!empty($successMessage)) {
						?>
						<div class="success-message"><?= $successMessage ?></div>
						<?php
					}
					else if (!empty($warningMessage)) {
						?>
						<div class="warning-message"><?= $warningMessage ?></div>
						<?php
					}
					else if (!empty($infoMessage)) {
						?>
						<div class="info-message"><?= $infoMessage ?></div>
						<?php
					}
				?>
				<?php include($subview.'.php');?>	
			</div>	
		</div>
		
		<footer class="band footer">
			<nav>
				<ul>
					<li><a href="/index/about">About</a></li>
				</ul>
			</nav>

			Made with passion, by Frédéric Thériault
		</footer>
	</body>
</html>