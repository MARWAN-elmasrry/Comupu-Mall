let pEl1=document.getElementById("prod1-el")
let pEl2=document.getElementById("prod2-el")
let pEl3=document.getElementById("prod3-el")
let pEl4=document.getElementById("prod4-el")

let count1=0
let count2=0 
let count3=0
let count4=0

function inc1(){
    count1 += 1
    pEl1.textContent=count1
}
function dec1(){
    count1 -= 1
    pEl1.textContent=count1
}
// =====================
function inc2(){
    count2 += 1
    pEl2.textContent=count2
}
function dec2(){
    count2 -= 1
    pEl2.textContent=count2
}
// ======================
function inc3(){
    count3 += 1
    pEl3.textContent=count3
}
function dec3(){
    count3 -= 1
    pEl3.textContent=count3
}
// =====================
function inc4(){
    count4 += 1
    pEl4.textContent=count4
}
function dec4(){
    count4 -= 1
    pEl4.textContent=count4
}