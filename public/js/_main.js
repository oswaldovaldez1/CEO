
var words = ['IDEA, EXPLORA     ', 'EL EVENTO DE   ', 'MAS GRANDE    '],
   words2 = ['EMPRENDE.         ', 'EMPRENDIMIENTO ', 'DEL SURESTE.  '],
    wordWrapper = document.getElementById('word'),
    wordWrapper2 = document.getElementById('word2'),
    wordWrapperContent = wordWrapper.innerHTML,
    wordWrapperContent2 = wordWrapper2.innerHTML,
    addingWord = true,
    addingWord2 = false,
    counter2 = 0,
    counter = 1;
    
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

			$("#days").html(days + "<span>D&iacute;as</span>");
			$("#hours").html(hours + "<span>Hrs.</span>");
			$("#minutes").html(minutes + "<span>Min.</span>");
			$("#seconds").html(seconds + "<span>Seg.</span>");		

	}
 
    
	setInterval(function() { makeTimer(); }, 1000);      

setInterval(function(){
//    console.log(counter);
    if(counter%2==1){        
        $.ajax({

           type:'GET',

           url:'/paso/'+15+'/'+counter2,


           success:function(data){            
            wordWrapper.innerHTML = data.text1;
            wordWrapper2.innerHTML = data.text2;                              
           }
           

        });
    }
    if(counter%2==0){
        /*wordWrapper.innerHTML = '';
        wordWrapper2.innerHTML = '';*/
        counter2++;
    }
    if(counter2==3){
                counter2=0;
            }
    counter++;
    if(counter==3){
        counter=1;
    }
    /*if(counter<16 && addingWord){
        $.ajax({

           type:'GET',

           url:'/paso/'+counter+'/'+counter2,


           success:function(data){            
            wordWrapper.innerHTML = data.text1;
            wordWrapper2.innerHTML = data.text2;                              
           }
           

        });
        counter =15;        
        if(counter==16){
            addingWord=false;
        }
        
    }
    else {
        $.ajax({

           type:'GET',

           url:'/paso/'+counter+'/'+counter2,


           success:function(data){                               
            wordWrapper.innerHTML = data.text1;
            wordWrapper2.innerHTML = data.text2;    
           }
           

        });
        counter=1;
        if(counter==0){
            counter2++;
            addingWord=true;
            if(counter2==3){
                counter2=0;
            }
        }*/
    
/*
  if(wordWrapperContent.length > 0 && !addingWord ) {
    wordWrapper.innerHTML = wordWrapperContent.slice(0, -1);
    wordWrapper2.innerHTML = wordWrapperContent2.slice(0, -1);
    
    wordWrapperContent = wordWrapper.innerHTML;
    wordWrapperContent2 = wordWrapper2.innerHTML;
  } else {
    addingWord = true;
  }
  

  if( addingWord ){
    if( wordWrapperContent.length < words[counter].length  ) {
        //console.log(counter);
        //console.log(wordWrapperContent.length + 1);
      wordWrapper.innerHTML = unescape(words[counter].slice(0, wordWrapperContent.length + 1));
      
      
      wordWrapper2.innerHTML = unescape(words2[counter].slice(0, wordWrapperContent2.length + 1));
//      console.log(words[counter].slice(0, wordWrapperContent.length + 1));
      wordWrapperContent = wordWrapper.innerHTML;
      wordWrapperContent2 = wordWrapper2.innerHTML;
    } else {
      if( counter < words.length) {
        counter ++
      }
      addingWord = false;
    }
  }




  if( counter == words.length) {
    counter = 0;
  }*/
}, 1000);


