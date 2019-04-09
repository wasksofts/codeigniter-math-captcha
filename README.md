# CodeIgniter-mathcaptcha
codeigniter  mathcapta library

# usage

     //load library from controller
      $this->load->library('mathcaptcha');
 
      $this->form_validation->set_rules('captcha', 'captcha', 'trim|xss_clean|required|callback__check_captcha');
	    
      
      //view to display capta image
      $data['show_captcha']    = TRUE;
      $data['captcha_html']    = $this->mathcaptcha->create_captcha();
        
      //this is callback function for validation
      public function _check_captcha($code)
      {
         return $this->mathcaptcha->_check_captcha($code);
      }
     
     //add this html part to your form
     <table>  
       <tr>
        <td colspan="3">
	  <p>Answer this math quiz : <?php echo $captcha_html; ?></p>
        </td>
	</tr>
	<tr>
	 <td>
	   <?= form_input(["id"=>"captcha" ,"name"=>"captcha","type"=>"text","placeholder"=>"answer" ,"required"=>"true"]);?><br>
           <?php echo form_error('captcha'); ?> <br />   
	</td>
        </tr>                  
      </table>			
	
