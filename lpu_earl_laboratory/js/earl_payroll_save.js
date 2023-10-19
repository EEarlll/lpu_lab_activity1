document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("save").addEventListener("click", async function (e) {
      e.preventDefault();
  
      var formData = new FormData();
        
      // iterate input with class .form-control
      document.querySelectorAll(".form-control").forEach(function (element) {
        var fieldName = element.id;
        var fieldValue = element.value;
        formData.append(fieldName, fieldValue);
      });
  
      try {
        // post request
        const response = await fetch("../process/earl_payroll_save.php", {
          method: "POST",
          body: formData,
        });
  
        if (response.ok) {
          const data = await response.json();
          if (data.ok) {
            alert("Data successfully added!");
          }
        } else {
          console.error("Request failed with status", response.status);
        }
      } catch (error) {
        console.error("Error:", error);
      }
    });
  });



// JQuery implementation
// $(document).ready(function () {
//   $("#save").click(function (e) {
//     e.preventDefault();

//     var formData = {};
//     $(".form-control").each(function () {
//       var fieldName = $(this).attr("id");
//       var fieldValue = $(this).val();
//       formData[fieldName] = fieldValue;
//     });

//     $.ajax({
//       type: "POST",
//       url: "../process/earl_payroll_save.php",
//       data: formData,
//       dataType: "json",
//       success: function (result) {
//         if (result.ok) {
//           alert("Data successfully added!");
//         }
//       },
//     });
//   });
// });


  
