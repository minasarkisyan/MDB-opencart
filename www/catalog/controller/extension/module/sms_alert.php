<?php
class ControllerExtensionModuleSmsAlert extends Controller {
	public function index($route, $data) {
		if ($this->config->get('module_sms_alert_status')) {
			if (isset($data[0]) && !empty($data[0])) {
				
				$this->load->language('extension/module/sms_alert');

				$this->load->model('extension/module/sms_alert');
				
				$order_id = $data[0];

				$status = $this->model_extension_module_sms_alert->getOrder($order_id);

				if (in_array($status, $this->config->get('module_sms_alert_processing_status'))) {

					$req = "http://sms.ru/sms/send?api_id=" . $this->config->get('module_sms_alert_id') . "&to=" . $this->config->get('module_sms_alert_tel') . "&text=".urlencode($this->language->get('text_order') . $order_id);
					file_get_contents($req);
					
					// тест запроса
					// $this->log->write($req);
				}
			}
		}
	}

}