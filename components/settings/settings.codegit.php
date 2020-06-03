<?php require_once('../../common.php'); ?>

<label><i class="fas fa-code-branch"></i><?php i18n("CodeGit Settings"); ?></label>
<table>
	<tr>
		<td style="width: 80%;">
			<?php i18n("Disable repo banner"); ?>
		</td>
		<td>
			<select class="setting" data-setting="codegit.disableRepoBanner">
				<option value="true"><?php i18n("Yes"); ?></option>
				<option value="false" selected><?php i18n("No"); ?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td style="width: 80%;">
			<?php i18n("Disable file status"); ?>
		</td>
		<td>
			<select class="setting" data-setting="codegit.disableFileStatus">
				<option value="true"><?php i18n("Yes"); ?></option>
				<option value="false" selected><?php i18n("No"); ?></option>
			</select>
		</td>
	</tr>
</table>