$(function() {
    $('#side-menu').metisMenu();
});
//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
$(function() {
    $(window).bind("load resize", function() {
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    })
})  
function addMinutes(date, minutes) {
    return new Date(parseInt(date.getTime()) + parseInt(minutes)*60000);
}
function fetchInfo(req)
{
    //Creating a new XMLHttpRequest object
    var xmlhttp;
	var reqURL=req;
    if (window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest(); //for IE7+, Firefox, Chrome, Opera, Safari
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); //for IE6, IE5
    }
    //Create a asynchronous GET request
    xmlhttp.open("GET", reqURL, false);
    xmlhttp.send(null);
     
    //Execution blocked till server send the response
    if (xmlhttp.readyState == 4) {
        if (xmlhttp.status == 200)
        {
		return xmlhttp.responseText;
        }
        else
        {
            alert('Something is wrong !!');
        }
    }
}
function currentDate(){
    var d=new Date();
var day=d.getDate();
var y=d.getFullYear();
var m1=d.getMonth();
var m;
if(m1<10){
    m1=m1+1;
    m="0"+m1;
    }else{
           m1=m1+1;
  }
  var d1;
if(day<10){
    d1="0"+day;
    }
return m+"/"+d1+"/"+y;
}

function dateDiffPositive(currentDate,d2){    
    return getIntervalTime(currentDate)-getIntervalTime(d2);
 }
 function dateDiffT(d1,d2){ 
     var a1=parseInt(new Date(d1).getTime());
     var a2=parseInt(new Date(d2).getTime());
    return a2-a1;
 }
function daysDiff(d1,d2){
     var a1=new Date(d1);
     var a2=new Date(d2);
     return DateDiff.inDays(a1,a2);
 }
function getIntervalTime(d){
    // Set the unit values in milliseconds.
var msecPerMinute = parseInt(1000 * 60);
var msecPerHour = parseInt(msecPerMinute * 60);
var msecPerDay = parseInt(msecPerHour * 24);
// Set a date and get the milliseconds
var date = new Date(d);
var dateMsec = date.getTime();
// Set the date to January 1, at midnight, of the specified year.
date.setMonth(0);
date.setDate(1);
date.setHours(0, 0, 0, 0);
// Get the difference in milliseconds.
var interval = parseInt(dateMsec) - parseInt(date.getTime());
return interval;
 }
  $(function() {
    $( "#datepicker").datepicker();
    $( "#datepicker2").datepicker();
    $( "#datepickerR").datepicker();
      
  });
  var DateDiff = {

    inDays: function(d1, d2) {
        var t2 = parseInt(d2.getTime());
        var t1 = parseInt(d1.getTime());

        return parseInt((t2-t1)/(24*3600*1000));
    },

    inWeeks: function(d1, d2) {
        
        var t2 = parseInt(d2.getTime());
        var t1 = parseInt(d1.getTime());

        return parseInt((t2-t1)/(24*3600*1000*7));
    },

    inMonths: function(d1, d2) {
        var d1Y = d1.getFullYear();
        var d2Y = d2.getFullYear();
        var d1M = d1.getMonth();
        var d2M = d2.getMonth();

        return (d2M+12*d2Y)-(d1M+12*d1Y);
    },

    inYears: function(d1, d2) {
        return d2.getFullYear()-d1.getFullYear();
    }
};
function checkdate(input){
var validformat=/^\d{2}\/\d{2}\/\d{4}$/ //Basic check for format validity
var returnval=false
if (!validformat.test(input.value))
alert("Invalid Date Format")
else{ //Detailed check for valid date ranges
var monthfield=input.value.split("/")[0]
var dayfield=input.value.split("/")[1]
var yearfield=input.value.split("/")[2]
var dayobj = new Date(yearfield, monthfield-1, dayfield)
if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getDate()!=dayfield)||(dayobj.getFullYear()!=yearfield))
alert("Invalid Day, Month, or Year range detected. Please correct ");
else
returnval=true
}
if (returnval==false) input.select()
return returnval
}
function printhistory(print)
{

var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(print).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
