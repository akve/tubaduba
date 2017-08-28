<script>

//var oldImages = [{"id":"9","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/ifrnb.jpg"},{"id":"69","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/cropped-300х60.png"},{"id":"82","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/vk_logo.png"},{"id":"85","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/fbicon.gif"},{"id":"86","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/mailurl.png"},{"id":"87","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/Cell_phone.png"},{"id":"90","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/tuba1.jpg"},{"id":"91","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/tuba2.jpg"},{"id":"92","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/12919126_1002240559868184_1159654242_n.jpg"},{"id":"99","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/1.jpg"},{"id":"100","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/1b.jpg"},{"id":"101","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2.jpg"},{"id":"102","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2d.jpg"},{"id":"103","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/3.jpg"},{"id":"104","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/3a.jpg"},{"id":"105","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/4.jpg"},{"id":"106","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/4a.jpg"},{"id":"107","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/5.jpg"},{"id":"108","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/5a.jpg"},{"id":"109","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6.jpg"},{"id":"110","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6a.jpg"},{"id":"111","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7.jpg"},{"id":"112","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7a.jpg"},{"id":"113","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7H.jpg"},{"id":"114","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8a.jpg"},{"id":"115","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8e.jpg"},{"id":"116","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9a.jpg"},{"id":"117","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9b.jpg"},{"id":"118","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9c.jpg"},{"id":"119","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/10.jpg"},{"id":"120","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/11.jpg"},{"id":"121","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/11b.jpg"},{"id":"122","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/12.jpg"},{"id":"123","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/12c.jpg"},{"id":"124","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13.jpg"},{"id":"125","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13b.jpg"},{"id":"126","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13C.jpg"},{"id":"128","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/1-1.jpg"},{"id":"129","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/1b-1.jpg"},{"id":"130","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2a.jpg"},{"id":"131","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2b.jpg"},{"id":"132","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/3-1.jpg"},{"id":"133","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/3a-1.jpg"},{"id":"134","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/4-1.jpg"},{"id":"135","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/4a-1.jpg"},{"id":"136","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/5-1.jpg"},{"id":"137","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/5a-1.jpg"},{"id":"138","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6a-1.jpg"},{"id":"139","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6b.jpg"},{"id":"140","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7-1.jpg"},{"id":"141","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7a-1.jpg"},{"id":"142","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8a-1.jpg"},{"id":"143","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8e-1.jpg"},{"id":"144","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9b-1.jpg"},{"id":"145","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9c-1.jpg"},{"id":"146","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/10-1.jpg"},{"id":"147","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/10a.jpg"},{"id":"148","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/11-1.jpg"},{"id":"149","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/11b-1.jpg"},{"id":"150","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/12-1.jpg"},{"id":"151","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/12c-1.jpg"},{"id":"152","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13-1.jpg"},{"id":"153","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13C-1.jpg"},{"id":"156","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/I-am.jpg"},{"id":"162","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/Instagram-Logo-QualiT-Reviews.png"},{"id":"163","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/instagram-logo.jpg"},{"id":"195","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2M.jpg"},{"id":"197","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/main_1.jpg"},{"id":"198","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/main_2.jpg"},{"id":"199","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/main_3.jpg"},{"id":"207","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7-2.jpg"},{"id":"208","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7a-2.jpg"},{"id":"209","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8.jpg"},{"id":"210","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8a-2.jpg"},{"id":"211","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13b-1.jpg"},{"id":"212","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13C-2.jpg"},{"id":"217","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2-1.jpg"},{"id":"218","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2a-1.jpg"},{"id":"219","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2c.jpg"},{"id":"220","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6a-2.jpg"},{"id":"221","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6b-1.jpg"},{"id":"222","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/10-2.jpg"},{"id":"223","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/10a-1.jpg"},{"id":"224","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7a-3.jpg"},{"id":"229","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/1-5-m.jpg"},{"id":"237","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/instagram-icon.png"},{"id":"245","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/300x60.png"},{"id":"256","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/3.png"},{"id":"258","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/3-2.jpg"},{"id":"259","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/512x512.png"},{"id":"260","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/cropped-512x512.png"},{"id":"261","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/512x512-1.png"},{"id":"264","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/шапка-на-сайт-.jpg"},{"id":"265","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/jpg"},{"id":"266","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/jpg-1"},{"id":"267","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/jpg-2"},{"id":"268","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/jpg-3"},{"id":"269","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/zf2kMqs8jaY.jpg"},{"id":"270","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/cropped-zf2kMqs8jaY.jpg"},{"id":"288","guid":"http://tuba-duba.com/wp-content/uploads/2016/05/13278020_1035718899853683_861600388_n.jpg"},{"id":"303","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6-1.jpg"},{"id":"304","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9.jpg"},{"id":"307","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13063447_1731036293779021_4895375757925909294_o.jpg"},{"id":"309","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8-1.jpg"},{"id":"346","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/1.jpg"},{"id":"351","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/3.jpg"},{"id":"372","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/1-1.jpg"},{"id":"374","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/1-2.jpg"},{"id":"378","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/2.jpg"},{"id":"379","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/2-1.jpg"},{"id":"380","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/3-1.jpg"},{"id":"382","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/3-2.jpg"},{"id":"387","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/3-3.jpg"},{"id":"393","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/4.jpg"},{"id":"395","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/5.jpg"},{"id":"396","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/5-1.jpg"},{"id":"406","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/footer_img_r.jpg"},{"id":"408","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/6.jpg"},{"id":"409","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/7.jpg"},{"id":"415","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/5-2.jpg"},{"id":"417","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/istoriya-5.jpg"},{"id":"442","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/5-2.jpg"},{"id":"443","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6-2.jpg"},{"id":"444","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7-3.jpg"},{"id":"452","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/15-copy.jpg"},{"id":"478","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/16.jpg"},{"id":"483","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/Tuba-Duba_instruction.jpg"},{"id":"487","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/29.jpg"},{"id":"490","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/Tuba-Duba_instruction-1.jpg"},{"id":"494","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/15m.jpg"},{"id":"499","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/0a.jpg"},{"id":"500","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/1.jpg"},{"id":"501","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/180х180_.jpg"},{"id":"502","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/dp.jpg"},{"id":"503","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplates-kapushonom.jpg"},{"id":"504","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplates-kapushonom1.jpg"},{"id":"505","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplate.jpg"},{"id":"506","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplate1.jpg"},{"id":"507","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplate2.jpg"},{"id":"508","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/shirokoedlinnoe-plate.jpg"},{"id":"509","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/shirokoedlinnoe-plate1.jpg"},{"id":"510","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK1.jpg"},{"id":"511","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK2.jpg"},{"id":"512","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK3.jpg"},{"id":"513","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK5.jpg"},{"id":"514","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK6.jpg"},{"id":"515","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK7.jpg"},{"id":"516","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK8.jpg"},{"id":"518","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK9.jpg"},{"id":"519","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK10.jpg"},{"id":"520","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK11.jpg"},{"id":"521","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK12.jpg"},{"id":"522","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK13.jpg"},{"id":"523","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK14.jpg"},{"id":"524","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK15.jpg"},{"id":"525","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK16.jpg"},{"id":"526","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK17.jpg"},{"id":"527","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP1.jpg"},{"id":"528","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP2.jpg"},{"id":"529","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP3.jpg"},{"id":"530","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP4.jpg"},{"id":"531","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP5.jpg"},{"id":"532","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP6.jpg"},{"id":"533","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP7.jpg"},{"id":"534","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP8.jpg"},{"id":"535","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP9.jpg"},{"id":"536","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP10.jpg"},{"id":"540","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK0.jpg"},{"id":"541","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK1-1.jpg"},{"id":"542","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK3-1.jpg"},{"id":"543","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK4.jpg"},{"id":"544","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK5-1.jpg"},{"id":"545","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK6-1.jpg"},{"id":"546","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK7-1.jpg"},{"id":"547","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK8-1.jpg"},{"id":"548","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK9-1.jpg"},{"id":"549","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK10-1.jpg"},{"id":"550","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK11-1.jpg"},{"id":"551","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK12-1.jpg"},{"id":"552","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK13-1.jpg"},{"id":"553","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK14-1.jpg"},{"id":"554","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK15-1.jpg"},{"id":"555","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK16-1.jpg"},{"id":"556","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK17-1.jpg"},{"id":"557","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK18.jpg"},{"id":"558","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK19.jpg"},{"id":"559","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK20.jpg"},{"id":"560","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK21.jpg"},{"id":"561","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK22.jpg"},{"id":"562","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"},{"id":"563","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"},{"id":"564","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"},{"id":"565","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"},{"id":"566","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"},{"id":"567","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"},{"id":"568","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"},{"id":"569","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"},{"id":"570","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"},{"id":"571","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"},{"id":"572","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"},{"id":"573","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-facryta.jpg"},{"id":"574","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"},{"id":"575","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"},{"id":"576","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura.jpg"},{"id":"577","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"},{"id":"578","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"},{"id":"579","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"},{"id":"580","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"},{"id":"581","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"},{"id":"582","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"},{"id":"583","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"},{"id":"584","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"},{"id":"585","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"},{"id":"586","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/13932973_1088930401199199_138885520_n.jpg"},{"id":"587","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"},{"id":"588","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"},{"id":"595","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP1SM.jpg"},{"id":"596","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP11SM.jpg"},{"id":"597","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP4-1.jpg"},{"id":"598","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK24.jpg"},{"id":"599","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK23.jpg"},{"id":"600","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD.jpg"},{"id":"601","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD2.jpg"},{"id":"602","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD3.jpg"},{"id":"603","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD4.jpg"},{"id":"604","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP12SM.jpg"},{"id":"605","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK25.jpg"},{"id":"606","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP13.jpg"},{"id":"613","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/TKAN.jpg"},{"id":"625","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/about-fabric.jpg"},{"id":"626","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/about-fabric.jpg"},{"id":"632","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP0.jpg"},{"id":"633","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP1-1.jpg"},{"id":"634","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP2-1.jpg"},{"id":"635","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP3-1.jpg"},{"id":"636","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP4-2.jpg"},{"id":"637","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP5-1.jpg"},{"id":"638","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP6-1.jpg"},{"id":"639","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg"},{"id":"640","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP8-1.jpg"},{"id":"641","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP9-1.jpg"},{"id":"642","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP10-1.jpg"},{"id":"643","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP11.jpg"},{"id":"644","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP12.jpg"},{"id":"645","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP13-1.jpg"},{"id":"646","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP14.jpg"},{"id":"647","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP15.jpg"},{"id":"648","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP16.jpg"},{"id":"649","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP17.jpg"},{"id":"650","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP18.jpg"},{"id":"658","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD1.jpg"},{"id":"659","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD2-1.jpg"},{"id":"660","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD3-1.jpg"},{"id":"661","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD4-1.jpg"},{"id":"662","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD5.jpg"},{"id":"663","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD6.jpg"},{"id":"665","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/geltiy-Factura.jpg"},{"id":"666","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/limonniy-factura.jpg"},{"id":"667","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/negno-geltiy-Factura.jpg"},{"id":"668","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Orangeviy-factura.jpg"},{"id":"669","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Orangevo-geltiy-factura.jpg"},{"id":"670","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura-1.jpg"},{"id":"671","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura-1.jpg"},{"id":"672","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura-2.jpg"},{"id":"690","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/5-3.jpg"},{"id":"691","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/9.jpg"},{"id":"692","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/14.jpg"},{"id":"693","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/15.jpg"},{"id":"696","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"},{"id":"714","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/15m-1.jpg"},{"id":"721","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/17.jpg"},{"id":"727","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD2-2.jpg"},{"id":"728","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD3-2.jpg"},{"id":"729","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD4-2.jpg"},{"id":"742","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait.jpg"},{"id":"745","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-2.jpg"},{"id":"747","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-3.jpg"},{"id":"748","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-3-1.jpg"},{"id":"749","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4.jpg"},{"id":"751","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-1.jpg"},{"id":"754","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-2.jpg"},{"id":"757","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-3.jpg"},{"id":"760","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-4.jpg"},{"id":"764","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-big.jpg"},{"id":"765","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-big-1.jpg"},{"id":"779","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/caps.jpg"},{"id":"792","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/18.jpg"},{"id":"801","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/DP2.jpg"},{"id":"821","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/сколько-ткани-нужно-на-платье-с-капюшоном.jpg"},{"id":"835","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/26-Morskoy-factura.jpg"},{"id":"840","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura.jpg"},{"id":"841","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/28.-violet-factura.jpg"},{"id":"842","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"},{"id":"843","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"},{"id":"858","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy.jpg"},{"id":"859","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1.jpg"},{"id":"860","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1-1.jpg"},{"id":"861","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/BAklagan.jpg"},{"id":"862","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/BARDO.jpg"},{"id":"863","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Begeviy.jpg"},{"id":"864","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/beliy.jpg"},{"id":"865","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/biruza.jpg"},{"id":"866","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/cherniy.jpg"},{"id":"867","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/geltiy.jpg"},{"id":"868","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/KARMIN.jpg"},{"id":"869","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Krasniy.jpg"},{"id":"870","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/kremoviy.jpg"},{"id":"871","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Malahit.jpg"},{"id":"872","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Morskoy.jpg"},{"id":"873","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Myatniy.jpg"},{"id":"874","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Nebesniy.jpg"},{"id":"875","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Oliva.jpg"},{"id":"876","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Orangeviy.jpg"},{"id":"877","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Persikoviy.jpg"},{"id":"878","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/siniy.jpg"},{"id":"879","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1-2.jpg"},{"id":"880","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/svetlo-geltiy.jpg"},{"id":"881","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Svetlo-seriy.jpg"},{"id":"882","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/temno-korichneviy.jpg"},{"id":"883","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Temno-seriy.jpg"},{"id":"884","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Temno-siniy.jpg"},{"id":"885","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Temno-zel.jpg"},{"id":"886","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/terrakot.jpg"},{"id":"887","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Vasilkoviy.jpg"},{"id":"907","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/kievstar.jpg"},{"id":"908","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/life.jpg"},{"id":"909","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/MTS.jpg"},{"id":"916","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Vibeer.jpg"},{"id":"927","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DPK1.jpg"},{"id":"928","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DPK6.jpg"},{"id":"929","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DPK3.jpg"},{"id":"930","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DPK8.jpg"},{"id":"931","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DP1.jpg"},{"id":"932","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DP6.jpg"},{"id":"933","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DP7.jpg"},{"id":"934","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DP11.jpg"},{"id":"936","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/27.-morskoy-factura.jpg"},{"id":"937","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Morskoy-1.jpg"},{"id":"938","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1-3.jpg"},{"id":"940","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/photo-1.jpg"},{"id":"941","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/photo-3.jpg"},{"id":"942","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-1.jpg"},{"id":"943","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-2.jpg"},{"id":"944","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-3.jpg"},{"id":"945","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-4.jpg"},{"id":"946","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-5.jpg"},{"id":"947","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-6.jpg"},{"id":"948","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-7.jpg"},{"id":"952","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"},{"id":"953","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"},{"id":"954","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/kirpichniy.jpg"},{"id":"955","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/salatoviy.jpg"},{"id":"961","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/str.jpg"},{"id":"965","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP1a.jpg"},{"id":"966","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP3a.jpg"},{"id":"967","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP4a.jpg"},{"id":"968","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP6a.jpg"},{"id":"969","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP7.jpg"},{"id":"970","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP8.jpg"},{"id":"971","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK1a.jpg"},{"id":"972","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK2a.jpg"},{"id":"973","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK3a.jpg"},{"id":"974","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK4a.jpg"},{"id":"975","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK5a.jpg"},{"id":"976","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK6a.jpg"},{"id":"977","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/SP1.jpg"},{"id":"978","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/SP2.jpg"},{"id":"979","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/KPK1.jpg"},{"id":"980","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/KPK2.jpg"},{"id":"981","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/KPK2-1.jpg"},{"id":"982","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/SP1-1.jpg"},{"id":"983","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/SP2-1.jpg"},{"id":"984","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-2.jpg"},{"id":"985","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R.jpg"},{"id":"986","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-2-1.jpg"},{"id":"987","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-1.jpg"},{"id":"988","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-2-2.jpg"},{"id":"989","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews1.jpg"},{"id":"990","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews2.jpg"},{"id":"991","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews3.jpg"},{"id":"992","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews4.jpg"},{"id":"993","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews5.jpg"},{"id":"994","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews6.jpg"},{"id":"995","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews7.jpg"},{"id":"996","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK1.jpg"},{"id":"997","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK2.jpg"},{"id":"998","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1.jpg"},{"id":"999","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2.jpg"},{"id":"1000","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3.jpg"},{"id":"1001","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood4.jpg"},{"id":"1002","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5.jpg"},{"id":"1003","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6.jpg"},{"id":"1004","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood7.jpg"},{"id":"1005","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK3.jpg"},{"id":"1006","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK4.jpg"},{"id":"1007","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood.jpg"},{"id":"1008","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5-1.jpg"},{"id":"1009","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6-1.jpg"},{"id":"1010","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood8.jpg"},{"id":"1011","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2-1.jpg"},{"id":"1012","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3-1.jpg"},{"id":"1013","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1-1.jpg"},{"id":"1014","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK5.jpg"},{"id":"1015","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK6.jpg"},{"id":"1016","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK7.jpg"},{"id":"1017","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK8.jpg"},{"id":"1018","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK9.jpg"},{"id":"1019","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood0.jpg"},{"id":"1020","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood1.jpg"},{"id":"1021","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood2.jpg"},{"id":"1022","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood3.jpg"},{"id":"1023","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood4.jpg"},{"id":"1024","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood5.jpg"},{"id":"1025","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood6.jpg"},{"id":"1026","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood7.jpg"},{"id":"1027","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood8.jpg"},{"id":"1028","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1-2.jpg"},{"id":"1029","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2-2.jpg"},{"id":"1030","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3-2.jpg"},{"id":"1031","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood4-1.jpg"},{"id":"1032","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5-2.jpg"},{"id":"1033","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6-2.jpg"},{"id":"1034","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood7-1.jpg"},{"id":"1035","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK10.jpg"},{"id":"1037","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK11.jpg"},{"id":"1038","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK12.jpg"},{"id":"1039","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves1.jpg"},{"id":"1040","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves2.jpg"},{"id":"1041","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves3.jpg"},{"id":"1042","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves4.jpg"},{"id":"1043","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves5.jpg"},{"id":"1050","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK13.jpg"},{"id":"1051","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK14.jpg"},{"id":"1052","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar1.jpg"},{"id":"1053","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar2.jpg"},{"id":"1054","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar3.jpg"},{"id":"1055","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar4.jpg"},{"id":"1056","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar5.jpg"},{"id":"1057","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar6.jpg"},{"id":"1058","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar7.jpg"},{"id":"1059","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves.jpg"},{"id":"1060","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves1.jpg"},{"id":"1061","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves2.jpg"},{"id":"1062","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves3.jpg"},{"id":"1063","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves5.jpg"},{"id":"1064","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves6.jpg"},{"id":"1065","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK15.jpg"},{"id":"1066","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK16.jpg"},{"id":"1068","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK17.jpg"},{"id":"1069","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK18.jpg"},{"id":"1070","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK19.jpg"},{"id":"1071","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar1.jpg"},{"id":"1072","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar2.jpg"},{"id":"1073","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar3.jpg"},{"id":"1074","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar4.jpg"},{"id":"1075","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar5.jpg"},{"id":"1076","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar6.jpg"},{"id":"1108","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"},{"id":"1117","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK3.jpg"},{"id":"1118","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK8.jpg"},{"id":"1132","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/grucheviy.jpg"},{"id":"1133","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/salatoviy.jpg"},{"id":"1141","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/1.jpg"},{"id":"1142","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/2.jpg"},{"id":"1143","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/3.jpg"},{"id":"1144","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4.jpg"},{"id":"1145","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5.jpg"},{"id":"1146","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/6.jpg"},{"id":"1147","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/7.jpg"},{"id":"1151","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/KPK1.jpg"},{"id":"1152","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/KPK2.jpg"},{"id":"1153","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/1-1.jpg"},{"id":"1154","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/2-1.jpg"},{"id":"1155","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/3-1.jpg"},{"id":"1156","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4-1.jpg"},{"id":"1157","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5-1.jpg"},{"id":"1158","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/6-1.jpg"},{"id":"1159","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/8.jpg"},{"id":"1160","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/9.jpg"},{"id":"1161","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/10.jpg"},{"id":"1162","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/11.jpg"},{"id":"1164","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5-2.jpg"},{"id":"1165","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4-2.jpg"},{"id":"1167","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/21.jpg"},{"id":"1168","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/20.jpg"},{"id":"1169","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/22.jpg"},{"id":"1170","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/40.jpg"},{"id":"1171","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/46.jpg"},{"id":"1172","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/55.jpg"},{"id":"1173","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/51.jpg"},{"id":"1174","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/isu3GclC56c.jpg"},{"id":"1175","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/9-1.jpg"},{"id":"1176","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/16.jpg"},{"id":"1177","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/81d5yRVpSQE.jpg"},{"id":"1178","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/25.jpg"},{"id":"1179","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/24.jpg"},{"id":"1180","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/PpCNilzF3LE.jpg"},{"id":"1181","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/Z8_nWWi2Wcs.jpg"},{"id":"1182","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/32.jpg"},{"id":"1192","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/1-2.jpg"},{"id":"1193","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/2-2.jpg"},{"id":"1194","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/3-2.jpg"},{"id":"1195","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4-3.jpg"},{"id":"1196","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5-3.jpg"},{"id":"1197","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/6-2.jpg"},{"id":"1198","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/7-1.jpg"},{"id":"1199","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/1-3.jpg"},{"id":"1200","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/2-3.jpg"},{"id":"1201","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/3-3.jpg"},{"id":"1202","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4-4.jpg"},{"id":"1203","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5-4.jpg"},{"id":"1204","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/6-3.jpg"},{"id":"1205","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/8-1.jpg"},{"id":"1206","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/9-1.jpg"},{"id":"1207","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/10-1.jpg"},{"id":"1208","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/11-1.jpg"},{"id":"1209","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/dresswithhood.jpg"},{"id":"1210","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/longangoradress.jpg"},{"id":"1211","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/longmiddle-dress.jpg"},{"id":"1212","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/Longskirt.jpg"},{"id":"1213","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/shortdress.jpg"},{"id":"1214","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/shortdresswithleaves.jpg"},{"id":"1215","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/warnundress.jpg"},{"id":"1216","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/1.Bardo_.jpg"},{"id":"1217","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/2.Grusha.jpg"},{"id":"1218","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/3.Zeleniy.jpg"},{"id":"1219","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4.Krasniy.jpg"},{"id":"1220","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5.Pepelniy.jpg"},{"id":"1221","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/6.-Svetlo-seriy.jpg"},{"id":"1222","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/7.Temno-zeleniy.jpg"},{"id":"1223","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/8.Temno-korichneviy.jpg"},{"id":"1224","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/9.Temno-siniy.jpg"},{"id":"1225","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/10.-Fioletoviy.jpg"},{"id":"1226","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/11.Cherniy.jpg"},{"id":"1227","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1.бардо.jpg"},{"id":"1228","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/2.груша.jpg"},{"id":"1229","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/3.зеленый.jpg"},{"id":"1230","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/4.красный.jpg"},{"id":"1231","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/5.гранит.jpg"},{"id":"1232","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/6.svetlo-seriy.jpg"},{"id":"1233","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/7.темно-серый.jpg"},{"id":"1234","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/олива.jpg"},{"id":"1235","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/темная-вишня.jpg"},{"id":"1236","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/темно-коричневый.jpg"},{"id":"1237","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/темно-синий.jpg"},{"id":"1238","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/фиолет.jpg"},{"id":"1239","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/черный.jpg"},{"id":"1240","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1.Bardo_.jpg"},{"id":"1241","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/2.Grusha.jpg"},{"id":"1242","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/3.Zeleniy.jpg"},{"id":"1243","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/4.Krasniy.jpg"},{"id":"1244","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/5.Granit.jpg"},{"id":"1245","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/6.-Svetlo-seriy.jpg"},{"id":"1246","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/7.seriy_.jpg"},{"id":"1247","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/8.Temno-korichneviy.jpg"},{"id":"1248","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/9.Temno-siniy.jpg"},{"id":"1249","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/10.-Fioletoviy.jpg"},{"id":"1250","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/11.Cherniy.jpg"},{"id":"1251","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/12.-temnaya-vishnya.jpg"},{"id":"1252","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/13.Oliva_.jpg"},{"id":"1253","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/DPAngora.jpg"},{"id":"1254","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/DPSK.jpg"},{"id":"1255","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum.jpg"},{"id":"1256","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/KP35.jpg"},{"id":"1257","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/KPsr.jpg"},{"id":"1258","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ubka.jpg"},{"id":"1259","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK.jpg"},{"id":"1263","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/shortdress.jpg"},{"id":"1264","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/14.jpg"},{"id":"1265","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/15.jpg"},{"id":"1266","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/16.jpg"},{"id":"1267","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/17.jpg"},{"id":"1268","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/бардо.jpg"},{"id":"1269","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/коричневый.jpg"},{"id":"1270","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/малиновый.jpg"},{"id":"1271","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/морской.jpg"},{"id":"1272","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/нежный.jpg"},{"id":"1273","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/персик.jpg"},{"id":"1274","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Синий.jpg"},{"id":"1275","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/bardo.jpg"},{"id":"1276","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Korichneviy.jpg"},{"id":"1277","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Malinoviy.jpg"},{"id":"1278","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Morskoy.jpg"},{"id":"1279","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Negniy.jpg"},{"id":"1280","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Persik.jpg"},{"id":"1281","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Siniy.jpg"},{"id":"1282","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/5.гранит-1.jpg"},{"id":"1283","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/14-1.jpg"},{"id":"1284","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/15-1.jpg"},{"id":"1285","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/16-1.jpg"},{"id":"1286","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/17-1.jpg"},{"id":"1287","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Bardo.jpg"},{"id":"1288","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Korichneviy-1.jpg"},{"id":"1289","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/malinoviy.jpg"},{"id":"1290","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Morskoy-1.jpg"},{"id":"1291","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Negniy-1.jpg"},{"id":"1292","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Persik-1.jpg"},{"id":"1293","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Siniy-1.jpg"},{"id":"1294","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt.jpg"},{"id":"1295","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/longmiddle-dress.jpg"},{"id":"1296","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/shortdresswithleaves.jpg"},{"id":"1297","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/longangoradress.jpg"},{"id":"1298","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/warnundress.jpg"},{"id":"1299","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/18.jpg"},{"id":"1300","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/19.jpg"},{"id":"1301","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/20.jpg"},{"id":"1302","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/21.jpg"},{"id":"1303","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/22.jpg"},{"id":"1304","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/23.jpg"},{"id":"1305","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/24.jpg"},{"id":"1306","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/25.jpg"},{"id":"1307","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/26.jpg"},{"id":"1308","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/dresswithhood1.jpg"},{"id":"1309","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/dresswithhoodwithoutleaves.jpg"},{"id":"1310","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt2.jpg"},{"id":"1311","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/shortdress-2.jpg"},{"id":"1312","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/dpskir-1.jpg"},{"id":"1313","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/dpskir.jpg"},{"id":"1314","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/dpskwl.jpg"},{"id":"1315","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum-2.jpg"},{"id":"1316","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/KPsr-2.jpg"},{"id":"1317","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ubka1.jpg"},{"id":"1318","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK1.jpg"},{"id":"1319","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/KP351.jpg"},{"id":"1320","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum-2-1.jpg"},{"id":"1321","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum-1.jpg"},{"id":"1322","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS.jpg"},{"id":"1323","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS1.jpg"},{"id":"1324","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS2.jpg"},{"id":"1325","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt2-1.jpg"},{"id":"1326","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/shortdress-2-1.jpg"},{"id":"1327","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/shortdresswithleaves-1.jpg"},{"id":"1328","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/warnundress1.jpg"},{"id":"1329","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1.-Temno-korichneviy.jpg"},{"id":"1330","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/2.Molochniy.jpg"},{"id":"1331","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/3.Pilno-goluboy.jpg"},{"id":"1332","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/4.Temno-siniy.jpg"},{"id":"1333","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/5.Cherniy.jpg"},{"id":"1334","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/6.Fioletoviy.jpg"},{"id":"1335","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/7.Gorchichniy.jpg"},{"id":"1336","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/8.Nemno-zeleniy.jpg"},{"id":"1337","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/9.Temno-terrakotoviy.jpg"},{"id":"1338","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/18-1.jpg"},{"id":"1339","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/19-1.jpg"},{"id":"1340","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/20-1.jpg"},{"id":"1341","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/21-1.jpg"},{"id":"1342","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/22-1.jpg"},{"id":"1343","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/23-1.jpg"},{"id":"1344","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/24-1.jpg"},{"id":"1345","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/25-1.jpg"},{"id":"1346","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/26-1.jpg"},{"id":"1347","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/longangoradress1.jpg"},{"id":"1348","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/longmiddle-dress-1.jpg"},{"id":"1349","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/DPAngora1.jpg"},{"id":"1350","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/DPSK1.jpg"},{"id":"1352","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK-1.jpg"},{"id":"1353","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK1-1.jpg"},{"id":"1354","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1111.jpg"},{"id":"1358","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1.jpg"},{"id":"1362","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/10.djins_.jpg"},{"id":"1363","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/11.temno-seriy.jpg"},{"id":"1364","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/12.Grusheviy.jpg"},{"id":"1365","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/13.Siren_.jpg"},{"id":"1366","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/14.Krasniy.jpg"},{"id":"1367","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/27.jpg"},{"id":"1368","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/28.jpg"},{"id":"1369","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/29.jpg"},{"id":"1370","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/30.jpg"},{"id":"1371","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/31.jpg"},{"id":"1372","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/7.Gorchichniy-1.jpg"},{"id":"1373","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/2.Molochniy-1.jpg"},{"id":"1374","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/32.jpg"},{"id":"1375","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/21-2.jpg"},{"id":"1376","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy.jpg"},{"id":"1377","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/geltiy.jpg"},{"id":"1378","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy.jpg"},{"id":"1379","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/rozoviy.jpg"},{"id":"1380","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/seriy.jpg"},{"id":"1381","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/sero-molochniy.jpg"},{"id":"1382","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/svSeriy.jpg"},{"id":"1383","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy.jpg"},{"id":"1384","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy-1.jpg"},{"id":"1385","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/geltiy-1.jpg"},{"id":"1386","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy-1.jpg"},{"id":"1387","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/rozoviy-1.jpg"},{"id":"1388","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/seriy-1.jpg"},{"id":"1389","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/sero-molochniy-1.jpg"},{"id":"1390","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/svSeriy-1.jpg"},{"id":"1391","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy-1.jpg"},{"id":"1392","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy-2.jpg"},{"id":"1393","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/geltiy-2.jpg"},{"id":"1394","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy-2.jpg"},{"id":"1395","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/rozoviy-2.jpg"},{"id":"1396","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/seriy-2.jpg"},{"id":"1397","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/sero-molochniy-2.jpg"},{"id":"1398","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/svSeriy-2.jpg"},{"id":"1399","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy-2.jpg"},{"id":"1400","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy-3.jpg"},{"id":"1401","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Geltiy.jpg"},{"id":"1402","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy-3.jpg"},{"id":"1403","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Rozoviy.jpg"},{"id":"1404","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Seriy.jpg"},{"id":"1405","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Sero-MOlochniy.jpg"},{"id":"1406","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/SvSeriy.jpg"},{"id":"1407","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy-3.jpg"},{"id":"1408","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt2-2.jpg"},{"id":"1409","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/SKARF.jpg"},{"id":"1410","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1-1.jpg"},{"id":"1411","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/skarf.jpg"},{"id":"1412","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/бежевый.jpg"},{"id":"1413","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/гранит.jpg"},{"id":"1414","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/коричневый-1.jpg"},{"id":"1415","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/ночной.jpg"},{"id":"1416","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/розовый.jpg"},{"id":"1417","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/светлый.jpg"},{"id":"1418","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/сирень.jpg"},{"id":"1419","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/бежевый-1.jpg"},{"id":"1420","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/гранит-1.jpg"},{"id":"1421","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/коричневый-2.jpg"},{"id":"1422","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/розовый-1.jpg"},{"id":"1423","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/светлый-1.jpg"},{"id":"1424","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/сирень-1.jpg"},{"id":"1425","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/ночной-1.jpg"},{"id":"1426","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/ночной-2.jpg"},{"id":"1427","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/розовый-2.jpg"},{"id":"1428","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/светлый-2.jpg"},{"id":"1429","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/сирень-2.jpg"},{"id":"1435","guid":"http://tuba-duba.com/wp-content/uploads/2017/01/8.jpg"},{"id":"1436","guid":"http://tuba-duba.com/wp-content/uploads/2017/01/9.jpg"},{"id":"1437","guid":"http://tuba-duba.com/wp-content/uploads/2017/01/14.rijiy_.jpg"},{"id":"1438","guid":"http://tuba-duba.com/wp-content/uploads/2017/01/15.djins_.jpg"},{"id":"1445","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/1.jpg"},{"id":"1449","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/Banner_spring_dreams_flower_3.jpg"},{"id":"1471","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/banner-3.jpg"},{"id":"1472","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/banner-1.jpg"},{"id":"1473","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/banner-2.jpg"},{"id":"1477","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/31.serebristiy.jpg"},{"id":"1478","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/32.malinoviy.jpg"},{"id":"1479","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/33.koraloviy.jpg"},{"id":"1480","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/34.izumrudniy.jpg"},{"id":"1481","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/35.насыщенный-желтый.jpg"},{"id":"1482","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/33.koraloviy-1.jpg"},{"id":"1483","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/19.temno-seriy.jpg"},{"id":"1484","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/colnechniy.jpg"},{"id":"1485","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/izumrudniy.jpg"},{"id":"1486","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/koraloviy.jpg"},{"id":"1487","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/malinoviy.jpg"},{"id":"1488","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/serebristiu.jpg"},{"id":"1489","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/Biruza.jpg"},{"id":"1490","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy.jpg"},{"id":"1491","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/36.lazurniy.jpg"},{"id":"1492","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/37.biruza.jpg"},{"id":"1493","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/37.biruza-1.jpg"},{"id":"1494","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/Malahit.jpg"},{"id":"1495","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/23.Malahitoviy.jpg"},{"id":"1496","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/23.Malahitoviy-1.jpg"},{"id":"1497","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/Biruza-1.jpg"},{"id":"1498","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy-1.jpg"},{"id":"1499","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy-2.jpg"},{"id":"1500","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/38.siren_.jpg"},{"id":"1501","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/siren.jpg"},{"id":"1502","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/temnoe-bardo.jpg"},{"id":"1503","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/39-temnoe-bardo.jpg"},{"id":"1504","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/32-malinoviy.jpg"},{"id":"1505","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/33koraloviy.jpg"},{"id":"1506","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/34-izumrudniy.jpg"},{"id":"1507","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/35-nasischenniya-geltiy.jpg"},{"id":"1508","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/colnechniy-1.jpg"},{"id":"1509","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/izumrudniy-1.jpg"},{"id":"1510","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/koraloviy-1.jpg"},{"id":"1511","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/malinoviy-1.jpg"},{"id":"1512","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/31.serebristiy-1.jpg"},{"id":"1513","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP1.jpg"},{"id":"1514","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP2.jpg"},{"id":"1515","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP3.jpg"},{"id":"1516","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP4.jpg"},{"id":"1517","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP5.jpg"},{"id":"1518","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP6.jpg"},{"id":"1519","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP8.jpg"},{"id":"1520","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP12.jpg"},{"id":"1521","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP17.jpg"},{"id":"1522","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP18.jpg"},{"id":"1523","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/KPK1.jpg"},{"id":"1524","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/KPK2.jpg"},{"id":"1525","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/41.jpg"},{"id":"1526","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/34-izumrudniy-1.jpg"},{"id":"1527","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/34-izumrudniy-2.jpg"},{"id":"1528","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/шягткгв.jpg"},{"id":"1530","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy-3.jpg"},{"id":"1531","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/26.-violet-factura.jpg"},{"id":"1532","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_01.jpg"},{"id":"1533","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_02.jpg"},{"id":"1534","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03.jpg"},{"id":"1535","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03-1.jpg"},{"id":"1536","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_04.jpg"},{"id":"1537","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_05.jpg"},{"id":"1538","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_06.jpg"},{"id":"1539","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_07.jpg"},{"id":"1540","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_08.jpg"},{"id":"1541","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_09.jpg"},{"id":"1542","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_10.jpg"},{"id":"1543","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_11.jpg"},{"id":"1544","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_12.jpg"},{"id":"1545","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_13.jpg"},{"id":"1546","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_14.jpg"},{"id":"1547","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_15.jpg"},{"id":"1548","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_16.jpg"},{"id":"1549","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_17.jpg"},{"id":"1550","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_18.jpg"},{"id":"1551","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_19.jpg"},{"id":"1552","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_20.jpg"},{"id":"1553","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_21.jpg"},{"id":"1554","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_22.jpg"},{"id":"1555","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_01-1.jpg"},{"id":"1556","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_02-1.jpg"},{"id":"1557","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_04-1.jpg"},{"id":"1558","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_05-1.jpg"},{"id":"1559","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_07-1.jpg"},{"id":"1560","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_08-1.jpg"},{"id":"1561","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_10-1.jpg"},{"id":"1562","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_11-1.jpg"},{"id":"1563","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_13-1.jpg"},{"id":"1564","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_14-1.jpg"},{"id":"1565","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_15-1.jpg"},{"id":"1566","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_16-1.jpg"},{"id":"1567","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_18-1.jpg"},{"id":"1568","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_19-1.jpg"},{"id":"1569","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_20-1.jpg"},{"id":"1570","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_21-1.jpg"},{"id":"1571","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_01-2.jpg"},{"id":"1572","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_02-2.jpg"},{"id":"1573","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03-2.jpg"},{"id":"1574","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03-3.jpg"},{"id":"1575","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_04-2.jpg"},{"id":"1576","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_05-2.jpg"},{"id":"1581","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/40rosovaya.jpg"},{"id":"1582","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/roza.jpg"},{"id":"1583","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/Malahit.jpg"},{"id":"1584","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/Biruza.jpg"},{"id":"1585","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/37.biruza.jpg"},{"id":"1587","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/IMG_9849.jpg"},{"id":"1590","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/12.jpg"},{"id":"1611","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/2.-Bardo-factura_sh.jpg"},{"id":"1612","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/3.-Baklagan-factura_sh.jpg"},{"id":"1613","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/4.-Krasniy-factura_sh.jpg"},{"id":"1614","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/5.Oliva-factura_sh.jpg"},{"id":"1615","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/9.temno-siniy_sh.jpg"},{"id":"1616","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/18.cherniy-factura_sh.jpg"},{"id":"1617","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/Baklagan_sh.jpg"},{"id":"1618","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/bardo_sh.jpg"},{"id":"1619","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/cherniy_sh.jpg"},{"id":"1620","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/Krasniy_sh.jpg"},{"id":"1621","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/oivkoviy_sh.jpg"},{"id":"1622","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/temno-siniy_sh.jpg"},{"id":"1629","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/6a.jpg"},{"id":"1630","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/7a.jpg"},{"id":"1631","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/8a.jpg"},{"id":"1632","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/14a.jpg"},{"id":"1633","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/40.jpg"},{"id":"1634","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/43.jpg"},{"id":"1635","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/48.jpg"},{"id":"1636","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/50.jpg"},{"id":"1637","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/53.jpg"},{"id":"1638","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/65.jpg"},{"id":"1639","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/21.jpg"},{"id":"1640","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/22.jpg"},{"id":"1641","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/23.jpg"},{"id":"1642","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/2a.jpg"},{"id":"1643","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/3.jpg"},{"id":"1644","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/4a.jpg"},{"id":"1645","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/5a.jpg"},{"id":"1646","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/9a.jpg"},{"id":"1647","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/10a.jpg"},{"id":"1648","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/12a.jpg"},{"id":"1649","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/33.jpg"},{"id":"1650","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/55.jpg"},{"id":"1651","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/57.jpg"},{"id":"1652","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/59.jpg"},{"id":"1653","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/16.jpg"},{"id":"1654","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/24.jpg"},{"id":"1655","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/25.jpg"},{"id":"1656","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/27.jpg"},{"id":"1657","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/29.jpg"},{"id":"1658","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/15.jpg"},{"id":"1659","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/37.jpg"},{"id":"1660","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/2¦-.jpg"},{"id":"1661","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/5¦-.jpg"},{"id":"1662","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/22-1.jpg"},{"id":"1663","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/25-1.jpg"},{"id":"1664","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/28.jpg"},{"id":"1665","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/33-1.jpg"},{"id":"1666","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/37-1.jpg"},{"id":"1667","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/57-1.jpg"},{"id":"1668","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/84.jpg"},{"id":"1669","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/131.jpg"},{"id":"1670","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/9275.jpg"},{"id":"1671","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/9315.jpg"},{"id":"1672","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/131-1.jpg"},{"id":"1673","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/бело-вишневая-полоска.jpg"},{"id":"1674","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/бело-красная-полоска.jpg"},{"id":"1675","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/голубой.jpg"},{"id":"1676","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/нежно-лиловый.jpg"},{"id":"1677","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/светло-коричневый.jpg"},{"id":"1678","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/сизый.jpg"},{"id":"1679","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/темно-лазурный.jpg"},{"id":"1680","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/темно-лазурный-small.jpg"},{"id":"1681","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/бело-вишневая-полоска-small.jpg"},{"id":"1682","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/бело-красная-полоска-small.jpg"},{"id":"1683","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/голубой-small.jpg"},{"id":"1684","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/нежно-лиловый-small.jpg"},{"id":"1685","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/светло-коричневый-small.jpg"},{"id":"1686","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/сизый-small.jpg"},{"id":"1688","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/красно-бордовая.jpg"},{"id":"1689","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/красно-сине-белая.jpg"},{"id":"1690","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/оранжево-желто-голубая.jpg"},{"id":"1691","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/серо-белая.jpg"},{"id":"1692","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/сине-белая.jpg"},{"id":"1693","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/сине-серая.jpg"},{"id":"1694","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/черно-белая.jpg"},{"id":"1695","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/красно-бордовая-1.jpg"},{"id":"1696","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/красно-сине-белая-1.jpg"},{"id":"1697","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/оранжево-желто-голубая-1.jpg"},{"id":"1698","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/серо-белая-1.jpg"},{"id":"1699","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/сине-белая-1.jpg"},{"id":"1700","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/сине-серая-1.jpg"},{"id":"1701","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/черно-белая-1.jpg"},{"id":"1702","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/баклажан.jpg"},{"id":"1703","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/бордо.jpg"},{"id":"1704","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/вишневый.jpg"},{"id":"1705","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/джинс.jpg"},{"id":"1706","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/морковный.jpg"},{"id":"1707","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/синий.jpg"},{"id":"1708","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-коричневый.jpg"},{"id":"1709","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-серый.jpg"},{"id":"1710","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-синий.jpg"},{"id":"1711","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/баклажан-1.jpg"},{"id":"1712","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/бордо-1.jpg"},{"id":"1713","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/вишневый-1.jpg"},{"id":"1714","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/джинс-1.jpg"},{"id":"1715","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/морковный-1.jpg"},{"id":"1716","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/синий-1.jpg"},{"id":"1717","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-коричневый-1.jpg"},{"id":"1718","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-серый-1.jpg"},{"id":"1719","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-синий-1.jpg"},{"id":"1720","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/67.jpg"},{"id":"1721","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/68.jpg"},{"id":"1722","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/70.jpg"},{"id":"1723","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/72.jpg"},{"id":"1724","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/73.jpg"},{"id":"1725","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/88.jpg"},{"id":"1726","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/92.jpg"},{"id":"1727","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/93.jpg"},{"id":"1728","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/94.jpg"},{"id":"1729","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/95.jpg"},{"id":"1730","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/98.jpg"},{"id":"1731","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/100.jpg"},{"id":"1732","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/104.jpg"},{"id":"1733","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/106.jpg"},{"id":"1734","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/1.jpg"},{"id":"1735","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/2.jpg"},{"id":"1747","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/1.jpg"},{"id":"1748","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/2.jpg"},{"id":"1749","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/3.jpg"},{"id":"1750","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/4.jpg"},{"id":"1751","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/5.jpg"},{"id":"1752","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/6.jpg"},{"id":"1753","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/7.jpg"},{"id":"1754","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/8.jpg"},{"id":"1755","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/9.jpg"},{"id":"1756","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/10.jpg"},{"id":"1757","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/11.jpg"},{"id":"1758","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/12.jpg"},{"id":"1759","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/13.jpg"},{"id":"1760","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/14.jpg"},{"id":"1761","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/15.jpg"},{"id":"1762","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/1-1.jpg"},{"id":"1763","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/2-1.jpg"},{"id":"1764","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/3-1.jpg"},{"id":"1765","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/4-1.jpg"},{"id":"1766","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/5-1.jpg"},{"id":"1767","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/6-1.jpg"},{"id":"1768","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/7-1.jpg"},{"id":"1769","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/белая-полоска-смал.jpg"},{"id":"1770","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/полоска-белая.jpg"},{"id":"1771","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/темно-синий.jpg"},{"id":"1772","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/полоска-белая-1.jpg"},{"id":"1773","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/темно-синий-смал.jpg"},{"id":"1774","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/IMG_3021.jpg"},{"id":"1775","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/океан-эльзы.jpg"},{"id":"1776","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/лазурный.jpg"},{"id":"1777","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/темно-синий-1.jpg"},{"id":"1779","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/cherniya.jpg"},{"id":"1780","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/geltiy.jpg"},{"id":"1781","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrud.jpg"},{"id":"1782","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/krasniy.jpg"},{"id":"1783","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/morkovniy.jpg"},{"id":"1784","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/nejniy-choko.jpg"},{"id":"1785","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/salatoviy.jpg"},{"id":"1786","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy.jpg"},{"id":"1787","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/ultramarin.jpg"},{"id":"1788","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/cherniy.jpg"},{"id":"1789","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/elektrik.jpg"},{"id":"1790","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrud-1.jpg"},{"id":"1791","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/jeltiy.jpg"},{"id":"1792","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/kofe.jpg"},{"id":"1793","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/krasniy-1.jpg"},{"id":"1794","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/salatoviy-1.jpg"},{"id":"1795","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy-1.jpg"},{"id":"1796","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/morkobvniy.jpg"},{"id":"1797","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/molochniya.jpg"},{"id":"1798","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/siniy.jpg"},{"id":"1799","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/molochniy.jpg"},{"id":"1800","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/siniy-1.jpg"},{"id":"1801","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/29.jpg"},{"id":"1802","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/31.jpg"},{"id":"1803","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/32.jpg"},{"id":"1804","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/33.jpg"},{"id":"1805","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/34.jpg"},{"id":"1806","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/35.jpg"},{"id":"1808","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/RAZMERY.jpg"},{"id":"1811","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/RAZMERY-1.jpg"},{"id":"1813","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/04.jpg"},{"id":"1814","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/05.jpg"},{"id":"1815","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1725ш.jpg"},{"id":"1816","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1729ш.jpg"},{"id":"1817","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1733ш.jpg"},{"id":"1818","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1736ш.jpg"},{"id":"1819","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_2045ш.jpg"},{"id":"1820","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_2046ш.jpg"},{"id":"1821","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/1-2.jpg"},{"id":"1822","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/2-2.jpg"},{"id":"1823","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/3-2.jpg"},{"id":"1824","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/4-2.jpg"},{"id":"1825","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/5-2.jpg"},{"id":"1826","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/6-2.jpg"},{"id":"1827","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/7-2.jpg"},{"id":"1828","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/8-1.jpg"},{"id":"1829","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/12-1.jpg"},{"id":"1830","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/13-1.jpg"},{"id":"1831","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1909ш.jpg"},{"id":"1832","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/9-1.jpg"},{"id":"1833","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/10-1.jpg"},{"id":"1834","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/11-1.jpg"},{"id":"1835","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/12-2.jpg"},{"id":"1836","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/50.jpg"},{"id":"1837","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/51.jpg"},{"id":"1838","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/52.jpg"},{"id":"1839","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/53.jpg"},{"id":"1840","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/54.jpg"},{"id":"1841","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/55.jpg"},{"id":"1842","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/12-3.jpg"},{"id":"1843","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/13-2.jpg"},{"id":"1844","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/15-1.jpg"},{"id":"1845","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/16.jpg"},{"id":"1846","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/17.jpg"},{"id":"1847","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/18.jpg"},{"id":"1848","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/70.jpg"},{"id":"1849","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/71.jpg"},{"id":"1850","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/geltiy-persikoviy.jpg"},{"id":"1851","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudniya-salat.jpg"},{"id":"1852","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/molochno-kofeiniy.jpg"},{"id":"1853","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudniy-salat.jpg"},{"id":"1854","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/jelto-oranjeviya.jpg"},{"id":"1855","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/kofe-s-molokom.jpg"},{"id":"1856","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudno-cherniy.jpg"},{"id":"1857","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy-krasniy.jpg"},{"id":"1858","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudno-cherniy-1.jpg"},{"id":"1859","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/sine-krasniy.jpg"},{"id":"1860","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/sine-temnosiniy.jpg"},{"id":"1861","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/sine-temnosiniy-1.jpg"},{"id":"1862","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/sine-temnosiniy-2.jpg"},{"id":"1863","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/18-1.jpg"},{"id":"1864","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/20.jpg"},{"id":"1865","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/21.jpg"},{"id":"1866","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/22.jpg"},{"id":"1867","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/24.jpg"},{"id":"1868","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/36.jpg"},{"id":"1869","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/37.jpg"},{"id":"1870","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/38.jpg"},{"id":"1871","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/39.jpg"},{"id":"1872","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/23.jpg"},{"id":"1873","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/24-1.jpg"},{"id":"1874","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/25.jpg"},{"id":"1875","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Ahimsa1.jpg"},{"id":"1876","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Ahimsa2.jpg"},{"id":"1877","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha1.jpg"},{"id":"1878","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha2.jpg"},{"id":"1879","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Ardjava1.jpg"},{"id":"1880","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Arjava2.jpg"},{"id":"1881","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha1-1.jpg"},{"id":"1882","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha2-1.jpg"},{"id":"1883","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Ardjava1-1.jpg"},{"id":"1884","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Arjava2-1.jpg"},{"id":"1885","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Asteya1.jpg"},{"id":"1886","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Asteya2.jpg"},{"id":"1887","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Brahmacharya.jpg"},{"id":"1888","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Brahmacharya1.jpg"},{"id":"1889","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/daya-1.jpg"},{"id":"1890","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/daya2.jpg"},{"id":"1891","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/dHRITI1.jpg"},{"id":"1892","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/dhriti2.jpg"},{"id":"1893","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Kshama1.jpg"},{"id":"1894","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Kshama2.jpg"},{"id":"1895","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/mitahara1.jpg"},{"id":"1896","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/mitahara2.jpg"},{"id":"1897","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/satya1.jpg"},{"id":"1898","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/satya2.jpg"},{"id":"1899","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/shaucha1.jpg"},{"id":"1900","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/shaucha2.jpg"},{"id":"1901","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Kshama2-1.jpg"},{"id":"1902","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/32-1.jpg"},{"id":"1903","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/33-1.jpg"},{"id":"1904","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/34-1.jpg"},{"id":"1905","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/36-1.jpg"},{"id":"1906","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/44.jpg"},{"id":"1907","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/46.jpg"},{"id":"1908","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/47.jpg"},{"id":"1909","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/chernj-beliy.jpg"},{"id":"1910","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/cherno-salat.jpg"},{"id":"1911","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/cherno-beliy.jpg"},{"id":"1912","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/cherno-salat-1.jpg"},{"id":"1913","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/41.jpg"},{"id":"1914","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/42.jpg"},{"id":"1915","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/43.jpg"},{"id":"1916","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/45.jpg"},{"id":"1917","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/60.jpg"},{"id":"1918","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/63.jpg"},{"id":"1919","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Ardjava1-2.jpg"},{"id":"1921","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Tuba_Duba_DHARMA_3а.jpg"},{"id":"1922","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Tuba_Duba_DHARMA.jpg"},{"id":"1924","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/1Tuba_Duba_DHARMA.jpg"},{"id":"1925","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/1Tuba_Duba_DHARMA_3а.jpg"}];
//var  oldImages2 = [{"id":"9","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/ifrnb.jpg"},{"id":"90","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/tuba1.jpg"},{"id":"91","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/tuba2.jpg"},{"id":"92","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/12919126_1002240559868184_1159654242_n.jpg"},{"id":"99","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/1.jpg"},{"id":"100","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/1b.jpg"},{"id":"101","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2.jpg"},{"id":"102","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2d.jpg"},{"id":"103","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/3.jpg"},{"id":"104","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/3a.jpg"},{"id":"105","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/4.jpg"},{"id":"106","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/4a.jpg"},{"id":"107","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/5.jpg"},{"id":"108","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/5a.jpg"},{"id":"109","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6.jpg"},{"id":"110","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6a.jpg"},{"id":"111","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7.jpg"},{"id":"112","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7a.jpg"},{"id":"113","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7H.jpg"},{"id":"114","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8a.jpg"},{"id":"115","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8e.jpg"},{"id":"116","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9a.jpg"},{"id":"117","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9b.jpg"},{"id":"118","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9c.jpg"},{"id":"119","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/10.jpg"},{"id":"120","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/11.jpg"},{"id":"121","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/11b.jpg"},{"id":"122","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/12.jpg"},{"id":"123","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/12c.jpg"},{"id":"124","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13.jpg"},{"id":"125","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13b.jpg"},{"id":"126","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13C.jpg"},{"id":"128","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/1-1.jpg"},{"id":"129","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/1b-1.jpg"},{"id":"130","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2a.jpg"},{"id":"131","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2b.jpg"},{"id":"132","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/3-1.jpg"},{"id":"133","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/3a-1.jpg"},{"id":"134","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/4-1.jpg"},{"id":"135","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/4a-1.jpg"},{"id":"136","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/5-1.jpg"},{"id":"137","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/5a-1.jpg"},{"id":"138","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6a-1.jpg"},{"id":"139","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6b.jpg"},{"id":"140","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7-1.jpg"},{"id":"141","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7a-1.jpg"},{"id":"142","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8a-1.jpg"},{"id":"143","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8e-1.jpg"},{"id":"144","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9b-1.jpg"},{"id":"145","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9c-1.jpg"},{"id":"146","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/10-1.jpg"},{"id":"147","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/10a.jpg"},{"id":"148","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/11-1.jpg"},{"id":"149","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/11b-1.jpg"},{"id":"150","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/12-1.jpg"},{"id":"151","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/12c-1.jpg"},{"id":"152","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13-1.jpg"},{"id":"153","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13C-1.jpg"},{"id":"156","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/I-am.jpg"},{"id":"163","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/instagram-logo.jpg"},{"id":"195","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2M.jpg"},{"id":"197","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/main_1.jpg"},{"id":"198","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/main_2.jpg"},{"id":"199","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/main_3.jpg"},{"id":"207","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7-2.jpg"},{"id":"208","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7a-2.jpg"},{"id":"209","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8.jpg"},{"id":"210","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8a-2.jpg"},{"id":"211","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13b-1.jpg"},{"id":"212","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13C-2.jpg"},{"id":"217","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2-1.jpg"},{"id":"218","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2a-1.jpg"},{"id":"219","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/2c.jpg"},{"id":"220","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6a-2.jpg"},{"id":"221","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6b-1.jpg"},{"id":"222","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/10-2.jpg"},{"id":"223","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/10a-1.jpg"},{"id":"224","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7a-3.jpg"},{"id":"229","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/1-5-m.jpg"},{"id":"258","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/3-2.jpg"},{"id":"264","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/шапка-на-сайт-.jpg"},{"id":"269","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/zf2kMqs8jaY.jpg"},{"id":"270","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/cropped-zf2kMqs8jaY.jpg"},{"id":"288","guid":"http://tuba-duba.com/wp-content/uploads/2016/05/13278020_1035718899853683_861600388_n.jpg"},{"id":"303","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6-1.jpg"},{"id":"304","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/9.jpg"},{"id":"307","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/13063447_1731036293779021_4895375757925909294_o.jpg"},{"id":"309","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/8-1.jpg"},{"id":"346","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/1.jpg"},{"id":"351","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/3.jpg"},{"id":"372","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/1-1.jpg"},{"id":"374","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/1-2.jpg"},{"id":"378","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/2.jpg"},{"id":"379","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/2-1.jpg"},{"id":"380","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/3-1.jpg"},{"id":"382","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/3-2.jpg"},{"id":"387","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/3-3.jpg"},{"id":"393","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/4.jpg"},{"id":"395","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/5.jpg"},{"id":"396","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/5-1.jpg"},{"id":"406","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/footer_img_r.jpg"},{"id":"408","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/6.jpg"},{"id":"409","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/7.jpg"},{"id":"415","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/5-2.jpg"},{"id":"417","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/istoriya-5.jpg"},{"id":"442","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/5-2.jpg"},{"id":"443","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/6-2.jpg"},{"id":"444","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/7-3.jpg"},{"id":"452","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/15-copy.jpg"},{"id":"478","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/16.jpg"},{"id":"483","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/Tuba-Duba_instruction.jpg"},{"id":"487","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/29.jpg"},{"id":"490","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/Tuba-Duba_instruction-1.jpg"},{"id":"494","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/15m.jpg"},{"id":"499","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/0a.jpg"},{"id":"500","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/1.jpg"},{"id":"501","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/180х180_.jpg"},{"id":"502","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/dp.jpg"},{"id":"503","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplates-kapushonom.jpg"},{"id":"504","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplates-kapushonom1.jpg"},{"id":"505","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplate.jpg"},{"id":"506","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplate1.jpg"},{"id":"507","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplate2.jpg"},{"id":"508","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/shirokoedlinnoe-plate.jpg"},{"id":"509","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/shirokoedlinnoe-plate1.jpg"},{"id":"510","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK1.jpg"},{"id":"511","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK2.jpg"},{"id":"512","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK3.jpg"},{"id":"513","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK5.jpg"},{"id":"514","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK6.jpg"},{"id":"515","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK7.jpg"},{"id":"516","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK8.jpg"},{"id":"518","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK9.jpg"},{"id":"519","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK10.jpg"},{"id":"520","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK11.jpg"},{"id":"521","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK12.jpg"},{"id":"522","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK13.jpg"},{"id":"523","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK14.jpg"},{"id":"524","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK15.jpg"},{"id":"525","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK16.jpg"},{"id":"526","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK17.jpg"},{"id":"527","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP1.jpg"},{"id":"528","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP2.jpg"},{"id":"529","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP3.jpg"},{"id":"530","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP4.jpg"},{"id":"531","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP5.jpg"},{"id":"532","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP6.jpg"},{"id":"533","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP7.jpg"},{"id":"534","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP8.jpg"},{"id":"535","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP9.jpg"},{"id":"536","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP10.jpg"},{"id":"540","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK0.jpg"},{"id":"541","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK1-1.jpg"},{"id":"542","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK3-1.jpg"},{"id":"543","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK4.jpg"},{"id":"544","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK5-1.jpg"},{"id":"545","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK6-1.jpg"},{"id":"546","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK7-1.jpg"},{"id":"547","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK8-1.jpg"},{"id":"548","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK9-1.jpg"},{"id":"549","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK10-1.jpg"},{"id":"550","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK11-1.jpg"},{"id":"551","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK12-1.jpg"},{"id":"552","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK13-1.jpg"},{"id":"553","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK14-1.jpg"},{"id":"554","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK15-1.jpg"},{"id":"555","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK16-1.jpg"},{"id":"556","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK17-1.jpg"},{"id":"557","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK18.jpg"},{"id":"558","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK19.jpg"},{"id":"559","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK20.jpg"},{"id":"560","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK21.jpg"},{"id":"561","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK22.jpg"},{"id":"562","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"},{"id":"563","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"},{"id":"564","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"},{"id":"565","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"},{"id":"566","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"},{"id":"567","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"},{"id":"568","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"},{"id":"569","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"},{"id":"570","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"},{"id":"571","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"},{"id":"572","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"},{"id":"573","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-facryta.jpg"},{"id":"574","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"},{"id":"575","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"},{"id":"576","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura.jpg"},{"id":"577","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"},{"id":"578","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"},{"id":"579","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"},{"id":"580","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"},{"id":"581","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"},{"id":"582","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"},{"id":"583","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"},{"id":"584","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"},{"id":"585","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"},{"id":"586","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/13932973_1088930401199199_138885520_n.jpg"},{"id":"587","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"},{"id":"588","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"},{"id":"595","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP1SM.jpg"},{"id":"596","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP11SM.jpg"},{"id":"597","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP4-1.jpg"},{"id":"598","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK24.jpg"},{"id":"599","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK23.jpg"},{"id":"600","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD.jpg"},{"id":"601","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD2.jpg"},{"id":"602","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD3.jpg"},{"id":"603","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD4.jpg"},{"id":"604","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP12SM.jpg"},{"id":"605","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DPK25.jpg"},{"id":"606","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP13.jpg"},{"id":"613","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/TKAN.jpg"},{"id":"625","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/about-fabric.jpg"},{"id":"626","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/about-fabric.jpg"},{"id":"632","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP0.jpg"},{"id":"633","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP1-1.jpg"},{"id":"634","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP2-1.jpg"},{"id":"635","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP3-1.jpg"},{"id":"636","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP4-2.jpg"},{"id":"637","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP5-1.jpg"},{"id":"638","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP6-1.jpg"},{"id":"639","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg"},{"id":"640","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP8-1.jpg"},{"id":"641","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP9-1.jpg"},{"id":"642","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP10-1.jpg"},{"id":"643","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP11.jpg"},{"id":"644","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP12.jpg"},{"id":"645","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP13-1.jpg"},{"id":"646","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP14.jpg"},{"id":"647","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP15.jpg"},{"id":"648","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP16.jpg"},{"id":"649","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP17.jpg"},{"id":"650","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/DP18.jpg"},{"id":"658","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD1.jpg"},{"id":"659","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD2-1.jpg"},{"id":"660","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD3-1.jpg"},{"id":"661","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD4-1.jpg"},{"id":"662","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD5.jpg"},{"id":"663","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD6.jpg"},{"id":"665","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/geltiy-Factura.jpg"},{"id":"666","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/limonniy-factura.jpg"},{"id":"667","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/negno-geltiy-Factura.jpg"},{"id":"668","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Orangeviy-factura.jpg"},{"id":"669","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/Orangevo-geltiy-factura.jpg"},{"id":"670","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura-1.jpg"},{"id":"671","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura-1.jpg"},{"id":"672","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura-2.jpg"},{"id":"690","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/5-3.jpg"},{"id":"691","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/9.jpg"},{"id":"692","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/14.jpg"},{"id":"693","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/15.jpg"},{"id":"696","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"},{"id":"714","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/15m-1.jpg"},{"id":"721","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/17.jpg"},{"id":"727","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD2-2.jpg"},{"id":"728","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD3-2.jpg"},{"id":"729","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/SPD4-2.jpg"},{"id":"742","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait.jpg"},{"id":"745","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-2.jpg"},{"id":"747","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-3.jpg"},{"id":"748","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-3-1.jpg"},{"id":"749","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4.jpg"},{"id":"751","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-1.jpg"},{"id":"754","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-2.jpg"},{"id":"757","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-3.jpg"},{"id":"760","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-4.jpg"},{"id":"764","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-big.jpg"},{"id":"765","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-big-1.jpg"},{"id":"779","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/caps.jpg"},{"id":"792","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/18.jpg"},{"id":"801","guid":"http://tuba-duba.com/wp-content/uploads/2016/04/DP2.jpg"},{"id":"821","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/сколько-ткани-нужно-на-платье-с-капюшоном.jpg"},{"id":"835","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/26-Morskoy-factura.jpg"},{"id":"840","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura.jpg"},{"id":"841","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/28.-violet-factura.jpg"},{"id":"842","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"},{"id":"843","guid":"http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"},{"id":"858","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy.jpg"},{"id":"859","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1.jpg"},{"id":"860","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1-1.jpg"},{"id":"861","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/BAklagan.jpg"},{"id":"862","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/BARDO.jpg"},{"id":"863","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Begeviy.jpg"},{"id":"864","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/beliy.jpg"},{"id":"865","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/biruza.jpg"},{"id":"866","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/cherniy.jpg"},{"id":"867","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/geltiy.jpg"},{"id":"868","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/KARMIN.jpg"},{"id":"869","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Krasniy.jpg"},{"id":"870","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/kremoviy.jpg"},{"id":"871","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Malahit.jpg"},{"id":"872","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Morskoy.jpg"},{"id":"873","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Myatniy.jpg"},{"id":"874","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Nebesniy.jpg"},{"id":"875","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Oliva.jpg"},{"id":"876","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Orangeviy.jpg"},{"id":"877","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Persikoviy.jpg"},{"id":"878","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/siniy.jpg"},{"id":"879","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1-2.jpg"},{"id":"880","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/svetlo-geltiy.jpg"},{"id":"881","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Svetlo-seriy.jpg"},{"id":"882","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/temno-korichneviy.jpg"},{"id":"883","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Temno-seriy.jpg"},{"id":"884","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Temno-siniy.jpg"},{"id":"885","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Temno-zel.jpg"},{"id":"886","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/terrakot.jpg"},{"id":"887","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Vasilkoviy.jpg"},{"id":"907","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/kievstar.jpg"},{"id":"908","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/life.jpg"},{"id":"909","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/MTS.jpg"},{"id":"916","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Vibeer.jpg"},{"id":"927","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DPK1.jpg"},{"id":"928","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DPK6.jpg"},{"id":"929","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DPK3.jpg"},{"id":"930","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DPK8.jpg"},{"id":"931","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DP1.jpg"},{"id":"932","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DP6.jpg"},{"id":"933","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DP7.jpg"},{"id":"934","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/DP11.jpg"},{"id":"936","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/27.-morskoy-factura.jpg"},{"id":"937","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/Morskoy-1.jpg"},{"id":"938","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1-3.jpg"},{"id":"940","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/photo-1.jpg"},{"id":"941","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/photo-3.jpg"},{"id":"942","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-1.jpg"},{"id":"943","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-2.jpg"},{"id":"944","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-3.jpg"},{"id":"945","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-4.jpg"},{"id":"946","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-5.jpg"},{"id":"947","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-6.jpg"},{"id":"948","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/RS-7.jpg"},{"id":"952","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"},{"id":"953","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"},{"id":"954","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/kirpichniy.jpg"},{"id":"955","guid":"http://tuba-duba.com/wp-content/uploads/2016/09/salatoviy.jpg"},{"id":"961","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/str.jpg"},{"id":"965","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP1a.jpg"},{"id":"966","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP3a.jpg"},{"id":"967","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP4a.jpg"},{"id":"968","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP6a.jpg"},{"id":"969","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP7.jpg"},{"id":"970","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP8.jpg"},{"id":"971","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK1a.jpg"},{"id":"972","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK2a.jpg"},{"id":"973","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK3a.jpg"},{"id":"974","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK4a.jpg"},{"id":"975","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK5a.jpg"},{"id":"976","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK6a.jpg"},{"id":"977","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/SP1.jpg"},{"id":"978","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/SP2.jpg"},{"id":"979","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/KPK1.jpg"},{"id":"980","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/KPK2.jpg"},{"id":"981","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/KPK2-1.jpg"},{"id":"982","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/SP1-1.jpg"},{"id":"983","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/SP2-1.jpg"},{"id":"984","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-2.jpg"},{"id":"985","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R.jpg"},{"id":"986","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-2-1.jpg"},{"id":"987","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-1.jpg"},{"id":"988","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-2-2.jpg"},{"id":"989","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews1.jpg"},{"id":"990","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews2.jpg"},{"id":"991","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews3.jpg"},{"id":"992","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews4.jpg"},{"id":"993","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews5.jpg"},{"id":"994","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews6.jpg"},{"id":"995","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews7.jpg"},{"id":"996","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK1.jpg"},{"id":"997","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK2.jpg"},{"id":"998","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1.jpg"},{"id":"999","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2.jpg"},{"id":"1000","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3.jpg"},{"id":"1001","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood4.jpg"},{"id":"1002","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5.jpg"},{"id":"1003","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6.jpg"},{"id":"1004","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood7.jpg"},{"id":"1005","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK3.jpg"},{"id":"1006","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK4.jpg"},{"id":"1007","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood.jpg"},{"id":"1008","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5-1.jpg"},{"id":"1009","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6-1.jpg"},{"id":"1010","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood8.jpg"},{"id":"1011","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2-1.jpg"},{"id":"1012","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3-1.jpg"},{"id":"1013","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1-1.jpg"},{"id":"1014","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK5.jpg"},{"id":"1015","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK6.jpg"},{"id":"1016","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK7.jpg"},{"id":"1017","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK8.jpg"},{"id":"1018","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK9.jpg"},{"id":"1019","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood0.jpg"},{"id":"1020","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood1.jpg"},{"id":"1021","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood2.jpg"},{"id":"1022","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood3.jpg"},{"id":"1023","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood4.jpg"},{"id":"1024","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood5.jpg"},{"id":"1025","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood6.jpg"},{"id":"1026","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood7.jpg"},{"id":"1027","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood8.jpg"},{"id":"1028","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1-2.jpg"},{"id":"1029","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2-2.jpg"},{"id":"1030","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3-2.jpg"},{"id":"1031","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood4-1.jpg"},{"id":"1032","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5-2.jpg"},{"id":"1033","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6-2.jpg"},{"id":"1034","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood7-1.jpg"},{"id":"1035","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK10.jpg"},{"id":"1037","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK11.jpg"},{"id":"1038","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK12.jpg"},{"id":"1039","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves1.jpg"},{"id":"1040","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves2.jpg"},{"id":"1041","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves3.jpg"},{"id":"1042","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves4.jpg"},{"id":"1043","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves5.jpg"},{"id":"1050","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK13.jpg"},{"id":"1051","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK14.jpg"},{"id":"1052","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar1.jpg"},{"id":"1053","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar2.jpg"},{"id":"1054","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar3.jpg"},{"id":"1055","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar4.jpg"},{"id":"1056","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar5.jpg"},{"id":"1057","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar6.jpg"},{"id":"1058","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar7.jpg"},{"id":"1059","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves.jpg"},{"id":"1060","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves1.jpg"},{"id":"1061","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves2.jpg"},{"id":"1062","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves3.jpg"},{"id":"1063","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves5.jpg"},{"id":"1064","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves6.jpg"},{"id":"1065","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK15.jpg"},{"id":"1066","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK16.jpg"},{"id":"1068","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK17.jpg"},{"id":"1069","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK18.jpg"},{"id":"1070","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK19.jpg"},{"id":"1071","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar1.jpg"},{"id":"1072","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar2.jpg"},{"id":"1073","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar3.jpg"},{"id":"1074","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar4.jpg"},{"id":"1075","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar5.jpg"},{"id":"1076","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar6.jpg"},{"id":"1108","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"},{"id":"1117","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK3.jpg"},{"id":"1118","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/DPK8.jpg"},{"id":"1132","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/grucheviy.jpg"},{"id":"1133","guid":"http://tuba-duba.com/wp-content/uploads/2016/10/salatoviy.jpg"},{"id":"1141","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/1.jpg"},{"id":"1142","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/2.jpg"},{"id":"1143","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/3.jpg"},{"id":"1144","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4.jpg"},{"id":"1145","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5.jpg"},{"id":"1146","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/6.jpg"},{"id":"1147","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/7.jpg"},{"id":"1151","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/KPK1.jpg"},{"id":"1152","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/KPK2.jpg"},{"id":"1153","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/1-1.jpg"},{"id":"1154","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/2-1.jpg"},{"id":"1155","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/3-1.jpg"},{"id":"1156","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4-1.jpg"},{"id":"1157","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5-1.jpg"},{"id":"1158","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/6-1.jpg"},{"id":"1159","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/8.jpg"},{"id":"1160","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/9.jpg"},{"id":"1161","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/10.jpg"},{"id":"1162","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/11.jpg"},{"id":"1164","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5-2.jpg"},{"id":"1165","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4-2.jpg"},{"id":"1167","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/21.jpg"},{"id":"1168","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/20.jpg"},{"id":"1169","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/22.jpg"},{"id":"1170","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/40.jpg"},{"id":"1171","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/46.jpg"},{"id":"1172","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/55.jpg"},{"id":"1173","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/51.jpg"},{"id":"1174","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/isu3GclC56c.jpg"},{"id":"1175","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/9-1.jpg"},{"id":"1176","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/16.jpg"},{"id":"1177","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/81d5yRVpSQE.jpg"},{"id":"1178","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/25.jpg"},{"id":"1179","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/24.jpg"},{"id":"1180","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/PpCNilzF3LE.jpg"},{"id":"1181","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/Z8_nWWi2Wcs.jpg"},{"id":"1182","guid":"http://tuba-duba.com/wp-content/uploads/2016/07/32.jpg"},{"id":"1192","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/1-2.jpg"},{"id":"1193","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/2-2.jpg"},{"id":"1194","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/3-2.jpg"},{"id":"1195","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4-3.jpg"},{"id":"1196","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5-3.jpg"},{"id":"1197","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/6-2.jpg"},{"id":"1198","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/7-1.jpg"},{"id":"1199","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/1-3.jpg"},{"id":"1200","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/2-3.jpg"},{"id":"1201","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/3-3.jpg"},{"id":"1202","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4-4.jpg"},{"id":"1203","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5-4.jpg"},{"id":"1204","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/6-3.jpg"},{"id":"1205","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/8-1.jpg"},{"id":"1206","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/9-1.jpg"},{"id":"1207","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/10-1.jpg"},{"id":"1208","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/11-1.jpg"},{"id":"1209","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/dresswithhood.jpg"},{"id":"1210","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/longangoradress.jpg"},{"id":"1211","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/longmiddle-dress.jpg"},{"id":"1212","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/Longskirt.jpg"},{"id":"1213","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/shortdress.jpg"},{"id":"1214","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/shortdresswithleaves.jpg"},{"id":"1215","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/warnundress.jpg"},{"id":"1216","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/1.Bardo_.jpg"},{"id":"1217","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/2.Grusha.jpg"},{"id":"1218","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/3.Zeleniy.jpg"},{"id":"1219","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/4.Krasniy.jpg"},{"id":"1220","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/5.Pepelniy.jpg"},{"id":"1221","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/6.-Svetlo-seriy.jpg"},{"id":"1222","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/7.Temno-zeleniy.jpg"},{"id":"1223","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/8.Temno-korichneviy.jpg"},{"id":"1224","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/9.Temno-siniy.jpg"},{"id":"1225","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/10.-Fioletoviy.jpg"},{"id":"1226","guid":"http://tuba-duba.com/wp-content/uploads/2016/11/11.Cherniy.jpg"},{"id":"1227","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1.бардо.jpg"},{"id":"1228","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/2.груша.jpg"},{"id":"1229","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/3.зеленый.jpg"},{"id":"1230","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/4.красный.jpg"},{"id":"1231","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/5.гранит.jpg"},{"id":"1232","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/6.svetlo-seriy.jpg"},{"id":"1233","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/7.темно-серый.jpg"},{"id":"1234","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/олива.jpg"},{"id":"1235","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/темная-вишня.jpg"},{"id":"1236","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/темно-коричневый.jpg"},{"id":"1237","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/темно-синий.jpg"},{"id":"1238","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/фиолет.jpg"},{"id":"1239","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/черный.jpg"},{"id":"1240","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1.Bardo_.jpg"},{"id":"1241","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/2.Grusha.jpg"},{"id":"1242","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/3.Zeleniy.jpg"},{"id":"1243","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/4.Krasniy.jpg"},{"id":"1244","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/5.Granit.jpg"},{"id":"1245","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/6.-Svetlo-seriy.jpg"},{"id":"1246","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/7.seriy_.jpg"},{"id":"1247","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/8.Temno-korichneviy.jpg"},{"id":"1248","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/9.Temno-siniy.jpg"},{"id":"1249","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/10.-Fioletoviy.jpg"},{"id":"1250","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/11.Cherniy.jpg"},{"id":"1251","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/12.-temnaya-vishnya.jpg"},{"id":"1252","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/13.Oliva_.jpg"},{"id":"1253","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/DPAngora.jpg"},{"id":"1254","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/DPSK.jpg"},{"id":"1255","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum.jpg"},{"id":"1256","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/KP35.jpg"},{"id":"1257","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/KPsr.jpg"},{"id":"1258","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ubka.jpg"},{"id":"1259","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK.jpg"},{"id":"1263","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/shortdress.jpg"},{"id":"1264","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/14.jpg"},{"id":"1265","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/15.jpg"},{"id":"1266","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/16.jpg"},{"id":"1267","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/17.jpg"},{"id":"1268","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/бардо.jpg"},{"id":"1269","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/коричневый.jpg"},{"id":"1270","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/малиновый.jpg"},{"id":"1271","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/морской.jpg"},{"id":"1272","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/нежный.jpg"},{"id":"1273","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/персик.jpg"},{"id":"1274","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Синий.jpg"},{"id":"1275","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/bardo.jpg"},{"id":"1276","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Korichneviy.jpg"},{"id":"1277","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Malinoviy.jpg"},{"id":"1278","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Morskoy.jpg"},{"id":"1279","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Negniy.jpg"},{"id":"1280","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Persik.jpg"},{"id":"1281","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Siniy.jpg"},{"id":"1282","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/5.гранит-1.jpg"},{"id":"1283","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/14-1.jpg"},{"id":"1284","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/15-1.jpg"},{"id":"1285","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/16-1.jpg"},{"id":"1286","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/17-1.jpg"},{"id":"1287","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Bardo.jpg"},{"id":"1288","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Korichneviy-1.jpg"},{"id":"1289","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/malinoviy.jpg"},{"id":"1290","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Morskoy-1.jpg"},{"id":"1291","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Negniy-1.jpg"},{"id":"1292","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Persik-1.jpg"},{"id":"1293","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Siniy-1.jpg"},{"id":"1294","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt.jpg"},{"id":"1295","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/longmiddle-dress.jpg"},{"id":"1296","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/shortdresswithleaves.jpg"},{"id":"1297","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/longangoradress.jpg"},{"id":"1298","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/warnundress.jpg"},{"id":"1299","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/18.jpg"},{"id":"1300","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/19.jpg"},{"id":"1301","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/20.jpg"},{"id":"1302","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/21.jpg"},{"id":"1303","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/22.jpg"},{"id":"1304","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/23.jpg"},{"id":"1305","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/24.jpg"},{"id":"1306","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/25.jpg"},{"id":"1307","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/26.jpg"},{"id":"1308","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/dresswithhood1.jpg"},{"id":"1309","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/dresswithhoodwithoutleaves.jpg"},{"id":"1310","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt2.jpg"},{"id":"1311","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/shortdress-2.jpg"},{"id":"1312","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/dpskir-1.jpg"},{"id":"1313","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/dpskir.jpg"},{"id":"1314","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/dpskwl.jpg"},{"id":"1315","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum-2.jpg"},{"id":"1316","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/KPsr-2.jpg"},{"id":"1317","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ubka1.jpg"},{"id":"1318","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK1.jpg"},{"id":"1319","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/KP351.jpg"},{"id":"1320","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum-2-1.jpg"},{"id":"1321","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum-1.jpg"},{"id":"1322","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS.jpg"},{"id":"1323","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS1.jpg"},{"id":"1324","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS2.jpg"},{"id":"1325","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt2-1.jpg"},{"id":"1326","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/shortdress-2-1.jpg"},{"id":"1327","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/shortdresswithleaves-1.jpg"},{"id":"1328","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/warnundress1.jpg"},{"id":"1329","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1.-Temno-korichneviy.jpg"},{"id":"1330","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/2.Molochniy.jpg"},{"id":"1331","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/3.Pilno-goluboy.jpg"},{"id":"1332","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/4.Temno-siniy.jpg"},{"id":"1333","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/5.Cherniy.jpg"},{"id":"1334","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/6.Fioletoviy.jpg"},{"id":"1335","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/7.Gorchichniy.jpg"},{"id":"1336","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/8.Nemno-zeleniy.jpg"},{"id":"1337","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/9.Temno-terrakotoviy.jpg"},{"id":"1338","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/18-1.jpg"},{"id":"1339","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/19-1.jpg"},{"id":"1340","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/20-1.jpg"},{"id":"1341","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/21-1.jpg"},{"id":"1342","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/22-1.jpg"},{"id":"1343","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/23-1.jpg"},{"id":"1344","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/24-1.jpg"},{"id":"1345","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/25-1.jpg"},{"id":"1346","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/26-1.jpg"},{"id":"1347","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/longangoradress1.jpg"},{"id":"1348","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/longmiddle-dress-1.jpg"},{"id":"1349","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/DPAngora1.jpg"},{"id":"1350","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/DPSK1.jpg"},{"id":"1352","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK-1.jpg"},{"id":"1353","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK1-1.jpg"},{"id":"1354","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1111.jpg"},{"id":"1358","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1.jpg"},{"id":"1362","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/10.djins_.jpg"},{"id":"1363","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/11.temno-seriy.jpg"},{"id":"1364","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/12.Grusheviy.jpg"},{"id":"1365","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/13.Siren_.jpg"},{"id":"1366","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/14.Krasniy.jpg"},{"id":"1367","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/27.jpg"},{"id":"1368","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/28.jpg"},{"id":"1369","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/29.jpg"},{"id":"1370","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/30.jpg"},{"id":"1371","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/31.jpg"},{"id":"1372","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/7.Gorchichniy-1.jpg"},{"id":"1373","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/2.Molochniy-1.jpg"},{"id":"1374","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/32.jpg"},{"id":"1375","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/21-2.jpg"},{"id":"1376","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy.jpg"},{"id":"1377","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/geltiy.jpg"},{"id":"1378","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy.jpg"},{"id":"1379","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/rozoviy.jpg"},{"id":"1380","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/seriy.jpg"},{"id":"1381","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/sero-molochniy.jpg"},{"id":"1382","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/svSeriy.jpg"},{"id":"1383","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy.jpg"},{"id":"1384","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy-1.jpg"},{"id":"1385","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/geltiy-1.jpg"},{"id":"1386","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy-1.jpg"},{"id":"1387","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/rozoviy-1.jpg"},{"id":"1388","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/seriy-1.jpg"},{"id":"1389","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/sero-molochniy-1.jpg"},{"id":"1390","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/svSeriy-1.jpg"},{"id":"1391","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy-1.jpg"},{"id":"1392","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy-2.jpg"},{"id":"1393","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/geltiy-2.jpg"},{"id":"1394","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy-2.jpg"},{"id":"1395","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/rozoviy-2.jpg"},{"id":"1396","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/seriy-2.jpg"},{"id":"1397","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/sero-molochniy-2.jpg"},{"id":"1398","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/svSeriy-2.jpg"},{"id":"1399","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy-2.jpg"},{"id":"1400","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy-3.jpg"},{"id":"1401","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Geltiy.jpg"},{"id":"1402","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy-3.jpg"},{"id":"1403","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Rozoviy.jpg"},{"id":"1404","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Seriy.jpg"},{"id":"1405","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Sero-MOlochniy.jpg"},{"id":"1406","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/SvSeriy.jpg"},{"id":"1407","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy-3.jpg"},{"id":"1408","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt2-2.jpg"},{"id":"1409","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/SKARF.jpg"},{"id":"1410","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/1-1.jpg"},{"id":"1411","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/skarf.jpg"},{"id":"1412","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/бежевый.jpg"},{"id":"1413","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/гранит.jpg"},{"id":"1414","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/коричневый-1.jpg"},{"id":"1415","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/ночной.jpg"},{"id":"1416","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/розовый.jpg"},{"id":"1417","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/светлый.jpg"},{"id":"1418","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/сирень.jpg"},{"id":"1419","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/бежевый-1.jpg"},{"id":"1420","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/гранит-1.jpg"},{"id":"1421","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/коричневый-2.jpg"},{"id":"1422","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/розовый-1.jpg"},{"id":"1423","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/светлый-1.jpg"},{"id":"1424","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/сирень-1.jpg"},{"id":"1425","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/ночной-1.jpg"},{"id":"1426","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/ночной-2.jpg"},{"id":"1427","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/розовый-2.jpg"},{"id":"1428","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/светлый-2.jpg"},{"id":"1429","guid":"http://tuba-duba.com/wp-content/uploads/2016/12/сирень-2.jpg"},{"id":"1435","guid":"http://tuba-duba.com/wp-content/uploads/2017/01/8.jpg"},{"id":"1436","guid":"http://tuba-duba.com/wp-content/uploads/2017/01/9.jpg"},{"id":"1437","guid":"http://tuba-duba.com/wp-content/uploads/2017/01/14.rijiy_.jpg"},{"id":"1438","guid":"http://tuba-duba.com/wp-content/uploads/2017/01/15.djins_.jpg"},{"id":"1445","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/1.jpg"},{"id":"1449","guid":"http://tuba-duba.com/wp-content/uploads/2016/03/Banner_spring_dreams_flower_3.jpg"},{"id":"1471","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/banner-3.jpg"},{"id":"1472","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/banner-1.jpg"},{"id":"1473","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/banner-2.jpg"},{"id":"1477","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/31.serebristiy.jpg"},{"id":"1478","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/32.malinoviy.jpg"},{"id":"1479","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/33.koraloviy.jpg"},{"id":"1480","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/34.izumrudniy.jpg"},{"id":"1481","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/35.насыщенный-желтый.jpg"},{"id":"1482","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/33.koraloviy-1.jpg"},{"id":"1483","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/19.temno-seriy.jpg"},{"id":"1484","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/colnechniy.jpg"},{"id":"1485","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/izumrudniy.jpg"},{"id":"1486","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/koraloviy.jpg"},{"id":"1487","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/malinoviy.jpg"},{"id":"1488","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/serebristiu.jpg"},{"id":"1489","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/Biruza.jpg"},{"id":"1490","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy.jpg"},{"id":"1491","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/36.lazurniy.jpg"},{"id":"1492","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/37.biruza.jpg"},{"id":"1493","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/37.biruza-1.jpg"},{"id":"1494","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/Malahit.jpg"},{"id":"1495","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/23.Malahitoviy.jpg"},{"id":"1496","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/23.Malahitoviy-1.jpg"},{"id":"1497","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/Biruza-1.jpg"},{"id":"1498","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy-1.jpg"},{"id":"1499","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy-2.jpg"},{"id":"1500","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/38.siren_.jpg"},{"id":"1501","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/siren.jpg"},{"id":"1502","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/temnoe-bardo.jpg"},{"id":"1503","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/39-temnoe-bardo.jpg"},{"id":"1504","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/32-malinoviy.jpg"},{"id":"1505","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/33koraloviy.jpg"},{"id":"1506","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/34-izumrudniy.jpg"},{"id":"1507","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/35-nasischenniya-geltiy.jpg"},{"id":"1508","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/colnechniy-1.jpg"},{"id":"1509","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/izumrudniy-1.jpg"},{"id":"1510","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/koraloviy-1.jpg"},{"id":"1511","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/malinoviy-1.jpg"},{"id":"1512","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/31.serebristiy-1.jpg"},{"id":"1513","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP1.jpg"},{"id":"1514","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP2.jpg"},{"id":"1515","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP3.jpg"},{"id":"1516","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP4.jpg"},{"id":"1517","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP5.jpg"},{"id":"1518","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP6.jpg"},{"id":"1519","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP8.jpg"},{"id":"1520","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP12.jpg"},{"id":"1521","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP17.jpg"},{"id":"1522","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/DP18.jpg"},{"id":"1523","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/KPK1.jpg"},{"id":"1524","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/KPK2.jpg"},{"id":"1525","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/41.jpg"},{"id":"1526","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/34-izumrudniy-1.jpg"},{"id":"1527","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/34-izumrudniy-2.jpg"},{"id":"1528","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/шягткгв.jpg"},{"id":"1530","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy-3.jpg"},{"id":"1531","guid":"http://tuba-duba.com/wp-content/uploads/2017/03/26.-violet-factura.jpg"},{"id":"1532","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_01.jpg"},{"id":"1533","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_02.jpg"},{"id":"1534","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03.jpg"},{"id":"1535","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03-1.jpg"},{"id":"1536","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_04.jpg"},{"id":"1537","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_05.jpg"},{"id":"1538","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_06.jpg"},{"id":"1539","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_07.jpg"},{"id":"1540","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_08.jpg"},{"id":"1541","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_09.jpg"},{"id":"1542","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_10.jpg"},{"id":"1543","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_11.jpg"},{"id":"1544","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_12.jpg"},{"id":"1545","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_13.jpg"},{"id":"1546","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_14.jpg"},{"id":"1547","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_15.jpg"},{"id":"1548","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_16.jpg"},{"id":"1549","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_17.jpg"},{"id":"1550","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_18.jpg"},{"id":"1551","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_19.jpg"},{"id":"1552","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_20.jpg"},{"id":"1553","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_21.jpg"},{"id":"1554","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_22.jpg"},{"id":"1555","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_01-1.jpg"},{"id":"1556","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_02-1.jpg"},{"id":"1557","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_04-1.jpg"},{"id":"1558","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_05-1.jpg"},{"id":"1559","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_07-1.jpg"},{"id":"1560","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_08-1.jpg"},{"id":"1561","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_10-1.jpg"},{"id":"1562","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_11-1.jpg"},{"id":"1563","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_13-1.jpg"},{"id":"1564","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_14-1.jpg"},{"id":"1565","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_15-1.jpg"},{"id":"1566","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_16-1.jpg"},{"id":"1567","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_18-1.jpg"},{"id":"1568","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_19-1.jpg"},{"id":"1569","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_20-1.jpg"},{"id":"1570","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_21-1.jpg"},{"id":"1571","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_01-2.jpg"},{"id":"1572","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_02-2.jpg"},{"id":"1573","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03-2.jpg"},{"id":"1574","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03-3.jpg"},{"id":"1575","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_04-2.jpg"},{"id":"1576","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_05-2.jpg"},{"id":"1581","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/40rosovaya.jpg"},{"id":"1582","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/roza.jpg"},{"id":"1583","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/Malahit.jpg"},{"id":"1584","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/Biruza.jpg"},{"id":"1585","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/37.biruza.jpg"},{"id":"1587","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/IMG_9849.jpg"},{"id":"1590","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/12.jpg"},{"id":"1611","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/2.-Bardo-factura_sh.jpg"},{"id":"1612","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/3.-Baklagan-factura_sh.jpg"},{"id":"1613","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/4.-Krasniy-factura_sh.jpg"},{"id":"1614","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/5.Oliva-factura_sh.jpg"},{"id":"1615","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/9.temno-siniy_sh.jpg"},{"id":"1616","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/18.cherniy-factura_sh.jpg"},{"id":"1617","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/Baklagan_sh.jpg"},{"id":"1618","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/bardo_sh.jpg"},{"id":"1619","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/cherniy_sh.jpg"},{"id":"1620","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/Krasniy_sh.jpg"},{"id":"1621","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/oivkoviy_sh.jpg"},{"id":"1622","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/temno-siniy_sh.jpg"},{"id":"1629","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/6a.jpg"},{"id":"1630","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/7a.jpg"},{"id":"1631","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/8a.jpg"},{"id":"1632","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/14a.jpg"},{"id":"1633","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/40.jpg"},{"id":"1634","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/43.jpg"},{"id":"1635","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/48.jpg"},{"id":"1636","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/50.jpg"},{"id":"1637","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/53.jpg"},{"id":"1638","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/65.jpg"},{"id":"1639","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/21.jpg"},{"id":"1640","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/22.jpg"},{"id":"1641","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/23.jpg"},{"id":"1642","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/2a.jpg"},{"id":"1643","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/3.jpg"},{"id":"1644","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/4a.jpg"},{"id":"1645","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/5a.jpg"},{"id":"1646","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/9a.jpg"},{"id":"1647","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/10a.jpg"},{"id":"1648","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/12a.jpg"},{"id":"1649","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/33.jpg"},{"id":"1650","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/55.jpg"},{"id":"1651","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/57.jpg"},{"id":"1652","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/59.jpg"},{"id":"1653","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/16.jpg"},{"id":"1654","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/24.jpg"},{"id":"1655","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/25.jpg"},{"id":"1656","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/27.jpg"},{"id":"1657","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/29.jpg"},{"id":"1658","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/15.jpg"},{"id":"1659","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/37.jpg"},{"id":"1660","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/2¦-.jpg"},{"id":"1661","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/5¦-.jpg"},{"id":"1662","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/22-1.jpg"},{"id":"1663","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/25-1.jpg"},{"id":"1664","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/28.jpg"},{"id":"1665","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/33-1.jpg"},{"id":"1666","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/37-1.jpg"},{"id":"1667","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/57-1.jpg"},{"id":"1668","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/84.jpg"},{"id":"1669","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/131.jpg"},{"id":"1670","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/9275.jpg"},{"id":"1671","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/9315.jpg"},{"id":"1672","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/131-1.jpg"},{"id":"1673","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/бело-вишневая-полоска.jpg"},{"id":"1674","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/бело-красная-полоска.jpg"},{"id":"1675","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/голубой.jpg"},{"id":"1676","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/нежно-лиловый.jpg"},{"id":"1677","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/светло-коричневый.jpg"},{"id":"1678","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/сизый.jpg"},{"id":"1679","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/темно-лазурный.jpg"},{"id":"1680","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/темно-лазурный-small.jpg"},{"id":"1681","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/бело-вишневая-полоска-small.jpg"},{"id":"1682","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/бело-красная-полоска-small.jpg"},{"id":"1683","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/голубой-small.jpg"},{"id":"1684","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/нежно-лиловый-small.jpg"},{"id":"1685","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/светло-коричневый-small.jpg"},{"id":"1686","guid":"http://tuba-duba.com/wp-content/uploads/2017/04/сизый-small.jpg"},{"id":"1688","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/красно-бордовая.jpg"},{"id":"1689","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/красно-сине-белая.jpg"},{"id":"1690","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/оранжево-желто-голубая.jpg"},{"id":"1691","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/серо-белая.jpg"},{"id":"1692","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/сине-белая.jpg"},{"id":"1693","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/сине-серая.jpg"},{"id":"1694","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/черно-белая.jpg"},{"id":"1695","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/красно-бордовая-1.jpg"},{"id":"1696","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/красно-сине-белая-1.jpg"},{"id":"1697","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/оранжево-желто-голубая-1.jpg"},{"id":"1698","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/серо-белая-1.jpg"},{"id":"1699","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/сине-белая-1.jpg"},{"id":"1700","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/сине-серая-1.jpg"},{"id":"1701","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/черно-белая-1.jpg"},{"id":"1702","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/баклажан.jpg"},{"id":"1703","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/бордо.jpg"},{"id":"1704","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/вишневый.jpg"},{"id":"1705","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/джинс.jpg"},{"id":"1706","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/морковный.jpg"},{"id":"1707","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/синий.jpg"},{"id":"1708","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-коричневый.jpg"},{"id":"1709","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-серый.jpg"},{"id":"1710","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-синий.jpg"},{"id":"1711","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/баклажан-1.jpg"},{"id":"1712","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/бордо-1.jpg"},{"id":"1713","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/вишневый-1.jpg"},{"id":"1714","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/джинс-1.jpg"},{"id":"1715","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/морковный-1.jpg"},{"id":"1716","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/синий-1.jpg"},{"id":"1717","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-коричневый-1.jpg"},{"id":"1718","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-серый-1.jpg"},{"id":"1719","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/темно-синий-1.jpg"},{"id":"1720","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/67.jpg"},{"id":"1721","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/68.jpg"},{"id":"1722","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/70.jpg"},{"id":"1723","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/72.jpg"},{"id":"1724","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/73.jpg"},{"id":"1725","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/88.jpg"},{"id":"1726","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/92.jpg"},{"id":"1727","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/93.jpg"},{"id":"1728","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/94.jpg"},{"id":"1729","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/95.jpg"},{"id":"1730","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/98.jpg"},{"id":"1731","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/100.jpg"},{"id":"1732","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/104.jpg"},{"id":"1733","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/106.jpg"},{"id":"1734","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/1.jpg"},{"id":"1735","guid":"http://tuba-duba.com/wp-content/uploads/2017/05/2.jpg"},{"id":"1747","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/1.jpg"},{"id":"1748","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/2.jpg"},{"id":"1749","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/3.jpg"},{"id":"1750","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/4.jpg"},{"id":"1751","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/5.jpg"},{"id":"1752","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/6.jpg"},{"id":"1753","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/7.jpg"},{"id":"1754","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/8.jpg"},{"id":"1755","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/9.jpg"},{"id":"1756","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/10.jpg"},{"id":"1757","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/11.jpg"},{"id":"1758","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/12.jpg"},{"id":"1759","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/13.jpg"},{"id":"1760","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/14.jpg"},{"id":"1761","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/15.jpg"},{"id":"1762","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/1-1.jpg"},{"id":"1763","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/2-1.jpg"},{"id":"1764","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/3-1.jpg"},{"id":"1765","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/4-1.jpg"},{"id":"1766","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/5-1.jpg"},{"id":"1767","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/6-1.jpg"},{"id":"1768","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/7-1.jpg"},{"id":"1769","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/белая-полоска-смал.jpg"},{"id":"1770","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/полоска-белая.jpg"},{"id":"1771","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/темно-синий.jpg"},{"id":"1772","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/полоска-белая-1.jpg"},{"id":"1773","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/темно-синий-смал.jpg"},{"id":"1774","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/IMG_3021.jpg"},{"id":"1775","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/океан-эльзы.jpg"},{"id":"1776","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/лазурный.jpg"},{"id":"1777","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/темно-синий-1.jpg"},{"id":"1779","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/cherniya.jpg"},{"id":"1780","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/geltiy.jpg"},{"id":"1781","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrud.jpg"},{"id":"1782","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/krasniy.jpg"},{"id":"1783","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/morkovniy.jpg"},{"id":"1784","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/nejniy-choko.jpg"},{"id":"1785","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/salatoviy.jpg"},{"id":"1786","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy.jpg"},{"id":"1787","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/ultramarin.jpg"},{"id":"1788","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/cherniy.jpg"},{"id":"1789","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/elektrik.jpg"},{"id":"1790","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrud-1.jpg"},{"id":"1791","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/jeltiy.jpg"},{"id":"1792","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/kofe.jpg"},{"id":"1793","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/krasniy-1.jpg"},{"id":"1794","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/salatoviy-1.jpg"},{"id":"1795","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy-1.jpg"},{"id":"1796","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/morkobvniy.jpg"},{"id":"1797","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/molochniya.jpg"},{"id":"1798","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/siniy.jpg"},{"id":"1799","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/molochniy.jpg"},{"id":"1800","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/siniy-1.jpg"},{"id":"1801","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/29.jpg"},{"id":"1802","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/31.jpg"},{"id":"1803","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/32.jpg"},{"id":"1804","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/33.jpg"},{"id":"1805","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/34.jpg"},{"id":"1806","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/35.jpg"},{"id":"1808","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/RAZMERY.jpg"},{"id":"1811","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/RAZMERY-1.jpg"},{"id":"1813","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/04.jpg"},{"id":"1814","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/05.jpg"},{"id":"1815","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1725ш.jpg"},{"id":"1816","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1729ш.jpg"},{"id":"1817","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1733ш.jpg"},{"id":"1818","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1736ш.jpg"},{"id":"1819","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_2045ш.jpg"},{"id":"1820","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_2046ш.jpg"},{"id":"1821","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/1-2.jpg"},{"id":"1822","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/2-2.jpg"},{"id":"1823","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/3-2.jpg"},{"id":"1824","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/4-2.jpg"},{"id":"1825","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/5-2.jpg"},{"id":"1826","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/6-2.jpg"},{"id":"1827","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/7-2.jpg"},{"id":"1828","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/8-1.jpg"},{"id":"1829","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/12-1.jpg"},{"id":"1830","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/13-1.jpg"},{"id":"1831","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1909ш.jpg"},{"id":"1832","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/9-1.jpg"},{"id":"1833","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/10-1.jpg"},{"id":"1834","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/11-1.jpg"},{"id":"1835","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/12-2.jpg"},{"id":"1836","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/50.jpg"},{"id":"1837","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/51.jpg"},{"id":"1838","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/52.jpg"},{"id":"1839","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/53.jpg"},{"id":"1840","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/54.jpg"},{"id":"1841","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/55.jpg"},{"id":"1842","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/12-3.jpg"},{"id":"1843","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/13-2.jpg"},{"id":"1844","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/15-1.jpg"},{"id":"1845","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/16.jpg"},{"id":"1846","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/17.jpg"},{"id":"1847","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/18.jpg"},{"id":"1848","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/70.jpg"},{"id":"1849","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/71.jpg"},{"id":"1850","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/geltiy-persikoviy.jpg"},{"id":"1851","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudniya-salat.jpg"},{"id":"1852","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/molochno-kofeiniy.jpg"},{"id":"1853","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudniy-salat.jpg"},{"id":"1854","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/jelto-oranjeviya.jpg"},{"id":"1855","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/kofe-s-molokom.jpg"},{"id":"1856","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudno-cherniy.jpg"},{"id":"1857","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy-krasniy.jpg"},{"id":"1858","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudno-cherniy-1.jpg"},{"id":"1859","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/sine-krasniy.jpg"},{"id":"1860","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/sine-temnosiniy.jpg"},{"id":"1861","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/sine-temnosiniy-1.jpg"},{"id":"1862","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/sine-temnosiniy-2.jpg"},{"id":"1863","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/18-1.jpg"},{"id":"1864","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/20.jpg"},{"id":"1865","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/21.jpg"},{"id":"1866","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/22.jpg"},{"id":"1867","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/24.jpg"},{"id":"1868","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/36.jpg"},{"id":"1869","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/37.jpg"},{"id":"1870","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/38.jpg"},{"id":"1871","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/39.jpg"},{"id":"1872","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/23.jpg"},{"id":"1873","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/24-1.jpg"},{"id":"1874","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/25.jpg"},{"id":"1875","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Ahimsa1.jpg"},{"id":"1876","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Ahimsa2.jpg"},{"id":"1877","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha1.jpg"},{"id":"1878","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha2.jpg"},{"id":"1879","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Ardjava1.jpg"},{"id":"1880","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Arjava2.jpg"},{"id":"1881","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha1-1.jpg"},{"id":"1882","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha2-1.jpg"},{"id":"1883","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Ardjava1-1.jpg"},{"id":"1884","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Arjava2-1.jpg"},{"id":"1885","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Asteya1.jpg"},{"id":"1886","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Asteya2.jpg"},{"id":"1887","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Brahmacharya.jpg"},{"id":"1888","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Brahmacharya1.jpg"},{"id":"1889","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/daya-1.jpg"},{"id":"1890","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/daya2.jpg"},{"id":"1891","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/dHRITI1.jpg"},{"id":"1892","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/dhriti2.jpg"},{"id":"1893","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Kshama1.jpg"},{"id":"1894","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Kshama2.jpg"},{"id":"1895","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/mitahara1.jpg"},{"id":"1896","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/mitahara2.jpg"},{"id":"1897","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/satya1.jpg"},{"id":"1898","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/satya2.jpg"},{"id":"1899","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/shaucha1.jpg"},{"id":"1900","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/shaucha2.jpg"},{"id":"1901","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Kshama2-1.jpg"},{"id":"1902","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/32-1.jpg"},{"id":"1903","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/33-1.jpg"},{"id":"1904","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/34-1.jpg"},{"id":"1905","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/36-1.jpg"},{"id":"1906","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/44.jpg"},{"id":"1907","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/46.jpg"},{"id":"1908","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/47.jpg"},{"id":"1909","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/chernj-beliy.jpg"},{"id":"1910","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/cherno-salat.jpg"},{"id":"1911","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/cherno-beliy.jpg"},{"id":"1912","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/cherno-salat-1.jpg"},{"id":"1913","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/41.jpg"},{"id":"1914","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/42.jpg"},{"id":"1915","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/43.jpg"},{"id":"1916","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/45.jpg"},{"id":"1917","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/60.jpg"},{"id":"1918","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/63.jpg"},{"id":"1919","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Ardjava1-2.jpg"},{"id":"1921","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Tuba_Duba_DHARMA_3а.jpg"},{"id":"1922","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/Tuba_Duba_DHARMA.jpg"},{"id":"1924","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/1Tuba_Duba_DHARMA.jpg"},{"id":"1925","guid":"http://tuba-duba.com/wp-content/uploads/2017/06/1Tuba_Duba_DHARMA_3а.jpg"}];
var oldImages3 = [{id:611,guid:"your_website_url_here/wp-content/uploads/2011/01/canola2.jpg"},
{id:616,guid:"your_website_url_here/wp-content/uploads/2011/01/dsc20050727_091048_222.jpg"},
{id:617,guid:"your_website_url_here/wp-content/uploads/2011/01/dsc20050813_115856_52.jpg"},
{id:754,guid:"your_website_url_here/wp-content/uploads/2011/07/100_5478.jpg"},
{id:755,guid:"your_website_url_here/wp-content/uploads/2011/07/100_5540.jpg"},
{id:756,guid:"your_website_url_here/wp-content/uploads/2011/07/cep00032.jpg"},
{id:757,guid:"your_website_url_here/wp-content/uploads/2011/07/dcp_2082.jpg"},
{id:758,guid:"your_website_url_here/wp-content/uploads/2011/07/dsc03149.jpg"},
{id:759,guid:"your_website_url_here/wp-content/uploads/2011/07/dsc04563.jpg"},
{id:760,guid:"your_website_url_here/wp-content/uploads/2011/07/dsc09114.jpg"},
{id:761,guid:"your_website_url_here/wp-content/uploads/2011/07/dsc20050102_192118_51.jpg"},
{id:762,guid:"your_website_url_here/wp-content/uploads/2011/07/dsc20051220_160808_102.jpg"},
{id:763,guid:"your_website_url_here/wp-content/uploads/2011/07/dsc02085.jpg"},
{id:764,guid:"your_website_url_here/wp-content/uploads/2011/07/dsc20051220_173257_119.jpg"},
{id:765,guid:"your_website_url_here/wp-content/uploads/2011/07/dscn3316.jpg"},
{id:766,guid:"your_website_url_here/wp-content/uploads/2011/07/michelle_049.jpg"},
{id:767,guid:"your_website_url_here/wp-content/uploads/2011/07/windmill.jpg"},
{id:768,guid:"your_website_url_here/wp-content/uploads/2011/07/img_0513-1.jpg"},
{id:769,guid:"your_website_url_here/wp-content/uploads/2011/07/img_0747.jpg"},
{id:770,guid:"your_website_url_here/wp-content/uploads/2011/07/img_0767.jpg"},
{id:771,guid:"your_website_url_here/wp-content/uploads/2011/07/img_8399.jpg"},
{id:807,guid:"your_website_url_here/wp-content/uploads/2012/06/dsc20040724_152504_532.jpg"},
{id:811,guid:"your_website_url_here/wp-content/uploads/2012/06/dsc20050604_133440_34211.jpg"},
{id:827,guid:"your_website_url_here/wp-content/uploads/2012/07/manhattansummer.jpg"},
{id:967,guid:"your_website_url_here/wp-content/uploads/2013/03/image-alignment-580x300.jpg"},
{id:968,guid:"your_website_url_here/wp-content/uploads/2013/03/image-alignment-150x150.jpg"},
{id:1005,guid:"your_website_url_here/wp-content/uploads/2016/02/typography-1.jpg"},
{id:1006,guid:"your_website_url_here/wp-content/uploads/2016/02/typography-2.jpg"},
{id:1199,guid:"your_website_url_here/wp-content/uploads/2016/09/Depositphotos_3658334_original.jpg"},
{id:1200,guid:"your_website_url_here/wp-content/uploads/2016/09/Depositphotos_8565664_original.jpg"},
{id:1201,guid:"your_website_url_here/wp-content/uploads/2016/09/Depositphotos_33789223_original.jpg"},
{id:1202,guid:"your_website_url_here/wp-content/uploads/2016/09/Depositphotos_51176455_original.jpg"},
{id:1203,guid:"your_website_url_here/wp-content/uploads/2016/09/Depositphotos_82874434_original.jpg"},
{id:1204,guid:"your_website_url_here/wp-content/uploads/2016/09/Depositphotos_91879362_original.jpg"},
{id:1205,guid:"your_website_url_here/wp-content/uploads/2016/09/Depositphotos_104851338_original.jpg"},
{id:1206,guid:"your_website_url_here/wp-content/uploads/2016/09/Depositphotos_107482906_original.jpg"},
{id:1209,guid:"your_website_url_here/wp-content/uploads/2016/09/203_organicheskaya-kosmetika.jpg"},
{id:1210,guid:"your_website_url_here/wp-content/uploads/2016/09/Calgary-is-Green-How-Natural-are-Natural-Cosmetics-01.jpg"},
{id:1211,guid:"your_website_url_here/wp-content/uploads/2016/09/Natural-Moisturizers.jpg"},
{id:1212,guid:"your_website_url_here/wp-content/uploads/2016/09/natural-organic-cosmetic-5.jpg"},
{id:1248,guid:"your_website_url_here/wp-content/uploads/2016/09/slide-1.jpg"},
{id:1250,guid:"your_website_url_here/wp-content/uploads/2016/09/slide-2.jpg"},
{id:1252,guid:"your_website_url_here/wp-content/uploads/2016/09/slide-3.jpg"},
{id:1256,guid:"your_website_url_here/wp-content/uploads/2016/09/banner-4.jpg"},
{id:1267,guid:"your_website_url_here/wp-content/uploads/2016/04/testimonials_img_3.jpg"},
{id:1268,guid:"your_website_url_here/wp-content/uploads/2016/04/testimonial_img_1.jpg"},
{id:1269,guid:"your_website_url_here/wp-content/uploads/2016/04/testimonial_img_2.jpg"},
{id:1283,guid:"your_website_url_here/wp-content/uploads/2013/03/featured-image-horizontal.jpg"},
{id:1284,guid:"your_website_url_here/wp-content/uploads/2013/03/soworthloving-wallpaper.jpg"},
{id:1285,guid:"your_website_url_here/wp-content/uploads/2013/03/image-alignment-300x200.jpg"},
{id:1286,guid:"your_website_url_here/wp-content/uploads/2013/03/featured-image-vertical.jpg"},
{id:1287,guid:"your_website_url_here/wp-content/uploads/2013/03/image-alignment-1200x4002.jpg"},
{id:1288,guid:"your_website_url_here/wp-content/uploads/2013/03/unicorn-wallpaper.jpg"},
{id:1628,guid:"your_website_url_here/wp-content/uploads/2013/04/triforce-wallpaper.jpg"},
{id:1686,guid:"your_website_url_here/wp-content/uploads/2013/09/dsc20040724_152504_532.jpg"},
{id:1687,guid:"your_website_url_here/wp-content/uploads/2013/09/dsc20050604_133440_34211.jpg"},
{id:1691,guid:"your_website_url_here/wp-content/uploads/2014/01/dsc20050315_145007_132.jpg"},
{id:1964,guid:"http://new.tuba-duba.com/wp-content/uploads/2017/08/cherniy.jpg"},
{id:1978,guid:"http://localhost/wp-content/uploads/2014/06/unnamed.jpg"},
{id:1979,guid:"http://localhost/wp-content/uploads/2017/08/31.jpg"},
{id:1980,guid:"http://localhost/wp-content/uploads/2017/08/32.jpg"},
{id:2033,guid:"http://tuba-duba.com/wp-content/uploads/2016/03/ifrnb.jpg"},
{id:2034,guid:"http://tuba-duba.com/wp-content/uploads/2016/03/tuba1.jpg"},
{id:2035,guid:"http://tuba-duba.com/wp-content/uploads/2016/03/tuba2.jpg"},
{id:2036,guid:"http://tuba-duba.com/wp-content/uploads/2016/03/12919126_1002240559868184_1159654242_n.jpg"},
{id:2037,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/1.jpg"},
{id:2038,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/1b.jpg"},
{id:2039,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/2.jpg"},
{id:2040,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/2d.jpg"},
{id:2041,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/3.jpg"},
{id:2042,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/3a.jpg"},
{id:2043,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/4.jpg"},
{id:2044,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/4a.jpg"},
{id:2045,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/5.jpg"},
{id:2046,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/5a.jpg"},
{id:2047,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/6.jpg"},
{id:2048,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/6a.jpg"},
{id:2049,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/7.jpg"},
{id:2050,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/7a.jpg"},
{id:2051,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/7H.jpg"},
{id:2052,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/8a.jpg"},
{id:2053,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/8e.jpg"},
{id:2054,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/9a.jpg"},
{id:2055,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/9b.jpg"},
{id:2056,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/9c.jpg"},
{id:2057,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/10.jpg"},
{id:2058,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/11.jpg"},
{id:2059,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/11b.jpg"},
{id:2060,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/12.jpg"},
{id:2061,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/12c.jpg"},
{id:2062,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/13.jpg"},
{id:2063,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/13b.jpg"},
{id:2064,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/13C.jpg"},
{id:2065,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/1-1.jpg"},
{id:2066,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/1b-1.jpg"},
{id:2067,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/2a.jpg"},
{id:2068,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/2b.jpg"},
{id:2069,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/3-1.jpg"},
{id:2070,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/3a-1.jpg"},
{id:2071,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/4-1.jpg"},
{id:2072,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/4a-1.jpg"},
{id:2073,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/5-1.jpg"},
{id:2074,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/5a-1.jpg"},
{id:2075,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/6a-1.jpg"},
{id:2076,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/6b.jpg"},
{id:2077,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/7-1.jpg"},
{id:2078,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/7a-1.jpg"},
{id:2079,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/8a-1.jpg"},
{id:2080,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/8e-1.jpg"},
{id:2081,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/9b-1.jpg"},
{id:2082,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/9c-1.jpg"},
{id:2083,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/10-1.jpg"},
{id:2084,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/10a.jpg"},
{id:2085,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/11-1.jpg"},
{id:2086,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/11b-1.jpg"},
{id:2087,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/12-1.jpg"},
{id:2088,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/12c-1.jpg"},
{id:2089,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/13-1.jpg"},
{id:2090,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/13C-1.jpg"},
{id:2091,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/I-am.jpg"},
{id:2092,guid:"http://tuba-duba.com/wp-content/uploads/2016/03/instagram-logo.jpg"},
{id:2093,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/2M.jpg"},
{id:2094,guid:"http://tuba-duba.com/wp-content/uploads/2016/03/main_1.jpg"},
{id:2095,guid:"http://tuba-duba.com/wp-content/uploads/2016/03/main_2.jpg"},
{id:2096,guid:"http://tuba-duba.com/wp-content/uploads/2016/03/main_3.jpg"},
{id:2097,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/7-2.jpg"},
{id:2098,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/7a-2.jpg"},
{id:2099,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/8.jpg"},
{id:2100,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/8a-2.jpg"},
{id:2101,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/13b-1.jpg"},
{id:2102,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/13C-2.jpg"},
{id:2103,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/2-1.jpg"},
{id:2104,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/2a-1.jpg"},
{id:2105,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/2c.jpg"},
{id:2106,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/6a-2.jpg"},
{id:2107,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/6b-1.jpg"},
{id:2108,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/10-2.jpg"},
{id:2109,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/10a-1.jpg"},
{id:2110,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/7a-3.jpg"},
{id:2111,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/1-5-m.jpg"},
{id:2112,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/3-2.jpg"},
{id:2113,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/шапка-на-сайт-.jpg"},
{id:2114,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/zf2kMqs8jaY.jpg"},
{id:2115,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/cropped-zf2kMqs8jaY.jpg"},
{id:2116,guid:"http://tuba-duba.com/wp-content/uploads/2016/05/13278020_1035718899853683_861600388_n.jpg"},
{id:2117,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/6-1.jpg"},
{id:2118,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/9.jpg"},
{id:2119,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/13063447_1731036293779021_4895375757925909294_o.jpg"},
{id:2120,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/8-1.jpg"},
{id:2121,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/1.jpg"},
{id:2122,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/3.jpg"},
{id:2123,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/1-1.jpg"},
{id:2124,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/1-2.jpg"},
{id:2125,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/2.jpg"},
{id:2126,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/2-1.jpg"},
{id:2127,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/3-1.jpg"},
{id:2128,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/3-2.jpg"},
{id:2129,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/3-3.jpg"},
{id:2130,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/4.jpg"},
{id:2131,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/5.jpg"},
{id:2132,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/5-1.jpg"},
{id:2133,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/footer_img_r.jpg"},
{id:2134,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/6.jpg"},
{id:2135,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/7.jpg"},
{id:2136,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/5-2.jpg"},
{id:2137,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/istoriya-5.jpg"},
{id:2138,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/5-2.jpg"},
{id:2139,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/6-2.jpg"},
{id:2140,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/7-3.jpg"},
{id:2141,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/15-copy.jpg"},
{id:2142,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/16.jpg"},
{id:2143,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/Tuba-Duba_instruction.jpg"},
{id:2144,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/29.jpg"},
{id:2145,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/Tuba-Duba_instruction-1.jpg"},
{id:2146,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/15m.jpg"},
{id:2147,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/0a.jpg"},
{id:2148,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/1.jpg"},
{id:2149,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/180х180_.jpg"},
{id:2150,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/dp.jpg"},
{id:2151,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplates-kapushonom.jpg"},
{id:2152,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplates-kapushonom1.jpg"},
{id:2153,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplate.jpg"},
{id:2154,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplate1.jpg"},
{id:2155,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/Dlinnoeplate2.jpg"},
{id:2156,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/shirokoedlinnoe-plate.jpg"},
{id:2157,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/shirokoedlinnoe-plate1.jpg"},
{id:2158,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK1.jpg"},
{id:2159,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK2.jpg"},
{id:2160,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK3.jpg"},
{id:2161,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK5.jpg"},
{id:2162,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK6.jpg"},
{id:2163,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK7.jpg"},
{id:2164,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK8.jpg"},
{id:2165,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK9.jpg"},
{id:2166,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK10.jpg"},
{id:2167,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK11.jpg"},
{id:2168,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK12.jpg"},
{id:2169,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK13.jpg"},
{id:2170,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK14.jpg"},
{id:2171,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK15.jpg"},
{id:2172,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK16.jpg"},
{id:2173,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK17.jpg"},
{id:2174,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP1.jpg"},
{id:2175,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP2.jpg"},
{id:2176,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP3.jpg"},
{id:2177,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP4.jpg"},
{id:2178,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP5.jpg"},
{id:2179,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP6.jpg"},
{id:2180,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP7.jpg"},
{id:2181,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP8.jpg"},
{id:2182,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP9.jpg"},
{id:2183,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP10.jpg"},
{id:2184,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK0.jpg"},
{id:2185,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK1-1.jpg"},
{id:2186,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK3-1.jpg"},
{id:2187,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK4.jpg"},
{id:2188,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK5-1.jpg"},
{id:2189,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK6-1.jpg"},
{id:2190,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK7-1.jpg"},
{id:2191,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK8-1.jpg"},
{id:2192,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK9-1.jpg"},
{id:2193,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK10-1.jpg"},
{id:2194,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK11-1.jpg"},
{id:2195,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK12-1.jpg"},
{id:2196,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK13-1.jpg"},
{id:2197,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK14-1.jpg"},
{id:2198,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK15-1.jpg"},
{id:2199,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK16-1.jpg"},
{id:2200,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK17-1.jpg"},
{id:2201,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK18.jpg"},
{id:2202,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK19.jpg"},
{id:2203,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK20.jpg"},
{id:2204,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK21.jpg"},
{id:2205,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK22.jpg"},
{id:2206,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"},
{id:2207,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/2.-Bardo-factura.jpg"},
{id:2208,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"},
{id:2209,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"},
{id:2210,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"},
{id:2211,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"},
{id:2212,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/7.Vasilkoviy-factura.jpg"},
{id:2213,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"},
{id:2214,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"},
{id:2215,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"},
{id:2216,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/11.-BIRUZA-facryta.jpg"},
{id:2217,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-facryta.jpg"},
{id:2218,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"},
{id:2219,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"},
{id:2220,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura.jpg"},
{id:2221,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"},
{id:2222,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"},
{id:2223,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/18.Negno-kremoviy-factura.jpg"},
{id:2224,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/19.temno-seriy.jpg"},
{id:2225,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"},
{id:2226,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"},
{id:2227,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"},
{id:2228,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/23.Malahitoviy.jpg"},
{id:2229,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"},
{id:2230,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/13932973_1088930401199199_138885520_n.jpg"},
{id:2231,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"},
{id:2232,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"},
{id:2233,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP1SM.jpg"},
{id:2234,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP11SM.jpg"},
{id:2235,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP4-1.jpg"},
{id:2236,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK24.jpg"},
{id:2237,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK23.jpg"},
{id:2238,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD.jpg"},
{id:2239,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD2.jpg"},
{id:2240,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD3.jpg"},
{id:2241,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD4.jpg"},
{id:2242,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP12SM.jpg"},
{id:2243,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DPK25.jpg"},
{id:2244,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP13.jpg"},
{id:2245,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/TKAN.jpg"},
{id:2246,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/about-fabric.jpg"},
{id:2247,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/about-fabric.jpg"},
{id:2248,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP0.jpg"},
{id:2249,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP1-1.jpg"},
{id:2250,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP2-1.jpg"},
{id:2251,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP3-1.jpg"},
{id:2252,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP4-2.jpg"},
{id:2253,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP5-1.jpg"},
{id:2254,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP6-1.jpg"},
{id:2255,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP7-1.jpg"},
{id:2256,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP8-1.jpg"},
{id:2257,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP9-1.jpg"},
{id:2258,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP10-1.jpg"},
{id:2259,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP11.jpg"},
{id:2260,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP12.jpg"},
{id:2261,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP13-1.jpg"},
{id:2262,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP14.jpg"},
{id:2263,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP15.jpg"},
{id:2264,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP16.jpg"},
{id:2265,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP17.jpg"},
{id:2266,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/DP18.jpg"},
{id:2267,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD1.jpg"},
{id:2268,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD2-1.jpg"},
{id:2269,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD3-1.jpg"},
{id:2270,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD4-1.jpg"},
{id:2271,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD5.jpg"},
{id:2272,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD6.jpg"},
{id:2273,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/geltiy-Factura.jpg"},
{id:2274,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/limonniy-factura.jpg"},
{id:2275,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/negno-geltiy-Factura.jpg"},
{id:2276,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/Orangeviy-factura.jpg"},
{id:2277,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/Orangevo-geltiy-factura.jpg"},
{id:2278,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura-1.jpg"},
{id:2279,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura-1.jpg"},
{id:2280,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura-2.jpg"},
{id:2281,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/5-3.jpg"},
{id:2282,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/9.jpg"},
{id:2283,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/14.jpg"},
{id:2284,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/15.jpg"},
{id:2285,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"},
{id:2286,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/15m-1.jpg"},
{id:2287,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/17.jpg"},
{id:2288,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD2-2.jpg"},
{id:2289,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD3-2.jpg"},
{id:2290,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/SPD4-2.jpg"},
{id:2291,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait.jpg"},
{id:2292,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-2.jpg"},
{id:2293,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-3.jpg"},
{id:2294,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-3-1.jpg"},
{id:2295,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4.jpg"},
{id:2296,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-1.jpg"},
{id:2297,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-2.jpg"},
{id:2298,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-3.jpg"},
{id:2299,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-4-4.jpg"},
{id:2300,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-big.jpg"},
{id:2301,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/for-sait-big-1.jpg"},
{id:2302,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/caps.jpg"},
{id:2303,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/18.jpg"},
{id:2304,guid:"http://tuba-duba.com/wp-content/uploads/2016/04/DP2.jpg"},
{id:2305,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/сколько-ткани-нужно-на-платье-с-капюшоном.jpg"},
{id:2306,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/26-Morskoy-factura.jpg"},
{id:2307,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura.jpg"},
{id:2308,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/28.-violet-factura.jpg"},
{id:2309,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"},
{id:2310,guid:"http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"},
{id:2311,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy.jpg"},
{id:2312,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1.jpg"},
{id:2313,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1-1.jpg"},
{id:2314,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/BAklagan.jpg"},
{id:2315,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/BARDO.jpg"},
{id:2316,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Begeviy.jpg"},
{id:2317,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/beliy.jpg"},
{id:2318,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/biruza.jpg"},
{id:2319,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/cherniy.jpg"},
{id:2320,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/geltiy.jpg"},
{id:2321,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/KARMIN.jpg"},
{id:2322,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Krasniy.jpg"},
{id:2323,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/kremoviy.jpg"},
{id:2324,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Malahit.jpg"},
{id:2325,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Morskoy.jpg"},
{id:2326,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Myatniy.jpg"},
{id:2327,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Nebesniy.jpg"},
{id:2328,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Oliva.jpg"},
{id:2329,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Orangeviy.jpg"},
{id:2330,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Persikoviy.jpg"},
{id:2331,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/siniy.jpg"},
{id:2332,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1-2.jpg"},
{id:2333,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/svetlo-geltiy.jpg"},
{id:2334,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Svetlo-seriy.jpg"},
{id:2335,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/temno-korichneviy.jpg"},
{id:2336,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Temno-seriy.jpg"},
{id:2337,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Temno-siniy.jpg"},
{id:2338,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Temno-zel.jpg"},
{id:2339,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/terrakot.jpg"},
{id:2340,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Vasilkoviy.jpg"},
{id:2341,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/kievstar.jpg"},
{id:2342,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/life.jpg"},
{id:2343,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/MTS.jpg"},
{id:2344,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Vibeer.jpg"},
{id:2345,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/DPK1.jpg"},
{id:2346,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/DPK6.jpg"},
{id:2347,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/DPK3.jpg"},
{id:2348,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/DPK8.jpg"},
{id:2349,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/DP1.jpg"},
{id:2350,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/DP6.jpg"},
{id:2351,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/DP7.jpg"},
{id:2352,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/DP11.jpg"},
{id:2353,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/27.-morskoy-factura.jpg"},
{id:2354,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/Morskoy-1.jpg"},
{id:2355,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/slivoviy-1-3.jpg"},
{id:2356,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/photo-1.jpg"},
{id:2357,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/photo-3.jpg"},
{id:2358,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/RS-1.jpg"},
{id:2359,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/RS-2.jpg"},
{id:2360,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/RS-3.jpg"},
{id:2361,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/RS-4.jpg"},
{id:2362,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/RS-5.jpg"},
{id:2363,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/RS-6.jpg"},
{id:2364,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/RS-7.jpg"},
{id:2365,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"},
{id:2366,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"},
{id:2367,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/kirpichniy.jpg"},
{id:2368,guid:"http://tuba-duba.com/wp-content/uploads/2016/09/salatoviy.jpg"},
{id:2369,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/str.jpg"},
{id:2370,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DP1a.jpg"},
{id:2371,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DP3a.jpg"},
{id:2372,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DP4a.jpg"},
{id:2373,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DP6a.jpg"},
{id:2374,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DP7.jpg"},
{id:2375,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DP8.jpg"},
{id:2376,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPK1a.jpg"},
{id:2377,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPK2a.jpg"},
{id:2378,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPK3a.jpg"},
{id:2379,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPK4a.jpg"},
{id:2380,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPK5a.jpg"},
{id:2381,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPK6a.jpg"},
{id:2382,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/SP1.jpg"},
{id:2383,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/SP2.jpg"},
{id:2384,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/KPK1.jpg"},
{id:2385,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/KPK2.jpg"},
{id:2386,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/KPK2-1.jpg"},
{id:2387,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/SP1-1.jpg"},
{id:2388,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/SP2-1.jpg"},
{id:2389,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-2.jpg"},
{id:2390,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R.jpg"},
{id:2391,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-2-1.jpg"},
{id:2392,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-1.jpg"},
{id:2393,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DP-s-R-2-2.jpg"},
{id:2394,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews1.jpg"},
{id:2395,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews2.jpg"},
{id:2396,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews3.jpg"},
{id:2397,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews4.jpg"},
{id:2398,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews5.jpg"},
{id:2399,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews6.jpg"},
{id:2400,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/with-sleews7.jpg"},
{id:2401,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK1.jpg"},
{id:2402,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK2.jpg"},
{id:2403,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1.jpg"},
{id:2404,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2.jpg"},
{id:2405,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3.jpg"},
{id:2406,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood4.jpg"},
{id:2407,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5.jpg"},
{id:2408,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6.jpg"},
{id:2409,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood7.jpg"},
{id:2410,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK3.jpg"},
{id:2411,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK4.jpg"},
{id:2412,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood.jpg"},
{id:2413,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5-1.jpg"},
{id:2414,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6-1.jpg"},
{id:2415,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood8.jpg"},
{id:2416,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2-1.jpg"},
{id:2417,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3-1.jpg"},
{id:2418,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1-1.jpg"},
{id:2419,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK5.jpg"},
{id:2420,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK6.jpg"},
{id:2421,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK7.jpg"},
{id:2422,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK8.jpg"},
{id:2423,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK9.jpg"},
{id:2424,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood0.jpg"},
{id:2425,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood1.jpg"},
{id:2426,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood2.jpg"},
{id:2427,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood3.jpg"},
{id:2428,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood4.jpg"},
{id:2429,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood5.jpg"},
{id:2430,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood6.jpg"},
{id:2431,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood7.jpg"},
{id:2432,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood8.jpg"},
{id:2433,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1-2.jpg"},
{id:2434,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2-2.jpg"},
{id:2435,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3-2.jpg"},
{id:2436,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood4-1.jpg"},
{id:2437,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5-2.jpg"},
{id:2438,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6-2.jpg"},
{id:2439,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood7-1.jpg"},
{id:2440,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK10.jpg"},
{id:2441,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK11.jpg"},
{id:2442,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK12.jpg"},
{id:2443,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves1.jpg"},
{id:2444,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves2.jpg"},
{id:2445,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves3.jpg"},
{id:2446,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves4.jpg"},
{id:2447,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves5.jpg"},
{id:2448,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK13.jpg"},
{id:2449,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK14.jpg"},
{id:2450,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar1.jpg"},
{id:2451,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar2.jpg"},
{id:2452,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar3.jpg"},
{id:2453,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar4.jpg"},
{id:2454,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar5.jpg"},
{id:2455,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar6.jpg"},
{id:2456,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandcollar7.jpg"},
{id:2457,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves.jpg"},
{id:2458,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves1.jpg"},
{id:2459,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves2.jpg"},
{id:2460,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves3.jpg"},
{id:2461,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves5.jpg"},
{id:2462,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleeves6.jpg"},
{id:2463,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK15.jpg"},
{id:2464,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK16.jpg"},
{id:2465,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK17.jpg"},
{id:2466,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK18.jpg"},
{id:2467,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPsRK19.jpg"},
{id:2468,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar1.jpg"},
{id:2469,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar2.jpg"},
{id:2470,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar3.jpg"},
{id:2471,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar4.jpg"},
{id:2472,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar5.jpg"},
{id:2473,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/jacketwithsleevesandcollar6.jpg"},
{id:2474,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"},
{id:2475,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPK3.jpg"},
{id:2476,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/DPK8.jpg"},
{id:2477,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/grucheviy.jpg"},
{id:2478,guid:"http://tuba-duba.com/wp-content/uploads/2016/10/salatoviy.jpg"},
{id:2479,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/1.jpg"},
{id:2480,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/2.jpg"},
{id:2481,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/3.jpg"},
{id:2482,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/4.jpg"},
{id:2483,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/5.jpg"},
{id:2484,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/6.jpg"},
{id:2485,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/7.jpg"},
{id:2486,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/KPK1.jpg"},
{id:2487,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/KPK2.jpg"},
{id:2488,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/1-1.jpg"},
{id:2489,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/2-1.jpg"},
{id:2490,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/3-1.jpg"},
{id:2491,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/4-1.jpg"},
{id:2492,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/5-1.jpg"},
{id:2493,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/6-1.jpg"},
{id:2494,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/8.jpg"},
{id:2495,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/9.jpg"},
{id:2496,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/10.jpg"},
{id:2497,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/11.jpg"},
{id:2498,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/5-2.jpg"},
{id:2499,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/4-2.jpg"},
{id:2500,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/21.jpg"},
{id:2501,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/20.jpg"},
{id:2502,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/22.jpg"},
{id:2503,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/40.jpg"},
{id:2504,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/46.jpg"},
{id:2505,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/55.jpg"},
{id:2506,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/51.jpg"},
{id:2507,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/isu3GclC56c.jpg"},
{id:2508,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/9-1.jpg"},
{id:2509,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/16.jpg"},
{id:2510,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/81d5yRVpSQE.jpg"},
{id:2511,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/25.jpg"},
{id:2512,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/24.jpg"},
{id:2513,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/PpCNilzF3LE.jpg"},
{id:2514,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/Z8_nWWi2Wcs.jpg"},
{id:2515,guid:"http://tuba-duba.com/wp-content/uploads/2016/07/32.jpg"},
{id:2516,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/1-2.jpg"},
{id:2517,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/2-2.jpg"},
{id:2518,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/3-2.jpg"},
{id:2519,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/4-3.jpg"},
{id:2520,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/5-3.jpg"},
{id:2521,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/6-2.jpg"},
{id:2522,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/7-1.jpg"},
{id:2523,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/1-3.jpg"},
{id:2524,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/2-3.jpg"},
{id:2525,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/3-3.jpg"},
{id:2526,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/4-4.jpg"},
{id:2527,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/5-4.jpg"},
{id:2528,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/6-3.jpg"},
{id:2529,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/8-1.jpg"},
{id:2530,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/9-1.jpg"},
{id:2531,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/10-1.jpg"},
{id:2532,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/11-1.jpg"},
{id:2533,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/dresswithhood.jpg"},
{id:2534,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/longangoradress.jpg"},
{id:2535,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/longmiddle-dress.jpg"},
{id:2536,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/Longskirt.jpg"},
{id:2537,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/shortdress.jpg"},
{id:2538,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/shortdresswithleaves.jpg"},
{id:2539,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/warnundress.jpg"},
{id:2540,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/1.Bardo_.jpg"},
{id:2541,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/2.Grusha.jpg"},
{id:2542,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/3.Zeleniy.jpg"},
{id:2543,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/4.Krasniy.jpg"},
{id:2544,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/5.Pepelniy.jpg"},
{id:2545,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/6.-Svetlo-seriy.jpg"},
{id:2546,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/7.Temno-zeleniy.jpg"},
{id:2547,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/8.Temno-korichneviy.jpg"},
{id:2548,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/9.Temno-siniy.jpg"},
{id:2549,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/10.-Fioletoviy.jpg"},
{id:2550,guid:"http://tuba-duba.com/wp-content/uploads/2016/11/11.Cherniy.jpg"},
{id:2551,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/1.бардо.jpg"},
{id:2552,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/2.груша.jpg"},
{id:2553,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/3.зеленый.jpg"},
{id:2554,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/4.красный.jpg"},
{id:2555,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/5.гранит.jpg"},
{id:2556,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/6.svetlo-seriy.jpg"},
{id:2557,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/7.темно-серый.jpg"},
{id:2558,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/олива.jpg"},
{id:2559,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/темная-вишня.jpg"},
{id:2560,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/темно-коричневый.jpg"},
{id:2561,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/темно-синий.jpg"},
{id:2562,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/фиолет.jpg"},
{id:2563,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/черный.jpg"},
{id:2564,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/1.Bardo_.jpg"},
{id:2565,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/2.Grusha.jpg"},
{id:2566,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/3.Zeleniy.jpg"},
{id:2567,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/4.Krasniy.jpg"},
{id:2568,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/5.Granit.jpg"},
{id:2569,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/6.-Svetlo-seriy.jpg"},
{id:2570,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/7.seriy_.jpg"},
{id:2571,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/8.Temno-korichneviy.jpg"},
{id:2572,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/9.Temno-siniy.jpg"},
{id:2573,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/10.-Fioletoviy.jpg"},
{id:2574,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/11.Cherniy.jpg"},
{id:2575,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/12.-temnaya-vishnya.jpg"},
{id:2576,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/13.Oliva_.jpg"},
{id:2577,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/DPAngora.jpg"},
{id:2578,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/DPSK.jpg"},
{id:2579,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum.jpg"},
{id:2580,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/KP35.jpg"},
{id:2581,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/KPsr.jpg"},
{id:2582,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Ubka.jpg"},
{id:2583,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK.jpg"},
{id:2584,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/shortdress.jpg"},
{id:2585,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/14.jpg"},
{id:2586,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/15.jpg"},
{id:2587,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/16.jpg"},
{id:2588,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/17.jpg"},
{id:2589,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/бардо.jpg"},
{id:2590,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/коричневый.jpg"},
{id:2591,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/малиновый.jpg"},
{id:2592,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/морской.jpg"},
{id:2593,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/нежный.jpg"},
{id:2594,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/персик.jpg"},
{id:2595,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Синий.jpg"},
{id:2596,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/bardo.jpg"},
{id:2597,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Korichneviy.jpg"},
{id:2598,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Malinoviy.jpg"},
{id:2599,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Morskoy.jpg"},
{id:2600,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Negniy.jpg"},
{id:2601,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Persik.jpg"},
{id:2602,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Siniy.jpg"},
{id:2603,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/5.гранит-1.jpg"},
{id:2604,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/14-1.jpg"},
{id:2605,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/15-1.jpg"},
{id:2606,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/16-1.jpg"},
{id:2607,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/17-1.jpg"},
{id:2608,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Bardo.jpg"},
{id:2609,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Korichneviy-1.jpg"},
{id:2610,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/malinoviy.jpg"},
{id:2611,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Morskoy-1.jpg"},
{id:2612,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Negniy-1.jpg"},
{id:2613,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Persik-1.jpg"},
{id:2614,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Siniy-1.jpg"},
{id:2615,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt.jpg"},
{id:2616,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/longmiddle-dress.jpg"},
{id:2617,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/shortdresswithleaves.jpg"},
{id:2618,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/longangoradress.jpg"},
{id:2619,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/warnundress.jpg"},
{id:2620,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/18.jpg"},
{id:2621,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/19.jpg"},
{id:2622,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/20.jpg"},
{id:2623,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/21.jpg"},
{id:2624,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/22.jpg"},
{id:2625,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/23.jpg"},
{id:2626,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/24.jpg"},
{id:2627,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/25.jpg"},
{id:2628,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/26.jpg"},
{id:2629,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/dresswithhood1.jpg"},
{id:2630,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/dresswithhoodwithoutleaves.jpg"},
{id:2631,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt2.jpg"},
{id:2632,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/shortdress-2.jpg"},
{id:2633,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/dpskir-1.jpg"},
{id:2634,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/dpskir.jpg"},
{id:2635,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/dpskwl.jpg"},
{id:2636,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum-2.jpg"},
{id:2637,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/KPsr-2.jpg"},
{id:2638,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Ubka1.jpg"},
{id:2639,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK1.jpg"},
{id:2640,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/KP351.jpg"},
{id:2641,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum-2-1.jpg"},
{id:2642,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Kostum-1.jpg"},
{id:2643,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS.jpg"},
{id:2644,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS1.jpg"},
{id:2645,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS2.jpg"},
{id:2646,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt2-1.jpg"},
{id:2647,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/shortdress-2-1.jpg"},
{id:2648,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/shortdresswithleaves-1.jpg"},
{id:2649,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/warnundress1.jpg"},
{id:2650,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/1.-Temno-korichneviy.jpg"},
{id:2651,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/2.Molochniy.jpg"},
{id:2652,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/3.Pilno-goluboy.jpg"},
{id:2653,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/4.Temno-siniy.jpg"},
{id:2654,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/5.Cherniy.jpg"},
{id:2655,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/6.Fioletoviy.jpg"},
{id:2656,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/7.Gorchichniy.jpg"},
{id:2657,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/8.Nemno-zeleniy.jpg"},
{id:2658,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/9.Temno-terrakotoviy.jpg"},
{id:2659,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/18-1.jpg"},
{id:2660,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/19-1.jpg"},
{id:2661,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/20-1.jpg"},
{id:2662,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/21-1.jpg"},
{id:2663,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/22-1.jpg"},
{id:2664,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/23-1.jpg"},
{id:2665,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/24-1.jpg"},
{id:2666,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/25-1.jpg"},
{id:2667,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/26-1.jpg"},
{id:2668,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/longangoradress1.jpg"},
{id:2669,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/longmiddle-dress-1.jpg"},
{id:2670,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/DPAngora1.jpg"},
{id:2671,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/DPSK1.jpg"},
{id:2672,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK-1.jpg"},
{id:2673,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/КPSK1-1.jpg"},
{id:2674,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/1111.jpg"},
{id:2675,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/1.jpg"},
{id:2676,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/10.djins_.jpg"},
{id:2677,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/11.temno-seriy.jpg"},
{id:2678,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/12.Grusheviy.jpg"},
{id:2679,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/13.Siren_.jpg"},
{id:2680,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/14.Krasniy.jpg"},
{id:2681,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/27.jpg"},
{id:2682,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/28.jpg"},
{id:2683,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/29.jpg"},
{id:2684,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/30.jpg"},
{id:2685,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/31.jpg"},
{id:2686,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/7.Gorchichniy-1.jpg"},
{id:2687,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/2.Molochniy-1.jpg"},
{id:2688,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/32.jpg"},
{id:2689,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/21-2.jpg"},
{id:2690,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy.jpg"},
{id:2691,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/geltiy.jpg"},
{id:2692,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy.jpg"},
{id:2693,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/rozoviy.jpg"},
{id:2694,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/seriy.jpg"},
{id:2695,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/sero-molochniy.jpg"},
{id:2696,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/svSeriy.jpg"},
{id:2697,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy.jpg"},
{id:2698,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy-1.jpg"},
{id:2699,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/geltiy-1.jpg"},
{id:2700,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy-1.jpg"},
{id:2701,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/rozoviy-1.jpg"},
{id:2702,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/seriy-1.jpg"},
{id:2703,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/sero-molochniy-1.jpg"},
{id:2704,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/svSeriy-1.jpg"},
{id:2705,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy-1.jpg"},
{id:2706,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy-2.jpg"},
{id:2707,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/geltiy-2.jpg"},
{id:2708,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy-2.jpg"},
{id:2709,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/rozoviy-2.jpg"},
{id:2710,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/seriy-2.jpg"},
{id:2711,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/sero-molochniy-2.jpg"},
{id:2712,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/svSeriy-2.jpg"},
{id:2713,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy-2.jpg"},
{id:2714,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy-3.jpg"},
{id:2715,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Geltiy.jpg"},
{id:2716,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy-3.jpg"},
{id:2717,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Rozoviy.jpg"},
{id:2718,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Seriy.jpg"},
{id:2719,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Sero-MOlochniy.jpg"},
{id:2720,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/SvSeriy.jpg"},
{id:2721,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy-3.jpg"},
{id:2722,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt2-2.jpg"},
{id:2723,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/SKARF.jpg"},
{id:2724,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/1-1.jpg"},
{id:2725,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/skarf.jpg"},
{id:2726,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/бежевый.jpg"},
{id:2727,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/гранит.jpg"},
{id:2728,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/коричневый-1.jpg"},
{id:2729,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/ночной.jpg"},
{id:2730,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/розовый.jpg"},
{id:2731,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/светлый.jpg"},
{id:2732,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/сирень.jpg"},
{id:2733,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/бежевый-1.jpg"},
{id:2734,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/гранит-1.jpg"},
{id:2735,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/коричневый-2.jpg"},
{id:2736,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/розовый-1.jpg"},
{id:2737,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/светлый-1.jpg"},
{id:2738,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/сирень-1.jpg"},
{id:2739,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/ночной-1.jpg"},
{id:2740,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/ночной-2.jpg"},
{id:2741,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/розовый-2.jpg"},
{id:2742,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/светлый-2.jpg"},
{id:2743,guid:"http://tuba-duba.com/wp-content/uploads/2016/12/сирень-2.jpg"},
{id:2744,guid:"http://tuba-duba.com/wp-content/uploads/2017/01/8.jpg"},
{id:2745,guid:"http://tuba-duba.com/wp-content/uploads/2017/01/9.jpg"},
{id:2746,guid:"http://tuba-duba.com/wp-content/uploads/2017/01/14.rijiy_.jpg"},
{id:2747,guid:"http://tuba-duba.com/wp-content/uploads/2017/01/15.djins_.jpg"},
{id:2748,guid:"http://tuba-duba.com/wp-content/uploads/2016/03/1.jpg"},
{id:2749,guid:"http://tuba-duba.com/wp-content/uploads/2016/03/Banner_spring_dreams_flower_3.jpg"},
{id:2750,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/banner-3.jpg"},
{id:2751,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/banner-1.jpg"},
{id:2752,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/banner-2.jpg"},
{id:2753,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/31.serebristiy.jpg"},
{id:2754,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/32.malinoviy.jpg"},
{id:2755,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/33.koraloviy.jpg"},
{id:2756,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/34.izumrudniy.jpg"},
{id:2757,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/35.насыщенный-желтый.jpg"},
{id:2758,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/33.koraloviy-1.jpg"},
{id:2759,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/19.temno-seriy.jpg"},
{id:2760,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/colnechniy.jpg"},
{id:2761,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/izumrudniy.jpg"},
{id:2762,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/koraloviy.jpg"},
{id:2763,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/malinoviy.jpg"},
{id:2764,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/serebristiu.jpg"},
{id:2765,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/Biruza.jpg"},
{id:2766,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy.jpg"},
{id:2767,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/36.lazurniy.jpg"},
{id:2768,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/37.biruza.jpg"},
{id:2769,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/37.biruza-1.jpg"},
{id:2770,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/Malahit.jpg"},
{id:2771,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/23.Malahitoviy.jpg"},
{id:2772,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/23.Malahitoviy-1.jpg"},
{id:2773,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/Biruza-1.jpg"},
{id:2774,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy-1.jpg"},
{id:2775,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy-2.jpg"},
{id:2776,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/38.siren_.jpg"},
{id:2777,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/siren.jpg"},
{id:2778,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/temnoe-bardo.jpg"},
{id:2779,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/39-temnoe-bardo.jpg"},
{id:2780,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/32-malinoviy.jpg"},
{id:2781,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/33koraloviy.jpg"},
{id:2782,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/34-izumrudniy.jpg"},
{id:2783,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/35-nasischenniya-geltiy.jpg"},
{id:2784,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/colnechniy-1.jpg"},
{id:2785,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/izumrudniy-1.jpg"},
{id:2786,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/koraloviy-1.jpg"},
{id:2787,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/malinoviy-1.jpg"},
{id:2788,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/31.serebristiy-1.jpg"},
{id:2789,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/DP1.jpg"},
{id:2790,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/DP2.jpg"},
{id:2791,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/DP3.jpg"},
{id:2792,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/DP4.jpg"},
{id:2793,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/DP5.jpg"},
{id:2794,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/DP6.jpg"},
{id:2795,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/DP8.jpg"},
{id:2796,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/DP12.jpg"},
{id:2797,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/DP17.jpg"},
{id:2798,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/DP18.jpg"},
{id:2799,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/KPK1.jpg"},
{id:2800,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/KPK2.jpg"},
{id:2801,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/41.jpg"},
{id:2802,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/34-izumrudniy-1.jpg"},
{id:2803,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/34-izumrudniy-2.jpg"},
{id:2804,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/шягткгв.jpg"},
{id:2805,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy-3.jpg"},
{id:2806,guid:"http://tuba-duba.com/wp-content/uploads/2017/03/26.-violet-factura.jpg"},
{id:2807,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_01.jpg"},
{id:2808,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_02.jpg"},
{id:2809,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03.jpg"},
{id:2810,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03-1.jpg"},
{id:2811,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_04.jpg"},
{id:2812,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_05.jpg"},
{id:2813,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_06.jpg"},
{id:2814,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_07.jpg"},
{id:2815,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_08.jpg"},
{id:2816,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_09.jpg"},
{id:2817,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_10.jpg"},
{id:2818,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_11.jpg"},
{id:2819,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_12.jpg"},
{id:2820,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_13.jpg"},
{id:2821,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_14.jpg"},
{id:2822,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_15.jpg"},
{id:2823,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_16.jpg"},
{id:2824,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_17.jpg"},
{id:2825,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_18.jpg"},
{id:2826,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_19.jpg"},
{id:2827,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_20.jpg"},
{id:2828,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_21.jpg"},
{id:2829,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_22.jpg"},
{id:2830,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_01-1.jpg"},
{id:2831,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_02-1.jpg"},
{id:2832,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_04-1.jpg"},
{id:2833,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_05-1.jpg"},
{id:2834,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_07-1.jpg"},
{id:2835,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_08-1.jpg"},
{id:2836,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_10-1.jpg"},
{id:2837,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_11-1.jpg"},
{id:2838,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_13-1.jpg"},
{id:2839,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_14-1.jpg"},
{id:2840,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_15-1.jpg"},
{id:2841,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_16-1.jpg"},
{id:2842,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_18-1.jpg"},
{id:2843,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_19-1.jpg"},
{id:2844,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_20-1.jpg"},
{id:2845,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_21-1.jpg"},
{id:2846,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_01-2.jpg"},
{id:2847,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_02-2.jpg"},
{id:2848,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03-2.jpg"},
{id:2849,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03-3.jpg"},
{id:2850,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_04-2.jpg"},
{id:2851,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/sleep_05-2.jpg"},
{id:2852,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/40rosovaya.jpg"},
{id:2853,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/roza.jpg"},
{id:2854,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/Malahit.jpg"},
{id:2855,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/Biruza.jpg"},
{id:2856,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/37.biruza.jpg"},
{id:2857,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/IMG_9849.jpg"},
{id:2858,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/12.jpg"},
{id:2859,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/2.-Bardo-factura_sh.jpg"},
{id:2860,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/3.-Baklagan-factura_sh.jpg"},
{id:2861,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/4.-Krasniy-factura_sh.jpg"},
{id:2862,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/5.Oliva-factura_sh.jpg"},
{id:2863,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/9.temno-siniy_sh.jpg"},
{id:2864,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/18.cherniy-factura_sh.jpg"},
{id:2865,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/Baklagan_sh.jpg"},
{id:2866,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/bardo_sh.jpg"},
{id:2867,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/cherniy_sh.jpg"},
{id:2868,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/Krasniy_sh.jpg"},
{id:2869,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/oivkoviy_sh.jpg"},
{id:2870,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/temno-siniy_sh.jpg"},
{id:2871,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/6a.jpg"},
{id:2872,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/7a.jpg"},
{id:2873,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/8a.jpg"},
{id:2874,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/14a.jpg"},
{id:2875,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/40.jpg"},
{id:2876,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/43.jpg"},
{id:2877,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/48.jpg"},
{id:2878,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/50.jpg"},
{id:2879,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/53.jpg"},
{id:2880,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/65.jpg"},
{id:2881,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/21.jpg"},
{id:2882,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/22.jpg"},
{id:2883,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/23.jpg"},
{id:2884,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/2a.jpg"},
{id:2885,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/3.jpg"},
{id:2886,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/4a.jpg"},
{id:2887,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/5a.jpg"},
{id:2888,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/9a.jpg"},
{id:2889,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/10a.jpg"},
{id:2890,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/12a.jpg"},
{id:2891,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/33.jpg"},
{id:2892,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/55.jpg"},
{id:2893,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/57.jpg"},
{id:2894,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/59.jpg"},
{id:2895,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/16.jpg"},
{id:2896,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/24.jpg"},
{id:2897,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/25.jpg"},
{id:2898,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/27.jpg"},
{id:2899,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/29.jpg"},
{id:2900,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/15.jpg"},
{id:2901,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/37.jpg"},
{id:2902,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/2¦-.jpg"},
{id:2903,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/5¦-.jpg"},
{id:2904,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/22-1.jpg"},
{id:2905,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/25-1.jpg"},
{id:2906,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/28.jpg"},
{id:2907,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/33-1.jpg"},
{id:2908,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/37-1.jpg"},
{id:2909,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/57-1.jpg"},
{id:2910,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/84.jpg"},
{id:2911,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/131.jpg"},
{id:2912,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/9275.jpg"},
{id:2913,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/9315.jpg"},
{id:2914,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/131-1.jpg"},
{id:2915,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/бело-вишневая-полоска.jpg"},
{id:2916,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/бело-красная-полоска.jpg"},
{id:2917,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/голубой.jpg"},
{id:2918,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/нежно-лиловый.jpg"},
{id:2919,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/светло-коричневый.jpg"},
{id:2920,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/сизый.jpg"},
{id:2921,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/темно-лазурный.jpg"},
{id:2922,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/темно-лазурный-small.jpg"},
{id:2923,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/бело-вишневая-полоска-small.jpg"},
{id:2924,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/бело-красная-полоска-small.jpg"},
{id:2925,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/голубой-small.jpg"},
{id:2926,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/нежно-лиловый-small.jpg"},
{id:2927,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/светло-коричневый-small.jpg"},
{id:2928,guid:"http://tuba-duba.com/wp-content/uploads/2017/04/сизый-small.jpg"},
{id:2929,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/красно-бордовая.jpg"},
{id:2930,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/красно-сине-белая.jpg"},
{id:2931,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/оранжево-желто-голубая.jpg"},
{id:2932,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/серо-белая.jpg"},
{id:2933,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/сине-белая.jpg"},
{id:2934,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/сине-серая.jpg"},
{id:2935,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/черно-белая.jpg"},
{id:2936,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/красно-бордовая-1.jpg"},
{id:2937,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/красно-сине-белая-1.jpg"},
{id:2938,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/оранжево-желто-голубая-1.jpg"},
{id:2939,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/серо-белая-1.jpg"},
{id:2940,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/сине-белая-1.jpg"},
{id:2941,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/сине-серая-1.jpg"},
{id:2942,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/черно-белая-1.jpg"},
{id:2943,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/баклажан.jpg"},
{id:2944,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/бордо.jpg"},
{id:2945,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/вишневый.jpg"},
{id:2946,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/джинс.jpg"},
{id:2947,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/морковный.jpg"},
{id:2948,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/синий.jpg"},
{id:2949,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/темно-коричневый.jpg"},
{id:2950,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/темно-серый.jpg"},
{id:2951,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/темно-синий.jpg"},
{id:2952,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/баклажан-1.jpg"},
{id:2953,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/бордо-1.jpg"},
{id:2954,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/вишневый-1.jpg"},
{id:2955,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/джинс-1.jpg"},
{id:2956,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/морковный-1.jpg"},
{id:2957,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/синий-1.jpg"},
{id:2958,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/темно-коричневый-1.jpg"},
{id:2959,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/темно-серый-1.jpg"},
{id:2960,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/темно-синий-1.jpg"},
{id:2961,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/67.jpg"},
{id:2962,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/68.jpg"},
{id:2963,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/70.jpg"},
{id:2964,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/72.jpg"},
{id:2965,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/73.jpg"},
{id:2966,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/88.jpg"},
{id:2967,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/92.jpg"},
{id:2968,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/93.jpg"},
{id:2969,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/94.jpg"},
{id:2970,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/95.jpg"},
{id:2971,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/98.jpg"},
{id:2972,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/100.jpg"},
{id:2973,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/104.jpg"},
{id:2974,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/106.jpg"},
{id:2975,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/1.jpg"},
{id:2976,guid:"http://tuba-duba.com/wp-content/uploads/2017/05/2.jpg"},
{id:2977,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/1.jpg"},
{id:2978,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/2.jpg"},
{id:2979,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/3.jpg"},
{id:2980,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/4.jpg"},
{id:2981,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/5.jpg"},
{id:2982,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/6.jpg"},
{id:2983,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/7.jpg"},
{id:2984,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/8.jpg"},
{id:2985,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/9.jpg"},
{id:2986,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/10.jpg"},
{id:2987,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/11.jpg"},
{id:2988,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/12.jpg"},
{id:2989,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/13.jpg"},
{id:2990,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/14.jpg"},
{id:2991,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/15.jpg"},
{id:2992,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/1-1.jpg"},
{id:2993,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/2-1.jpg"},
{id:2994,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/3-1.jpg"},
{id:2995,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/4-1.jpg"},
{id:2996,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/5-1.jpg"},
{id:2997,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/6-1.jpg"},
{id:2998,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/7-1.jpg"},
{id:2999,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/белая-полоска-смал.jpg"},
{id:3000,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/полоска-белая.jpg"},
{id:3001,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/темно-синий.jpg"},
{id:3002,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/полоска-белая-1.jpg"},
{id:3003,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/темно-синий-смал.jpg"},
{id:3004,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/IMG_3021.jpg"},
{id:3005,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/океан-эльзы.jpg"},
{id:3006,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/лазурный.jpg"},
{id:3007,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/темно-синий-1.jpg"},
{id:3008,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/cherniya.jpg"},
{id:3009,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/geltiy.jpg"},
{id:3010,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/izumrud.jpg"},
{id:3011,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/krasniy.jpg"},
{id:3012,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/morkovniy.jpg"},
{id:3013,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/nejniy-choko.jpg"},
{id:3014,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/salatoviy.jpg"},
{id:3015,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy.jpg"},
{id:3016,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/ultramarin.jpg"},
{id:3017,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/cherniy.jpg"},
{id:3018,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/elektrik.jpg"},
{id:3019,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/izumrud-1.jpg"},
{id:3020,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/jeltiy.jpg"},
{id:3021,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/kofe.jpg"},
{id:3022,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/krasniy-1.jpg"},
{id:3023,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/salatoviy-1.jpg"},
{id:3024,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy-1.jpg"},
{id:3025,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/morkobvniy.jpg"},
{id:3026,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/molochniya.jpg"},
{id:3027,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/siniy.jpg"},
{id:3028,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/molochniy.jpg"},
{id:3029,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/siniy-1.jpg"},
{id:3030,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/29.jpg"},
{id:3031,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/31.jpg"},
{id:3032,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/32.jpg"},
{id:3033,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/33.jpg"},
{id:3034,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/34.jpg"},
{id:3035,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/35.jpg"},
{id:3036,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/RAZMERY.jpg"},
{id:3037,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/RAZMERY-1.jpg"},
{id:3038,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/04.jpg"},
{id:3039,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/05.jpg"},
{id:3040,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1725ш.jpg"},
{id:3041,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1729ш.jpg"},
{id:3042,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1733ш.jpg"},
{id:3043,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1736ш.jpg"},
{id:3044,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_2045ш.jpg"},
{id:3045,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_2046ш.jpg"},
{id:3046,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/1-2.jpg"},
{id:3047,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/2-2.jpg"},
{id:3048,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/3-2.jpg"},
{id:3049,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/4-2.jpg"},
{id:3050,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/5-2.jpg"},
{id:3051,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/6-2.jpg"},
{id:3052,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/7-2.jpg"},
{id:3053,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/8-1.jpg"},
{id:3054,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/12-1.jpg"},
{id:3055,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/13-1.jpg"},
{id:3056,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/DSC_1909ш.jpg"},
{id:3057,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/9-1.jpg"},
{id:3058,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/10-1.jpg"},
{id:3059,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/11-1.jpg"},
{id:3060,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/12-2.jpg"},
{id:3061,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/50.jpg"},
{id:3062,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/51.jpg"},
{id:3063,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/52.jpg"},
{id:3064,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/53.jpg"},
{id:3065,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/54.jpg"},
{id:3066,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/55.jpg"},
{id:3067,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/12-3.jpg"},
{id:3068,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/13-2.jpg"},
{id:3069,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/15-1.jpg"},
{id:3070,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/16.jpg"},
{id:3071,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/17.jpg"},
{id:3072,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/18.jpg"},
{id:3073,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/70.jpg"},
{id:3074,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/71.jpg"},
{id:3075,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/geltiy-persikoviy.jpg"},
{id:3076,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudniya-salat.jpg"},
{id:3077,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/molochno-kofeiniy.jpg"},
{id:3078,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudniy-salat.jpg"},
{id:3079,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/jelto-oranjeviya.jpg"},
{id:3080,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/kofe-s-molokom.jpg"},
{id:3081,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudno-cherniy.jpg"},
{id:3082,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy-krasniy.jpg"},
{id:3083,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/izumrudno-cherniy-1.jpg"},
{id:3084,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/sine-krasniy.jpg"},
{id:3085,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/sine-temnosiniy.jpg"},
{id:3086,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/sine-temnosiniy-1.jpg"},
{id:3087,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/sine-temnosiniy-2.jpg"},
{id:3088,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/18-1.jpg"},
{id:3089,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/20.jpg"},
{id:3090,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/21.jpg"},
{id:3091,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/22.jpg"},
{id:3092,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/24.jpg"},
{id:3093,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/36.jpg"},
{id:3094,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/37.jpg"},
{id:3095,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/38.jpg"},
{id:3096,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/39.jpg"},
{id:3097,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/23.jpg"},
{id:3098,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/24-1.jpg"},
{id:3099,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/25.jpg"},
{id:3100,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Ahimsa1.jpg"},
{id:3101,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Ahimsa2.jpg"},
{id:3102,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha1.jpg"},
{id:3103,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha2.jpg"},
{id:3104,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Ardjava1.jpg"},
{id:3105,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Arjava2.jpg"},
{id:3106,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha1-1.jpg"},
{id:3107,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha2-1.jpg"},
{id:3108,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Ardjava1-1.jpg"},
{id:3109,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Arjava2-1.jpg"},
{id:3110,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Asteya1.jpg"},
{id:3111,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Asteya2.jpg"},
{id:3112,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Brahmacharya.jpg"},
{id:3113,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Brahmacharya1.jpg"},
{id:3114,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/daya-1.jpg"},
{id:3115,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/daya2.jpg"},
{id:3116,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/dHRITI1.jpg"},
{id:3117,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/dhriti2.jpg"},
{id:3118,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Kshama1.jpg"},
{id:3119,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Kshama2.jpg"},
{id:3120,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/mitahara1.jpg"},
{id:3121,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/mitahara2.jpg"},
{id:3122,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/satya1.jpg"},
{id:3123,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/satya2.jpg"},
{id:3124,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/shaucha1.jpg"},
{id:3125,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/shaucha2.jpg"},
{id:3126,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Kshama2-1.jpg"},
{id:3127,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/32-1.jpg"},
{id:3128,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/33-1.jpg"},
{id:3129,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/34-1.jpg"},
{id:3130,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/36-1.jpg"},
{id:3131,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/44.jpg"},
{id:3132,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/46.jpg"},
{id:3133,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/47.jpg"},
{id:3134,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/chernj-beliy.jpg"},
{id:3135,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/cherno-salat.jpg"},
{id:3136,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/cherno-beliy.jpg"},
{id:3137,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/cherno-salat-1.jpg"},
{id:3138,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/41.jpg"},
{id:3139,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/42.jpg"},
{id:3140,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/43.jpg"},
{id:3141,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/45.jpg"},
{id:3142,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/60.jpg"},
{id:3143,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/63.jpg"},
{id:3144,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Ardjava1-2.jpg"},
{id:3145,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Tuba_Duba_DHARMA_3а.jpg"},
{id:3146,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/Tuba_Duba_DHARMA.jpg"},
{id:3147,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/1Tuba_Duba_DHARMA.jpg"},
{id:3148,guid:"http://tuba-duba.com/wp-content/uploads/2017/06/1Tuba_Duba_DHARMA_3а.jpg"}];


var content = {
  "colorCodes": [
    {
      "id": "персиковый",
      "path": "abrikosoviy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/22.-Abricosoviy-factura.jpg"
    },
    {
      "id": "баклажановый",
      "path": "baklagan.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/3.-Baklagan-factura.jpg"
    },
    {
      "id": "бежевый",
      "path": "begeviy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/12.-Begeviy-factura.jpg"
    },
    {
      "id": "белый",
      "path": "beliy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/17.Beliy-factura.jpg"
    },
    {
      "id": "черный",
      "path": "cherniy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/18.cherniy-factura.jpg"
    },
    {
      "id": "грушевый",
      "path": "grusheviy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/09/28.-Kirpichniy-factura.jpg"
    },
    {
      "id": "желтый",
      "path": "jeltiy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/14.geltiy-facryta.jpg"
    },
    {
      "id": "карминовый",
      "path": "karmin.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/1.KARMIN-facryta.jpg"
    },
    {
      "id": "красный",
      "path": "krasniy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/4.-Krasniy-factura.jpg"
    },
    {
      "id": "малахитовый",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/Malahit.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/03/23.Malahitoviy.jpg"
    },
    {
      "id": "морской",
      "path": "morskoy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/27.-morskoy-factura-1.jpg"
    },
    {
      "id": "мятный",
      "path": "myatniy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/24.-Negno-zeleniy.jpg"
    },
    {
      "id": "небесный",
      "path": "nebesniy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/8.nebesniy-facryta.jpg"
    },
    {
      "id": "оливковый",
      "path": "olivkoviy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/5.Oliva-factura.jpg"
    },
    {
      "id": "оранжевый",
      "path": "oranjeviy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/20.-Orangeviy.jpg"
    },
    {
      "id": "салатовый",
      "path": "salatoviy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/09/29.salatoviy.jpg"
    },
    {
      "id": "синий",
      "path": "siniy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/10.SINIY-factura.jpg"
    },
    {
      "id": "сливовый",
      "path": "slivoviy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/26.-violet-factura.jpg"
    },
    {
      "id": "светло-желтый",
      "path": "svetlo-jelt.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/16.-Svetlo-jeltiy-factura-1.jpg"
    },
    {
      "id": "светло-серый",
      "path": "svetlo-seriy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/21.Svetlo-seriy-factura.jpg"
    },
    {
      "id": "темно-коричневый",
      "path": "temno-korich.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/13.Temno-korichneviy-facryta.jpg"
    },
    {
      "id": "темно-серый",
      "path": "temno-seriy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/03/19.temno-seriy.jpg"
    },
    {
      "id": "темно-синий",
      "path": "temno-siniy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/9.temno-siniy.jpg"
    },
    {
      "id": "темно-зеленый",
      "path": "temno-zel.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/6.Zeleniy-factura.jpg"
    },
    {
      "id": "терракот",
      "path": "terrakot.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/25.Shokolad-factura.jpg"
    },
    {
      "id": "насыщенный терракот",
      "path": "/wp-content/uploads/2016/10/30.temniy-terrakot.jpg",
      "path_big": "/wp-content/uploads/2016/10/30.temniy-terrakot.jpg"
    },
    {
      "id": "лимонный",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/08/limonniy-factura.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/limonniy-factura.jpg"
    },
    {
      "id": "нежно-желтый",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/08/negno-geltiy-Factura.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/08/negno-geltiy-Factura.jpg"
    },
    {
      "id": "оливковый(теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/олива.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/13.Oliva_.jpg"
    },
    {
      "id": "грушевый (теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/2.груша.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/2.Grusha.jpg"
    },
    {
      "id": "зеленый (теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/3.зеленый.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/3.Zeleniy.jpg"
    },
    {
      "id": "темно-синий (теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/темно-синий.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/9.Temno-siniy.jpg"
    },
    {
      "id": "гранит (теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/5.гранит-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/5.Granit.jpg"
    },
    {
      "id": "светло-серый (теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/6.svetlo-seriy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/6.-Svetlo-seriy.jpg"
    },
    {
      "id": "темно-серый(теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/7.темно-серый.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/7.seriy_.jpg"
    },
    {
      "id": "бардо (теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/1.бардо.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/1.Bardo_.jpg"
    },
    {
      "id": "темная вишня(теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/темная-вишня.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/12.-temnaya-vishnya.jpg"
    },
    {
      "id": "красный (теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/4.красный.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/4.Krasniy.jpg"
    },
    {
      "id": "фиолет (теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/фиолет.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/10.-Fioletoviy.jpg"
    },
    {
      "id": "темно-коричневый (теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/темно-коричневый.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/8.Temno-korichneviy.jpg"
    },
    {
      "id": "черный(теплые)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/черный.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/11.Cherniy.jpg"
    },
    {
      "id": "коричневый(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Korichneviy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/Korichneviy.jpg"
    },
    {
      "id": "бардо(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Bardo.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/bardo.jpg"
    },
    {
      "id": "морской(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Morskoy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/Morskoy.jpg"
    },
    {
      "id": "персиковый(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Persik-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/Persik.jpg"
    },
    {
      "id": "малиновый(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/malinoviy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/Malinoviy.jpg"
    },
    {
      "id": "нежный(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Negniy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/Negniy.jpg"
    },
    {
      "id": "синий(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Siniy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/Siniy.jpg"
    },
    {
      "id": "молочный(ангора)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/32.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/2.Molochniy-1.jpg"
    },
    {
      "id": "джинс(ангора)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/27.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/10.djins_.jpg"
    },
    {
      "id": "черный(ангора)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/20-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/5.Cherniy.jpg"
    },
    {
      "id": "фиолетовый(ангора)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/22-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/6.Fioletoviy.jpg"
    },
    {
      "id": "горчичный(ангора)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/21-2.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/7.Gorchichniy-1.jpg"
    },
    {
      "id": "темно-терракотовый(ангора)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/25-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/9.Temno-terrakotoviy.jpg"
    },
    {
      "id": "грушевый(ангора)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/29.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/12.Grusheviy.jpg"
    },
    {
      "id": "красный(ангора)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/31.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/14.Krasniy.jpg"
    },
    {
      "id": "сиреневый(ангора)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/30.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/13.Siren_.jpg"
    },
    {
      "id": "темно-серый(ангора)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/28.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/11.temno-seriy.jpg"
    },
    {
      "id": "черный(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy-3.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/Cherniy-1.jpg"
    },
    {
      "id": "угольный(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy-3.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/Ugolniy-1.jpg"
    },
    {
      "id": "розовый(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Rozoviy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/rozoviy-1.jpg"
    },
    {
      "id": "грушевый(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy-3.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/Grusheviy-1.jpg"
    },
    {
      "id": "желтый(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Geltiy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/geltiy-1.jpg"
    },
    {
      "id": "серый(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Seriy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/seriy-1.jpg"
    },
    {
      "id": "серо-молочный(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Sero-MOlochniy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/sero-molochniy-1.jpg"
    },
    {
      "id": "светло-серый(утепленные)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/SvSeriy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/svSeriy-1.jpg"
    },
    {
      "id": "бежевый(полушерсть)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/бежевый-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/бежевый.jpg"
    },
    {
      "id": "гранит(полушерсть)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/гранит-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/гранит.jpg"
    },
    {
      "id": "коричневый(полушерсть)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/коричневый-2.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/коричневый-1.jpg"
    },
    {
      "id": "ночной(полушерсть)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/ночной-2.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/ночной.jpg"
    },
    {
      "id": "розовый(полушерсть)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/розовый-2.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/розовый.jpg"
    },
    {
      "id": "сиреневый(полушерсть)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/сирень-2.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/сирень.jpg"
    },
    {
      "id": "светлый(полушерсть)",
      "path": "http://tuba-duba.com/wp-content/uploads/2016/12/светлый-2.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2016/12/светлый.jpg"
    },
    {
      "id": "серебрянный",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/03/serebristiu.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/03/31.serebristiy-1.jpg"
    },
    {
      "id": "малинушка",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/03/malinoviy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/03/32-malinoviy.jpg"
    },
    {
      "id": "изумрудный",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/03/шягткгв.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/03/34-izumrudniy-2.jpg"
    },
    {
      "id": "солнечный",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/03/colnechniy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/03/35-nasischenniya-geltiy.jpg"
    },
    {
      "id": "кораловый",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/03/koraloviy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/03/33koraloviy.jpg"
    },
    {
      "id": "лазурный",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/03/lazurnuy-2.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/03/41.jpg"
    },
    {
      "id": "сирень",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/03/siren.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/03/38.siren_.jpg"
    },
    {
      "id": "темное бардо",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/03/temnoe-bardo.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/03/39-temnoe-bardo.jpg"
    },
    {
      "id": "розовый",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/roza.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/40rosovaya.jpg"
    },
    {
      "id": "бирюзовый",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/Biruza.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/37.biruza.jpg"
    },
    {
      "id": "темно-синий широкий",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/temno-siniy_sh.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/9.temno-siniy_sh.jpg"
    },
    {
      "id": "оливковый широкий",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/oivkoviy_sh.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/5.Oliva-factura_sh.jpg"
    },
    {
      "id": "красный широкий",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/Krasniy_sh.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/4.-Krasniy-factura_sh.jpg"
    },
    {
      "id": "черный широкий",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/cherniy_sh.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/18.cherniy-factura_sh.jpg"
    },
    {
      "id": "бордовый широкий",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/bardo_sh.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/2.-Bardo-factura_sh.jpg"
    },
    {
      "id": "баклажан широкий",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/Baklagan_sh.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/3.-Baklagan-factura_sh.jpg"
    },
    {
      "id": "сизый",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/сизый-small.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/сизый.jpg"
    },
    {
      "id": "светло-коричневый",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/светло-коричневый-small.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/светло-коричневый.jpg"
    },
    {
      "id": "нежно-лиловый",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/нежно-лиловый-small.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/нежно-лиловый.jpg"
    },
    {
      "id": "голубой",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/голубой-small.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/голубой.jpg"
    },
    {
      "id": "бело-красная полоска",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/бело-красная-полоска-small.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/бело-красная-полоска.jpg"
    },
    {
      "id": "бело-вишневая полоска",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/бело-вишневая-полоска-small.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/бело-вишневая-полоска.jpg"
    },
    {
      "id": "темно-лазурный",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/04/темно-лазурный-small.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/04/темно-лазурный.jpg"
    },
    {
      "id": "баклажан юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/баклажан-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/баклажан.jpg"
    },
    {
      "id": "бордо юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/бордо-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/бордо.jpg"
    },
    {
      "id": "вишневый юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/вишневый-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/вишневый.jpg"
    },
    {
      "id": "джинс юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/джинс-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/джинс.jpg"
    },
    {
      "id": "морковный юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/морковный-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/морковный.jpg"
    },
    {
      "id": "синий юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/синий-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/синий.jpg"
    },
    {
      "id": "темно-коричневый юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/темно-коричневый-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/темно-коричневый.jpg"
    },
    {
      "id": "темно-серый юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/темно-серый-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/темно-серый.jpg"
    },
    {
      "id": "темно-синий юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/темно-синий-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/темно-синий.jpg"
    },
    {
      "id": "черно-белая юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/черно-белая-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/черно-белая.jpg"
    },
    {
      "id": "сине-серая юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/сине-серая-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/сине-серая.jpg"
    },
    {
      "id": "сине-белая юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/сине-белая-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/сине-белая.jpg"
    },
    {
      "id": "серо-белая юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/серо-белая-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/серо-белая.jpg"
    },
    {
      "id": "оранжево-желто-голубая юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/оранжево-желто-голубая-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/оранжево-желто-голубая.jpg"
    },
    {
      "id": "красно-сине-белая юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/красно-сине-белая-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/красно-сине-белая.jpg"
    },
    {
      "id": "красно-бордовая юба",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/05/красно-бордовая-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/05/красно-бордовая.jpg"
    },
    {
      "id": "черно-белая полоска(платье)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/белая-полоска-смал.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/полоска-белая-1.jpg"
    },
    {
      "id": "темно-синий(платье)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/темно-синий-смал.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/темно-синий-1.jpg"
    },
    {
      "id": "лазурный (платье)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/океан-эльзы.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/лазурный.jpg"
    },
    {
      "id": "черный (лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/cherniy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/cherniya.jpg"
    },
    {
      "id": "желтый (лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/jeltiy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/geltiy.jpg"
    },
    {
      "id": "изумруд (лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/izumrud-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/izumrud.jpg"
    },
    {
      "id": "кофейный (лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/kofe.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/nejniy-choko.jpg"
    },
    {
      "id": "морковный (лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/morkobvniy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/morkovniy.jpg"
    },
    {
      "id": "красный (лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/krasniy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/krasniy.jpg"
    },
    {
      "id": "салатовый  (лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/salatoviy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/salatoviy.jpg"
    },
    {
      "id": "темно-синий (лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy.jpg"
    },
    {
      "id": "электрик (лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/elektrik.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/ultramarin.jpg"
    },
    {
      "id": "молочный(лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/molochniya.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/molochniy.jpg"
    },
    {
      "id": "синий(лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/siniy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/siniy-1.jpg"
    },
    {
      "id": "молочно-кофейный(лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/kofe-s-molokom.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/molochno-kofeiniy.jpg"
    },
    {
      "id": "изумрудно-салатовый(лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/izumrudniy-salat.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/izumrudniya-salat.jpg"
    },
    {
      "id": "желто-персиковый(лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/jelto-oranjeviya.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/geltiy-persikoviy.jpg"
    },
    {
      "id": "изумрудно-черный(лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/izumrudno-cherniy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/izumrudno-cherniy.jpg"
    },
    {
      "id": "темносине-красный(лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/sine-krasniy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/temno-siniy-krasniy.jpg"
    },
    {
      "id": "сине-темносиний(лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/sine-temnosiniy-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/sine-temnosiniy-2.jpg"
    },
    {
      "id": "черно-салатовый(лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/cherno-salat-1.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/cherno-salat.jpg"
    },
    {
      "id": "черно-молочный(лен)",
      "path": "http://tuba-duba.com/wp-content/uploads/2017/06/cherno-beliy.jpg",
      "path_big": "http://tuba-duba.com/wp-content/uploads/2017/06/chernj-beliy.jpg"
    }
  ]
};

var l1 = {
  "layer1": [
    {
      "images": [
        {
          "path": "/wp-content/uploads/2016/08/DPK0.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/08/DPK1-1.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/08/DPK3-1.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/08/DPK5-1.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/08/DPK6-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/08/DPK19.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/08/DPK22.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/08/DPK7-1.jpg"
        }
      ],
      "colors": [
        {
          "id": "розовый",
          "d": "44"
        },
        {
          "id": "белый",
          "d": "45"
        },
        {
          "id": "бежевый",
          "d": "44"
        },
        {
          "id": "черный",
          "d": "45"
        },
        {
          "id": "темно-коричневый",
          "d": "44",
          "invisible": true
        },
        {
          "id": "красный",
          "d": "45",
          "invisible": true
        },
        {
          "id": "солнечный",
          "d": "44",
          "invisible": true
        }
      ],
      "images_main": [
        "/wp-content/uploads/2016/10/DPK1a.jpg",
        "/wp-content/uploads/2016/10/DPK2a.jpg"
      ],
      "id": "longdresswithhood",
      "description": "Очень красивое и женственное платье с капюшоном. <br>Создано с любовью и легкостью<br>БЕЗ шитья и выкроек<br>Материал: Ткань: бесшовная ТУБА 95% хлопок, 5% эластан<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
      "title": "Длинное платье с капюшоном",
      "group": "long",
      "price": "575 грн",
      "sizes": "fabric",
      "extended": false,
      "pricediscount": "490"
    },
    {
      "images_main": [
        "/wp-content/uploads/2016/10/DP4a.jpg",
        "/wp-content/uploads/2016/10/DP3a.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/03/DP1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/03/DP2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/03/DP3.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/03/DP8.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/03/DP12.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/03/DP17.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/03/DP18.jpg"
        }
      ],
      "colors": [
        {
          "id": "розовый",
          "d": "44"
        },
        {
          "id": "бежевый",
          "d": "44"
        },
        {
          "id": "красный",
          "d": "45"
        },
        {
          "id": "черный",
          "d": "45"
        },
        {
          "id": "темно-коричневый",
          "d": "44",
          "invisible": true
        },
        {
          "id": "белый",
          "d": "45"
        },
        {
          "id": "солнечный",
          "d": "44",
          "invisible": true
        },
        {
          "id": "насыщенный терракот",
          "d": "44"
        },
        {
          "id": "красный широкий",
          "d": "65",
          "invisible": true
        },
        {
          "id": "лимонный",
          "d": "65"
        }
      ],
      "sizes": "fabric",
      "extended": false,
      "title": "Длинное платье с хомутом",
      "group": "long",
      "id": "Longdress",
      "price": "525 грн",
      "description": "Элегантное хлопковое платье<br>Можно сочетать со множеством стилей (этно, классика, деловой и т.д.)<br>Создано с любовью и легкостью <br>БЕЗ шитья и выкроек<br>Материал: Ткань-ТУБА 95% хлопок,5% эластан<br>Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
      "pricediscount": "445"
    },
    {
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/1-3.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/2-3.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/3-3.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/4-4.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/6-3.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/5-4.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/8-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_17.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/9-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_15.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_16.jpg"
        }
      ],
      "colors": [
        {
          "id": "розовый",
          "d": "45"
        },
        {
          "id": "белый",
          "d": "45"
        },
        {
          "id": "бежевый",
          "d": "44"
        },
        {
          "id": "черный",
          "d": "45"
        },
        {
          "id": "солнечный",
          "d": "44",
          "invisible": true
        },
        {
          "id": "темно-коричневый",
          "d": "44",
          "invisible": true
        },
        {
          "id": "красный",
          "d": "45"
        },
        {
          "id": "красный широкий",
          "d": "65",
          "invisible": true
        },
        {
          "id": "лимонный",
          "d": "65"
        }
      ],
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/03/KPK1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/03/KPK2.jpg"
      ],
      "id": "shortdresswithhood",
      "description": "Элегантное хлопковое платье<br>Можно сочетать со множеством стилей (этно, классика, деловой и т.д.)<br>Создано с любовью и легкостью <br>БЕЗ шитья и выкроек<br>Материал: Ткань-ТУБА 95% хлопок,5% эластан<br>Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
      "title": "Короткое платье с капюшоном",
      "group": "long",
      "price": "495 грн",
      "sizes": "fabric",
      "extended": false,
      "pricediscount": "420"
    },
    {
      "images": [
        {
          "path": "/wp-content/uploads/2016/08/SPD1.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/08/SPD2-2.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/08/SPD3-2.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/08/SPD4-2.jpg"
        }
      ],
      "colors": [
        {
          "id": "красный широкий",
          "d": "65",
          "invisible": true
        },
        {
          "id": "лимонный",
          "d": "65"
        }
      ],
      "images_main": [
        "/wp-content/uploads/2016/10/SP1-1.jpg",
        "/wp-content/uploads/2016/10/SP2-1.jpg"
      ],
      "id": "Longlargedress",
      "description": "Очень красивое и женственное платье). <br>Создано с любовью и легкостью<br>БЕЗ шитья и выкроек<br>Материал: Ткань: бесшовная ТУБА 95% хлопок, 5% эластан<br> На моделе: оранжево-желтое платье(на свету оно кажется светлее)<br>Размеры: XXS-XXXL (<a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
      "title": "Длинные широкие платья",
      "group": "long",
      "price": "650 грн",
      "sizes": "fabric",
      "extended": false,
      "pricediscount": "550"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_18-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_19-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_18.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_18.jpg"
        }
      ],
      "colors": [
        {
          "id": "насыщенный терракот",
          "d": "43"
        },
        {
          "id": "темно-серый",
          "d": "47"
        },
        {
          "id": "розовый",
          "d": "45"
        },
        {
          "id": "красный широкий",
          "d": "65",
          "invisible": true
        },
        {
          "id": "бежевый",
          "d": "44"
        },
        {
          "id": "красный",
          "d": "45"
        },
        {
          "id": "черный",
          "d": "45"
        },
        {
          "id": "темно-коричневый",
          "d": "44"
        },
        {
          "id": "белый",
          "d": "45"
        },
        {
          "id": "солнечный",
          "d": "44"
        },
        {
          "id": "синий",
          "d": "44"
        },
        {
          "id": "серебрянный",
          "d": "46"
        }
      ],
      "sizes": "fabric",
      "extended": false,
      "title": "Короткое бесшовное платье с хомутом",
      "group": "long",
      "id": "shortdress",
      "price": "475 грн",
      "pricediscount": "405"
    },
    {
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/1-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/2-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/3-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/4-3.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/5-3.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/6-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/7-1.jpg"
        }
      ],
      "colors": [
        {
          "id": "темно-серый",
          "d": "47"
        },
        {
          "id": "красный",
          "d": "47"
        },
        {
          "id": "бежевый",
          "d": "46"
        },
        {
          "id": "темно-синий",
          "d": "47"
        },
        {
          "id": "насыщенный терракот",
          "d": "45"
        },
        {
          "id": "темно-коричневый",
          "d": "47"
        },
        {
          "id": "розовый",
          "d": "44"
        },
        {
          "id": "солнечный",
          "d": "44"
        },
        {
          "id": "белый",
          "d": "45"
        },
        {
          "id": "черный",
          "d": "45"
        }
      ],
      "images_main": [
        "/wp-content/uploads/2016/09/photo-3.jpg",
        "/wp-content/uploads/2016/09/photo-1.jpg"
      ],
      "id": "rainbowsnood",
      "description": "Очень удобные шапки-снуды из натурального трикотажа. Идеально для осени)\n<br>Много вариаций ношения и цветов (идеально подходят для придания дню определенного настроения)\n<br>Создано с любовью и легкостью из ткани-тубы <br> :) При заказе от 3-х снудов - прекрасный набор открыток с \"записками Вселены\" в подарок) ",
      "title": "Радужные шапки-снуды",
      "group": "long",
      "price": "150 грн",
      "sizes": "fabric",
      "extended": false
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/05/1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/05/2.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/05/67.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/05/98.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/05/72.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/05/68.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/05/92.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/05/106.jpg"
        }
      ],
      "colors": [
        {
          "id": "розовый",
          "d": "44",
          "invisible": false
        },
        {
          "id": "белый",
          "d": "45"
        },
        {
          "id": "бежевый",
          "d": "44"
        },
        {
          "id": "черный",
          "d": "45"
        },
        {
          "id": "темно-коричневый",
          "d": "44",
          "invisible": true
        },
        {
          "id": "красный",
          "d": "45",
          "invisible": true
        },
        {
          "id": "солнечный",
          "d": "44",
          "invisible": true
        }
      ],
      "sizes": "fabric",
      "extended": false,
      "title": "Платье-КЛЕШ без рукавов",
      "id": "withoutleaves",
      "group": "withsleeves",
      "price": "795 грн",
      "description": "Женственное, красивое и невероятно удобное трикотажное платье)<br>\nСоздано с любовью и легкостью из Ткани-тубы. <br>\nМинимум швов (вставлены клинья в юбку).<br> \nТкань: 95% хлопок, 5% эластан<br>\nРазмеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br>",
      "pricediscount": "635"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_14-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_13-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_14.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_13.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_12.jpg"
        }
      ],
      "colors": [],
      "sizes": "fabric",
      "extended": false,
      "description": "Красивое и о-о-очень просторное платье-клеш <br> Для бесконечного исследования Вселенной <br> Создано с любовью и легкостью <br> Материал: Ткань-ТУБА 95% хлопок,5% эластан <br>Размеры: 42-52<br>\n(Цена соответствует размерам 42-48)\n <br> (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
      "title": "Платье супер-КЛЕШ с хомутом",
      "id": "dresskleshhomut",
      "price": "990 грн",
      "group": "withsleeves"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_01-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_02-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_01-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_02-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_03-3.jpg"
        }
      ],
      "colors": [],
      "sizes": "fabric",
      "extended": false,
      "title": "Короткое платье с хомутом и рукавами ¾",
      "id": "shortdresswithleaveshood",
      "group": "withsleeves",
      "price": "595 грн",
      "description": "Женственное, красивое и невероятно удобное платье из волшебных туба-тканюшек))<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан) <br> Длина чуть выше колена (делаем под ваш рост)<br> Размеры: 42-52 (Цена соответствует размерам 42-48)<br> (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br>"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_11-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_10-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_11.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_10.jpg"
        }
      ],
      "colors": [
        {
          "id": "небесный",
          "d": "45"
        }
      ],
      "sizes": "fabric",
      "extended": false,
      "description": "Простое,женственное и изящное платье) <br>  Небольшой клеш позволяет чувствовать себя максимально свободно и легко))\nИдеально подходит как для бесконечных прогулок, так и для волшебных снов)) \nСоздано с любовью и легкостью <br> Материал: Ткань-ТУБА 95% хлопок,5% эластан<br>Размеры: 42-52\n(Цена соответствует размерам 42-48)\n (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
      "title": "Длинное, слегка расклешенное, платье",
      "id": "longsmallklesh",
      "group": "withsleeves",
      "price": "955 грн",
      "pricediscount": "765"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_05-2.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_04-2.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_04.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_05.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_06.jpg"
        }
      ],
      "colors": [
        {
          "id": "розовый",
          "d": "44"
        },
        {
          "id": "небесный",
          "d": "45"
        }
      ],
      "sizes": "fabric",
      "extended": false,
      "title": "Платье-бабочка",
      "id": "baterflydress",
      "group": "withsleeves",
      "description": "Хлопковое платье-бабочка для полетов во сне и наяву <br>  Создано(как всегда) с мииинимум швов и с бооольшой любовью и легкостью <br> Материал: Ткань-ТУБА 95% хлопок,5% эластан<br>Размеры: 42-52\nЦена соответствует размерам 42-48\n (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
      "price": "945 грн",
      "pricediscount": "755"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_07-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_08-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_07.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_08.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_09.jpg"
        }
      ],
      "colors": [],
      "sizes": "fabric",
      "extended": false,
      "description": "Платье для миниатюрных принцесс) <br>  Небольшой клеш позволяет чувствовать себя максимально свободно и легко))\nИдеально подходит как для волшебных прогулок, так и для волшебных снов)) \nСоздано с любовью и легкостью <br> Материал: Ткань-ТУБА 95% хлопок,5% эластан<br>Размеры: 42-52\n(Цена соответствует размерам 42-48)\n (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)",
      "title": "Короткое, слегка расклешенное, платье с хомутом",
      "id": "shortsmallklesh",
      "group": "withsleeves",
      "price": "695 грн"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_20-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_21-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_20.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/sleep_21.jpg"
        }
      ],
      "colors": [],
      "sizes": "fabric",
      "extended": false,
      "title": "Короткое платье с капюшоном и рукавами ¾",
      "id": "shortdressshotsleeves",
      "group": "withsleeves",
      "price": "655 грн",
      "description": "Невероятно удобное платье из волшебных туба-тканюшек))<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан) <br> Длина чуть выше колена (делаем под ваш рост)<br> Размеры: 42-52 (Цена соответствует размерам 42-48)<br> (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br>"
    },
    {
      "images": [
        {
          "path": "/wp-content/uploads/2016/10/with-sleews1.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/with-sleews2.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/with-sleews3.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/with-sleews4.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/with-sleews5.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/with-sleews6.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/with-sleews7.jpg"
        }
      ],
      "colors": [],
      "images_main": [
        "http://tuba-duba.com//wp-content/uploads/2016/10/DP-s-R-1.jpg",
        "http://tuba-duba.com//wp-content/uploads/2016/10/DP-s-R-2-2.jpg"
      ],
      "id": "longlargedresswithsleeves",
      "description": "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы. <br> Минимум швов(пришиты рукава и вставлены клинья в юбку). <br> Ткань: 95% хлопок, 5% эластан<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br>Доступен любой цвет (под заказ в течении недели)",
      "title": "Длинное платье КЛЕШ с капюшоном",
      "group": "withsleeves",
      "price": "945 грн",
      "pricediscount": "",
      "sizes": "fabric",
      "extended": false
    },
    {
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood8.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/withsleevsandhood1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5-1.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/withsleevsandhood3.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/withsleevsandhood4.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/withsleevsandhood6.jpg"
        }
      ],
      "colors": [
        {
          "id": "баклажановый",
          "d": "44"
        },
        {
          "id": "салатовый",
          "d": "44"
        }
      ],
      "images_main": [
        "/wp-content/uploads/2016/10/DPsRK1.jpg",
        "/wp-content/uploads/2016/10/DPsRK4.jpg"
      ],
      "id": "longdreeswithsleeves",
      "description": "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов(пришиты только рукава) <br> Длину делаем под ваш рост<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br> Цвета в наличии: желтый, морской, кирпичный. Все остальные цвета под заказ в течении недели(пошив по четвергам - отправка в пятницу)",
      "title": "Длинное платье с капюшоном",
      "group": "withsleeves",
      "price": "795 грн",
      "pricediscount": "635",
      "sizes": "fabric",
      "extended": false
    },
    {
      "images": [
        {
          "path": "/wp-content/uploads/2016/10/withsleevsandcollar1.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/withsleevsandcollar2.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/withsleevsandcollar3.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/withsleevsandcollar4.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/withsleevsandcollar5.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/withsleevsandcollar6.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/withsleevsandcollar7.jpg"
        }
      ],
      "colors": [],
      "images_main": [
        "/wp-content/uploads/2016/10/DPsRK14.jpg",
        "/wp-content/uploads/2016/10/DPsRK13.jpg"
      ],
      "id": "longdresswithsleevsandcollar",
      "description": "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов: пришиты только рукава <br> Длину делаем под ваш рост<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br>Все цвета под заказ в течении недели(пошив в ЧЕТВЕРГ - отправка в пятницу)",
      "title": "Длинное ТУБА-платье с красивым воротником",
      "group": "withsleeves",
      "price": "755 грн",
      "pricediscount": "",
      "sizes": "fabric",
      "extended": false
    },
    {
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves3.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves4.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/longdressbigsleeves5.jpg"
        }
      ],
      "colors": [],
      "images_main": [
        "/wp-content/uploads/2016/10/DPsRK11.jpg",
        "/wp-content/uploads/2016/10/DPsRK17.jpg"
      ],
      "id": "longdreesbigleeves",
      "description": "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов(Пришиты только рукава) <br> Длину делаем под ваш рост<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br><strong>Цвета в наличии</strong> карминовый, темно-синий. <br>Все остальные цвета под заказ в течении недели(пошив по четвергам - отправка в пятницу)",
      "title": "Длинное платье без капюшона",
      "group": "withsleeves",
      "price": "710 грн",
      "pricediscount": "",
      "sizes": "fabric",
      "extended": false
    },
    {
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood3.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood4.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood0.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood5.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood6.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/shortdresswithhood7.jpg"
        }
      ],
      "colors": [],
      "images_main": [
        "/wp-content/uploads/2016/10/DPsRK8.jpg",
        "/wp-content/uploads/2016/10/DPsRK10.jpg"
      ],
      "id": "shortdreeswithsleevesandhood",
      "description": "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов(Пришиты только рукава) <br> Длина по колено (делаем под ваш рост)<br> Размеры: 42-52 (см. <br>\n(Цена соответствует размерам 42-48)\n <br> (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>",
      "title": "Короткое платье с капюшоном",
      "group": "withsleeves",
      "price": "645 грн",
      "pricediscount": "",
      "sizes": "fabric",
      "extended": false
    },
    {
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood1-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood2-2.jpg.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood3-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood4-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood5-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood6-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/10/withsleevsandhood7-1.jpg"
        }
      ],
      "colors": [
        {
          "id": "баклажановый",
          "d": "44"
        },
        {
          "id": "черный",
          "d": "48"
        }
      ],
      "images_main": [
        "/wp-content/uploads/2016/10/DPsRK7.jpg",
        "/wp-content/uploads/2016/10/DPsRK6.jpg"
      ],
      "id": "shortdreeswithsleeves",
      "description": "Женственное, красивое и невероятно удобное трикотажное платье<br> Создано с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов(Пришиты только рукава) <br> Длина по колено (делаем под ваш рост)<br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br> <strong>Цвета в наличии</strong>: оранжевый. Все остальные цвета под заказ в течении недели(пошив по четвергам - отправка в пятницу)",
      "title": "Короткое платье",
      "group": "withsleeves",
      "price": "610 грн",
      "pricediscount": "490",
      "sizes": "fabric",
      "extended": false
    },
    {
      "images": [
        {
          "path": "/wp-content/uploads/2016/10/jacketwithsleeves1.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/jacketwithsleeves3.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/jacketwithsleeves.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/jacketwithsleeves2.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/jacketwithsleeves4.jpg"
        }
      ],
      "colors": [
        {
          "id": "карминовый",
          "d": "45"
        },
        {
          "id": "оранжевый",
          "d": "44"
        },
        {
          "id": "морской",
          "d": "45"
        },
        {
          "id": "темно-коричневый",
          "d": "43"
        }
      ],
      "images_main": [
        "/wp-content/uploads/2016/10/DPsRK16.jpg",
        "/wp-content/uploads/2016/10/DPsRK15.jpg"
      ],
      "id": "jacketwithsleeves",
      "description": "Женственная, уютная и невероятно удобная трикотажная кофта с рукавами<br> Создана с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов: пришиты только рукава <br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br> <strong>Цвета в наличии:</strong> <br>Все цвета под заказ в течении недели(пошив в ЧЕТВЕРГ - отправка в пятницу)",
      "title": "ТУБА-кофта",
      "group": "withsleeves",
      "price": "485 грн",
      "pricediscount": "390",
      "sizes": "fabric",
      "extended": false
    },
    {
      "images": [
        {
          "path": "/wp-content/uploads/2016/10/jacketwithsleevesandcollar6.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/jacketwithsleevesandcollar1.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/jacketwithsleevesandcollar2.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/jacketwithsleevesandcollar3.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/jacketwithsleevesandcollar4.jpg"
        },
        {
          "path": "/wp-content/uploads/2016/10/jacketwithsleevesandcollar5.jpg"
        }
      ],
      "colors": [
        {
          "id": "салатовый",
          "d": "44"
        },
        {
          "id": "желтый",
          "d": "45"
        },
        {
          "id": "малахитовый",
          "d": "45"
        }
      ],
      "images_main": [
        "/wp-content/uploads/2016/10/DPsRK19.jpg",
        "/wp-content/uploads/2016/10/DPsRK18.jpg"
      ],
      "id": "jacketwithsleevesandcollar",
      "description": "Женственная, уютная и невероятно удобная трикотажная кофта с рукавами и красивым хомутом<br> Создана с любовью и легкостью из Ткани-тубы(95% хлопок, 5% эластан). <br> Минимум швов: пришиты только рукава <br> Размеры: XXS-XL (см. <a href='http://tuba-duba.com/dress-table-size/'>таблица размеров</a>)<br> <strong>Цвета в наличии:</strong> <br>Все цвета под заказ в течении недели(пошив в ЧЕТВЕРГ - отправка в пятницу)",
      "title": "ТУБА-кофта с красивым хомутом",
      "group": "withsleeves",
      "price": "485 грн",
      "pricediscount": "390",
      "sizes": "fabric",
      "extended": false
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2016/12/КPSK-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2016/12/КPSK1-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/11/dresswithhood.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/dresswithhood1.jpg"
        }
      ],
      "colors": [],
      "sizes": "oversize",
      "extended": false,
      "title": "Теплое платье с капюшоном",
      "id": "warmshortdresswithsleeves",
      "group": "winter",
      "price": "690 грн",
      "description": "Космически-прекрасное теплое платье c капюшоном. <br>Созданное с любовью и легкостью из акриловой ткани-тубы. Ткань достаточно плотная и держит форму <br> Минимум швов(пришиты только рукава и обработаны края ткани оверлоком). Как всегда - очень особенные ощущения от этого платья.<br>",
      "pricediscount": "",
      "invisible": true
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2016/12/dpskir-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2016/12/dpskir.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/lOLGDRESS2.jpg"
        }
      ],
      "colors": [],
      "sizes": "oversize",
      "extended": false,
      "title": "Длинное теплое платье с капюшоном",
      "group": "winter",
      "id": "warmlongdresswithsleeves",
      "price": "750 грн",
      "description": "Космически-прекрасное теплое платье c капюшоном. <br>Созданное с любовью и легкостью из акриловой ткани-тубы. Ткань достаточно плотная и держит форму <br> Минимум швов(пришиты только рукава и обработаны края ткани оверлоком). Как всегда - очень особенные ощущения от этого платья.<br>",
      "pricediscount": "",
      "invisible": true
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2016/12/KP35.jpg",
        "http://tuba-duba.com/wp-content/uploads/2016/12/KP351.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/shortdress.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/shortdress-2.jpg"
        }
      ],
      "colors": [],
      "sizes": "oversize",
      "extended": false,
      "description": "Космически-прекрасное БЕСШОВНОЕ теплое платье c красивым хомутом. Созданное с любовью и легкостью из акриловой ткани-тубы. Длина ткани по кругу - 70 см.<br>Как всегда - очень особенные ощущения от этого платья(вырезы для рук обработаны оверлоком).\nПара гетров смежного цвета - 60 грн(наличие цветов уточняйте).\nВозможна эта же модель с рукавами (указывайте в комментариях).",
      "title": "Короткое теплое платье без рукавов",
      "group": "winter",
      "id": "warmshortdresswithoutleeves",
      "price": "550 грн",
      "pricediscount": "",
      "invisible": true
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2016/12/dpskwl.jpg",
        ""
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/dresswithhoodwithoutleaves.jpg"
        }
      ],
      "colors": [],
      "sizes": "oversize",
      "extended": false,
      "description": "Космически-прекрасное БЕСШОВНОЕ теплое платье c красивым хомутом. Созданное с любовью и легкостью из акриловой ткани-тубы. Длина ткани по кругу - 70 см.<br>Как всегда - очень особенные ощущения от этого платья(вырезы для рук обработаны оверлоком).\nПара гетров смежного цвета - 60 грн(наличие цветов уточняйте).",
      "title": "Длинное теплое платье без рукавов",
      "id": "warmlongdresswithoutleeves",
      "group": "winter",
      "price": "620 грн",
      "pricediscount": "",
      "invisible": true
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2016/12/Ubka.jpg",
        "http://tuba-duba.com/wp-content/uploads/2016/12/Ubka1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt2-1.jpg"
        }
      ],
      "colors": [],
      "sizes": "numbers",
      "extended": false,
      "title": "Длинная ЮБКА-туба",
      "description": "Теплая ЮБКА создана с любовью и легкостью из широкой Ткани-тубы(кашкорсе с начесом, 95%хлопок, 5% эластан)<br>\n  Минимум швов(пришит только пояс)<br> Делаем под ваш рост и объем бедер.\n<br>Можно приобрести в комплекте с жилетом. Цена комплекта:820грн",
      "group": "winter",
      "price": "700 грн",
      "id": "warmskirt",
      "pricediscount": "",
      "invisible": true
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2016/12/DPSK.jpg",
        "http://tuba-duba.com/wp-content/uploads/2016/12/DPSK1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/longmiddle-dress.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/longmiddle-dress-1.jpg"
        }
      ],
      "colors": [],
      "sizes": "fabric",
      "extended": false,
      "title": "Утепленное длинное платье с капюшоном",
      "group": "winter",
      "description": "Утепленное платье-туба c капюшоном созданное с любовью и легкостью из Ткани-тубы(кашкорсе, 90%хлопок, 10% эластан)<br>Как всегда - очень особенные ощущения от этого платья. Минимум швов(пришиты рукава и обработаны края платья)",
      "price": "650 грн",
      "id": "warmdresswithleeves",
      "pricediscount": "",
      "invisible": true
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2016/12/KPsr-2.jpg",
        "http://tuba-duba.com/wp-content/uploads/2016/12/KPsr.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/shortdresswithleaves.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/shortdresswithleaves-1.jpg"
        }
      ],
      "colors": [],
      "sizes": "fabric",
      "extended": false,
      "id": "warmshortdresswithleeves",
      "title": "Короткое утепленное платье",
      "group": "winter",
      "price": "500 грн",
      "description": "Короткое утепленное платье.  Создано с любовью и легкостью из Ткани-тубы(кашкорсе, 90%хлопок, 10% эластан)<br> Как всегда, очень особенные ощущения от этого платья. Минимум швов(пришиты рукава и обработаны края)",
      "pricediscount": "",
      "invisible": true
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2016/12/DPAngora.jpg",
        "http://tuba-duba.com/wp-content/uploads/2016/12/DPAngora1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/longangoradress.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/longangoradress1.jpg"
        }
      ],
      "colors": [],
      "sizes": "numbers",
      "extended": false,
      "id": "warmangoradresswithsleeves",
      "group": "winter",
      "title": "Теплое длинное платье-клеш с капюшоном",
      "description": "Платье-клеш, созданное в Tuba-стиле из материала АНГОРА(ангора 30%, вискоза 30%, акрил 35%, эластан 5% ​, ​плотность 230 г/кв.м​)<br>Невероятно теплое и согревающее<br>Платье выкроено с минимум швов (один шов на спине и пришиты только рукава)<br>Создано с любовью и легкостью",
      "price": "900 грн",
      "pricediscount": "",
      "invisible": true
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2016/12/Kostum-2-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2016/12/Kostum-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/warnundress.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/warnundress1.jpg"
        }
      ],
      "colors": [],
      "sizes": "numbers",
      "extended": false,
      "title": "Теплый Туба-Костюм",
      "group": "winter",
      "price": "950 грн",
      "description": "Очень теплый костюм, созданный в Tuba стиле с любовью и легкостью из материала - АНГОРА(ангора 30%, вискоза 30%, акрил 35%, эластан 5% ​, ​плотность 230 г/кв.м​)<br>Настоящий домашний теплообогреватель)  <br>Просто костюмчик, просто ангора, просто любовь! <br>Теперь дома можно долго делать «спокойные дела» - шить, писать, вязать, работать - и не мерзнуть! <br>Благодаря этому теплому чуду мы даже умудряемся делать йогу на рассвете)",
      "id": "warnundress",
      "pricediscount": "",
      "invisible": true
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2016/12/skarf.jpg",
        ""
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/1-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2016/12/Longskirt2-2.jpg"
        }
      ],
      "colors": [],
      "sizes": "oversize",
      "extended": false,
      "title": "Теплый шарф-снуд",
      "id": "warmsnud",
      "price": "400грн",
      "description": "Теплый шарф-снуд из полушерстяной ТУБЫ. Диаметр - 50 см(тянется в 1,5-2 раза). Просто незаменим для прекрасных зимних прогулок.",
      "group": "winter",
      "pricediscount": "",
      "invisible": true
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/25-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/28.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/16.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/29.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/27.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/25.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/24.jpg"
        }
      ],
      "colors": [],
      "sizes": "numbers",
      "extended": false,
      "title": "Familly look (Tuba-ЮБА для мамы и дочки)",
      "price": "850 грн",
      "id": "Famillylook",
      "group": "uba",
      "description": "Tuba-ЮБАчки для мам и дочек: для семейных фотосессий, теплых совместных дней и взаимной нежности:)\nСтоимость указана за 2 ЮБАчки))\n<br>Состав: 70% хлопок, 30% полиэстр\n<br>Ширина тубы по кругу - 170см \n<br>(длину ЮБЫ и ширину пояса делаем по вашим меркам)",
      "pricediscount": ""
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/5¦-.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/2¦-.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/2a.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/3.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/4a.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/5a.jpg"
        }
      ],
      "colors": [
        {
          "id": "бордо юба",
          "invisible": false
        },
        {
          "id": "оливковый"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "title": "Tuba-ЮБА с плетением (бесшовная)",
      "id": "weavinguba",
      "group": "uba",
      "price": "520 грн",
      "description": "Состав: 70% хлопок, 30% полиэстр\n<br>Ширина тубы по кругу - 170см \n<br>(длину ЮБЫ и ширину пояса делаем по вашим меркам) \n\nСостав: 75% хлопок, 30% полиэстр\n<br>Ширина тубы по кругу - 170см \n<br>(длину ЮБЫ и ширину пояса делаем по вашим меркам)",
      "pricediscount": "375"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/9315.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/33-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/33.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/55.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/57.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/10a.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/9a.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/12a.jpg"
        }
      ],
      "colors": [
        {
          "id": "нежно-лиловый",
          "invisible": false
        },
        {
          "id": "темно-коричневый юба",
          "invisible": false
        },
        {
          "id": "баклажан юба",
          "invisible": false
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "title": "Tuba-ЮБА однотонная",
      "group": "uba",
      "id": "collorUba",
      "price": "500 грн",
      "description": "Однотонная Tuba-ЮБА для особенных, важных состояний. <br>В дни, когда весь мир особенно отзывчив, <br>а твое настроение становится цветным. <br>Состав: 70% хлопок, 30% полиэстр<br>Ширина тубы по кругу - 170см <br>(длину ЮБЫ и ширину пояса делаем по вашим меркам)",
      "pricediscount": "375"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/131-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/22-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/6a.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/7a.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/8a.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/14a.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/40.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/65.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/43.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/50.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/21.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/22.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/23.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/21.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/22.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/23.jpg"
        }
      ],
      "colors": [
        {
          "id": "сине-белая юба",
          "invisible": false
        },
        {
          "id": "сине-серая юба",
          "invisible": false
        },
        {
          "id": "красно-бордовая юба"
        },
        {
          "id": "красно-сине-белая юба"
        },
        {
          "id": "серо-белая юба"
        },
        {
          "id": "бело-красная полоска"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "group": "uba",
      "title": "Полосатая Tuba-ЮБА",
      "id": "Stripeduba",
      "price": "500 грн",
      "description": "Полосатая Tuba-ЮБА для легкого теплого настроения! <br>Кружиться, прыгать, мечтать, дурачиться, ловить ветер и майских жуков, закрывать глаза и жмуриться от солнца)<br>\nСостав: 70% хлопок, 30% полиэстр\n<br>Ширина тубы по кругу - 170см \n<br>(длину ЮБЫ и ширину пояса делаем по вашим меркам)",
      "pricediscount": "375"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/04/37-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/04/84.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/37.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/04/15.jpg"
        }
      ],
      "colors": [
        {
          "id": "сине-белая юба",
          "invisible": false
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "title": "Baby Tuba-ЮБА",
      "group": "uba",
      "id": "Babyuba",
      "price": "400 грн",
      "description": "Состав: 70% хлопок, 30% полиэстр\n<br>Ширина тубы по кругу - 170см \n<br>(длину ЮБЫ и ширину пояса делаем по вашим меркам)",
      "pricediscount": "300"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/4-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/3-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/4.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/3.jpg"
        }
      ],
      "colors": [
        {
          "id": "черно-белая полоска(платье)"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "group": "cloads",
      "price": "790 грн",
      "title": "Рассветное...",
      "description": "Легкое и воздушное полосатое платье из Tuba-ткани) <br>\nДля бесконечной легкости бытия и внутреннего лета...<br>\nТкань: 80% хлопок, 20 % полиэстр)<br>\nТонкая и легкая)<br> И,как и все легкие ткани, слегка просвечивается(но не сильно). <br>\nРазмер практически оверсайз.\n Но в некоторых случаях делаем платье Уже или шире.<br>\nДлину делаем под ваш рост)<br>\nБудем рады сотворить его для Вас))<br>",
      "id": "sunrizedress",
      "pricediscount": "550"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/1-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/2-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/5.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/7.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/8.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/9.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/10.jpg"
        }
      ],
      "colors": [
        {
          "id": "черный",
          "invisible": true
        },
        {
          "id": "синий"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "title": "Облачное...",
      "price": "790 грн",
      "group": "cloads",
      "description": "Очень легкое, нежное, воздушное и удобное! Освежающее.<br>\nДля сказочного лета)) <br>\nТкань: 100 % хлопок <br>\nТонкая и легкая) И,как и все легкие ткани, слегка просвечивается(но не сильно). <br>\nРазмер практически оверсайз. <br> Но, в некоторых случаях делаем платье Уже или шире.\nДлину делаем под ваш рост)\nБудем рады сотворить его для Вас))",
      "id": "cloadsdress",
      "pricediscount": "550"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/6-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/7-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/11.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/12.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/13.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/14.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/15.jpg"
        }
      ],
      "colors": [
        {
          "id": "нежно-лиловый",
          "invisible": true
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "price": "790 грн",
      "group": "cloads",
      "description": "Обнимающее и обволакивающее нежностью))<br>\nУдобное. Красивое.<br>\nТкань: 80% хлопок, 20 % полиэстр)\nТкань не просвечивается)<br>  \nРазмер практически оверсайз. \nНо в некоторых случаях делаем платье Уже или шире.<br>\nДлину делаем под ваш рост)<br>\nБудем рады сотворить его для Вас))<br>",
      "title": "Туманное...",
      "id": "fogdress",
      "pricediscount": "550"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/satya1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/satya2.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/31.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/29.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/32.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/33.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/34.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/35.jpg"
        }
      ],
      "colors": [
        {
          "id": "молочно-кофейный(лен)"
        },
        {
          "id": "красный (лен)"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "title": "САТЬЯ  <br>  सत्य",
      "description": "Двухцветное платье-медитация с карманами и поясом. <br>\nМатериал: 100% лен (Корея)<br>\nДлина: под ваш рост<br> \n<a href='http://tuba-duba.com/dress-table-size/'>Таблица размеров</a><br><br>\n\n  Это платье названо САТЬЯ (санскр. सत्य),  <br>что означает истину, честность, правдивость (не только в речах, но также в мыслях и поведении). <br> Одев это платье, вы можете подумать про его название,<br>  закрыть глаза и прочувствовать это качество САТЬИ:  умение видеть и следовать истине в каждой сфере внутренней и внешней жизни. Действовать очень гибко в соответствии ситуациями, исполнять свои  обещания и обязанности.<br>",
      "id": "satya",
      "group": "dharma",
      "price": "1950 грн",
      "pricediscount": "1650"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/dHRITI1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/dhriti2.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/70.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/71.jpg"
        }
      ],
      "colors": [
        {
          "id": "темносине-красный(лен)"
        },
        {
          "id": "сине-темносиний(лен)"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "description": "Двухцветное платье-медитация с поясом в комплекте.  <br>\nМатериал: 100% лен (Корея) <br>\nДлина: под ваш рост. <br>\n<a href='http://tuba-duba.com/dress-table-size/'>Таблица размеров</a> <br>\n\n Это платье названо ДХРИТИ(санкр. धृति),  <br>что означает терпение и стойкость во всяких обстоятельствах.  <br> Одев его,  вы можете подумать про название,  <br>закрыть глаза и прочувствовать качество ДХРИТИ - постоянство и упорство,  <br> которое помогает никогда не падать духом, <br> не беспокоиться или позволять сбивать себя с толку в любой ситуации. <br> Оно учит переносить любые жизненные обстоятельства и неуклонно продвигаться по избранному Пути. <br>",
      "title": "ДХРИТИ <br> धृति",
      "id": "dhriti",
      "group": "dharma",
      "price": "1690 грн",
      "pricediscount": "1430"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/Asteya1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/Asteya2.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/55.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/9-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/10-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/12-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/51.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/50.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/52.jpg"
        }
      ],
      "colors": [
        {
          "id": "черный (лен)"
        },
        {
          "id": "темно-синий (лен)",
          "invisible": true
        },
        {
          "id": "электрик (лен)",
          "invisible": true
        },
        {
          "id": "изумруд (лен)",
          "invisible": true
        },
        {
          "id": "молочный(лен)"
        },
        {
          "id": "красный (лен)"
        },
        {
          "id": "синий(лен)"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "description": "Платье-медитация с ассиметричным верхом, карманами и поясом  <br>\nМатериал: 100% лен (Корея) <br>\nДлина: под ваш рост <br>\n<a href='http://tuba-duba.com/dress-table-size/'>Таблица размеров</a> <br>\n\n Это платье названо АСТЕЯ(санскр. अस्तेय),  <br> что означает  не-воровство, не-хищение (не только в действия, но и в мыслях и желаниях).  <br> Одев это платье,  вы можете подумать про его название, <br> закрыть глаза и прочувствовать это качество АСТЕИ:  <br>свободу ума от желаний присвоить какую-либо собственность любого существа(во всякой его форме). <br> Свободу от погони за прибылью с помощью других людей.   <br>Вспомнить о том, что в вашу жизнь приходит все только самое необходимое. <br>И ощутить достаток от того, что есть в здесь и сейчас.",
      "title": "АСТЕЯ<br> अस्तेय",
      "group": "dharma",
      "id": "asteya",
      "price": "1690 грн",
      "pricediscount": "1430"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/Ahimsa1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/Ahimsa2.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/12-3.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/13-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/15-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/16.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/17.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/18.jpg"
        }
      ],
      "colors": [
        {
          "id": "изумрудно-салатовый(лен)"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "description": "Двустороннее платье-медитация с карманами и поясом  <br>\nМатериал: 100% лен (Корея) <br>\nДлина: под ваш рост. <br>\n<a href='http://tuba-duba.com/dress-table-size/'>Таблица размеров</a> <br>\n\n Это платье названо АХИМСА (санскр. अहिंसा ), <br> что означает ненасилие, великое принятие, не причинение вреда всему живому(ни мыслью, ни словом, ни делом.). <br>\n Одев это платье,  вы можете подумать про его название, закрыть глаза и прочувствовать качество АХИМСЫ: воздержание от злых чувств и поступков, <br> враждебного поведения по отношению ко всем людям и живым существам.  <br>  Ахимса ведет к уменьшению зла в мире,  <br>и направлена против самого зла, <br> а не против людей его творящих... Что означает отсутствие ненависти.  <br>",
      "title": "АХИМСА<br> अहिंसा",
      "id": "ahimsa",
      "group": "dharma",
      "price": "1950 грн",
      "pricediscount": "1650"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/Ardjava1-2.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/Arjava2-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/4-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/1-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/2-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/3-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/6-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/5-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/7-2.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/8-1.jpg"
        }
      ],
      "colors": [
        {
          "id": "кофейный (лен)"
        },
        {
          "id": "синий(лен)",
          "invisible": false
        },
        {
          "id": "черный (лен)",
          "invisible": true
        },
        {
          "id": "темно-синий (лен)",
          "invisible": true
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "description": "Платье-медитация с ассиметричным верхом и поясом  <br>\nМатериал: 100% лен (Корея) <br>\nДлина: под ваш рост  <br>\n<a href='http://tuba-duba.com/dress-table-size/'>Таблица размеров</a> <br>\n\n Это платье названо АРДЖАВА(санскр. आर्जव), что означает  простота жизни.  <br>  Одев это платье,  вы можете подумать про его название, <br>закрыть глаза и прочувствовать это качество АРДЖАВЫ: <br>отсутствие искусственности, двуличия, неискренности. <br>  Вспомнить про возможность ведения простого образа жизни без пышности и великолепия в еде,  <br> одежде и благоустройстве жилища, <br> про избавление от лукавства в поведении. \nАрджава учит наслаждаться бесконечной красотой простых вещей. <br>  \n  Платье “Арджава” в чем-то напоминает это качество - простые линии, натуральная ткань.<br>   Возможно, именно оно сможет помочь отбросить всё лишнее,<br>   и открыть миру очарование его обладательницы.",
      "title": "АРДЖАВА <br> आर्जव",
      "id": "arjava",
      "group": "dharma",
      "price": "1390 грн",
      "pricediscount": "1190"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/daya2.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/daya-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/21.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/20.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/22.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/18-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/24.jpg"
        }
      ],
      "colors": [
        {
          "id": "желто-персиковый(лен)"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "title": "ДАЙЯ<br> दया",
      "price": "1950 грн",
      "group": "dharma",
      "id": "daya",
      "description": "Двустороннее платье-медитация с карманами и поясом <br> \nМатериал: 100% лен (Корея)<br> \nДлина: под ваш рост <br> \n<a href='http://tuba-duba.com/dress-table-size/'>Таблица размеров</a> <br>\n\n Это платье названо ДАЙЯ (санскр. दया ), что означает сострадание. <br> \n  Одев это платье,  вы можете подумать про его название, закрыть глаза и прочувствовать это качество ДАЙИ:  сострадание ко всем людям и живым существам, <br> помощь находящимся в беде. <br>  Выражение сочувствия, переживание бедствий и трудностей другого человека как своих собственных, <br>  и внутреннее побуждение оказывать реальное содействие в устранении невзгод, восстановить в жизни счастье и мир. <br>   Это расположение ко всем, <br>  чувство всеединства и готовность служить всем.<br>",
      "pricediscount": "1650"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/Kshama2-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/Kshama2.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/39.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/38.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/37.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/36.jpg"
        }
      ],
      "colors": [
        {
          "id": "красный (лен)"
        },
        {
          "id": "черный (лен)",
          "invisible": true
        },
        {
          "id": "темно-синий (лен)",
          "invisible": true
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "description": "Платье-медитация с ассиметричным верхом (пояс в комплекте)<br>\nМатериал: 100% лен (Корея)<br>\nДлина: под ваш рост<br> \n<a href='http://tuba-duba.com/dress-table-size/'>Таблица размеров</a> <br>\n\nЭто платье названо КШАМА (санскр. क्षम) , что означает  «милосердие; прощение». <br>\n Одев это платье,  вы можете подумать про его название, закрыть глаза и прочувствовать это качество КШАМЫ: <br> терпимость к тем, кто живёт не так как вы, и не видит ничего, кроме своих иллюзий. <br>Прощение недостатков и вины других людей. <br>  Недопустимость обид или жажды мести.<br> Добро за причиненное зло (а не наоборот). <br>Неуместность проявления недовольства или стремления свершить возмездие. <br> Внутреннюю тишину и умиротворенность. <br>",
      "title": "КШАМА<br>क्षम",
      "group": "dharma",
      "price": "1450 грн",
      "id": "kshama",
      "pricediscount": "1300"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha2-1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/Aparigraha1-1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/25.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/24-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/23.jpg"
        }
      ],
      "colors": [
        {
          "id": "изумрудно-черный(лен)"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "title": "АПАРИГРАХА<br>अपरिग्रह",
      "group": "dharma",
      "price": "1690 грн",
      "description": "Ассиметричное платье-медитация<br> \nМатериал: 100% лен (Корея)<br>\nДлина: под ваш рост<br> \n<a href='http://tuba-duba.com/dress-table-size/'>Таблица размеров</a> <br>\n <br>\nЭто платье названо АПАРИГРАХА (санскр.अपरिग्रह), что означает   нестяжание, отсутствие алчности и желания накапливать имущество, коллекционировать вещи, идеи, концепции, заслуги.<br>\n Одев это платье, Вы можете подумать про его название, <br>закрыть глаза и прочувствовать это качество АПАРИГРАХИ:<br> не цепляние и не привязывание  к ненужному. <br>Например, - если вещь не использовалась более года – она ненужная, и лучший способ её использования – отдать эту вещь тому,   кому она нужна.<br>  Но, соблюдать апариграху  означает еще и «не покупать чего-нибудь». Испорченная еда в холодильнике,  заваленный одеждой шкаф, «сувениры» на полках,  пыльные книги, которые никогда не открывались, фотографии «на память» и просто хлам,  который «рука не поднимается» выкинуть – это признаки отсутствия Апариграхи. <br> Апариграха предполагает также отказ от стремления к немедленному удовлетворению даже самых обычных желаний.<br> Таким образом Апариграха это самодостаточность, удовлетворение тем, что есть.",
      "id": "aparigraha",
      "pricediscount": "1360"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/Brahmacharya.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/Brahmacharya1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/32-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/36-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/34-1.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/33-1.jpg"
        }
      ],
      "colors": [
        {
          "id": "черно-молочный(лен)"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "title": "БРАХМАЧАРЬЯ<br>ब्रह्मचर्य",
      "group": "dharma",
      "price": "1750 грн",
      "id": "brahmacharya",
      "description": "Двухцветное ассиметричное платье-медитация.\nМатериал: 100% лен (Корея)<br>\nДлина: под ваш рост<br> \n<a href='http://tuba-duba.com/dress-table-size/'>Таблица размеров</a> <br>\n\nЭто платье названо БРАХМАЧАРЬЯ (санскр.ब्रह्मचर्य), что означает самодисциплину и контроль над желаниями. \n Одев это платье, Вы можете подумать про его название, <br>закрыть глаза и прочувствовать это качество БРАХМАЧАРЬИ: воздержание от крайностей, контроль инстинктов , контроль энергии (в любом ее проявлении). Свободу от невоздержанности в еде, в сне, в болтливости и т.п.). Для супругов это означает верность друг другу и следование истинным путем несмотря ни на что.",
      "pricediscount": "1430"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/mitahara1.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/mitahara2.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/46.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/44.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/47.jpg"
        }
      ],
      "colors": [
        {
          "id": "черно-салатовый(лен)"
        },
        {
          "id": "изумрудно-черный(лен)"
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "title": "МИТАХАРА<br>मिताहार",
      "group": "dharma",
      "price": "1290 грн",
      "id": "mitahara",
      "description": "Ассиметричное короткое платье-медитация<br> \nМатериал: 100% лен (Корея)<br>\nДлина: по колено на ваш рост <br>\n<a href='http://tuba-duba.com/dress-table-size/'>Таблица размеров</a><br>\n<br>\nЭто платье названо МИТАХАРА (санскр. मिताहार), что означает чистое  питание.<br>\n Одев это платье, Вы можете закрыть глаза, подумать про его название и прочувствовать это качество: ощущение того, что пища предназначена для поддержания и питания тела, а не для услаждения вкуса, удовольствия от вкушения и удовлетворения желаний. Возможность сформировать у себя привычку принимать надлежащую пищу в нужном количестве и в назначенное время, и не потакать требованиям ума и вкуса. Пищи должно быть ровно столько, сколько необходимо для того, чтобы жить.",
      "pricediscount": "990"
    },
    {
      "images_main": [
        "http://tuba-duba.com/wp-content/uploads/2017/06/shaucha2.jpg",
        "http://tuba-duba.com/wp-content/uploads/2017/06/shaucha1.jpg"
      ],
      "images": [
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/45.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/41.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/42.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/43.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/60.jpg"
        },
        {
          "path": "http://tuba-duba.com/wp-content/uploads/2017/06/63.jpg"
        }
      ],
      "colors": [
        {
          "id": "желтый (лен)"
        },
        {
          "id": "черный (лен)",
          "invisible": true
        },
        {
          "id": "молочный(лен)",
          "invisible": true
        },
        {
          "id": "морковный (лен)",
          "invisible": true
        },
        {
          "id": "синий(лен)",
          "invisible": true
        },
        {
          "id": "красный (лен)",
          "invisible": true
        }
      ],
      "sizes": "numbers",
      "extended": false,
      "title": "ШАУЧА<br>शौच",
      "group": "dharma",
      "price": "1200 грн",
      "id": "shaucha",
      "description": "Ассиметричное короткое платье-медитация (с карманами и поясом)<br>\nМатериал: 100% лен (Корея)<br>\nДлина: по колено под ваш рост <br>\n<br>\n Это платье названо ШАУЧА(санскр. शौच), что означает чистоту(внешнюю и внутреннюю). <br>\n Одев это платье, вы можете  закрыть глаза, подумать про его название, и прочувствовать это качество.  \n  Внешняя чистота включает в себя поддержание в чистоте тела, места жительства, одежды, пищи, посуды, приобретение имущества справедливыми путями.<br>  Внутренняя чистота подразумевает избавление от пороков сознания: невежества, страсти, ложного эго, похоти, враждебности, алчности, гнева. <br>Когда данные пороки устранены, ум становится безупречным.<br>\n<br>\n  <em>«Чистота тела достигается при помощи воды, <br>сознание очищается при помощи истины, <br>душа обретает безупречность при помощи науки и аскетизма, <br>а чистоту ума порождает знание\" </em>",
      "pricediscount": "990"
    }
  ]
};

function transliterate(word){

    var answer = "";

    A = new Array();
    A["Ё"]="YO";A["Й"]="I";A["Ц"]="TS";A["У"]="U";A["К"]="K";A["Е"]="E";A["Н"]="N";A["Г"]="G";A["Ш"]="SH";A["Щ"]="SCH";A["З"]="Z";A["Х"]="H";A["Ъ"]="'";
    A["ё"]="yo";A["й"]="i";A["ц"]="ts";A["у"]="u";A["к"]="k";A["е"]="e";A["н"]="n";A["г"]="g";A["ш"]="sh";A["щ"]="sch";A["з"]="z";A["х"]="h";A["ъ"]="'";
    A["Ф"]="F";A["Ы"]="I";A["В"]="V";A["А"]="A";A["П"]="P";A["Р"]="R";A["О"]="O";A["Л"]="L";A["Д"]="D";A["Ж"]="ZH";A["Э"]="E";
    A["ф"]="f";A["ы"]="i";A["в"]="v";A["а"]="a";A["п"]="p";A["р"]="r";A["о"]="o";A["л"]="l";A["д"]="d";A["ж"]="zh";A["э"]="e";
    A["Я"]="YA";A["Ч"]="CH";A["С"]="S";A["М"]="M";A["И"]="I";A["Т"]="T";A["Ь"]="";A["Б"]="B";A["Ю"]="YU";
    A["я"]="ya";A["ч"]="ch";A["с"]="s";A["м"]="m";A["и"]="i";A["т"]="t";A["ь"]="";A["б"]="b";A["ю"]="yu";
    A["("] = "_";
    A[")"] = "";
	A["-"] = "-";
	A[" "] = "_";


	for (var i in word){

    if (typeof A[word[i]] === 'undefined'){
        //answer += word[i];
        }
    else {
        answer += A[word[i]];
        }
	}
	return answer;
}
var j = 353;
content.colorCodes.forEach(function(c){
	c.id = c.id.replace("  "," ");
	c.id = c.id.replace(/\s+\(/,"(");
	c.slug = transliterate(c.id);
	c.wp_id = j;
	j = j + 1;
})
r = "";
content.colorCodes.forEach(function(c){
	r += "insert into wpap_terms (term_id, name, slug, term_group) values ("+c.wp_id+", '" + c.id + "','" + c.slug +"',0);\r\n";
	r += "insert into wpap_term_taxonomy (term_taxonomy_id, term_id, taxonomy, description, parent, count) values (" + c.wp_id + "," + c.wp_id + ", 'pa_color', '" + c.path + "|" +c.path_big + "', 0, 0);\r\n";
})

r = "";

var groups = {"dharma":346, "cloads":347, "long":348,"uba":349,"withsleeves":350};
j = 1983;

var options = {
	"_wc_review_count": "0",
	"_wc_rating_count": "a:0:{}",
	"_wc_average_rating": "0",
	"_edit_last": "1",
	"_edit_lock": "1503256702:1",
	"_sku": "",
	"_regular_price": "1950",
	"_sale_price": "",
	"_sale_price_dates_from": "",
	"_sale_price_dates_to": "",
	"total_sales": "0",
	"_tax_status": "taxable",
	"_tax_class": "",
	"_manage_stock": "no",
	"_backorders": "no",
	"_sold_individually": "no",
	"_weight": "",
	"_length": "",
	"_width": "",
	"_height": "",
	"_upsell_ids": "a:0:{}",
	"_crosssell_ids": "a:0:{}",
	"_purchase_note": "",
	"_default_attributes": "a:0:{}",
	"_virtual": "no",
	"_downloadable": "no",
	"_product_image_gallery": "",
	"_download_limit": "-1",
	"_download_expiry": "-1",
	"_stock_status": "instock",
	"_product_attributes": "a:3:{s:8:\"pa_color\";a:6:{s:4:\"name\";s:8:\"pa_color\";s:5:\"value\";s:0:\"\";s:8:\"position\";i:0;s:10:\"is_visible\";i:1;s:12:\"is_variation\";i:1;s:11:\"is_taxonomy\";i:1;}s:11:\"pa_material\";a:6:{s:4:\"name\";s:11:\"pa_material\";s:5:\"value\";s:0:\"\";s:8:\"position\";i:1;s:10:\"is_visible\";i:1;s:12:\"is_variation\";i:0;s:11:\"is_taxonomy\";i:1;}s:7:\"pa_size\";a:6:{s:4:\"name\";s:7:\"pa_size\";s:5:\"value\";s:0:\"\";s:8:\"position\";i:2;s:10:\"is_visible\";i:1;s:12:\"is_variation\";i:0;s:11:\"is_taxonomy\";i:1;}}",
	"_product_version": "3.1.2",
	"post_sidebar": "a:2:{s:7:\"sidebar\";s:0:\"\";s:11:\"footer-area\";s:0:\"\";}",
	"_price": "",
	"_thumbnail_id": ""

}

function safe(s,replaceT) {
	if (!s) return '';
	s = "" + s;
	if (replaceT) s = s.replace(/\<br\>/g,"");
	return s.replace(/\'/g,"''");
} 
function cut(s){
	if (!s) return ""+s;
	if (s.length < 100) return s;
	return s.substr(0,100) + "...";
}
if (false) {
l1.layer1.forEach(function(c){
	c.wp_id = j;
	var content = safe(c.description);
	var title = safe(c.title,true);
	var excerpt = safe(cut(c.description));
	var title_translit = safe(transliterate(c.title),true);
	r += `INSERT INTO tubaduba3.wpap_posts
(ID,
post_author,
post_date,
post_date_gmt,
post_content,
post_title,
post_excerpt,
post_status,
comment_status,
ping_status,
post_password,
post_name,
to_ping,
pinged,
post_modified,
post_modified_gmt,
post_content_filtered,
post_parent,
guid,
menu_order,
post_type,
post_mime_type,
comment_count)
VALUES
(${j},
1,
'2017-08-20 13:43:31',
'2017-08-20 13:43:31',
'${content}',
'${title}',
'${content}',
'publish',
'open',
'closed',
'',
'${title_translit}',
'',
'',
'2017-08-20 13:43:31',
'2017-08-20 13:43:31',
'',
0,
'http://tuba-duba.com/product/${title_translit}/',
0,
'product',
'',
0);


`;

var _options  = JSON.parse(JSON.stringify(options));

_options['_price'] = parseInt(c.price);
_options['_regular_price'] = parseInt(c.price);
_options['_sku'] = c.id;
_options['_sale_price'] = c.pricediscount ? parseInt(c.pricediscount) : parseInt(c.price);

	if (groups[c.group]) r += "insert into wpap_term_relationships (object_id, term_taxonomy_id, term_order) values ("+c.wp_id+", " + groups[c.group] + ", 0);\r\n";
	r += "insert into wpap_term_relationships (object_id, term_taxonomy_id, term_order) values ("+c.wp_id+", 2, 0);\r\n";

	for (var k in _options) {
		var v = safe(_options[k]);
		r += `insert into wpap_postmeta (post_id, meta_key, meta_value) values (${c.wp_id}, '${k}','${v}');
`;
	}
	j = j+1;

})
} 

var res = {};

var imgStartId = 2033;

function findImage(s){
	s = s.replace(/http\:\/\/tuba-duba.com/, "");
	if (s.startsWith("/")) s = s.replace("\/","");
	for (var i=0;i<oldImages3.length;i++){
		oldImages3[i].guid = oldImages3[i].guid.replace(/http\:\/\/tuba-duba.com/, "");
		if (oldImages3[i].guid.endsWith(s)) return oldImages3[i].id;
	}
	return null;
}

if (true) {
	l1.layer1.forEach(function(c){
		c.wp_id = j;
		res[j] = {};
		if (c.images_main && c.images_main.length) {
			var image = c.images_main[0];
			if ( findImage(image)) {
				console.log("!");
				res[j].mainimage = findImage(image);
			} else {
				console.log(":( 1", image);
			}
		}
		if (c.images) {
			res[j].images = [];
			c.images.forEach(function(image) {
				if ( findImage(image.path)) {
					res[j].images.push(findImage(image.path));
				} else {
					console.log(":(", image.path);
				}
			})
		}
		j = j+1;
	});
	r = "";
	for (var key in res) {
		var r1= res[key];
		if (r1.mainimage) {
			r += `update wpap_postmeta set meta_value='${r1.mainimage}' where post_id=${key} and meta_key='_thumbnail_id';
	`;
		}
		if (r1.images.length) {
			var ri = r1.images.join(",");
			r += `update wpap_postmeta set meta_value='${ri}' where post_id=${key} and meta_key='_product_image_gallery';
	`;		
		}
	}
}

if (false) {
var j = imgStartId;
r = "";
oldImages2.forEach(function(i){
	var t = i.guid.split("/");
	var title = t[t.length-1];
	r += `INSERT INTO tubaduba3.wpap_posts
	(ID,
	post_author,
	post_date,
	post_date_gmt,
	post_content,
	post_title,
	post_excerpt,
	post_status,
	comment_status,
	ping_status,
	post_password,
	post_name,
	to_ping,
	pinged,
	post_modified,
	post_modified_gmt,
	post_content_filtered,
	post_parent,
	guid,
	menu_order,
	post_type,
	post_mime_type,
	comment_count)
	VALUES
	(${j},
	1,
	'2017-08-20 13:43:31',
	'2017-08-20 13:43:31',
	'',
	'${title}',
	'',
	'publish',
	'closed',
	'closed',
	'',
	'${title}',
	'',
	'',
	'2017-08-20 13:43:31',
	'2017-08-20 13:43:31',
	'',
	0,
	'${i.guid}',
	0,
	'attachment',
	'image/jpeg',
	0);
`;
	var s = i.guid;

	s = s.replace(/http\:\/\/tuba-duba.com/, "");
	s = s.replace("wp-content/uploads/","");
	if (s.startsWith("/")) s = s.replace("\/","");
	if (s.startsWith("/")) s = s.replace("\/","");
	r+= `insert into wpap_postmeta (post_id, meta_key, meta_value) values (${j}, '_wp_attached_file','${s}');
`;
	j = j + 1;
});
}
console.log(r);
document.write("<pre>" + r + "</pre>");


</script>
