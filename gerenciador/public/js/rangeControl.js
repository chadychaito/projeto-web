$.each( $ (".custom-range"), function(){
	var slider = document.getElementById(this.id);
	var output = document.getElementById("range-"+this.id);

	if(this.id == "atletaFormControlRange"){
		output.innerHTML = "Rank: " + slider.value ;

		slider.oninput = function() {
			output.innerHTML = "Rank: " + this.value;
		}
	}
	else{
		output.innerHTML = slider.value + " dias atrás";

		slider.oninput = function() {
			if(this.value == 1)
				output.innerHTML = this.value + " dia atrás";
			else
				output.innerHTML = this.value + " dias atrás";
		}
	}

});
