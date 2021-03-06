<?php

//////////////////////////////////////////////////////////////////////////////80
// Market Dialog
//////////////////////////////////////////////////////////////////////////////80
// Copyright (c) Atheos & Liam Siira (Atheos.io), distributed as-is and without
// warranty under the modified License: MIT - Hippocratic 1.2: firstdonoharm.dev
// See [root]/license.md for more. This information must remain intact.
//////////////////////////////////////////////////////////////////////////////80
// Authors: Codiad Team, @Fluidbyte, Atheos Team, @hlsiira
//////////////////////////////////////////////////////////////////////////////80

require_once('class.market.php');

$Market = new Market();

switch ($action) {

	//////////////////////////////////////////////////////////////////////////80
	// Marketplace
	//////////////////////////////////////////////////////////////////////////80
	case 'list':


		if (!Common::checkAccess("configure")) {
			?>
			<label class="title"><i class="fas fa-sync"></i><?php echo i18n("restricted"); ?></label>
			<form>
				<label class="title"><i class="fas fa-sync"></i><?php echo i18n("restricted_marketplace"); ?></label>
			</form>
			<?php
		} else {

			$table = $Market->renderMarket();
			?>
			<label class="title"><i class="fas fa-store"></i><?php echo i18n("atheosMarketplace"); ?></label>
			<div id="market">
				<!--<table width="100%">-->
				<!--	<tr>-->
				<!--<th valign="middle" align="center" width="40px">-->
				<!--	<button onclick="window.location.reload();return false;"><?php echo i18n("reloadAtheos"); ?></button>-->
				<!--</th>-->
				<!--		<th valign="middle">-->
				<!--			<input type="text" id="manual_repo" placeholder="<?php echo i18n("enterGitHubRepositoryURL"); ?>">-->
				<!--			<button class="btn-left" id="manual_install"><?php echo i18n("market_install_manually"); ?></button>-->
				<!--		</th>-->
				<!--	</tr>-->
				<!--</table>-->
				<table id="market_table" width="100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Author</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="4">
								<h2>Installed</h2>
							</td>
						</tr>
						<?php echo $table["i"]; ?>
						<tr>
							<td colspan="4">
								<h2>Available</h2>
							</td>
						</tr>
						<?php echo $table["a"]; ?>
					</tbody>

				</table>
			</div>
			<?php
		}
		break;
	default:
		Common::sendJSON("E401i");
		die;
		break;
} ?>