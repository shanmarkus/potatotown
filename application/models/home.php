<?
class home extends Model{
  
  function home(){
  parent::Model();
  $this->load->helper('url');       
  }
  
  function general(){
  $this->load->library('MyMenu');
  $data['css'] = $this->config->item('css'); 
    
  return $data; 
  }
}
?>