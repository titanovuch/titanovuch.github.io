let timeStr, dateStr;
function clock() {
now= new Date();
hours= now.getHours();
minutes= now.getMinutes();
seconds= now.getSeconds();
timeStr= "" + hours;
timeStr+= ((minutes < 10) ? ":0" : "/") + minutes;
timeStr+= ((seconds < 10) ? ":0" : "/") + seconds;
document.clock.time.value = timeStr;
date= now.getDate();
month= now.getMonth()+1;
year= 2021;
dateStr =    year + "*";
dateStr+= "" + month;
dateStr+= ((date < 10) ? "/0" : "*") + date;

document.clock.date.value = dateStr;
Timer= setTimeout("clock()",1000);}