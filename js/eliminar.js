$('#loginForm').bootstrapValidator({
	 message: 'Este valor no es valido',
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
	 fields: {
		 usuario: {
			 validators: {
				 notEmpty: {
					 message: 'La cedula es requerido'
		 },
		 regexp: {
			 regexp: /^[0-9]+$/,
			 message: 'La cedula solo puede contener números'
		 }
	 }
 },
 }
});
