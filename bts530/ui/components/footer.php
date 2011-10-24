<div id="footer">
		
    <p>Copyright &copy; 2010 <a href="javascript:;">MadeByAmp</a>, all rights reserved.</p>

</div> <!-- #footer -->

<script  type="text/javascript" src="../../js/jquery.fancybox-1.3.4/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="../../js/jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../../js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>


<script type="text/javascript">
jQuery(document).ready(function() {
	
	
	$("#addEstimate").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
	});
	$(".addingItem").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
	});
	
	$("#addCustomer").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
	});
	
	$("#notes").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
	});
	
	$("#addJob").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
	});
	
	$(".editImg").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
	});
	
});

$(".deleteImage").click(function() {
	confirm("Are you sure?");
});

</script>	

<!-- <script type="text/javascript">
		$(document).ready(function() {

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

		});
	</script>


<ul>
		<li><a id="various1" href="#inline1" title="Lorem ipsum dolor sit amet">Inline</a></li>
		<li><a id="various2" href="ajax.txt">Ajax</a></li>
		<li><a id="various3" href="http://google.ca">Iframe</a></li>
		<li><a id="various4" href="http://www.adobe.com/jp/events/cs3_web_edition_tour/swfs/perform.swf">Swf</a></li>
	</ul>

	<div style="display: none;">
		<div id="inline1" style="width:400px;height:100px;overflow:auto;">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
		</div>
	</div> -->





<script  type="text/javascript" src="../../js/slate/slate.js"></script>
<script  type="text/javascript" src="../../js/slate/slate.portlet.js"></script>
<script  type="text/javascript" src="../../js/plugin.js"></script>

<!-- Customer Details page -->
	<script>
		$("#actionBtn").click(function () {
			
			var action = $("#actionBtn").html();
			
			if (action === "Edit") {
				$("#fname").removeClass("notEditable");
				$("#lname").removeClass("notEditable");
				$("#email").removeClass("notEditable");
				$("#telephone1").removeClass("notEditable");
				$("#telephone2").removeClass("notEditable");
				$("#telephone3").removeClass("notEditable");
				$("#address1").removeClass("notEditable");
				
				
				
				$("#fname").removeAttr('readonly');
				$("#lname").removeAttr('readonly');
				$("#email").removeAttr('readonly');
				$("#telephone1").removeAttr('readonly');
				$("#telephone2").removeAttr('readonly');
				$("#telephone3").removeAttr('readonly');
				$("#address1").removeAttr('readonly');
				$("#radioActive").removeAttr('disabled');
				$("#radioArchived").removeAttr('disabled');
				
				$("#actionBtn").html("Save");
			}
			else {
				$("#fname").addClass("notEditable");
				$("#lname").addClass("notEditable");
				$("#email").addClass("notEditable");
				$("#telephone1").addClass("notEditable");
				$("#telephone2").addClass("notEditable");
				$("#telephone3").addClass("notEditable");
				$("#address1").addClass("notEditable");
				
				$("#fname").attr('readonly', 'true');
				$("#lname").attr('readonly', 'true');
				$("#email").attr('readonly', 'true');
				$("#telephone1").attr('readonly', 'true');
				$("#telephone2").attr('readonly', 'true');
				$("#telephone3").attr('readonly', 'true');
				$("#address1").attr('readonly', 'true');
				$("#radioActive").attr('disabled', 'disabled');
				$("#radioArchived").attr('disabled', 'disabled');
				
				$("#actionBtn").html("Edit");
			}
			return false;
		});
		
	</script>
	
	
	
	
	<!-- Job Details page -->
	<script>
		$("#actionBtnJobs").click(function () {
			
			
			var action = $("#actionBtnJobs").html();

			if (action === "Edit") {
				$("#title").removeClass("notEditable");
				$("#description").removeClass("notEditable");
				
				$("#title").removeAttr('readonly');
				$("#description").removeAttr('readonly');
				$("#radioActive").removeAttr('disabled');
				$("#radioFinished").removeAttr('disabled');
				
				
				$("#actionBtnJobs").html("Save");
			}
			else {
				$("#title").addClass("notEditable");
				$("#description").addClass("notEditable");
				
				$("#title").attr('readonly', 'true');
				$("#description").attr('readonly', 'true');
				$("#radioActive").attr('disabled', 'disabled');
				$("#radioFinished").attr('disabled', 'disabled');
				
				$("#actionBtnJobs").html("Edit");
			}
			return false;
		});
		
	</script>


	<!-- Estimates Details page -->
	<script>
		$("#actionBtnEstimates").click(function () {
			
			var action = $("#actionBtnEstimates").html();
			
			if (action === "Open") {
				$("#actionBtnEstimates").html("Finalize");
			}
			else {
				$("#actionBtnEstimates").html('Open');
			}
			return false;
		});
		
	</script>




<script type="text/javascript" charset="utf-8">
$(function () 
{
	slate.init ();
	slate.portlet.init ();	
});
</script>