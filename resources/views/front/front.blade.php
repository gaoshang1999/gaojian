<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
	<meta name="author" content="GeeksLabs">
	<meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
	<link rel="shortcut icon" href="/front/img/favicon.png">

	<title>高荐招聘</title>

	<!-- Bootstrap CSS -->    
	<link href="/front/css/bootstrap.min.css" rel="stylesheet">
	<!-- bootstrap theme -->
	<link href="/front/css/bootstrap-theme.css" rel="stylesheet">
	<!--external css-->
	<!-- font icon -->
	<link href="/front/css/elegant-icons-style.css" rel="stylesheet" />
	<link href="/front/css/font-awesome.min.css" rel="stylesheet" />    
	<!-- full calendar css-->
<!-- 	<link href="/front/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" /> -->
<!-- 	<link href="/front/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" /> -->
	<!-- easy pie chart-->
<!-- 	<link href="/front/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/> -->
	<!-- owl carousel -->
<!-- 	<link rel="stylesheet" href="/front/css/owl.carousel.css" type="text/css"> -->
	<link href="/front/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
	<!-- Custom styles -->
<!-- 	<link rel="stylesheet" href="/front/css/fullcalendar.css"> -->
	<link href="/front/css/widgets.css" rel="stylesheet">
	<link href="/front/css/style.css" rel="stylesheet">
	<link href="/front/css/style-responsive.css" rel="stylesheet" />
	
<!-- 	<link href="/front/css/xcharts.min.css" rel=" stylesheet">	 -->
<!-- 	<link href="/front/css/jquery-ui-1.10.4.min.css" rel="stylesheet"> -->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="/front/js/html5shiv.js"></script>
      <script src="/front/js/respond.min.js"></script>
      <script src="/front/js/lte-ie7.js"></script>
      <![endif]-->
    @yield('styles')  
  </head>

  <body>
  	<!-- container section start -->
  	<section id="container" class="">


        @include('front.widget.header')

        @include('front.widget.sidebar')

@yield('content')
	
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="/front/js/jquery.js"></script>
<!-- <script src="/front/js/jquery-ui-1.10.4.min.js"></script> -->
<script src="/front/js/jquery-1.8.3.min.js"></script>
<!-- <script type="text/javascript" src="/front/js/jquery-ui-1.9.2.custom.min.js"></script> -->
<!-- <!-- bootstrap -->  
<script src="/front/js/bootstrap.min.js"></script>
<!-- <!-- nice scroll --> 
<!-- <script src="/front/js/jquery.scrollTo.min.js"></script> -->
<!-- <script src="/front/js/jquery.nicescroll.js" type="text/javascript"></script> -->
<!-- <!-- charts scripts -->  
<!-- <script src="/front/assets/jquery-knob/js/jquery.knob.js"></script> -->
<!-- <script src="/front/js/jquery.sparkline.js" type="text/javascript"></script> -->
<!-- <script src="/front/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script> -->
<!-- <script src="/front/js/owl.carousel.js" ></script> -->
<!-- <!-- jQuery full calendar --> 
<<script src="/front/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<!-- <script src="/front/assets/fullcalendar/fullcalendar/fullcalendar.js"></script> -->
<!-- <!--script for this page only-->  
<!-- <script src="/front/js/calendar-custom.js"></script> -->
<!-- <script src="/front/js/jquery.rateit.min.js"></script> -->
<!-- <!-- custom select -->  
<!-- <script src="/front/js/jquery.customSelect.min.js" ></script> -->
<!-- <script src="/front/assets/chart-master/Chart.js"></script> -->

