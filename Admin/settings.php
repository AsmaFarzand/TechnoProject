<?php
include "script.php";
include "links.php";
include "essentials.php";
include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <style>
    #dashboardmenu {
      position: fixed;
      height: 100%;
  }
  @media screen and (max-width: 991px) {
      #dashboardmenu {
          height:auto;
          width: 100%;
      }
      #content
  {
    margin-top: 60px;
  }
  }
  .custom-bg {
      background-color: #2ec1ac;

  }
  .custom-bg:hover {
      background-color: #279ebc;

  }
 </style>
</head>
<body class = "bg-light">
 
 <div class="container-fluid" id="content">
     <div class="row">
         <div class="col-lg-10 ms-auto p-4 overflow-hidden">
             <h3 class ="mb-4">SETTINGS</h3>
             <!--GENERAL SETTINGS-->
             <div class="card">
                 <div class="card-body">
                     <div class="d-flex align-items-center justify-content-between mb-3">
                         <h5 class="card-title m-0"> General Settings</h5>
                         <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#generalsettings">
                             <i class="bi bi-pencil-square"></i>Edit
                          </button>
                     </div>
                     
                     <h6 class="card-subtitle mb-1 fw-bold ">App Title</h6>
                     <p class="card-text" id="app_title"></p>
                     <h6 class="card-subtitle mb-1 fw-bold ">AboutUs</h6>
                     <p class="card-text" id="app_about"></p>
                 </div>
             </div>
             <!-- Modal -->
             <div class="modal fade" id="generalsettings" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                 <div class="modal-dialog">
                     <form> 
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title">General Settings</h5>
                              </div>
                              <div class="modal-body">
                                  <div class="mb-3">
                                     <label class= "form-label">App Title</label>
                                     <input type = "text"  name ="app_title" id = "app_title_inp"  class="form-control shadow-none">  
                                   </div>
                                   <div class="mb-3">
                                     <label class= "form-label">App Title</label>
                                     <textarea name = "app_about" id = "app_about_inp"  class ="form-control shadow-none" rows="1"></textarea>  
                                   </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" onclick="app_title.value = general_data.app_title , app_about.value = general_data.app_about " class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                 <button type="button" onclick = "upd_general(app_title.value , app_about.value)"class="btn custom-bg text-white shadow-none">SUBMIT</button>
                              </div>
                         </div>    
                       </form>
                  </div>
              </div>
         </div>
      </div>  
 </div>
 
 <script>

    let general_data;

    function get_general()
    {
        let app_title;
        let app_about;
        // let app_title = document .getElementById('app_title');
        // let app_about = document .getElementById('app_about');

        // let app_title_inp = document .getElementById('app_title_inp');
        // let app_about_inp = document .getElementById('app_about_inp');

         let xhr = new XMLHttpRequest();
         xhr.open("POST","ajax/settings_crud.php",true);
         xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
         
         xhr.onload = function(){
    //      app_title.innerText = general_data.app_title;
    //      app_about.innerText = general_data.app_about;

    //      app_title.inp.value = general_data.app_title;
    //      app_about.inp.value = general_data.app_about;
    //      if (xhr.status >= 200 && xhr.status < 300) {
    //      try {
    //         var jsonResponse = JSON.parse(xhr.responseText);
    //          // Process the JSON response
    //       } catch (e) {
    //         console.error("Failed to parse JSON response:", e);
    //        }
    //      }  
    //  else {
    //     console.error("Request failed with status:", xhr.status);
    //   } 
    general_data = this.responseText;
    console.log(general_data); 
         }
         xhr.send('get_general');
    }

    // function upd_general(app_title_val,app_about_val)
    // {
    //     let app_title = document .getElementById('app_title');
    //     let app_about = document .getElementById('app_about');

    //     let app_title_inp = document .getElementById('app_title_inp');
    //     let app_about_inp = document .getElementById('app_about_inp');

    //      let xhr = new XMLHttpRequest();
    //      xhr.open("POST","ajax/settings_crud.php",true);
    //      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
         
    //      xhr.onload = function(){
    //      app_title.innerText = general_data.app_title;
    //      app_about.innerText = general_data.app_about;

    //      app_title.inp.value = general_data.app_title;
    //      app_about.inp.value = general_data.app_about;
    //      if (xhr.status >= 200 && xhr.status < 300) {
    //      try {
    //         var jsonResponse = JSON.parse(xhr.responseText);
    //          // Process the JSON response
    //       } catch (e) {
    //         console.error("Failed to parse JSON response:", e);
    //        }
    //      }  
    //  else {
    //     console.error("Request failed with status:", xhr.status);
    //   }     
    //      }
    //      xhr.send('app_title='+app_title_val+'&app_about='+app_about_val+'&upd_general');

    // }
    window.onload = function(){
            get_general();
         }
  
    </script>
</body>
</html>