<?php

include "inc/config.php";
include "inc/auth.php";
include "inc/functions.php";

$title = "Settings";

include "inc/header.php";
?>
			<nav id="nav-title" class="navbar navbar-default navbar-fixed-top">
				<div style="padding: 19px 20px 1px;">
					<div class="description">&nbsp;</div>
					<h2>Settings</h2>
				</div>
			</nav>

			<div style="padding: 71px 20px 1px; background-color: #f9f9f9;">
				<h5><strong>System</strong></h5>
				<div class="row">
					<!-- Column -->
					<div class="col-xs-3 col-sm-2 settings-item">
						<a href="accounts.php">
							<p><img src="images/settings/Account.png" alt="User Accounts"></p>
							<p>Accounts</p>
						</a>
					</div>
					<!-- /Column -->
					<!-- Column -->
					<div class="col-xs-3 col-sm-2 settings-item">
						<a href="networkSettings.php">
							<p><img src="images/settings/NetworkSegment.png" alt="Network Settings"></p>
							<p>Network</p>
						</a>
					</div>
					<!-- /Column -->
					<!-- Column -->
					<div class="col-xs-3 col-sm-2 settings-item">
						<a href="dateTime.php">
							<p><img src="images/settings/ClientCheckIn.png" alt="Date/Time Settings"></p>
							<p>Date/Time</p>
						</a>
					</div>
					<!-- /Column -->
					<!-- Column -->
					<div class="col-xs-3 col-sm-2 settings-item">
						<a href="certificates.php">
							<p><img src="images/settings/PKI.png" alt="Certificates"></p>
							<p>Certificates</p>
						</a>
					</div>
					<!-- /Column -->
					<!-- Column -->
					<div class="col-xs-3 col-sm-2 settings-item">
						<a href="storage.php">
							<p><img src="images/settings/Storage.png" alt="Storage"></p>
							<p>Storage</p>
						</a>
					</div>
					<!-- /Column -->
				</div>
				<!-- /Row -->
			</div>

			<hr>

			<div style="padding: 7px 20px 1px;">
				<h5><strong>Services</strong></h5>
				<div class="row">
					<!-- Column -->
					<div class="col-xs-3 col-sm-2 settings-item">
						<a href="sharingSettings.php">
							<p><img src="images/settings/Category.png" alt="File Sharing"></p>
							<p>File Sharing</p>
						</a>
					</div>
					<!-- /Column -->
					<!-- Column -->
					<div class="col-xs-3 col-sm-2 settings-item">
						<a href="susSettings.php">
							<p><img src="images/settings/SoftwareUpdateServer.png" alt="Software Update"></p>
							<p>Software Update Server</p>
						</a>
					</div>
					<!-- /Column -->
					<!-- Column -->
					<div class="col-xs-3 col-sm-2 settings-item">
						<a href="netbootSettings.php">
							<p><img src="images/settings/NetbootServer.png" alt="NetBoot"></p>
							<p>NetBoot Server</p>
						</a>
					</div>
					<!-- /Column -->
					<!-- Column -->
					<div class="col-xs-3 col-sm-2 settings-item">
						<a href="proxySettings.php">
							<p><img src="images/settings/LDAPServer.png" alt="LDAP Proxy"></p>
							<p>LDAP Proxy</p>
						</a>
					</div>
					<!-- /Column -->
				</div>
				<!-- /Row -->
			</div>

			<hr>

			<div style="padding: 7px 20px 1px; background-color: #f9f9f9;">
				<h5><strong>Information</strong></h5>
				<div class="row">
					<!-- Column -->
					<div class="col-xs-3 col-sm-2 settings-item">
						<a href="logs.php">
							<p><img src="images/settings/ChangeManagement.png" alt="Logs"></p>
							<p>Logs</p>
						</a>
					</div>
					<!-- /Column -->
					<!-- Column -->
					<div class="col-xs-3 col-sm-2 settings-item">
						<a href="about.php">
							<p><img src="images/settings/Acknowledgements.png" alt="About"></p>
							<p>About</p>
						</a>
					</div>
					<!-- /Column -->
				</div>
				<!-- /Row -->
			</div>

			<hr>
<?php include "inc/footer.php"; ?>