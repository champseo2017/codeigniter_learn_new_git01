<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>




<div id="container">
	<p class="footer">เวลาในการโหลดหน้าเว็บ <strong>{elapsed_time}</strong> seconds. </p>
</div>
<div id="title">
<h3></h3>
<div>
<input type="text" id="txt1"> + <input type="text" id="txt2"> = <input type="text" id="txt3"> 
<input type="button" id="btn1" value="Click">
<input type="button" id="btn2" value="Clear">
<hr/>
<div id="div1">True www.google.com</div>
<button type="button" value="Click" id="btn_show">Show</button>
<button type="button" value="Click" id="btn_hide">Hide</button>
<hr>
<div id="div_slide">slide up, slide down, slide toggle</div>
<button type="button" value="Click" id="btn_slideup">slide up</button>
<button type="button" value="Click" id="btn_slidedown">slide down</button>
<button type="button" value="Click" id="btn_slidetoggle">slide toggle</button>
<hr/>
<div id="event_load"></div>
<button type="button" value="Click" id="btn_loadajex">event jquery load ajex</button>
<hr/>
<div class="show_ajax">
</div>
</div>
<button type="button" value="Click" id="btn_method_ajax">Click method ajax jquery</button>
<hr/>
<input type="text" id="txt1_val">
<input type="text" id="txt2_val">
<div id="data_01"></div>
<button type="button" id="btn_input_val" value="load">คลิก</button>
<script>
 //  ParseInt() ในการเปรียบเทียบค่า string หรือตัวแปรและส่งกลับให้เป็น Integer หรือจำนวนเต็ม
//  ParseFloat() ในการแปลงค่า string หรือตัวแปรให้เป็น Number
	$("#title h3").append("บวกเลข")
    $("#txt3").hide();
    $("#btn1").click(function(){
	$("#txt3").show();
	$("#txt3").val(parseFloat($("#txt1").val()) + parseFloat($("#txt2").val()));
	});
	$("#btn2").click(function(){
	$("#txt3").hide();
	$("#txt1").val('');
	$("#txt2").val('');
	$("#txt3").val('');
	});
	

	$("#btn_show").click(function(){
		$("#div1").show(1000);
	});
	$("#btn_hide").click(function(){
		$("#div1").hide(1000);
	});
	$("#btn_slideup").click(function(){
		$("#div_slide").slideUp(1000);
	});
	$("#btn_slidedown").click(function(){
		$("#div_slide").slideDown(1000);
	});
	$("#btn_slidetoggle").click(function(){
		$("#div_slide").slideToggle(1000);
	})
 // click load ajax
	$("#btn_loadajex").click(function(){
		$("#event_load").load('Products/load_jquery_ajex');
	});
 // Click method ajax 
    $("#btn_method_ajax").click(function(){
		$.ajax({
			type: "GET",
			url: "Products/method_ajax",
			success: function(data)
			{
			if( !$(this).hasClass("show_ajax") ) {   
				$(".show_ajax").html(data);  
			}
			},
			error: function(data_error)
			{
			$("#event_method_ajax").html(data_error);
			}
		});
	});
	$(".show_ajax").hide();
	
	$("#btn_method_ajax").click(function(){
		event.preventDefault();
		$(".show_ajax").toggle();
	});
	
	$("#btn_input_val").click(function(){
		var senddata = [{
    	text1: $("#txt1_val").val(),
    	text2: $("#txt2_val").val(), 
  		}];
		$.ajax({
			method: "POST",
			data: {myData: senddata},
			url: "Products/method_post_ajax",
		})
		.done(add)
		.fail(function(){
			alert("OH NO! FAILED");
		});
	});
	function add (data)
	{
		$('#data_01').html(data);
	}

	// function myFunction(param1, param2)
	// {
	// 	param1.a = 3;
	// 	param2 = 200;
	// }
	// var obj = {a:1, b:2}, value = 100;
	// myFunction(obj, value);
	// console.log(obj.a);
	// console.log(value);
// การส่งค่าให้ตัวแปร สำหรับวิธีส่งข้อมูลไปให้กับตัวแปร ไม่ว่าจะเป็นการกำหนดค่าให้กับตัวแปร หรือส่งค่าอาร์กิวเมนต์ไปให้พารามิเตอร์ของฟังก์ชั่น 
// จะส่งได้ 2 กรณีคือ 
// 1. Pass by value จะเป็นการส่งค่า ด้วยการก๊อปปี้ข้อมูลไปให้ตัวแปร
// 2. Pass by reference จะเป็นการส่งค่า ด้วยการก๊อปปี้ตำแหน่งในหน่อยความจำข้อมูล หรือค่า reference ไปให้ตัวแปร
// --------------------------- //
	// var obj1 = {a:1, b:2};
	// var obj2 = obj1;
	// obj2.a = 3;
	// console.log(obj1.a);

	// var value1 = 1;
	// var value2 = value1;
	// value2 = 3;
	// console.log(value1);

