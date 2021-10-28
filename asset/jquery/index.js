function initTableData() {
	//Fixed data
	
	var data = [
    		{
				"id": 1,
				"name": "Nha Trang - Vinpearl Land",
				"price": "700.000",
				"address": "05 Trần Phú",
				"phone": "0966109724"
    		},
    		{
				"id" : 2,
				"name": "Tháp Bà Ponagar",
				"price": "22.000",
				"address": "61 Hai Tháng Tư",
				"phone": "0966109724",
    		},
    		{
				"id" : 3,
				"name": "Chùa Long Sơn",
				"price": "Free",
				"address": "Đường 23/10",
				"phone": "0911448218",
    		},
			{
				"id" : 4,
				"name": "Bãi Biển Nha Trang",
				"price": "Free",
				"address": "Trần Phú",
				"phone": "0966109724",
    		},
			{
				"id" : 5,
				"name": "Hòn Tằm",
				"address": "Vĩnh Nguyên",
				"phone": "0966109724",
				"price": "590.000",
    		},
			{
				"id" : 6,
				"name": "Nhà thờ Núi Nha Trang",
				"price": "Free",
				"address": "1 Thái Nguyên",
				"phone": "0966109724",
    		},
			{
				"id" : 7,
				"name": "Viện Hải dương học",
				"price": "Free",
				"address": "số 1, Cầu Đá, Trần Phú",
				"phone": "0966109724",
    		},
			{
				"id" : 8,
				"name": "Nhà thờ Đá Nha Trang",
				"price": "Free",
				"address": "31 Thái Nguyên",
				"phone": "0966109724",
    		},
			{
				"id" : 9,
				"name": "Vịnh Ninh Vân",
				"price": "Free",
				"address": "",
				"phone": "0966109724",
    		},
			{
				"id" : 10,
				"name": "Vịnh Vân Phong",
				"price": "Free",
				"address": "",
				"phone": "0966109724",
    		},
			{
				"id" : 11,
				"name": "Đảo Bình Ba",
				"price": "Free",
				"address": "",
				"phone": "0966109724",
    		},
			{
				"id" : 12,
				"name": "Đảo Bình Hưng",
				"price": "Free",
				"address": "",
				"phone": "0966109724",
    		}
    	];
    table = $('#users').DataTable({
		"processing": true,
		data,
		columns: [
			{data : 'id'},
			{data : 'name'},
			{data : 'price'},
			{data : 'address'},
			{data : 'phone'},
		]
	})

}

$(document).ready(function (){
	initTableData();
	$("#list-header").on({
		mouseenter: function() {
			$(this).css("background-color", "lightgray");
		},
		mouseleave: function(){
        	$(this).css("background-color", "lightblue");
    	}, 
	});
	$("#btnReloadData").on("click", function(){
		//alert("reload data...")
		table.ajax.reload();
	});
});