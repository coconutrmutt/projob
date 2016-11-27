@extends('layout.productpage')
  @section('flashdrive')
  <section id="mainContent">
    <div class="container-fluid">

<button type="button">Click Me</button>
<p></p>

<!-- <meta name="_token" content="{!! csrf_token() !!}"/> -->
      <!--     <form>
              <label>ชื่อ</label>
              <input type="text"  id="name" name="name"></br>
              <label>อายุ</label>
              <input type="text"  id="age" name="age"></br>
              <input type="button" value="ส่ง" onclick="post()">
          </form>
          <div id="result" ></div> -->

     <!--      <a href=""><img src="images/3.jpg" width="200" height="240" title="ราคา"></a> -->
     <!--  -->
         <!--  <div id="showRemain1"></div>

              <script type="text/javascript">  
                function countDown(){  
                    var timeA = new Date();
                    var timeB = new Date("November 25,2017 00:00:01");
                    var timeDifference = timeB.getTime()-timeA.getTime();      
                    if(timeDifference>=0){  
                        timeDifference=timeDifference/1000;  
                        timeDifference=Math.floor(timeDifference);  
                        var wan=Math.floor(timeDifference/86400);  
                        var l_wan=timeDifference%86400;  
                        var hour=Math.floor(l_wan/3600);  
                        var l_hour=l_wan%3600;  
                        var minute=Math.floor(l_hour/60);  
                        var second=l_hour%60;  
                        var showPart=document.getElementById('showRemain1');  
                        showPart.innerHTML="เหลือเวลา "+wan+" วัน "+hour+" ชั่วโมง "  
                        +minute+" นาที "+second+" วินาที";   
                            if(wan==0 && Hourur==0 && minute==0 && second==0){  
                                clearInterval(iCountDown); // ยกเลิกการนับถอยหลังเมื่อครบ  
                                // เพิ่มฟังก์ชันอื่นๆ ตามต้องการ  
                            }  
                    }  
                }  

                var iCountDown=setInterval("countDown()",1000);

              </script>
 -->
              <!-- <h3><a class="btn btn-info" href="">ประมูลสินค้า</a></h3> -->

             <!--   <a href=""><img src="images/1.jpg" width="200" height="240" title="ราคา"></a>    
          <div id="showRemain2"></div>

              <script type="text/javascript">  
                function countDown(){  
                    var timeC = new Date();
                    var timeD = new Date("November 26,2017 00:00:01");
                    var timeDifference = timeD.getTime()-timeC.getTime();      
                    if(timeDifference>=0){  
                        timeDifference=timeDifference/1000;  
                        timeDifference=Math.floor(timeDifference);  
                        var wan=Math.floor(timeDifference/86400);  
                        var l_wan=timeDifference%86400;  
                        var hour=Math.floor(l_wan/3600);  
                        var l_hour=l_wan%3600;  
                        var minute=Math.floor(l_hour/60);  
                        var second=l_hour%60;  
                        var showPart=document.getElementById('showRemain2');  
                        showPart.innerHTML="เหลือเวลา "+wan+" วัน "+hour+" ชั่วโมง "  
                        +minute+" นาที "+second+" วินาที";   
                            if(wan==0 && hour==0 && minute==0 && second==0){  
                                clearInterval(iCountDown); // ยกเลิกการนับถอยหลังเมื่อครบ  
                                // เพิ่มฟังก์ชันอื่นๆ ตามต้องการ  
                            }  
                    }  
                }  

                var iCountDown=setInterval("countDown()",1000);

              </script>

         
 -->
 
    </div>
  </section>
@stop