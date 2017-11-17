var config;
var configUA = [
  /*{
    "name": "red",
    "color": "#d82028",
    "title": "красный",
    "thick": 0,
    "realthick":2,
    "widths": [
      {
        "price": 180,
        "width": 48
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Krasniy.jpg"
    ]
  },*/
 /*{
    "name": "carmine",
    "fc": 1,
    "color": "#b00f2e",
    "title": "карминовый",
    "widths": [
      {
        "price": 180,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/KARMIN.jpg"
    ]
  },*/
/*{
    "name": "baklagan",
    "color": "#bf2f75",
    "title": "баклажановый",
    "thick":0,
 "realthick":2,
    "widths": [
      {
        "price": 180,
        "width": 49
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/BAklagan.jpg"
    ]
  },*/ 
  /*{
    "name": "bardo",
    "fc": 0,
    "color": "#b00f2e",
    "title": "бардовый",
 "realthick":3,
    "widths": [
      {
        "price": 180,
        "width": 50
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/BARDO.jpg"
    ]
  }, */
  /*{
    "name": "sea",
    "color": "#22a19a",
    "title": "морской",
 "realthick":2,
    "thick": 0,
    "widths": [
      {
        "price": 180,
        "width": 47
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Morskoy-1.jpg"
    ]
  }, */ 
  /*{
    "name": "turquoise",
    "color": "#01b2ba",
    "title": "бирюзовый",
 "realthick":2,
    "thick": 0,
    "widths": [
      {
        "price": 180,
        "width": 50
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/biruza.jpg"
    ]
  }, * /
  /*{
    "name": "blue",
    "fc": 1,
    "color": "#082a5a",
    "title": "синий",
  "thick":0,
 "realthick":2,
    "widths": [
      {
        "price": 180,
        "width": 48
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/siniy.jpg"
    ]
  }, */
  /*{
    "name": "dark-blue",
    "fc": 1,
    "color": "#000040",
    "title": "темно-синий",
  "thick":0,
 "realthick":1,
    "widths": [
      {
        "price": 180,
        "width": 48
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Temno-siniy.jpg"
    ]
  },*/
  {
    "name": "sky-blue",
    "color": "#aedcdc",
    "title": "небесный",
    "thick": 0,
 "realthick":1,
    "widths": [
      {
        "price": 180,
        "width": 50
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Nebesniy.jpg"
    ]
  }, 
/* {
    "name": "cornflower-blue",
    "color": "#7989bd",
    "title": "васильковый",
  "thick":0,
 "realthick":1,
    "widths": [
      {
        "price": 180,
        "width": 50
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Vasilkoviy.jpg"
    ]
  },*/
  {
    "name": "green",
    "fc": 1,
    "color": "#1f4925",
    "title": "темно-зеленый",
  "thick":0,
 "realthick":1,
    "widths": [
      {
        "price": 180,
        "width": 50
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Temno-zel.jpg"
    ]
  }, 
 /*{
    "name": "olive",
    "fc": 1,
    "color": "#7b7e47",
    "title": "оливковый",
  "thick":0,
 "realthick":2,
    "widths": [
      {
        "price": 180,
        "width": 48
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Oliva.jpg"
    ]
  },*/ 
 /*{
    "name": "redbrick",
    "fc": 1,
    "color": "#d7ce57",
    "title": "грушевый",
  "thick":0,
 "realthick":2,
    "widths": [
      {
        "price": 180,
        "width": 45
      }
    ],
    "images": [
      "wp-content/uploads/2016/10/grucheviy.jpg"
    ]
  },*/ 
 {
    "name": " lightgreen",
    "fc": 1,
    "color": "#77bc51",
    "title": "салатовый",
  "thick":0,
 "realthick":2,
    "widths": [
      {
        "price": 180,
        "width": 44
      }
    ],
    "images": [
      "/wp-content/uploads/2016/10/salatoviy.jpg"
    ]
  }, 
 /*{
    "name": "olive",
    "fc": 2,
    "color": "#7b7e47",
    "title": "оливковый",
  "thick":1,
 "realthick":2,
    "widths": [
      {
        "price": 195,
        "width": 54
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Oliva.jpg"
    ]
  },*/
  /*{
    "name": "dark-grey",
    "fc": 1,
    "color": "#5b5d5c",
    "title": "темно-серый",
  "thick":0,
 "realthick":2,
    "widths": [
      {
        "price": 180,
        "width": 50
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Temno-seriy.jpg"
    ]
  },*/
 /*{
    "name": "light-grey",
    "fc": 1,
    "color": "#a1acbe",
    "title": "светло-серый",
 "thick": 0,
    "widths": [
      {
        "price": 180,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Svetlo-seriy.jpg"   
    ]
  },*/
 {
    "name": "white",
    "color": "#ffffff",
    "title": "белый",
 "realthick":1,
  "thick":0,
    "widths": [
      {
        "price": 180,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/beliy.jpg"
    ]
  },
 {
    "name": "beige",
    "color": "#e6d387",
    "title": "бежевый",
 "realthick":2,
    "thick": 0,
    "widths": [
      {
        "price": 180,
        "width": 44
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Begeviy.jpg"
    ]
  }, 
  /*{
    "name": "light-yellow",
    "color": "#fff886",
    "title": "светло-желтый",
 "realthick":1,
  "thick":0,
    "widths": [
      {
        "price": 180,
        "width": 47
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/svetlo-geltiy.jpg"
    ]
  },*/
/*{
    "name": "yellow",
    "color": "#fef102",
    "title": "желтый",
 "realthick":1,
thick:0,
    "widths": [
      {
        "price": 180,
        "width": 47      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/geltiy.jpg"
    ]
  },*/ 
/*{
    "name": "chocolate",
    "color": "#b94f15",
    "title": "терракот",
 "realthick":1,
  "thick":0,
    "widths": [
      {
        "price": 180,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/terrakot.jpg"
    ]
  },*/
/*{
    "name": "nice-chocolate",
    "color": "#972a0f",
    "title": "насыщенный терракот",
 "realthick":1,
  "thick":0,
    "widths": [
      {
        "price": 180,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"
    ]
  },*/
 {
    "name": "dark-brown",
    "fc": 1,
    "color": "#30130d",
    "title": "темно-коричневый",
 "realthick":1,
  "thick":0,
    "widths": [
      {
        "price": 180,
        "width": 47
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/temno-korichneviy.jpg"
    ]
  },
/*{
    "name": "black",
    "fc": 1,
    "color": "#050505",
    "title": "черный",
 "realthick":2,
  "thick":0,
    "widths": [
      {
        "price": 180,
        "width": 50
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/cherniy.jpg"
    ]
  },*/ 
 
     {
    "name": "peach",
    "color": "#ffca86",
    "title": "персиковый",
 "realthick":1,
  "thick":0,
    "widths": [
      {
        "price": 180,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Persikoviy.jpg"
    ]
  },   
 
/*{
    "name": "orange",
    "color": "#fe7e1b",
    "title": "оранжевый",
    "thick": 1,
 "realthick":3,
    "widths": [
      {
        "price": 195,
        "width": 54
      }
    ],
    "images": [
      "img/8-orange.jpg"
    ]
  },*/
/*{
    "name": "malachite-Ïreen",
    "color": "#0ad84f",
    "title": "малахитовый",
    "thick": 1,
 "realthick":3,
    "widths": [
      {
        "price": 195,
        "width": 56
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Malahit.jpg"
    ]
  }, */
  {
    "name": "violet",
    "color": "#7b2f6f",
    "title": "сливовый",
    "thick": 1,
 "realthick":3,
    "widths": [
      {
        "price": 195,
        "width": 55
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/slivoviy-1-3.jpg"
    ]
  },   
  {
    "name": "baklagan",
    "color": "#bf2f75",
    "title": "баклажановый",
 "realthick":3,
    "thick":2,
    "widths": [
      {
        "price": 220,
        "width": 65
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/BAklagan.jpg"
    ]
  },
 {
    "name": "olive",
    "fc": 2,
    "color": "#7b7e47",
    "title": "оливковый",
  "thick":2,
 "realthick":2,
    "widths": [
      {
        "price": 195,
        "width": 65
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Oliva.jpg"
    ]
  }, 


  /* {
    "name": "bardo",
    "color": "#a01a29",
    "title": "бардовый",
    "thick":2,
 "realthick":3,
    "widths": [
      {
        "price": 220,
        "width": 65
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/BARDO.jpg"
    ]
  },*/ 
  /* {
    "name": "fiolet",
    "color": "#894c85",
    "title": "фиолетовый",
    "thick":2,
 "realthick":3,
    "widths": [
      {
        "price": 220,
        "width": 65
      }
    ],
    "images": [
      "img/3-fiolet.jpg"
    ]
  },*/ 
  {
    "name": "malina",
    "color": "#ee3579",
    "title": "малиновый",
"realthick":3,
    "thick":2,
    "widths": [
      {
        "price": 220,
        "width": 65
      }
    ],
    "images": [
      "img/5-malina.jpg"
    ]
  },  
  /*{
    "name": "orange-yellow",
    "color": "#f3a22c",
    "title": "оранжево-желтый",
"realthick":3,
    "thick":2,
    "widths": [
      {
        "price": 220,
        "width": 65
      }
    ],
    "images": [
      "img/4-orange-yellow.jpg"
    ]
  },*/
  {
    "name": "negno",
    "color": "#ffd048",
    "title": "нежно-желтый",
"realthick":3,
    "thick":2,
    "widths": [
      {
        "price": 220,
        "width": 65
      }
    ],
    "images": [
      "img/6-negno-yellow.jpg"
    ]
  },
  {
    "name": "orange",
    "color": "#fa9129",
    "title": "оранжевый",
"realthick":3,
    "thick":2,
    "widths": [
      {
        "price": 220,
        "width": 65
      }
    ],
    "images": [
      "img/8-orange.jpg"
    ]
  },
  /*{
    "name": "belly",
    "color": "#ffffff",
    "title": "белый",
"realthick":3,
    "thick":2,
    "widths": [
      {
        "price": 220,
        "width": 65
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/beliy.jpg"
    ]
  },*/
  /* {
    "name": "black",
    "color": "#121214",
    "title": "черный",
"realthick":3,
    fc:1,
    "thick":2,
    "widths": [
      {
        "price": 220,
        "width": 65
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/cherniy.jpg"
    ]
  },*/ 
 /*{
    "name": "olive",
    "color": "#aa8d08",
    "title": "оливковый",
"realthick":3,
    "thick":2,
    "widths": [
      {
        "price": 190,
        "width": 70
      }
    ],
    "images": [
      "img/11-olive.jpg"
    ]
  }*/


];




var configCRIMEA = [
   {
    "name": "orange",
    "color": "#fe7e1b",
    "title": "оранжевый",
    "thick": 1,
    "widths": [
      {
        "price": 550,
        "width": 54
      }
    ],
    "images": [
      "img/8-orange.jpg"
    ]
  }, 
  {
    "name": "carmine",
    "fc": 1,
    "color": "#b00f2e",
    "title": "карминовый",
    "widths": [
      {
        "price": 500,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/KARMIN.jpg"
    ]
  }, 
  {
    "name": "malachite-Ïreen",
    "color": "#0ad84f",
    "title": "малахитовый",
    "thick": 1,
    "widths": [
      {
        "price": 550,
        "width": 56
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Malahit.jpg"
    ]
  },
  /*{
    "name": "jade",
    "color": "#00b878",
    "title": "нефритовый",
    "thick": 1,
    "widths": [
      {
        "price": 550,
        "width": 55
      }
    ],
    "images": [
      "img/5-jade.jpg"
    ]
  },*/
   /*{
    "name": "yellow",
    "color": "#fef102",
    "title": "желтый",
thick:0,
    "widths": [
      {
        "price": 500,
        "width": 47
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/geltiy.jpg"
    ]
  }, */
   /*{
    "name": "dark-grey",
    "fc": 1,
    "color": "#5b5d5c",
    "title": "темно-серый",
    "widths": [
      {
        "price": 500,
        "width": 50
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Temno-seriy.jpg"
    ]
  }, */
 {
    "name": "light-grey",
    "fc": 1,
    "color": "#a1acbe",
    "title": "светло-серый",
 "thick": 0,
    "widths": [
      {
        "price": 500,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Svetlo-seriy.jpg"   
    ]
  },

 {
    "name": "light-grey",
    "fc": 1,
    "color": "#a1acbe",
    "title": "светло-серый",
 "thick": 1,
    "widths": [
      {
        "price": 550,
        "width": 55
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Svetlo-seriy.jpg"   
    ]
  },
  {
    "name": "violet",
    "fc": 1,
    "color": "#830082",
    "title": "cливовый",
    "thick": 1,
    "widths": [
      {
        "price": 550,
        "width": 56
      }
    ],
    "images": [
      "img/8-violet.jpg"
    ]
  },  
   {
    "name": "turquoise",
    "color": "#01b2ba",
    "title": "бирюзовый",
    "thick": 0,
    "widths": [
      {
        "price": 500,
        "width": 49
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/biruza.jpg"
    ]
  },
  {
    "name": "blue",
    "fc": 1,
    "color": "#082a5a",
    "title": "синий",
    "widths": [
      {
        "price": 500,
        "width": 48
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/siniy.jpg"
    ]
  },
  {
    "name": "dark-blue",
    "fc": 1,
    "color": "#000040",
    "title": "темно-синий",
    "widths": [
      {
        "price": 500,
        "width": 48
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Temno-siniy.jpg"
    ]
  },
  {
    "name": "sky-blue",
    "color": "#aedcdc",
    "title": "небесный",
    "thick": 0,
    "widths": [
      {
        "price": 500,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Nebesniy.jpg"
    ]
  },
  {
    "name": "chocolate",
    "color": "#b94f15",
    "title": "терракот",
    "widths": [
      {
        "price": 500,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/terrakot.jpg"
    ]
  },
  /*{
    "name": "cornflower-blue",
    "color": "#7989bd",
    "title": "васильковый",
    "widths": [
      {
        "price": 500,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Vasilkoviy.jpg"
    ]
  },*/
  {
    "name": "black",
    "fc": 1,
    "color": "#050505",
    "title": "черный",
    "widths": [
      {
        "price": 500,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/cherniy.jpg"
    ]
  },
   {
    "name": "white",
    "color": "#ffffff",
    "title": "белый",
    "widths": [
      {
        "price": 500,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/beliy.jpg"
    ]
  }, 
   {
    "name": "beige",
    "color": "#e6d387",
    "title": "бежевый",
    "thick": 0,
    "widths": [
      {
        "price": 500,
        "width": 44
      }
    ]
 }, 
  /*{
    "name": "olive",
    "color": "#aa8d08",
    "title": "оливковый",
    "thick":0,
    "widths": [
      {
        "price": 500,
        "width": 48
      }
    ],
    "images": [
      "img/11-olive.jpg"
    ]
  }*/
 {
    "name": "red",
    "color": "#d82028",
    "title": "красный",
    "thick": 0,
    "realthick":2,
    "widths": [
      {
        "price": 500,
        "width": 48
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Krasniy.jpg"
    ]
  },  
  {
    "name": "dark-brown",
    "fc": 1,
    "color": "#30130d",
    "title": "темно-коричневый",
    "widths": [
      {
        "price": 500,
        "width": 47
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/temno-korichneviy.jpg"
    ]
  },
   /*{
    "name": "green",
    "fc": 1,
    "color": "#1f4925",
    "title": "темно-зеленый",
    "widths": [
      {
        "price": 500,
        "width": 48
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Temno-zel.jpg"
    ]
  }, */
  {
    "name": "peach",
    "color": "#ffca86",
    "title": "персиковый",
    "widths": [
      {
        "price": 500,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Persikoviy.jpg"
    ]
  },
  {
    "name": "light-yellow",
    "color": "#fff886",
    "title": "светло-желтый",
    "widths": [
      {
        "price": 500,
        "width": 45
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/svetlo-geltiy.jpg"
    ]
  },
 {
    "name": "baklagan",
    "color": "#bf2f75",
    "title": "баклажановый",
 "realthick":3,
    "thick":0,
    "widths": [
      {
        "price": 500,
        "width": 49
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/BAklagan.jpg"
    ]
  },
/*{
    "name": "baklagan",
    "color": "#bf2f75",
    "title": "баклажанный",
    "thick":2,
    "widths": [
      {
        "price": 600,
        "width": 65
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/BAklagan.jpg"
    ]
  },*/
  /*{
    "name": "bardo",
    "color": "#a01a29",
    "title": "бардовый",
    "thick":2,
    "widths": [
      {
        "price": 600,
        "width": 65
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/BARDO.jpg"
    ]
  },*/
  /*{
    "name": "fiolet",
    "color": "#894c85",
    "title": "фиолетовый",
    "thick":2,
    "widths": [
      {
        "price": 600,
        "width": 65
      }
    ],
    "images": [
      "img/3-fiolet.jpg"
    ]
  },*/
  {
    "name": "orange-yellow",
    "color": "#f3a22c",
    "title": "оранжево-желтый",
    "thick":2,
    "widths": [
      {
        "price": 600,
        "width": 65
      }
    ],
    "images": [
      "img/4-orange-yellow.jpg"
    ]
  },
  {
    "name": "malina",
    "color": "#ee3579",
    "title": "малиновый",
    "thick":2,
    "widths": [
      {
        "price": 600,
        "width": 65
      }
    ],
    "images": [
      "img/5-malina.jpg"
    ]
  },
  {
    "name": "negno",
    "color": "#ffd048",
    "title": "нежно-желтый",
    "thick":2,
    "widths": [
      {
        "price": 600,
        "width": 65
      }
    ],
    "images": [
      "img/6-negno-yellow.jpg"
    ]
  },
   {
    "name": "orange",
    "color": "#fa9129",
    "title": "оранжевый",
    "thick":2,
    "widths": [
      {
        "price": 600,
        "width": 65
      }
    ],
    "images": [
      "img/8-orange.jpg"
    ]
  }, 
  /*{
    "name": "belly",
    "color": "#ececec",
    "title": "белый",
    "thick":2,
    "widths": [
      {
        "price": 600,
        "width": 65
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/beliy.jpg"
    ]
  },*/
  /*{
    "name": "black",
    "color": "#121214",
    "title": "черный",
    fc:1,
    "thick":2,
    "widths": [
      {
        "price": 600,
        "width": 65
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/cherniy.jpg"
    ]
  },*/
 {
    "name": "sea",
    "color": "#22a19a",
    "title": "морской",
 "realthick":2,
    "thick": 0,
    "widths": [
      {
        "price": 500,
        "width": 47
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Morskoy-1.jpg"
    ]
  },  
  /*{
    "name": "olive",
    "color": "#aa8d08",
    "title": "оливковый",
    "thick":2,
    "widths": [
      {
        "price": 600,
        "width": 65
      }
    ],
    "images": [
      "img/11-olive.jpg"
    ]
  }*/


];

var configUA_thick=[
  {
    "name": "olive",
    "color": "#aa8d08",
    "title": "оливковый",
    "thick":2,
    "widths": [
      {
        "price": 600,
        "width": 65
      }
    ],
    "images": [
      "img/11-olive.jpg"
    ]
  },
  {
    "name": "sea",
    "color": "#22a19a",
    "title": "морской",
    "realthick":2,
    "thick": 0,
    "widths": [
      {
        "price": 500,
        "width": 47
      }
    ],
    "images": [
      "/wp-content/uploads/2016/09/Morskoy-1.jpg"
    ]
  }
];

var configRU = configCRIMEA;