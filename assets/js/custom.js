(function($){
	$(document).ready(function(){

		// Show student_add_modal 
		$('a#student_show').click(function(){
			$('#student_add_modal').modal('show');

			return false;
		});







		// Show single_student_modal
		// $(document).on('click','a#single_show', function(){
		// 	$('#single_student_modal').modal('show');
        //
		// 	let show_id = $(this).attr('student_id');
        //
		// 	$.ajax({
		// 		url : 'inc/ajax/show_single_student.php',
		// 		data : { id : show_id },
		// 		method : "POST",
		// 		success : function(data){
        //
		// 			let single_data = JSON.parse(data);
        //
		// 			$('img#single_student_img').attr('src', 'media/students/' + single_data.photo);
		// 			$('h2#single_name').text(single_data.name);
		// 			$('td#single_name').text(single_data.name);
		// 			$('td#single_email').text(single_data.email);
		// 			$('td#single_cell').text(single_data.cell);
		//
        //
		// 		}
		// 	});
        //
        //
        //
        //
		// 	return false;
		// });




		//  Add New Student today here

		$('form#add_student_form').submit(function (e) {
			e.preventDefault();
			alert('test purpose');

			//Get some input field value
			var name = $('input[name="name"]').val();
			var email = $('input[name="email"]').val();
			var cell = $('input[name="cell"]').val();

			alert(name + email + cell);

                if ( name == '' || email == '' || cell == '' )
                {
                    $('.mess').html('<p class="alert alert-danger">All fields are required TEST VALUE ! <button class="close" data-dismiss="alert">&times;</button></p>');
                }

                else {
                	$.ajax({
						url : 'inc/ajax/student.php',
							  data : new FormData(this),
							  method : "POST",	
							  contentType : false,
							  processData : false,
						      success : function (data) {
							   //alert(data);

                              }
						
					});

				}

        });








	});
})(jQuery)