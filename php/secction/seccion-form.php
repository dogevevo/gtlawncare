<div class="ask-question-area">
    <div class="container">
        <div class="row">           
        <div class="col-sm-6 col-xs-12">
                    <div class="contact-inner">
                        <div class="contact_form">
                            <form id="contact_form">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" placeholder="Your name" required>
                                </div> 
                                
                                <div class="form-group">   
                                    <input type="email" name="email" id="email" placeholder="Your email" required>
                                </div>

                                <div class="form-group">
                                    <textarea cols="30" rows="5" name="message" id="message" placeholder="Your message" required></textarea>
                                </div>
                                <button class="mt_btn_yellow" id="submit-btn">SEND MESSAGE
                                    <span class="mt_load">
                                        <span></span>
                                    </span>
                                </button>
                                <div id="msg"></div>
                            </form>
                        </div>   
                    </div> 
                </div>
          
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="ask-question-left"><br class="visible-xs">
                    <h2 class="title-bar50"><?php echo $Phrase[1];?></h2>                   
                    <p> 
                        <?php echo $Insured;?></p><br>
                    <img loading="lazy" src="img/partner/insuredgt.png" alt="Insured" class="hidden-sm">
                  
                </div>
            </div>
        </div>
    </div>
</div>

<br>

