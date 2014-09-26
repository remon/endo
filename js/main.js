$(document).ready(function() {
    $('#pagepiling').pagepiling({
         sectionsColor: ['#fff','#3399CC', '#4BBFC3', '#2C3E50'],
        //sectionsColor: ['#fff','#3399CC', '#4BBFC3', '#2C3E50', '#3399CC', '#000'],
        anchors: ['Home', 'Techs',  'Contact'],
    menu: '#myMenu',
       navigation: {
            'textColor': '#000',
            'bulletsColor': '#000',
            'position': 'right',
            'tooltips': ['Home', 'Technologies',  'Contact']
        }   
        
    });
});