<!-- <!--custome script for all page--> 
<!-- <script src="/front/js/scripts.js"></script> -->
<!-- <!-- custom script for this page-->  
<!-- <script src="/front/js/sparkline-chart.js"></script> -->
<!-- <script src="/front/js/easy-pie-chart.js"></script> -->
<!-- <script src="/front/js/jquery-jvectormap-1.2.2.min.js"></script> -->
<!-- <script src="/front/js/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- <script src="/front/js/xcharts.min.js"></script> -->
<!-- <script src="/front/js/jquery.autosize.min.js"></script> -->
<!-- <script src="/front/js/jquery.placeholder.min.js"></script> -->
<!-- <script src="/front/js/gdp-data.js"></script>	 -->
<!-- <script src="/front/js/morris.min.js"></script> -->
<!-- <script src="/front/js/sparklines.js"></script>	 -->
<!-- <script src="/front/js/charts.js"></script> -->
<!-- <script src="/front/js/jquery.slimscroll.min.js"></script> -->
<script>
//       //knob
//       $(function() {
//       	$(".knob").knob({
//       		'draw' : function () { 
//       			$(this.i).val(this.cv + '%')
//       		}
//       	})
//       });
//       //carousel
//       $(document).ready(function() {
//       	$("#owl-slider").owlCarousel({
//       		navigation : true,
//       		slideSpeed : 300,
//       		paginationSpeed : 400,
//       		singleItem : true
//       	});
//       });
//       //custom select box
//       $(function(){
//       	$('select.styled').customSelect();
//       });
//       /* ---------- Map ---------- */
//       $(function(){
//       	$('#map').vectorMap({
//       		map: 'world_mill_en',
//       		series: {
//       			regions: [{
//       				values: gdpData,
//       				scale: ['#000', '#000'],
//       				normalizeFunction: 'polynomial'
//       			}]
//       		},
//       		backgroundColor: '#eef3f7',
//       		onLabelShow: function(e, el, code){
//       			el.html(el.html()+' (GDP - '+gdpData[code]+')');
//       		}
//       	});
//       });
  </script>
  <script type="text/javascript">
    jQuery(function($) {
	    $("#sidebar li a").each(function(){    
	     var reg=new RegExp("^"+$(this).attr("href"));  
		 if(reg.test(window.location) ) 	      
         { 
        	 $(this).parents("li").siblings().removeClass("active");
        	 $(this).parents("li").addClass("active");
         }
        });

	    function showRemindHint(pageurl) {
	    	$('#remind-Modal-body').empty();
	    	$('#remind-Modal-body').load(pageurl);
	    	$('#remind-Modal').modal('show');
	    }

	    $(".dropdown-menu li[class='normal'] a").click(function(e){    
            var $this = $(this);
            var pageurl = $this.attr('href');
            showRemindHint(pageurl);
            
	    	
            e.preventDefault();
	     });



	     function submitRemindModalForm(op){
			    var $form = $('#remind-Modal-form');
		    	$.ajax({
			           type: $form.attr('method'),
			           url: $form.attr('action'),
			           data: $form.serialize()+"&op="+op,
			           dataType: "json",
			           success: function (data) {
			        	   $('#remind-Modal').modal('hide');
			        	   location.reload();
			           },
			           error: function(){
			        	     alert('操作失败，请重试！');
			           }
			       });
	     }

		    $("#remind-Modal-form-button-1").click(function(e){    
		    	  submitRemindModalForm(1);
				   e.preventDefault();			
		     });

		    $("#remind-Modal-form-button-2").click(function(e){    
		    	  submitRemindModalForm(2);
				   e.preventDefault();			
		     });

		    function pollRemind(){
		    	$.ajax({
			           url: '{{ url('/front/comment/lists') }}',
			           dataType: "json",
			           success: function (data) {
			        	   var url = "{{ url('/front/comment/view/') }}/";
			        	   var ret = eval(data);
			        	 
			        	   for(var key in ret){
			        		     var id=ret[key].id;
			        		     showRemindHint(url+id);	 
				        	}
			           },
			           error: function(){
			        	     alert('操作失败，请重试！');
			           }
			       });
			 }		    

		    setInterval(function(){
		    	 pollRemind();		    	                 
            }, 1000*60*3); //3分钟	
		    
	 });
</script>	
   <script type="text/javascript">
    function deleleConfirm() {  
        if(window.confirm('你确定要删除该记录吗？')){
            //alert("确定");
            return true;
         }else{
            //alert("取消");
            return false;
        }
     }//del end
   </script>	

   
   @yield('scripts')	
   

</body>
</html>