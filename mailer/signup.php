<?php
require 'PHPMailer/PHPMailerAutoload.php';
require_once 'EmailConfiguration.php';

class Email extends EmailConfiguration{
		
	public function sendSignUpMail($userId = NULL, $name = NULL, $email = NULL){

		$this -> setHeaders();

		$email_encoded = rtrim(strtr(base64_encode($email), '+/', '-_'), '=');

		$activate_url = SITEURL.'activate?id=' .$userId . '&useremail=' . $email_encoded;
		
		$bodyContent = <<<EOF
		   
			
      	<table class="m_2807150267749322473wrapper" width="100%" cellspacing="0" cellpadding="0" bgcolor="#efefef">
          <tbody>
            <tr>
                <td style="border-collapse:collapse!important">
                  <table class="m_2807150267749322473flexible" align="center" width="606" cellpadding="0" cellspacing="0" style="margin:0 auto">
                      <tbody>
                        <tr>
                          <td class="m_2807150267749322473fix-gmail" style="min-width:606px;font-size:0;line-height:0;border-collapse:collapse!important">&nbsp;
                          </td>
                        </tr>
                        <tr>
                           <td bgcolor="#e5e5e5" style="padding:0 2px 2px;border-collapse:collapse!important">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                  <tbody>
                                  <tr>
                                      <td bgcolor="#ffffff" style="border-collapse:collapse!important">
                                         <table width="100%" cellpadding="0" cellspacing="0">
                                              <tbody>
                                                <tr>
                                                  <td bgcolor="#0376a9" style="padding:22px 28px 22px 22px;border-collapse:collapse!important">
                                                      <table class="m_2807150267749322473flexible" width="165" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
                                                          <tbody>
                                                            <tr>
                                                                <td class="m_2807150267749322473aligncenter" style="border-collapse:collapse!important"><a href="//www.thehomesaga.com/" style="font-size: 19px;outline:none;color: #fff; text-decoration: none;  text-decoration: none;" target="_blank" alt="The Home Saga" title="The Home Saga">Consysa</a>
                                                                </td>
                                                        </tr>
                                                        </tbody>
                                                      </table>
                                                      <table class="m_2807150267749322473flexible" width="298" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
                                                          <tbody>
                                                            <tr>
                                                                <td class="m_2807150267749322473indent-01" align="right" style="padding:3px 0 0;font:14px/16px Arial,Helvetica,sans-serif;color:#fff;letter-spacing:1px"><a href="//www.consysa.com/" style="text-decoration:none;color:#fff" target="_blank" title="The Home Saga">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="//www.consysa.com#contact" style="text-decoration:none;color:#fff" target="_blank" title="Contact Us">Contact Us</a>
                                                                </td>
                                                            </tr>
                                                          </tbody>
                                                      </table>
                                                  </td>
                                                </tr>
                                            </tbody>
                                </table>
                              </td>
                          </tr>
                                  <tr>
                                    <td class="m_2807150267749322473indent-02" bgcolor="#e5f3fb" style="padding:0px 30px 25px;border-collapse:collapse!important;font:16px/24px Arial,Helvetica,sans-serif;color:#555">
                                    <table class="m_2807150267749322473row m_2807150267749322473note">
                          <tbody>
                              <tr>
                                  <td class="m_2807150267749322473wrapper m_2807150267749322473last">
                                    <p style="padding-top:10px">Welcome to Consysa</p>
                                    <p>Hi, <br/><br/>Thank you for joining us.<br /></p>
                                    <p style="line-height: 26px;">
                                      Please click on link below to verify your email address. <br />
                                    </p>
                                    <p style="line-height: 26px;">
                                      <a href="$activate_url"> $activate_url </a><br />
                                    </p>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                      <table class="m_2807150267749322473row m_2807150267749322473note">
                          <tbody>
                              <tr>
                                  <td class="m_2807150267749322473wrapper m_2807150267749322473last">
                                      <!--<p style="padding-top:10px; line-height: 26px;">
                                        <strong>IMPORTANT </strong> - 
                                      </p>-->
                                      <!--<p style="line-height: 26px;">
                                        Please click on the below link to get more details about real estate, home buyers and home inspectors investing.
                                        <a href="http://www.//www.thehomesaga.com/" title="The Home Saga" target="_blank">Click Here</a>
                                      </p>--><br/>
                                      <p style="line-height: 26px;"><b><i>If you have any concerns: Kindly email us <a href="mailto:info@thehomesaga.com">info@consysa.com</a> or call our number at <span style="text-decoration:underline; color:#15c;">(908) 801 6225 (Google Tech Streamline)</span></p>
                                  </td>
                              </tr>
                          </tbody>
                      </table>

                                </td>
                            </tr>
                            <tr>
                                <td class="m_2807150267749322473indent-03" bgcolor="#ffffff" style="padding:38px 35px 38px;border-collapse:collapse!important">
                                    <table width="100%" cellpadding="0" cellspacing="0">
                          <tbody>
                          <tr>
                             <td style="padding:0 0 22px;font:16px/22px Arial,Helvetica,sans-serif;color:#555">
                                Sincerely,
                             </td>
                          </tr>
                          <tr>
                            <td style="padding:0 0 10px;font:16px/22px Arial,Helvetica,sans-serif;color:#555">
                                Consysa
                             </td>
                          </tr>
                        </tbody>
                      </table>
                                </td>
                            </tr>
                      </tbody>
                      </table>
                      </td>
                  </tr>
                  <tr>
                        <td class="m_2807150267749322473indent-05" bgcolor="#0b2e56" style="padding:41px 30px 31px;border-collapse:collapse!important">
                            <table width="100%" cellpadding="0" cellspacing="0">
                              
                                <tbody>
                                  <tr>
                                    <td align="center" style="padding:0 0 23px;font:24px/26px Arial,Helvetica,sans-serif;color:#fff">Get in Touch</td>
                                  </tr>
                                  <tr>
                                    <td align="center" style="padding:0 0 40px;font:16px/24px Arial,Helvetica,sans-serif;color:#fff">We'd love the opportunity to talk with you. If you have any questions, give us a call at our number (908) 801 6225 (Google Tech Streamline) or send an email to <a href="mailto:info@consysa.com" style="text-decoration:none;color:#239fde" target="_blank">Info@<span class="il">Consysa</span>.com</a>
                                    </td>
                                  </tr>
                            </tbody>
                          </table>
                        </td>
                  </tr>
                  <tr>
                  <td bgcolor="#fff" height="30" style="border-collapse:collapse!important">
                    </td>
                  </tr>
                </tbody>
            </table>
        </td>
            </tr>
         </tbody></table>
      </td>
   </tr>
</tbody></table>


EOF;
    $this -> mail->addAddress($email);
    $this -> mail->Subject = 'Consysa: Please verify your email address';
    $this -> mail->Body    = $bodyContent;
    if($this -> mail->send()) {
      return true;
    }
	}
}
?>
