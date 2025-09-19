function ApproveValid(){
    
    var pname = document.getElementById("productname").value;
    var price = parseFloat(document.getElementById("productprice").value);
    var dept = document.getElementById("Depertment").value;
    var reason = document.getElementById("productreason").value;
    var adate = document.getElementById("ApDate").value;
    var apname = document.getElementById("Approvedby").value;
    //var pdate = "Later";

    if(pname == "" || isNaN(price) || dept == "" || reason == "" || adate == "" || apname == ""){
        alert("Fil the form first" );
        return false;
    }else{
        return true;
    }
    return false;
}

function tableview(eID, ename, ammount, edept, ereason, apdate, apname, rcdate, rcname){

    var tbl = document.getElementById("expenseTable");

    var row = document.createElement("tr");
    row.innerHTML=`
            <td>${eID}</td>
            <td>${ename}</td>
            <td>${ammount}</td>
            <td>${edept}</td>
            <td>${ereason}</td>
            <td>${apdate}</td>
            <td>${apname}</td>
            <td>${rcdate}</td>
            <td>${rcname}</td>

    `;

    tbl.appendChild(row);

    }


