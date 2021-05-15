# CodeIgniter-math-captcha
Math CAPTCHA Library for CodeIgniter, generate random sum of numbers

# Install

Install the libray for using by autoload.

``` bash
$ composer require wasksofts/codeigniter-math-captcha
```
# usage

   # controller 
     class Test extends CI_Controller
     {
	    public function index()
	  {
	         $this->load->library('mathcaptcha');
		$this->form_validation->set_rules('captcha', 'captcha', 'trim|xss_clean|required|callback__check_captcha');

		if ($this->form_validation->run()) {
			echo 'success';
		}
		//how to controll whether to use this library or another 
		$data['show_captcha']    = TRUE;
		$data['captcha_html']    = $this->mathcaptcha->create_captcha();
		$this->load->view('form_view', $data);
	  }

	  //this is callback function for validation
	   public function _check_captcha($code)
	  {
		return $this->mathcaptcha->_check_captcha($code);
	  }
        }
     
   # add this html part to your form
                 <form method="post" action="<?= $this->uri->uri_string() ?>">
			<?php echo validation_errors(); ?>
			<table>
				<tr>
					<td colspan="3">
						<p>Answer this math quiz : <?php echo $captcha_html; ?></p>
					</td>
				</tr>
				<tr>
					<td>
					<?= form_input(["id" => "captcha", "name" => "captcha", "type" => "text", "placeholder" => "answer", "required" => "true"]); ?>  <br>
					<?php echo form_error('captcha'); ?> <br />
					</td>
				</tr>
			</table>
			<button type="submit">Submit</button>
		</form>
    
   # Bugs and feature requests
    Have a bug or a feature request? please email mukamanusteven@gmail.com

   # donate
   [![](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BCPJC49Z4ZBLG)
   
	
