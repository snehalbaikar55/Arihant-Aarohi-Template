

  <div class="card bg-light mb-3" style="padding-bottom: 17px;">
                <div class="card-body">
                    <p class="card-text" style="text-align:center;">
                        <a href="privacy.php"> Privacy Policy || Terms & Conditions || </a>  <a href="pmay.php">PMAY SUBSIDY</a><br><br>RERA No : 
                        <?php for($i=0;$i<count($Rera);$i++){ echo $Rera[$i];?>,<?php } ?><br>Disclaimer & Privacy Policy : Information Purpose Website | Content Provided By Respective Owners | Authorized Channel<br> Partner RERA No.A51800001892 | Project MahaRERA number is available on the website maharera.mahaonline.gov. in<br> under registered projects.<br> 2022 &#169; Copyright - All Rights Reserved.
                    </p>
                </div>
            </div>
            <!-- /* NRI section End */ -->


        </div>           
<!-- col-12 div end -->
    
    </div>
<!-- flex div end -->

</div>
<!-- first div in head div end -->

<div class="row d-none d-sm-block d-sm-none d-md-block">
    <!-- Right section -->
    <div class="col-md-3 col-lg-3 col-xl-3 col-md col-xs-12">
        <div class="container text-center">
            <div class="sidebar d-none d-sm-block d-sm-none d-md-block responsive-width">
                <button type="button" class="btn btn-primary btn-dark btn-sm">Organise Visit Site</button>
                <button id="desktop-whatsapp" type="button" class="btn btn-primary btn-dark btn-sm" onclick="window.open('https://api.whatsapp.com/send?phone=+919833717888&text=Hi!%20I\'m%20Interested%20In%20 <?php echo $propertydetails['PropertyName'];?>.%20Please%20Share%20Details.', '_blank');"><i class='fab fa-whatsapp' style="width: 22px;"></i>+91 9833717888</button><br>
                <a href="tel:+91 <?php echo $propertydetails['Cnumber'];?>"><button id="desktop-call" type="button" class="btn btn-primary effetMoveGradient btn-success btn-sm" style=" margin: 10px;">
                    <i class="fa fa-phone"></i>+91 <?php echo $propertydetails['Cnumber'];?>
                </button></a>
                <div id="contact_rightform">
                 <div class="card-title">
                    Pre-Register here for Best Offers
                </div>
                 <?php include "include/rightform.php"?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Right section End -->
  
<!--for mobile footer

<div class="mobile_footer">
    <div class="d-flex flex-row">
                <a id="mobile-call" class="mob1 text-center flex-row text-light" href="<?php echo $propertydetails['Cnumber'];?>"><i class="fas fa-phone-volume" aria-hidden="true"></i>  Call</a>
                <a id="mobile-enquire" class="mob1 text-center flex-row text-light" data-toggle="modal" data-target="#myModal" data-title="Mail me pricing details"><i class="fa fa-envelope" aria-hidden="true"></i>Enquire</a>
                <a id="mobile-whatsapp" class="mob1 text-center flex-row text-light" onclick="window.open('https://api.whatsapp.com/send?phone=+919833717888&amp;text=Hi!%20I\'m%20Interested%20In%20 <?php echo $propertydetails['PropertyName'];?>.%20Please%20Share%20Details.', '_self');"><i class="fab fa-whatsapp" ></i>WhatsApp</a>
            </div>
    
</div>-->


<div class="mobile_footer">
   <div class="d-flex flex-row">
       <button id="mobile-call" type="button" class="mob1 bg-green text-center flex-row text-light" onclick="window.location.href='tel:+91 <?php echo $propertydetails['Cnumber'];?>'" class="text-white" >
   <i class="fa fa-phone"></i> Call  </button>  
     
     <button type="button" id="mobile-enquire" class="mob1 bg-green text-center flex-row text-light" data-toggle="modal" data-target="#myModal" data-title="Mail me pricing details">
        <i class="fa fa-envelope" aria-hidden="true"></i>Enquire</button>
    <button type="button" id="mobile-whatsapp" class="mob1 bg-green text-center flex-row text-light" onclick="window.open('https://api.whatsapp.com/send?phone=+919833717888&amp;text=Hi!%20I\'m%20Interested%20In%20<?php echo $propertydetails['PropertyName'];?>.%20Please%20Share%20Details.', '_self');"><i class="fab fa-whatsapp" ></i>WhatsApp</button>
            </div>
    
</div>



<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="color_white modal-header bg-green">
                <h4 class="modal-title">Mail Me Pricing Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <div id="contact_form">

                <div class="card-title">
                    Pre-Register here for Best offers
                </div>
                    <?php include "include/form.php"; ?>
</div>
            </div>
        </div>
    </div>
</div>
<!--End-->
        
<!-- Modal -->

<!--End Modal-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
function mobilelog(){
     var mobile = $("input[name=mobile]").map(function(){return $(this).val();
        }).get();
          var lastname = $("input[name=lastname]").map(function(){return $(this).val();
        }).get();
          var email = $("input[name=email]").map(function(){return $(this).val();
        }).get();
          var project = $("input[name=project]").map(function(){return $(this).val();
        }).get();
        
          arr = mobile.filter(v=>v!='');
          arr1 = lastname.filter(v=>v!='');
          arr2 = email.filter(v=>v!='');
          arr3 = project.filter(v=>v!='');

           
            var test = arr.toString();
            var test1 = arr1.toString();
            var test2 = arr2.toString();
            var test3 = arr3.toString();

       
      $.post('checkmobile.php',{mobile:test,lastname:test1,email:test2,project:test3},function(data){
         
              }); 
}
    
    
</script>



