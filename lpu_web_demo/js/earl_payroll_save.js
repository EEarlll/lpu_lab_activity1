$(document).ready(function () {
  $("#save").click(function (e) {
    e.preventDefault();

    var formData = {};
    $(".form-control").each(function () {
      var fieldName = $(this).attr("id");
      var fieldValue = $(this).val();
      formData[fieldName] = fieldValue;
    });
    
    $.ajax({
      type: "POST",
      url: "process/earl_payroll_save.php",
      data: formData,
      dataType: "json",
      success: function (result) {
        if (result.ok) {
          alert("Data successfully added!");

        }
      },
    });
  });
  $("#update").click(function (e) {
    e.preventDefault();

    var formData = {};
    $(".form-control").each(function () {
      var fieldName = $(this).attr("id");
      var fieldValue = $(this).val();
      formData[fieldName] = fieldValue;
    });
    
    $.ajax({
      type: "POST",
      url: "process/earl_payroll_update.php",
      data: formData,
      dataType: "json",
      success: function (result) {
        if (result.ok) {
          alert("Data successfully updated!");

        }
      },
    });
  });
  $("#delete").click(function (e) {
    e.preventDefault();

    var formData = {};
    $(".form-control").each(function () {
      var fieldName = $(this).attr("id");
      var fieldValue = $(this).val();
      formData[fieldName] = fieldValue;
    });
    
    $.ajax({
      type: "POST",
      url: "process/earl_payroll_delete.php",
      data: formData,
      dataType: "json",
      success: function (result) {
        if (result.ok) {
          alert("Data successfully deleted!");
          window.location.href = "payroll_report.php";
        }
      },
    });
  });
});


  