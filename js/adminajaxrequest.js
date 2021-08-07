// Ajax call for Admin login verification
function checkAdminLogin() {
    console.log("clciked");
    var adminLogEmail = $("#adminLogemail").val();
    var adminLogPass = $("#adminLogpass").val();

    // console.log(stuLogEmail);
    $.ajax({
        url: 'Admin/admin.php',
        method: 'POST',
        dataType: 'json',
        data: {
            checkLogemail: 'checkLogemail',
            adminLogEmail: adminLogEmail,
            adminLogPass: adminLogPass,
        },
        success: function (data) {
            console.log(data);
            if (data == 0) {
                $("#statusAdminLogMsg").html(
                    '<span class="alert alert-danger"> Invalid Email ID or Password !</span>'
                );

            }
            else if (data == 1) {
                $("#statusAdminLogMsg").html(
                    '<span class="alert alert-success"> Success Loading ... </span>'
                );
                setTimeout(() => {
                    window.location.href = "Admin/adminDashboard.php";
                }, 1000);
            }

        },
    });
}


