<?php
class Cxinha extends Controller{
 
 function index()
 {
  
  $this->load->plugin('xinha_pi');
  $dati['xinha_java']= javascript_xinha(array('txt')); // this line for the xinha
  $this->load->view('xinha', $dati);
 }
}
?>  