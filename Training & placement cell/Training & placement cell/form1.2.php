<?php
    include "academic.php";
    ?>

<html>
    <style>
        .form-text 
        {
            color:red;
        }
    </style>
<head>
    <link href="form.css" rel="stylesheet" id="bootstrap-css">
<script src="form.js"></script>
<script src="form1.js"></script>
<script src="valid1.js"></script>

<script>
    function validatedetails()
 {
  
   if(validateName(document.getElementById('tenth'),document.getElementById('tentherror'),'Enter valid percentage') &&
   validateEmpty(document.getElementById('twelth'),document.getElementById('tweltherror'),'Enter valid percentage') && 
   validateMobile(document.getElementById('grad'),document.getElementById('graderror'),'Enter valid percentage') &&
   validateEmail(document.getElementById('pg'),document.getElementById('pgerror'),'Enter valid percentage')
  
   )
  {
   
    document.getElementById('frmRegister2').submit();
  }
  else{
      alert ("Please fill Details");
      return false;
  }

 }
</script>
</head>
<body>
<form action="academic.php" method="POST" id="frmRegister2" novalidate>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"></div>
        </div>

        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Academics Details</h4>
                </div>
               
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels"><h6>SSC:</h6></label>
                        <input type="text" class="form-control" placeholder=" enter percentage " name="tenth" id="tenth" 
                        onblur="validateEmpty(this,document.getElementById('tentherror'),'Enter Valid Percentage')" required />
                        <small id="tentherror" class="form-text" style="color:red;"></small>
                    </div>
					<br>
                    <div class="col-md-12"><label class="labels"><h6>HSC:</h6></label><input type="text" class="form-control" placeholder="Enter percentage " name="twelth" id="twelth"
                        onblur="validateEmpty(this,document.getElementById('tweltherror'),'Enter Valid Percentage')" required />
                        <small id="tweltherror" class="form-text" style="color:red;" ></small>
                        </div>
                     <div class="col-md-12"><label class="labels"><h6>Graduation Aggregate:</h6></label><br><input type="text" class="form-control" placeholder=" Enter Graduation percentage" name="grad" id="grad"
                        onblur="validateEmpty(this,document.getElementById('graderror'),'Enter Valid Percentage')" required />
                        <small id="graderror" class="form-text" style="color:red;"></small>
                    </div>
                    <div class="col-md-12"><label class="labels"><h6>P.G.Aggregate:</h6></label><input type="text" class="form-control" placeholder="enter First year percentage" name="pg" id="pg"
                        onblur="validateEmpty(this,document.getElementById('pgerror'),'Enter Valid Percentage')" required />
                        <small id="pgerror" class="form-text" style="color:red;"></small>
                    </div>
                    
                    <div class="col-md-12"><label class="labels"><h6>Any Other Certifications:</h6></label><input type="text" class="form-control" placeholder="Any certifications" name="extra_cr" id="extra_cr"
                         />
                        <small id="extra_crerror" class="form-text" style="color:red;"></small>
                    </div>

                </div>
                 
                <div class="mt-5 text-center">
                    <input type="submit" class="btn btn-primary" value="submit" name="academic" onclick="validatedetails()" />
                </div>
            </div>
        </div>
        
    </div>
</div>
</form>

</body>
</html>

<style>
body {
    background: #3931af;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>