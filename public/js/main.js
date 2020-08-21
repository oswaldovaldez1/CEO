
var words = ['IDEA, EXPLORA     ', 'EL EVENTO DE   ', 'MÁS GRANDE    '],
   words2 = ['EMPRENDE.         ', 'EMPRENDIMIENTO ', 'DEL SURESTE.  '],
    wordWrapper = document.getElementById('word'),
    wordWrapper2 = document.getElementById('word2'),
    wordWrapperContent = wordWrapper.innerHTML,
    wordWrapperContent2 = wordWrapper2.innerHTML,
    addingWord = true,
    addingWord2 = false,
    counter2 = 0,
    counter = 0;
    
new WOW().init();
function makeTimer() {

	//		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
		/*var endTime = new Date("30 August 2019 9:00:00 GMT+05:00");*/			
        var endTime = new Date("30 August 2019 9:00:00 GMT-05:00");
			endTime = (Date.parse(endTime) / 1000);

			var now = new Date();
			now = (Date.parse(now) / 1000);

			var timeLeft = endTime - now;

			var days = Math.floor(timeLeft / 86400); 
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
                        if (days < "10") { days = "0" + days; }
			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }
                        
                       /* if(days.indexOf('-')>0 || hours.indexOf('-')>0 || minutes.indexOf('-')>0 || seconds.indexOf('-')>0){
                            days = "00";
                            hours = "00";
                            minutes = "00";
                            seconds = "00";
                        }*/

			if(days.indexOf("-")===1 ){
				$("#days").html("00<span>D&iacute;as</span>");
				$("#hours").html("00<span>Hrs.</span>");
				$("#minutes").html("00<span>Min.</span>");
				$("#seconds").html("00<span>Seg.</span>");							
			}
			else{
				$("#days").html(days + "<span>D&iacute;as</span>");
				$("#hours").html(hours + "<span>Hrs.</span>");
				$("#minutes").html(minutes + "<span>Min.</span>");
				$("#seconds").html(seconds + "<span>Seg.</span>");								
			}		

	}
 
    
	setInterval(function() { makeTimer(); }, 1000);      

setInterval(function(){    
    wordWrapper.innerHTML = words[counter];
    wordWrapper2.innerHTML = words2[counter];
    counter++;
    if(counter==3){
        counter=0;
    }
    
}, 2500);


