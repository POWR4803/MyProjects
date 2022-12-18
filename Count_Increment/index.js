let save_el = document.getElementById("save_el");
let count_el = document.getElementById("count_el");
console.log(count_el);
let count = 0;
function inc(){
    count=count+1;
    count_el.innerText = count;
    console.log(count);    
}
function save(){
var entry = count +"-";
save_el.innerText += entry;
    console.log(entry);
}
