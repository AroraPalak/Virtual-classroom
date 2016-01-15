<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["enrollno"].value;
var b=document.forms["reg"]["rollno"].value;
var c=document.forms["reg"]["name"].value;
var d=document.forms["reg"]["pass"].value;
var e=document.forms["reg"]["rpass"].value;
var f=document.forms["reg"]["address"].value;
var g=document.forms["reg"]["gender"].value;
var h=document.forms["reg"]["branch"].value;
var i=document.forms["reg"]["phno"].value;
var j=document.forms["reg"]["email"].value;
var k=document.forms["reg"]["10th"].value;
var l=document.forms["reg"]["12th"].value;
var m=document.forms["reg"]["be"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="") && (h==null || h=="") && (i==null || i=="")&& (j==null || j=="")&& (k==null || k=="")&& (l==null || l=="")&& (m==null || m==""))
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("This field can't be empty ");
  return false;
  }
if (b==null || b=="")
  {
  alert("This field can't be empty ");
  return false;
  }
if (c==null || c=="")
  {
   alert("This field can't be empty ");
  return false;
  }
  if (d==null || d=="")
  {
   alert("This field can't be empty ");
  return false;
  }
if(d!==e)
  {
  alert("The passwords you entered do not match..please ckeck again");
  return false;
  }

 if (h==null || h=="")
  {
  alert("This field can't be empty ");
  return false;
  }
if (i==null || i=="")
  {
  alert("This field can't be empty ");
  return false;
  }
if (j==null || j=="")
  {
   alert("This field can't be empty ");
  return false;
  }
  if (k==null || k=="")
  {
   alert("This field can't be empty ");
  return false;
  }
if (l==null || l=="")
  {
  alert("This field can't be empty");
  return false;
  }
if (m==null || m=="")
  {
  alert("This field can't be empty");
  return false;
  }


return true;
}
</script>
