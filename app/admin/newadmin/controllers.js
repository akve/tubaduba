trnadmin.controller('AdminController', function( $mdDialog, $q, $scope, $timeout, $rootScope,  $http, NgTableParams) {

	$scope.sizetypes = [
		{id:"numbers",title:"номера (42...54)"},
		{id:"fabric", title:"по ткани"},
		{id:"oversize", title:"oversize"}];

		$scope.country = "ua";


		$scope.filter = {
			dresstype: '',
			category: '',
			group: '',
			currentType:''
		}

		$scope.layer1Filtered = [];
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
		$http.post("/app/admin/admin-remote.php?action=save&rnd="+Math.random()+"&country="+$scope.country, {data:angular.toJson($scope.config, true, "  ")}).success(function(r){
				$rootScope.showStatus("OK");
		});
	}

	$scope.load = function(){
		$http.get("/app/admin/admin-remote.php?action=load&rnd="+Math.random()+"&country="+$scope.country).success(function(r){
			$scope.config = r;
      $scope.config.colorsExtended = false;
      $scope.layer1Filtered = $scope.config.layer1;
		});
	}

	$scope.load();

  $scope.itemModal = function(_item, skipConversion) {
  	var item;
  	if (!skipConversion) {
  		item = findItem(_item.id);
		} else {
  		item = _item;
		}
    $mdDialog.show({
      controller: 'ItemDetailsController',
      controllerAs: 'pc',
      templateUrl: '/app/admin/newadmin/editModal.html',
      parent: angular.element(document.body),
      locals: {
        details: item,
				config: $scope.config,
        onclose: function (a) {
          console.log("CLOSE", a)
        }
      },
      clickOutsideToClose: true,
      fullscreen: true
    });
  }
	$scope.addItem = function(){
    $scope.config.layer1.push({images_main:['',''], images:[], colors:[], sizes:'numbers', dresstypes:[], categories:[], extended:true});
    $scope.itemModal($scope.config.layer1[$scope.config.layer1.length-1], true);
	}

  $scope.applyFilter = function(filterType) {
  	var types = ['dresstype', 'category', 'group'];
    if (filterType) {
      $scope.filter.currentType = filterType;
    } else {
      filterType = $scope.filter.currentType;
    }
  	types.forEach(function(t) {
  		if (t != filterType) $scope.filter[t] = '';
		})
		var layer1Filtered = [];
  	var filterValue = $scope.filter[filterType];

  	if (!filterType || filterType == 'clear') {
      $scope.layer1Filtered = $scope.config.layer1;
		} else {
      function exists(list, id) {
        var exists = false;
        list.forEach(function(i){
          if (i.id == id) exists = true;
        })
        return exists;
      }
      $scope.config.layer1.forEach(function(item) {
        if (filterType == 'group' && item.group == filterValue) {
          layer1Filtered.push(item);
        }
        if (filterType == 'dresstype' && item.dresstypes && exists(item.dresstypes, filterValue)) {
          layer1Filtered.push(item);
        }
        if (filterType == 'category' && item.categories && exists(item.categories, filterValue)) {
          layer1Filtered.push(item);
        }
      })
      $scope.layer1Filtered = layer1Filtered;
  	}
	}

	function findItem(id) {
  	for (var i=0;i<$scope.config.layer1.length;i++){
  		if ($scope.config.layer1[i].id == id) return $scope.config.layer1[i];
		}
		return null;
	}

  $scope.moveUpFieldFiltered = function(index) {
  	var list = $scope.layer1Filtered;
    if (index > 0) {
    	var currentItemId = list[index].id;
    	var prevItemId = list[index-1].id;
    	var currentItem = _.clone(list[index]);
      var prevItem = _.clone(list[index-1]);
      //console.log(currentItemId, prevItemId)
			var replacedIndex = -1;
      for (var i=0;i<$scope.config.layer1.length;i++){
        if ($scope.config.layer1[i].id == prevItemId) {
          $scope.config.layer1[i] = currentItem;
          replacedIndex = i;
				}
        if ($scope.config.layer1[i].id == currentItemId && replacedIndex != i) {
          $scope.config.layer1[i] = prevItem;
        }
      }
      $scope.applyFilter();
    }
  };

  $scope.moveDownFieldFiltered = function(index) {
    var list = $scope.layer1Filtered;
    if (index < list.length - 1) {
      var currentItemId = list[index].id;
      var prevItemId = list[index+1].id;
      var currentItem = _.clone(list[index]);
      var prevItem = _.clone(list[index+1]);
      //console.log(currentItemId, prevItemId)
      var replacedIndex = -1;
      for (var i=0;i<$scope.config.layer1.length;i++){
        if ($scope.config.layer1[i].id == prevItemId) {
          $scope.config.layer1[i] = currentItem;
          replacedIndex = i;
        }
        if ($scope.config.layer1[i].id == currentItemId && replacedIndex != i) {
          $scope.config.layer1[i] = prevItem;
        }
      }
      $scope.applyFilter();
    }
  };

  $scope.changeFld = function(p, fld) {
  	p[fld] = !p[fld];
  	console.log(p)
    for (var i=0;i<$scope.config.layer1.length;i++) {
      if ($scope.config.layer1[i].id == p.id) {
        $scope.config.layer1[i][fld] = p[fld];
      }
    }
	}

  $scope.onDrop = function(e, e1) {
    console.log(e.currentTarget.id, e1.id);
    var prevIndex = -1;
    var newIndex = -1;
    var itemCopy = _.clone(findItem(e1.id));
    for (var i=0;i<$scope.config.layer1.length;i++){
      if ($scope.config.layer1[i].id == e.currentTarget.id) {
        newIndex = i;
      }
      if ($scope.config.layer1[i].id == e1.id ) {
        $scope.config.layer1[i].id = "DELETE-ME";
      }
    }

    $scope.config.layer1.splice(newIndex, 0, itemCopy);
    for (var i=0;i<$scope.config.layer1.length;i++){
      if ($scope.config.layer1[i].id == "DELETE-ME" ) {
        prevIndex = i;
      }
    }
    $scope.config.layer1.splice(prevIndex, 1);
    $scope.applyFilter();
	}

  $scope.dropSuccessHandler = function(e, e1, e2) {
  }

});

trnadmin.controller('ItemDetailsController', function( $mdDialog, $q, $scope, $timeout, $rootScope,  NgTableParams, details, config) {
  $scope.details = details;
  $scope.config = config;
  $scope.p = details

  $scope.sizetypes = [
    {id:"numbers",title:"номера (42...54)"},
    {id:"fabric", title:"по ткани"},
    {id:"oversize", title:"oversize"}];

  $scope.country = "ua";

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

  $scope.save = function(){
    $mdDialog.hide();
	}


  $scope.cancel = function(){
    $mdDialog.hide();
  }
});
