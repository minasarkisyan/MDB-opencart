<?php
class ControllerExtensionModuleSmsAlert extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/sms_alert');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_sms_alert', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], 'SSL'));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_sms_alert_tel'] = $this->language->get('entry_sms_alert_tel');
		$data['entry_sms_alert_id'] = $this->language->get('entry_sms_alert_id');
		$data['entry_processing_status'] = $this->language->get('entry_processing_status');		
		$data['sms_alert_help'] = $this->language->get('entry_sms_alert_help');
		
		$data['entry_status'] = $this->language->get('entry_status');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		$data['error_sms_alert_tel'] = isset($this->error['error_sms_alert_tel']) ? $this->error['error_sms_alert_tel'] : '';
		$data['error_sms_alert_id'] = isset($this->error['error_sms_alert_id']) ? $this->error['error_sms_alert_id'] : '';
		$data['error_sms_alert_processing_status'] = isset($this->error['error_sms_alert_processing_status']) ? $this->error['error_sms_alert_processing_status'] : '';

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/sms_alert', 'user_token=' . $this->session->data['user_token'], 'SSL')
		);

		$data['action'] = $this->url->link('extension/module/sms_alert', 'user_token=' . $this->session->data['user_token'], 'SSL');

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], 'SSL');

		if (isset($this->request->post['module_sms_alert_tel'])) {
			$data['sms_alert_tel'] = $this->request->post['module_sms_alert_tel'];
		} else {
			$data['sms_alert_tel'] = $this->config->get('module_sms_alert_tel');
		}
		
		if (isset($this->request->post['module_sms_alert_id'])) {
			$data['sms_alert_id'] = $this->request->post['module_sms_alert_id'];
		} else {
			$data['sms_alert_id'] = $this->config->get('module_sms_alert_id');
		}

		if (isset($this->request->post['module_sms_alert_status'])) {
			$data['module_sms_alert_status'] = $this->request->post['module_sms_alert_status'];
		} else {
			$data['module_sms_alert_status'] = $this->config->get('module_sms_alert_status');
		}
		
		if (isset($this->request->post['module_sms_alert_processing_status'])) {
			$data['sms_alert_processing_status'] = $this->request->post['module_sms_alert_processing_status'];
		} elseif ($this->config->get('module_sms_alert_processing_status')) {
			$data['sms_alert_processing_status'] = $this->config->get('module_sms_alert_processing_status');
		} else {
			$data['sms_alert_processing_status'] = array();
		}
		
				
		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/sms_alert', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/sms_alert')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (!$this->request->post['module_sms_alert_tel']) {
			$this->error['error_sms_alert_tel'] = $this->language->get('error_sms_alert_tel');
		}
		
		if (!$this->request->post['module_sms_alert_id']) {
			$this->error['error_sms_alert_id'] = $this->language->get('error_sms_alert_id');
		}
		
		if (!isset($this->request->post['module_sms_alert_processing_status'])) {
			$this->error['error_sms_alert_processing_status'] = $this->language->get('error_sms_alert_processing_status');
		}
		

		return !$this->error;
	}
	
	public function install() {
		$this->load->model('setting/event');

		$this->model_setting_event->addEvent('sms_alert', 'catalog/model/checkout/order/addOrderHistory/after', 'extension/module/sms_alert');
	}

	public function uninstall() {
		$this->load->model('setting/event');

		$this->model_setting_event->deleteEventByCode('sms_alert');
	}
	
}