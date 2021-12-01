





(function($) {

    var form = $("#signup-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
             element.before(error); 
        },
        rules: {
            Nome_artista : {
                required: true,
            },
            nome_Obra : {
                required: true,
            },
            desc_obra : {
                required: true
            }
        },
        messages: {
            Nome_artista : {
                required : "Coloque seu nome, por favor!"
            },
            nome_Obra : {
                required : "Coloque o nome da obra, por favor!"
            },
            desc_obra : {
                required : "Coloque uma descrição, por favor!"
            }
        },
        onfocusout: function(element) {
            $(element).valid();
        },
        highlight : function(element, errorClass, validClass) {
            $(element).parent().parent().find('.form-group').addClass('form-error');
            $(element).removeClass('valid');
            $(element).addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parent().parent().find('.form-group').removeClass('form-error');
            $(element).removeClass('error');
            $(element).addClass('valid');
        }
    });
    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        labels: {
            previous : 'Voltar',
            next : 'Próximo',
            current : ''
        },
        titleTemplate : '<h3 class="title">#title#</h3>',
        onInit : function (event, currentIndex) { 
            // Suppress (skip) "Warning" step if the user is old enough.
            if(currentIndex === 0) {
                form.find('.actions').addClass('test');
            }
        },
        onStepChanging: function (event, currentIndex, newIndex)
        {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex)
        {

         
        }
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });

    // $('#country').parent().append('<ul id="newcountry" class="select-list" name="country"></ul>');
    // $('#country option').each(function(){
    //     $('#newcountry').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    // });
    // $('#country').remove();
    // $('#newcountry').attr('id', 'country');
    // $('#country li').first().addClass('init');
    // $("#country").on("click", ".init", function() {
    //     $(this).closest("#country").children('li:not(.init)').toggle();
    // });
    
    // var allOptions = $("#country").children('li:not(.init)');
    // $("#country").on("click", "li:not(.init)", function() {
    //     allOptions.removeClass('selected');
    //     $(this).addClass('selected');
    //     $("#country").children('.init').html($(this).html());
    //     allOptions.toggle();
    // });

    // var inputs = document.querySelectorAll( '.inputfile' );
	// Array.prototype.forEach.call( inputs, function( input )
	// {
	// 	var label	 = input.nextElementSibling,
	// 		labelVal = label.innerHTML;

	// 	input.addEventListener( 'change', function( e )
	// 	{
	// 		var fileName = '';
	// 		if( this.files && this.files.length > 1 )
	// 			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
	// 		else
	// 			fileName = e.target.value.split( '\\' ).pop();

	// 		if( fileName )
	// 			label.querySelector( 'span' ).innerHTML = fileName;
	// 		else
	// 			label.innerHTML = labelVal;
	// 	});

	// 	// Firefox bug fix
	// 	input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
	// 	input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
    // });
    
    
})(jQuery);
'use strict'

let fotoArtista = document.getElementById('fotoArtista');
let fileArtista = document.getElementById('your_picture');

function FotoArtista(){
    fileArtista.addEventListener('change', () => {

        if(fileArtista.files.length <= 0){
            return;
        }

        let reader = new FileReader();

        reader.onload = () => {
            fotoArtista.src = reader.result;
        }

        reader.readAsDataURL(fileArtista.files[0]);
    });
}



'use strict'

let foto = document.getElementById('img_card');
let fileFoto = document.getElementById('flFoto');
let file = document.getElementById('flImage');

function obraFoto(){
    file.addEventListener('change', () => {

        if(file.files.length <= 0){
            return;
        }

        let reader = new FileReader();

        reader.onload = () => {
            foto.src = reader.result;
        }

        reader.readAsDataURL(file.files[0]);
    });
}
