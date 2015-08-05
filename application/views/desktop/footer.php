<?php
if($this->uri->segment(2) != "access_test"){
?>
<br><br><a href="javascript:fontsize();" title="Change Font Size"><img src="<?php echo base_url();?>images/font-size.gif"></a>

<div style='padding:20px;border-top:1px solid #dddddd;text-align:right;'>Powered by <a href='http://savsoftquiz.com'><b>Savsoft Quiz</b></a> </div>


<?php
}
?>
<script>
var fsizecookie=getCookie("f-size");

    if (fsizecookie!="") {
       var fsize=fsizecookie;
    		}else{
       var fsize=3;
			}
			
function fontsize(){
 if(fsize==1){
 	$("body").css('font-size','15px');
 	
 	setCookie('f-size',fsize,'1');
 	fsize=2;
 }else if(fsize==2){
 	$("body").css('font-size','18px');
 	
 	setCookie('f-size',fsize,'1');
 	fsize=3;
 }else if(fsize==3){
 	 	$("body").css('font-size','13px');
 	
 	setCookie('f-size',fsize,'1');
 	fsize=1;
 }

}

//$( document ).ready(function() {
	
 if(fsize==1){
 var fffsize="15px";
 fsize=2;	 
 }else if(fsize==2){
 var fffsize="18px"; 
 fsize=3;	 
 }else if(fsize==3){
	var fffsize="13px";
	fsize=1;
 }
    $("body").css('font-size',fffsize);
//});


</script>
 </body>
</html>
