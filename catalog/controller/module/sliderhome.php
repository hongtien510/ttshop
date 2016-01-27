<?php
class ControllerModuleSliderhome extends Controller {
	public function index($setting) {
		$this->load->language('module/sliderhome');
        return $this->load->view($this->config->get('config_template') . '/template/module/sliderhome.tpl');
	}
}