
<title> {{$student->id}} ({{$student->name}} ) </title>

<style>
    #qrcode {
  float:right;
}

 .qrcode img {
    width: 90px;
}

body {
   background: #00968842;
   color: #163758;
   ;
   font-size: 0.9rem;
   font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto"
   }
   .container {
	background-image: url({{asset('assets/img/certificate.png')}});
    width: 11.3in;
    height: 8.1in;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    margin-top: 100px;
    background-size: contain;
   }
   
   .header {margin-top: 80px;}
   .title {
   text-align: center;
   color: #23369e;
   font-size: 30px;
   margin-top: 5px!important;
   /* text-shadow: -1px 0px 3px #b5261b; */
   /* font-family: none; */
   }
   .address {
   text-align: center;
   font-size: 19px;
   }
 
   .logo {
float: left;
    margin-left: 90px;
	position: absolute;
   }
 .certificate {
    text-align: center;
    color: #3f51b5;
    font-size: 42px;
    margin-top: 17px!important;
    font-family: serif;
}
   .name {
   font-size: 29px;
   font-weight: bold;
   text-align: center;
   color: #23369e;
   margin-top: 95px;
   } 
   label {color: #ff5722; }
   p {
    font-size: 20px;
    font-style: italic;
    padding: 20px 120px 20px 120px;
    text-align: justify;
    line-height: 34px;
    }
   
 
   @media print {
	   
	     body {
   background: none;
  
   }
   
   
   .container {
   width: 100%;
   position: fixed;
   top:0;
   bottom: 0;
   left: 0;
   right: 0;
   margin: auto;
   margin-top: 0px;
background-size: contain;
   }
   
         
                    }
</style>

<style> 
.qrcode img {
    width: 90px;
   
}
#qrcode {
    float: initial!important;
}

</style>
<div class="container"> 
  <div class="header"> 
    <table width="100%" height="191" align="center">
      <tr> 
        <th height="21" align="center" valign="middle">&nbsp;</th>
        <th align="center" valign="middle">&nbsp;</th>
        <th align="center" valign="middle">&nbsp;</th>
      </tr>
      <tr> 
        <th width="21%" height="21" align="center" valign="middle">
		 <div style="margin-top: 151px; text-align: left;
    margin-left: 46px; "> {{$student->id}}  </div>
          <div style="margin-top: 55px; text-align: left;
    margin-left: 46px;"> BC-{{$studentCourse->batch_id}} </div>
          <div style="margin-top: 56px; text-align: left;
    margin-left: 46px;">    {{format(now()->toDateString())}} </div>
          <div style="margin-top: 107px;margin-left: -19px;"> 
            <!--- QR Code --->
            <input name="text" type="text" id="text" value="{{route('student.certification.view',['student'=>$student->id,'course'=>$studentCourse->course_id])}}" hidden=""  />
            <div id="qrcode" class="qrcode"></div>
            <!--- QR Code --->
          </div></th>
        <th width="69%" align="center" valign="middle"> <div 
		style="
		margin-top: 118px;
		text-align: justify;
		margin-left: 98px;
		margin-right: 118px;
		font-weight: bold;
		font-size: 24px;
		padding-bottom: 10px;
	"
	> {{$student->name}} </div>
          <div style="
		 
    text-align: justify;
  margin-left: 98px;
    margin-right: 118px;
    font-weight: normal;
	
	">  Son/daughter 
            of <strong> {{$student->father_name}} </strong>  Has successfully completed <br>  the <strong> {{$studentCourse->course->name}} </strong> held on <strong>  {{$studentCourse->session}} <br> </strong>  at {{comInfo('institute')}}. </p> </div></th>
        <th width="10%" align="center" valign="middle">&nbsp;</th>
      </tr>
    </table>
  </div>
  <div  class="name"></div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js'></script>
<script>
    var qrcode = new QRCode("qrcode");

function makeCode () {		
	var elText = document.getElementById("text");
	
	if (!elText.value) {
		alert("Input a text");
		elText.focus();
		return;
	}
	
	qrcode.makeCode(elText.value);
}

makeCode();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode();
		}
	});
</script>
