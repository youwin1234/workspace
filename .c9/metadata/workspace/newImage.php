{"changed":true,"filter":false,"title":"newImage.php","tooltip":"/newImage.php","value":"<?php\n\nrequire 'functions.php';\n\n?>\n<!DOCTYPE html>\n<html>\n    <head>\n<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"imagetagging.ico/apple-icon-57x57.png\">\n<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"imagetagging.ico/apple-icon-60x60.png\">\n<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"imagetagging.ico/apple-icon-72x72.png\">\n<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"imagetagging.ico/apple-icon-76x76.png\">\n<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"imagetagging.ico/apple-icon-114x114.png\">\n<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"imagetagging.ico/apple-icon-120x120.png\">\n<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"imagetagging.ico/apple-icon-144x144.png\">\n<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"imagetagging.ico/apple-icon-152x152.png\">\n<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"imagetagging.ico/apple-icon-180x180.png\">\n<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"imagetagging.ico/android-icon-192x192.png\">\n<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"imagetagging.ico/favicon-32x32.png\">\n<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"imagetagging.ico/favicon-96x96.png\">\n<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"imagetagging.ico/favicon-16x16.png\">\n<link rel=\"manifest\" href=\"imagetagging.ico/manifest.json\">\n<meta name=\"msapplication-TileColor\" content=\"#ffffff\">\n<meta name=\"msapplication-TileImage\" content=\"imagetagging.ico/ms-icon-144x144.png\">\n<meta name=\"theme-color\" content=\"#ffffff\"> \n<link rel=\"stylesheet\" type=\"text/css\" href=\"960-Grid-System-master/code/css/min/960_12_col.css\"/>\n<link rel=\"stylesheet\" type=\"text/css\" href=\"Submit.css\"/>\n<link href='https://fonts.googleapis.com/css?family=Lobster|Noto+Serif' rel='stylesheet' type='text/css'>\n         \n         \n        <title>Submit An Image</title>\n        <style type=\"text/css\">\n            #contextmenu{\n    background-color:#DDD;\n    border-style:solid;\n    border-width:1px;\n    width:100px;\n    display:none;\n    position: absolute;\n    z-index:1;\n}\n#imgPlace {\n      position: relative;\n  display: table;\n  height: 100%;\n  vertical-align: middle !important;\n  margin-left: auto;\n  margin-right: auto;\n}\n#photo {\n    height: 100%;\n  position: float;\n  position: relative;\n  display: block;\n  vertical-align: middle !important;\n  margin-left: auto;\n  margin-right: auto;\n  \n}\n#tag{\n  position:absolute;\n  top:137px;\n  left:264px;\n  background-color: #aaaaaa;\n  text-shadow:-1px -2px #666666;\n  border-width: 2px;\n  border-color: #0088dd;\n}\n\n\n        </style>\n          <link rel=\"stylesheet\" type=\"text/css\" href=\"jquery.imgareaselect-0.9.10/css/imgareaselect-default.css\" />\n        <!--  <link rel=\"stylesheet\" type=\"text/css\" href=\"images.css\" />-->\n          <script type=\"text/javascript\" src=\"jquery.imgareaselect-0.9.10/scripts/jquery.min.js\"></script>\n          <script type=\"text/javascript\" src=\"jquery.imgareaselect-0.9.10/scripts/jquery.imgareaselect.pack.js\"></script>\n    <!--Right Click Menu-->\n             <div id=\"contextmenu\">\n            <table>\n                <tr>\n                    <td id=\"TagImage\">Tag Image</td>\n                </tr>\n            </table>\n        </div>\n         \n    </head>\n    \n    \n    \n    <body>\n            <header>\n                   <div class= \"container\">\n                    <div class=\"header\">          \n                        <img src=\"WebsiteImg/LOGO1.png\" height=\"200px\"></img>\n                        <h1> Image Tagging</h1>\n        <a class=\"click\" href=\"newImage.php\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Get Started</a>\n                    </div>\n                   </div>\n            </header>\n            <div class= \"container\">\n                                 <nav class=\"box\">\n                                                <a href=\"index.php\" class=\"click2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>\n                                             <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n                                                <a href= \"dbimages.php\" class=\"click2\">&nbsp;&nbsp;&nbsp;&nbsp;View docuemts&nbsp;&nbsp;&nbsp;&nbsp;</a>\n                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n                                               <a href= \"newImage.php\" class=\"click2\">Submit a document</a>    \n                                     </nav>\n                                     \n   \n   \n   \n<div class=\"main\">\n <!-------------content here!!!--------------->\n\n<form id=\"form\" action=\"newFile.php\" method=\"POST\"  enctype=\"multipart/form-data\">\n    <input type=\"file\" name=\"myimage\" id=\"myimage\" /> <br><br>\n    <input type=\"submit\" value=\"Upload Image\" name=\"Upload_Image\"/>\n</form>\n   \n\n<!--------------------until here------------------->               \n\n<footer>\n              <div class=\"footer1 \">\n                     <p id=\"foot\">Last Motified:08/08/2016 &copy;LakeView Students</p>\n                     </div>\n               \n        </footer>\n    </body>\n</html>\n<!--\"images/\" . $imageFileName-->\n","undoManager":{"mark":93,"position":100,"stack":[[{"start":{"row":31,"column":10},"end":{"row":31,"column":11},"action":"insert","lines":["b"],"id":63}],[{"start":{"row":31,"column":11},"end":{"row":31,"column":12},"action":"insert","lines":["m"],"id":64}],[{"start":{"row":31,"column":12},"end":{"row":31,"column":13},"action":"insert","lines":["i"],"id":65}],[{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"insert","lines":["t"],"id":66}],[{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"insert","lines":[" "],"id":67}],[{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"insert","lines":["N"],"id":68}],[{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"insert","lines":["e"],"id":69}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"insert","lines":["w"],"id":70}],[{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"insert","lines":[" "],"id":71}],[{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"insert","lines":["I"],"id":72}],[{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"insert","lines":["m"],"id":73}],[{"start":{"row":31,"column":21},"end":{"row":31,"column":22},"action":"insert","lines":["a"],"id":74}],[{"start":{"row":31,"column":22},"end":{"row":31,"column":23},"action":"insert","lines":["g"],"id":75}],[{"start":{"row":31,"column":23},"end":{"row":31,"column":24},"action":"insert","lines":["e"],"id":76}],[{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"remove","lines":[" "],"id":77}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["w"],"id":78}],[{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"remove","lines":["e"],"id":79}],[{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"remove","lines":["N"],"id":80}],[{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"insert","lines":["A"],"id":81}],[{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"insert","lines":[" "],"id":82}],[{"start":{"row":31,"column":21},"end":{"row":31,"column":22},"action":"remove","lines":["e"],"id":83}],[{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"remove","lines":["g"],"id":84}],[{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"remove","lines":["a"],"id":85}],[{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"remove","lines":["m"],"id":86}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"remove","lines":["I"],"id":87}],[{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"insert","lines":["I"],"id":88}],[{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"insert","lines":["m"],"id":89}],[{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"insert","lines":["a"],"id":90}],[{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"insert","lines":["g"],"id":91}],[{"start":{"row":31,"column":21},"end":{"row":31,"column":22},"action":"insert","lines":["e"],"id":92}],[{"start":{"row":121,"column":34},"end":{"row":121,"column":40},"action":"remove","lines":["last m"],"id":93},{"start":{"row":121,"column":34},"end":{"row":121,"column":35},"action":"insert","lines":["L"]}],[{"start":{"row":121,"column":35},"end":{"row":121,"column":36},"action":"insert","lines":["a"],"id":94}],[{"start":{"row":121,"column":36},"end":{"row":121,"column":37},"action":"insert","lines":["s"],"id":95}],[{"start":{"row":121,"column":37},"end":{"row":121,"column":38},"action":"insert","lines":["t"],"id":96}],[{"start":{"row":121,"column":38},"end":{"row":121,"column":39},"action":"insert","lines":[" "],"id":97}],[{"start":{"row":121,"column":39},"end":{"row":121,"column":40},"action":"insert","lines":["m"],"id":98}],[{"start":{"row":121,"column":39},"end":{"row":121,"column":40},"action":"remove","lines":["m"],"id":99}],[{"start":{"row":121,"column":39},"end":{"row":121,"column":40},"action":"insert","lines":["M"],"id":100}],[{"start":{"row":92,"column":19},"end":{"row":94,"column":25},"action":"remove","lines":["<div class= \"container\">","                         ","                   </div>"],"id":101},{"start":{"row":92,"column":19},"end":{"row":98,"column":25},"action":"insert","lines":["  <div class= \"container\">","                         <div class=\"header\">          ","                        <img src=\"WebsiteImg/LOGO1.png\" height=\"200px\"></img>","                        <h1> Image Tagging</h1>","        <a class=\"click\" href=\"newImage.php\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Get started</a>  ","                         </div>","                   </div>"]}],[{"start":{"row":92,"column":20},"end":{"row":92,"column":21},"action":"remove","lines":[" "],"id":102}],[{"start":{"row":93,"column":24},"end":{"row":93,"column":25},"action":"remove","lines":[" "],"id":103}],[{"start":{"row":97,"column":24},"end":{"row":97,"column":25},"action":"remove","lines":[" "],"id":104}],[{"start":{"row":97,"column":20},"end":{"row":97,"column":24},"action":"remove","lines":["    "],"id":105}],[{"start":{"row":92,"column":16},"end":{"row":92,"column":20},"action":"remove","lines":["    "],"id":106}],[{"start":{"row":92,"column":16},"end":{"row":92,"column":17},"action":"insert","lines":[" "],"id":107}],[{"start":{"row":92,"column":17},"end":{"row":92,"column":18},"action":"insert","lines":[" "],"id":108}],[{"start":{"row":92,"column":18},"end":{"row":92,"column":19},"action":"insert","lines":[" "],"id":109}],[{"start":{"row":93,"column":16},"end":{"row":93,"column":20},"action":"remove","lines":["    "],"id":110}],[{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"insert","lines":["n"],"id":111}],[{"start":{"row":96,"column":8},"end":{"row":96,"column":9},"action":"insert","lines":[","],"id":114}],[{"start":{"row":96,"column":8},"end":{"row":96,"column":9},"action":"remove","lines":[","],"id":115}],[{"start":{"row":96,"column":8},"end":{"row":96,"column":9},"action":"insert","lines":["<"],"id":116}],[{"start":{"row":96,"column":9},"end":{"row":96,"column":10},"action":"insert","lines":["="],"id":117}],[{"start":{"row":96,"column":10},"end":{"row":96,"column":11},"action":"insert","lines":["="],"id":118}],[{"start":{"row":96,"column":11},"end":{"row":96,"column":12},"action":"insert","lines":["="],"id":119}],[{"start":{"row":96,"column":11},"end":{"row":96,"column":12},"action":"remove","lines":["="],"id":120}],[{"start":{"row":96,"column":10},"end":{"row":96,"column":11},"action":"remove","lines":["="],"id":121}],[{"start":{"row":96,"column":9},"end":{"row":96,"column":10},"action":"remove","lines":["="],"id":122}],[{"start":{"row":96,"column":8},"end":{"row":96,"column":9},"action":"remove","lines":["<"],"id":132}],[{"start":{"row":96,"column":9},"end":{"row":96,"column":13},"action":"insert","lines":["!--<"],"id":133},{"start":{"row":96,"column":161},"end":{"row":96,"column":162},"action":"remove","lines":[" "]},{"start":{"row":96,"column":161},"end":{"row":96,"column":164},"action":"insert","lines":["-->"]}],[{"start":{"row":96,"column":163},"end":{"row":96,"column":164},"action":"remove","lines":[">"],"id":139}],[{"start":{"row":96,"column":162},"end":{"row":96,"column":163},"action":"remove","lines":["-"],"id":140}],[{"start":{"row":96,"column":161},"end":{"row":96,"column":162},"action":"remove","lines":["-"],"id":141}],[{"start":{"row":96,"column":160},"end":{"row":96,"column":161},"action":"remove","lines":[" "],"id":142}],[{"start":{"row":96,"column":11},"end":{"row":96,"column":12},"action":"remove","lines":["-"],"id":143}],[{"start":{"row":96,"column":10},"end":{"row":96,"column":11},"action":"remove","lines":["-"],"id":144}],[{"start":{"row":96,"column":9},"end":{"row":96,"column":10},"action":"remove","lines":["!"],"id":145}],[{"start":{"row":96,"column":8},"end":{"row":96,"column":9},"action":"remove","lines":["<"],"id":146}],[{"start":{"row":96,"column":152},"end":{"row":96,"column":153},"action":"insert","lines":[" "],"id":147}],[{"start":{"row":96,"column":153},"end":{"row":96,"column":154},"action":"insert","lines":["H"],"id":148}],[{"start":{"row":96,"column":153},"end":{"row":96,"column":154},"action":"remove","lines":["H"],"id":149}],[{"start":{"row":96,"column":152},"end":{"row":96,"column":153},"action":"remove","lines":[" "],"id":150}],[{"start":{"row":96,"column":151},"end":{"row":96,"column":152},"action":"remove","lines":["d"],"id":151}],[{"start":{"row":96,"column":150},"end":{"row":96,"column":151},"action":"remove","lines":["e"],"id":152}],[{"start":{"row":96,"column":149},"end":{"row":96,"column":150},"action":"remove","lines":["t"],"id":153}],[{"start":{"row":96,"column":149},"end":{"row":96,"column":150},"action":"insert","lines":["t"],"id":154}],[{"start":{"row":96,"column":150},"end":{"row":96,"column":151},"action":"insert","lines":["e"],"id":155}],[{"start":{"row":96,"column":151},"end":{"row":96,"column":152},"action":"insert","lines":["e"],"id":156}],[{"start":{"row":96,"column":152},"end":{"row":96,"column":153},"action":"insert","lines":["d"],"id":157}],[{"start":{"row":96,"column":152},"end":{"row":96,"column":153},"action":"remove","lines":["d"],"id":158}],[{"start":{"row":96,"column":151},"end":{"row":96,"column":152},"action":"remove","lines":["e"],"id":159}],[{"start":{"row":96,"column":151},"end":{"row":96,"column":152},"action":"insert","lines":["d"],"id":160}],[{"start":{"row":96,"column":152},"end":{"row":96,"column":153},"action":"insert","lines":[" "],"id":161}],[{"start":{"row":96,"column":153},"end":{"row":96,"column":154},"action":"insert","lines":["h"],"id":162}],[{"start":{"row":96,"column":154},"end":{"row":96,"column":155},"action":"insert","lines":["e"],"id":163}],[{"start":{"row":96,"column":155},"end":{"row":96,"column":156},"action":"insert","lines":["r"],"id":164}],[{"start":{"row":96,"column":155},"end":{"row":96,"column":156},"action":"remove","lines":["r"],"id":252}],[{"start":{"row":96,"column":154},"end":{"row":96,"column":155},"action":"remove","lines":["e"],"id":253}],[{"start":{"row":96,"column":153},"end":{"row":96,"column":154},"action":"remove","lines":["h"],"id":254}],[{"start":{"row":96,"column":152},"end":{"row":96,"column":153},"action":"remove","lines":[" "],"id":255}],[{"start":{"row":96,"column":151},"end":{"row":96,"column":152},"action":"remove","lines":["d"],"id":256}],[{"start":{"row":96,"column":151},"end":{"row":96,"column":152},"action":"insert","lines":["d"],"id":257}],[{"start":{"row":96,"column":145},"end":{"row":96,"column":146},"action":"remove","lines":["s"],"id":258}],[{"start":{"row":96,"column":145},"end":{"row":96,"column":146},"action":"insert","lines":["S"],"id":259}],[{"start":{"row":32,"column":4},"end":{"row":32,"column":8},"action":"remove","lines":["    "],"id":260}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"remove","lines":["    "],"id":261}],[{"start":{"row":31,"column":23},"end":{"row":32,"column":0},"action":"remove","lines":["",""],"id":262}],[{"start":{"row":31,"column":4},"end":{"row":31,"column":8},"action":"remove","lines":["    "],"id":263}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"remove","lines":["    "],"id":264}],[{"start":{"row":30,"column":16},"end":{"row":31,"column":0},"action":"remove","lines":["",""],"id":265}],[{"start":{"row":30,"column":15},"end":{"row":30,"column":16},"action":"remove","lines":[" "],"id":266}]]},"ace":{"folds":[],"scrolltop":190.5,"scrollleft":0,"selection":{"start":{"row":30,"column":15},"end":{"row":30,"column":15},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":91,"state":"start","mode":"ace/mode/php"}},"timestamp":1470769538744}