function coupleSelect(){
	var para = document.createElement("section");
	//var node = document.createElement("input"); 
	para.innerHTML="<input id=\"first\" name= \"first2\" class=\"element text\" type=\"text\" maxlength=\"255\" size=\"15\" value=\"\"/><label>בן/בת זוג</label>";
	//para.appendChild(node);
	var element = document.getElementById("name");
	element.appendChild(para);
}
 function familySelect(){
	 var para = document.createElement("section");
	//var node = document.createElement("input"); 
	para.innerHTML="<input  name= \"fml\" class=\"element text\" type=\"number\" maxlength=\"255\" size=\"3\" min=\"1\" value=\"\"/><label>כמות מגיעים</label>";
	//para.appendChild(node);
	var element = document.getElementById("coming");
	element.appendChild(para);
 }