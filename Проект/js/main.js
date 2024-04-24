
function openMenu(){
    if(document.getElementById('menu_block').style.display != "flex"){
        document.getElementById('menu_block').style.display = "flex";
    }
    else{
        document.getElementById('menu_block').style.display = "none";
    }  
}



scale = 0;
document.getElementById('scale').innerHTML = scale;
const count = 40;

for (let i = 2; i < count; i++){
    document.getElementById('footer_' + i).style.display = "none";
}

function next(number, image){
    for (let i = 1; i < count; i++){
        document.getElementById('body').style.background = `url('img/${image}')`;
        document.getElementById('body').style.backgroundSize = "cover";
        document.getElementById('body').style.backgroundPosition = "center";
        if (i !== number){
            document.getElementById('footer_' + i).style.display = "none";
        }
        else{
            document.getElementById('footer_' + number).style.display = "block";
        }
    }
}

function check1(){
    if(document.getElementById('1.1').value === '0,0002' || document.getElementById('1.1').value === '0.0002'){
        scale += 10;
        document.getElementById('1.1').style.borderColor = 'rgb(0, 226, 0)';
    }
    else{
        document.getElementById('1.1').style.borderColor = 'red';
    }
    if(document.getElementById('1.2').value === '0,0063 0,9991' || document.getElementById('1.2').value === '0.0063 0.9991'){
        scale += 10;
        document.getElementById('1.2').style.borderColor = 'rgb(0, 226, 0)';
    }
    else{
        document.getElementById('1.2').style.borderColor = 'red';
    }
    if(document.getElementById('1.3').value === '0,2694' || document.getElementById('1.3').value === '0.2694'){
        scale += 10;
        document.getElementById('1.3').style.borderColor = 'rgb(0, 226, 0)';
    }
    else{
        document.getElementById('1.3').style.borderColor = 'red';
    }
    if(document.getElementById('1.4').value === '0,0361' || document.getElementById('1.4').value === '0.0361'){
        scale += 10;
        document.getElementById('1.4').style.borderColor = 'rgb(0, 226, 0)';
    }
    else{
        document.getElementById('1.4').style.borderColor = 'red';
    }
    if(document.getElementById('1.5').value === '0,1756' || document.getElementById('1.5').value === '0.1756'){
        scale += 10;
        document.getElementById('1.5').style.borderColor = 'rgb(0, 226, 0)';
    }
    else{
        document.getElementById('1.5').style.borderColor = 'red';
    }

    document.getElementById('scale').innerHTML = scale;
    document.getElementById('check').style.display = "none";
    document.getElementById('prevAfterCheck').style.display = "none";
    document.getElementById('nextAfterCheck').style.display = "block";
}

function check2(){
    if(document.getElementById('2.1').value === '0.05 0.0833 0.0333' || document.getElementById('2.1').value === '0,05 0,0833 0,0333'){
        scale += 10;
        document.getElementById('2.1').style.borderColor = 'rgb(0, 226, 0)';
    }
    else{
        document.getElementById('2.1').style.borderColor = 'red';
    }
    document.getElementById('scale').innerHTML = scale;
    document.getElementById('check_2').style.display = "none";
    document.getElementById('prevAfterCheck_2').style.display = "none";
    document.getElementById('nextAfterCheck_2').style.display = "block";
}

function check3(){
    if(document.getElementById('3.1').value === '0.9 1.8' || document.getElementById('3.1').value === '0,9 1,8'){
        scale += 10;
        document.getElementById('3.1').style.borderColor = 'rgb(0, 226, 0)';
    }
    else{
        document.getElementById('3.1').style.borderColor = 'red';
    }
    document.getElementById('scale').innerHTML = scale;
    document.getElementById('check_3').style.display = "none";
    document.getElementById('prevAfterCheck_3').style.display = "none";
    document.getElementById('nextAfterCheck_3').style.display = "block";
}