// --------------------------- //

//การเปรียบเทียบความเท่ากัน 
// ตัวเลข จะนำข้อมูลมาเปรียบเทียบกัน
// บูลีน จะนำข้อมูลมาเปรียบเทียบกัน
// สตริง จะนำข้อมูลมาเปรียบเทียบกัน
// ออบเจ็กต์, ซิมโบล จะใช้ค่า reference มาเปรียบเทียมกัน
// -------------------------- //
//นำออบเจ็กต์มาเปรียบเทียบความเท่ากัน 
// แม่ว่าเราเอาออบเจ็กต์ {a:1} สองตัวมาเปรียบเทียบกัน แม้ว่าจะเป็นชนิดข้อมูล ออบเจ็กต์เหมือนกัน แต่ตำแหน่ง reference ต่างกันจึงได้ false
// var obj1 = {a:1}
// console.log({a:1} == {a:1});
// console.log({a:1} === {a:1});

// // นำข้อมูลชนิดพื้นฐานมาเปรียบเทียบความเท่ากัน
// var a = 1, b = 1;
// console.log(a == b);
// console.log(a === b);

//เมื่อสร้าง ออบเจ็กต์ { } ขึ้นมาทุกครั้ง นอกจากจะใช้ตัวแปรเก็บค่า reference เพื่ออ้างอิงออบเจ็กต์นั้นๆ แล้วใน
// javascript ยังมี pointer ชื่อว่า this ในการเข้าถึง reference ใน ออบเจ็กต์ได้อีกด้วย
// ------------------------ //
// var obj = {
// 	a:1
// 	,foo:function(){
// 		this.a = 1;
// 		console.log(this.a);
// 	},
// 	bar: function(){
// 		console.log(this.a);
// 	}
// };
// obj.foo();
// obj.bar();
// console.log(obj.a);
// ใช้ this เพื่อเพิ่มพร็อพเพอร์ตี้ a เข้าไปในออบเจ็กต์ obj ผ่านทาง this ได้
// this. มีประโยชน์เมื่อใช้เข้าถึงพร็อพเพอร์ตี้ จากภายในออบเจ็กต์โยไม่ต้องผ่านตัวแปรที่เก็บค่า reference เลย
// ------------------------ //

// การผูก this ไว้กับออบเจ็กต์
// สำหรับ this ในจาวาสคริปต์ มันจะถูกผูกไว้ ให้ไปชี้ยังออบเจ็กต์ตัวใด ก็ขณะโปปรแกรมทำงานเท่านั้น
// ต่อมาได้เรียก obj1.foo(); ให้ทำงาน ซึ้งจาวาสคริปต์จะผูก this ขณะโปรแกรมทำงาน ด้วยการให้ this ชี้ไปยัง obj1 ซึ้งจะทำให้ obj1.foo() มองไม่เห็น this.a
// ---------------------- //
// var obj1 = {};
// var obj2 = {
// 	a:1
// 	,bar: function(){
// 		console.log("this.a =", this.a);
// 		obj1.foo = function ()
// 		{
// 			console.log("this.a =", this.a);
// 		}
// 	}
// }
// obj2.bar();
// obj1.foo();
// ------------------- //

// this ในฟังก์ชั่น ไม่เพียงแค่ภายในออบเจ็กต์ที่เรียกใช้งาน this ได้ ฟังก์ชั่นเองก็สามารถเรียกใช้งานได้เช่นกัน ซึ้งถาเป็นการเรียกฟังก์ชั่นธรรมดา ไม่ได้เรียกผ่านโอเปอเรเตอร์ new()
// เมื่อเขียนอยู่ใน use strict ค่า this จะเป็น undefined 
// แต่ถ้าไม่ใช้โหมด strict ค่า this จะชี้ไปยังออบเจ็กต์โกลบอล
// --------------------------- //
// "use strict";
// function myFunction() 
// {
// 	return this;
// }
// var obj = myFunction();
// console.log(typeof obj);
// ------------------------ //

// เมธอด call() apply() และ bind()
// เนื่องจากฟังก์ชั่นทุกตัวเป็นออบเจ็กต์ และก็จะมีเมธอดได้แก่ call(), apply() และ bind() ซึ้งสามารถใช้มันเปลียนค่า this ให้ไปชี้ออบเจ็กต์ตัวอื่น ระหว่างโปรแกรมทำงานได้
// -------------------------------- //
// var obj1 = {
// 	value:20
// };

