
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/duallistbox/bootstrap-duallistbox.min.css">
	<link href="<?php echo base_url();?>assets/css/plugins/select2/select2.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/bootstrap-wysihtml/bootstrap-wysihtml5.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/datetime/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins/bootstrap-datepicker/datepicker.css">
	<!-- REQUIRE FOR SPEECH COMMANDS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/plugins/gritter/jquery.gritter.css" />

<div class="portlet">
    <div class="portlet-heading dark">
        <div class="portlet-title">
            <h4>DateTime Picker</h4>
        </div>
        <div class="portlet-widgets">
            <a data-toggle="collapse" data-parent="#accordion" href="#ft-5"><i class="fa fa-chevron-down"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div id="ft-5" class="panel-collapse collapse in">
        <div class="portlet-body">
            <form role="form" method="post">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group">
                            <label>DateTime Picking</label>
                            <div class="input-group date form_datetime">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-time"></i>
                                </span>														
                                <input class="form-control" />													
                            </div>
                            <input type="hidden" id="dtp_input1" value="" /><br/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group">
                            <label>Date Picking</label>
                            <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-calendar"></i>
                                </span>															
                                <input class="form-control" />
                            </div>
                            <input type="hidden" id="dtp_input2" value="" /><br/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group">
                            <label>Time Picking</label>
                            <div class="input-group date form_time" data-date="" data-date-format="hh:ii p" data-link-field="dtp_input3" data-link-format="hh:ii p">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-time"></i>
                                </span>
                                <input class="form-control" />													
                            </div>
                            <input type="hidden" id="dtp_input3" value="" /><br/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="form-group">
                            <label>Bootstrap Datepicker</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-calendar"></i>
                                </span>
                                <input class="datepicker form-control" value="02/16/12" data-date-format="mm/dd/yy" />													
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>	
<script src="<?php echo base_url();?>assets/js/plugins/datetime/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	<script>
        $(document).ready(function() { 			
			//Dual listbox examples  for more information and options please visit http://www.virtuosoft.eu/code/bootstrap-duallistbox/
			var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({infoTextFiltered: '<span class="label label-primary label-lg">Filtered</span>'});
			var container1 = demo1.bootstrapDualListbox('getContainer');
				
			//Select2 examples
			$("#e1, #e2, #e3").select2({
				width: 175
			});			
			$("#e4").select2({
				placeholder: "Select a Option",
				width: 375,
				allowClear: true
			});
			$("#e5").select2({tags:["red", "green", "blue"]});
			
			//Bootstrap Select enable
			$('.selectpicker').selectpicker('show');
			
			//Maxilength
			$('input[maxlength]').maxlength();
			
			$('input.maxL-1').maxlength({
				threshold: 17
			});
			
			$('input.maxL-2').maxlength({
				alwaysShow: true,
				warningClass: "label label-primary",
				limitReachedClass: "label label-danger",
				separator: ' of ',
				preText: 'You have ',
				postText: ' chars remaining.',
				validate: true,
				threshold: 10
			});
			
			$('textarea#maxL-3').maxlength({
				alwaysShow: true
			});
			
			$('input#maxL-4').maxlength({
				alwaysShow: true,
				placement: 'top-left'
			});	
					
			//Masked Input Uses http://digitalbush.com/projects/masked-input-plugin/			
			$.mask.definitions['~']='[+-]';
			$('.input-date').mask('99/99/9999');
			$('.input-phone').mask('(999) 999-9999');
			$(".input-key").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			$('.input-eyescript').mask('~9.99 ~9.99 999');
									
			//Bootstrap Datetimepicker
			$('.form_datetime').datetimepicker({
				//language:  'fr',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				forceParse: 0,
				showMeridian: 1
			});
			$('.form_date').datetimepicker({
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				minView: 2,
				forceParse: 0
			});
			$('.form_time').datetimepicker({
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 1,
				minView: 0,
				maxView: 1,
				forceParse: 0
			});
			
			//Bootstrap Datepicker
			$('.datepicker').datepicker();
			
			//Wysihtml Editor
			$('#editor1').wysihtml5();
			
			//Bootstrap Wysiwyg Editor
			$('#editor-2').ek_wysiwyg({
				toolbar:
					[
						'font',
						null,
						'fontSize',
						null,
						'bold',
						'italic',
						'strikethrough',
						'underline',
						null,
						'justifyleft',
						'justifycenter',
						'justifyright',
						null,
						'createLink',
						'unlink',
						null,
						'insertImage',
						null,
						'undo',
						'redo'
					]
				}).prev().addClass('editor-style1 text-center');

					
			// Spinners
			$('#MySpinner-1').spinner();
			$('#MySpinner-2').spinner({disabled: true});
			$('#MySpinner-3').spinner({value:0, min: 0, max: 10});
			$('#MySpinner-4').spinner({value:0, step: 5, min: 0, max: 200});
			
			// Touchspinners
			$("#touchspin-demo1").TouchSpin({
				min: 0,
				max: 100,
				step: 1,
				decimals: 0,
				boostat: 5,
				maxboostedstep: 10,
				postfix: '$'
			});
			
			 $("#touchspin-demo2").TouchSpin({
				min: 0,
				max: 100,
				step: 0.1,
				decimals: 2,
				boostat: 5,
				maxboostedstep: 10,
				buttonup_class: 'btn btn-primary',
				buttondown_class: 'btn btn-primary',
				postfix: '%'
			});
						
			//jQuery knob for more option/help please visit https://github.com/aterrien/jQuery-Knob
			$(function() {
				$(".knob").knob();
			});
			
			//Color Picker
			$('#colorpicker1').colorpicker();
			
			//Custom Color Picker
			$('#ek-colorpicker').ek_colorpicker();
		});
    </script>
	