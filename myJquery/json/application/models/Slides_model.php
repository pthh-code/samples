<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function laygiulieu()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		$giulieu = $this->db->get('homepageattr');
		$giulieu = $giulieu->result_array();

		foreach ($giulieu as $value) {
			$temp = $value['giatrithuoctinh'];
			
		}
        return $temp;
		
	}

	public function updateGiulieu($giulieuupdate)
	{
		$chuanbilaygiulieu = array(
			'tenthuoctinh' => 'slides_topbanner',
			'giatrithuoctinh' => $giulieuupdate
		);

		$this->db->where('tenthuoctinh', 'slides_topbanner');

		return $this->db->update('homepageattr', $chuanbilaygiulieu);
	}

}

/* End of file slides_model.php */
/* Location: ./application/models/slides_model.php */