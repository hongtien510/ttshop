<?php
class ControllerModuleLatestNews extends Controller {
	public function index($setting) {
		static $module = 0;
		$data['module'] = $module++;

        return $this->load->view($this->config->get('config_template') . '/template/module/latest_news.tpl', $data);

	}
}