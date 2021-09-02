$(function () {
  $(".add-button").on("click", function () {
    $(".modal-title").html("Tambah data");
    $(".submit-button").html("Tambah data");
    $("#form-data").attr(
      "action",
      "http://localhost/MVC_PHP_Fundamental/public/student/add"
    );
    $("#id").val("");
    $("#name").val("");
    $("#nim").val("");
    $("#email").val("");
    $("#college").val("");
  });

  $(".edit-button").on("click", function () {
    $(".modal-title").html("Edit data");
    $(".submit-button").html("Edit data");
    $("#form-data").attr(
      "action",
      "http://localhost/MVC_PHP_Fundamental/public/student/edit"
    );

    let id = $(this).data("id");

    $.ajax({
      method: "post",
      url: "http://localhost/MVC_PHP_Fundamental/public/student/getEdit",
      data: { id },
      dataType: "json",
      success: function (response) {
        $("#id").val(response.id);
        $("#name").val(response.name);
        $("#nim").val(response.nim);
        $("#email").val(response.email);
        $("#college").val(response.college);
      },
    });
  });
});
