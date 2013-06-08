/* 
	author: istockphp.com
*/
jQuery(function($) {
	
	$("a.topopup").click(function() {
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
	
	$("div.close").click(function() {
		disablePopup();  // function close pop up
	});
	
	$(this).keyup(function(event) {
		if (event.which == 27) { // 27 is 'Ecs' in the keyboard
			disablePopup();  // function close pop up
		}  	
	});
	
	$('a.livebox').click(function() {
		alert('Hello World!');
	return false;
	});

	//--- scoll up and down 
	
        var current_top = parseInt($('#toPopup').css('top'));
        var bottomOfPopup = parseInt(200);
        var bottomOfWindow = $(window).height();
 
		
	//alert(heightOfPopup);
	 	
	$(window).scroll(function(){
		
		var top = $(window).scrollTop();
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
	}
	function closeloading() {
		$("div.loader").fadeOut('normal');  
	}
	
	var popupStatus = 0; // set value
	
	function loadPopup() { 
		if(popupStatus == 0) { // if value is 0, show popup
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
		if(popupStatus == 1) { // if value is 1, close popup
			$("#toPopup").fadeOut("normal");  
			$("#backgroundPopup").fadeOut("normal");  
			popupStatus = 0;  // and set value to 0
		}
	}
	/************** end: popup functions. **************/
        
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
        
}); // jQuery End