<div id="ClixWall" class="tab-pane fade in">
	<?=$this->AdminForm->create(false, array('url' => array('#' => 'ClixWall'), 'class' => 'form-horizontal'))?>
	<?=$this->AdminForm->hidden('Offerwall.ClixWall.name', array('value' => 'ClixWall'))?>
	<div class="title2">
		<h2><?=__d('offerwalls_admin', '%s settings', 'ClixWall')?></h2>
	</div>
	<div class="form-group">
		<label class="col-sm-6 control-label"><?=__d('offerwalls_admin', 'API Code')?></label>
		<div class="col-sm-6">
			<?=
				$this->AdminForm->input('Offerwall.ClixWall.api_settings.api_code', array(
					'data-toggle' => 'popover',
					'data-trigger' => 'focus',
					'data-placement' => 'top',
					'data-content' => __d('offerwalls_admin', '')
				))
			?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-6 control-label"><?=__d('offerwalls_admin', 'Secret Password')?></label>
		<div class="col-sm-6">
			<?=
				$this->AdminForm->input('Offerwall.ClixWall.api_settings.secret_password', array(
					'data-toggle' => 'popover',
					'data-trigger' => 'focus',
					'data-placement' => 'top',
					'data-content' => __d('offerwalls_admin', '')
				))
			?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-6 control-label"><?=__d('offerwalls_admin', 'Width')?></label>
		<div class="col-sm-6">
			<?=
				$this->AdminForm->input('Offerwall.ClixWall.api_settings.width', array(
					'data-toggle' => 'popover',
					'data-trigger' => 'focus',
					'data-placement' => 'top',
					'data-content' => __d('offerwalls_admin', '')
				))
			?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-6 control-label"><?=__d('offerwalls_admin', 'Height')?></label>
		<div class="col-sm-6">
			<?=
				$this->AdminForm->input('Offerwall.ClixWall.api_settings.height', array(
					'data-toggle' => 'popover',
					'data-trigger' => 'focus',
					'data-placement' => 'top',
					'data-content' => __d('offerwalls_admin', '')
				))
			?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-6 control-label"><?=__d('offerwalls_admin', 'Postback Allowed IP')?></label>
		<div class="col-sm-6">
			<?=
				$this->AdminForm->input('Offerwall.ClixWall.allowed_ips', array(
					'data-toggle' => 'popover',
					'data-trigger' => 'focus',
					'data-placement' => 'top',
					'data-content' => __d('offerwalls_admin', '')
				))
			?>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-6 control-label"><?=__d('offerwalls_admin', 'Postback')?></label>
		<div class="col-sm-6">
			<input type="text" class="form-control" readonly value="<?=Router::url(array('admin' => false, 'plugin' => 'offerwalls', 'controller' => 'offerwalls', 'action' => 'offerCallback', 'ClixWall'), true)?>">
		</div>
	</div>
	<div class="col-md-12 text-center paddingten">
		<button class="btn btn-primary"><?=__d('offerwalls_admin', 'Save changes')?></button>
	</div>
	<?=$this->AdminForm->end()?>
</div>
