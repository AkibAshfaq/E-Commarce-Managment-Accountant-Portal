function producttableview(pID, pName, category, price, Available, Stocked){

    var tbl = document.getElementById("Producttable");

    var row = document.createElement("tr");
    row.innerHTML=`
            <td>${pID}</td>
            <td>${pName}</td>
            <td>${category}</td>
            <td>${price}</td>
            <td>${Available}</td>
            <td>${Stocked}</td>
    `;

    tbl.appendChild(row);

    }
    
function ordertableview(oID, cID, date, price){

    var tbl = document.getElementById("ordertable");

    var row = document.createElement("tr");
    row.innerHTML=`
            <td>${oID}</td>
            <td>${cID}</td>
            <td>${date}</td>
            <td>${price}</td>
    `;

    tbl.appendChild(row);

}

    