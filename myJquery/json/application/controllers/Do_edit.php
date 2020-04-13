 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Do_edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// lay giu lieu tu database
		$this->load->model('slides_model');
		$giulieu = $this->slides_model->laygiulieu();
       
       //make thanh array
		$giulieu = json_decode($giulieu,true);
	
		$giulieu = array('mang_giulieu' => $giulieu);

		$this->load->view('sua_slide_view', $giulieu, FALSE);
	}
	public function suaslide()
		{
			//lay ve noi dung tu view
			$title = $this->input->post('title');
			$description =$this->input->post('description');
			$button_link =$this->input->post('button_link');
			$button_text =$this->input->post('button_text');
			$slide_images = $this->input->post('slide_images');

			$cacanh = $_FILES['slide_images']['name']; 
			$filevatly = $_FILES['slide_images']['tmp_name'];//file that phisically trong o

			$tenfile = array();
			$slide_images_old = $this->input->post('slide_images_old');

			//no la array chua nhieu hinh phai duyet de lay 
			for ($i = 0; $i < count($cacanh) ; $i++) {
				if(empty($cacanh[$i]))
				{
					$tenfile[$i] = $slide_images_old[$i];
				}
				else
				{
					$duongdan = 'uploads/'.$cacanh[$i];
					move_uploaded_file($filevatly[$i], $duongdan);
					$tenfile[$i] = base_url().'uploads/'.$cacanh[$i];
				}
			}

			$tatcaslide = array();
	        for ($i = 0; $i < count($title); $i++) {
	        	$temp = array();
	        	$temp['title'] = $title[$i];
	        	$temp['description'] = $description[$i];
	        	$temp['button_link'] = $button_link[$i];
	        	$temp['button_text'] = $button_text[$i];
	        	$temp['slide_images'] = $tenfile[$i];
	        	//$temp['slide_images'] = $slide_images[$i];
	        	array_push($tatcaslide, $temp);
	        }

	        $tatcaslide = json_encode($tatcaslide);

	        $this->load->model('slides_model');
	        if($this->slides_model->updateGiulieu($tatcaslide))
	        {
	        	$this->load->view('thanhcong');
	        }

		}


}

/* End of file do_slide_edit.php */
/* Location: ./application/controllers/do_slide_edit.php */