function check(){
    if(numberform.no.value>=0 && numberform.no.value<50){
        alert('頑張りましょう');
    }else if(numberform.no.value>=50 && numberform.no.value<80){
        alert('よくできました');
    }else if(numberform.no.value>=80){
        alert('大変よくできました');
    }
}