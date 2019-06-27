<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

				/* *** MICRODATA *** */
				if ($this->request->server['HTTPS']) {
					$server = $this->config->get('config_ssl');
				} else {
					$server = $this->config->get('config_url');
				}

				$data['name'] = $this->config->get('config_name');
				$data['logo'] = $this->config->get('config_image');
				$data['url'] = $server;
				
				$this->load->model('localisation/country');
				$country = $this->model_localisation_country->getCountry($this->config->get('config_country_id'));
				$this->load->model('localisation/zone');
				$zone = $this->model_localisation_zone->getZone($this->config->get('config_zone_id'));

				$data['addresslocality'] = $zone['name'];
				$data['streetaddress'] = nl2br($this->config->get('config_address'));
				$data['addresscountry'] = $country['name'];

				$data['telephone'] = $this->config->get('config_telephone');
				$data['email'] = $this->config->get('config_email');
				$data['open'] = nl2br($this->config->get('config_open'));
				/* *** MICRODATA *** */
			

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
