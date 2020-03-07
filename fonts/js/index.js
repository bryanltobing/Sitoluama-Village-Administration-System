  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        submitHandler: function(validator, form, submitButton) {
        $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();
            var bv = form.data('bootstrapValidator');
            $.post(form.attr('action'), form.serialize(), function(result) {
                console.log(result);
            }, 'json');
      },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Isi Nama Depan'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Isi Nama Belakang'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Isi E-mail Anda'
                    },
                    emailAddress: {
                        message: 'Isi E-mail Anda Dengan Benar'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Isi Nomor Anda'
                    }
                }

            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Isi Alamat Anda'
                    }
                }
            },
            password: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Isi password Anda'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Pilih Provinsi'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Isi Zip kode'
                    },
                }
            },
            sex:{
                validators:{
                    notEmpty:{
                        message: 'Pilih Jenis Kelamin'
                    }
                }
            }
            }
        })
        $('#contact_form').data('bootstrapValidator').resetForm();
}); 