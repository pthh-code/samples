<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slides_model');
	}

	public function index()
	{
		$this->load->view('addData_view');
	}
	public function addSlide()
	{
		//lay giu lieu tu slides_topbanner o column "giatrithuoctinh"
         $giulieu =  $this->slides_model->laygiulieu();

        //giai ma json
         $giulieu = json_decode($giulieu);
        if($giulieu == null)
        {
        	//echo "it is empty item";
        	$giulieu = array();
        }
      
        //lay giu lieu tu view

    //----------------------------------------------------
    	$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["slide_images"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["slide_images"]["tmp_name"]);
		    if($check !== false) {
		       // echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		       // echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		/*if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}*/
		// Check file size
		if ($_FILES["slide_images"]["size"] > 50000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  //  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		   // echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["slide_images"]["tmp_name"], $target_file)) {
		       // echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		//---------------------------------------------------
         $title = $this->input->post('title');
         $description = $this->input->post('description');
         $button_link = $this->input->post('button_link');
         $button_text = $this->input->post('button_text');
         $slide_images = base_url().'uploads/'.basename($_FILES["slide_images"]["name"]);

         $motslide = array(
         'title' => $title,
         'description' => $description,
         'button_link' => $button_link,
         'button_text' => $button_text,
         'slide_images' => $slide_images
         );

         array_push($giulieu, $motslide);
         
         $giulieu = json_encode($giulieu);

        if($this->slides_model->updateGiulieu($giulieu))
        {
        	$this->load->view('thanhcong');
        }
 

	} 
		

}

/* End of file Slides.php */
/* Location: ./application/controllers/Slides.php */