<script>
$( "#form" ).on( "submit", function(e) {
     var dataString = $(this).serialize();
     
     $('#myBtn').prop('disabled', true);
     $("#myBtn").prop('value', 'Please wait...');
    
     console.log(dataString); //return false;
     
 
    $.ajax({
      type: "POST",
      url: "include/api.php",
     // headers: {  'Access-Control-Allow-Origin': '*' },
      data: dataString,
      success: function () {
         mobilelog();
        <?php $script['code4'];?>
         window.location.href = "thanks.php";

      }
    });
 
    e.preventDefault();
  });
</script>

<script>
$( "#rightform" ).on( "submit", function(e) {
     var dataString = $(this).serialize();
     
     $('#myRightbtn').prop('disabled', true);
     $("#myRightbtn").prop('value', 'Please wait...');
    
    // alert(dataString); return false;
 
    $.ajax({
      type: "POST",
      url: "include/api.php",
     // headers: {  'Access-Control-Allow-Origin': '*' },
      data: dataString,
      success: function () {
          mobilelog();
       window.location.href = "thanks.php";

      }
    });
    e.preventDefault();
  });
</script>

<script type="text/javascript">
 const
  burger = document.querySelector("#burger"), 
  nav = document.querySelector("#main-nav"),  // Use ID, if you already use one.
  a = document.querySelectorAll(".nav-link"); // PS: Use the right selectors!

burger.addEventListener("click", function(e) {
  this.classList.toggle("is-open");
  nav.classList.toggle("is-open");
});

a.forEach(el => el.addEventListener("click", function(e) {
  burger.classList.toggle("is-open");
  nav.classList.toggle("is-open");
}));
</script>
<script>
    $('#myModal').on('show.bs.modal', function (event) {
	var button	= $(event.relatedTarget); // Button that triggered the modal 
	var modal		= $(this);
	var title = button.data('title');
	modal.find('.modal-title').text(title)
});
</script>

<script src="js/fa_font.js"></script>

<script>
              document.getElementById('ocountry1').style.display="none";
              document.getElementById('india1').style.display="block";
              document.getElementById('india1').setAttribute("required", "");
              document.getElementById('india1').setAttribute("name", "mobile");
        
         function selectedCountry1(sv){
             
              if(sv == "India+91"){
              document.getElementById('ocountry1').style.display="none";
              document.getElementById("ocountry1").removeAttribute("required"); 
              document.getElementById('ocountry1').setAttribute("name","mobile");
              document.getElementById("ocountry1").value = '';
              document.getElementById('india1').style.display="block";
              document.getElementById("india1").setAttribute("required", "");
              document.getElementById('india1').setAttribute("name", "mobile");
             
          }
          else{
             document.getElementById('india1').style.display="none";
             document.getElementById("india1").removeAttribute("required"); 
              document.getElementById('india1').setAttribute("name", "mobile1");
               document.getElementById("india1").value = '';
             document.getElementById('ocountry1').style.display="block";
             document.getElementById("ocountry1").setAttribute("required", "");
             document.getElementById('ocountry1').setAttribute("name", "mobile");
          }
         }
</script>
<script>
           document.getElementById('ocountry').style.display="none";
           document.getElementById('india').style.display="block";
           document.getElementById('india').setAttribute("required", "");
           document.getElementById('india').setAttribute("name", "mobile");
        
         function selectedCountry(sv){
              if(sv == "India+91"){
              document.getElementById('ocountry').style.display="none";
              document.getElementById("ocountry").removeAttribute("required"); 
              document.getElementById('ocountry').removeAttribute("name", "mobile");
              document.getElementById("ocountry").value = '';
              document.getElementById('india').style.display="block";
              document.getElementById("india").setAttribute("required", "");
              document.getElementById('india').setAttribute("name", "mobile");
             
           }
           else{
             document.getElementById('india').style.display="none";
             document.getElementById("india").removeAttribute("required"); 
             document.getElementById('india').removeAttribute("name", "mobile");
             document.getElementById("india").value = '';
             document.getElementById('ocountry').style.display="block";
             document.getElementById("ocountry").setAttribute("required", "");
             document.getElementById('ocountry').setAttribute("name", "mobile");
           }
         }
</script>
   <script>
  $( document ).ready(function() {
      $('#enquire-now').click(function(){
                $leadname0 = $("#enquire-now").attr('data-title');
                 $("#lead").attr("value",$leadname0);
    });
    $('#download-brochure').click(function(){
                $leadname1 = $("#download-brochure").attr('data-title');
                 $("#lead").attr("value",$leadname1);
    });
     $('#DownloadBrochure_head').click(function(){
                  $leadname2 = $("#DownloadBrochure_head").attr('data-title');
                 $("#lead").attr("value",$leadname2);
                
            });
            
        $('#price_equ').click(function(){
            
                   $leadname3 = $("#price_equ").attr('data-title');
                 $("#lead").attr("value",$leadname3);
                 
            });        

        $('#costing').click(function(){
            
                  $leadname4 = $("#costing").attr('data-title');
                 $("#lead").attr("value",$leadname4);
            });       
            
            $('#floorplan').click(function(){
            
                  $leadname5 = $("#floorplan").attr('data-title');
                 $("#lead").attr("value",$leadname5);
            });          
    });
            
               
            </script>
</body>
</html>