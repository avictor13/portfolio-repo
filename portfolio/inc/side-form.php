<form id="form-validation" class="form-horizontal" action="form/submit.php" method="post" enctype="multipart/form-data"> 
    <div class="row">
    	 <div class="form-group">
            <div class="col-md-8">
               <label class="control-label col-md-6 text-left" for="name"><strong>Name *</strong></label>
        	   <input type="text" pattern="[a-zA-Z0-9\s]+" required="" name="name" id="name" value="" class="form-control" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8">
                <label class="control-label col-md-8 text-left" for="email"><strong>Email Address *</strong></label>
               <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="" name="email" id="email" value="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8">
                <label class="control-label col-md-9 text-left" for="phone"><strong>Telephone Number *</strong></label>
              <input type="text" pattern="[0-9-()]+" required="" maxlength="15" name="phone" id="phone" value="" class="form-control" id="val_phone">
           </div>
        </div>
        <div class="form-group">
            <div class="col-md-8">
               <label class="control-label col-md-6 text-left" for="inline-textarea"><strong>Comments *</strong></label>
                <textarea id="message" name="message" class="form-control" rows="4" placeholder=""></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8">
                <label for="submit">
                    <button type="submit" id="submit" class="ctaFormSubmit" value="send">SEND <i class="gi gi-play"></i></button>
                </label>
            </div>
        </div>
    </div>		
</form>