function displayMenu(){
    let myMenu = document.getElementById('navigation');
    if(myMenu.style.display == "block"){
        myMenu.style.display = "none";
    }
    else{
        myMenu.style.display = "block";
    }
}

window.onscroll = function(){displayScrollTotop(),slideClients(); slideServices(); rotateWhoWeAre(), displayWhatWeDO(),  displayAboutImg()};
function slideClients(){
    if (document.body.scrollTop > 3000 || document.documentElement.scrollTop > 3000){
        /* document.getElementById('client1').classList.toggle('slideFromLeft');
        document.getElementById('client2').classList.toggle('slideFromDown');
        document.getElementById('client3').classList.toggle('slideFromRight'); */document.getElementById('clients').style.display = "block";
    }
    else{
        document.getElementById('clients').style.display = "none";
    }
}
function slideServices(){
    if(document.body.scrollTop > 300 || document.documentElement.scrollTop > 300){
        /* document.getElementById('webDevelopmentServ').classList.toggle('webDevelopmentServ')
        document.getElementById('digitalMarketingServ').classList.toggle('digitalMarketingServ');
        document.getElementById('seoServ').classList.toggle('seoServ'); */
        document.getElementById('webDevelopmentServ').className = "webDevelopmentServ";
        document.getElementById('digitalMarketingServ').className = "digitalMarketingServ";
        document.getElementById('seoServ').className = "seoServ";
    }
    else{
        document.getElementById('webDevelopmentServ').className = "webDevelopment";
        document.getElementById('digitalMarketingServ').className = "digitalMarketing";
        document.getElementById('seoServ').className = "seo";
    }
    
}
function rotateWhoWeAre(){
    if(document.body.scrollTop > 800 || document.documentElement.scrollTop > 800){
        document.getElementById('whoWeAre').className = "whoWeAreRotate";
    }
    else{
        document.getElementById('whoWeAre').className = "";
    }
}

//display what we do texts
function displayWhatWeDO(){
    if(document.documentElement.scrollTop > 50){
        document.getElementById('texts').style.display = "block";
    }
    else{
        document.getElementById('texts').style.display = "none";
    }
}

//display scroll to top on scroll
function displayScrollTotop(){
    if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
        document.getElementById('to_top').style.display = "block";
    }
    else{
        document.getElementById('to_top').style.display = "none";
    }
}

//display about image
/* function displayAboutImg(){
    if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
        document.querySelector('.img').style.display ="block";
    }
    else{
        document.querySelector('.img').style.display ="none";
    }
} */