// var obj2 = {
// 	myFunction: function(param1, param2)
// 	{
// 		var value = this.value; // this จะชี้ไปยัง obj1
// 		console.log(param1, param2, value);
// 	}
// }
// obj2.myFunction(1, 10);
// obj2.myFunction.call(obj1, 1, 10);
// obj2.myFunction.apply(obj1, [1, 10]);
// var f = obj2.myFunction.bind(obj1, 1, 10);
// f(); //bind () มันจะรีเทิร์นฟังก์ชั่นออกมาอีกครั้งหนึ่ง ยังไม่เรียกให้ฟังก์ชั่นทำงานทันที โดยทั้งนี้เราสามารถระบุค่า this และค่าอาร์กิวเมนต์ได้ตามทีี่ต้องการ

//พร็อพเพอร์ตี้แอคเซสเซอร์ เป็นพร็อพเพอร์ตี้แบบพิเศษ ที่ใช้เข้าถึงข้อมูลของออบเจ็กต์
// var font = { color: "red" };
// console.log(font.color = "blue"); //ถ้าไม่ได้ประกาศเมธอด setter ไว้จะสามารถเข้าไปแก้ข้อมูลภายในออบเจ็กต์ได้โดยตรง
// var font = {
// 	set color(param) //ประกาศเมธอด setter โดยมีพารามิเตอร์ ได้เพียงตัวเดียว
// 	{
// 		this.col = param;
// 	}
// };
// font.color = "blue"; // มีเมธอด setter สามารถแก้ไขค่าได้
// console.log(font.color); // ไม่สามารถอ่านค่าออบเจ็กต์ได้

// var font = {
// 	col: "red"
// 	,get color() { // ประกาศเมธอด getter โดยไม่ต้องมีพารามิเตอร์
// 		return this.col; // รีเทิร์นข้อมูลภายในออบเจ็กต์ออกไป
// 	}
// };
// console.log(font.color);
// font.color = "blue"; // ไม่สามารถแก้ไขได้เพราะมีเมธอด getter ที่อ่านข้อมูลได้อย่างเดียว
// console.log(font.color);


// ถ้าอยากให้มันทั้งอ่าน ทั้งแก้ไขได้ getter() กับ settet()
// var font = {
// 	col:"red"
// 	,set color(param) //เมธอด setter แก้ไขค่าได้อย่างเดียว
// 	{
// 		this.col = param; //เพิ่มตัวแปร col ด้วย this ไปในออบเจ็กต์
// 	}
// 	,get color() //เมธอด get อ่านค่าได้อย่างเดียว
// 	{
// 		return this.col;
// 	}
// };
// console.log(font.color); //อ่านค่า
// font.color = "blue"; //แก้ไขค่าตัวแปรภายใน ออบเจ็กต์
// console.log(font.color); //อ่านค่าตัวแปรภายในออบเจ็กต์
// font.col //พร้อพเพอร์ตี้
// // console.log(font.col); เข้าถึงตัวแปรภายในออบเจ็กต์

//ฟังก์ชั่นคอนสตรัคเตอร์
//ฟังก์ชั่นใน javascript สามารถเรียกได้ 2 วิธี
// 1.เรียกแบบฟังก์ชั่นปกติธรรมดา
// 2.เรียกโดยใช้โอเปอเรเตอร์ new
// function constructor ที่แปลว่าผู้สร้างมันจะทำหน้าที่เป็นพิมพ์เขียว เอาไว้สร้างออบเจ็กต์ขึ้นมาโดยเฉพาะ ไม่ต้องใช้ปีกกาสร้าง
function Car (color)
{ 
	//สำหรับ this ในที่นี้จะชี้ไปยังออบเจ็กต์ที่ถูกสร้างขึ้นมา จึงทำให้เฉพาะออบเจ็กต์ตัวนี้ พร็อพเพอร์ตี้ color จะมีค่าเป็น red เท่านั้น (เป็นข้อมูลของออบเจ็กต์)
	this.color = color; //ใช้ this ที่ function นี้ ( ผูกตัวแปร color ไว้ที่ฟังก์ชั่นนี้ ) และ ค่า color จะถูกกำหนดไว่ที่ this.color
	return true; //ไม่ได้ return true ออกไป
}
var redCar = new Car("red");
var blueCar = new Car("blue");
var normal = Car("pink");
              // สร้างออบเจ็กต์ใหม่ได้เรื่อยๆด้วยโอปาเรอตร์ new
console.log("ออบเจ็กต์ function constructor new = " + redCar.color);
console.log("ออบเจ็กต์ function constructor new = " + blueCar.color);
console.log("เรียกฟังก์ชั่นแบบปกติ" + normal);

//เรียก function โดยที่ไม่มีอาร์กิวเมนต์ส่งเข้าไป
function not_have_ar()
{
	console.log("not have อาร์กิวเมนต์");
}
var not_ar = new not_have_ar; // ถ้าไม่มีค่าอาร์กิวเมนต์อะไรส่งเข้าไปให้ก็ไม่จำเป็นต้องมีวงเล็บต่อท้ายชื่อฟังก์ชั่น
console.log(not_ar);

</script>
</body>
</html>