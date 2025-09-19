
function refundtableview(rid, oid, cid, rpid, rpname, rpquantity, rammount, rreason, rstatus, rdate){
        var tbl = document.getElementById("refundtable");
        var row = document.createElement("tr");
        row.innerHTML=`
                <td>${rid}</td>
                <td>${oid}</td>
                <td>${cid}</td>
                <td>${rpid}</td>
                <td>${rpname}</td>
                <td>${rpquantity}</td>
                <td>${rammount}</td>
                <td>${rreason}</td>
                <td>${rstatus}</td>
                <td>${rdate}</td>
        `;

        tbl.appendChild(row);

        row.addEventListener("click", () => {
                
                document.getElementById("refundid").value = rid;

        });

}


