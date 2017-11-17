trnadmin.controller('AdminController', function( $mdDialog, $q, $scope, $timeout, $rootScope,  $http, NgTableParams) {

	$scope.sizetypes = [
		{id:"numbers",title:"номера (42...54)"},
		{id:"fabric", title:"по ткани"},
		{id:"oversize", title:"oversize"}];

		$scope.country = "ua";

	$scope.config =  {
		groups: [
			{id:"withsleeves", title:"Волшебные ТУБЫ c рукавами"},
			{id:"long", title:"Бесшовная Туба одежда"}
			//{id:"short", title:"Короткие платья"},
			//{id:"tops", title:"Шапки-снуды"}
			//,{id:"bluse", title:"Кофточки"}
		],
		colorCodes: [
			
		],
		layer1: [
			//{id:1,description:'b', sizes:'numbers',group:'long',images_main:['',''],images:[], colors:[{id:'a',d:30}]}
		]
	}

	$scope.moveUpField = function(list, index) {
        if (index > 0) {
            var temp = list[index];
            list[index] = list[index - 1];
            list[index - 1] = temp;
        }
    };

    $scope.moveDownField = function(list, index) {
        if (index < list.length - 1) {
            var temp = list[index];
            list[index] = list[index + 1];
            list[index + 1] = temp;
        }
    };

    $scope.addColor = function(p){
    	p.colors.push({});
    	console.log($scope.config);
    };

	$scope.addCategory = function(p){
    	if (!p.categories) p.categories = [];
    	p.categories.push({});
    	//console.log($scope.config);
    };
    
	$scope.addDresstype = function(p){
    	if (!p.dresstypes) p.dresstypes = [];
    	p.dresstypes.push({});
    	//console.log($scope.config);
    };

    $scope.process = function(){
    	for(var k in colorCodes) {
    		$scope.config.colorCodes.push({id:k, path:colorCodes[k]});
    	}
    	if ($scope.country == "ru") {
    		tStore = tStoreCR;
    	}
    	tStore.layer1.forEach(function(record){
    		var record2 = tStore.layer2[record.id];
    		if (!record2) return;
    		var r = {images:[],colors:[], images_main:['','']};
    		r.id = record.id;
    		r.description = record2.description;
    		r.title = record2.title;
    		r.group = record.group;
    		r.price = record2.price ? record2.price : record.price;
    		r.pricediscount = record.pricediscount;
    		record2.images.forEach(function(i,idx){
    			if (idx>7) return;
				r.images.push({path:i});
			})
			if (! r.categories) r.categories = [];
    		r.images_main = record.images;
    		record2.colors.forEach(function(color,idx) {
    			var c = {};
		    	$scope.config.colorCodes.forEach(function(singleColor){
		    		if (singleColor.id == color.name) {
		    			c.id = color.name;
		    			singleColor.path_big = color.images[0];
		    		}
		    	})
		    	if (!c.id) {
		    		$scope.config.colorCodes.push({id:color.name, path:color.images[0], path_big:color.images[0]});
		    		c.id = color.name;
		    	}
		    	c.d = color.d;
		    	r.colors.push(c);
	    	});

	    	r.sizes="fabric";

	    	$scope.config.layer1.push(r);

		});
	}

	$scope.save = function(){
		$http.post("/wp-content/themes/organica/admin-remote.php?action=save&rnd="+Math.random()+"&country="+$scope.country, {data:angular.toJson($scope.config, true, "  ")}).success(function(r){
				$rootScope.showStatus("OK");
		});
	}

	$scope.load = function(){
		$http.get("/wp-content/themes/organica/admin-remote.php?action=load&rnd="+Math.random()+"&country="+$scope.country).success(function(r){
			$scope.config = r;

		});
	}
	

});