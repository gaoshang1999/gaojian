@yield('content')

<script src="/assets/js/jquery.form.js"></script>
<script type="text/javascript">
$(function() {
       $('#main-content a').click(function(e) { alert(2);    	 
              var $this = $(this);
              var pageurl = $this.attr('href');
              $("#main").empty();
    
              $("#main").load(pageurl);
    
              e.preventDefault();
        });      

       $('#main-content form[method="get"]').submit(function (ev) { 	alert('form-get');
    	   $.ajax({
    	        type: $(this).attr('method'),
    	        url: $(this).attr('action'),
    	        data: $(this).serialize() ,
    	        success: function (data) { 
    	              $("#main").empty();    	              
    	              $("#main").html(data);
    	        },
    	        error: function(){       	    
    	     	     alert("操作失败，请重试");
    	        }
    	    });
    		   ev.preventDefault();
    	  }); 


       $('#main-content form[method="post"]').submit(function (ev) { 	alert('form-post');
            $(this).ajaxSubmit({		   
               success: function (data) {  	
                      $("#main").empty();    	              
                      $("#main").html(data);		            
        	       }
        	   } );  
		   ev.preventDefault();
	  }); 
             

});
</script>	

@yield('scripts')	
