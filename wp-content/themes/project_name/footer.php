	<?php wp_footer(); ?>

    <?php
   use App\Base\Bootstrap;
?>
    <?php 
    $fields = get_field('footer', 'options');
    ?>


    <footer>
    <section class="contact" id="contact">
        <div class="contact_title">
            <p class="contact_title_p">Contact Us</p>
            <div class="contact_title_content">
                <h1>Take Action</h1>
                <h1 class="transparent_title">Now</h1>
            </div>
            <p class="contact_title_questions">Questions, inquiries, feedback – we’re here for it all</p>
        </div>
    </section>
            <div class="form">
                <div class="form_display">
                    <input type="text" value="Enter Your Name">
                    <select id="selectvalue">
                        <option>Select Request Type</option>
                        <!-- <option>Contact Support</option>
                        <option>Leave Feedback</option>
                        <option>Cancel Subscription</option> --> 
                    </select >
                </div>
                <input class="form_display_email" type="email" value="Enter Your Email">
                <br>
                <textarea class="form_display_textarea">Enter Your Message</textarea>
                <br>
                <div class="form_display_check">
                    <div class="form_display_check_click">
                        <input class="checkbox" type="checkbox">
                    </div>
                    <div class="form_display_check_text">
                        <p class="form_display_check_text_p">By ticking this box I agree that I have read the <b>Privacy Policy</b></p>
                    </div>
                </div>
                <br>
                <button class="form_sign">SUBMIT<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.34485V3.70271C0.223213 4.59006 0.827062 5.21416 1.5762 5.72009C3.06873 6.72864 4.57064 7.72485 6.07252 8.72105C6.22448 8.82184 6.37644 8.92264 6.52839 9.02345C6.75395 9.1734 6.99518 9.30353 7.23601 9.43066C7.73961 9.69616 8.25183 9.70102 8.75425 9.43253C9.04913 9.27548 9.33891 9.10758 9.61617 8.92398C10.5902 8.27931 11.5624 7.63209 12.5346 6.98486C13.1459 6.5779 13.7572 6.17094 14.369 5.76459C14.9149 5.40225 15.3864 4.9726 15.7044 4.40945C15.9609 3.95549 16.094 3.469 15.9249 2.96082C15.7455 2.42272 15.3406 2.10712 14.7544 2.01476C14.6618 2.0002 14.5663 2.00036 14.472 2.00052C14.4622 2.00053 14.4524 2.00055 14.4427 2.00055C10.1476 1.9998 5.85249 1.99943 1.5574 2.00205C1.37648 2.00205 1.18969 2.00915 1.01542 2.05066C0.475013 2.17892 0.209507 2.56071 0.0677471 3.04234C0.0480002 3.10986 0.0340722 3.17895 0.0201393 3.24806C0.0136256 3.28037 0.00711088 3.31269 0 3.34485ZM0 5.87992V12.8015C0.0759707 13.1571 0.236136 13.4637 0.539627 13.6956C0.757749 13.8623 1.00172 13.9599 1.2774 13.9872C1.36512 13.9958 1.45402 13.997 1.54252 13.997C2.92032 13.9972 4.29808 13.9971 5.67582 13.9971C8.60396 13.9969 11.532 13.9968 14.4603 13.9996C15.0943 14.0003 15.572 13.7576 15.8505 13.2151C15.9433 13.0348 15.9899 12.8146 15.9907 12.6123C15.9983 10.8955 15.9976 9.17845 15.9969 7.46156C15.9967 6.97098 15.9965 6.48041 15.9965 5.98986C15.9965 5.96864 15.9947 5.94742 15.9935 5.93345C15.9931 5.9292 15.9928 5.92563 15.9926 5.92292C15.8879 6.00249 15.7844 6.08381 15.6809 6.16515C15.457 6.34105 15.2331 6.517 14.9964 6.67528C13.761 7.50169 12.5195 8.32012 11.2782 9.13853C11.0979 9.25739 10.9176 9.37625 10.7373 9.49514C10.6455 9.55571 10.5541 9.61703 10.4627 9.67835C10.158 9.88277 9.85309 10.0873 9.53197 10.2651C9.09142 10.5093 8.62072 10.6992 8.09519 10.7201C7.7122 10.7355 7.34449 10.6678 7.00497 10.5096C6.62786 10.3339 6.24839 10.1521 5.90378 9.92591C4.18387 8.797 2.47296 7.65687 0.765973 6.51075C0.578337 6.38474 0.408266 6.23515 0.238126 6.0855C0.159349 6.01621 0.080557 5.9469 0 5.87992Z" fill="#221817"/>
                </svg></button>
            </div>
          
            <div class="footer_section">
                <div class="footer_section_left">
                    <p><?php echo $fields['copyright']?></p> 
                </div>
                <div class="logo">
                    <?php echo wp_get_attachment_image($fields['logo'],'full'); ?>
                </div>
                <div class="footer_section_right">
                    <?php Bootstrap::bootstrap_footer_menu(); ?>

                </div>  
            </div>
        </footer>
	</body>
</html>