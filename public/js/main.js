var jQuery = jQuery.noConflict();

jQuery(document).ready(function($) {

	$(function() {
		$( "#processTabs" ).tabs({ show: { effect: "fade", duration: 400 } });
		$( ".tab-linker" ).click(function() {
			$( "#processTabs" ).tabs("option", "active", $(this).attr('rel') - 1);
			return false;
		});
		// For Switch Buttons init
		$('.bt-switch').bootstrapSwitch();
		//For Datepicker init
		$('.date-selector').datepicker({
			format: 'dd/mm/yyyy',
			autoclose: true,
			todayHighlight: true
		}).on('hide', function(e){
			e.preventDefault();
			$('#' + e.currentTarget.id).show();
		});
	});	

	window.validateForm = {
		// Is Email 
		isEmail : function(email) {
			var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
			return re.test(email);
		},
		// Is Date 
		isDate : function(txtDate) {
			var currVal = txtDate;
			if (currVal == '') {
				return false;
			}
			//Declare Regex 
			var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
			var dtArray = currVal.match(rxDatePattern); // is format OK?

			if (dtArray == null) {
				return false;	
			}	
			//Checks for mm/dd/yyyy format.
			dtMonth = dtArray[3];
			dtDay   = dtArray[1];
			dtYear  = dtArray[5];

			if (dtMonth < 1 || dtMonth > 12) {
				return false;
			} else if (dtDay < 1 || dtDay > 31) {
				return false;
			} else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31) {
				return false;
			} else if (dtMonth == 2) {
				var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
				if (dtDay> 29 || (dtDay ==29 && !isleap)) {
					return false;
				}  
			}

			return true;
		},
		// For Input Type Text
		inputText : function(selector, min, max, errorSelector, errorMessage = '', pageTab = false) {
			var self = $(selector).val();
			if (self.length < min || self.length > max) {
				if (pageTab) { 
					$( "#processTabs" ).tabs("option", "active", pageTab - 1);
				}
				$(errorSelector).html((errorMessage != '') ? errorMessage : 'This field is required');
				$(selector).addClass('input-error');
				$(selector).next().show();
				return false;
			}
			$(errorSelector).html('');
			$(selector).removeClass('input-error');
			return true;
		},
		// For Input Type Date
		inputDate : function(selector, errorSelector, errorMessage = '', pageTab = false) {
			var self = $(selector).val();
			if (!validateForm.isDate(self)) {
				if (pageTab) {
					$( "#processTabs" ).tabs("option", "active", pageTab - 1); 
				}
				$(errorSelector).html((errorMessage != '') ? errorMessage : 'This field is required');
				$(selector).addClass('input-error');
				$(selector).next().show();
				return false;
			}
			$(errorSelector).html('');
			$(selector).removeClass('input-error');
			return true;
		},
		// For Input Type Email
		inputEmail : function(selector, errorSelector, errorMessage = '', pageTab = false) {
			var self = $(selector).val();
			if (self.length < 1) {
				if (pageTab) {
					$( "#processTabs" ).tabs("option", "active", pageTab - 1);
				}
				$(errorSelector).html((errorMessage != '') ? errorMessage : 'This field is required');
				$(selector).addClass('input-error');
				$(selector).next().show();
				return false;
			}

			if (!validateForm.isEmail(self)) {
				if (pageTab) { 
					$( "#processTabs" ).tabs("option", "active", pageTab - 1); 
				}
				$(errorSelector).html('Please add a valid email address');
				$(selector).addClass('input-error');
				$(selector).next().show();
				return false;
			}

			$(errorSelector).html('');
			$(selector).removeClass('input-error');
			return true;
		},
		// For Select Type
		selectType : function(selector, errorSelector, errorMessage = '', pageTab = false) {
			var self = $(selector).val();
			if (self.length < 1) {
				if (pageTab) { 
					$( "#processTabs" ).tabs("option", "active", pageTab - 1); 
				}
				$(errorSelector).html((errorMessage != '') ? errorMessage : 'This field is required');
				$(selector).addClass('input-error');
				$(selector).next().show();
				return false;
			}

			$(errorSelector).html('');
			$(selector).removeClass('input-error');
			return true;
		},
		inputFile : function(selector, addErrorClass, errorSelector, errorMessage = '', pageTab = false) {
			var self = $(selector).val();
			if (self.length < 1) {
				if (pageTab) {
					$( "#processTabs" ).tabs("option", "active", pageTab - 1);
				}
				$(errorSelector).html((errorMessage != '') ? errorMessage : 'This field is required');
				$(addErrorClass).addClass('input-file-error');
				$(errorSelector).show();
				return false;
			}

			$(errorSelector).html('');
			$(addErrorClass).removeClass('input-file-error');
			return true;
		},
		//Remove Class error when keyup
	    removeErrorClassOnKeyup : function() {
	    	$(document).on('keyup', 'input, textarea', function(){
	    	    var self = $(this);
	    	    var data = self.val();
	    	    var min = self.data('min');
	    	    var max = self.data('max');
	    	    if (data.length < min) {
	    	    	self.val(data.substr(min, max));
	    	    	self.attr("placeholder", "Minimum character is " + self.data('max'));
	    	    }

	    	    if (data.length > max) {
	    	    	self.val(data.substr(min, max));
	    	    	self.attr("placeholder", "Maximum character is " + self.data('max'));
	    	    }
	    	});

	        $(document).on('keyup', '.input-error', function(){
	            var self = $(this);
	            if (self.val().length >= 1) {
	                $(this).removeClass('input-error');
	                self.next().fadeOut(400);
	            }
	        });
	        $(document).on('change', '.input-error', function(){
	            var self = $(this);
	            if (self.val().length >= 1) {
	                $(this).removeClass('input-error');
	                if (self.hasClass('occupation')) {
	                	$('.select2-selection--single').removeClass('select2-error');
	                	self.next().next().fadeOut(400);
	                } else {
	                	if (self.hasClass('date-selector')) {
	                		self.parent().parent().parent().find('span.input-error-container').fadeOut(400);
	                	} else {
	                		self.next().fadeOut(400);
	                	}
	                }
	            }
	        });
	    },
	    // Clear Form
	    clearForm : function() {
	        $(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
	        $(':checkbox, :radio').prop('checked', false);
	    }
	};

	window.cutomDropzone = {
		dropzoneUpload : function(selector, maxFiles, maxFilesize, uploadButtonName, uploadCategory, iconThumbnailClass) {
		    Dropzone.autoDiscover = false;

		    $('#' + selector).dropzone({
		        url: '/quote/save-temporary-file',
		        maxFiles: maxFiles,
		        maxFilesize: maxFilesize, // MB
		        paramName: 'tmpAttachment',
		        dictDefaultMessage: '<button class="btn btn-xs btn-main" type="button"><span class="glyphicon glyphicon-upload"></span> Upload ' + uploadButtonName + '</button>',
		        maxThumbnailFilesize: 5,
		        addRemoveLinks: true,
		        acceptedFiles: ".xlsx, .xls, .xlsm, .xlsb, .csv",
		        sending: function(file, xhr, formData) {
		            formData.append("_token", $('[name=_token').val());
		            formData.append("uploadCategory", uploadCategory);
		        },

		        init: function() {

		            this.on('complete', function(file) {
		            	$('.dz-image').html('<span class="excel-custom-container"><i class="fa fa-file-excel-o" aria-hidden="true"></i></span>');
		                if (file.xhr) {
		                	var response = JSON.parse(file.xhr.response);
		                	$('#file_tmp_value').val(response.path);
		                	$('.error-upload-file-container').fadeOut();
		                	$('#' + selector).removeClass('input-file-error');
		                }		                
		            });

		            this.on("error", function(file, message) { 
		                this.removeFile(file); 
		            });

		            this.on("removedfile", function(file) {
		            	var response = JSON.parse(file.xhr.response);
		            	var data = {
		            		_token: $('[name=_token').val(),
		            		path: response.path
		            	};

		            	$.post( "/quote/delete-save-temporary-file", data, function( response ) {
		            		$('#file_tmp_value').val('');
		            	}, "json");	
		            });

		        }
		    });
		}
	}
	
});