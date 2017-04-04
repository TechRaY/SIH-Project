//this is the actual code to do the live search 
function fx(str)
{
var s1=document.getElementById("search").value;
var xmlhttp;

if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
	return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }


xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;



    document.getElementById("livesearch").style.display="block";
	}
  }


xmlhttp.open("GET","../php/call_ajax.php?n="+s1,true);
xmlhttp.send();	
}


  $().ready(function()
   {

          $('#search').focus(function()
          {
          $(this).animate({ width: '50%' }, 'slow');
          }).blur(function(){
      
                if ( $("#search").val().length ==0 )
        {
                  $(this).animate({ width: '50px' }, 'slow');
        }   
      
      });
         
         
            $('#livesearch').click(function() { 
        //alert($(event.target).html());    
        
          var content=$(event.target).html();
            $('#search').val(content);
                    $('#livesearch').html("");

      });  
  }) 


