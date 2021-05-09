$('#sa-params').click(function () {
            swal({
                title: 'Student have Aadhaar ?',
                text: "You don't have to fill all details..!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, available !',
                cancelButtonText: 'Not, available!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger m-l-10',
                buttonsStyling: false
            }).then(function () {
		    alertify
            .defaultValue("Enter Aadhaar Number")
            .prompt("Enter 12 Digit Aadhaar Number", function (str, ev) {
                ev.preventDefault();
		    if(str.length != 12)
		    {
			swal(
				'Invalid',
				'Invalid Aadhaar Number' + '  ' + str,
				'error')
		    }
		    else
		    {
			/*<?php
				include("../connection.php");
				$sql = "select * from student_details where aadher_number="str;
				$result = mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					swal(
					'Duplicate Entry',
					'Macthed Aadhaar Number' + '  ' + str,
					'error')
				}
				else
				{*/
				swal(
					'Gotcha!',
					'Aadhaar Number' + ' ' +str,
					'success'
					).then(function() {
					window.location.href = "addstudenta.php?anum="+str
					})
				/*}	
			?>
			}*/;
            }, function(ev) {
                ev.preventDefault();
                alertify.error("You've clicked Cancel");
            });
            }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                    swal(
                        'No, problem',
                        'You are redirecting :)',
                        'error'
                    ).then(function() {
		// Redirect the user
		window.location.href = "addstudent.php";
		});
                }
            })
        });