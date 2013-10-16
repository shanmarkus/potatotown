<?
class Home extends CI_Controller{


  function Index(){
   $this->load->helper('url');   
   $data['css'] = $this->config->item('css');    
   $this->load->view('index',$data);

   return $data; 
 }

 function input(){
     // $this->load->view('books_input'); 
 }
}
?>


