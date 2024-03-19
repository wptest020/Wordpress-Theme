<?php 
//Template Name: Real Estate Form
get_header();

?>
      <section class="cape-coral-main cape-subpages-main">
         	<div class="container">
            	<div class="row">
	                <div class="col-md-12">
	                	<form id="propertyForm">
	                    <div class="form-group">
	                      <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Title*">
	                    </div>
	                    <div class="form-group">
	                      <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Email*">
	                    </div>
	                    <div class="form-group">
	                      <textarea class="form-control" id="InputNumber*" rows="3" placeholder=""></textarea>
	                    </div>
	                    <div class="btn-cape">
	                        <a id="button-code" href="#">Add with us</a>
	                     </div>
	                  </form>
	                </div>               
            	</div>
         	</div>
      </section>

<?php get_footer();?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
	jQuery('#button-code').on('click', function(){
			if(jQuery("#InputName").val()!= '' && jQuery("#InputNumber").val()!='' && jQuery("#InputEmail").val()!=''){
				  jQuery.ajax({
		            type : "POST",
		            dataType : "json",
		            url : "<?php echo admin_url('admin-ajax.php'); ?>",
		            data : {
		            	action: "real_froent_end_form",
		            	InputName:jQuery("#InputName").val(),
		            	InputEmail:jQuery("#InputEmail").val(),
		            	InputNumber:jQuery("#InputNumber").val(),
		            	TextareaData:jQuery("#TextareaData").val(),
		            	IP:jQuery("#ip").val()
		            },
		            success: function(response) {
		                if(response.code ==1){
		                	  document.getElementById("propertyForm").reset();
		                		Swal.fire({
      									  title: 'Listing Added to the!',
      									  text: 'Done'
								        })
		                }
                    else if(response.code ==101){
                        Swal.fire({
                          icon: 'error',
                          title: 'Unfortunately...',
                          text: 'Already Registered!'
                        })
                    }
		                else{
		                	Swal.fire({
      								  icon: 'error',
      								  title: 'Oops...',
      								  text: 'Server does not response try again after some time!'
								      })
		                }
		            }
        });
			}
			else{
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...',
				  text: 'Mandatory fields are marked with an asterisk (*) You must to fill it!'
				})
			}
	});

</script>