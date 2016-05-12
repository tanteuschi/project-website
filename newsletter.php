<div id="newsletter">
    
    <h2>Newsletter</h2> 
    
    <form name="rekkoform" method="post" action="https://mailbox.rekko.com/mailbox/subscribe/in">
        <ul class="rekko-form-style-1" style="margin: 10px auto;max-width: 600px;padding: 20px 12px 10px 20px;">
            <li style="padding: 0;display: block;list-style: none;margin: 10px 0 0 0;">
                <p>We are continously improving Open Knowledge Maps. Please enter your e-mail address below to receive updates on the newest developments.</p>
            </li>
            <li style="padding: 0;display: inline-block;list-style: none;margin: 10px 0 0 0;">
                <label style="margin: 0 0 3px 0;padding: 0px;display: block;font-weight: bold;">Email Address<span class="required" style="color: red;">*</span></label>
                <label class="required rekko-signupform-error email" style="display: none;margin: 0 0 3px 0;padding: 0px;font-weight: bold;color: red;">Please enter valid email</label>
                <input type="text" name="eml" size="53" class="text-field"  /> <!-- style="width: 100%;box-sizing: border-box;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;border: 1px solid #BEBEBE;padding: 7px;margin: 0px;-webkit-transition: all 0.30s ease-in-out;-moz-transition: all 0.30s ease-in-out;-ms-transition: all 0.30s ease-in-out;-o-transition: all 0.30s ease-in-out;outline: none;border-radius: 3px;" -->
            </li>
            <li style="padding: 0;display: inline-block;list-style: none;margin: 10px 0 0 0;">
                <input type="hidden" name="list" value="167bd29d-17ba-11e6-ba00-8ec9d8e9c195" />
                <input type="hidden" name="m" value="WxUtPz" />
                <label class="required rekko-form-submit-error" style="display: none;margin: 0 0 3px 0;padding: 0px;font-weight: bold;color: red;"></label>
                <input type="submit" value="Subscribe" onclick="javascript:rekkoSignUpForm.submit(this.form);return false;" class="frontend-btn" /> <!--style="cursor: pointer;background: #5D5D5D;padding: 8px 15px 8px 15px;border: none;color: #fff;border-radius: 3px;"-->
                <label class="rekko-process-label" style="display: none;margin: 0 10px 3px 10px;padding: 0px;font-weight: bold;">Processing...</label>
            </li>
        </ul>
        <div class="rekko-overlay" style="position: fixed;top:0;left:0;right:0;bottom: 0;width: 100%;height: 100%;background-color: #000;opacity: 0.85;z-index: 100000;display: none;">
            <div class="rekko-overlay-table" style="width: 100%;height: 100%;display: table;position: relative;">
                <div class="rekko-overlay-table-cell" style="display:table-cell;vertical-align: middle;background: none;">
                    <p class="rekko-overlay-msg" style="color: #fff;text-align: center;font-size: 50px;line-height: 150%;width: 70%;padding-left: 15%;padding-right: 15%;word-wrap: break-word;font-weight:400;"></p>
                </div>
                <div style="position: absolute;top: 20px;left: 50%;margin-left:-30px;"><a href="#" onclick="javascript:rekkoSignUpForm.closeOverlay(this.parentElement.parentElement.parentElement);return false;" style="padding: 6px 14px;border-radius: 3px;font-size: 14px;margin-right: 2px;letter-spacing: 0;color: #000;    background: rgb(242, 242, 242);    border: 1px solid #9c9da6;background-image: -webkit-linear-gradient(top, rgb(255, 255, 255), rgb(242, 242, 242));background-image: -moz-linear-gradient(top, rgb(255, 255, 255), rgb(242, 242, 242));background-image: -ms-linear-gradient(top, rgb(255, 255, 255), rgb(242, 242, 242));background-image:-o-linear-gradient(top, rgb(255, 255, 255), rgb(242, 242, 242));background-image:linear-gradient(top, rgb(255, 255, 255), rgb(242, 242, 242));">Close</a></div>
            </div>
        </div>
        <div style="display:none;" class="rekko-signup-form-success-msg-type">thx-msg</div>
        <div style="display:none;" class="rekko-signup-form-success-msg">[[EMAIL]] has been successfully subscribed.</div>
    </form>
    <script type="text/javascript" src="https://submit.rekko.com/rekko-signup.js"></script>

</div>