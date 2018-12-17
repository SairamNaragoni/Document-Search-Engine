var curr = 0;
var nh = $('link[href="css/material.min.css"]').attr('href');
var oh;
$("#ChangeTheme").on('click',function(event){
  event.preventDefault();
  switch (curr) {
    case 0:
        oh =  nh;
        nh = 'https://code.getmdl.io/1.3.0/material.teal-amber.min.css'; 
        break;
    case 1:
        oh =  nh;
        nh = 'https://code.getmdl.io/1.3.0/material.light_blue-indigo.min.css'; 
        break;
    case 2:
        oh =  nh;
        nh = 'https://code.getmdl.io/1.3.0/material.orange-red.min.css'; 
        break;
    case 3:
        oh =  nh;
        nh = 'https://code.getmdl.io/1.3.0/material.brown-teal.min.css'; 
        break;
    case 4:
        oh =  nh;
        nh = 'https://code.getmdl.io/1.3.0/material.blue_grey-deep_orange.min.css'; 
        break;
    case 5:
        oh =  nh;
        nh = 'https://code.getmdl.io/1.3.0/material.orange-light_blue.min.css'; 
        break;
    case 6:
        oh =  nh;
        nh = 'https://code.getmdl.io/1.3.0/material.green-deep_orange.min.css';
        break;
    case 7:
        oh =  nh;
        nh = 'css/material.min.css';
        break;
} 
curr = (curr+1)%8;
$('link[href="'+oh+'"]').attr('href',nh);
  window.reload();
});