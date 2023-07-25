<!DOCTYPE html>
<html lang="en">
<head>
  
   
    <title> Id Card # {{$student->id}} ({{$student->name}}) </title>
    

    <style>
 
      .container {
      width: 430px;
      position: absolute;
      top:0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      margin-top: 100px;
      }
      .title {
      text-align: center;
      color: white;
      font-size: 19px;
      margin-top: 4px!important;
      text-shadow: -1px 0px 3px #b5261b;
      }
      .address {
      text-align: center;
      font-size: 13px;
      }
      .photo {
      margin-top: 6px;
      border-radius: 50%;
      text-align: center;
      height: 105px;
      width: 105px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      /* width: 50%; */
      background: #fff;
      border: 2px solid #fff;
      }
      .logo {
      margin-top: 5px;
   
          float: right;
    
      display: block;
      margin-left: auto;
      margin-right: auto;
      /* width: 50%; */
      background: #fff;
      border: 2px solid #fff;
      }
      .name {
      font-size: 18px;
      font-weight: bold;
      text-align: center;
      color: orangered;
      margin-top: 13px;
      }
      .designation {
      font-size: 18px;
      font-weight: bold;
      text-align: center;
      color: black;
      }
      label {color: #ff5722; }
      .parta {
        background-image: url(<?= asset('assets/img/1.png')?>);
       background-repeat: no-repeat;
       background-size:3.475in 2in;
       box-shadow: 0px 0px 14px #82767694;
       border-radius: 12px;
       float: left;
      }
    
    
      @media print {
        
          body {
      background: none;
     
      }
      
      
      .container {
      width: 100%;
      position: absolute;
      top:0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      margin-top: 0px;
      }
      
      
       .parta {
      background-image: url(<?= asset('assets/img/1.png')?>);
   width: 3.475in;
       height: 2.2in;
      box-shadow: none;
      border-radius: 12px;
      float: left;
      border-bottom: 1px solid #e0633a;
      
      }
                        
                       }
   </style>
                         
                        
</head>
<body>

    <div class="container">
        <div class="parta">
           
          <table width="334" height="191">
            <tr> 
              <th width="130" rowspan="2" align="center" valign="middle"> <p><img src="{{$student->avatar->url}}" alt="Marie Salter" width="80" height="90"  style=" margin-left: 22px; margin-bottom: 23px;" ></p></th>
              <td height="118" colspan="3" align="left" valign="bottom"> <div> 
                  <div style="color: darkorange;font-family: system-ui;border-bottom: 1px dotted black; "> 
                    {{$student->name}}</div>
                  <div>{{$student->courseNames}}</div>
                </div>
              </td>
            </tr>
            <tr> 
              <td width="43" height="42" align="center" valign="bottom"> 
                <div style="font-family: Agency FB; font-weight: bolder; font-size: 12;"> 
                  240</div></td>
              <td width="57" align="center" valign="bottom"><div style="font-family: Agency FB; font-weight: bolder; font-size: 12;"> 
                  SP-2202</div></td>
              <td width="84" align="center" valign="bottom"><div style="font-family: Agency FB; font-weight: bolder; font-size: 12;"> 
                  10.06.06        </div></td>
            </tr>
            <tr>
              <th align="center" valign="middle">&nbsp;</th>
              <td height="21" align="center" valign="bottom">&nbsp;</td>
              <td align="center" valign="bottom">&nbsp;</td>
              <td align="center" valign="bottom">&nbsp;</td>
            </tr>
          </table>
          
        
        </div>
         
        <div class="parta" style="margin-top:19px;">
        <img src="{{asset('assets/img/2.png')}}" style=" HEIGHT: 2in; WIDTH: 3.475in; border-radius: 12px;">
         </div>
    
</body>
</html>