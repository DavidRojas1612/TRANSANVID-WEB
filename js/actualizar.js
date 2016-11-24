$('#loginForm2').bootstrapValidator({
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
					 message: 'El celular solo puede contener números'
				 }
			 }
		 },
		 nombre: {
			 validators: {
				 notEmpty: {
					 message: 'El nombre es requerido'
				 }
			 }
		 },
		 apellido1: {
			 validators: {
				 notEmpty: {
					 message: 'El apellido1 es requerido'
				 }
			 }
		 },
		 celular: {
			 message: 'El celular no es valido',
			 validators: {
				 notEmpty: {
					 message: 'El celular es requerido y no puede ser vacio'
				 },
				 regexp: {
					 regexp: /^[0-9]+$/,
					 message: 'El celular solo puede contener números'
				 }
			 }
		 },

	 }
});
