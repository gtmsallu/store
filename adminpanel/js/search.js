let searchTxt=document.getElementById('search');
searchTxt.addEventListener("input", function () {
    let inputVal=searchTxt.value.toLowerCase();
    let srchTable=document.getElementsById('srchTable');
    Array.from(srchTable).forEach(function (element) {
        let tblData=document.getElementsByClassName('srch')[0].innerText;
        if (tblData.includes(inputval)) {
            element.style.display="block";
        } else {
            element.style.display="none";

        }

    
        
    });
})