function salarytableview(eID, ename, edept, baseSalary, incPercent, ammount, date, perform){
        var tbl = document.getElementById("SalaryTable");

        var row = document.createElement("tr");
        row.innerHTML=`
                <td>${eID}</td>
                <td>${ename}</td>
                <td>${edept}</td>
                <td>${baseSalary}</td>
                <td>${incPercent}</td>
                <td>${ammount}</td>
                <td>${date}</td>
                <td>${perform}</td>
        `;

        tbl.appendChild(row);

        row.addEventListener("click", () => {
                
                document.getElementById("empId").value = eID;
                document.getElementById("increment").value = incPercent;

                document.getElementById("PempId").value = eID;

        });

}

