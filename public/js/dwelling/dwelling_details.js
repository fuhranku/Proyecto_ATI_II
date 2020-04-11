
console.log(dwelling_details);
console.log(comfort_details);
dwelling_details = dwelling_details[0]; //get first dwelling


$("#continent_show_details").text(dwelling_details["continent_name"]);
$("#country_show_details").text(dwelling_details["country_name"]);
$("#state_show_details").text(dwelling_details["state_name"]);
$("#city_show_details").text(dwelling_details["city_name"]);
$("#enable_show_details").text( dwelling_details["enable"] == 1 ? "Si":"No");
$("#status_show_details").text( dwelling_details["status"] == 3 ? "Alquiler y Venta": dwelling_details["status"] == 1 ? "Alquiler": "Venta" );
$("#property_type_show_details").text(dwelling_details["property_type"] == 2 ? "Casa": "Apartamento" );
$("#rooms_show_details").text(dwelling_details["rooms"]);
$("#parking_show_details").text(dwelling_details["parking"]);

//getting comforts
var comforts_name_details = [];
var comforts_id_details = JSON.parse(dwelling_details["comforts"]).array;

for(var j = 0; j < comforts_id_details.length; j++){
    var obj = comfort_details.find( (x) =>{
        return x.id == parseInt(comforts_id_details[j]); 
    } )
    comforts_name_details.push(obj.name);
    console.log(obj.name);
}

var finalTextComforts_details = "";
for(var j = 0; j < comforts_name_details.length-1; j++){
    finalTextComforts_details+= comforts_name_details[j] + ", ";
}
finalTextComforts_details += comforts_name_details[comforts_name_details.length-1];

$("#comforts_show_details").text(finalTextComforts_details);

//getting services
var services_name_details = [];
var services_id_details = JSON.parse(dwelling_details["services"]).array;

for(var j = 0; j < services_id_details.length; j++){
    var obj = services_details.find( (x) =>{
        return x.id == parseInt(services_id_details[j]); 
    } )
    services_name_details.push(obj.name);
    console.log(obj.name);
}

var finalTextServices_details = "";
for(var j = 0; j < services_name_details.length-1; j++){
    finalTextServices_details+= services_name_details[j] + ", ";
}
finalTextServices_details += services_name_details[services_name_details.length-1];


$("#services_show_details").text(finalTextServices_details == "" ? "No hay" : finalTextServices_details);
$("#details_show_details").text(dwelling_details["details"] == "" ? "No hay" : dwelling_details["details"]);
$("#trasport_details_show_details").text(dwelling_details["transport_details"] == "" ? "No hay" : dwelling_details["transport_details"]);
$("#location_details_show_details").text(dwelling_details["location_details"] == "" ? "No hay" : dwelling_details["location_details"]);
$("#price_show_details").text(dwelling_details["price"]);
$("#currency_show_details").text(dwelling_details["currency"] == 1? "EUR" : "USD");
$("#contact_name_show_details").text(dwelling_details["contact_name"]);
$("#contact_lastname_show_details").text(dwelling_details["contact_lastname"]);
$("#contact_email_show_details").text(dwelling_details["contact_email"]);
$("#contact_number_show_details").text(dwelling_details["contact_mobilenumber"] == "" ? "No hay" : dwelling_details["contact_mobilenumber"]);
$("#contact_landline_show_details").text(dwelling_details["contact_landlinenumber"] == "" ? "No hay" : dwelling_details["contact_landlinenumber"]);
$("#contact_ext_show_details").text( dwelling_details["contact_landlinenumberEXT"] == "" ? "No hay" : dwelling_details["contact_landlinenumberEXT"] );


var contact_days_details = JSON.parse(dwelling_details["contact_days"]);

console.log(contact_days_details);
var final_contact_days = "";

for(var i = 0; i < contact_days_details.length - 1; i++){
    final_contact_days += contact_days_details[i] + ", ";
}

final_contact_days += contact_days_details[contact_days_details.length-1];

$("#contact_days_show_details").text(contact_days_details == "" ? "No hay" : final_contact_days);

var text_hours_details = "";
if(dwelling_details["contact_hourfrom"] && dwelling_details["contact_hourto"]){
    var hourfrom_details = dwelling_details["contact_hourfrom"] < 12 ?  (dwelling_details["contact_hourfrom"]).toString() + "AM" : (dwelling_details["contact_hourfrom"]-12).toString() + "PM"; 
    var hourto_details = dwelling_details["contact_hourto"] < 12 ?  (dwelling_details["contact_hourto"]).toString() + "AM" : (dwelling_details["contact_hourto"]-12).toString() + "PM";
    text_hours_details += "Desde " + hourfrom_details + " hasta " + hourto_details;
}

$("#contact_hours_show_details").text(text_hours_details == "" ? "No hay" : text_hours_details);
