//Alanna Fischer aef222// 

// variables //
var index = 0;
var images = ["images/adr1.jpeg", "images/adr2.jpeg", "images/adr3.jpeg", "images/adr4.jpeg"];  

function goback() {

    if(index===0)
   {
       index=3;
   }else{
    index= index-1;
   }
    document.getElementById("image").src=images[index];

}

function gofwd(){

    if(index===3){
      index=0;
   
   }else{
     index= index+1;
   }
    document.getElementById("image").src=images[index];
}

window.onload = function date_and_season() {
    "use strict";
    // variables
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        weekNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        // get pieces of date
        full_date = new Date(),
        day_of_week = weekNames[full_date.getDay()],
        this_month_text = monthNames[full_date.getMonth()],
        // this_month_text = "March",
        today = full_date.getDate(),
        this_year = full_date.getFullYear(),
        // set information up for insertion into DOM tree
        new_span = document.createElement('span'),
        new_text = document.createTextNode( today  + ' ' + this_month_text + ' ' + this_year),
        position = document.getElementsByTagName('footer')[0];
    // append date to footer
    new_span.appendChild(new_text);
    position.appendChild(new_span);
    
};



