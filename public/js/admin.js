// JavaScript Document

function clsdate(a){
	var e=document.getElementById(a);
	e.value ='';
}

function calculateBmi() {
var weight = document.form.weight.value;
var height = document.form.height.value;

alert(weight);
alert(height);
	if(weight > 0 && height > 0){	
	var finalBmi = weight/(height/100*height/100);

	document.form.bmi.value = finalBmi;

	}

}

$(document).ready(function($) {
			$('#vaccordion').find('.accordion-toggle').click(function(){	
				//Expand or collapse this panel
				$(this).next().slideToggle('slow');
	
				//Hide the other panels
				$(".accordion-content").not($(this).next()).slideUp('slow');	
			});
		});

/*
function toggle_hide(){
			$('#toga').hide('slow');
			$('#togb').hide('slow');
			$('#togc').hide('slow');
			$('#togd').hide('slow');		
			$('#togf').hide('slow');
			$('#togg').hide('slow');
			return true;
}


function toggle_med(){
			$('#togg').toggle('slow');			
			return true;
}

function toggle_me(a){
		$('#'+a).toggle('slow');		
		return true;
}

function ggg(){
		$('#toga').show('slow');
		$('#accordion').accordion('activate', 0);		
		return true;
}
*/

$(document).on('keypress', 'input,select', function(e) {
/*
  if(e.keyCode == 13 && e.target.type !== 'submit') {
    e.preventDefault();
    return $(e.target).blur().focus();
  }
 */
 
 var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
        if(key == 13 && e.target.type !== 'submit') {
            e.preventDefault();
            var inputs = $(this).closest('form').find(':input:visible');
            inputs.eq( inputs.index(this)+ 1 ).focus();
        } 
  
 

});

