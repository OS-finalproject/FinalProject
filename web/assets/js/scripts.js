/*
    Slider
*/
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
});


/*
    Filterable portfolio
*/
jQuery(document).ready(function() {
    $clientsHolder = $('ul.portfolio-img');
    $clientsClone = $clientsHolder.clone(); 
 
    $('.filter-portfolio a').click(function(e) {
        e.preventDefault();
        $filterClass = $(this).attr('class');
 
        $('.filter-portfolio a').attr('id', '');
        $(this).attr('id', 'active-imgs');
 
        if($filterClass == 'all'){
            $filters = $clientsClone.find('li');
        }
        else {
            $filters = $clientsClone.find('li[data-type~='+ $filterClass +']');
        }
 
        $clientsHolder.quicksand($filters, {duration: 700}, function() {
            $("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});
        });
    });
});


/*
    Pretty Photo
*/
jQuery(document).ready(function() {
    $("a[rel^='prettyPhoto']").prettyPhoto({social_tools: false});
});


/*
    Show latest tweets
*/
jQuery(function($) {
    $(".show-tweets").tweet({
        username: "anli_zaimi",
        page: 1,
        count: 10,
        loading_text: "loading ..."
    }).bind("loaded", function() {
        var ul = $(this).find(".tweet_list");
        var ticker = function() {
            setTimeout(function() {
                ul.find('li:first').animate( {marginTop: '-4em'}, 500, function() {
                    $(this).detach().appendTo(ul).removeAttr('style');
                });
                ticker();
            }, 5000);
        };
        ticker();
    });
});


/*
    Flickr feed
*/
$(document).ready(function() {
    $('.flickr-feed').jflickrfeed({
        limit: 8,
        qstrings: {
            id: '52617155@N08'
        },
        itemTemplate: '<li><a href="{{link}}" target="_blank"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
    });
});


/*
    Google maps
*/
jQuery(document).ready(function() {
    var position = new google.maps.LatLng(45.067883, 7.687231);
    $('.map').gmap({'center': position,'zoom': 15, 'disableDefaultUI':true, 'callback': function() {
            var self = this;
            self.addMarker({'position': this.get('map').getCenter() });	
        }
    }); 
});


/*
    Contact form
*/
jQuery(document).ready(function() {
    $('.contact-form form').submit(function() {

        $('.contact-form form .nameLabel').html('Name');
        $('.contact-form form .emailLabel').html('Email');
        $('.contact-form form .messageLabel').html('Message');

        var postdata = $('.contact-form form').serialize();
        $.ajax({
            type: 'POST',
            url: 'assets/sendmail.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                if(json.nameMessage != '') {
                    $('.contact-form form .nameLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.nameMessage + '</span>');
                }
                if(json.emailMessage != '') {
                    $('.contact-form form .emailLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.emailMessage + '</span>');
                }
                if(json.messageMessage != '') {
                    $('.contact-form form .messageLabel').append(' - <span class="violet" style="font-size: 13px; font-style: italic"> ' + json.messageMessage + '</span>');
                }
                if(json.nameMessage == '' && json.emailMessage == '' && json.messageMessage == '') {
                    $('.contact-form form').fadeOut('fast', function() {
                        $('.contact-form').append('<p><span class="violet">Thanks for contacting us!</span> We will get back to you very soon.</p>');
                    });
                }
            }
        });
        return false;
    });
});
jQuery(function($) {
	
	
    $(".topopup").on('click',function() {
     
			loading(); // loading
			setTimeout(function(){ // then show popup, deley in .5 second
				loadPopup(); // function show popup 
			}, 500); // .5 second
	return false;
	});
	
	/* event for close the popup */
	$("div.close").hover(
					function() {
						$('span.ecs_tooltip').show();
					},
					function () {
    					$('span.ecs_tooltip').hide();
  					}
				);
	
	$("div.close").on('click',function() {
		disablePopup();  // function close pop up
	});
	
	$(this).keyup(function(event) {
		if (event.which === 27) { // 27 is 'Ecs' in the keyboard
			disablePopup();  // function close pop up
		}  	
	});

	//--- scoll up and down 
	
        var current_top = parseInt($('#toPopup').css('top'));
        var bottomOfPopup = parseInt(200);
        var bottomOfWindow = $(window).height();
 
         var toTop_status = 0;
		
	//alert(heightOfPopup);
	 	
	$(window).scroll(function(){
		
		var top = $(window).scrollTop();
                
                showArrowUp();
                
		//var heightOfPopup = parseInt($('#toPopup').height());
		//var bottomOfPopup = parseInt($('#toPopup').css('top')) + parseInt($('#toPopup').height()) +150 ;
		//alert(bottomOfWindow);
		//console.log('b '+bottomOfPopup);
		bottomOfPopup +=parseInt(top);
		
		if( (top+current_top > current_top+200)  ){
		
			if  (bottomOfPopup < bottomOfWindow ){
			
				$('#toPopup').animate({
					top:top + current_top		
				},'slow');
			}
		}	
	});
	
        //-- end scoll up and down
	

	 /************** start: functions. **************/
	function loading() {
		$("div.loader").show();
                toTop_status = 1;  
	}
	function closeloading() {
		$("div.loader").fadeOut('normal');  
	}
	
	var popupStatus = 0; // set value
	
	function loadPopup() { 
		if(popupStatus === 0) { // if value is 0, show popup
			closeloading(); // fadeout loading
                        $('input[name="signInEmail"]').val(""); 
                        $('input[name="signInPassword"]').val("");
                        $('input[name="rememderMe"]').removeAttr('checked');
                        $('#signInError').html("");
			$("#toPopup").fadeIn(0500); // fadein popup div
			$("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
			$("#backgroundPopup").fadeIn(0001); 
			popupStatus = 1; // and set value to 1
		}	
	}
		
	function disablePopup() {
		if(popupStatus === 1) { // if value is 1, close popup
			$("#toPopup").fadeOut("normal");  
			$("#backgroundPopup").fadeOut("normal");  
			popupStatus = 0;  // and set value to 0
                        toTop_status = 0;
		}
	}
	/************** end: popup functions. **************/
        
        
        /*-----------------------  arrow up Function   begin     ----------*/
        
        function showArrowUp(){
	
	if( toTop_status === 0){
    				
    				if ($(window).scrollTop()) {
			        	
			        	$('#arrow_up').fadeIn();
			        	
    				} else {
				        
				        $('#arrow_up').fadeOut();
				        
    				}
    		}			
	};
	
	 $('#arrow_up').on('click',function(){

		
    		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
 	});

        
        /*-----------------------  arrow up Function   End     ----------*/
        
        //-------- Sign in --///
        
        var url = $('#signInButton').attr('name');
        
        $('#signInButton').on('click',function(){
            
           var userEmail = $('input[name="signInEmail"]').val(); 
           var userPass = $('input[name="signInPassword"]').val();
           var checkBox = $('input[name="rememderMe"]:checked').val();
           var errorMessage = "";
           
           
           if( userEmail != "" && userPass != "" ){

                    $.ajax({

                        url:url,
                        type:"POST",
                        dataType:"html",
                        data:{
                           userEmail:userEmail,
                           userPass:userPass,
                           rememberMe:checkBox
                        },
                        success:function(respo){

                            if(respo.toString() == "ok"){
                                     window.location.reload(true);
                            }else if (respo.toString() == "fail"){
                                     errorMessage = " Incorrect Email or Password";
                                     $('#signInError').html(errorMessage);                           
                            }
                        }

                    });  
                    
           }else{
               
               errorMessage = "Enter your Email and Password";
               $('#signInError').html(errorMessage);
               
           }
            
            
            
        });
        
         //---------------------///
        
        //--- Sign Out -------///
        
        
        $('#signOut').on('click',function(){
            
            var url = $('#signOut').attr('name');
            
            $.ajax({
                
                   url:url,
                   type:"POST",
                   dataType:'html',
                   success:function(respo){
                       
                       window.location.replace(respo.toString());
                   }
                                                   
            });
                       
        });
        
        
        
        
        //----- --------------///
        
        //---  Add new Company  ajax --- ///
        
        
        /* $('#addnewComanyButton').on('click',function(){
            
            var url = $('#addnewComanyButton').attr('name');
            
            $('#signUpForm').submit(function(){
                
                   $.ajax({
                
                    url:url,
                    type:"POST",
                    success:function(respo){
                        
                        $('#ajax_content').html(respo);
                    }
                                                
                });
                
                return false;
            });

            
                                                
        });
        

        $('#addnewComanyInfoButton').on('submit',function(){
            
            var url = $('#addnewComanyInfoButton').attr('name');
            
            $.ajax({
                
                    url:url,
                    type:"POST",
                    success:function(respo){
                        
                        $('#ajax_content').html(respo);
                    }
                                                
            });
            
                                                
        });    
        
        
       $('#addnewComanyAddressButton').on('submit',function(){
            
            var url = $('#addnewComanyAddressButton').attr('name');
            
            $.ajax({
                
                    url:url,
                    type:"POST"
                                                
            });
            
                                                
        });*/
        
        
        //---------------------///
        
}); // jQuery End